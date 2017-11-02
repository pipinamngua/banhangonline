<!DOCTYPE html>
<html>
<head>
	<title>Demo Admin quan ly chat</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="http://localhost:3000/socket.io/socket.io.js"></script>
	<style type="text/css">
		body{
			background-color: yellow
		}

		#left{
			width: 20%;
			float: left;
			border:solid 1px pink;
		}

		#right{
			width: 80%;
			float: right;
		}

		#roomHienTai{
			background-color: gray;
			width: 100px;
			color: white;
			float: right;
		}
	</style>
</head>
<body>
	<input type="text" id="txtChannel" />
	<input type="button" id="btnTaoChannel" value="Tạo room" />
	<div id="left">
		<h3>Room đang có</h3>
		<div id="channelHienCo"></div>
	</div>
	<h4 id="channelHienTai">...</h4>
	<div id="right">
		<div id="listMessage"></div>
			<input type="text" id="txtMessage" />
			<input type="button" id="btnMessage" value="Send" />
		
	</div>
	<script>
		var socket = io("http://localhost:3000");

		socket.on('admin-send-data',function(data){
			$('#listMessage').append('<p>Admin'+':'+data+'</p>');
		});
		
		socket.on('client-1',function(data){
			var result = JSON.parse(data);
			$('#listMessage').append('<p>'+result.name+':'+result.content+'</p>');
		});

		socket.on('server-send-listchannel',function(data){
			$('#channelHienCo').html("");
			data.map(function(r){
				$('#channelHienCo').append('<h4 class="room">'+ r +'</h4>');
			});
			
		})
		$(document).ready(function(){
			$("#btnTaoChannel").click(function(){
				socket.emit('tao-room',$('#txtChannel').val());
			});

			$('#btnMessage').click(function(){
				socket.emit('client-1',$('#txtMessage').val());
			});
		});


	</script>
</body>
</html>