<?php
/* Smarty version 3.1.33, created on 2019-12-12 23:29:42
  from 'C:\xampp\htdocs\Tasty&Easy\app\views\AppView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df2bf567b8bc0_97196345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7654f61f630bcea2f1769592bdb2860dac281aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tasty&Easy\\app\\views\\AppView.tpl',
      1 => 1576189753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df2bf567b8bc0_97196345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4032438905df2bf567438c7_34951916', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_887728715df2bf5676a9c5_05991851', 'content');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13514861375df2bf56791ac3_26259257', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'head'} */
class Block_4032438905df2bf567438c7_34951916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_4032438905df2bf567438c7_34951916',
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

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/tablica.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/skel.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style-wide.css" />


    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>



<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_887728715df2bf5676a9c5_05991851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_887728715df2bf5676a9c5_05991851',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div id="popup" onclick="off();">
        <div id="ad">Your meal is ready in cart  </div>

    </div>



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


                    <li class="active">Logged as: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
                        
                        <?php if ($_smarty_tpl->tpl_vars['role']->value != 'admin') {?>
                        <li id="cart">
                            
                          
                            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
cartShow"><span class="glyphicon glyphicon-shopping-cart" style='font-size:120%;'></span>   Cart</a>
                        </li>

                    <?php } else { ?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
panelShow"> Order Panel</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
listShow"><span class="glyphicon glyphicon-list"></span>  Users list</a></li>
                        <?php }?>


                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"><span class="glyphicon glyphicon-log-out"></span>  Log out</a></li>
                </ul>
            </nav>
        </div>

        <!-- Banner -->
        <div id="banner" class="container1">
            <section>
                <p> Choose food u want to order</p>

            </section>
        </div>

        <!-- Extra -->


        <?php $_smarty_tpl->_assignInScope('img', 1);?>
        <div id="extra" class="container2">





            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">

                    <div class="item active">



                        <img src="images/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
.jpg" alt=""></a>

                        <div class="box">

                            <a class="button" id="send" name="product" value="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" onclick="order('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addProduct/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
,'cart');">Order</a> 

                        </div>

                        <?php $_smarty_tpl->_assignInScope('img', $_smarty_tpl->tpl_vars['img']->value+1);?>
                    </div>
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['rows']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['rows']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <div class="item">

                            <img src="images/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
.jpg" alt=""></a>

                            <div class="box" >

                                <a class="button" id="send" name="product" value="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
"onclick="order('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addProduct/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
,'cart');" >Order</a> 
                            </div>
                            <?php $_smarty_tpl->_assignInScope('img', $_smarty_tpl->tpl_vars['img']->value+1);?>
                        </div>
                    <?php }
}
?>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>



    <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_13514861375df2bf56791ac3_26259257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_13514861375df2bf56791ac3_26259257',
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
