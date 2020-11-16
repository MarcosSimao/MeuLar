<?php
$msg="ola mundo";
echo '<script>Mostrar($msg);</script>';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
              <script>
   function Mostrar(val){
   var msg= document.getElementById("oi");
   console.log(val);
   msg.innerHTML=val;
   
   }
</script>
    </head>
    <body>
        <h1 id="oi"></h1>
  
    </body>
</html>
