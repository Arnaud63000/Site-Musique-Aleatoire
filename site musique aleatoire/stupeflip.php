<!doctype html>
<html>

<head>
	<meta http-equiv="refresh" content="220; url=pokemon.php" />
<meta http-equiv="refresh" content="220; url=AgenceToutRisque.php" />
<meta http-equiv="refresh" content="220; url=starwars.php" />
<meta http-equiv="refresh" content="220; url=Starsky.php" />
<meta http-equiv="refresh" content="220; url=dallas.php" />
<meta http-equiv="refresh" content="220; url=indiana.php" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Stupeflip</title>
</head>

<body>
	<img src="images/supeflip04-widescreen-1024x639.jpg" id="bg" alt="photo">
	<object>
		<param name="autostart" value="true">
		<param name="src" value="sound.mp3">
		<param name="autoplay" value="true"> 
		<param name="controller" value="true">
		<embed src="musiques/Stupeflip - Stupeflip Vite .mp3" controller="true" autoplay="true" autostart="True" type="audio/mp3" />
	</object>
    <?php 


$urls = array("AgenceToutRisque.php" ,"Starsky.php" ,"pokemon.php" ,"stupeflip.php" ,"starwars.php" ,"dallas.php" ,"indiana.php"); 


  $random = (rand()%7); 
header("Location: ".$url);
exit;

?>
</body>

</html>