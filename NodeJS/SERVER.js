var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var redis = require('redis');

server.listen(3000);
io.on('connection', function (socket) {

  console.log("new client connected: "+socket.id);
  var redisClient = redis.createClient();
  redisClient.subscribe('client-1');

  redisClient.on("message", function(channel,data) {
      //console.log(data);
      data = JSON.parse(data);
      //console.log(data.channel);
      //socket.emit(channel, data);

      socket.on(data.channel,function(data){
          io.sockets.emit(data.channel, data);
      });
  });

  socket.on('client-1',function(data){
      console.log(data);
      io.sockets.emit('admin-send-data',data);
  });

  socket.on('tao-room',function(data){
      socket.join(data);
      socket.Phong = data;
      var mang=[];
      for(r in socket.adapter.rooms)
      {
        console.log(r);
        mang.push(r);
      }
      io.sockets.emit('server-send-listchannel',mang);
  });

  socket.on('disconnect', function() {
    redisClient.quit();
  });

});