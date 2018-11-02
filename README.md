  

![](https://camo.githubusercontent.com/11242f3ac0e0085254f74aef68fc518501121189/68747470733a2f2f717161646170742e717069632e636e2f7478646f637069632f302f66653161396162356166626362363964373131623736623137376134366138662f30)

网易云音乐热评调用API

CcDalao

![](https://camo.githubusercontent.com/11242f3ac0e0085254f74aef68fc518501121189/68747470733a2f2f717161646170742e717069632e636e2f7478646f637069632f302f66653161396162356166626362363964373131623736623137376134366138662f30)

Github：[https://github.com/ccdalao/NetEase-cloud-music-review-API](https://github.com/ccdalao/NetEase-cloud-music-review-API)



应用：模仿废弃(后被接管)Hitokoto\[一言\]

###### 一言(Hitokoto)网创立于2016年，隶属于萌创Team，目前网站主要提供一句话服务。不论在哪里，总有那么几个句子能穿透你的心。把这些句子汇聚起来，传递更多的感动。简单来说，一言(Hikototo)指的就是一句话，可以是动漫中的台词，也可以是网络上的各种小段子。留下你所喜欢的那一句话，与大家分享，这就是一言(Hitokoto)存在的目的。

感谢：接管Hitokoto项目的负责人的指导



网易云音乐热评调用API

使用教程

新建demo.html文件

引入jquery文件（本api运行需要开源插件jq支持（后续考虑使用原生js））

实例（获取单曲中的普通评论）

    $("#btn-3").click(function(){
    	var su = parseInt(Math.random() * 20) //随机生成0-20之间的随机数
    	var id = "504835560";  //单曲id
    	var cont = "id=" + id
    	$.ajax({
    		url: 'song_pt.php',
    		//引入github中下载的song.php
    		type: 'get',
    		//请求方式get
    		dataType: 'json',
    		data: cont,
    		success: function(data) {
    			var str = data
    			var yeshu = str[20].total - 20
    			var cc = parseInt(Math.random() * yeshu)
    			var cont_ok = "id=" + id + "&offset=" + cc;
    			$.ajax({
    				url: 'song_pt.php',
    				//引入github中下载的song.php
    				type: 'get',
    				//请求方式get
    				dataType: 'json',
    				data: cont_ok,
    				success: function(data) {
    					var str = data
    					$("#nn-3").html("获取歌曲" + id + "普通评论");
    					$("#n-3").html(str[su].comment);
    				}
    			});
    		}
    	});  
    });

![](//qqadapt.qpic.cn/txdocpic/0/818d3b98c045ccea67ce3c68a9877489/0)
实例图片：
![](http://cc.yunun.cc/usr/uploads/2018/08/2383745570.gif)
![](https://camo.githubusercontent.com/7ceafa4b0c41ae17630bae426eb29a46e4cbb58e/68747470733a2f2f717161646170742e717069632e636e2f7478646f637069632f302f64313564316162323338393635356338353737393263633739623730663036642f30)

关于网易云音乐接口


瞎猫碰到死耗子

![](https://camo.githubusercontent.com/7ceafa4b0c41ae17630bae426eb29a46e4cbb58e/68747470733a2f2f717161646170742e717069632e636e2f7478646f637069632f302f64313564316162323338393635356338353737393263633739623730663036642f30)

\- The End -
