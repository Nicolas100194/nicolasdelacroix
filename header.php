<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?></title>
    <?php wp_head()?>
</head>
<body>
    <header class="text">
        <a href="#" class="logo-header-desktop">
            <img class="logo-default" src="wp-content/themes/nicolasdelacroix/assets/img/logo.png">
        </a>
        <?php wp_nav_menu(['theme_location' => 'header']);?>
    </header>