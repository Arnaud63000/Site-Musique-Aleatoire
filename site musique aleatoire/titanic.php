<?php

$track = 'musiques/Emotional Titanic Flute.mp3'
?>

  <title>Emotional Titanic Flûte !</title>
	<img src="images/titanic.jpg" id="bg" alt="photo">

	<object>
		<param name="autostart" value="true">
		<param name="autoplay" value="true"> 
		<param name="controller" value="true">

		<audio onended="redirection()" src="musiques/Emotional Titanic Flute.mp3" id="track" controller="true" autoplay="true" autostart="True" type="audio/mp3" />
		

	</object>
