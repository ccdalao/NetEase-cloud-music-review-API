  

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

    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script> 
    <input type="submit" id="btn" value="btn">
    <br>
    <div><p id="n"></p></div>
    <script>
    $("#btn").click(function(){
    var su = parseInt(Math.random()*20) //随机生成0-20之间的随机数
    var cc = parseInt(Math.random()*1000) //随机生成0-1000之间的随机数
    var id = "504835560";
    var cont = "id=" + id +"&limit=20&offset=" + cc;
       $.ajax({
           url:'song.php', //引入github 中下载的song.php
           type:'get',  //请求方式get
           dataType:'json',
           data:cont,
           success:function(data){
               var str = data
               $("#n").html(str[su].comment); //将获取的评论显示到id为n的元素中
          }
      }); 
    });
    </script>


![](//qqadapt.qpic.cn/txdocpic/0/818d3b98c045ccea67ce3c68a9877489/0)

关于网易云音乐接口

* * *

瞎猫碰到死耗子

![](https://qqadapt.qpic.cn/txdocpic/0/d15d1ab2389655c857792cc79b70f06d/0)

\- The End -
