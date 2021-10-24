<div class="main">
    <div class="container main__container">
        <h2 class="main__title main__title--light" data-aos="fade-right"><?php echo $contact['title']; ?></h2>
        <p class="main__text main__title--light" data-aos="fade-left">
            <?php echo $contact['text']; ?>
        </p>
        <p class="main__text" data-aos="fade-left">
            <?php 
            $text_ok = $contact['send']['ok'];
            $text_fail = $contact['send']['fail'];

            if(isset($_GET['mail'])){
                if($_GET['mail'] == 'ok'){
                    echo <<<HTML
                            <span class='main__text--ok'>${text_ok}</span>
                        HTML;
                }else{
                    echo <<<HTML
                            <span class='main__text--fail'>${text_fail}</span>
                        HTML;
                }
            }
            ?>
        </p>
    </div>
</div>