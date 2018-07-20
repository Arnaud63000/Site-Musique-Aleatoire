<?php

$track = 'musiques/Vladimir Cauchemar - Aulos (Official Music Video).mp3'
?>

  <title>Vladimir Cauchemar!</title>
	<img src="images/vladcauchemar.jpg" id="bg" alt="photo">

	<object>
		<param name="autostart" value="true">
		<param name="autoplay" value="true"> 
		<param name="controller" value="true">

		<audio onended="redirection()" src="musiques/Vladimir Cauchemar - Aulos (Official Music Video).mp3" id="track" controller="true" autoplay="true" autostart="True" type="audio/mp3" />
		

	</object>


