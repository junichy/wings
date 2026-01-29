<?php get_header();
/*
Template Name: 伸ばす2つの力
*/
?>
<main class="page skills">

  <!-- headline -->
  <?php get_template_part('parts/headline') ?>

  <!-- sec_skills -->
  <section class="sec_skills">
    <div class="sec_skills__inner section__inner section__inner--center">
      <div class="sec_skills__title section__title section__title--center fadeIn">
        <h2 class="sec_skills__title-main section__title-main"><span>2つの力とは？</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/method/icon_sec_skills.svg" alt=""></h2>
        <p class="sec_skills__title-sub section__title-sub">About Two Skills?</p>
      </div>
      <p class="sec_skills__text fadeIn">英語コミュニケーションスキルと「心」</p>
      <div class="sec_skills__img fadeIn">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/skills/sec_skills.png" alt="" class="pc_tb">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/skills/sec_skills-sp.png" alt="" class="sp_only">
      </div>
    </div>
  </section>

  <!-- sec_communication -->
  <section class="sec_communication">
    <div class="sec_communication__upper">
      <div class="sec_communication__upper-left fadeLeftRight">
        <div class="sec_communication__title section__title">
          <h2 class="sec_communication__title-main section__title-main"><span>英語コミュニケーション力</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/skills/icon_sec_communication.svg" alt=""></h2>
          <p class="sec_communication__title-sub section__title-sub">About English Communication Skills</p>
          <p class="sec_communication__title-bg section__title-bg">About</p>
        </div>
        <p class="sec_communication__upper-text">英語コミュニケーション力は英語と異文化対応力で構成されます。 英語が話せても、異なる文化によって違う「コミュニケーションスタイル」 に適応できなければ、効果的なコミュニケーションができていることにはなりません。 また異文化対応力があっても、英語ができなければ「アダプター」になってしまいます。 Wings Global Homeでは、世界に羽ばたく「グローバルプレーヤー」になるためには、 どちらも重要で欠かせないスキルと考えています。（図１参照）</p>
      </div>
      <div class="sec_communication__upper-right fadeRightLeft">
        <div class="sec_communication__upper-right-text">図１参照：英語と異文化対応力の関係</div>
        <div class="sec_communication__upper-right-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/skills/sec_communication-graph.png" alt=""></div>
      </div>
    </div>
    <div class="sec_communication__lower">
      <ul class="sec_communication__list">
        <li class="sec_communication__item fadeLeftRight">
          <div class="sec_communication__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/skills/sec_communication_01.jpg" alt=""></div>
          <div class="sec_communication__item-contents">
            <div class="sec_communication__item-upper">
              <div class="sec_communication__item-title"><span>英語力</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/skills/icon_sec_communication_01.svg" alt=""></div>
              <ul class="sec_communication__item-skills">
                <li class="sec_communication__item-skill is_current">英語力</li>
                <li class="sec_communication__item-skill">異文化対応力</li>
              </ul>
            </div>
            <p class="sec_communication__item-text">英語力で大切なことは何でしょうか？　Wings Global Homeでは、ただ発音よく話せるだけではなく、同年齢の英語ネイティブの児童と同等の読解力が伴った英語力の向上を図ります。読解力が伴うことで圧倒的な英語力を実現し、英語による中学受験等、将来英語による高等教育への挑戦も可能となります。詳しくは「独自のメソッドとカリキュラム」のページを参照ください。</p>
            <p class="sec_communication__item-btn btn btn__white"><a href="/method/">独自のメソッドとカリキュラム</a></p>
          </div>
        </li>
        <li class="sec_communication__item fadeRightLeft">
          <div class="sec_communication__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/skills/sec_communication_02.jpg" alt=""></div>
          <div class="sec_communication__item-contents">
            <div class="sec_communication__item-upper">
              <div class="sec_communication__item-title"><span>異文化対応力</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/skills/icon_sec_communication_02.svg" alt=""></div>
              <ul class="sec_communication__item-skills">
                <li class="sec_communication__item-skill">英語力</li>
                <li class="sec_communication__item-skill is_current">異文化対応力</li>
              </ul>
            </div>
            <p class="sec_communication__item-text">英語を第２言語として話す人も含め、世界中の英語の話者は、約11.8億人。また、同じ英語でも文化によってコミュニケーションスタイルは変わります。グローバルに活躍するには、世界中の 英語コミュニケーションスタイルや異文化に慣れることが必要なのです。世界中からきた優秀な先生たちが集まっているWings Global Homeは、１つの小さな「世界」を作り出しており、本当の意味（リアル）でのグローバルな環境を提供しています。 It’s a small world...with Wings. Wings Global Homeでは、さまざまな英語コミュニケーションスタイルだけでなく、世界の異なる文化に触れることになるため、自然にグローバルなマインドセットが醸成されます。</p>
            <?php
              $page_url = get_field('link');
              if(!empty($page_url)) { 
              ?>
              <p class="sec_communication__item-btn btn btn__white"><a href="<?php echo $page_url['url']; ?>" target="<?php echo $page_url['target']; ?>">詳しく見る</a></p>
              <?php } ?>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- sec_mental -->
  <section class="sec_mental">
    <div class="sec_mental__upper">
      <div class="sec_mental__upper-left fadeLeftRight">
        <div class="sec_mental__title section__title">
          <h2 class="sec_mental__title-main section__title-main"><span>「心」の成長</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/skills/icon_sec_mental.svg" alt=""></h2>
          <p class="sec_mental__title-sub section__title-sub">About Mental Growth</p>
          <p class="sec_mental__title-bg section__title-bg">About</p>
        </div>
        <p class="sec_mental__upper-text">Wings Global Homeでは心の成長は、英語コミュニケーション力を支える土台のようなもので、「自己効力感(self-efficiency)」、「好奇心(curiosity)」、「社会性(social awareness)」からなると考えています。<br>教室のようなフォーマルな環境でなく、自宅Homeにいるような日常の環境でこそ、これらの心の成長が育まれると信じています。</p>
      </div>
      <div class="sec_mental__upper-right fadeRightLeft">
        <div class="sec_mental__upper-right-title">心の成長</div>
        <ul class="sec_mental__upper-right-circles">
          <li class="sec_mental__upper-right-circle"><span>自己<br>効力感</span></li>
          <li class="sec_mental__upper-right-circle"><span>好奇心</span></li>
          <li class="sec_mental__upper-right-circle"><span>社会性</span></li>
        </ul>
      </div>
    </div>
    <div class="sec_mental__lower">
      <ul class="sec_mental__list">
        <li class="sec_mental__item fadeLeftRight">
          <div class="sec_mental__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/skills/sec_mental_01.jpg" alt=""></div>
          <div class="sec_mental__item-contents">
            <div class="sec_mental__item-upper">
              <div class="sec_mental__item-title"><span>自己効力感</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/skills/icon_sec_mental_01.svg" alt=""></div>
              <ul class="sec_mental__item-skills">
                <li class="sec_mental__item-skill is_current">自己効力感</li>
                <li class="sec_mental__item-skill">好奇心</li>
                <li class="sec_mental__item-skill">社交性</li>
              </ul>
            </div>
            <p class="sec_mental__item-text">
              <span>
                目標を達成する際に「自分ならできる、きっとうまくいく」と信じることができる“認知”のことで、「自分にはそれだけの能力がある」と信じられている状態であることです。<br>
                自己効力感の高いこどもは、何事にもポジティブな姿勢でチャレンジします。また、自分の能力を信じているからこそ失敗しても再挑戦するようになります。自己効力感は成長するこどもの原動力になるのです。
              </span>
              <span>
                Wings Global Homeでは自己効力感が心の成長の中でも最も大事と考えており、少人数制によってこども達の挑戦は常に先生に後押しされることによって、小さな成功体験の積み重ねによって育んでいきます。例えば、<br>
                ●自分で靴を履く<br>
                ●自分の荷物の準備をする<br>
                ●一人で工作作品を作り上げる<br>
                ●より難しい英語の本が読めるようになる<br>などの成功体験を積み重ねさせることにより、<br>「自分ならできる、きっとうまくいく」という自己効力感が醸成されていきます。
              </span>
            </p>
          </div>
        </li>
        <li class="sec_mental__item fadeRightLeft">
          <div class="sec_mental__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/skills/sec_mental_02.jpg" alt=""></div>
          <div class="sec_mental__item-contents">
            <div class="sec_mental__item-upper">
              <div class="sec_mental__item-title"><span>好奇心</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/skills/icon_sec_mental_02.svg" alt=""></div>
              <ul class="sec_mental__item-skills">
                <li class="sec_mental__item-skill">自己効力感</li>
                <li class="sec_mental__item-skill is_current">好奇心</li>
                <li class="sec_mental__item-skill">社交性</li>
              </ul>
            </div>
            <p class="sec_mental__item-text">
              <span>将来グローバル化が更に進み、こども達は未知の世界に接する機会がさらに増えます。そのようなとき、こども達はどのような姿勢で未知の世界に接するのでしょうか</span>
              <span>好奇心とは、物事を探求しようとする根源的な心です。目新しいものに出会ったときにこども達はある種の驚きの感情を持ちます。その後「驚き」は、好奇心が生まれるか恐怖が生まれるかのどちらかになると言われています。私たちは、まずことも達の好奇心の「幅」を広げることも大切に考えています。こども達が今まで触れたことのない世界を知る「きっかけ」を、出来るだけ多く作ります。</span>
              <span>また、好奇心の「育て方」として、情報を一方的に与えるのではなく、探究心を起こさせるような「仕掛け」を工夫しています。例えば、水生動物の話しであえば、こども達は動物が属性で分類されることを知り、水族館で実際にその違いを確かめに行く等、好奇心の対象を広げることから始まり、強い探求が引き起こされ、最後に実際の体験を着地点としてをデザインしています。（具体的なカリキュラムのページを参照）</span>
              <span>「なんだろう、もっと知りたい」という好奇心と、「自分ならできるだろう」という自己効力感の両方が、新しい世界に接したときに、前進する原動力となるのです。</span>
            </p>
          </div>
        </li>
        <li class="sec_mental__item fadeLeftRight">
          <div class="sec_mental__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/skills/sec_mental_03.jpg" alt=""></div>
          <div class="sec_mental__item-contents">
            <div class="sec_mental__item-upper">
              <div class="sec_mental__item-title"><span>社会性</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/skills/icon_sec_mental_03.svg" alt=""></div>
              <ul class="sec_mental__item-skills">
                <li class="sec_mental__item-skill">自己効力感</li>
                <li class="sec_mental__item-skill">好奇心</li>
                <li class="sec_mental__item-skill is_current">社交性</li>
              </ul>
            </div>
            <p class="sec_mental__item-text">
            <span>
              グローバルな世界で生きていくためには、社会性も大変重要です。<br>
              社会性とは、社会の一員として、他人とうまくやっていく、集団生活をうまくやっていく素質や能力のことを指します。<br>
              Wings Global Homeでは、まず社会のルールを守る、そして人とモノを譲り合う、人の話しを聞くなどの基本姿勢を培い、その後社会の一員として自分ができること、そして社会の巻き込み方という意味での社会性まで踏み込んで考えています。
            </span>
            <span>例えば、SDGsに代表されるように、いま世界中で起きている環境、差別、貧困、人権等のさまざまな社会問題は一人ひとりの「自分事化」が必要であり、多くの課題は世界の人々との協業が必要です。国籍豊かな先生達とこのような問題を共有することによっても、自らが「グローバルシチズン」であるという意識を芽生えさせることに繋がっています。</span>
            <span>
              また、Wings Global Homeでは日本社会特有の年齢別に分けた対応をせず、あえて違う年齢のこども達を混合させるとこにより、発育の差がある中での人間関係の構築を促進しています。例えば、カリキュラムの一部であるジョブチャート（係分担）では、特に年上と年下のバディを意図的に組ませ、年上が年下の子の活動をサポートし、誰かに貢献する喜びから社会性を学びます。<br>
              また、年下の子は助けてもらいながら年上の人をロールモデルとして、将来的に自分もサポート出来るようになりたいという社会性を育むことにつながります。
            </span>
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>
</main>

<?php get_footer(); ?>