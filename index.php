<!DOCTYPE html>
<html>
<head>
<style>

body {
  background-color: Black;
}
h1 {
  font-family: helvetica;
  color: Blue;
  text-align: left;
}
p {
  font-family: helvetica;
  font-size: 20px;
  color: white;
}
</style>
</head>
<body>

<h1>AzureWebSites WebApp Server Info</h1>

<p>
The code for this page is pulled directly from a github repo.
New commits to the repo are automatically deployed to update the site within 1 minute. 
Link to Github repo
</p>
<a href="https://github.com/de8899/php01_dev/index.php">Link to Github repo</a>

<?php

// pre enables all of the output to be captured if muliple lines.
//notice that the star and fwd slash is for multiline comments.
/* try to display some OS stuff obtained via bash cmds.
 we are adding p tags to get the fomatting from the css block above.
*/

$cmd1 = 'uptime';
$out1 = "<p>""<pre>".shell_exec($cmd1)."</pre>""</p>";
echo "<p>"."Server uptime info: $out1"."</p>";
//echo "<br />";

$cmd2 = 'lscpu | grep \'Model name\'';
$out2= "<pre>".shell_exec("$cmd2")."</pre>";
echo "<p>"."CPU: $out2"."</p>";
//echo "<br />";

$cmd3 = 'lscpu | grep \'MHz\'';
$out3 =  "<pre>".shell_exec($cmd3)."</pre>";
echo "<p>"."CPU Speed: $out3"."</p>";
//echo "<br />";

$cmd4 = 'cat /etc/resolv.conf';
$out4 = "<pre>".shell_exec($cmd4)."</pre>";
echo "<p>"."Contents of /etc/resolv.conf: $out4"."</p>";

?>

</body>
</html>
