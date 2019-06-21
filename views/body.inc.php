
<?php
// ประเภทสินค้า
// http://localhost/workshopbytachun/index.php?content=product_type
 if($content=="product_type"){
    require_once("views/product_type/views/index.inc.php"); 
}
// หน้าหลัก
// http://localhost/workshopbytachun/index.php?content=home
else if($content=="home"){
    require_once("views/home/views/index.inc.php"); 
// หน้าสินค้า
// http://localhost/workshopbytachun/index.php?content=product
}else if($content=="product"){
    require_once("views/product/views/index.inc.php"); 
}
?>
