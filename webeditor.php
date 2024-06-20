<?php

require("src/utility.php");

$descriptions = [
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

            <?= html_sidebar("webeditor") ?>
            <div class="container column is-10" id="about">

                <section class="section columns pb-0">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-fullwidth">
                                <img src="img/contents/isedit/image.png" />
                            </figure>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="content">
                        <p class="title">IsEdit</p>
                        <p class="subtitle">Webエディター</p>
                        <p>
                            <small>#URL</small>
                            <small>#WebApp</small>
                            <small>#Tool</small>
                            <small>#Editor</small>
                            <small>#Share</small>
                            <small>#GUI</small>
                            <small>#JavaScript</small>
                            <small>#JSON</small>
                        </p>
                        <div class="buttons">
                            <button class="button is-link" onclick="window.open('https:\/\/isedit.itsystem-lab.com')">Product</button>
                        </div>
                        <p>
                            <strong>概要（利用者目線）</strong>
                            <br />
                        <ul>
                            <li>
                                Web上で動くプログラムエディタ
                            </li>
                            <li>
                                一部の言語であればその場で実行可能
                            </li>
                            <li>
                                同時に複数のファイル編集可能
                            </li>
                            <li>
                                保存・読み込み機能
                            </li>
                            <li>
                                URL共有機能
                            </li>
                            <li>
                                テーマ・言語の簡単切り替え
                            </li>
                            <li>
                                ショートカットキー( 保存や Undo、Redo )
                            </li>
                        </ul>
                        </p>
                        <p>
                            <strong>技術（開発者目線）</strong>
                            <br />
                        <ul>
                            <li>
                                JS-Interpreterを使うとこで、<p>ブラウザ標準のJavascriptに干渉せず</p>にセキュリティ面で安心
                            </li>
                            <li>
                                MySQLにてデータを保存
                            </li>
                            <li>
                                ダウンロード時は複数のファイルを圧縮(zip)してダウンロードを行う
                            </li>
                            <li>
                                Tab補完や、ソースコードに色付けを実装
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
                        <div class="column is-full">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-fullwidth p-4">
                                        <img src="img/contents/isedit/1.png" style="
                                                object-fit: contain;
                                            ">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <?php foreach ($descriptions as $value) : ?>
                            <div class="column <?= $value["size"] ?? 'is-half' ?>">
                                <div class="card">
                                    <div class="card-image">
                                        <figure class="image is-4by3 ">
                                            <img src="<?= $value["img"] ?>" style="
                                                    object-fit: contain;
                                                ">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="media-content">
                                                <p class="title is-4 is-size-6"><?= $value["title"] ?></p>
                                                <p class="subtitle is-6"><?= $value["subtitle"] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="section pb-0">
                    <section class="mb-5">
                        <h2 class="title is-2" id="mycount">Project Count</h2>
                        <h6 class="subtitle is-6">Count related to this project.</h6>
                    </section>
                    <nav class="level">
                        <div class="level-item has-text-centered">
                            <div>
                                <p class="heading">Use</p>
                                <p class="title">7 Actives</p>
                                <p>and 0 inactive ones</p>
                            </div>
                        </div>
                        <div class="level-item has-text-centered">
                            <div>
                                <p class="heading">Developer of this project</p>
                                <p class="title">1 person</p>
                                <p>Just myself</p>
                            </div>
                        </div>
                        <div class="level-item has-text-centered">
                            <div>
                                <p class="heading">Development period</p>
                                <p class="title">1 day</p>
                                <p>maybe...</p>
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
                        <?php foreach ($github as $url) : ?>
                            <div class="column is-half">
                                <div class="card">
                                    <div class="card-image">
                                        <figure class="image is-2by1 ">
                                            <a href="http://github.com/ponstream24" target="_blank" rel="noopener noreferrer">
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