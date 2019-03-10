<html>
<head>
    <title>SSL Workpage</title>
    <style>

        /* primary colors: #30011E, #D7FCD4, #B6CCA1, #B68F40, #545454 */
        body{
            min-height: 100vh;
            box-sizing: border-box;
            font-family: "Lucida Console", "Lucida Sans Typewriter", monaco, "Bitstream Vera Sans Mono";
        }
        #body{
            margin: 2rem 4rem;
        }
        nav .current{
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
            margin-top: 1rem;
            padding: 1rem 4rem;
            background-color: #545454;
            width: 100%;
        }

    </style>
</head>
<section id="body">
<header>
<h2><?echo $data["pagename"];?> section</h2>

</header>
