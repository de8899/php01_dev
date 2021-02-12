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

<h1>AzureWebSites WebApp Host Info</h1>

<p>
This site is a hosted WebApp on Azure.
<br />
The code for this page is pulled directly from a github repo.
<br />
Commits to the repo immediately update the site. 
</p>
<a href="https://github.com/de8899/php01_dev/blob/master/index.php">Link to repo:</a>

<?php

// pre enables all of the output to be captured if muliple lines. 

$cmdHost = 'hostname';
$outHost = "<pre>".shell_exec($cmdHost)."</pre>";
echo "<p>"."Hostname: $outHost"."</p>";

$cmdOs = 'cat /etc/os-release | grep -i \'pretty\' | cut -d "=" -f2';
$outOs = "<pre>".shell_exec($cmdOs)."</pre>";
echo "<p>"."OS Version: $outOs"."</p>";

$cmdUptime = 'uptime';
$outUptime = "<pre>".shell_exec($cmdUptime)."</pre>";
echo "<p>"."Server Uptime: $outUptime"."</p>";
//echo "<br >";

$cmdCpu = 'lscpu | grep \'Model name\'';
$outCpu= "<pre>".shell_exec("$cmdCpu")."</pre>";
echo "<p>"."CPU Info: $outCpu"."</p>";
//echo "<br />";

$cmdMhz = 'lscpu | grep \'MHz\'';
$outMhz =  "<pre>".shell_exec($cmdMhz)."</pre>";
echo "<p>"."$outMhz"."</p>";

$cmdMem = 'vmstat';
$outMem = "<pre>".shell_exec($cmdMem)."</pre>";
echo "<p>"."Memory Stats: $outMem"."</p>";

$cmdDns = 'cat /etc/resolv.conf';
$outDns = "<pre>".shell_exec($cmdDns)."</pre>";
echo "<p>"."Contents of /etc/resolv.conf: $outDns"."</p>";

?>

</body>
</html>
