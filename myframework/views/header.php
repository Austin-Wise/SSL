<html>
<head>
    <title>SSL Workpage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>

        /* primary colors: #30011E, #D7FCD4, #B6CCA1, #B68F40, #545454 */
        body{
            min-height: 100vh;
            box-sizing: border-box;
            font-family: "Lucida Console", "Lucida Sans Typewriter", monaco, "Bitstream Vera Sans Mono";
        }
        nav .active{
            color: #30011E;
        }
        a, #sep{
            text-decoration: none;
            color: #545454;
        }
        nav {
            background-color: #D7FCD4;
            padding: 1rem .5rem;
            width: 100%;
        }
        .down{
            position: relative;
            bottom: -5rem;
        }
        body{
            height: 100vh;
        }
        footer{
            position: absolute;

            width: 100%;
            bottom: -6rem;
        }
        .carousel {
            width:70vw;
            height:20vh;
            overflow: hidden;
            margin-left: 50%;
            transform: translateX(-50%);
        }
        .carousel-inner img {
            margin: auto;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

            
<?
    foreach($data["navigation"] as $key=>$link){

        $a = "";
        $s = "";
        if($_SERVER['REQUEST_URI'] == $link){
            $a = "active";
            $s = "<span class='sr-only'>(current)</span>";
        }
        echo 
        "<li class='nav-item ".$a."'>
            <a href='".$link."' class='nav-link'>"
            .strtoupper($key).$s.
            "</a>
        </li>";
    }
?>
            </ul>
            <span style="color: red">
<?
// @$_REQUEST["msg"] ? @$_REQUEST["msg"] : "";
if (@$_REQUEST["msg"]) {
    echo @$_REQUEST["msg"];
} else {
    echo "";
}
?>
            </span>
            <?if (@$_SESSION["loggedin"] && @$_SESSION["loggedin"] == 1) {?>
                <form class="navbar-form navbar-right ml-3">
                    <a href="/profile">Profile</a> | 
                    <a href="/auth/logout">Logout</a>
                </form>
                
            <?} else {?>
                    <form class="navbar-form navbar-right" role="search" method="POST" action="/auth/login">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="password" placeholder="Password" />
                        </div>
                        <button type="submit" class="btn btn-default">Sign In</button>
                    </form>
                
            <?}?>
        </div>
        </div>
    </div>
</nav >
<div class="container down">
