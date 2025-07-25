<?php
$link_page = get_permalink(get_the_ID());
?>

<div class="popup" data-popup="popup-form-callback" data-close-overlay>
  <div class="popup__wrapper" data-close-overlay>
    <div class="popup__content">
      <button class="popup__close button-close button--close" type="button" aria-label="Закрыть"></button>
      <div class="popup__body">
        <div class="popup__title">
          <h2 class="title--popup">Оставьте свои контакты</h2>
          <p class="subtitle--popup">Наш специалист скоро свяжется с вами</p>
        </div>
        <div class="wp-block-contact-form-7-contact-form-selector" data-form-callback>
          <div class="wpcf7 js" id="wpcf7-f525-p41-o1" lang="ru-RU" dir="ltr">
            <div class="screen-reader-response">
              <p role="status" aria-live="polite" aria-atomic="true">При отправке сообщения произошла ошибка. Пожалуйста, попробуйте ещё раз позже.</p>
            </div>

            <form action="/#wpcf7-f525-p41-o1" method="post" class="popup-form" aria-label="Заказать звонок" novalidate="novalidate" data-status="failed">

              <?php
              echo do_shortcode('[contact-form-7 id="5abbbda" title="Заказать звонок"]')
              ?>

            </form>

          </div>
        </div>
        <p class="popup__info">
          Нажимая на кнопку «Отправить», вы соглашаетесь на обработку <strong data-type="personal_data">персональных данных</strong>
        </p>
      </div>
    </div>
  </div>
</div>
<script>
  const formSeven = document.querySelectorAll('[data-form-callback]');

  if (formSeven && formSeven.length > 0) {
    formSeven.forEach(form => {
      const input = form.querySelector(`input[name=your-link]`);
      if (input) {
        input.value = "<?php echo esc_js($link_page); ?>";
      }
    })

  }
</script>