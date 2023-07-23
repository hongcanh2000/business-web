<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Web</title>
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="assest/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="assest/vendor/slick-theme.css">
    <link rel="stylesheet" href="assest/vendor/css/slick.css">
    <link rel="stylesheet" href="assest/css/app.css">
</head>

<body>
    
<button onclick="topFunction()" id="scroll_to_top-btn"><i class="fa-solid fa-arrow-up"></i></button>
    <div class="container-fluid header__top">
        <div class="container-business">
            <div class="info__contact">
                <div class="store__contact">
                    <ul class="info__contact-list">
                        <li class="info__contact-item">
                            <i class="fa-solid fa-clock icon__header"></i>
                            <p>Monday - Friday 9 AM - 5 PM</p>
                        </li>
                        <li class="info__contact-item">
                            <i class="fa-solid fa-location-dot icon__header"></i>
                            <p>100 Nguyen Xi Str, 26W, Binh Thanh, HCM</p>
                        </li>
                        <li class="info__contact-item">
                            <i class="fa-solid fa-phone icon__header"></i>
                            <p>(+84) 033 858 686 4</p>
                        </li>
                    </ul>
                </div>
                <div class="social">
                    <div class="social__list">
                        <a href="" class="social__list-item">Dr</a>
                        <a href="" class="social__list-item">Be</a>
                        <a href="" class="social__list-item">Li</a>
                        <a href="" class="social__list-item">Lg</a>
                        <a href="" class="social__list-item">Fb</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid header__bottom">
        <div class="container-business">
            <div class="header__info">
                <div class="header__logo">
                    <img src="assest/img/logo.png" alt="">
                </div>
                <div class="header__menu">
                    <div class="header__menu-list">
                        <a href="?controller=&action=" class="header__menu-item menu__item-active">Home</a>
                        <a href="" class="header__menu-item">About Us</a>
                        <a href="" class="header__menu-item">Services</a>
                        <a href="?controller=blog&action=" class="header__menu-item">Blog</a>
                        <a href="?controller=contact&action=" class="header__menu-item">Contact Us</a>
                    </div>
                </div>
                <div class="header__button btn btn-green">
                    <a href="">Getting Started</a>
                </div>

                <form action="">
                    <button class="btn btn__list-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars"></i></button>

                </form>


                <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Business Web</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="list__menu-mobile">
                            <a href="?controller=">Home</a>
                            <a href="">About Us</a>
                            <a href="">Services</a>
                            <a href="?controller=blog">Blog</a>
                            <a href="?controller=contact">Contact Us</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>