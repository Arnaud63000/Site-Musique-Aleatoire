<?php

$track = 'musiques/Kaskade - Never Sleep Alone (Official Audio).mp3'
?>

  <title>Kaskade !</title>
	<img src="images/kaskade.jpg" id="bg" alt="photo">

	<object>
		<param name="autostart" value="true">
		<param name="autoplay" value="true"> 
		<param name="controller" value="true">

		<audio onended="redirection()" src="musiques/Kaskade - Never Sleep Alone (Official Audio).mp3" id="track" controller="true" autoplay="true" autostart="True" type="audio/mp3" />
		

	</object>
