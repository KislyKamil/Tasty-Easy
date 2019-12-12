<?php
/* Smarty version 3.1.33, created on 2019-12-12 23:29:59
  from 'C:\xampp\htdocs\Tasty&Easy\app\views\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df2bf674e2466_75778885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89586c9e42f39ac5dd02812df30d1bd5ec4ca18d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tasty&Easy\\app\\views\\ListView.tpl',
      1 => 1576189679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df2bf674e2466_75778885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9082822675df2bf6746d169_22207985', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5358010705df2bf67494264_97079762', 'content');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9171869455df2bf674bb363_88530579', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'head'} */
class Block_9082822675df2bf6746d169_22207985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_9082822675df2bf6746d169_22207985',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <title>Tasty&Easy</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/skel.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/skel-layers.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/init.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/script.js"><?php echo '</script'; ?>
>

    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/tablica.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/skel.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style-wide.css" />






<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_5358010705df2bf67494264_97079762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5358010705df2bf67494264_97079762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- Wrapper -->
    <div class="wrapper style1">

        <!-- Header -->
        <div id="header" class="skel-panels-fixed">
            <div id="logo">
                <h1><a href="AppView.tpl">Tasty&Easy</a></h1>
                <span class="tag"></span>
            </div>

            <nav id="nav">
                <ul>
                    <li class="active">Logged as: Admin</li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
orderShow"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
panelShow"> Panel zamówień</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                </ul>
            </nav>
        </div>

        <!-- Banner -->
        <div id="list">
            <div id="banner" class="container1">

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
                                    <div id="del" onclick="onAction('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
deleteUser/<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
', 'Are u sure?');">
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
                <li class="page-item"><a class="page-link" >Previous</a></li>
                    <?php $_smarty_tpl->_assignInScope('idx', 0);?>

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
nextShow/1', <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, 'list');">Next</a></li>
            </ul>
        </div>


    <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_9171869455df2bf674bb363_88530579 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_9171869455df2bf674bb363_88530579',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <!-- Copyright -->
        <div id="copyright1">
            <div class="container1">
                <div class="copyright">
                    <p>App made by Kamil Kisły</p>
                    <ul class="icons">
                        <li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
                        <li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
                        <li><a href="#" class="fa fa-instagram"><span>Google+</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

    <?php
}
}
/* {/block 'footer'} */
}
