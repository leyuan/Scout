<?php
$businesses_logo_dir = "assets/img/logos/businesses/";
$dir = getcwd()."/assets/img/logos/businesses/";
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
$total = 0;
while($it->valid()) {

    if (!$it->isDot()) {

        $subject = $it->getSubPathName();
        // Mac OS automatically creates .DS_store file to store metadata
        // The following regex is used to ignore those files
        $pattern = '/\\.DS/';
        preg_match( $pattern, $subject, $match );
        if( !$match ) {
        	$total ++;
	        // echo 'SubPathName: ' . $it->getSubPathName() . "\n";
	        // echo 'SubPath:     ' . $it->getSubPath() . "\n";
	        // echo 'Key:         ' . $it->key() . "\n\n";
        	// echo "with . as beginning, file name is ".$it->getSubPathName()." </br>";
	        echo "<img src='".$businesses_logo_dir.$it->getSubPathName()."' />";

        	// echo "</br>";
        }
    }

    $it->next();
}

echo "In total there are $total businesses";