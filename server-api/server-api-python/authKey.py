#!/usr/bin/env python3`
# -*- coding: utf-8 -*-

# author admin@elesos.com

from flask import Flask
from flask import request

import requests

app = Flask(__name__)


appid  = 'your appid'
secret = 'your secret'
@app.route('/authKey', methods=['GET', 'POST'])
def get_authKey():
    userid=request.values.get('userid','')
    payload={'appid':appid, 'secret':secret, 'userid':userid} 
    r=requests.post('https://api.starRTC.com/aec/authKey', params=payload)
    return r.text


if __name__ == '__main__':
    app.debug = True
    app.run(host='0.0.0.0')
