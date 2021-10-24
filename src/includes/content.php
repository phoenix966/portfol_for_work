<section class="content" id="content">
    <div class="container content__container">
    <?php 
        include './includes/main.php';
    ?>
        <ul class="content__list list--reset">
            <?php 
                foreach($content as $item){
                    echo <<<HTML
                            <li class="content__item" data-aos="fade-up" data-aos-duration="1000">
                                <div class="content__wrap">
                                    <div class="content__col">
                                        <span class="content__icon ${item['icon']}"></span>
                                        <p class="content__text">${item['text']}</p>
                                    </div>
                                </div>
                                <div class="content__wrap">
                                    <ul class="content__icons list--reset">
                                        <li class="content__box"><span class="content__rate ${item['star-1']}"></span></li>
                                        <li class="content__box"><span class="content__rate ${item['star-2']}"></span></li>
                                        <li class="content__box"><span class="content__rate ${item['star-3']}"></span></li>
                                        <li class="content__box"><span class="content__rate ${item['star-4']}"></span></li>
                                        <li class="content__box"><span class="content__rate ${item['star-5']}"></span></li>
                                    </ul>
                                </div>
                            </li>  
                        HTML;
                }
            ?>
        </ul>
    </div>
</section>