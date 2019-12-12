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
                    <li class="active">Logged as: {$name}</li>
                    <li><a href="{$conf->action_url}orderShow"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                    <li><a href="{$conf->action_root}logout"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                </ul>
            </nav>
        </div>

        <!-- Banner -->

        <div id="banner" class="container1">

           {$del}
            <table id="table">


                <tbody>
                    
                    {foreach $meal as $row}
                        <tr>

                            <td>{$row}</td> 
                            <td id="but">  
                                    
                                <div id="del" onclick="onAction('{$conf->action_url}deleteProduct/{$ix}', 'Are u sure?');">
                                    <a id="button"><span class="glyphicon glyphicon-remove"></span>  Delete</a>
                                </div>
                                <div style=" display: none"{$ix++}</div>
                            </td>

                        </tr>                        
                    {/foreach}
                </tbody>

            </table>
            <div id="order" onclick="onAction('{$conf->action_url}order', 'Are u sure?');">
                <a id="button"> Confirm&Send</a>
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