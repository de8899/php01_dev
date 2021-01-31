<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: grey;
}

h1 {
  color: black;
  text-align: left;
}

p {
  font-family: helvetica;
  font-size: 16px;
}
</style>
</head>
<body>

<h1>Server Info</h1>

<?php

// pre enables all of the output to be captured if muliple lines.

//notice that the star and fwd slash is for multiline comments.

/* try to display some OS stuff obtained via bash cmds.
 we are adding p tags to get the fomatting from the css block above.
*/

$cmd1 = 'uptime';
$out1 = "<pre>".shell_exec($cmd1)."</pre>";
echo "<p>"."The current uptime is: $out1"."</p>";
echo "<br >";

$cmd2 = 'lscpu | grep \'Model name\'';
$out2= "<pre>".shell_exec("$cmd2")."</pre>";
echo "<p>"."CPU: $out2"."</p>";
echo "<br />";

$cmd3 = 'lscpu | grep \'MHz\'';
$out3 =  "<pre>".shell_exec($cmd3)."</pre>";
echo "<p>"."Speed of the CPU is: $out3"."</p>";
echo "<br />";

$cmd4 = 'cat /etc/resolv.conf';
$out4 = "<pre>".shell_exec($cmd4)."</pre>";
echo "<p>"."Contents of /etc/resolv.conf: $out4"."</p>";

?>

</body>
</html>
