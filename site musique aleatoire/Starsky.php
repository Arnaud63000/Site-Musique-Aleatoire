<?php

$track = 'musiques/Générique - Starsky  Hutch.mp3'
?>


<title>Starsky & Hutch</title>
	<img src="images/starsky.jpg" id="bg" alt="photo">

	<object>
		<param name="autostart" value="true">
		<param name="autoplay" value="true"> 
		<param name="controller" value="true">
		<audio onended="redirection()" src="musiques/Générique - Starsky  Hutch.mp3" id="track" controller="true" autoplay="true" autostart="True" type="audio/mp3" />
	</object>
 