  

![](https://camo.githubusercontent.com/11242f3ac0e0085254f74aef68fc518501121189/68747470733a2f2f717161646170742e717069632e636e2f7478646f637069632f302f66653161396162356166626362363964373131623736623137376134366138662f30)

### **网易云音乐热评调用API**

CcDalao


Github：[https://github.com/ccdalao/NetEase-cloud-music-review-API](https://github.com/ccdalao/NetEase-cloud-music-review-API)

dome：[https://blog.ccdalao.cn/blog/some/musicv2/musicv2.html](https://blog.ccdalao.cn/blog/some/musicv2/musicv2.html)



应用：模仿废弃(后被接管)Hitokoto\[一言\]

###### 一言(Hitokoto)网创立于2016年，隶属于萌创Team，目前网站主要提供一句话服务。不论在哪里，总有那么几个句子能穿透你的心。把这些句子汇聚起来，传递更多的感动。简单来说，一言(Hikototo)指的就是一句话，可以是动漫中的台词，也可以是网络上的各种小段子。留下你所喜欢的那一句话，与大家分享，这就是一言(Hitokoto)存在的目的。

感谢：接管Hitokoto项目的负责人的指导
     v1：基础项目
     
     v1.1：在线看热评猜歌曲
     
     v1.2：qqbot机器人插件
     
     v2.0：在V1的基础上，不再通过手动传入歌曲id进行获取，而是通过传入歌单，获取整个歌单


网易云音乐热评调用API

使用教程

新建demo.html文件

引入jquery文件（本api运行需要开源插件jq支持（后续考虑使用原生js））

实例（获取单曲中的普通评论）

```javascript
   var su = parseInt(Math.random() * 15) //随机生成0-15之间的随机数
    
            $.ajax({
                url: 'm2.php?id='+$('#music_outchain_id').val(),//引入song.php
                type: 'get',//请求方式get
                dataType: 'json',

                success: function (data) {
                    var str = data
                    $("#nn-2").html("获取歌单" + $('#music_outchain_id').val() + "热评");
                    $("#n-2").html(str[su].comment);
                }
            });
```


网页实例图片：
![](https://blog.ccdalao.cn/usr/uploads/2021/02/3045342982.png)
---------

千山万水总是情，给个star行不行

![](https://camo.githubusercontent.com/7ceafa4b0c41ae17630bae426eb29a46e4cbb58e/68747470733a2f2f717161646170742e717069632e636e2f7478646f637069632f302f64313564316162323338393635356338353737393263633739623730663036642f30)

\- The End -
