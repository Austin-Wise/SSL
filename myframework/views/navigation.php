<nav>
<?
foreach($data["navigation"] as $key=>$link){
    $a = "";
    if($data["pagename"] == $key){
        $a = "current";
    }
    echo "<a href='".$link."' class=".$a.">".strtoupper($key)."</a> <span id='sep'>/</span> ";
}
?>
</nav>