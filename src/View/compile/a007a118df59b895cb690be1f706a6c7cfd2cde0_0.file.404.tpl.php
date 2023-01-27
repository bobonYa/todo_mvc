<?php
/* Smarty version 4.3.0, created on 2023-01-26 18:15:05
  from '/Users/bobon/Projects/MAIN/PHP/todo/src/View/template/pages/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d2c329451c86_23530948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a007a118df59b895cb690be1f706a6c7cfd2cde0' => 
    array (
      0 => '/Users/bobon/Projects/MAIN/PHP/todo/src/View/template/pages/404.tpl',
      1 => 1674756809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default.tpl' => 1,
  ),
),false)) {
function content_63d2c329451c86_23530948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'content', null, null);?>


<h1> Page not found </h1>


<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender('file:default.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mainContent'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content')), 0, false);
}
}
