<?php
/* Smarty version 3.1.33, created on 2019-04-28 21:46:07
  from 'D:\Xampp\htdocs\Tasty&Easy\app\views\signupView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc602ffba9b37_12805737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e333c060082c4abe4064c231e9c00e37968062cd' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Tasty&Easy\\app\\views\\signupView.tpl',
      1 => 1556477366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc602ffba9b37_12805737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9106644315cc602ffb9dfb5_23040470', 'head');
?>

<div class="centered">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20315405155cc602ffba5cb0_05026275', 'content');
?>

</div>


		<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'head'} */
class Block_9106644315cc602ffb9dfb5_23040470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_9106644315cc602ffb9dfb5_23040470',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


 
    <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    
    <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    
    <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css" rel="stylesheet" media="all">


<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_20315405155cc602ffba5cb0_05026275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20315405155cc602ffba5cb0_05026275',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Rejestracja</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="login" name="login">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                 <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="password" name="password">
                        </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="adres" name="adres">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                             <input class="input--style-2" type="text" placeholder="phone" name="phone">
                        </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Utwórz</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/datepicker/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/vendor/datepicker/daterangepicker.js"><?php echo '</script'; ?>
>

    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
js/global.js"><?php echo '</script'; ?>
>



<?php
}
}
/* {/block 'content'} */
}
