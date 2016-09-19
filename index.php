<?php require_once("db_const.php");  
$connection = new MySQLi(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB); $connection->set_charset("utf8");  ?> 
<!doctype html> <html> <head> <meta charset="utf-8"> 
<title>Chuck Norris Facts</title> 
<link rel="stylesheet" type="text/css" href="css/styles.css">
	 </head> 
      <body>     	 
      <header> <h1>Chuck Norris Facts 03</h1><?php 
		 
		 if ($connection->connect_error) {
			die('Connect Error: ' . $connection->connect_error);
			} else {
			echo '<span class="hint">[Successful connection to MySQL database!]</span>';
			}
		 
		 ?>
         </header>
         <?php 
		 $data = $connection->query("SELECT * FROM post"); 
		 while($result = $data->fetch_assoc()){
		    echo '<article>';
			//insert image on page
			if($result['img']){
				echo '<img class="img" src="' . $result['img'] . '" alt="' . $result['title'] . '" width="200px">';
			} else {
			echo 'no image'; 
			}
			echo '<p>' . $result['joke']
		 echo'</article>'
		 ?>  
</body> </html>



