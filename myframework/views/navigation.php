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
        </div>
    </div>
</nav >
<div class="container down">

