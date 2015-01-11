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
        ?>
        	<div class="mix <?php echo $it->getSubPath(); ?>">
        		<img src=" <?php echo $businesses_logo_dir.$it->getSubPathName(); ?> " alt=" <?php echo $it->getSubPathName(); ?> " />
        	</div>
	        
	    <?php
        }
    }

    $it->next();
}