<?php

require("src/utility.php");

$skills = [
    "Tool" => [
        "Git" => "https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg",
        "npm" => "https://www.vectorlogo.zone/logos/npmjs/npmjs-ar21.svg",
        "Visual Studio Code" => "img/vscode.svg",
        "Visual Studio"  => "https://visualstudio.microsoft.com/wp-content/uploads/2021/10/Product-Icon.svg",
        "IntelliJ IDEA" => "https://resources.jetbrains.com/storage/products/company/brand/logos/IntelliJ_IDEA_icon.svg",
        "DataGrip" => "https://resources.jetbrains.com/storage/products/company/brand/logos/DataGrip_icon.svg",
        "PhpStorm" => "https://resources.jetbrains.com/storage/products/company/brand/logos/PhpStorm_icon.svg",
        "VirtualBox" => "https://www.vectorlogo.zone/logos/virtualbox/virtualbox-icon.svg",
        "Dropbox" => "https://www.vectorlogo.zone/logos/dropbox/dropbox-icon.svg",
        "Canva" => "img/canva.svg",
        "Adobe" => "https://www.adobe.com/content/dam/cc/icons/Adobe_Corporate_Web_Logo.svg",
        "Slack" => "https://www.vectorlogo.zone/logos/slack/slack-icon.svg",
        "Asana" => "https://brand.asana.biz/image/upload/fl_preserve_transparency/v1715795584/Asana-Logo-Horizontal-Bright-Coral-SVG.jpg?_s=public-apps",
        "Discord.js" => "https://camo.githubusercontent.com/94402c561f7851d7d3c899ea70b282bd177f344319f08cb1d743de36f00cf020/68747470733a2f2f646973636f72642e6a732e6f72672f7374617469632f6c6f676f2e737667",
    ],

    "Language" => [
        "PHP" => "https://www.php.net/images/logos/new-php-logo.svg",
        "JavaScript" => "https://cdn.worldvectorlogo.com/logos/javascript-1.svg",
        "Java" => "https://www.vectorlogo.zone/logos/java/java-icon.svg",
        "C" => "https://cdn.worldvectorlogo.com/logos/c-1.svg",
        "C++" => "https://cdn.worldvectorlogo.com/logos/c.svg",
        "Python" => "https://www.vectorlogo.zone/logos/python/python-icon.svg",
        "Node.js" => "https://nodejs.org/static/logos/nodejsLight.svg",
    ],

    "Service" => [
        "GitHub" => "img/github.svg",
        "Laravel" => "img/laravel.svg",
        "Apache" => "https://www.apache.org/foundation/press/kit/asf_logo.svg",
        "Linux" => "https://www.vectorlogo.zone/logos/linux/linux-icon.svg",
        "Ubuntu" => "https://www.vectorlogo.zone/logos/ubuntu/ubuntu-icon.svg",
        "macOS" => "img/mac.svg",
        "MySQL" => "img/mysql.svg",
        "phpMyAdmin" => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/PhpMyAdmin_logo.svg/800px-PhpMyAdmin_logo.svg",
        "H2" => "https://www.vectorlogo.zone/logos/h2database/h2database-icon.svg",
        "Bukkit" => "https://www.vectorlogo.zone/logos/bukkit/bukkit-icon.svg",
        "Spigot" => "https://www.vectorlogo.zone/logos/spigotmc/spigotmc-icon.svg",
        "Discord" => "https://www.vectorlogo.zone/logos/discordapp/discordapp-icon.svg",
        "JetBrains" => "https://resources.jetbrains.com/storage/products/company/brand/logos/jetbrains.svg"
    ]

    // gas, windows, youtube, LINE, LINE Dev, 
];

$github = [
    "https://github-readme-stats-ponstream24s-projects.vercel.app/api?count_private=true&username=",
    "https://github-readme-stats-ponstream24s-projects.vercel.app/api/top-langs/?layout=compact&count_private=true&username=",
];

?>

<!DOCTYPE html>
<html style="scroll-behavior: smooth;">

<?= html_head("About") ?>

<body>
    <?= html_header() ?>
    <main class="mb-6">
        <section class="section main-content columns pb-0">

            <?= html_sidebar("about") ?>
            <div class="container column is-10" id="about">

                <section class="section columns pb-0">
                    <div class="container">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="./img/ico.png" alt="Placeholder image" />
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="container section pt-0">
                        <div class="content">
                            <h2 id="about">Yuki Tetsuka</h2>
                            <p>
                                <span class="icon">
                                    <a class="navbar-item" href="https://github.com/ponstream24" target="_blank">
                                        <i class='bx bxl-github'></i>
                                    </a>
                                </span>
                                <span class="icon">
                                    <a class="navbar-item" href="https://yukitetsuka.com" target="_blank">
                                        <i class='bx bx-link'></i>
                                    </a>
                                </span>
                                <span class="icon">
                                    <a class="navbar-item" href="https://note.com/yukitetsuka/" target="_blank">
                                        <i class='bx bx-note'></i>
                                    </a>
                                </span>
                            </p>
                            <p>
                                <strong>University Student</strong> <small>@Chiba Institute Of Technology</small>
                                <small>Japan</small>
                                <br />
                                Studying internet and IT systems at a university in Chiba.
                                Additionally, researching multimedia and infrastructure, such as CG, in the laboratory.
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
                    </div>
                </section>
                <section class="section">
                    <p>
                        I started programming in middle school and have since gained experience as a full-stack
                        engineer.
                        In high school, I co-founded a company with friends where we managed everything from planning to
                        maintenance of games, web systems, and management systems.
                        For game development, I primarily used Java, while for web and management systems, I focused on
                        Laravel. Additionally, I'm currently working part-time at an IT company, where I'm learning from
                        real-world environments.
                    </p>
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
                                                <?=$url?>ponstream24" class="p-4">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach?>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <?= html_footer() ?>
</body>

</html>