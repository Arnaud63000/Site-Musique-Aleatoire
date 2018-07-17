<!doctype html>
<html>

<head>
	
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Star-Wars !</title>
</head>

<body>
	<img src="images/starwars.jpeg" id="bg" alt="photo">
	<object>
		<param name="autostart" value="true">
		<param name="src" value="sound.mp3">
		<param name="autoplay" value="true"> 
		<param name="controller" value="true">
		<embed src="musiques/Star Wars- The Imperial March (Darth Vaders Theme).mp3" controller="true" autoplay="true" autostart="True" type="audio/mp3" />
	</object>
    <?php 


$urls = array("AgenceToutRisque.php" ,"Starsky.php" ,"pokemon.php" ,"stupeflip.php" ,"starwars.php" ,"dallas.php" ,"indiana.php"); 


  $random = (rand()%7); 
header("Location: ".$url);
exit;

?>
</body>

</html>
