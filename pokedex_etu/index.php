<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
     $link = mysqli_connect("localhost", "root", "", "Pokedex");
      if(!$link){echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL; exit; }?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Pokedex</title>
  </head>
  <body>
 <h1>My Pokedex</h1>
    <table>
      <thead>
        <tr>
          <th>Sprite</th>
          <th>ID</th>
          <th>Name</th>
          <th>Height</th>
          <th>Weight</th>
          <th>Base exp</th>
        </tr>
      </thead>
      <tbody>
        <?php $req = "";?>

        <div class="container">
              <?php $result = $link->query("SELECT id, identifier, height, weight, base_experience FROM pokemon");
               if ($result) {
   //echo "SELECT a retourné ".mysqli_num_rows($result)." lignes.<br>";

          while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            echo "<tr><th>".'<img src="sprites/'.$row['identifier'].'.png">'."</th>";
            echo "<th>".$row['id']."</th>";
            echo "<th>".$row['identifier']."</th>";
            echo "<th>".$row['height']."</th>";
            echo "<th>".$row['weight']."</th>";
            echo "<th>".$row['base_experience']."</th></tr>";
          }mysqli_free_result($result);}?>
   
        </div>      
      </tbody>
    </table>
  </body>
</html>
