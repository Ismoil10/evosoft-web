<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link href="core/assets/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Danfo&family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<? echo $template_path; ?>css/style.css">
    <link rel="stylesheet" href="<? echo $template_path; ?>css/media.css">
    <!--<script src="core/assets/dist/js/bootstrap.bundle.min.js"></script>-->
</head>

<body>
    <div class="custom-container">
        <nav class="header_logo">
            <a href="/en/main">
                <img class="header_img" src="<? echo $template_path; ?>img/07cdfd23373b17c6b337251c2223435.png" alt="">
            </a>
        </nav>
        <div class="navbar_between">
            <ul class="custom_menu">
                <? foreach(view::CONTENT('all_active', ['IBLOCK_ID' => '215']) as $v): ?>
                <li class="nav_item">                                           
                    <a class="nav_link" href="<?=$v['url']?>"><?=$v['name']?></a>
                </li>
                <? endforeach; ?>
            </ul>
            <div class="contact_menu">
                <span class="custom_contact" id="only_contact">+998 90 944 64 00</span>
                <span class="custom_contact">•</span>
                <span class="custom_contact">info@evosoft-solutions.com</span>
            </div>
        </div>
        <div class="menu_header_buttons">
            <a href="#" class="custom_lang_button"><i class="fa-solid fa-earth-americas"></i> English</a>
            <a href="#" class="custom_gs_button"><i class="fa-solid fa-rocket"></i> Get started</a>
        </div>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </div>