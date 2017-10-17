<?php
/**
 * Created by PhpStorm.
 * User: Longder
 * Date: 2017/10/17
 * Time: 15:49
 */
if(getenv("REQUEST_METHOD") == "POST"){
    $url = $_POST["url"];
}else{
    $url = $_GET["url"];
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <p>
        URL:<input type="text" name="url" value="<?php echo $url?>"/><br/>
        <input type="submit"/>
    </p>
</form>
<?php
if($url){
    $remote = fopen($url,"r");{
        $hrml=fread($remote,1048576);
    }
    fclose($remote);
    $urls = "(http|telnet|gopher|file|wais|ftp)";
    $ltrs = "\w";
    $gunk = "/#~:.?+=&%@!\-";
    $punc = ".:?\-";
    $any = "{$ltrs}{$gunk}{$punc}";
    preg_march_all("{
        \b
        {$urls}:
        [{$any}] + ?
        (?=
        [{$punc}]*
        [^{$any}]
        |
        \$
        )
    }x",$html,$matches);
    printf("I found %d URLS<br/>",sizeof($matches[0]));

    foreach($marches[0] as $u){
        $link = $_SERVER["PHP_SELF"] . "?url=" . urlencode($u);
        echo "<a href=\"{$link}\">${u}</a><br/>";
    }
}












