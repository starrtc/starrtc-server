// author: admin@elesos.com
const Koa 		 = require('koa');
const bodyParser = require('koa-bodyparser');
const router 	 = require('koa-router')();
const request 	 = require('request');

const app 	     = new Koa();
const crypto 	 = require('crypto');

// parse request body
app.use(bodyParser());

var appid      ='your appid';
var secret	   ='your secret';
var guardToken = 'your guardToken';

//log request url
app.use(async (ctx, next) => {
  console.log(`Process ${ctx.request.method} ${ctx.request.url}...`);
  await next();
});
router.get('/authKey', async (ctx, nect) => {
  var f = function(){
    return new Promise(resolve=>{
         var p = get_authKey(appid, secret, ctx.query.userid);
         p.then(function(body){
	   return resolve(body);
	 }).catch(function(err){
           console.log('catch a err');
         });
	}      
     );
  }
  ctx.response.body = await f();
});

function get_authKey(appid, secret, userid){
  return new Promise(function(resolve, reject){
    request.post('https://api.starRTC.com/aec/authKey',
               {form:{appid:appid,secret:secret,userid:userid}},
               function(err, res, body){
                 if(err){
                   return reject(err);
		 }else{
		   return resolve(body);
		 }
               }
              ); 
  }    
  );
}

router.get('/eventCenter', async (ctx, next) => {
  var data = ctx.request.query.data || null;
  var sign = ctx.request.query.sign || null;
  ctx.response.type = 'json';
  if(!data || !sign){
    ctx.response.body = echo_0('invalid args');
    return;
  }
  console.log('sign=' + sign);
  var signature = generateSign(data, guardToken);
  console.log('signature=' + signature);
  if(sign !== signature){
    ctx.response.body = echo_0('invalid sign');
    return;
  }	
  json_obj = JSON.parse(data);
  if('AEC_ACCESS_VALIDATION' === json_obj.action){
    ctx.response.body = echo_1(json_obj.echostr);
    return;  
  }
  if('AEC_GROUP_CREATE' === json_obj.action){
    var groupId = 10010;
    ctx.response.body = echo_1(groupId);
    return;
  }
  // TODO process other actions
  ctx.response.body = echo_0('unkown action'); 
  return;
});

function generateSign(data, guardToken){
  var sign = crypto.createHmac('sha1', guardToken).update(data).digest().toString('base64');
  return sign;
}
function echo_0(data){
  var obj = {"status":0,"data":data};
  return JSON.stringify(obj);
}

function echo_1(data){
  var obj = {"status":1,"data":data};
  return JSON.stringify(obj);
}
//test
router.get('/hello/:name', async (ctx, next) => {
  var name = ctx.params.name;
  ctx.response.body = `<h1>Hello, ${name}!</h1>`;
});



app.use(router.routes());

app.listen(9090);
console.log('app started at port 9090...');
