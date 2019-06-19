<?php

 	if(isset($_POST['simpan'])){
 		$file = $_FILES['foto']['tmp_name'];
	    // *** 1) Initialise / load image
	    $resizeObj = new resize($file);

	    // *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	    $resizeObj -> resizeImage(1000, 1000, 'exact');

	    // *** 3) Save image
	    $resizeObj -> saveImage('sample-resizeda.jpg', 1000);
 	}

?>

<form method="post" enctype="multipart/form-data">
	<input type="file" name="foto">
	<input type="submit" name="simpan">
</form>