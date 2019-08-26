<?php require_once(__DIR__ . '/system.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo __('title'); ?></title>

    <link rel="stylesheet" href="/css/semantic.min.css">
    <link rel="stylesheet" href="/css/app.css?time=<?php echo time(); ?>">
    <script type="application/javascript" src="/js/jquery-3.4.1.min.js"></script>
    <script type="application/javascript" src="/js/semantic.min.js"></script>
    <script type="application/javascript" src="/js/app.js"></script>

</head>
<body>


<div class="ui container" id="containterMenu">
    <div id="menuBlob"></div>
    <div class="ui text menu small" id="mainMenu">
        <a href="/" title="<?php echo __('title'); ?>" class="item header" id="logo">
            rest<span class="o">O</span>
            <br/>
            <small>SOFTWARE HOUSE</small>
        </a>

        <div class="right menu">
            <a href="/" class="item active" title="English">English</a>
            <a href="/pl" class="item" title="Polski">Polski</a>
            <a href="/de" class="item" title="Deutsch">Deutsch</a>
        </div>
    </div>
</div>

<div class="mc">
    <div class="ui container mb60" id="containerIntro">
        <div id="intro-text">
            <div class="ui two column very relaxed grid stackable">
                <div class="column">
                    <h1>WE MAKE REST<br/>YOU CAN REST</h1>
                </div>
                <div class="column">
                    <h2><?php echo __('intro-text'); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>

<div class="mb120">
    <div class="ui two column very relaxed grid no-padding stackable" id="services">
        <div class="column gray-bg">

            <div class="container-half right">

                <h2>01. Oprogramowanie</h2>
                <div class="mb60">
                    <p>Tworzymy REST API z wykorzystaniem <strong>Symfony 4</strong> lub <strong>PhalconPHP</strong> w
                        oparciu o
                        architekturę <strong>CQRS</strong> oraz <strong>DDD</strong>. Używamy również Api Platform.
                        Zawsze
                        stosujemy użyteczne koncepty
                        projektowe <strong>SOLID</strong>, <strong>KISS</strong> oraz <strong>DRY</strong>. Dużą
                        wartością
                        naszego oprogramowania jest to, że zawsze programujemy w <strong>TDD</strong>.
                        W codziennej pracy używamy narzędzi dostarczonych przez <strong>Atlassian</strong>.
                        Nasze oprogramowanie tworzą tylko doświadczeni programiści.</p>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>

                <div class="ui grid stackable">
                    <div class="column three wide"><img src="/img/s1.svg" class="ui image"/></div>
                    <div class="column four wide"><img src="/img/s2.svg" class="ui image"/></div>
                    <div class="column four wide"><img src="/img/s3.svg" class="ui image"/></div>
                    <div class="column four wide"><img src="/img/s4.svg" class="ui image"/></div>
                </div>
            </div>
        </div>


        <div class="column" id="doc">
            <div class="container-half">
                <h2>02. Testowanie</h2>
                <p class="mb30">Wysoką jakość i bezpieczeństwo naszego oprogramowania zapewnia nam pełne pokrycie w testach jednostkowych napisanych w PHPUnit lub Behat.</p>

                <h2>03. Dokumentacja</h2>
                <div class="mb30">
                    <p>Dostarczamy pełną i zawsze aktualną dokumentację w Swagger oraz Postman.</p>
                </div>
                <div class="clear"></div>

                <img src="/img/sp2.png" class="ui image"/>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="clear"></div>

<div id="stats" class="mb60">
    <div class="ui container">
        <div class="ui four statistics">
            <div class="statistic" id="statsProject">
                <div class="value">
                    +30
                </div>
                <div class="label">
                    Projektów
                </div>
            </div>
            <div class="statistic">
                <div class="value">
                    +8
                </div>
                <div class="label">
                    lat na rynku
                </div>
            </div>
            <div class="statistic">
                <div class="value">
                    +11
                </div>
                <div class="label">
                    Programistów
                </div>
            </div>
            <div class="statistic">
                <div class="value">
                    > 1300
                </div>
                <div class="label">
                    End-pointów
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>

<div id="team" class="mper6">
    <div class="ui container">
        <div class="ui grid stackable">
            <div class="column six wide"><img src="/img/resto_team.jpg" class="ui image"/></div>
            <div class="column ten wide pl60">
                <h2 class="mb60">Chcemy być częścią Twojego zespołu</h2>
                <div class="clearfix"></div>
                <div class="ui two column very relaxed grid stackable">
                    <div class="column">
                        <h3>Współpraca</h3>
                        <p>Współpracujemy ściśle</p>
                    </div>
                    <div class="column">
                        <h3>Nasza struktura</h3>
                        <p>Jesteśmy gotowi podjąć współpracę</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="clear"></div>

<div id="clients">
    <div class="ui container">

    </div>
</div>


</body>
</html>