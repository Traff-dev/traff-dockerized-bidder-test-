<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Redis;
use App\Creative;

class TestCreatives extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = json_encode(array('IAB22'));
        // $testcreative = [
        //     'iabCategory' => $cats,
        //     'type' => 'banner',
        //     'imgContainer' => '',
        //     'cur' => 'USD',
        //     'sizeW' => '728',
        //     'sizeH' => '90',
        //     'cpm' => '1.3',
        //     'pos' => '3',
        //     'targetGender' => 'F',
        //     'targetAgeMin' => '18',
        //     'targetAgeMax' => '25',
        //     'clicks' => 0,
        //     'status' => true,
        // ];
$creativesarray = [
    [
        'leadprice' => '19',
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "48";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "1AXZ8SQTB92AHHR8P0R2";
       amzn_assoc_width = "728";
       amzn_assoc_height = "90";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '728',
       'sizeH' => '90',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => '18.5',
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "48";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "1C2DCA89MFDQEW4V29G2";
       amzn_assoc_width = "728";
       amzn_assoc_height = "90";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '728',
       'sizeH' => '90',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => '30',
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "48";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "1EY4MZ2GCQM5NQGC0W82";
       amzn_assoc_width = "728";
       amzn_assoc_height = "90";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '728',
       'sizeH' => '90',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => '25',
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "48";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "1251A3F6SWDFFYV1QKR2";
       amzn_assoc_width = "728";
       amzn_assoc_height = "90";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '728',
       'sizeH' => '90',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => '25',
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "48";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "1BK7PCPFTY89J63ZQY02";
       amzn_assoc_width = "728";
       amzn_assoc_height = "90";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '728',
       'sizeH' => '90',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => '25',
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "48";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "1K044H342P766PEGPHR2";
       amzn_assoc_width = "728";
       amzn_assoc_height = "90";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '728',
       'sizeH' => '90',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => '25',
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "12";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "0R61R6MJW7WCRSHE2R82";
       amzn_assoc_width = "300";
       amzn_assoc_height = "250";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '300',
       'sizeH' => '250',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => '25',
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "12";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "11A985V7GY929PZJZW02";
       amzn_assoc_width = "300";
       amzn_assoc_height = "250";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '300',
       'sizeH' => '250',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => '25',
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "12";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "14W6B1DT6ZP60BK1Q582";
       amzn_assoc_width = "300";
       amzn_assoc_height = "250";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '300',
       'sizeH' => '250',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => 15,
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "12";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "18J4178WT5KAKCCXEGR2";
       amzn_assoc_width = "300";
       amzn_assoc_height = "250";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '300',
       'sizeH' => '250',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => 4,
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "12";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "1KTR8ZDFJV66Y3MW7FG2";
       amzn_assoc_width = "300";
       amzn_assoc_height = "250";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '300',
       'sizeH' => '250',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => 20,
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "12";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "1MVH58M23ZXK4XAYT8R2";
       amzn_assoc_width = "300";
       amzn_assoc_height = "250";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '300',
       'sizeH' => '250',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => 29.4,
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "14";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "13PB38VVDK8PNJC7GG02";
       amzn_assoc_width = "160";
       amzn_assoc_height = "600";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '160',
       'sizeH' => '600',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => 2.4,
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "14";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "1VKX5219ZHHA5EBXP9G2";
       amzn_assoc_width = "160";
       amzn_assoc_height = "600";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '160',
       'sizeH' => '600',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => 21.5,
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "14";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "0H46YF4BZC5BDHVQCKG2";
       amzn_assoc_width = "160";
       amzn_assoc_height = "600";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '160',
       'sizeH' => '600',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => '2.5',
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
             <script type="text/javascript">
                   amzn_assoc_ad_type = "banner";
            amzn_assoc_marketplace = "amazon";
            amzn_assoc_region = "US";
            amzn_assoc_placement = "assoc_banner_placement_default";
            amzn_assoc_campaigns = "carelectronics";
            amzn_assoc_banner_type = "category";
            amzn_assoc_p = "14";
            amzn_assoc_isresponsive = "false";
            amzn_assoc_banner_id = "0EPYKA68XE8A2X33RFR2";
            amzn_assoc_width = "160";
            amzn_assoc_height = "600";
            amzn_assoc_tracking_id = "traff03c-20";
            amzn_assoc_linkid = "{{link_id}}";
             </script>
             <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
            </div>',
       'sizeW' => '160',
       'sizeH' => '600',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => '15',
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "14";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "0FM3GMJ8YPQEJYD6T702";
       amzn_assoc_width = "160";
       amzn_assoc_height = "600";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '160',
       'sizeH' => '600',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => '18',
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "14";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "152YTAEXH7BMBZMVQKR2";
       amzn_assoc_width = "160";
       amzn_assoc_height = "600";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '160',
       'sizeH' => '600',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => '25',
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "21";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "1MCDNYPXPVHE1W9M5JR2";
       amzn_assoc_width = "125";
       amzn_assoc_height = "125";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '125',
       'sizeH' => '125',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => '24.1',
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "21";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "0K44DAHFSBZYK81XPA02";
       amzn_assoc_width = "125";
       amzn_assoc_height = "125";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '125',
       'sizeH' => '125',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ],
    [
        'leadprice' => '25',
        'iabCategory' => $cats,
        'type' => 'banner',
        'imgContainer' => '<div class="alignleft">
        <script type="text/javascript">
              amzn_assoc_ad_type = "banner";
       amzn_assoc_marketplace = "amazon";
       amzn_assoc_region = "US";
       amzn_assoc_placement = "assoc_banner_placement_default";
       amzn_assoc_campaigns = "carelectronics";
       amzn_assoc_banner_type = "category";
       amzn_assoc_p = "21";
       amzn_assoc_isresponsive = "false";
       amzn_assoc_banner_id = "1TZ5KVXFJF1CAJE6XQ02";
       amzn_assoc_width = "125";
       amzn_assoc_height = "125";
       amzn_assoc_tracking_id = "traff03c-20";
       amzn_assoc_linkid = "{{link_id}}";
        </script>
        <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
       </div>',
       'sizeW' => '125',
       'sizeH' => '125',
       'targetGender' => 'M',
       'targetAgeMin' => '18',
       'targetAgeMax' => '45',
    ]
];


$n = 1;
    foreach($creativesarray as $creative) {
        $n++;
        preg_match('/id = ".*";/', $creative['imgContainer'], $out);
            $creativeid = str_replace(['id = "', '";'], '', $out[0]);
            foreach(json_decode($creative['iabCategory'], TRUE) as $cat) {
                \Illuminate\Support\Facades\Redis::set($n.':'.$cat.':'.$creative['type'].':'.$creative['sizeW'].':'.$creative['sizeH'].':'.'M:'.$creative['targetAgeMin'].':'.$creative['targetAgeMax'], 
                json_encode(['leadprice' => $creative['leadprice'], 'iab' => 'IAB22', 'cpm' => 0.3, 'creativeid' => $creativeid, 'campaignid' => 'T'.date('md', time()).$n, 'image' => $creative['imgContainer']]));
            }
        }
    }
}
