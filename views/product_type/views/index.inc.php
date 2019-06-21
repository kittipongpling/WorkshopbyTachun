<?php
require_once('models/ProductTypeModel.php');
$product_type_model = new ProductTypeModel;
$product_type = $product_type_model -> getProductTypeBy();

//ระบุตำแหน่งของหน้า
$path = "views/product_type/views/";

// รับข้อมุล id
$id = $_GET['id'];

if( !isset($_GET['action']) ) {
    require_once($path.'view.inc.php');
} else if( $_GET['action'] == "insert") { 
    require_once($path.'insert.inc.php');
} else if( $_GET['action'] == "update") { 
    require_once($path.'update.inc.php');
} else if( $_GET['action'] == "delete") { 
    ?><script>alert("ลบข้อมูล...<<<?php echo $id; ?>");</script><?php
    $product_type_model -> deleteProductTypeByID($id);
    ?><script>window.location="index.php?content=product_type"</script><?php 
} 
?>