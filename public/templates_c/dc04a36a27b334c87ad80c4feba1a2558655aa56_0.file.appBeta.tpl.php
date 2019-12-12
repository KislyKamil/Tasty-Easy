<?php
/* Smarty version 3.1.33, created on 2019-05-22 00:12:01
  from 'D:\Xampp\htdocs\Tasty&Easy\app\views\appBeta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce477b1ea2b14_67181429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc04a36a27b334c87ad80c4feba1a2558655aa56' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\Tasty&Easy\\app\\views\\appBeta.tpl',
      1 => 1558476719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce477b1ea2b14_67181429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3929044495ce477b1e8b408_12726047', 'head');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15040000835ce477b1e8f282_33127168', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15832640505ce477b1e9ec93_77861450', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'head'} */
class Block_3929044495ce477b1e8b408_12726047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_3929044495ce477b1e8b408_12726047',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <title>Tasty&Easy</title>








    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_15040000835ce477b1e8f282_33127168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15040000835ce477b1e8f282_33127168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<<div class="wrapper style1">

        <!-- Header -->
        <div id="header" class="skel-panels-fixed">
            <div id="logo">
                <h1><a href="AppView.tpl">Tasty&Easy</a></h1>
                <span class="tag"></span>
            </div>
            <nav id="nav">
                <ul>
                    <li class="active"><a href="AppView.tpl">Homepage</a></li>
                    <li><a href="#">opcja 1</a></li>
                    <li><a href="#">opcja 2</a></li>
                    <li><a href="#">Wyloguj</a></li>
                </ul>
            </nav>
        </div>

        <!-- Banner -->
        <div id="banner" class="container1">
            <section>
                <p>Welcome on <strong>Tasty&Easy</strong>  where you can oreder you favorite meal without taking step out from your house or work place!</p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
signupShow" class="button medium">Signup now</a>
            </section>
        </div>

        <!-- Extra -->

        <div class="container">

            <?php $_smarty_tpl->_assignInScope('img', 1);?>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">

                    <div class="item active">



                        <img src="images/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
.jpg" alt=""></a>
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



        <!-- Main -->
        <div id="main">
            <div class="container1">
                <div class="row"> 

                    <!-- Content -->
                    <div class="6u">
                        <section>
                            <ul class="style">
                                <li class="fa fa-wrench">
                                    <h3>Zero wysiłku</h3>
                                    <span></span> </li>
                                <li class="fa fa-leaf">
                                    <h3>Zdrowa kuchnia</h3>
                                    <span></span> </li>
                            </ul>
                        </section>
                    </div>
                    <div class="6u">
                        <section>
                            <ul class="style">
                                <li class="fa fa-cogs">
                                    <h3>Szybka obsługa</h3>
                                    <span></span> </li>
                                <li class="fa fa-road">
                                    <h3>Zawsze z dostawą do klienta</h3>
                                    <span></span> </li>
                            </ul>
                        </section>
                    </div>
                </div>

            </div>

        </div>

<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_15832640505ce477b1e9ec93_77861450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15832640505ce477b1e9ec93_77861450',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <!-- Footer -->
        <div id="footer" class="wrapper style2">
            <div class="container1">
                <section>
                    <header class="major">
                        <h2>Wiadomość do bazy</h2>
                        <span class="byline">możliwość wysyłania feedback'u i bug report do bazy (trzeba stworzyć nową tabele!)</span>
                    </header>
                    <form method="post" action="#">
                        <div class="row half">
                            <div class="12u">
                                <input class="text" type="text" name="name" id="name" placeholder="Name" />
                            </div>
                        </div>
                        <div class="row half">
                            <div class="12u">
                                <input class="text" type="text" name="email" id="email" placeholder="Email" />
                            </div>
                        </div>
                        <div class="row half">
                            <div class="12u">
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="row half">
                            <div class="12u">
                                <ul class="actions">
                                    <li>
                                        <input type="submit" value="Send Message" class="button alt" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>

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
