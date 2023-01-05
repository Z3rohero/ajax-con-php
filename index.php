<?php 

try {
  $db = new PDO('sqlite:database.sqlite');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $res = $db->exec(
    "CREATE TABLE IF NOT EXISTS user (
      id INTEGER PRIMARY KEY AUTOINCREMENT, 
       usuario TEXT, 
       oficio TEXT, 
      time INTEGER
    )"
  );
  
  $stmt = $db->prepare(
    "INSERT INTO user (usuario, oficio, time) 
      VALUES (:usuario, :oficio, :time)"
  );
  
  // Bind values directly to statement variables

   $stmt->bindValue(':usuario', 'cobra', SQLITE3_TEXT);
  $stmt->bindValue(':oficio', 'kay', SQLITE3_TEXT);
   $stmt->bindValue(':usuario', 'jose', SQLITE3_TEXT);
  $stmt->bindValue(':oficio', 'root', SQLITE3_TEXT);
  
  
  // Format unix time to timestamp
  $formatted_time = date('Y-m-d H:i:s');
  $stmt->bindValue(':time', $formatted_time, SQLITE3_TEXT);
   
  // Execute statement
  $stmt->execute();
  
  $messages = $db->query("SELECT * FROM user");
    
  // Garbage collect db
  $db = null;
} catch (PDOException $ex) {
  echo $ex->getMessage();
}

?>

<html>
  <head>
    <title>PHP Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </head>
  <body>
 <div  class="container">
   <div class="row"> 
      <form action="#" method="POST" >
      <label for="campo"> Buscar: </label>
      <input type="text" name="campo" placeholder="buscar" id="campo"/>
      
    </form>
    <hr/>
    <table>
      <thead>
        <th>id</th>
        <th>usuario</th>
        <th>oficio</th>
        <th>Tiempo</th>
      </thead>
      <tbody id="content">
        
      </tbody>
    </table>
     <script>
       function getdata(){
         let input = document.getElementById("campo").value
         let conte =document.getElementById("campo").value
         let url = "load.php" 
         
       }
     </script>
      
      
      
   </div>
 </div>
      
  </body>
</html>