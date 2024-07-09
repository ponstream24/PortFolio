<?php

require("src/utility.php");

$poster = [
    [
        "img" => "img/contents/income/1.svg",
    ],
    [
        "img" => "img/contents/income/2.svg",
    ],
    [
        "img" => "img/contents/income/3.svg",
    ],
    [
        "img" => "img/contents/income/4.svg",
    ],
    [
        "img" => "img/contents/income/5.svg",
    ],
    [
        "img" => "img/contents/income/6.svg",
    ],
    [
        "img" => "img/contents/income/7.svg",
    ],
    [
        "img" => "img/contents/income/8.svg",
    ],
];

$descriptions = [
    [
        "img" => "img/contents/income/d_1.png",
        "title" => "待機所",
        "subtitle" => "複数のルームによって<b>混線や聞き逃しを防止</b>できます。また、一目でどのルームに何人参加しているかもわかります。",
    ],
    [
        "img" => "img/contents/income/d_2.png",
        "title" => "ルーム作成",
        "subtitle" => "自分が参加したいルームがない場合は新しく作成することができます。<b>ルーム名(指定なしならランダム)を指定することや、人数制限、入場制限(グループ設定)、自動アナウンス</b>などを設定できます。",
    ],
    [
        "img" => "img/contents/income/d_3.png",
        "title" => "ルーム",
        "subtitle" => "大きなマイクボタンに加えて、テキストチャット機能があります。また、<b>受信時には誰が発報しているか</b>や<b>音量バー</b>が表示されます。",
    ],
    [
        "img" => "img/contents/income/d_4.png",
        "title" => "ルーム設定",
        "subtitle" => "<b>入力デバイス・出力デバイスをはじめ、自動アナウンスのON/OFF、ログ出力切り替え</b>などができます。また、ユーザーごとの<b>音量も調節</b>できます。",
    ],
    [
        "img" => "img/contents/income/d_5.png",
        "title" => "構成",
        "subtitle" => "接続部分に関するワークフローです。",
    ],
];

$github = [
    "https://github-readme-stats-ponstream24s-projects.vercel.app/api/pin/?repo=Income&count_private=true&show_owner=true&username=",
];
?>

<!DOCTYPE html>
<html style="scroll-behavior: smooth;">

<?= html_head("Web通話システム") ?>

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
                            <small>#PTT</small>
                        </p>
                        <div class="buttons">
                            <button class="button is-link" onclick="window.open('https:\/\/income.demo.yukitetsuka.com/')">Demo</button>
                        </div>
                        <p>
                            <strong>概要（利用者目線）</strong>
                            <br />
                        <ul>
                            <li>
                                Web上で動くインカムシステム
                            </li>
                            <li>
                                PTT(プッシュ・トゥ・トーク)だから混線しない
                            </li>
                            <li>
                                チャット機能付き
                            </li>
                            <li>
                                個別で音量の調節が可能
                            </li>
                            <li>
                                いつでも簡単にルーム作成
                            </li>
                            <li>
                                ショートカットキー( スペースキー )
                            </li>
                            <li>
                                音量バーでわかりやすく
                            </li>
                            <li>
                                発言失敗時には音でお知らせ
                            </li>
                        </ul>
                        </p>
                        <p>
                            <strong>技術（開発者目線）</strong>
                            <br />
                        <ul>
                            <li>
                                P2Pが通信できない環境(学校や会社のネットワーク等)でもTURNサーバによって通信可能に
                            </li>
                            <li>
                                ルームに<b>人数制限</b>設定可能
                            </li>
                            <li>
                                ルームに<b>入場制限(グループ設定)</b>を設定することで、幹部会や部署ミーティング等が可能に
                            </li>
                            <li>
                                <b>自動アナウンス(API連携可能)</b>によって対応漏れを防げる
                            </li>
                            <li>
                                <b>管理者発報</b>によって割り込み可能に
                            </li>
                        </ul>
                        </p>
                    </div>
                </section>
                <div class="section py-0">
                    <section class="mb-5">
                        <h2 class="title is-2" id="myhistory">Poster</h2>
                        <p class="subtitle">学祭に出展した際に使用したポスターです。</p>
                    </section>
                    <div class="columns is-multiline">
                        <?php foreach ($poster as $value) : ?>
                            <div class="column <?= $value["size"] ?? 'is-half' ?>">
                                <div class="card">
                                    <div class="card-image">
                                        <figure class="image is-2by3 ">
                                            <img src="<?= $value["img"] ?>" class="px-1">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="section pb-0">
                    <section class="mb-5">
                        <h2 class="title is-2" id="myhistory">Description</h2>
                    </section>
                    <div class="columns is-multiline">
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
                                <p class="title">3 Actives</p>
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
                                <p class="title">50 hours</p>
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