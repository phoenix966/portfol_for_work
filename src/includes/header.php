<header class="header" id="header">
    <div class="container header__container">
        <div class="header__wrap">
            <div class="logo">
                <div class="logo__picture">
                    <img src="<?php echo $user['logo']; ?>" alt="logo" class="logo__img">
                </div>
                <h1 class="logo__title"><?php echo $user['text']['user_forname']; ?> <span><?php echo $user['text']['user_name']; ?></span></h1>
            </div>
        </div>
        <div class="header__wrap">
            <ul class="nav list--reset ">
                <li class="nav__item"><a href="<?php echo $navbar['item_1']['link']; ?>" class="nav__link"><?php echo $navbar['item_1']['text']; ?></a></li>
                <li class="nav__item"><a href="<?php echo $navbar['item_2']['link']; ?>" class="nav__link"><?php echo $navbar['item_2']['text']; ?></a></li>
                <li class="nav__item"><a target="blank" href="<?php echo $navbar['item_3']['link']; ?>" class="nav__link"><?php echo $navbar['item_3']['text']; ?></a></li>
            </ul>              
        </div>
        <div class="header__wrap header__wrap--hide">
            <button class="hamburger hamburger--emphatic" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
        </div>
    </div>
    <div class="mobile mobile--hide">
        <div class="mobile__overlay">
            <ul class="mobile__menu list--reset">
            <li class="mobile__item"><a href="<?php echo $navbar['item_1']['link']; ?>" class="mobile__link"><?php echo $navbar['item_1']['text']; ?></a></li>
            <li class="mobile__item"><a href="<?php echo $navbar['item_2']['link']; ?>" class="mobile__link"><?php echo $navbar['item_2']['text']; ?></a></li>
            <li class="mobile__item"><a href="<?php echo $navbar['item_3']['link']; ?>" class="mobile__link"><?php echo $navbar['item_3']['text']; ?></a></li>
        </ul>
        </div>
    </div>
    <div class="lang">
        <a href="<?php echo $user['lang_switcher']['link']; ?>" class="lang__text"><?php echo $user['lang_switcher']['text']; ?></a> 
    </div>
</header>