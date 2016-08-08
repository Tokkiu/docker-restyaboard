<?php
  //$themsg=str_replace("_"," ",$argv[3]);
  $myarr=array();
  $filename=$argv[1];
  $myfile=fopen("/usr/share/nginx/html/tmp/txts/".$filename,"r");
  if(file_exists("/usr/share/nginx/html/tmp/txts/".$filename)){
  while(!feof($myfile)){
    array_push($myarr,fgets($myfile));
  };
  unlink($filename);
  //header("content-type:text/html;charset=utf-8");
  //ini_set("magic_quotes_runtime",0);
  require_once('/usr/share/nginx/html/server/php/libs/class.phpmailer.php');
  try {
        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail->SMTPSecure='ssl';
        $mail->CharSet='UTF-8';
        $mail->SMTPAuth = true;
        $mail->Port = 465;
        $mail->Host = "smtp.mail.yahoo.com";
        $mail->Username="enncloud4msgn@yahoo.com";
        $mail->Password="@Wsxcde#";
        //$mail->Username = "913722975";
        //$mail->Password = "pjuwyprueujebdga";
        $mail->AddReplyTo("enncloud4msgn@yahoo.com","mckee");
        $mail->From = "enncloud4msgn@yahoo.com";
        $mail->FromName = "xinzhiyun";
        $to=$myarr[0];
        //$to = "mrgao.ary@gmail.com";
        $mail->AddAddress($to);
        //$mail->Subject = "phpmailer";
        $mail->Subject=$myarr[1];
        //$mail->Body = $myarr[2];
        $len=count($myarr);
        for($i=2;$i<$len;$i++){
        $mail->Body.=$myarr[$i];
        }
        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
        $mail->WordWrap = 80;
        $mail->IsHTML(true);
        $mail->Send();
  } catch (phpmailerException $e) {
    echo "error:".$e->errorMessage();
  }
}
  ?>
