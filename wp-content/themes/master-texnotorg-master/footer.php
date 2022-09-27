


<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package master
 */

?>

<div>

<footer class="footer ">
            <div class="container ">
                <div class="footer-row ">
                <div class="footer-col ">
                        <img class="footer-img " src="<?php echo get_template_directory_uri( ); ?> /assets/img/icon/1.png ">
                        <div class="footer__suptitle ">Телефоны</div>                    
                        <a href="tel:<?php echo $GLOBALS ['texnotorg']['phone_one_didgets'];?>"><?php echo $GLOBALS ['texnotorg']['phone_one'] ;?></a><br>
                           <a href="tel:<a href="tel:<?php echo $GLOBALS ['texnotorg']['phone_two_didgets'];?>"><?php echo$GLOBALS ['texnotorg']['phone_two'];?></a>
                    </div>
                    <div class="footer-col ">
                        <img class="footer__img " src="<?php echo get_template_directory_uri( ); ?> /assets/img/icon/2.png ">
                        <div class="footer__suptitle ">Адрес</div>
                        <a href="menu-top__contacts "><?php echo $GLOBALS ['texnotorg']['address'];?></a>
                    </div>
                    <div class="footer-col ">
                        <img class="footer__img " src="<?php echo get_template_directory_uri( ); ?> /assets/img/icon/4.png ">
                        <div class="footer__suptitle ">E-mail</div>
                        
                        <a href="mailto:<?php echo $GLOBALS ['texnotorg']['email'];?>"><?php echo $GLOBALS ['texnotorg']['email'];?></a>
                    </div>
                    <div class="footer-col ">
                        <img class="footer__img " src="<?php echo get_template_directory_uri( ); ?> /assets/img/icon/3.png ">
                        <div class="footer__suptitle ">Режим работы</div>
                        <div class="footer__text ">Понедельник-Пятница <br>08:00 до 17:00</div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="popup">
            <div class="popup-overlay">
                <div class="popup__content ">
                    <button class="btn-close popup__btn-close"></button>
                    <h2>Заказ обратного звонка</h2>
                    <div class="popup-form">
                        <p class="page-title popup__title">Оставьте ваши контактные данные и наш консультант свяжется с вами</p>
                        <input class="name" placeholder="Ваше имя">
                        <input class="phone" placeholder="Телефон">
                        <div class="send-button">
                            <a class="header__btn" href="#">Отправить</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="popup-thanks">
            <div class="popup-overlay">

                <div class="popup__content">

                    <p> Спасибо за обращение, с Вами свяжуться в ближайшее время</p>

                </div>
            </div>
        </div>
    </div>
    </div>
    <?php wp_footer(); ?>
 

</body>
</html>