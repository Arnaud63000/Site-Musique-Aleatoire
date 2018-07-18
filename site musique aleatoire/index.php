  <!doctype html>
<html>

<head>
    
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Musique Aléatoire ( titre à changer dynamiquement en PHP ou JS ) </title>
</head>

<body>
    <?php 
$urls = array("AgenceToutRisque.php" ,"Starsky.php" ,"pokemon.php" ,"stupeflip.php" ,"starwars.php" ,"dallas.php" ,"indiana.php"); 
  $random = (rand() % count($urls) ); 
include($urls[$random]);
?>
</body>

</html>