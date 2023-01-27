<?php
/* Smarty version 4.3.0, created on 2023-01-26 22:12:32
  from '/Users/bobon/Projects/MAIN/PHP/todo/src/View/template/pages/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d2fad0b89505_14517623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbceeb59af2487c4009dbc56a8cf4451e499c776' => 
    array (
      0 => '/Users/bobon/Projects/MAIN/PHP/todo/src/View/template/pages/index.tpl',
      1 => 1674771151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default.tpl' => 1,
  ),
),false)) {
function content_63d2fad0b89505_14517623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'content', null, null);?>
    <div class="text-left">
        <p class="lead"><a class="btn btn-outline-success" href="<?php echo $_smarty_tpl->tpl_vars['project_path']->value;?>
/task/new">Add new task</a></p>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col"><a
                        href='<?php echo $_smarty_tpl->tpl_vars['project_path']->value;?>
/?column=task&sort=<?php if ((isset($_smarty_tpl->tpl_vars['task']->value))) {
echo $_smarty_tpl->tpl_vars['task']->value;
} else {
echo $_smarty_tpl->tpl_vars['sort']->value;
}?>&page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
'>Task
                </th>
                <th scope="col"><a
                        href='<?php echo $_smarty_tpl->tpl_vars['project_path']->value;?>
/?column=name&sort=<?php if ((isset($_smarty_tpl->tpl_vars['name']->value))) {
echo $_smarty_tpl->tpl_vars['name']->value;
} else {
echo $_smarty_tpl->tpl_vars['sort']->value;
}?>&page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
'>User</a>
                </th>
                <th scope="col"><a
                        href='<?php echo $_smarty_tpl->tpl_vars['project_path']->value;?>
/?column=email&sort=<?php if ((isset($_smarty_tpl->tpl_vars['email']->value))) {
echo $_smarty_tpl->tpl_vars['email']->value;
} else {
echo $_smarty_tpl->tpl_vars['sort']->value;
}?>&page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
'>Email
                </th>

                <th scope="col">Complete</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
        
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
</td>
                    <?php if ((isset($_smarty_tpl->tpl_vars['logged_in']->value)) && $_smarty_tpl->tpl_vars['logged_in']->value) {?>
                        <td>
                            <a  href="<?php echo $_smarty_tpl->tpl_vars['project_path']->value;?>
/task/<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['task']->value['task'];?>
</a>
                    <?php } else { ?>
                        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['task'];?>
</td>
                    <?php }?>
                    <td><?php echo $_smarty_tpl->tpl_vars['task']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['task']->value['email'];?>
</td>

                    <td><?php if (($_smarty_tpl->tpl_vars['task']->value['complete'])) {?> Complete <?php }?></td>
                    <td><?php if (($_smarty_tpl->tpl_vars['task']->value['edit'])) {?> edited <?php }?></td>
                </tr>
          
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>
    </table>
    <?php if ($_smarty_tpl->tpl_vars['page_count']->value > 1) {?>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['page_count']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page_count']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                    <li class="page-item <?php if ($_smarty_tpl->tpl_vars['foo']->value == $_smarty_tpl->tpl_vars['current_page']->value) {?> active <?php }?>">
                        <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['project_path']->value;?>
/?column=<?php echo $_smarty_tpl->tpl_vars['column']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>

                        </a>
                    </li>
                <?php }
}
?>
            </ul>
        </nav>
    <?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender('file:default.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mainContent'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content')), 0, false);
}
}
