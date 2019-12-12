<?php
/* Smarty version 3.1.33, created on 2019-05-20 11:26:23
  from 'C:\xampp\htdocs\Tasty&Easy\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce272bf7e0e51_31654688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18ecd1c23ac28d5bd14d83e92d72aa2086a7e6e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tasty&Easy\\app\\views\\templates\\main.tpl',
      1 => 1557072246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce272bf7e0e51_31654688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html class="no-js" lang="pl">
    <head>
        



        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9737653405ce272bf7dfb64_96115576', 'head');
?>

    </head>
    <body class="text-center">

        <div style="margin: auto;">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2582172595ce272bf7e0346_34954896', 'content');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15565517785ce272bf7e09a3_89948050', 'footer');
?>

    </div>
</footer>
</html><?php }
/* {block 'head'} */
class Block_9737653405ce272bf7dfb64_96115576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_9737653405ce272bf7dfb64_96115576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_2582172595ce272bf7e0346_34954896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2582172595ce272bf7e0346_34954896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_15565517785ce272bf7e09a3_89948050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15565517785ce272bf7e09a3_89948050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
