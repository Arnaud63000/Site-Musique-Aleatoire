<?php

$track = 'musiques/Celldweller - The Imperial March (Pegboard Nerds Remix).mp3'
?>


<title>Star Wars !</title>

	<img src="images/imperialMarch.jpg" id="bg" alt="photo">
	
	<object>
		<param name="autostart" value="true">
		<param name="autoplay" value="true"> 
		<param name="controller" value="true">
		<audio onended="redirection()" src="musiques/Celldweller - The Imperial March (Pegboard Nerds Remix).mp3" id="track" controller="true" autoplay="true" autostart="True" type="audio/mp3" />
	</object>
 