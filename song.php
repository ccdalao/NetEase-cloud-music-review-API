<?php
/*
CcDalao
获取网易云音乐中歌曲中的热评信息
*/
if ($_GET['id']) {
    $musicid = $_GET['id'];
    $offset = $_GET['offset'];
    $time = 0;
    $arr = 0;
    $jsonStr = file_get_contents('https://music.163.com/api/v1/resource/comments/R_SO_4_' . $musicid . '?limit=15&offset=' . $offset . '', false, $context);
    $jsonStrs = json_decode($jsonStr, true);
    foreach ($jsonStrs['hotComments'] as $val) {
        $time++;
        $arr++;
        $m_author = $val['user']['nickname'];
        $m_comment = $val['content'];
        $arr = array('code' => "{$time}", 'author' => $m_author, 'comment' => "{$m_comment}");
        $arrr[] = $arr;
    }
    foreach ($jsonStrs as $keys => $vals) {
        $arrs = array($keys => "{$vals}");
        $arrrs[] = $arrs;
    }
    $aaaa = array_slice($arrrs, -2, 1);
    $arrb = array_merge_recursive($arrr, $aaaa);
    exit(json_encode($arrb));
}