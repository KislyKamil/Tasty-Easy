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

    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
    

    <link rel="stylesheet" href="{$conf->app_url}/css/tablica.css" />
    <link rel="stylesheet" href="{$conf->app_url}/css/skel.css" />
    <link rel="stylesheet" href="{$conf->app_url}/css/style.css" />
    <link rel="stylesheet" href="{$conf->app_url}/css/style-wide.css" />

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
</head>




{/block}
{block name=content}

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
                    <li class="active">Logged as: Admin</li>
                    <li><a href="{$conf->action_url}orderShow"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                    <li><a href="{$conf->action_url}listShow"><span class="glyphicon glyphicon-list"></span>  Users list </a></li>
                    <li><a href="{$conf->action_root}logout"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                </ul>
            </nav>
        </div>

        <!-- Banner -->
        <div id="list">
            <div id="banner" class="container1">

                {assign var="x" value=0}



                {foreach $order as $l}

                    <div id="priamry"> <a id="us">{$cs[$x]}</a>
                        <div>
                            meal{
                            {foreach $l as $q}
                                {$q}

                            {/foreach}
                            }
                        </div>

                        {$date[$x]}
                    </div>
                    <div id="cancel" onclick="onAction('{$conf->action_url}deleteOrder/{$id[$x]}', 'Anulowac zamowienie?');"><a id="button"><span class="glyphicon glyphicon-remove"></span>  Cancel</a>

                    </div>
                    <div id="approve" onclick="onAction('{$conf->action_url}confirmOrder/{$id[$x]}', 'Potwierdzic zamowienie?');"><a id="button"><span class='far fa-thumbs-up' style='font-size:150%'></span> Send</a>
                    </div {$x++}>

                {/foreach}


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