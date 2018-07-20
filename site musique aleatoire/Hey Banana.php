<?php

$track = 'musiques/Minions Banana Song Full Song.mp3'
?>

<title>Hey ! Banana</title>
<img src="images/banana.jpg" id="bg" alt="photo">

	<object>
		<param name="autostart" value="true">
		<param name="autoplay" value="true"> 
		<param name="controller" value="true">
		<audio onended="redirection()" src="musiques/Minions Banana Song Full Song.mp3" id="track" controller="true" autoplay="true" autostart="True" type="audio/mp3" />
	</object>


