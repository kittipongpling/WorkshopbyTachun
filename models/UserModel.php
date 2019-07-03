<?php
require_once("BaseModel.php");
class UserModel extends BaseModel{
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }
    // function ดึงข้อมุล tb_product_type(ค้นหาตามชื่)
    function getUserBy($name = ''){
        $sql = "SELECT * FROM tb_user WHERE user_type LIKE ('%$name%') 
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
    function getUserById($id = ''){
        $sql = "SELECT * FROM tb_user WHERE user_id LIKE ('%$id%') 
        ";
        //ใส่ไว้สำหรับ ค้นหาข้อมูล
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) { //ถ้าเผื่อ query ข้อมูลได้ มันจะทำตามเงื่อนไขเรื่อยๆ 
            $data = mysqli_fetch_array($result,MYSQLI_ASSOC) ;
            $result->close();
            return $data;
        }
    }
}
?>