  <!doctype html>
<html>

<head>
     <?php 
     
	$urls = array("AgenceToutRisque.php", "Starsky.php" ,"pokemon.php" ,"stupeflip.php" ,"starwars.php" ,"dallas.php" ,"indiana.php", "Hey Banana.php"); 
  $random = (rand() % count($urls) ); 
  	
include($urls[$random]);


  ?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $urls[$random] ?></title>
</head>

<body>
	<audio onended="refresh()">
	<source src="<?php echo "$track" ?>" type="audio/mp3">
  	
  
</audio>
<script>
   function refresh() {
       location.reload();
       
   }
</script>


</body>

</html>