
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
else if($content=="insert"){
    require_once("views/product_type/views/insert.inc.php"); 
}
else if($content=="update"){
    require_once("views/product_type/views/update.inc.php"); 
}
// User_type
else if($content=="user_type"){
    require_once("views/user_type/views/index.inc.php"); 
}
else if($content=="user_insert"){
    require_once("views/user_type/views/insert.inc.php"); 
}
else if($content=="user_update"){
    require_once("views/user_type/views/update.inc.php"); 
}
// User
else if($content=="user"){
    require_once("views/user/views/index.inc.php"); 
}
?>
