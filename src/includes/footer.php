<footer class="footer">
    <div class="container footer__container">
        <ul class="footer__wrap list--reset">
            <li class="footer__col">
                <div class="footer__row">
                    <span class="footer__phone icon-mobile"></span>
                    <span class="footer__text"><?php echo $footer['phone']; ?></span>
                </div>
                <p class="footer__text">&copy; <?php echo $footer['made']; ?></p>
            </li>
            <li class="footer__col footer__col--row">
                <div class="footer__box">
                    <a href="<?php echo $footer['links']['github']; ?>" class="footer__icon icon-github footer__icon--git"></a>
                </div>
                <div class="footer__box">
                    <a href="<?php echo $footer['links']['whats_up']; ?>" class="footer__icon icon-telegram footer__icon--colored"></a>     
                </div>
                <div class="footer__box">
                    <a href="<?php echo $footer['links']['telegram']; ?>" class="footer__icon icon-whatsapp"></a>  
                </div>
            </li>
        </ul>
    </div>
</footer>