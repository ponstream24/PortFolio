<?php

require ("src/utility.php");

$descriptions = [
    [
        "img" => "img/contents/shorturl/1.png",
        "title" => "ログイン",
        "subtitle" => "アクセス時にユーザー認証を表示しスパムや大量作成の迷惑行為、短縮URLが犯罪に使用されることを防いでいます。",
    ],
    [
        "img" => "img/contents/shorturl/2.png",
        "title" => "二要素認証",
        "subtitle" => "本人確認のための二要素認証として、メールに確認コードを送信しています。",
    ],
    [
        "img" => "img/contents/shorturl/3.png",
        "title" => "パスワード変更",
        "subtitle" => "簡単に何度でもパスワードを変更できます。また暗号化してファイル保存を行っているためセキュリティ面でも安心です。",
    ],
    [
        "img" => "img/contents/shorturl/4.png",
        "title" => "ユーザー追加",
        "subtitle" => "入力フォーム一つでユーザーの追加が可能です。 またユーザー追加時のパーミッション等は2のべき乗で構成された数字なるので、 マニュアルを作成する際は項目を何個も選択する必要がなく、数字一つで権限設定が完了します。",
    ],
    [
        "img" => "img/contents/shorturl/5.png",
        "title" => "ユーザー編集",
        "subtitle" => "登録したユーザーの編集も可能です。",
    ],
    [
        "img" => "img/contents/shorturl/6.png",
        "title" => "URL登録",
        "subtitle" => "追加する短縮URLの[Short Word]は指定ありでもなしでも大丈夫です。○○.com/youtubeや○○.com/instagramなど、自身のSNSのURLに設定にぴったりです。",
    ],
    [
        "img" => "img/contents/shorturl/7.png",
        "title" => "URL統計",
        "subtitle" => "作成したURLのアクセス状況を確認できます。短縮URLを設置する場所/HPなどが複数ある場合、それぞれ用にURLを生成することで、アクセスした人がどこから来たのかをカウントすることが可能です。",
    ],
];

$github = [
    "https://github-readme-stats-ponstream24s-projects.vercel.app/api/pin/?repo=ShortURLTool&count_private=true&show_owner=true&username=",
];
?>

<!DOCTYPE html>
<html style="scroll-behavior: smooth;">

<?= html_head("URL短縮ツール") ?>

