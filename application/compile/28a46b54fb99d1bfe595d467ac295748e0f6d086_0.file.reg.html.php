<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-07 13:37:07
  from 'D:\APP\PHP\www\mvc\application\template\admin\reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f563783155201_16129273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28a46b54fb99d1bfe595d467ac295748e0f6d086' => 
    array (
      0 => 'D:\\APP\\PHP\\www\\mvc\\application\\template\\admin\\reg.html',
      1 => 1599485698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f563783155201_16129273 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台管理系统</title>
   <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
reg.js"><?php echo '</script'; ?>
>
</head>
<body>
  <form class="form-horizontal"action="/index.php/admin/reg/addUser"method="post"style="height: 300px">
    <h1>注册页面</h1>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="用户名"name="uname">
      </div>
    </div>
    <div class="form-group">
      <label for="pass" class="col-sm-2 control-label">密码</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pass" placeholder="密码"name="pass">
      </div>
    </div>
      <div class="form-group">
          <label for="pass1" class="col-sm-2 control-label">再次输入密码</label>
          <div class="col-sm-10">
              <input type="password" class="form-control" id="pass1" placeholder="密码"name="pass1">
          </div>
      </div>
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">注册</button>
        &nbsp;&nbsp;已有账号？请
        <a href="/index.php/admin"class="btn btn-default">登录</a>
      </div>
    </div>
  </form>
</body>
</html><?php }
}
