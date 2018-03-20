<?php

    //时间格式化
    public static function dateFormat($time)
    {

        $now_time = time();                    //获取当前时间戳
        $show_time = strtotime($time);         //获取发表时间戳

        $now_time_Y = date("Y");               //获取今年的年数
        $show_time_Y = date("Y",$show_time);   //获取发表时间的年数

        $dur_Y =  $now_time_Y-$show_time_Y;    //时间年数差值
        $dur = $now_time - $show_time;         //获取时间戳差值

        if($dur_Y > 0){
            return date("Y-m-d",$show_time);   //判断不是今年，则直接输出发表时间的年月日
        }
        switch($dur){
            case $dur<0:
                return $time;
            case $dur>=0 && $dur<60:
                return "刚刚";
            case $dur>=60 && $dur<3600:
                return floor($dur/60).'分钟前';
            case $dur>=3600 && $dur<86400:
                return floor($dur/3600).'小时前';
            case $dur>=86400 && $dur <31556926:
                return date("m-d",$show_time);
        }
    }

?>