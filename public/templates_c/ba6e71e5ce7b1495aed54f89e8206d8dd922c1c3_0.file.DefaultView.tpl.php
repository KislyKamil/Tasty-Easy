<?php
/* Smarty version 3.1.33, created on 2019-06-02 15:47:36
  from 'D:\Xampp\htdocs\Tasty&Easy\app\views\DefaultView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf3d378dbbb95_32263777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba6e71e5ce7b1495aed54f89e8206d8dd922c1c3' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Tasty&Easy\\app\\views\\DefaultView.tpl',
      1 => 1559483252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf3d378dbbb95_32263777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20632157435cf3d378dac197_39089854', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7705661625cf3d378db3e90_65685514', 'content');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1634327525cf3d378db7d18_50777461', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'head'} */
class Block_20632157435cf3d378dac197_39089854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_20632157435cf3d378dac197_39089854',
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

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
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
class Block_7705661625cf3d378db3e90_65685514 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7705661625cf3d378db3e90_65685514',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- Wrapper -->
    <div class="wrapper style1">

        <!-- Header -->
        <div id="header" class="skel-panels-fixed">
            <div id="logo">
                <h1><a>Tasty&Easy</a></h1>
                <span class="tag"></span>
            </div>
            <nav id="nav">
                <ul>




                </ul>
            </nav>
        </div>

        <!-- Banner -->
        <div id="banner" class="container1">
            <section>
                <p>Welcome on <strong>Tasty&Easy</strong>  where you can oreder you favorite meal without taking step out from your house or work place!</p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
signupShow" class="button medium">Signup now</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="button medium">Sign in</a><br>

            </section>
        </div>

        <!-- Extra -->



        <?php $_smarty_tpl->_assignInScope('img', 1);?>
        <div id="extra" class="container3">
            <div id="main">
                <div class="container3">
                    <div class="row"> 

                        <!-- Content -->
                        <div class="6u">
                            <section>
                                <ul class="style">
                                    <li class='fas fa-pepper-hot' style='font-size:150%'>
                                        <h3>Integer ultrices</h3>
                                        <span>In an.</span> </li>
                                    <li class='fas fa-cheese' style='font-size:150%'>
                                        <h3>Aliquam luctus</h3>
                                        <span>In ligula. </span> </li>
                                </ul>
                            </section>
                        </div>
                        <div class="6u">
                            <section>
                                <ul class="style">
                                    <li class="fas fa-bacon" style='font-size:150%'>
                                        <h3>Integer ultrices</h3>
                                        <span>In ols accumsan.</span> </li>
                                    <li class='fas fa-drumstick-bite' style='font-size:150%'>
                                        <h3>Aliquam luctus</h3>
                                        <span>In accumsan.</span> </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>


        </div>



    <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1634327525cf3d378db7d18_50777461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1634327525cf3d378db7d18_50777461',
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
