<?php
/* Smarty version 4.3.0, created on 2023-01-26 13:22:48
  from '/Users/bobon/Projects/MAIN/PHP/todo/src/View/template/test/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d27ea8e8a8a4_35585725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c13dcb56af592e9ea4a6e7f937e9b705c728d7f' => 
    array (
      0 => '/Users/bobon/Projects/MAIN/PHP/todo/src/View/template/test/index.tpl',
      1 => 1674739367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default.tpl' => 1,
  ),
),false)) {
function content_63d27ea8e8a8a4_35585725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'content', null, null);?>
<h1><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>



<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cities']->value, 'city');
$_smarty_tpl->tpl_vars['city']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->do_else = false;
?>
        <li><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['city']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo $_smarty_tpl->tpl_vars['city']->value['population'];?>
)</li>
    <?php
}
if ($_smarty_tpl->tpl_vars['city']->do_else) {
?>
        <li>no cities found</li>        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>


<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender('file:default.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mainContent'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content')), 0, false);
}
}
