#!/usr/bin/env python3
# -*- coding: utf-8 -*-

#author admin@elesos.com
#请参考：https://docs.starrtc.com/en/docs/aec-index.html

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



@app.route('/eventCenter', methods=['GET', 'POST'])
def eventCenter():
    data=request.values.get('data','')    
    if data.strip()=="":
        return echo_0('invalid args')
    #logger.debug(data)

    jsonstr= json.loads(data)
    #logger.debug(jsonstr['action'])
   
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
