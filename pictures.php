<?php 

//echo "hello";

/*$directory=opendir("images");// bya5od el image mn el directory.

while ($imagefile=readdir($directory)) { // by2ra el image path.
	var_dump($imagefile);
}*/
 
 include"directoryreader.php";

  $images= directoryreader("image");

  if (!$images) { // lw mfesh images hyrg3 el gomla de.
  	die("could not load files");
  }



?> 