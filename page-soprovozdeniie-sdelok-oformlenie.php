<?php /* Template Name: page-soprovozdeniie-sdelok-oformlenie */ ?>
<?php get_header(); ?>
   <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <?php the_content(); ?>
   <?php endwhile; endif; ?>
<?php get_footer(); ?>

<!-- Верстка, которая вставляется в редактирование страницы в админке -->
<!--
<div id="content" class="uslugi_inner">
   <section class="container d-flex flex-wrap">
      <div class="bp_s-hide w-third p-xl bp_s-p-m">
         <img
            src="/wp-content/themes/totemtheme/images/totem/legal-disputes.png"
            alt="Сопровождение сделок с недвижимостью"
            title="Сопровождение сделок с недвижимостью">
      </div>
      <div class="d-flex flex-wrap w-two-thirds w_full-bp_m p_left-m">
         <div class="bp_s-show w-third p-xl bp_s-p-m">
            <img
               src="/wp-content/themes/totemtheme/images/totem/legal-disputes.png"
               alt="Сопровождение сделок с недвижимостью"
               title="Сопровождение сделок с недвижимостью">
         </div>
         <div class="w-full bp_s-w_two-thirds"><h4 class="gradient-bg-red">СОПРОВОЖДЕНИЕ СДЕЛОК С НЕДВИЖИМОСТЬЮ</h4></div>
         <div class="p_x-m w-half h-full">
            <h3>Профессиональная юридическая поддержка позволит:</h3>
            <ul class="marker_color marker-inside">
               <li>Правильно оценить и минимизировать риски нарушения ваших прав и интересов, риски оспаривания сделок, возможные судебные споры;</li>
               <li>Сэкономить время, взяв на себя вопросы подготовки документов, представления интересов в органах власти</li>
            </ul>
         </div>
         <div class="w-half h-full">
            <h3>Почему в ваших интересах, чтоб в сделке участвовал юрист, привлеченный именно Вами?</h3>
            <p>Независимый от другой стороны в сделке юрист будет отстаивать исключительно ваши права и интересы в сделке, не станет скрывать важную информацию (которая возможно даже заставит Вас отказаться от сделки).</p>
         </div>
      </div>
      <h3 class="p_x-m w-full">Что включает в себя сопровождение сделок?</h3>
      <div class="p_x-m w-third w_full-bp_m">
         <ul class="marker_color marker-inside">
            <li>Юридическая экспертиза объекта сделки, прав на имущество, проверка «чистоты» объекта;</li>
            <li>Выявление запретов (обременений), споров, дополнительных условий (разрешений, согласований), иных юридических препятствий для отчуждения объекта (совершения сделки), наличие прав третьих лиц на объект недвижимости;</li>
            <li>оценка и анализ рисков, выработка рекомендаций по минимизации рисков;</li>
         </ul>
      </div>
      <div class="p_x-m w-third w_full-bp_m">
         <ul class="marker_color marker-inside">
            <li>Правовой анализ и подготовка проектов договоров купли-продажи, дарения, мены, аренды, залога (ипотеки), иных документов, необходимых при совершении сделки, проверку условий сделки на соответствие законодательству и учета ваших интересов;</li>
            <li>Проверка надежности другой стороны в сделке (наличие судебных споров, исполнительных производств, взысканий);</li>
            <li>проверка правомочности лица совершать сделку и подписывать документы от имени контрагента;</li>
         </ul>
      </div>
      <div class="p_x-m w-third w_full-bp_m">
         <ul class="marker_color marker-inside">
            <li>структурирование сделки, выбор оптимальной формы, этапов совершения сделки;</li>
            <li>Представление интересов в переговорах, при подписании договоров;</li>
            <li>Представительство в государственных органах;</li>
            <li>Консультирование вопросам недвижимости, строительства, приобретения и продажи недвижимости, по вопросам земельного и жилищного права.</li>
         </ul>
      </div>
   </section>
   <div class="uslugi_inner_price gradient-bg-blue">
      <div class="w-third w_half-bp_xl d-flex flex-column">
         <h5>Средняя стоимость сопровождения сделки</h5>
         <div class="gradient-bg-red price_label"><div>50&nbsp;000&nbsp;рублей</div><div class="f-s">+ 1,5&nbsp;% от цены сделки</div></div>
      </div>
      <div class="w-third w_half-bp_xl d-flex flex-column">
         <h5>Стоимость консультации</h5>
         <div class="gradient-bg-red price_label h-full"><div>От 10&nbsp;000&nbsp;рублей</div></div>
      </div>
   </div>
</div>
-->
