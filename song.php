<?php

/*
CcDalao
获取网易云音乐中歌曲中的热评信息
2021年2月6日
NetEase-cloud-music-review-API 2.0
*/

if ($_GET['id']) {
    $music_outchain_id = $_GET['id'];
    $Get_music_outchain_contents = file_get_contents('https://music.163.com/api/v2/playlist/detail?id='.$music_outchain_id, false, $context);
    $Get_music_outchain_contents_decode = json_decode($Get_music_outchain_contents, true);
    $id = 0;
    foreach ($Get_music_outchain_contents_decode['playlist']['trackIds'] as $musicid) {
        $id++;
        $musicidarr = array($musicid['id']);
        $musicidarrs[] = $musicidarr;

    }

    function randid($json,$musicids) {
        $musicids = $musicids-1;
        $bb = mt_rand(0,$musicids);
        return($json[$bb][0]);


    }
    $musicidarrs_json = $musicidarrs;
    
    //以上新增功能 从歌单中随机获取id 好久没写代码了。技术变菜了
    // $music_get_id
    
    $music_get_id = randid($musicidarrs,$id);
    
    //下为原代码
     $offset = $_GET['offset'];
    $time = 0;
    $arr = 0;
    $jsonStr = file_get_contents('https://music.163.com/api/v1/resource/comments/R_SO_4_' . $music_get_id . '?limit=15&offset=' . $offset . '', false, $context);
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
