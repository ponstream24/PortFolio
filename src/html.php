<?php

function html_head($title){
echo <<<HTML
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>$title - Yuki Tetsuka</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-4D17W0GVZ8"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-4D17W0GVZ8');
        </script>
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
                            <li><a id="page_shorturl" href="./shorturl">URL短縮ツール</a></li>
                            <li><a id="page_webeditor" href="./webeditor" data-des="Web上で動くプログラムエディタです。 https://isedit.itsystem-lab.com [ IsEdit ]">Webエディタ - IsEdit</a></li>
                            <li><a id="" data-des="Web上で動く会話できるインカムです。プッシュトークのため混線しません。[ Income ]">インカムシステム</a></li>
                            <li><a id="" data-des="シングル・サインオンシステムです。社内システムはすべてこれでOK! [ IGCAccount ]">Single Sign-On</a></li>
                            <li><a id="" data-des="Discord上で人狼ゲームが遊べるBotのダッシュボード。それぞれのゲーム構成などを自分好みに変更できます。[ WereWolfGamesDashboard ]">ゲーム用ダッシュボード</a></li>
                            <li><a id="" data-des="ユーザー認証システムです。ログイン機構はすべてこれでOK! [ I-Bound ]">認証システム</a></li>
                            <li><a id="" data-des="RSA暗号化・公開秘密鍵などの計算が可能です。もちろんn進数の標準計算もカバー[ CalcTool ]">万能計算機</a></li>
                            <li><a id="" data-des="契約更新やお知らせ、チャットやシフト調整、表彰などオールインワンのポータルサイトです。[ ImaginicPortalSite ]">社内ポータルサイト</a></li>
                            <li><a id="" data-des="IGCAccountに標準でついているOauth2用などを使用するためのサンプル [ IGCAccountAPISample ]">Oauth2のサンプル</a></li>
                            <li><a id="" data-des="サークル内で使用するAPIです。DBの管理やメールの管理などを元に、当会の各システムと連携を行っています。 [ ITsystemLabAPI ]">ITsystemLabAPI</a></li>
                            <li><a id="" data-des="社内で使用するAPIです。DBの管理やメールの管理などを元に、当社の各システムと連携を行っています。 [ 割り当てなし(ImaginicAPI) ]">ImaginicAPI</a></li>
                            <li><a id="" data-des="DBの管理やメールの管理などを元に、各システムと連携を行う基盤です。 [ Custom API ]">Custom API</a></li>
                            <li><a id="" data-des="作成したAPI等のDocumentを記録するシステムです。 [ Custom Doc ]">Custom Doc</a></li>
                            <li><a id="" data-des="どの端末からでもいつアクセスしても完全同期された音声が再生されます。 [ TDRinMinecraftSound ]">完全同期音声再生システム</a></li>
                            <li><a id="" data-des="25565/TCPにてMinecraftサーバからPingを取得しゲーム内のサーバーリストのように表示します。(複数サーバー対応) [ serverStatus ]">マイクラサーバーステータス</a></li>
                            <li><a id="" data-des="直リンク用のファイルアップローダーです。[ IGCloud ]">コンテンツアップローダー</a></li>
                            <li><a id="" data-des="文化祭や学園祭で使えるモバイルオーダーシステムです。オンライン決済と現地で決済の選択ができます。 [ OrderlyGo ]">モバイルオーダー</a></li>
                            <li><a id="" data-des="OrderlyGoの管理者用ポータルです。 [ OrderlyGoMgmt ]">モバイルオーダーMgmt</a></li>
                            <li><a id="" data-des="OrderlyGoのお客様用サイトです。LINEのAPIであるLIFFを利用しているため、ログインが不要です。 [ OrderlyGoLIFF ]">モバイルオーダーLIFF</a></li>
                            <li><a id="" data-des="OrderlyGoの店舗様用ポータルです。 [ OrderlyGoShop ]">モバイルオーダーShop</a></li>
                            <li><a id="" data-des="IGCGames用の中央管理システムのWebAPIです。 [ IGCGDBWebAPI ]">ゲーム中央管理システム</a></li>
                            <li><a id="" data-des="Webで動く簡単なツールです。暗号化・復号化などの機能があります。 [ ToolsWebApp ]">ツールサイト</a></li>
                            <li><a id="" data-des="このサイトです。 [ PortFolio ]">ポートフォリオサイト</a></li>
                            <li><a id="" data-des="学際で使用した外部POSから売り上げ等取得したり、スタッフのシフト確認、店舗ごとのステータスを確認できるサイトです。 [ I-Lab-pos ]">POS集計・店舗運営サイト</a></li>
                            <li><a id="" data-des="学際で使用した店内BGMアプリです。再生リストやキューの概念があり、また完全同期で再生されています。 [ I-Lab-pos ]">店内BGM</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Native App</a>
                        <ul>
                            <li><a id="" data-des="CUIで動作するアドレス管理アプリです。登録・削除・変更・検索が可能です。またファイルベースでデータを保存しています。 [ AddressTool ]">アドレス帳</a></li>
                            <li><a id="" data-des="お絵描きソフトです。JavaのFrameを使って実装しています。基本的なお絵描きソフトの機能をまねています。 [ DrawJava ]">お絵描きソフト</a></li>
                            <li><a id="" data-des="Tomcatとjspを使ったポーカーゲームです。役の判別等に注力しました。 [ Pocker ]">ポーカーゲーム</a></li>
                            <li><a id="" data-des="ポケモンDBです。DataBaseにはH2を使ってます。 [ PokemonDB ]">ポケモンDB</a></li>
                            <li><a id="" data-des="カスタムしたMinecraft Serverです。Spigotベースで作成しています。 [ PixelCraft ]">カスタムMinecraftサーバー</a></li>
                            <li><a id="" data-des="カスタムしたMinecraft Proxy Serverです。BungeeCordベースで作成しています。 [ ProxyServer ]">カスタムプロキシサーバー</a></li>
                            <li><a id="" data-des="CLIのbashです。各サーバーのバックアップを自動で生成・アップロードします。 [ ImaginicServerBash ]">自動バックアップ</a></li>
                            <li><a id="" data-des="学際で使用した作品展示ソフトです。全PCからすべての作品にアクセス・実行できるようにしました。統計もとってます。 [ EasyAccess ]">作品展示ソフト</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Bot</a>
                        <ul>
                            <li>
                                <a>Discord Bot</a>
                                <ul>
                                    <li><a id="" data-des="Discordでのコミュニティのサポートを行うBotです。 [ PonPon ]">DiscordコミュニティアシストBot</a></li>
                                    <li><a id="" data-des="Discordのより便利をBotにしました。 [ PonPon_Bata ]">Discord便利Bot</a></li>
                                    <li><a id="" data-des="Discordでのコミュニティのサポートを行うBotです。 [ Imaginic Bot ]">コミュニティBot</a></li>
                                    <li><a id="" data-des="LINEとDiscordをつなぐBotです。 https://licord.ponfes.com/ [ Licord ]">LINEとメッセージ連携</a></li>
                                    <li><a id="" data-des="Discord上で人狼ゲームがプレイできるようなるBotです。 [ WereWolfGames ]">人狼ゲーム</a></li>
                                </ul>
                            </li>
                            <li>
                                <a>LINE Bot</a>
                                <ul>
                                <li><a id="" data-des="LINEとDiscordをつなぐBotです。 https://licord.ponfes.com/ [ Licord ]">Discordとメッセージ連携</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>Plugin</a>
                        <ul>
                            <li>
                                <a>Bukkit</a>
                                <ul>
                                    <li><a id="" data-des="事前にGoogleFormにて規約の同意等行わないとアクセスできないようにするプラグイン [ OnlyLogin ]">事前エントリー制プラグイン</a></li>
                                    <li><a id="" data-des="サーバー管理者用のプラグイン [ PonManager ]">管理者プラグイン</a></li>
                                    <li><a id="" data-des="アトラクションを作成する上で必要な挙動を制御するプラグイン [ MotiMCore ]">アトラクションプラグイン</a></li>
                                    <li><a id="" data-des="建築するワールドごとにオーナーなどを割り当てて権限管理するプラグイン [ IGCBuilder ]">建築管理プログラム</a></li>
                                    <li><a id="" data-des="ドラゴンスレイヤーをプレイするためのプラグイン [ DragonSlayerShowdown ]">ドラゴンスレイヤーゲーム</a></li>
                                    <li><a id="" data-des="トロッコのスピードなどを制御するプラグイン [ BHRCtrl ]">トロッコ制御プラグイン</a></li>
                                    <li><a id="" data-des="サーバーのバックアップをDropboxにアップロードするプラグイン [ ServerBackup ]">バックアッププラグイン</a></li>
                                    <li><a id="" data-des="ゾンビエスケープをプレイするためのプラグイン [ ZombieEscape ]">ゾンビ・エスケープゲーム</a></li>
                                    <li><a id="" data-des="プロキシサーバーに対してプレイヤーパケットを送信し、NPCを参加させるプラグイン [ MinecraftNPC ]">NPCプラグイン</a></li>
                                    <li><a id="" data-des="ゲームサーバーでの動きをすべて制御するプラグイン [ IGCGamesCore ]">IGCGamesCore</a></li>
                                    <li><a id="" data-des="サーバー内でのギミックを実装するためのSkript [ IGCGamesHubSkript ]">ギミックスクリプト</a></li>
                                </ul>
                            </li>
                            <li>
                                <a>BungeeCord</a>
                                <ul>
                                    <li><a id="" data-des="Hubサーバーを管理するプラグイン [ Hub Plugin ]">ハブ管理プラグイン</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>Other</a>
                        <ul>
                            <li><a id="" data-des="GoogleFormに入力された情報をDiscordに通知します。 [ GoogleForm -> Discord ]">GoogleForm -> Discord</a></li>
                            <li><a id="" data-des="学際にてキャッシュレス決済を導入しました。 [ 学際にてキャッシュレス決済を導入 ]">学際にてキャッシュレス決済を導入</a></li>
                            <li><a id="" data-des="小学生の時にArudioにて電子工作を行いました。 [ Arduinoで工作 ]">Arduinoで工作</a></li>
                            <li><a id="" data-des="LAMP環境構築を何度も構築しました。 [ LAMP環境構築経験あり ]">LAMP環境構築経験あり</a></li>
                            <li><a id="" data-des="CentOSとUbuntuの両方使えます。(違いがそんなにないから何ともいけないけど) [ CentOS/Ubuntu ]">CentOS/Ubuntu</a></li>
                            <li><a id="" data-des="GoogleAdminの管理経験があります。 [ GoogleAdmin ]">GoogleAdminの管理経験あり</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <script>
                document.getElementById("page_{$active}").classList.add("is-active");

                document.querySelectorAll("a").forEach(element => {
                    
                    if( element.href != "" ) return;

                    element.addEventListener("click", (e) => {
                        
                        alert(
                            "申し訳ございません。"
                            + "\\nこちらのページは作成中でございます。完成までしばらくお待ちください。"
                            + "\\n\\nTitle : " + element.innerText 
                            + "\\n内容 : " + element.dataset.des
                        );
                    })
                });
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