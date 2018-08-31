  

![](https://qqadapt.qpic.cn/txdocpic/0/fe1a9ab5afbcb69d711b76b177a46a8f/0)

网易云音乐热评调用API

CcDalao

![](//qqadapt.qpic.cn/txdocpic/0/818d3b98c045ccea67ce3c68a9877489/0)

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
![](http://cc.yunun.cc/usr/uploads/2018/08/243104277.png)
![](//qqadapt.qpic.cn/txdocpic/0/818d3b98c045ccea67ce3c68a9877489/0)

关于网易云音乐接口


瞎猫碰到死耗子

![](https://qqadapt.qpic.cn/txdocpic/0/d15d1ab2389655c857792cc79b70f06d/0)

\- The End -
