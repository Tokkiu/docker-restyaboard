<?php
$filename=time().(string)rand(0,100);
$myfile=fopen("../libs/".$filename,"x+");
$txt="913722975@qq.com\n";
fwrite($myfile,$txt);
$txt="bioati\n";
fwrite($myfile,$txt);
$txt="neironglalallalala\n";
fwrite($myfile,$txt);
pclose(popen("php -f ../libs/read.php ".$filename,"r"));
?>
