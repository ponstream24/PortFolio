<?php

require("src/utility.php");

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
                                <img src="https://bulma.io/assets/images/placeholders/1280x960.png" alt="Placeholder image" />
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
                        </p>
                        <p>
                            <strong>概要（利用者目線）</strong>
                            <br />
                            「短縮っくん」はDataBaseが使えないなどの格安レンタルWebサーバーでも使えるように、すべて
                        </p>
                        <p>
                            <strong>技術（開発者目線）</strong>
                            <br />
                            「短縮っくん」はDataBaseが使えないなどの格安レンタルWebサーバーでも使えるように、すべてテキストベースでデータを保存しています。
                            その際に、ユーザー名やパスワードを暗号化や.htaccessにてアクセス制限を行うなどセキュリティ面でも意識しています。
                        </p>
                        <p>
                            <strong>Executive Officer</strong> <small>@Imaginic LLC.</small>
                            <small>Japan</small>
                            <br />
                            I work as a system administrator, overseeing tasks related to system management.
                            Additionally, I'm involved in the development, design, and operation of systems tailored
                            specifically for internal use within the company.
                        </p>
                        <p>
                            <strong>Circle Leader</strong> <small>@ITsystemLab</small>
                            <small>Japan</small>
                            <br />
                            During my first year of university, I founded a new IT systems circle.
                            I'm actively involved in both the daily management of the circle and collaborating with
                            fellow members to create innovative IT systems.
                        </p>
                    </div>
                </section>
                <div class="section pb-0">
                    <section class="mb-5">
                        <h2 class="title is-2" id="myhistory">My History</h2>
                        <h6 class="subtitle is-6">Life's <strong>Journey</strong></h6>
                    </section>
                    <div class="card">
                        <div class="card-header">
                            <p class="card-header-title">Birth</p>
                        </div>
                        <div class="card-content pt-1">
                            <div class="content">
                                <p>
                                    <strong>Born on August 24, 2003</strong> <small>@</small>
                                    <small>Japan</small>
                                    <i>誕生</i>
                                    <br />
                                </p>
                            </div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Started Elementary School</p>
                        </div>
                        <div class="card-content pt-1">
                            <div class="content">
                                <p>
                                    <strong>2010 -</strong> <small>@Public Elementary School</small>
                                    <small>Japan</small>
                                    <i>公立小学校入学</i>
                                    <br />
                                    Served as Club President and Class Representative.
                                </p>
                            </div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Arduino</p>
                        </div>
                        <div class="card-content pt-1">
                            <div class="content">
                                <p>
                                    <strong>2013 ? -</strong> <small>@Home</small>
                                    <small>Japan</small>
                                    <i>Arduinoを触る</i>
                                    <br />
                                    Developed an interest in electronic engineering, so I had my parents buy me an
                                    Arduino.
                                    Initially, I created simple systems based on reference books.
                                </p>
                            </div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Ended Elementary School</p>
                        </div>
                        <div class="card-content pt-1">
                            <div class="content">
                                <p>
                                    <strong>- 2016</strong> <small>@Public Elementary School</small>
                                    <small>Japan</small>
                                    <i>公立小学校卒業</i>
                                    <br />
                                </p>
                            </div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Started Middle School</p>
                        </div>
                        <div class="card-content pt-1">
                            <div class="content">
                                <p>
                                    <strong>2016 - 2019</strong> <small>@Public Middle School</small>
                                    <small>Japan</small>
                                    <i>公立中学校</i>
                                    <br />
                                    Played tennis for three years and served as a student council officer, helping to
                                    manage the student council.
                                </p>
                            </div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Started High School</p>
                        </div>
                        <div class="card-content pt-1">
                            <div class="content">
                                <p>
                                    <strong>2019 -</strong> <small>@Saitama Sakae High School</small>
                                    <small>Japan</small>
                                    <i>私立高等学校入学</i>
                                    <br />
                                    In high school, I served as a student council officer for two years. Additionally, I
                                    proposed and implemented an eco-project.
                                </p>
                            </div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Started Discord Bot</p>
                        </div>
                        <div class="card-content pt-1">
                            <div class="content">
                                <p>
                                    <strong>2020 -</strong> <small>@Home</small>
                                    <small>Japan</small>
                                    <i>Discord Bot提供開始</i>
                                    <br />
                                    Started providing management bots on Discord.
                                </p>
                            </div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Appointed as an Executive Officer at an LLC.</p>
                        </div>
                        <div class="card-content pt-1">
                            <div class="content">
                                <p>
                                    <strong>2021.12 -</strong> <small>@Imaginic LLC.</small>
                                    <small>Japan</small>
                                    <i>業務執行社員に着任</i>
                                    <br />
                                    Appointed as an Executive Officer at Imaginic LLC, primarily overseeing the IT
                                    department.
                                </p>
                            </div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Ended High School</p>
                        </div>
                        <div class="card-content pt-1">
                            <div class="content">
                                <p>
                                    <strong>- 2022</strong> <small>@Saitama Sakae High School</small>
                                    <small>Japan</small>
                                    <i>私立高等学校卒業</i>
                                    <br />
                                </p>
                            </div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Started University</p>
                        </div>
                        <div class="card-content pt-1">
                            <div class="content">
                                <p>
                                    <strong>2022 -</strong> <small>@Chiba Institute Of Technology School</small>
                                    <small>Japan</small>
                                    <i>大学入学</i>
                                    <br />
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Founded an circle.</p>
                        </div>
                        <div class="card-content pt-1">
                            <div class="content">
                                <p>
                                    <strong>2022 -</strong> <small>@Chiba Institute Of Technology School</small>
                                    <small>Japan</small>
                                    <i>サークル設立</i>
                                    <br />
                                    Co-founded an IT circle called "ITsystemLab" with fellow students.
                                    We collaboratively worked on projects and utilized them in real-world scenarios such
                                    as school festivals.
                                </p>
                            </div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Our Discord Bot has surpassed 10,000 users.</p>
                        </div>
                        <div class="card-content pt-1">
                            <div class="content">
                                <p>
                                    <strong>2023 -</strong> <small>@Home</small>
                                    <small>Japan</small>
                                    <i>Discord Bot利用者 1万人超える</i>
                                    <br />
                                    Our Discord Bot surpassed 10,000 users.
                                    While I'm thrilled, there are still many areas for improvement, so I will continue
                                    to update it regularly.
                                </p>
                            </div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Part-time job at an IT company.</p>
                        </div>
                        <div class="card-content pt-1">
                            <div class="content">
                                <p>
                                    <strong>2024 -</strong> <small>@Tokyo</small>
                                    <small>Japan</small>
                                    <i>IT企業にアルバイト</i>
                                    <br />
                                    I'm working part-time at an IT company, where I'm gaining practical experience by developing full-stack web applications and working on various web-related tasks.
                                </p>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>
                <div class="section pb-0">
                    <section class="mb-5">
                        <h2 class="title is-2" id="skill">My Skill</h2>
                        <h6 class="subtitle is-6">Life's <strong>Journey</strong></h6>
                        <p>どの言語が使えるか、どんなツールが使えるか、githubの画像を持ってくる</p>
                    </section>
                    <div class="columns is-multiline">
                        <?php foreach ($skills as $name => $a) : ?>
                            <?php foreach ($a as $key => $value) : ?>
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