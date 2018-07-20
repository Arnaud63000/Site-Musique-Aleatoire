<?php

$track = 'musiques/Indiana Jones Theme Song [HD].mp3'
?>


<title>Hey ! Indiana </title>
	<img src="images/indiana.jpg" id="bg" alt="photo">
	
	<object>
		<param name="autostart" value="true">
		<param name="autoplay" value="true"> 
		<param name="controller" value="true">
		<audio onended="redirection()" src="musiques/Indiana Jones Theme Song [HD].mp3" id="track" controller="true" autoplay="true" autostart="True" type="audio/mp3" />
	</object>
  