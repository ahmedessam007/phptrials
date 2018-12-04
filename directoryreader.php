<?php


function directoryReader($directoy,array $excludeFiles=[".","..",".DS_Store"]){
  
  $images=[];


  if (!is_dir($directoy)) {// lw el image msh fel directory hyrg3 null.
  	return null;
  }
  return true;

}


?> 