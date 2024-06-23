<?php

require("src/utility.php");

$descriptions = [
    [
        "img" => "img/contents/isedit/2.png",
        "title" => "編集エリア",
        "subtitle" => "ファイルの中身を編集できます。また、ファイル名またはインフォメーションエリアをもとに、<b>言語を特定し適切なタブ補完</b>を行っています。",
    ],
    [
        "img" => "img/contents/isedit/3.png",
        "title" => "ログエリア",
        "subtitle" => "実行したスクリプトの実行結果が表示されます。JavaScriptの場合、log・error・info・warn・debugには背景色を適応させているのでより見やすくなっています。",
    ],
    [
        "img" => "img/contents/isedit/4.png",
        "title" => "ファイルエリア",
        "subtitle" => "編集するファイルを追加・変更・削除するエリアです。ファイルの追加・削除はもちろん、ファイル名の変更も行えます。その際に、変更後のファイル名に沿って言語も変更します。",
    ],
    [
        "img" => "img/contents/isedit/5.png",
        "title" => "コントロールエリア",
        "subtitle" => "スクリプトの実行・停止や、共有・ダウンロード、ログエリアの削除などエディタをコントロールするエリアです。",
    ],
    [
        "img" => "img/contents/isedit/6.png",
        "title" => "インフォメーションエリア",
        "subtitle" => "言語の変更、テーマを変更するエリアです。また現在の文字数や、今選択している行数、列数が表示されます。",
    ],
];

$github = [
    "https://github-readme-stats-ponstream24s-projects.vercel.app/api/pin/?repo=IsEdit&count_private=true&show_owner=true&username=",
];
?>

<!DOCTYPE html>
<html style="scroll-behavior: smooth;">

<?= html_head("URL短縮ツール") ?>

<body>
    <?= html_header() ?>
    <main class="mb-6">
        <section class="section main-content columns pb-0">

            <?= html_sidebar("income") ?>
            <div class="container column is-10" id="about">
                <section class="section columns pb-0">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-fullwidth">
                                <img src="img/contents/income/image.png" />
                            </figure>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="content">
                        <p class="title">スタッフインカム</p>
                        <p class="subtitle">Web通話システム</p>
                        <p>
                            <small>#URL</small>
                            <small>#WebApp</small>
                            <small>#Tool</small>
                            <small>#GUI</small>
                            <small>#PHP</small>
                            <small>#JavaScript</small>
                            <small>#Talk</small>
                            <small>#PushToTalk</small>
                        </p>
                        <div class="buttons">
                            <button class="button is-link" onclick="window.open('https:\/\/income.demo.yukitetsuka.com/')">Demo</button>
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
                                JS-Interpreterを使うとこで、<b>ブラウザ標準のJavascriptに干渉せず</b>にセキュリティ面で安心
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
                                <p class="title">1 Actives</p>
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
                                <p class="title">3 day</p>
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