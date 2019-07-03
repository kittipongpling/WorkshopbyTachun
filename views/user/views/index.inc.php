<?php
require_once('models/UserModel.php');
$user_model = new UserModel;
$user = $user_type_model -> getUserBy();

//ระบุตำแหน่งของหน้า
$path = "views/user_type/views/";

// รับข้อมุล id
$id = $_GET['id'];
// array 
$data = [];

if( !isset($_GET['action']) ) {
    require_once($path.'view.inc.php');  // เปิดหน้า view.inc.php
} 

else if( $_GET['action'] == "insert") { 
    require_once($path.'insert.inc.php'); // เปิดหน้า insert.inc.php
} 

else if( $_GET['action'] == "add") { 
    $data["user_type_name"] = $_POST["user_type_name"]; // รับข้อมูลตาม form หน้า view.inc.php แล้วเก็ยลง array $data[]
    $data["user_type_email"] = $_POST["user_type_email"]; // รับข้อมูลตาม form หน้า view.inc.php แล้วเก็ยลง array $data[]
    $user_type = $user_type_model -> insertUserTypeByID($data); 
    ?><script>alert("เพิ่มข้อมูลสำเร็จ...<<");</script><?php // Show alert คำว่า เพิ่มข้อมูลสำเร็จ
    ?><script>window.location="index.php?content=user_type"</script><?php // เปิดหน้า view.inc.php
} 

else if( $_GET['action'] == "update") {  // เปิดหน้า update.inc.php
    $user_type = $user_type_model -> getUserTypeById($id);
    // echo "<pre>";
    // print_r($product_type);
    // echo "</pre>";
    require_once($path.'update.inc.php');
} 

else if( $_GET['action'] == "edit") { 
    $data["product_type_id"] = $_POST["product_type_id"]; // รับข้อมูลตาม form หน้า view.inc.php แล้วเก็ยลง array $data[]
    $data["product_type_name"] = $_POST["product_type_name"]; // รับข้อมูลตาม form หน้า view.inc.php แล้วเก็ยลง array $data[]
    $product_type = $product_type_model -> updateUserTypeByID($data); 
    ?><script>alert("แก้ไขข้อมูลสำเร็จ...<<");</script><?php // Show alert คำว่า เพิ่มข้อมูลสำเร็จ
    ?><script>window.location="index.php?content=product_type"</script><?php // เปิดหน้า view.inc.php
} 

else if( $_GET['action'] == "delete") { 
    ?><script>alert("ลบข้อมูลใช่ไหม...<<<?php echo $id; ?>");</script><?php  // Show alert คำว่า ลบข้อมูลใช่ไหม
    $user_type_model -> deleteUserTypeByID($id); // คำสั่งลบข้อมูลตาม $id
    ?><script>window.location="index.php?content=user_type"</script><?php  // เปิดหน้า view.inc.php
} 
?>