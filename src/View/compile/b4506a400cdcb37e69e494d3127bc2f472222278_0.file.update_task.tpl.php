<?php
/* Smarty version 4.3.0, created on 2023-01-26 20:03:43
  from '/Users/bobon/Projects/MAIN/PHP/todo/src/View/template/pages/update_task.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d2dc9f8577e8_71775860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4506a400cdcb37e69e494d3127bc2f472222278' => 
    array (
      0 => '/Users/bobon/Projects/MAIN/PHP/todo/src/View/template/pages/update_task.tpl',
      1 => 1674763417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default.tpl' => 1,
  ),
),false)) {
function content_63d2dc9f8577e8_71775860 (Smarty_Internal_Template $_smarty_tpl) {
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

    <main>


        <div class="row g-5">

            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Add new task</h4>
                <form class="needs-validation" novalidate method="POST">
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Name</label>
                            <input disabled type="text" class="form-control" name="name" placeholder=""
                                value="<?php if ((isset($_smarty_tpl->tpl_vars['name']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php }?>" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input disabled type="email" class="form-control" name="email" placeholder="you@example.com"
                                value="<?php if ((isset($_smarty_tpl->tpl_vars['email']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 <?php }?>" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Task</label>
                            <input type="text" class="form-control" name="task" placeholder="Call to bank"
                                value="<?php if ((isset($_smarty_tpl->tpl_vars['task']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['task']->value;?>
 <?php }?>" required>
                            <div class="invalid-feedback">
                                Please enter your task.
                            </div>
                        </div>


                        <div class="col-12">
                            <label for="address" class="form-label">Complete tast</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="complete"  >
                                <label class="form-check-label" for="flexCheckChecked">
                                    Complete
                                </label>
                            </div>
                        </div>





                    </div>

                    <hr class="my-4">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Update</button>
                </form>
            </div>
        </div>
    </main>


<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender('file:default.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mainContent'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content')), 0, false);
}
}
