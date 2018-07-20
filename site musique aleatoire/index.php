
  <!doctype html>
<html>

<head>
     <?php 
     
	$urls = array("AgenceToutRisque.php", "Starsky.php" ,"pokemon.php" ,"stupeflip.php" ,"starwars.php" ,"dallas.php" ,"indiana.php", "Hey Banana.php", "Vladimir.php", "Rasputin.php", "kaskake.php", "titanic.php"); 
  $random = (rand() % count($urls) ); 
  	
include($urls[$random]);


  ?>

    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $urls[$random] ?></title>
</head>
<body>

	
<script>
  function redirection()
{
	window.location='index.php';
}
	
</script>


</body>

</html>