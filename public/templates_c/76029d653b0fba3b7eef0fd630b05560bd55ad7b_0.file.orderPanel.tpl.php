<?php
/* Smarty version 3.1.33, created on 2019-12-12 23:18:09
  from 'C:\xampp\htdocs\Tasty&Easy\app\views\orderPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df2bca1747966_21216095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76029d653b0fba3b7eef0fd630b05560bd55ad7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tasty&Easy\\app\\views\\orderPanel.tpl',
      1 => 1561406122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df2bca1747966_21216095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8806952595df2bca16d2666_68268239', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_820847275df2bca16f9766_63778765', 'content');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3413158035df2bca1720861_16533488', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'head'} */
class Block_8806952595df2bca16d2666_68268239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_8806952595df2bca16d2666_68268239',
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

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
</head>




<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_820847275df2bca16f9766_63778765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_820847275df2bca16f9766_63778765',
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
                    <li class="active">Zalogowano: Admin</li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
orderShow"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
listShow"><span class="glyphicon glyphicon-list"></span>  Lista uzytkownikow</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout"><span class="glyphicon glyphicon-log-out"></span> Wyloguj</a></li>
                </ul>
            </nav>
        </div>

        <!-- Banner -->
        <div id="list">
            <div id="banner" class="container1">

                <?php $_smarty_tpl->_assignInScope('x', 0);?>



                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value, 'l');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
?>

                    <div id="priamry"> <a id="us"><?php echo $_smarty_tpl->tpl_vars['cs']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</a>
                        <div>
                            meal{
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['l']->value, 'q');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['q']->value) {
?>
                                <?php echo $_smarty_tpl->tpl_vars['q']->value;?>


                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            }
                        </div>

                        <?php echo $_smarty_tpl->tpl_vars['date']->value[$_smarty_tpl->tpl_vars['x']->value];?>

                    </div>
                    <div id="cancel" onclick="onAction('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
deleteOrder/<?php echo $_smarty_tpl->tpl_vars['id']->value[$_smarty_tpl->tpl_vars['x']->value];?>
', 'Anulowac zamowienie?');"><a id="button"><span class="glyphicon glyphicon-remove"></span>  Cancel</a>

                    </div>
                    <div id="approve" onclick="onAction('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
confirmOrder/<?php echo $_smarty_tpl->tpl_vars['id']->value[$_smarty_tpl->tpl_vars['x']->value];?>
', 'Potwierdzic zamowienie?');"><a id="button"><span class='far fa-thumbs-up' style='font-size:150%'></span> Send</a>
                    </div <?php echo $_smarty_tpl->tpl_vars['x']->value++;?>
>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


            </div>


        </div>


    <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_3413158035df2bca1720861_16533488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3413158035df2bca1720861_16533488',
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
