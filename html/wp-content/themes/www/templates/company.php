<?php get_header();
/*
Template Name: 会社概要
*/
?>
<main class="page">

  <!-- headline -->
  <?php get_template_part('parts/headline') ?>

  <!-- company-main -->
  <section class="company-main">
    <div class="company-main__img fadeInOpacity">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company-main.jpg" alt="">
    </div>
  </section>

  <!-- company-info -->
  <section class="company-info">
    <div class="company-info__inner section__inner section__inner-s">
      <dl class="company-info__list fadeIn">
        <div class="company-info__item">
          <dt class="company-info__item-title">会社名</dt>
          <dd class="company-info__item-text">株式会社ワールドワイドウィングス</dd>
        </div>
        <div class="company-info__item">
          <dt class="company-info__item-title">設立</dt>
          <dd class="company-info__item-text">2016年4月</dd>
        </div>
        <div class="company-info__item">
          <dt class="company-info__item-title">事業内容</dt>
          <dd class="company-info__item-text">英会話事業/教材の企画、制作及び販売/外国籍人材派遣事業/上記事業のフランチャイズ、コンサルティング/上記に関する一切の業務</dd>
        </div>
        <div class="company-info__item">
          <dt class="company-info__item-title">代表取締役</dt>
          <dd class="company-info__item-text">清岡 城英</dd>
        </div>
        <div class="company-info__item">
          <dt class="company-info__item-title">資本金</dt>
          <dd class="company-info__item-text">4,000,000円</dd>
        </div>
        <div class="company-info__item">
          <dt class="company-info__item-title">社員数</dt>
          <dd class="company-info__item-text">66人</dd>
        </div>
        <div class="company-info__item">
          <dt class="company-info__item-title">所在地</dt>
          <dd class="company-info__item-text">
            池尻大橋校：〒154-0001<br class="sp_only"> 東京都世田谷区池尻２丁目３１−５<br class=""> プライマルイプセ池尻大橋２階<br>
            学芸大学駅前校：〒152-0001<br class="sp_only"> 東京都目黒区中央町２丁目３８−５ １F
          </dd>
        </div>
        <div class="company-info__item">
          <dt class="company-info__item-title">TEL</dt>
          <dd class="company-info__item-text">03-6555-4370</dd>
        </div>
      </dl>
    </div>
  </section>

  <!-- company-message -->
  <section class="company-message">
    <div class="company-message__inner">
      <div class="company-message__img fadeLeftRight">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company-message.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/logo-company-message.svg" class="company-message__img-logo" alt="">
      </div>
      <div class="company-message__contents fadeRightLeft">
        <p class="company-message__contents-sign sp_only">代表取締役　清岡 城英</p>
        <p class="company-message__contents-title">日本ほど世界の舞台で本来の<br class="sp_only">ポテンシャルを<br class="pc_tb">発揮しきれて<br class="sp_only">いない国はないのではないか。</p>
        <p class="company-message__contents-text">
          それは大学生の時のヨーロッパ留学経験を通して強く感じたことでした。<br>
          日用品から様々なサービスにいたるまで、その比較の中で日本の品質の高さを随所に感じ、また同時にそれが世界に十分に届いていないことを歯痒く感じていました。<br>
          <br>
          日本は先人の弛まぬ努力と人口増加により、内需を軸としながら大きな発展を遂げてきました。しかしながら今後人口が減少する局面となり、日本が見出すべき活路をより国外に求めざるを得ません。<br>
          <br>
          私達が未来を託すこども達は、今までの我々とは全く異なる外部環境の中で、自分らしく生きていく自由と、自由が故の自己責任の間に、自らの生きる道を探すことになります。<br>
          <br>
          私達はその様な未来の中でこども達が、自分らしく自由に生きていくための力を与えられるように、事業を開始しました。<br>
          <br>
          言語はあくまでコミュニケーションの道具でしかありませんが、それぞれの個性を活かす最高の武器となります。そしてより自己効力感を高く持つことができれば、常に自己成長を促すことができます。<br>
          <br>
          私達が難なく日本語を身につけた様に、本来環境さえ整っていれば言語は誰にでも習得できるもの。私達はこども達にとって最適な言語習得をサポートする教育環境を、日々追求しています。<br>
          <br>
          私達が何より先生と生徒の比率にこだわっていることも、<br class="pc_tb">
          毎日一人一人のこども達の成長の記録を取っていることも。<br>
          <br>
          そして従業員の幸せを願い、職場を笑顔で満たそうとすることも、<br class="pc_tb">
          その先生達が、こども達にとって最高の友達であろうとすることも。<br>
          <br>
          すべてはどこよりも最高の教育環境を提供したいと思うが故です。<br>
          <br>
          私達との関わりの中でこども達に授けられる言葉が、<br class="pc_tb">
          世界を見渡すための大きな翼となり、<br class="pc_tb">
          世界が彼等にとってより身近なものとなる様、<br class="pc_tb">
          スタッフ一同心より願いを込めてー。<br>
          <br>
          It’s a small world... with Wings.
        </p>
        <p class="company-message__contents-sign pc_tb">代表取締役社長　清岡 城英</p>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>