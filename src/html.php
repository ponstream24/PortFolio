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
                    <li><a id="page_about" href="./#about">About</a></li>
                    <li><a id="page_myhistory" href="./#myhistory">History</a></li>
                    <li><a id="page_skill" href="./#skill">Skill</a></li>
                    <li><a id="page_mycount" href="./#mycount">Count</a></li>
                    <li><a id="page_mygithub" href="./#mygithub">Github</a></li>
                </ul>
                <p class="menu-label">Contents</p>
                <ul class="menu-list">
                    <li>
                        <a>Web System</a>
                        <ul>
                            <li><a id="page_sso">Single Sign-On</a></li>
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
            <script>
                document.getElementById("page_{$active}").classList.add("is-active");
            </script>
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

    <button id="back-to-top" class="button is-primary"
    style="
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
        font-size: larger;
        padding: 10px;
        border-radius: 50%;
        display: flex;
    ">
        <i class='bx bx-up-arrow-alt'></i>
    </button>

    <script>
        // スクロールイベントを監視してボタンの表示/非表示を切り替える
        window.addEventListener('scroll', function() {
            var button = document.getElementById('back-to-top');
            if (window.pageYOffset > 100) {
                button.style.display = 'flex';
            } else {
                button.style.display = 'none';
            }
        });

        // ボタンをクリックしたときにページの上部にスクロールする
        document.getElementById('back-to-top').addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
HTML;
}