<?php
/* Smarty version 3.1.33, created on 2019-05-28 23:08:21
  from 'D:\Xampp\htdocs\Tasty&Easy\app\views\SignupView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ceda3454f8307_83990135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34f461fb251cea3184c9252fb237fbbb601a3165' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Tasty&Easy\\app\\views\\SignupView.tpl',
      1 => 1559077699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ceda3454f8307_83990135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11294556545ceda34544c4e9_01660823', 'head');
?>

<div class="centered">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10247726385ceda3454541e5_04754867', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'head'} */
class Block_11294556545ceda34544c4e9_01660823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_11294556545ceda34544c4e9_01660823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js" async defer><?php echo '</script'; ?>
>

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
    <style>

        .messages{

            background-color: #F0FFF0;
            font-weight: 800;
            font-size: 140%;
            color:#ff3333;
            border-radius: 15px;
            margin: 2px;
            padding: 7px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            

        }
        .messages > ul{
            list-style-type: none;
        }

    </style>

<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_10247726385ceda3454541e5_04754867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10247726385ceda3454541e5_04754867',
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
                        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
signup" method="POST">
                            <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="login/nazwa użytkownika" name="login">
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-2" type="password" placeholder="pasword" name="password">
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

                                
                        </form>
                    </div>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                <div class="messages">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
                            <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            <?php }?>
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





    </div>

</div>

<?php
}
}
/* {/block 'content'} */
}
