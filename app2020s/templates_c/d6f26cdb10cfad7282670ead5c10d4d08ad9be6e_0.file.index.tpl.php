<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-11 08:49:35
  from '/data/app2020s/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e426a9f0d0000_83615067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6f26cdb10cfad7282670ead5c10d4d08ad9be6e' => 
    array (
      0 => '/data/app2020s/templates/index.tpl',
      1 => 1581409243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e426a9f0d0000_83615067 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Smartyテスト</title>
</head>
<body>
<p><?php echo $_smarty_tpl->tpl_vars['obj']->value->hello;?>
さん <br><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
</body>
</html><?php }
}
