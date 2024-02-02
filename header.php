<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>

<body>
    <header class="text">
        <a href="/" class="logo-header-desktop">
            <img class="logo-default" src="/nicolasdelacroix/wp-content/themes/nicolasdelacroix/assets/img/logo.png">
        </a>
        <?php wp_nav_menu(['theme_location' => 'header']);?>
        <div class="container-logo-mobile">
            <a class="logo-menu-mobile" id="header-icon">
                <img class="icon-menu-mobile" href="#" src="/nicolasdelacroix/wp-content/themes/nicolasdelacroix/assets/icons/icon-menu-mobile.svg">
            </a>
        </div>
        <?php wp_nav_menu(['theme_location' => 'header-mobile','container' => 'false', 'menu_class' => 'menu-mobile']);?>
    </header>
