{extends file="main.tpl"}

{block name=head}
    <link rel="stylesheet" type="text/css" href="{$conf->app_url}/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{$conf->app_url}/css/style1.css" />
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .messages > ul{
            list-style-type: none;
        }
        .img {
            margin: 20px;
            padding: 20px;
            background: white;
        }
        .w3-lobster {
            font-family: "Lobster", Sans-serif;
            font-size: 250%;
        }

    </style>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=brick-sign">
    <link rel="stylesheet" type="text/css" href="{$conf->app_url}/css/signin.css" />
{/block}



<div class="centered">

    {block name=content}
        <div class="w3-container w3-lobster font-effect-brick-sign">
            <p class="w3-xxxlarge">Tasty&Easy</p>

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
        <div class="img">
            <form action="{$conf->action_root}login" method="post" class="pure-form pure-form-aligned bottom-margin" >


                <div><img src="images/f.jpg" alt=""></div> 

                <label for="id_login" class="sr-only">Login</label>
                <input type="text" name="login" id="login" class="form-control" placeholder="Login" required autofocus>
                <label for="id_pass" class="sr-only">Hasło</label>
                <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

            </form>	
            <form action= "{$conf->action_url}goSignup" method="post" class="pure-form pure-form-aligned bottom-margin" >
                <p> Dont have account?</p>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up now!</button>

            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/boots

        {/block}

        {block name=footer}

        {/block}


