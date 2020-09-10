<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-10 04:15:53
  from 'D:\APP\PHP\www\mvc\application\template\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f59a879e670c9_28486976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed595f7b71316f6312917759d7a6e8456f0f88ac' => 
    array (
      0 => 'D:\\APP\\PHP\\www\\mvc\\application\\template\\admin\\login.html',
      1 => 1599710371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f59a879e670c9_28486976 (Smarty_Internal_Template $_smarty_tpl) {
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
admin.js"><?php echo '</script'; ?>
>
</head>
<body>
<?php echo '<script'; ?>
>
 // document.cookie="name=zhangsan;";
<?php echo '</script'; ?>
>
  <form class="form-horizontal" action="/index.php/admin/index/login" method="post">
    <h1>欢迎来到后台管理系统</h1>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="用户名"name="uname">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="密码"name="pass">
      </div>
    </div>
    <div class="form-group">
      <label for="code" class="col-sm-2 control-label">验证码</label>
      <div class="col-sm-10">
        <input type="text" placeholder="请输入验证码" name="code" id="code" style="width: 35%;">
        <img src="http://localhost/index.php/admin/index/mycode" alt="" onclick="this.src='http://localhost/index.php/admin/index/mycode?'+Math.random()" style="cursor: pointer" width="120">
        <span style="font-size: 14px">看不清楚？点击更换</span>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label>
            <input type="checkbox"> 记住密码
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">登录</button>
        &nbsp;&nbsp;没有账号？请
        <a href="/index.php/admin/reg/add">注册</a>
      </div>
    </div>
  </form>
</body>
</html><?php }
}
