<?php
$menu = '
<div class="container">
        <div class="menu-title">
            Наше меню
        </div>
        <div class="menu-items">
            <div class="menu-item">
                <div class="menu-image">
                    <img src="img/menu-item.png" class="menu-img">
                    <div class="price">
                        <img src="img/price.png" class="price-image">
                        <div class="price-420">
                            420
                        </div>
                    </div>
                </div>
                <div class="menu-text">
                    Гамбургер макси
                </div>
                <div class="menu-subtext">
                    Максимально толстый <br> слой мяса
                </div>
                <div class="menu-button">
                    <a href="#" class="menu-btn">
                        ЗАКАЗАТЬ
                    </a>
                </div>
            </div>
            <div class="menu-item">
                <div class="menu-image">
                    <img src="img/menu-item.png" class="menu-img">
                    <div class="price">
                        <img src="img/price.png" class="price-image">
                        <div class="price-420">
                            420
                        </div>
                    </div>
                </div>
                <div class="menu-text">
                    Гамбургер макси
                </div>
                <div class="menu-subtext">
                    Максимально толстый <br> слой мяса
                </div>
                <div class="menu-button">
                    <a href="#" class="menu-btn">
                        ЗАКАЗАТЬ
                    </a>
                </div>
            </div>
            <div class="menu-item">
                <div class="menu-image">
                    <img src="img/menu-item.png" class="menu-img">
                    <div class="price">
                        <img src="img/price.png" class="price-image">
                        <div class="price-420">
                            420
                        </div>
                    </div>
                </div>
                <div class="menu-text">
                    Гамбургер макси
                </div>
                <div class="menu-subtext">
                    Максимально толстый <br> слой мяса
                </div>
                <div class="menu-button">
                    <a href="#" class="menu-btn">
                        ЗАКАЗАТЬ
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="coment">
    <div class="container">
        <div class="coment-text">
            Я надолго запомню мой День рождения, проведённый в этом ресторане! Кусочек родной Армении!!! Отдельное спасибо за комплимент в виде фруктовой тарелки.
             Будем рекомендовать этот ресторан своим друзьям и родственникам также за рубежом, путешествующих в Санкт-Петербург!!!
        </div>
        <div class="coment-image">
            <img src="img/face.png" class="coment-img">
        </div>
        <div class="coment-type">
            Посетитель
        </div>
        <div class="coment-name">
            Николай
        </div>
    </div>
</div>
<div class="gallery">
    <div class="container">
        <div class="gallery-title">
            Галерея <span>Блюд</span>
        </div>
        <div class="gallery-content">
            <div class="gallery-left">
                <div class="gallery-up">
                    <img src="img/10.jpg">
                </div>
                <div class="gallery-down">
                    <img src="img/20.jpg">
                    <img src="img/30.jpg">
                </div>
            </div>
            <div class="gallery-right">
                <div class="gallery-up">
                    <img src="img/20.jpg">
                    <img src="img/30.jpg">
                </div>
                <div class="gallery-down">
                    <img src="img/10.jpg">
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="cook">
    <div class="container">
        <div class="cook-title">
            Наши <span>Повара</span>
        </div>
        <div class="cook-content">
            <img src="img/1c.jpg">
            <img src="img/2c.jpg">
            <img src="img/3c.jpg">
        </div>
    </div>
</div>

<section id="subscribe">
    <div class="subscribe__left">
        <div class="subscribe__subtitle">Email Newsletter</div>
        <div class="subscribe__title">Подпишитесь на обновления</div>
    </div>
    <div class="subscribe__right">
        <form action="sign-in.php" method="POST" class="form" id="add-form">
             <input class="subscribe__input" type="text" id="name" name="name" placeholder="Name" required>
        </br><input class="subscribe__input" type="email" id="email" name="email" placeholder="Email" required>
        </br><input class="subscribe__button" type="submit" name="send" value="Submit" > 
        </br><legend class="radio_text">Хотели бы вы получать уведомления </br> на вашу электронную почту?</legend>
        <form>
              <input class="yes" type="radio" name="question" >
              <label for="yes" class="answer">Yes</label>
            
            
              <input id="no" type="radio" name="question">
              <label class="answer" for="no">No</label>
          </form>
        </form>
    </div>
    <script src="style.js"></script>
</section>
</div> 
';
include 'template.php';
?>