<body>
    <?= html_header() ?>
    <main class="mb-6">
        <section class="section main-content columns pb-0">

            <?= html_sidebar("shorturl") ?>
            <div class="container column is-10" id="about">

                <section class="section columns pb-0">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-fullwidth">
                                <img src="img/contents/shorturl/6.png"/>
                            </figure>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="content">
                        <p class="title"><ruby>短縮<rt>たんしゅ</rt></ruby>っくん</p>
                        <p class="subtitle">URL短縮ツール</p>
                        <p>
                            <small>#URL</small>
                            <small>#WebApp</small>
                            <small>#Tool</small>
                            <small>#Analytics</small>
                            <small>#Short</small>
                            <small>#GUI</small>
                            <small>#JavaScript</small>
                            <small>#JSON</small>
                        </p>
                        <div class="buttons">
                            <button class="button is-link"
                                onclick="window.open('https:\/\/short.demo.yukitetsuka.com/short_login')">Demo</button>
                        </div>
                        <p>
                            <strong>概要（利用者目線）</strong>
                            <br />
                        <ul>
                            <li>
                                短縮URLを簡単に作成することが可能
                            </li>
                            <li>
                                ログインにはメールを使用した二要素認証が導入されているため、セキュリティも安心
                            </li>
                            <li>
                                作成した短縮URLが何回使用されたかを確認可能
                            </li>
                            <li>
                                必要に応じてURLを指定して作成することも、指定せずに作成することも可能
                                <p>例: </p>
                                <pre>portfolioを指定 : https://〇〇.com/portfolio</pre>
                                <pre>指定なし : https://〇〇.com/g5OkQ2B</pre>
                            </li>
                            <li>
                                不要になったURLを簡単に削除することもできる
                            </li>
                        </ul>
                        </p>
                        <p>
                            <strong>技術（開発者目線）</strong>
                            <br />
                        <ul>
                            <li>
                                <b>データベースが使用できない環境</b>(格安レンタルWebサーバーなど)でも利用できる
                            </li>
                            <li>
                                すべてのデータを<b>テキストベース</b>で保存
                            </li>
                            <li>
                                ユーザー名やパスワードは<b>暗号化</b>されているほか、.htaccessを使用してアクセス制限を行っている
                            </li>
                            <li>
                                サービスの導入も非常に簡単で、<b>プロジェクトをクローンするだけ</b>で完了
                            </li>
                            <li>
                                パーミッションの計算には<b>2の冪乗</b>を使用
                            </li>
                        </ul>
                        </p>
                    </div>
                </section>
                <div class="section pb-0">
                    <section class="mb-5">
                        <h2 class="title is-2" id="myhistory">Description</h2>
                    </section>
                    <div class="columns is-multiline">
                        <div class="column is-half">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3 ">
                                        <img src="img/contents/shorturl/1.png" style="
                                                object-fit: contain;
                                            ">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-4 is-size-6">ログイン</p>
                                            <p class="subtitle is-6">
                                                アクセス時にユーザー認証を表示しスパムや大量作成の迷惑行為、短縮URLが犯罪に使用されることを防いでいます</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-half">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3 ">
                                        <img src="img/contents/shorturl/2.png" style="
                                                object-fit: contain;
                                            ">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-4 is-size-6">二要素認証</p>
                                            <p class="subtitle is-6">
                                            本人確認のための二要素認証として、メールに確認コードを送信しています。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-half">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3 ">
                                        <img src="img/contents/shorturl/3.png" style="
                                                object-fit: contain;
                                            ">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-4 is-size-6">パスワード変更</p>
                                            <p class="subtitle is-6">
                                            簡単に何度でもパスワードを変更できます。また暗号化してファイル保存を行っているためセキュリティ面でも安心です。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-half">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3 ">
                                        <img src="img/contents/shorturl/4.png" style="
                                                object-fit: contain;
                                            ">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-4 is-size-6">ユーザー追加</p>
                                            <p class="subtitle is-6">
                                            入力フォーム一つでユーザーの追加が可能です。
                                            またユーザー追加時のパーミッション等は2のべき乗で構成された数字なるので、
                                            マニュアルを作成する際は項目を何個も選択する必要がなく、数字一つで権限設定が完了します。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-half">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3 ">
                                        <img src="img/contents/shorturl/4.png" style="
                                                object-fit: contain;
                                            ">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-4 is-size-6">ユーザー追加</p>
                                            <p class="subtitle is-6">
                                            入力フォーム一つでユーザーの追加が可能です。
                                            またユーザー追加時のパーミッション等は2のべき乗で構成された数字なるので、
                                            マニュアルを作成する際は項目を何個も選択する必要がなく、数字一つで権限設定が完了します。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section pb-0">
                    <section class="mb-5">
                        <h2 class="title is-2" id="skill">My Skill</h2>
                        <h6 class="subtitle is-6">Life's <strong>Journey</strong></h6>
                        <p>どの言語が使えるか、どんなツールが使えるか、githubの画像を持ってくる</p>
                    </section>
                    <div class="columns is-multiline">
                        <?php foreach ($skills as $name => $a): ?>
                            <?php foreach ($a as $key => $value): ?>
                                <div class="column is-one-fifth">
                                    <div class="card">
                                        <div class="card-image">
                                            <figure class="image is-4by3 ">
                                                <img src="<?= $value ?>" alt="<?= $key ?>" class="p-4" style="
                                                        object-fit: contain;
                                                    ">
                                            </figure>
                                        </div>
                                        <div class="card-content">
                                            <div class="media">
                                                <div class="media-content">
                                                    <p class="title is-4 is-size-6"><?= $key ?></p>
                                                    <p class="subtitle is-6">#<?= $name ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="section pb-0">
                    <section class="mb-5">
                        <h2 class="title is-2" id="mycount">My Count</h2>
                        <h6 class="subtitle is-6">Count related to me.</h6>
                    </section>
                    <nav class="level">
                        <div class="level-item has-text-centered">
                            <div>
                                <p class="heading">Domains</p>
                                <p class="title">12 Actives</p>
                                <p>and 13 inactive ones</p>
                            </div>
                        </div>
                        <div class="level-item has-text-centered">
                            <div>
                                <p class="heading">Cloud Servers</p>
                                <p class="title">7 Actives</p>
                                <p>Web Server and VPS</p>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="section pb-0">
                    <section class="mb-5">
                        <h2 class="title is-2" id="mygithub">My GitHub</h2>
                        <h6 class="subtitle is-6">My GitHub status.</h6>
                    </section>
                    <div class="columns is-multiline">
                        <?php foreach ($github as $url): ?>
                            <div class="column is-half">
                                <div class="card">
                                    <div class="card-image">
                                        <figure class="image is-2by1 ">
                                            <a href="http://github.com/ponstream24" target="_blank"
                                                rel="noopener noreferrer">
                                                <img src="
                                                <?= $url ?>ponstream24" class="p-4">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <?= html_footer() ?>
</body>

</html>