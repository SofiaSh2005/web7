<?php
$header = '
    <div class="container">
        <div class="header-line">
            <div class="header-logo">
                <img src="img/LOGO.png" alt="">
            </div>
            <div class="nav">
                <a class="nav-item" href="@">ГЛАВНАЯ</a>
                <a class="nav-item" href="@">МЕНЮ</a>
                <a class="nav-item" href="@">О НАС</a>
                <a class="nav-item" href="@">БРОНЬ</a>
            </div>
            <div class="cart">
                <a href="#">
                    <img class="cart-img" src="img/cart.png" alt="">
                </a>
                
            </div>
            <div class="phone">
                <div class="phone-holder"> 
                    <div class="phone-img">
                        <img src="img/phone.png" alt="">
                    </div>
                    <div class="number"><a class="num" href="#">+999-888-76-54</a>
                    </div>
                </div>
                <div class="phone-text">
                    Свяжитесь с нами для <br> бронирования
                </div>
            </div>
            <div class="btn">
                <a class="button" href="#">ЗАКАЗ СТОЛИКА</a>
            </div>
            <div class="wrapper">
                <button id="switchmode">Поменять тему</button>
                <script src="style1.js"></script>
            </div>



















        </div>
        <div class="header-down">
            <div class="header-title">
                Добро пожаловать в

                <div class="header-subtitle">
                    Наш ресторан
                </div>
                <div class="header-suptitle">
                    ДОМ ЛУЧШЕЙ ЕДЫ
                </div>

                <div class="header-bth">
                    <a href="#" class="header-button">VIEW MENU</a>
                </div>
            </div>
        </div>
    </div>
<div class="cards">
    <div class="container">
        <div class="cards-holder">
            <div class="card">
                <div class="card-image">
                    <img class="card-img" src="img/card.png">
                </div>
                <div class="card-title">
                    Магическая <span>Атмосфера</span>
                </div>
                <div class="card-desc">
                    В нашем заведении царит магическая атмосфера
                    наполненная вкусными ароматами
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img class="card-img" src="img/card.png">
                </div>
                <div class="card-title">
                    Лучшее качество <span>Еды</span>
                </div>
                <div class="card-desc">
                    Качество нашей Еды - отменное!
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img class="card-img" src="img/card.png">
                </div>
                <div class="card-title">
                    Недорогая <span>Еда</span>
                </div>
                <div class="card-desc">
                    Стоимость нашей Еды зависит только от ее количества. Качество всегда на высоте!
                </div>
            </div>
        </div>
    </div>
</div>';
include 'template.php';
?>