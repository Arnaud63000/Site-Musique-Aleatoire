<?php

$track = 'musiques/RASPUTIN - Vladimir Putin - Love The Way You Move (Funk Overload) Slightly Left of Centre.mp3'
?>

  <title>Hey Rasputin!</title>
	<img src="images/rasputin.jpg" id="bg" alt="photo">

	<object>
		<param name="autostart" value="true">
		<param name="autoplay" value="true"> 
		<param name="controller" value="true">

		<audio onended="redirection()" src="musiques/RASPUTIN - Vladimir Putin - Love The Way You Move (Funk Overload) Slightly Left of Centre.mp3" id="track" controller="true" autoplay="true" autostart="True" type="audio/mp3" />
		

	</object>
