<?php get_header();
/*
Template Name: 見学申し込み
*/
?>
<main class="page">

  <!-- headline -->
  <?php get_template_part('parts/headline') ?>

  <!-- application -->
  <section id="application" class="application">
    <div class="application__inner section__inner section__inner-s">
      <div class="application__title section__title section__title--center fadeIn">
        <h2 class="application__title-main section__title-main"><span>ご見学お申し込みはこちら</span></h2>
      </div>
      <p class="application__lead fadeIn">
        <span>この度は、Wings Global Homeホームページをご覧頂き、ありがとうございます。<br>大切なお子様をお預かりする場ですので、教室にてご見学と具体的なサービス内容等ご説明のお時間を頂戴しております。<br><span class="bold">尚、十分にご検討頂く為、こちらからご入会を促す様な事は致しませんのでお気軽にお越し下さい。</span></span>
        <span>下記フォームよりお問い合わせ頂きましたら後程お日にちの調整の為に担当者よりメールかお電話にてご連絡させて頂きます。</span>
        <span>また別途ご質問等ございましたら下記フォームよりお気軽にお問い合わせ下さい。<br>メールかお電話にてご回答致します。</span>
      </p>
      <div class="application__contents form__contents fadeIn">
        <p class="application__contents-title">お問い合わせフォーム</p>
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  
</main>

<?php get_footer(); ?>