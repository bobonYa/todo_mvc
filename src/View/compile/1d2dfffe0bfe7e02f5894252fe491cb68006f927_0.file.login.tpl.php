<?php
/* Smarty version 4.3.0, created on 2023-01-26 20:56:54
  from '/Users/bobon/Projects/MAIN/PHP/todo/src/View/template/pages/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d2e916828cd2_39089171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d2dfffe0bfe7e02f5894252fe491cb68006f927' => 
    array (
      0 => '/Users/bobon/Projects/MAIN/PHP/todo/src/View/template/pages/login.tpl',
      1 => 1674766611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default.tpl' => 1,
  ),
),false)) {
function content_63d2e916828cd2_39089171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'content', null, null);?>

    <?php if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && !empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php }?>
    
    <form class="form-signin" method="POST">

    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Login</label>
    <input type="text"  class="form-control" placeholder="Login" required="" autofocus="" name="login">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  
  </form>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender('file:default.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mainContent'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content')), 0, false);
}
}
