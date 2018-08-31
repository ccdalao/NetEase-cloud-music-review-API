<?php
/*
CcDalao
获取网易云音乐中歌单中的热评信息
A_PL_0_
*/
if ($_GET['id']) {
    $musicid = $_GET['id'];
    $offset  = $_GET['offset'];
    $time = 0;
    $arr = 0;
    $jsonStr = file_get_contents('https://music.163.com/api/v1/resource/comments/A_PL_0_' . $musicid . ''.$offset.'', false, $context);
    $jsonStrs = json_decode($jsonStr, true);
    foreach ($jsonStrs['comments'] as $val) {
        $time++;
        $arr++;
        $m_author = $val['user']['nickname'];
        $m_comment = $val['content'];
            $arr = array(
            'code' => "$time",
            'author' => $m_author,
            'comment' => "$m_comment"
        );
       $arrr[] = $arr;
        
    }
 

exit(json_encode($arrr));

}

