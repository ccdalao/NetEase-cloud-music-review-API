  

![](https://camo.githubusercontent.com/11242f3ac0e0085254f74aef68fc518501121189/68747470733a2f2f717161646170742e717069632e636e2f7478646f637069632f302f66653161396162356166626362363964373131623736623137376134366138662f30)

### **网易云音乐热评调用API**

CcDalao


Github：[https://github.com/ccdalao/NetEase-cloud-music-review-API](https://github.com/ccdalao/NetEase-cloud-music-review-API)

dome：[http://api.163music.yunun.cc](http://api.163music.yunun.cc)



应用：模仿废弃(后被接管)Hitokoto\[一言\]

###### 一言(Hitokoto)网创立于2016年，隶属于萌创Team，目前网站主要提供一句话服务。不论在哪里，总有那么几个句子能穿透你的心。把这些句子汇聚起来，传递更多的感动。简单来说，一言(Hikototo)指的就是一句话，可以是动漫中的台词，也可以是网络上的各种小段子。留下你所喜欢的那一句话，与大家分享，这就是一言(Hitokoto)存在的目的。

感谢：接管Hitokoto项目的负责人的指导
     v1：基础项目
     v1.1：在线看热评猜歌曲
     v1.2：qqbot机器人插件


网易云音乐热评调用API

使用教程

新建demo.html文件

引入jquery文件（本api运行需要开源插件jq支持（后续考虑使用原生js））

实例（获取单曲中的普通评论）

```javascript
    $("#btn-2").click(function () {
        var su = parseInt(Math.random() * 15) //随机生成0-15之间的随机数
        var id_in = ["36871866", "554242185", "554242185", "29436904", "34497036", "441618579", "504974392",
                "287063", "444356086", "504974392", "35331192", "460578703", "528273459", "426027293", "569214126",
                "541687281", "30031502", "1305547844", "557581476", "557584888", "536570450", "482988775",
                "1300423695", "30854398", "501755851", "499611311", "409649830", "411356967", "511503019", "286602",
                "28815250", "35625821", "523114596", "399353833", "35345243"]; //自定义歌曲id
        var id = id_in[Math.floor(Math.random() * id_in.length)];
        var cont = "id=" + id;
        $.ajax({
            url: 'song.php',//引入song.php
            type: 'get',//请求方式get
            dataType: 'json',
            data: cont,
            success: function (data) {
                var str = data
                $("#nn-2").html("获取歌曲" + id + "热评");
                $("#n-2").html(str[su].comment);
            }
        });
    });
```


网页实例图片：
![](http://cc.yunun.cc/usr/uploads/2018/08/2383745570.gif)
---------
新增(v1.2)qqbot机器人插件 获取网易云音乐热评：
>输入 
>
>`qq plug QqBotApi_MU163CC`
>若提示  
>
>`成功：加载插件 QqBotApi_MU163CC（回调函数['onQQMessage']、定时任务[]）` 
>
>则加载成功

实例图片：
![](http://cc.yunun.cc/usr/uploads/2018/11/1211075128.png)

















千山万水总是情，给个star行不行

![](https://camo.githubusercontent.com/7ceafa4b0c41ae17630bae426eb29a46e4cbb58e/68747470733a2f2f717161646170742e717069632e636e2f7478646f637069632f302f64313564316162323338393635356338353737393263633739623730663036642f30)

\- The End -
