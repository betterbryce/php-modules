<?php

    //获取访问用户的浏览器的信息
    public static function getBrowser($Agent)
    {
        $browser = 'Unknow';//未知

        $brower = array(
            'MSIE',
            'Firefox',
            'QQBrowser',
            'QQ/',
            'UCBrowser',
            'MicroMessenger',
            'Edge',
            'Chrome',
            'Opera',
            'OPR',
            'Safari',
            'Trident/',
            'Maxthon',
            '360SE',
            'The World',
            'Tencent Traveler',
            'Internet Explorer',
        );

        foreach($brower as $bro => $val){
            if(stripos($Agent, $val) !== false){
                $browser = $val;
                break;
            }
        }

        return $browser;
    }

?>