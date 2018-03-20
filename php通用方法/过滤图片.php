<?php

    //过滤图片
    public static function ContentCtrl($text)
    {

        //过滤img标签
        $content = preg_replace('/<img.*?(?: |\\t|\\r|\\n)?src=[\'"]?(.+?)[\'"]?(?:(?: |\\t|\\r|\\n)+.*?)?>/sim', '[图片]', $text);
        $content = strip_tags($content);//过滤html标签

        return $content;
    }


?>