{extends file="main.tpl"}

{block name=head}
    <title>Tasty&Easy</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="{$conf->app_url}/js/jquery.min.js"></script>
    <script src="{$conf->app_url}/js/jquery.dropotron.min.js"></script>
    <script src="{$conf->app_url}/js/skel.min.js"></script>
    <script src="{$conf->app_url}/js/skel-layers.min.js"></script>
    <script src="{$conf->app_url}/js/init.js"></script>
    <script src="{$conf->app_url}/js/script.js"></script>

    <link rel="stylesheet" href="{$conf->app_url}/css/tablica.css" />
    <link rel="stylesheet" href="{$conf->app_url}/css/skel.css" />
    <link rel="stylesheet" href="{$conf->app_url}/css/style.css" />
    <link rel="stylesheet" href="{$conf->app_url}/css/style-wide.css" />


    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>



{/block}
{block name=content}


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


                    <li class="active">Logged as: {$name}</li>
                        
                        {if $role != 'admin'}
                        <li id="cart">
                            
                          
                            <a href="{$conf->action_url}cartShow"><span class="glyphicon glyphicon-shopping-cart" style='font-size:120%;'></span>   Cart</a>
                        </li>

                    {else}
                        <li><a href="{$conf->action_url}panelShow"> Order Panel</a></li>
                        <li><a href="{$conf->action_url}listShow"><span class="glyphicon glyphicon-list"></span>  Users list</a></li>
                        {/if}


                    <li><a href="{$conf->action_url}logout"><span class="glyphicon glyphicon-log-out"></span>  Log out</a></li>
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


        {assign var="img" value=1}
        <div id="extra" class="container2">





            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">

                    <div class="item active">



                        <img src="images/{$img}.jpg" alt=""></a>

                        <div class="box">

                            <a class="button" id="send" name="product" value="{$img}" onclick="order('{$conf->action_url}addProduct/{$img}',{$img},'cart');">Order</a> 

                        </div>

                        {$img=$img+1}
                    </div>
                    {for $i=1 to $rows}
                        <div class="item">

                            <img src="images/{$img}.jpg" alt=""></a>

                            <div class="box" >

                                <a class="button" id="send" name="product" value="{$img}"onclick="order('{$conf->action_url}addProduct/{$img}',{$img},'cart');" >Order</a> 
                            </div>
                            {$img=$img+1}
                        </div>
                    {/for}
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



    {/block}
    {block name=footer}


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

    {/block}