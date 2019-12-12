{extends file="main.tpl"}

{block name=head}
    <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link href="{$conf->app_url}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="{$conf->app_url}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


    <link href="{$conf->app_url}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{$conf->app_url}/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">


    <link href="{$conf->app_url}/css/main.css" rel="stylesheet" media="all">
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

{/block}
<div class="centered">
    {block name=content}
        <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
            <div class="wrapper wrapper--w960">

                <div class="card card-2">
                    <div class="card-heading"></div>
                    <div class="card-body">
                        <h2 class="title">Rejestracja</h2>
                        <form action="{$conf->action_url}signup" method="POST">
                            <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="login" name="login">
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
            {if $msgs->isMessage()}
                <div class="messages">
                    <ul>
                        {foreach $msgs->getMessages() as $msg}
                            {strip}
                                <li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
                                {/strip}
                            {/foreach}
                    </ul>
                </div>
            {/if}
        </div>


        <script src="{$conf->app_url}/vendor/jquery/jquery.min.js"></script>

        <script src="{$conf->app_url}/vendor/select2/select2.min.js"></script>
        <script src="{$conf->app_url}/vendor/datepicker/moment.min.js"></script>
        <script src="{$conf->app_url}/vendor/datepicker/daterangepicker.js"></script>


        <script src="{$conf->app_url}js/global.js"></script>





    </div>

</div>

{/block}