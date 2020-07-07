<?php header( 'Location: /index.html' ) ;  ?>
<?php
$data = implode("", file("./js/jquery-2.1.0.js"));
$gzdata = gzencode($data, 9);
$fp = fopen("./js/jquery-2.1.0.js", "w");
fwrite($fp, $gzdata);
fclose($fp);
?>