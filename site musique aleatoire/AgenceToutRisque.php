<?php

$track = 'musiques/karaoké générique l agence tous risques version longue.mp3'
?>

  <title>Hey l'agence tout risque !</title>
	<img src="images/lagence_tous_risques.jpg" id="bg" alt="photo">

	<object>
		<param name="autostart" value="true">
		<param name="autoplay" value="true"> 
		<param name="controller" value="true">

		<audio onended="redirection()" src="musiques/karaoké générique l agence tous risques version longue.mp3" id="track" controller="true" autoplay="true" autostart="True" type="audio/mp3" />
		

	</object>


