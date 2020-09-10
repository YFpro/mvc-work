<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-10 13:42:12
  from 'D:\APP\PHP\www\mvc\application\template\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5a2d340a8639_08531165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e83b59954257626c6829ea5012fb62475f21638d' => 
    array (
      0 => 'D:\\APP\\PHP\\www\\mvc\\application\\template\\admin\\index.html',
      1 => 1599745304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5a2d340a8639_08531165 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台首页</title>
    <style>
     html,body{
         width: 100%;
         height: 100%;
     }
     body{
            padding: 0;
            margin: 0;
        }
        .header{
            width: 100%;
            height: 20%;
            background: #ff5e44;
        }
        .header h1{
            text-align: center;
            padding-top: 30px;
        }
        .logininfo{
            float: right;
            margin-right: 30px;
        }
        .main{
            width: 100%;
            height: 70%;
            border-bottom: 1px solid saddlebrown;
        }
        .bottom{
            width: 100%;
            min-height: 10%;
            position: relative;
            padding-bottom:-10px;
            text-align: center;
            padding-top: 15px;
        }
        .left{
            width: 25%;
            height: 100%;
            border-right: 5px solid #000;
            float: left;
            box-sizing: border-box;
        }
        .right{
            width: 75%;
            height: 100%;
            float: left;
            box-sizing: border-box;
        }
        iframe{
               
        }

    </style>
</head>
<body>
<div class="header">
<h1>欢迎来到YFPRO后台管理系统</h1>
    <div class="logininfo">
        <span>用户:<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span>
        <span><a href="/index.php/admin/index/logout">退出登陆</a></span>
    </div>
</div>
<div class="main">
    <div class="left">
        <ul>
            <li>
                用户管理
                <ul class="son">
                    <li><a href="http://baidu.com" target="main">添加用户</a></li>
                    <li><a href="" target="main">修改用户</a></li>
                </ul>
            </li>
            <li>
                栏目管理
                <ul class="son">
                    <li>添加栏目</li>
                    <li>修改栏目</li>
                </ul>
            </li>
            <li>
                内容管理
                <ul class="son">
                    <li>添加内容</li>
                    <li>修改内容</li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="right">
        <iframe src="" frameborder="0" name="main"></iframe>
    </div>
</div>
<div class="bottom">
    YFPRO版权信息
</div>
</body>
</html><?php }
}
