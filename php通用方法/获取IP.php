<?php

    /**
     * 获取客户端ip，包括CDN
     * @return string
     */
    public static function getClientIP() {
        $ip = isset($_SERVER["HTTP_CDN_SRC_IP"])? $_SERVER["HTTP_CDN_SRC_IP"]:'';
        if(empty($ip)){
            $ip = isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : '';
        }
        if(empty($ip)) {
            $ip = isset($_SERVER["HTTP_CLIENT_IP"]) ? $_SERVER["HTTP_CLIENT_IP"] : '';
        }

        if(empty($ip)) {
            $ip = isset($_SERVER["HTTP_X_FORWARDED_FOR"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : '';
        }
        return $ip;
    }

?>