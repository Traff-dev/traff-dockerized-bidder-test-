<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use App\Response;
//use App\Creative;

class BidController extends Controller
{
  public function create()
  {
    return view('requestform');
  }

  public function resetBudget()
  {
    //\Illuminate\Support\Facades\Redis::set('budget:daily', 100);
  }

  public function store(Request $request)
  {
    // $request = (json_decode($request->request, TRUE)) ? json_decode($request->request, TRUE) : false;      
    $newdata = (array) $request->request;

    if($request == false) {
    
      return response('', 400)->header('x-openrtb-version', '2.5')->header('Content-Type', 'application/json');
      exit;
    } else if($request != false and isset($request['id']) and $request['id'] != '' and isset($request['imp'])) {
      $scanparams = '';
      
      $cats = [];
      if(isset($request['site']['publisher']['cat'])) {
        // $scanparams .= '*'.$request['site']['publisher']['cat'][0].':*';
        foreach($request['site']['publisher']['cat'] as $ac) {
          array_push($cats, '*'.$ac.':*');
        }
      } else if(!isset($request['site']['publisher']['cat']) and isset($request['site']['cat'])) {
        // $scanparams .= '*'.$request['site']['cat'][0].':*';
        foreach($request['site']['cat'] as $ac) {
          array_push($cats, '*'.$ac.':*');
        }
      } else if (!isset($request['site']['publisher']['cat']) and !isset($request['site']['cat']) and isset($request['app']['cat'])) {
        foreach($request['app']['cat'] as $ac) {
          array_push($cats, '*'.$ac.':*');
        }
        //$scanparams .= '*'.$request['app']['cat'][0].':*';
      }
      
      // if(!isset($request['imp'][0]['banner']) and !isset($request['imp'][0]['video'])) {
        
      // }

      if(isset($request['imp'][0]['banner'])) {
        $scanparams .= 'banner:*';
        $scanparams .= (isset($request['imp'][0]['banner']['w'])) ? $request['imp'][0]['banner']['w'].':*' : '';
        $scanparams .= (isset($request['imp'][0]['banner']['h'])) ? $request['imp'][0]['banner']['h'].':*' : '';
      }

      if(isset($request['device']['geo']['country'])) {
        $userIp = (isset($request['device']['ip'])) ? $request['device']['ip'] : '';
        $scanparams .= 'ANY*'.$request['device']['geo']['country'].'*';
        // $scanparams .= (isset($request['device']['geo']['city'])) ? $request['device']['geo']['city'].'*' : '';
      } else if(!isset($request['geo']) and isset($request['user']['geo'])) {
        $scanparams .= 'ANY*'.$request['user']['geo']['country'].'*';
        // $scanparams .= (isset($request['user']['geo']['city'])) ? $request['user']['geo']['city'].'*' : '';
      } else if(!isset($request['geo']) and !isset($request['user']['geo'])) {
        $scanparams .= 'ANY:*';
      }

      if(isset($request['device']['ua'])) {
        $agent = new Agent();
        $agent->setUserAgent($request['device']['ua']);
        $scanparams .= ($agent->isMobile()) ? 'MD*' : 'DD*'; 
      }
      
      // if(isset($request['user']['yob'])) {
      //   $yob = $request['user']['yob'].':*';
      // }
      
    } else if($request == false or !isset($request['id']) or !isset($request['imp'])) {
      return response('', 400)->header('x-openrtb-version', '2.5')->header('Content-Type', 'application/json');
    }
 
    //$creative = [];
    // foreach($cats as $c) {
    //   array_push($creative, \Illuminate\Support\Facades\Redis::scan(0, 'match', $c.$scanparams));
    // }
    
    $hops = 15;
    $keys = [];
    $nextcursor = 0;
    $maxshow = 50;
    // foreach($creative as $critem) {
    //   $nextcursor = $critem[0];
    //   foreach($critem[1] as $cre) {
    //     array_push($keys, $cre);
    //   }
    // }

    foreach($cats as $c) {
    for($i=0; $i < $hops; $i++) {
        $ntry = \Illuminate\Support\Facades\Redis::scan($nextcursor, 'match', $c.$scanparams);
        if($ntry[1] != []) {
          foreach($ntry[1] as $ntr) { //обрабатывает по несколько сразу(проблема)
            $incr = \Illuminate\Support\Facades\Redis::get($ntr.':incr');
            if($incr != null) {
              if($incr < $maxshow) {
                array_push($keys, $ntr);
                \Illuminate\Support\Facades\Redis::incr($ntr.':incr');
              }
            } else if($incr == null) {
              array_push($keys, $ntr);
              \Illuminate\Support\Facades\Redis::incr($ntr.':incr');
            }
          }
        }
        $nextcursor = $ntry[0];
      }
      $nextcursor = 0;
    }
    if($keys != []) {
      $mget = \Illuminate\Support\Facades\Redis::mget($keys);
    } else {
      return response('No Content', 204)->header('x-openrtb-version', '2.5')->header('Content-Type', 'application/json');
      exit;
    }
    
//    $maxv['leadprice'] = 0;
    
    // foreach($mget as $cr) {
    //   $maxv = ($maxv['leadprice'] <= json_decode($cr, TRUE)['leadprice']) ? ['val' => $cr, 'leadprice' => json_decode($cr, TRUE)['leadprice'], 'cpm' => json_decode($cr, true)['cpm']] : $maxv;
    // }
    
    //$resultkey = \Illuminate\Support\Facades\Redis::get($creative[1][0]);
    
    $chkBudget = \Illuminate\Support\Facades\Redis::get('budget:daily');
    
    if(isset($mget[0])) {
      if(json_decode($mget[0],TRUE)) {
      $result = json_decode($mget[0], TRUE);

      //$newcpm = ($request['imp'][0]['bidfloor'] < $result['leadprice'] and $request['at'] == 2 and $chkBudget > ($request['imp'][0]['bidfloor']*2)) ? $request['imp'][0]['bidfloor']*2 : 0.1;
        $newcpm = '0.2';
      $bidresponse = json_encode([
        'id' => $request['id'],
        'seatbid' => [[
          'seat' => 'traff',
          'bid' => [[
            'id' => 'traff01-'.$result['creativeid'],
            'impid' => $request['imp'][0]['id'],
            'price' => $newcpm,
            'nurl' => 'http://rtb.traff.co/api/nurl?cid='.$result['campaignid'].'&crid='.$result['creativeid'].'&winprice=${AUCTION_PRICE}',
            'iurl' => $result['image'],
            'lurl' => 'http://rtb.traff.co/api/lurl?breq=${AUCTION_ID}&bres=${AUCTION_BID_ID}&r=${AUCTION_LOSS}',
            'cid' => $result['campaignid'],
            'crid' => $result['creativeid'],
            'cat' => $result['iab'],
          ]]
        ]]
      ]);
      $statinf = ['request' => json_encode($request), 'bidresponse' => $bidresponse, 'creativeid' => $result['creativeid'], 'userip' => $userIp];
        \Illuminate\Support\Facades\Redis::set('stats:'.date("d_m:H_i_s:", time()).$request['id'], json_encode($statinf));
      } else {
        return response('No Content', 204)->header('x-openrtb-version', '2.5')->header('Content-Type', 'application/json');
        
      }
      
      \Illuminate\Support\Facades\Redis::INCRBYFLOAT('budget:daily', -$newcpm);
      return response($bidresponse, 200)->header('x-openrtb-version', '2.5')->header('Content-Type', 'application/json');
      //return response(gzencode($bidresponse, 5), 200)->header('x-openrtb-version', '2.5')->header('Content-Type', 'application/json')->header('Content-encoding', 'gzip')->header('Accept-encoding', 'gzip')->header('Content-Length', strlen($bidresponse));
    } else {
      return response('No Content', 204)->header('x-openrtb-version', '2.5')->header('Content-Type', 'application/json');
    }
}

}
// $cpmmin = \Illuminate\Support\Facades\Redis::get($ntr.':min');
// $cpmmax = \Illuminate\Support\Facades\Redis::get($ntr.':max');
// if($request['imp'][0]['bidfloor'] < 0.5) {
//   if($cpmmin != null) {
//     if($request['imp'][0]['bidfloor'] < $cpmmin) {
//       $nmcpm = $request['imp'][0]['bidfloor'];
//       \Illuminate\Support\Facades\Redis::set($ntr.':min', $request['imp'][0]['bidfloor']);
//     } else {
//       $nmcpm = \Illuminate\Support\Facades\Redis::get($ntr.':min');
//     }
//   } else {
//     $nmcpm = $request['imp'][0]['bidfloor'];
//     \Illuminate\Support\Facades\Redis::set($ntr.':min', $request['imp'][0]['bidfloor']);
//   }
//   if($cpmmax != null) {
//     if($request['imp'][0]['bidfloor'] > $cpmmax) {
//       $nmaxcpm = $request['imp'][0]['bidfloor'];
//       \Illuminate\Support\Facades\Redis::set($ntr.':max', $request['imp'][0]['bidfloor']);
//     } else {
//       $nmaxcpm = $request['imp'][0]['bidfloor'];
//       \Illuminate\Support\Facades\Redis::set($ntr.':max', $request['imp'][0]['bidfloor']);
//     }
//   } else {
//     $nmaxcpm = $request['imp'][0]['bidfloor'];
//     \Illuminate\Support\Facades\Redis::set($ntr.':max', $request['imp'][0]['bidfloor']);
//   }
//   $currentCreativeInfo = json_decode(\Illuminate\Support\Facades\Redis::get($ntr), TRUE);
//   $cpmresult = ($nmcpm + $nmaxcpm) / 2;
//   $fp = fopen('/var/www/traff-bidder/public/ci.txt', 'w');
//   fwrite($fp, serialize($currentCreativeInfo['cpm']));
//   fclose($fp);
//   $currentCreativeInfo['cpm'] = number_format($cpmresult, 4);
//   \Illuminate\Support\Facades\Redis::set($ntr, json_encode($currentCreativeInfo));
// }