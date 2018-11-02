# -*- coding: utf-8 -*-
import json, sys, requests
def onQQMessage(bot, contact, member, content):
	if content == '网易云热评':
		response = requests.get(url='http://api.163music.yunun.cc/Python/QqBotApi.php')
		jsonID = json.loads(response.text)
		comment      = jsonID['comment'];
		commenttitle = jsonID['title'];
		bot.SendTo(contact, 'To:'+member.name+'\n'+comment+'\n歌曲名称:'+commenttitle)
	elif content == '停止':
		bot.Stop()


