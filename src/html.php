<?php

function html_head($title){
echo <<<HTML
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>$title - Yuki Tetsuka</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
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
            <aside class="menu"
            style="">
                <p class="menu-label">General</p>
                <ul class="menu-list">
                    <li><a class="is-active" href="./#about">About</a></li>
                    <li><a href="./#myhistory">History</a></li>
                    <li><a href="./#skill">Skill</a></li>
                    <li><a href="./#mycount">Count</a></li>
                    <li><a href="./#mygithub">Github</a></li>
                </ul>
                <p class="menu-label">Administration</p>
                <ul class="menu-list">
                    <li><a>Team Settings</a></li>
                    <li>
                        <a >Manage Your Team</a>
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
                I am <strong>Y</strong>uki <strong>T</strong>etsuka.
                <br>
                <small>&copy; Copyright All Rights Reserved <a href="https://yukitetsuka.com" target="_blank" rel="noopener noreferrer">YukiTetsuka</a></small>
            </p>
        </div>
    </footer>
    HTML;
    }