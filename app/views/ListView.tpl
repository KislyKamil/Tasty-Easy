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
                    <li class="active">Logged as: Admin</li>
                    <li><a href="{$conf->action_url}orderShow"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                    <li><a href="{$conf->action_url}panelShow"> Orders list</a></li>
                    <li><a href="{$conf->action_root}logout"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                </ul>
            </nav>
        </div>

        <!-- Banner -->
        <div id="list">
            <div id="banner" class="container1">

                {assign var="x" value=1}

                <table id="table">

                    <thead>
                        <tr>
                            <th id="ft">name</th>
                            <th id="ft">address</th>
                            <th id="ft">phone</th>
                            <th id="null"></th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $list as $l}


                            <tr>
                                <td>{$l["login"]}</td>
                                <td>{$l["address"]}</td>
                                <td>{$l["phone"]}</td>
                                <td id="but">  
                                    <div id="del" onclick="onAction('{$conf->action_url}deleteUser/{$l['id']}', 'Are u sure?');">
                                        <a id="button"><span class="glyphicon glyphicon-remove"></span>  Delete</a>
                                    </div>
                                </td>

                        <p style="display: none">{$x++}</p>
                        </tr>     

                    {/foreach}
                    </tbody>
                </table>
            </div>


            <ul class="pagination" >
                <li class="page-item"><a class="page-link" >Previous</a></li>
                    {assign var="idx" value=0}

                {for $i=1 to $pages}

                    <li class="page-item"><a class="page-link" onclick="nextPage('{$conf->action_url}nextShow/{$i-1}', {$i}, 'list');">{$i}</a></li>


                {/for}
                <li class="page-item"><a class="page-link"  onclick="nextPage('{$conf->action_url}nextShow/1', {$i}, 'list');">Next</a></li>
            </ul>
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