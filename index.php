<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: black;
  color: yellow;
}
h1 {
  color: #0000ff;
  text-align: left;
}
p {
  font-family: helvetica;
  color: #d9d9d9;
  font-size: 16px;
}

</style>
</head>
<body> 

<h1>AzureWebSites WebApp Server Info</h1>

<p>
The code for this page is pulled directly from a github repo.
Commits to the repo immediately update the site. 
</p>
<a href="https://github.com/de8899/php01_dev/blob/master/index.php">Link to repo:</a>

<?php

// pre enables all of the output to be captured if muliple lines. 
//notice that the star and fwd slash is for multiline comments.
/* try to display some OS stuff obtained via bash cmds.
 we are adding p tags to get the fomatting from the css block above. 
*/

$cmd0 = 'cat /etc/os-release | grep -i \'pretty\' | cut -d "=" -f2';
$out0 = "<pre>".shell_exec($cmd0)."</pre>";
echo "<p>"."OS Info: $out0"."</p>";

$cmd1 = 'uptime';
$out1 = "<pre>".shell_exec($cmd1)."</pre>";
echo "<p>"."Server Uptime: $out1"."</p>";
//echo "<br >";

$cmd2 = 'lscpu | grep \'Model name\'';
$out2= "<pre>".shell_exec("$cmd2")."</pre>";
echo "<p>"."CPU Info: $out2"."</p>";
//echo "<br />";

$cmd3 = 'lscpu | grep \'MHz\'';
$out3 =  "<pre>".shell_exec($cmd3)."</pre>";
//echo "<p>"."Speed of the CPU is: $out3"."</p>";
echo "<p>"."$out3"."</p>";

$cmd4 = 'less /proc/meminfo | head -2';
$out4 = "<pre>".shell_exec($cmd4)."</pre>";
echo "<p>"."Memory: $out4"."</p>";

$cmd5 = 'cat /etc/resolv.conf';
$out5 = "<pre>".shell_exec($cmd5)."</pre>";
echo "<p>"."Contents of /etc/resolv.conf: $out5"."</p>";

?>

</body>
</html>

