<?php
/* Smarty version 4.3.0, created on 2023-01-26 12:41:18
  from '/Users/bobon/Projects/MAIN/PHP/todo/public/template/test/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d274ee979ef8_67184340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfb0550e3191576ec7ce10c187cc6a51f28b3178' => 
    array (
      0 => '/Users/bobon/Projects/MAIN/PHP/todo/public/template/test/index.tpl',
      1 => 1674736658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d274ee979ef8_67184340 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
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
</ul><?php }
}
