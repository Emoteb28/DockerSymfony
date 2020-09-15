<html>
<head>
    <title> Base de donnée</title>
    <meta charset="utf-8 ">

    <link rel="stylesheet " href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js "></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js "></script>

</head>

<body>
<div class="container">
    <h1 class="text-center">Base de donnée MySQL</h1>
<?php
$servername = 'mariadb';
$username = 'root';
$password = 'root';
$database = 'test';

//On essaie de se connecter
try{
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    //On définit le mode d'erreur de PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Connexion réussie';
}
    /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci*/
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
$stm = $conn->query("SELECT * FROM agents");

/*echo '<table class="table table-striped">';
echo '<thead>
<tr><th>AGENT_CODE</th><th>AGENT_NAME </th><th>WORKING_AREA</th></tr></thead>';
*/


echo '<table class="table table-striped">' ;
echo '<thead><tr><th>Search</th><th>Agent code</th><th>Agent name</th><th>Agent country</th><th>Moy</th><th>Tel</th></tr></thead>' ;
while ($row = $stm->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
    echo '<tr>' ;
    echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>' ;
    foreach ( $row as $element ){
        echo '<td>' .  $element .  '</td>' ;
  }
  echo '</tr>' ;
  }
  echo '</table>' ;

//On ferme la connexion
$conn = null;
/*$dbh = new PDO('mysql:host=mariadb;dbname=test', 'root', 'root');

foreach($dbh->query('SHOW DATABASES') as $row) {
    echo $row[0]. '<br/>';
}*/
//On essaie de se connecter
/*try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    //On définit le mode d'erreur de PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
}
catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}*/


?>
</div>
</body>
</html>