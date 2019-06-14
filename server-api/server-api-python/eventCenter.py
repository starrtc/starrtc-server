#!/usr/bin/env python3
# -*- coding: utf-8 -*-

#author admin@elesos.com

from flask import Flask
from flask import request
import json
import logging
import hashlib
import hmac
import base64

logger = logging.getLogger('main')
logger.setLevel(logging.DEBUG)
fh = logging.FileHandler('log.txt')
fh.setLevel(logging.DEBUG)
formatter = logging.Formatter('%(asctime)s - %(name)s - %(message)s')
fh.setFormatter(formatter)
logger.addHandler(fh)



app = Flask(__name__)

guardToken='your guardToken'

@app.route('/eventCenter', methods=['GET', 'POST'])
def eventCenter():
    data=request.values.get('data','')
    sign=request.values.get('sign','')
    if data.strip()=="" or sign.strip()=="":
        return echo_0('invalid args')
    #logger.debug(data)
    m = hmac.new(guardToken, data, hashlib.sha1)
    signature = base64.b64encode(m.digest())
    #logger.debug(signature)
    if sign != signature:
        return echo_0('invalid sign')
    jsonstr= json.loads(data)
    #logger.debug(jsonstr['action'])
    if 'AEC_ACCESS_VALIDATION' == jsonstr['action']:
        return echo_1(jsonstr['echostr'])
    if 'AEC_GROUP_CREATE' == jsonstr['action']:
        groupId = 10010
        return echo_1(groupId)
    #TODO process other action 







    return echo_0('failed')
    




def echo_0(msg):
    return json.dumps({"status":0,"data":msg})
def echo_1(msg):
    return json.dumps({"status":1,"data":msg})
if __name__ == '__main__':
    app.debug = True
    app.run(host='0.0.0.0')
