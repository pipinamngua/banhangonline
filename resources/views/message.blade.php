<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="http://localhost:3000/socket.io/socket.io.js"></script>

        <title>Laravel</title>
        
    </head>
    <body>
        
        <input type="text" id="content">
        <button id="send_message">Send message</button>
        <div>
            <a href="" id="append"></a>
        </div>
    </body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            var socket = io.connect('http://localhost:3000');

            $(document).on("click","#send_message" , function(){
                var content  = $("#content").val();
                socket.emit("client-emit_message",content);
            }); 


            socket.on("server-emit-message" , function(data){
                var content_ = data + "</br>";
                $("#append").append(content_);
            });
        });
    </script>
</html>
