<?php
/* Smarty version 4.3.0, created on 2023-01-26 22:13:58
  from '/Users/bobon/Projects/MAIN/PHP/todo/src/View/template/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d2fb2635c7c3_04816577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79c72ef22b5c1e34542ecc4b1488482f0e333f59' => 
    array (
      0 => '/Users/bobon/Projects/MAIN/PHP/todo/src/View/template/default.tpl',
      1 => 1674771235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d2fb2635c7c3_04816577 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="">
  <link rel="icon" href="https://bootstrap-4.ru/favicon.ico">

  <title>ToDo List</title>
  <link href="https://bootstrap-4.ru/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://bootstrap-4.ru/docs/4.0/examples/pricing/pricing.css" rel="stylesheet">
</head>

<body>



  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a href="<?php echo $_smarty_tpl->tpl_vars['project_path']->value;?>
">ToDo List</a></h5>


    <?php if ((isset($_smarty_tpl->tpl_vars['logged_in']->value)) && $_smarty_tpl->tpl_vars['logged_in']->value) {?>
      <a class="btn btn-outline-primary" href="<?php echo $_smarty_tpl->tpl_vars['project_path']->value;?>
/logout">Logout</a>
    <?php } else { ?>
      <a class="btn btn-outline-primary" href="<?php echo $_smarty_tpl->tpl_vars['project_path']->value;?>
/login">Login</a>
    <?php }?>

  </div>



  <div class="container">
    <?php echo $_smarty_tpl->tpl_vars['mainContent']->value;?>


    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          ToDo List.
          <small class="d-block mb-3 text-muted">&copy; 2023</small>
        </div>

      </div>
    </footer>
  </div>



  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://bootstrap-4.ru/assets/js/vendor/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://bootstrap-4.ru/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://bootstrap-4.ru/assets/js/vendor/holder.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    Holder.addTheme('thumb', {
      bg: '#55595c',
      fg: '#eceeef',
      text: 'Thumbnail'
    });
  <?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="https://bootstrap-4.ru/docs/5.2/examples/checkout/form-validation.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
