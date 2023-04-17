<?php
/*
 * Template name: Contacts
 */
get_header();
?>
        <div id="content">
            <section class="container" role="main">
                <h1>Контакты</h1>
               

                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </section>
        </div>

        <div id="modules-main">
            <div class="module-6">
                <div class="container">
                    
                </div>
            </div>
            <div class="module-5">
                <aside class="container module-inner">
                    <div class="module-title">
                        <p></p>
                    </div>
                    <div class="module-container">
                        <div class="column-1">
                            <form class="form" action="<?php echo get_template_directory_uri(); ?>/mailto.php">
                                <label class="title">ЮРИДИЧЕСКАЯ КОНСУЛЬТАЦИЯ ОНЛАЙН</label>
                                <input class="name input" placeholder="Ваше имя" type="text" value="">
                                <input class="email input" placeholder="Ваш E-mail" type="email" value="">
                                <input class="phone input" placeholder="Ваш телефон" type="tel" value="">
                                <textarea class="message input" placeholder="Напишите здесь свой вопрос (с указанием вашего города). Мы обязательно ответим Вам, срок ответа не более 3 дней. Если Вам необходима срочная юридическая консультация, то позвоните нам." rows="9"></textarea>
                                <button class="submit" type="submit">Отправить</button>
                            </form>
                            <script>
                                jQuery('.form .submit').click(function () {
                                    var name = jQuery('.form .name').val();
                                    var email = jQuery('.form .email').val();
                                    var phone = jQuery('.form .phone').val();
                                    var message = jQuery('.form .message').val();

                                    jQuery.ajax({
                                        url: jQuery('.form').attr('action'),
                                        type: 'POST',
                                        data: { name: name, email: email, phone: phone, message: message },
                                        success: function (data) {
                                            alert('Отправлено!');
						jQuery('.form .name').val('');
                                    		jQuery('.form .email').val('');
                                    		jQuery('.form .phone').val('');
                                    		jQuery('.form .message').val('');
                                        }
                                    })

                                    return false;
                                })
                            </script>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
<?php
get_footer();
?>