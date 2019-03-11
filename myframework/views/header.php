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
        .body{
            margin: 4rem;
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
        footer{
            position: absolute;
            bottom: 0;
            background-color: #545454;
            width: 100%;
        }

    </style>
</head>
<body>
<section class="body">
<header>
<h2><?echo $data["pagename"];?> section</h2>

</header>
