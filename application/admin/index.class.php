<?php
if (!defined("MVC")) {
    die("访问路径不合法");
}
use \libs\smarty;
use \libs\db;
use \libs\code;
class index {
   function int(){
       $smarty=new smarty();
       $smarty->display("admin/login.html");
   }
   function login(){
      $uname=addslashes($_POST["uname"]);
      $pass=md5(md5($_POST["pass"]));
       if($_POST["code"]!==$_SESSION["code"]){
           echo "验证码有误";
           return;
       }
      if(strlen($uname)<5||empty($pass)){
          echo "用户名或密码不规范";
          return;
      }

//      $db=new mysqli("localhost","root","","yf");
//       if(mysqli_connect_errno()){
//           die("数据库连接错误");
//       }
//       $db->query("set names utf-8");
       $database=new db();
       $db=$database->db;
      $result= $db->query("select * from mvcuser where uname='$uname' and pass='$pass'");
       if($result->num_rows<1){
           echo "没有该用户，请重新登录";
       }else{
           $_SESSION["login"]="yes";
           $_SESSION["uname"]=$uname;
           header("location:/index.php/admin/index/first");
       }
       $db->close();
   }
   function first(){
       if(isset($_SESSION["login"])&& $_SESSION["login"]=="yes"){
            $smarty=new smarty();
            $smarty->assign("uname",$_SESSION["uname"]);
            $smarty->display("admin/index.html");
       }else{

           header("location:/index.php/admin");
       }

   }
   function mycode(){
       $code=new code();
       $code->out();
   }
   function logout(){
       session_destroy();
       header("location:/index.php/admin");
   }
}