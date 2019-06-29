// author: admin@elesos.com

//请参考：https://docs.starrtc.com/en/docs/aec-index.html

const Koa 		 = require('koa');
const bodyParser = require('koa-bodyparser');
const router 	 = require('koa-router')();
const request 	 = require('request');

const app 	     = new Koa();
const crypto 	 = require('crypto');

// parse request body
app.use(bodyParser());


//log request url
app.use(async (ctx, next) => {
  console.log(`Process ${ctx.request.method} ${ctx.request.url}...`);
  await next();
});




router.get('/eventCenter', async (ctx, next) => {
  var data = ctx.request.query.data || null;  
  ctx.response.type = 'json';
  if(!data){
    ctx.response.body = echo_0('invalid args');
    return;
  }
   
  json_obj = JSON.parse(data);

  
  if('AEC_GROUP_CREATE' === json_obj.action){
	//TODO
    var groupId = 10010;
    ctx.response.body = echo_1(groupId);
    return;
  }
  // TODO process other actions
  
  
  ctx.response.body = echo_0('unkown action'); 
  return;
});


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
