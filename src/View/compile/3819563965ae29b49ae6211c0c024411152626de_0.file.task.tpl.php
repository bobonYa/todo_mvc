<?php
/* Smarty version 4.3.0, created on 2023-01-26 18:26:38
  from '/Users/bobon/Projects/MAIN/PHP/todo/src/View/template/pages/task.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d2c5de4b6c53_94822164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3819563965ae29b49ae6211c0c024411152626de' => 
    array (
      0 => '/Users/bobon/Projects/MAIN/PHP/todo/src/View/template/pages/task.tpl',
      1 => 1674757598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default.tpl' => 1,
  ),
),false)) {
function content_63d2c5de4b6c53_94822164 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'content', null, null);?>




<?php echo $_smarty_tpl->tpl_vars['taskId']->value;?>



<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender('file:default.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mainContent'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content')), 0, false);
}
}
