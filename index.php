<?php
$db = new PDO("mysql:host=localhost;dbname=cw96431_bd", "cw96431_bd", "123456789");

$info = [];

if ($query = $db->query("SELECT * FROM test1")) {
    $info = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
   <meta name="description"
      content="Комплексное обследование организма в Ростове-на-Дону всего за 1550 руб. Узнай все о состоянии своего орагнизма в МЦ 'Лого'. Check-Up программа доступна каждому!">
   <meta name="keywords" content="Check-up обследования анализы">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
   <script src="js/swiper.js" defer></script>
   <script src="js/main.js" defer></script>
   <link rel="stylesheet" href="./css/swiper.css">
   <title>Test page</title>
   <link rel="stylesheet" href="./css/style.min.css">
</head>

<body>
   <div class="wrapper">
      <header class="header">
         <div class="container">
            <div class="header__inner-top">
               <div class="header__inner-left">
                  <div class="menu__btn">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
                  <a href="#" class="logo">
                     <picture>
                        <source media="(max-width: 500px)" srcset="images/logo-mob.svg">
                        <img class="logo__img" src="images/logoGreen.svg" alt="Logo">
                     </picture>
                  </a>
                  <a href="#" class="header__geoloc-city">Ростов-На-Дону
                     <span class="header__geoloc-street">ул. Ленина, 2Б</span>
                  </a>

               </div>
               <div class="header__inner-right">
                  <a href="tel:+78630000000" class="header__number">+7(863) 000 00 00</a>
                  <a href="#" class="header__geoloc-city header__geoloc-mob">Ростов-На-Дону</a>
                  <button class="button header__button" id="header-btn">Записаться на прием</button>
               </div>
            </div>
         </div>
         <div class="header__bg-bottom">
            <div class="container">
               <div class="header__inner-bottom">
                  <div class="header__menu">
                     <nav class="menu">
                        <ul class="menu__list">
                           <li class="menu__list-item">
                              <a href="#" class="menu__list-link">О клинике</a>
                           </li>
                           <li class="menu__list-item">
                              <a href="#" class="menu__list-link">Услуги</a>
                           </li>
                           <li class="menu__list-item">
                              <a href="#" class="menu__list-link">Специалисты</a>
                           </li>
                           <li class="menu__list-item">
                              <a href="#" class="menu__list-link">Цены</a>
                           </li>
                           <li class="menu__list-item">
                              <a href="#" class="menu__list-link">Контакты</a>
                           </li>
                        </ul>
                     </nav>
                     <button class="button button_mob-menu" id="mob-btn">Записаться на прием</button>
                  </div>
               </div>
            </div>
         </div>
      </header>

      <main class="main">
         <section class="top">
            <div class="container">
               <div class="top__content">
                  <div class="top__left">
                     <h1 class="top__title">Многопрофильная клиника для детей
                        и взрослых</h1>
                     <p class="top__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua</p>
                  </div>
                  <div class="top__right">
                     <picture>
                        <source media="(max-width: 375px)" srcset="images/top-img-mob.jpg">
                        <img src="images/top-img.jpg" alt="Дестский уголок" class="top__img">
                     </picture>
                  </div>
               </div>
            </div>
         </section>
         <section class="check">
            <div class="container">
               <div class="swiper">
                  <div class="swiper-wrapper">                            
                     <?php foreach ($info as $data): ?>
                        <div class="swiper-slide">
                           <div class="check__inner">
                              <div class="check__left">
                                 <div class="check__left-content">
                                    <h2 class="check__title"><?= $data['title']; ?></h2>
                                    <span class="check__span"><?= $data['headerSpan']; ?></span>
                                    <ul class="check__list">
                                       <li class="check__list-item"><?= $data['item1']; ?></li>
                                       <li class="check__list-item"><?= $data['item2']; ?></li>
                                       <li class="check__list-item"><?= $data['item3']; ?></li>
                                       <li class="check__list-item"><?= $data['item4']; ?></li>
                                    </ul>
                                    <div class="check__price">
                                       <span class="check__price-sale"><?= $data['salePrice']; ?></span>
                                       <span class="check__price-full"><?= $data['price']; ?></span>
                                    </div>
                                    <div class="check__btn">
                                       <button class="button" id="check-up-btn">Записаться</button>
                                       <a href="" class="check__link button-link">Подробнее</a>
                                    </div>
                                 </div>

                              </div>
                              <div class="check__right">
                                 <picture>
                                    <source media="(max-width: 375px)" srcset="<?= $data['image']; ?>">
                                    <img src="<?= $data['image']; ?>" alt="doctor" class="check__right-img">
                                 </picture>
                              </div>
                           </div>
                        </div>
                        <?php endforeach; ?>                     
                  </div>
                  <div class="slider-nav">
                     <div class="slider-prev slider-btn swiper-button-prev"></div>
                     <div class="slider-pogination swiper-pagination">
                     </div>
                     <div class="slider-next slider-btn swiper-button-next"></div>
                  </div>
               </div>
            </div>
         </section>
      </main>

      <div class="modal">
         <div class="modal__overlay">
            <div class="modal__window">
               <div class="modal__header">
                  <span class="modal__title">Записаться на приём</span>
                  <span class="modal__close">&times;</span>
               </div>
               <div class="modal__body">
                  <form class="modal__form" action="contact.php">
                     <input required class="modal__input" type="text" name="userName" placeholder="Ваше имя"
                        pattern="^([А-ЯЁа-яёA-Za-z]+)$">
                     <input required class="modal__input" type="text" name="number" placeholder="Ваш телефон" pattern="^([0-9]+)$">
                     <textarea rows="3" class="modal__textarea" name="text" placeholder="Ваш комментарий"></textarea>
                     <button type="submit" class="button" name="submit" id="modal-btn-close">Записаться</button>
                  </form>
               </div>
            </div>
         </div>
      </div>

      <footer class="footer">
         <div class="container">
            <div class="footer__inner">
               <a href="#" class="footer__logo">
                  <img src="images/logoWhite.svg" alt="logoWhite" class="logo__img">
               </a>
               <nav class="footer__menu">
                  <ul class="footer__menu-list">
                     <li class="footer__menu-item">
                        <a href="#" class="footer__menu-link">О клинике</a>
                     </li>
                     <li class="footer__menu-item">
                        <a href="#" class="footer__menu-link">Услуги</a>
                     </li>
                     <li class="footer__menu-item">
                        <a href="#" class="footer__menu-link">Специалисты</a>
                     </li>
                     <li class="footer__menu-item">
                        <a href="#" class="footer__menu-link">Цены</a>
                     </li>
                     <li class="footer__menu-item">
                        <a href="#" class="footer__menu-link">Контакты</a>
                     </li>
                  </ul>
               </nav>
               <div class="footer__messengers">
                  <a href="#" class="footer__messengers-link">
                     <img src="images/instagram.svg" alt="instagram" class="footer__messengers-img">
                  </a>
                  <a href="#" class="footer__messengers-link">
                     <img src="images/whatsappFooter.svg" alt="whatsapp" class="footer__messengers-img">
                  </a>
                  <a href="#" class="footer__messengers-link">
                     <img src="images/telegram.svg" alt="telegram" class="footer__messengers-img">
                  </a>
               </div>
            </div>
         </div>
      </footer>
   </div>



</body>

</html>