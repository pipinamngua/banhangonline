<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Bootstrap Chat Box Example</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="chat/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME  CSS -->
    <link href="chat/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="chat/css/style.css" rel="stylesheet" />
    <!-- USING SCRIPTS BELOW TO REDUCE THE LOAD TIME -->
    <!-- CORE JQUERY SCRIPTS FILE -->
    <script src="chat/js/jquery.js"></script>
    <!-- CORE BOOTSTRAP SCRIPTS  FILE -->
    <script src="chat/js/bootstrap.js"></script>
    <script type="text/javascript" src="http://localhost:3000/socket.io/socket.io.js"></script>
</head>
<body>

    <div id="register">
            <h1>Register</h1>
        <form method="POST" action="send-message">
            {{ csrf_field() }}
            Name:<input type="text" name="name" id="txtName" placeholder="Enter your name" value="{{ Auth::check()?Auth::user()->name:null }}" />
            Email:<input type="email" name="email" id="txtEmail" placeholder="Enter your email" value="{{ Auth::check()?Auth::user()->email:null }}"/>
        
    </div>
    <div class="container" id="formChat">
        <div class="row pad-top pad-bottom">


            <div class=" col-lg-12 col-md-12 col-sm-12">
                <div class="chat-box-div">
                    <div class="chat-box-head">
                        GROUP CHAT HISTORY
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="fa fa-cogs"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><span class="fa fa-map-marker"></span>&nbsp;Invisible</a></li>
                                    <li><a href="#"><span class="fa fa-comments-o"></span>&nbsp;Online</a></li>
                                    <li><a href="#"><span class="fa fa-lock"></span>&nbsp;Busy</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><span class="fa fa-circle-o-notch"></span>&nbsp;Logout</a></li>
                                </ul>
                            </div>
                    </div>
                    <div class="panel-body chat-box-main" id="listMessage">
                        <div id="hiUsername"></div>
                        @foreach($message as $item)
                            <div class="chat-box-left" >
                               {{ $item->content}}
                            </div>
                            <div class="chat-box-name-left">
                                <img src="chat/img/user.png" alt="bootstrap Chat box user image" class="img-circle" />
                                {{ $item->name }}: {{ $item->created_at}}
                            </div>
                            <hr class="hr-clas" />
                        @endforeach

                       
                    </div>
                    <div class="chat-box-footer">
                        <div class="input-group">
                            <input type="text" class="form-control" name="content" placeholder="Enter Text Here..." id="txtMessage">
                            {!! $errors->first('content','<p style="color:red">:message</p>') !!}
                            <span class="input-group-btn">
                                <input class="btn btn-info" type="submit" id="btnMessage">SEND</button>
                            </span>
                        </div>
                    </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <script>
        var socket = io("http://localhost:3000");
        socket.on("client-1",function(data){
            
            var result = JSON.parse(data);
            var content = '<div class="chat-box-left" >'+result.content+'</div><div class="chat-box-name-left"><img src="chat/img/user.png" alt="bootstrap Chat box user image" class="img-circle" />'+result.name+':'+result.date_send+'</div>';
            $("#listMessage").append(content);
        });

        socket.on('admin-send-data',function(data){
            console.log(data);
            var content = '<div class="chat-box-left" >'+data+'</div><div class="chat-box-name-left"><img src="chat/img/user.png" alt="bootstrap Chat box user image" class="img-circle" />Admin</div>';
            $("#listMessage").append(content);
        });

    </script>

</body>

</html>
