<?php
/* Smarty version 3.1.33, created on 2019-05-05 18:05:39
  from 'D:\Xampp\htdocs\Tasty&Easy\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ccf09d31e4b86_80232373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df00da1134ea3ca75ea3c895f5ca7b535bd23da9' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Tasty&Easy\\app\\views\\templates\\main.tpl',
      1 => 1557072246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ccf09d31e4b86_80232373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html class="no-js" lang="pl">
    <head>
        



        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_567026375ccf09d31d9003_16507742', 'head');
?>

    </head>
    <body class="text-center">

        <div style="margin: auto;">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20456725175ccf09d31dce87_80003420', 'content');
?>

        </div>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
    </body>
    <footer class="mastfoot mt-auto">
        <div class="inner">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8193043275ccf09d31e0d06_76234484', 'footer');
?>

    </div>
</footer>
</html><?php }
/* {block 'head'} */
class Block_567026375ccf09d31d9003_16507742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_567026375ccf09d31d9003_16507742',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_20456725175ccf09d31dce87_80003420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20456725175ccf09d31dce87_80003420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_8193043275ccf09d31e0d06_76234484 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8193043275ccf09d31e0d06_76234484',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
