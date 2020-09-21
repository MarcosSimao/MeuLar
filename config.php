<?php
function loadPages($class){
   $paginas = ['../controller/','../database/','../model/','../view/']; 
    for($i=0;$i<=count($paginas)-1;$i++){
  if(file_exists($paginas[$i].$class.'.php')) {
      require_once $paginas[$i].$class.'.php';  
  } 
}
}
spl_autoload_register('loadPages');
 

