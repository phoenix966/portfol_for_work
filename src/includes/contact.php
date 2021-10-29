<section class="contact" id="contact">
    <div class="container contact__container">
        <?php 
            include './includes/main-3.php';
        ?>
        <div class="contact__wrap">
            <form class="contact__form" action="./mail.php?<?php echo $user['path']['lang']; ?>" method="POST">
                <div class="contact__wrapper">
                    <input name="user_name" id="name" type="text" class="contact__input" placeholder="<?php echo $contact['form']['name']; ?>">
                </div>
                <div class="contact__wrapper">
                    <input required name="user_email" id="email" type="email" class="contact__input" placeholder="<?php echo $contact['form']['email']; ?>">
                </div>
                <div class="contact__wrapper">
                    <input required name="user_phone" id="phone" type="number" class="contact__input" placeholder="<?php echo $contact['form']['phone']; ?>">
                </div>
                <textarea name="user_message" id="text" class="contact__text-area" placeholder="<?php echo $contact['form']['message']; ?>"></textarea>
                <div class="contact__row">
                    <button type="submit" class="contact__btn btn"><?php echo $contact['btn']['text']; ?></button>
                </div>
            </form>
        </div>
    </div>
</section>