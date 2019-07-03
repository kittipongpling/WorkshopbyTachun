<?php
require_once("BaseModel.php");
class UserTypeModel extends BaseModel{
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }
    // function ดึงข้อมุล tb_product_type(ค้นหาตามชื่)
    function getUserTypeBy($name = ''){
        $sql = "SELECT * FROM tb_user_type WHERE user_type_name LIKE ('%$name%') 
        ";
        //ใส่ไว้สำหรับ ค้นหาข้อมูล
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) { //ถ้าเผื่อ query ข้อมูลได้ มันจะทำตามเงื่อนไขเรื่อยๆ
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }
    // function ดึงข้อมุล tb_product_type(ที่อยู่ตาม ID)
    function getUserTypeById($id = ''){
        $sql = "SELECT * FROM tb_user_type WHERE user_type_id LIKE ('%$id%') 
        ";
        //ใส่ไว้สำหรับ ค้นหาข้อมูล
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) { //ถ้าเผื่อ query ข้อมูลได้ มันจะทำตามเงื่อนไขเรื่อยๆ 
            $data = mysqli_fetch_array($result,MYSQLI_ASSOC) ;
            $result->close();
            return $data;
        }
    }
    // function เพิ่มข้อมุล tb_product_type
    function insertUserTypeByID($data = []){
        $sql = " INSERT INTO `tb_user_type`(`user_type_id`, `user_type_name`, `user_type_email` ) VALUES (
        null,  -- values 1
        '".$data['user_type_name']."',
        '".$data['user_type_email']."') 
        ";


        // echo "<pre>";
        // print_r($sql);
        // echo "</pre>";
         if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }
    // function แก้ไขข้อมุล tb_user_type
    function updateUserTypeByID($data = []){
        $sql = " UPDATE tb_user_type SET 
        user_type_name = '".$data['user_type_name']."',
        user_type_email = '".$data['user_type_email']."'
        WHERE user_type_id = '".$data['user_type_id']."' 
        ";
        // echo "<pre>";
        // print_r($sql);
        // echo "</pre>";
         if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }
    // function ข้อมุล tb_product_type
    function deleteUserTypeByID($id){
        $sql = " DELETE FROM tb_user_type WHERE user_type_id = '$id' ";
        // echo "<pre>";
        // print_r($sql);
        // echo "</pre>";
        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }
}
?>