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

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="{$conf->app_url}/css/skel.css" />
    <link rel="stylesheet" href="{$conf->app_url}/css/style.css" />
    <link rel="stylesheet" href="{$conf->app_url}/css/style-wide.css" />






{/block}
{block name=content}

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
                <a href="{$conf->action_root}signupShow" class="button medium">Signup now</a>
                <a href="{$conf->action_root}loginShow" class="button medium">Sign in</a><br>

            </section>
        </div>

        <!-- Extra -->



        {assign var="img" value=1}
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