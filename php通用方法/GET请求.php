<?php

    /**
     * GET 请求发送
     * @param $url
     * @return mixed
     * TODO: header 数据添加
     */
    public static function doGet($url) {
        $cl = curl_init();
        $opts = array(
            CURLOPT_URL => $url,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_RETURNTRANSFER => true,
        );
        curl_setopt_array($cl, $opts);
        $data = curl_exec($cl);
        curl_close($cl);
        return $data;
    }

?>