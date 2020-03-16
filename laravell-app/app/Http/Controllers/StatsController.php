<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuctionStat;

class StatsController extends Controller
{
    public function getstats()
    {
        $hops = 100;
        $nextcursor = 0;
        $keys = [];
        for($i=0; $i < $hops; $i++) {
            $ntry = \Illuminate\Support\Facades\Redis::scan($nextcursor, 'match', '*stats:*');
            if($ntry[1] != []) {
                foreach($ntry[1] as $ntr) { //обрабатывает по несколько сразу(проблема)
                array_push($keys, $ntr);
                }
            }
            $nextcursor = $ntry[0];
        } 
        $inf = \Illuminate\Support\Facades\Redis::mget($keys);
        foreach($inf as $i) {
            $p = json_decode($i, TRUE);
            AuctionStat::create([
                'requestid' => $p['requestid'],
                'bidresponse' => $p['bidresponse'],
                'creativeid' => $p['creativeid'],
                'userip' => $p['userIp']
            ]);
        }
    }
}
