<?php

function html_head($title){
echo <<<HTML
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>$title - Yuki Tetsuka</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
        <!-- <script src="https://kit.fontawesome.com/64b13ac423.js" crossorigin="anonymous"></script> -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
HTML;
}


function html_header(){
    echo <<<HTML
        <header class="section">
            <div class="container ml-1">
                <h1 class="title">
                    Yuki Tetsuka's Portfolio
                </h1>
                <p class="subtitle">
                    I am a <strong>developer</strong>!
                </p>
            </div>
        </header>
    HTML;
    }

function html_sidebar($active){

echo <<<HTML

            <aside class="menu">
                <p class="menu-label">General</p>
                <ul class="menu-list">
                    <li><a>About</a></li>
                    <li><a>History</a></li>
                    <li><a>Skill</a></li>
                </ul>
                <p class="menu-label">Administration</p>
                <ul class="menu-list">
                    <li><a>Team Settings</a></li>
                    <li>
                        <a class="is-active">Manage Your Team</a>
                        <ul>
                            <li><a>Members</a></li>
                            <li><a>Plugins</a></li>
                            <li><a>Add a member</a></li>
                        </ul>
                    </li>
                    <li><a>Invitations</a></li>
                    <li><a>Cloud Storage Environment Settings</a></li>
                    <li><a>Authentication</a></li>
                </ul>
                <p class="menu-label">Transactions</p>
                <ul class="menu-list">
                    <li><a>Payments</a></li>
                    <li><a>Transfers</a></li>
                    <li><a>Balance</a></li>
                </ul>
            </aside>
HTML;
}

function html_footer(){
    echo <<<HTML
        <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>.
                The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The
                website content is licensed
                <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
            </p>
        </div>
    </footer>
    HTML;
    }