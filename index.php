<?php
// header("Location: https://url.com"); // This is a option to redirect them to wtv website u want :)
$logged = fopen("logged.txt", "a") or die("\[-] Unable to open \"logged.txt\"");
if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
  $ip = $_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
  $ip = $_SERVER['REMOTE_ADDR'];
}
$user_agent = $_SERVER['HTTP_USER_AGENT'];
fwrite($logged, "IP Address: ".$ip."\n");
fwrite($logged, "User-Agent: ".$user_agent."\n\n");
fwrite($logged, "-------------------------------------------\n\n");
?>

# Gets User Agent String and IP Address, pretty simple
