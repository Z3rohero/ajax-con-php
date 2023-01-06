<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>PHP Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </head>
  <body>
 <div  class="container">
   <div class="row"> 
     <form action="#" method="POST" >
     <div class="form-group">
      <label for="campo" > Buscar: </label>
      <input  class= "form-conrol" type="text" name="campo" placeholder="buscar" id="campo"/>      
     </div>
     
    </form>
    <hr/>
    <table class="table">
      <thead>
        <th scope="col">id</th>
        <th scope="col">usuario</th>
        <th scope="col">oficio</th>
        <th scope="col">Tiempo</th>
      </thead>
      <tbody id="content">
        
      </tbody>
    </table>
     <script>
       getData();
       function getdata(){
         let input = document.getElementById("campo").value
         let conte =document.getElementById("campo").value
         let url = "load.php";
         let formaData = new FormData()
         formaData.append('campo',input)
         fetch(url, {
          method:"POST"
          body:formaDaTa
         }).then (response => response.json()
         ).then(data => {
          content.innerHTML = data
         }).catch(err => console.log(err))

         
       }
     </script>
      
      
      
   </div>
 </div>
      
  </body>
</html>