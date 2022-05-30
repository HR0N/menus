<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./fonts/fonts.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://use.fontawesome.com/d7f609ebcd.js"></script>
    <title>Menus</title>
</head>
<body>
<header class="header menu-1">
    <div class="navbar-brand"><a href="/"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjZRyzG2Ml6NKs1lcec9AZZSvexD-uvKuqeQ&usqp=CAU" alt="logo"></a></div>
    <div class="nav-bars">
        <button class="button show"><i class="fa fa-bars" aria-hidden="true"></i></button>
        <button class="button"><i class="fa fa-times" aria-hidden="true"></i></button>
    </div>
    <ul id="header-nav" class="header-nav">
        <!--        <li class="navbar-brand"><a href="/"><img src="http://placehold.jp/3d4070/ffffff/63x63.png" alt="logo"></a></li>-->
        <li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-21">
            <a href="/" aria-current="page" id="nav-times">Home</a>
        </li>
        <li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-21">
            <a href="/" aria-current="page">About</a>
        </li>
        <li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-21">
            <a href="/" aria-current="page">Contacts</a>
        </li>
        <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-24">
            <a><span class="short">Dropdown</span></a>
            <ul class="sub-menu">
                <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48"><a href="/">Sub item</a></li>
            </ul>
        </li>
    </ul>
</header>
<script src="./libs/jquery.slim.min.js"></script>
<script src="./js/class_father.js"></script>
<script src="./js/menu.js"></script>
<script>$(document).ready(() => {let menu1 = new Menu('.menu-1')});</script>
</body>
</html>