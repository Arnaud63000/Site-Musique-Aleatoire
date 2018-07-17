<!doctype html>
<html>

<head>
	
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Indiana Jones !</title>
</head>

<body>
	<img src="images/indiana.jpg" id="bg" alt="photo">
	
	<object>
		<param name="autostart" value="true">
		<param name="src" value="sound.mp3">
		<param name="autoplay" value="true"> 
		<param name="controller" value="true">
		<embed src="musiques/Indiana Jones Theme Song [HD].mp3" controller="true" autoplay="true" autostart="True" type="audio/mp3" />
	</object>
    <?php 


$urls = array("AgenceToutRisque.php" ,"Starsky.php" ,"pokemon.php" ,"stupeflip.php" ,"starwars.php" ,"dallas.php" ,"indiana.php"); 


        $random = (rand()%7); 
header("Location: ".$url);
exit;
?>
</body>

</html>
