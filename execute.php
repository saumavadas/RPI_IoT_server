<?php
$pin = $_GET['pin'];
$setmode = shell_exec("/usr/local/bin/gpio -g mode ".$pin." out");
if($_GET['set'] == "1")
{
	$gpio_on = shell_exec("/usr/local/bin/gpio -g write ".$pin." 1");
	echo "LED is on";
}
elseif($_GET['set'] == "0" )
{
	$gpio_off = shell_exec("/usr/local/bin/gpio -g write ".$pin." 0");
	echo "LED is off";
}
