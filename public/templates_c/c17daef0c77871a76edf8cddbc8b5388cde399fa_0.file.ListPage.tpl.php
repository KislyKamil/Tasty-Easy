<?php
/* Smarty version 3.1.33, created on 2019-12-12 23:17:54
  from 'C:\xampp\htdocs\Tasty&Easy\app\views\ListPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df2bc92700f85_69498782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c17daef0c77871a76edf8cddbc8b5388cde399fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tasty&Easy\\app\\views\\ListPage.tpl',
      1 => 1560546196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df2bc92700f85_69498782 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="banner" class="container1">

    <?php $_smarty_tpl->_assignInScope('x', 1);?>

    <table id="table">

        <thead>
            <tr>
                <th id="ft">name</th>
                <th id="ft">address</th>
                <th id="ft">phone</th>
                <th id="null"></th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'l');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
?>


                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['l']->value["login"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['l']->value["address"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['l']->value["phone"];?>
</td>
                    <td id="but">  
                        <div id="del" onclick="onDelete('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
deleteUser/<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
', 'Czy na pewno usunąć rekord ?');">
                            <a id="button"><span class="glyphicon glyphicon-remove"></span>  Delete</a>
                        </div>
                    </td>

            <p style="display: none"><?php echo $_smarty_tpl->tpl_vars['x']->value++;?>
</p>
            </tr>     

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>


<ul class="pagination" >
    <li class="page-item"><a class="page-link"  onclick="nextPage('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
nextShow/<?php echo $_smarty_tpl->tpl_vars['prevPage']->value;?>
', 0, 'list');">Previous</a></li>


    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>

        <li class="page-item"><a class="page-link" onclick="nextPage('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
nextShow/<?php echo $_smarty_tpl->tpl_vars['i']->value-1;?>
', <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, 'list');"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>


    <?php }
}
?>
    <li class="page-item"><a class="page-link"  onclick="nextPage('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
nextShow/<?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
', <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, 'list');">Next</a></li>
</ul><?php }
}
