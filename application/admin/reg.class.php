<?php
use \libs\smarty;
use \libs\db;
class reg {
    function add(){
        $smarty=new smarty();
        $smarty->display("admin/reg.html");

    }
    function addUser(){
       $uname= $_POST["uname"];
       $pass=$_POST["pass"];
       $pass1=$_POST["pass1"];
       if($pass!=$pass1){
           echo "密码不一致";
           return;
       }
       $database=new db();
        $db=$database->db;
        $result=$db->query("select uname from mvcuser where uname='{$uname}'");
        if($result->num_rows>0){
               echo "用户名存在";
               return;
        }
        $pass=md5(md5($pass));
        $db->query("insert into mvcuser (uname,pass) VALUES ('$uname','$pass')");
        if($db->affected_rows>0){
            echo "插入成功";
        }
    }
    function checkName (){
        $uname=$_POST["uname"];
        $database=new db();
        $db=$database->db;
       $result=$db->query("select uname from mvcuser where uname='{$uname}'");
       if($result->num_rows<1){
           echo "true";
       }else{
           echo "false";
       }
    }
}