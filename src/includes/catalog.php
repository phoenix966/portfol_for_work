<section class="catalog catalog--margin" id="catalog">
        <?php 
            include './includes/main-2.php';
        ?>
    <div class="container catalog__container">
        <ul class="catalog__grid list--reset" data-aos="zoom-in" data-aos-duration="1500">
            <?php 
                foreach($catalog as $item){
                    $show = $item['browse__link'] ? '' : 'catalog__link--hide';
                    $overlay_show = $item['link'] ? '' : 'catalog__overlay--hide';
                    echo <<<HTML
                            <li class="catalog__item catalog__item-1">
                                <img src="${item['img']}" alt="image" class="catalog__img">
                                <div class="catalog__overlay ${overlay_show}">
                                    <a target="blank" href="${item['link']}" class="catalog__link icon-link"></a>
                                    <a target="blank" href="${item['browse__link']}" class="catalog__link icon-zoom ${show}"></a>
                                </div>
                                <div class="catalog__pin">
                                    <img src="./img/pin.webp" alt="pin" class="catalog__img">
                                </div>
                            </li>
                        HTML;
                };
            ?>
        </ul>
    </div>
</section>