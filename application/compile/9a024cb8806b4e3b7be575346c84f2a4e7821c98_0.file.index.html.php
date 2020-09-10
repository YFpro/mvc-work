<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 09:07:49
  from 'D:\APP\PHP\www\mvc\application\template\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b6c657ca6f4_08674170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a024cb8806b4e3b7be575346c84f2a4e7821c98' => 
    array (
      0 => 'D:\\APP\\PHP\\www\\mvc\\application\\template\\index.html',
      1 => 1598778465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b6c657ca6f4_08674170 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
<ul>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["age"];?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["sex"];?>
</li>
    <li><a href="index.php/index/index/del">删除</a></li>
</ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<a href="index.php/teach/log/add">
添加日报</a>
</body>
</html>
<?php }
}
