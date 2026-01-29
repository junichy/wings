<?php get_header(); ?>

<main class="page">

  <!-- headline -->
  <?php get_template_part('parts/headline') ?>

  <!-- sec_wgh -->
  <section class="sec_wgh">
    <div class="sec_wgh__inner section__inner">
      <div class="sec_wgh__img fadeLeftRight">
        <img src="<?php echo get_template_directory_uri(); ?>/img/about/wgh.svg" alt="">
      </div>
      <div class="sec_wgh__contents fadeRightLeft">
        <div class="sec_wgh__title section__title">
          <h2 class="sec_wgh__title-main section__title-main"><span>Wings Global Home<br>とは？</span><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_wgh.svg" alt=""></h2>
          <p class="sec_wgh__title-sub section__title-sub">About WGH?</p>
        </div>
        <p class="sec_wgh__text">
          Wings Global Homeは２−10歳を対象とした<br>全日制幼児園＋学童です。<br>
          こどもたちに自宅にいるような暖かい人間関係と<br>生活環境を通して、圧倒的な英語のコミュニケーションスキルと心の成長を育んでいきます。<br>
          Wingsで世界に羽ばたくバイリンガルに。<br>
          It’s a small world with Wings.
        </p>
      </div>
    </div>
  </section>

  <!-- sec_home -->
  <section class="sec_home">
    <div class="sec_home__inner section__inner">
      <div class="sec_home__title section__title section__title--center fadeIn">
        <h2 class="sec_home__title-main section__title-main"><img src="<?php echo get_template_directory_uri(); ?>/img/about/home.svg" alt="Home"><span>とはどんな場所か？</span><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_sec_home.svg" alt=""></h2>
        <p class="sec_home__title-sub section__title-sub">Home</p>
      </div>
      <div class="sec_home__container sec_home__upper">
        <ul class="sec_home__upper-list delayScroll">
          <li class="sec_home__upper-item">
            <div class="sec_home__upper-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_home-upper_01.svg" alt=""></div>
            <p class="sec_home__upper-item-text">家族とのような暖かい人間関係で<br>「多くの対話」安定した「ココロ」が</p>
          </li>
          <li class="sec_home__upper-item">
            <div class="sec_home__upper-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_home-upper_02.svg" alt=""></div>
            <p class="sec_home__upper-item-text">生活環境を再現し、生活における<br>「成功体験」を繰り返す環境</p>
          </li>
        </ul>
        <p class="sec_home__upper-catch fadeInOpacity"><span>こども達にとってのHOMEで、</span><span>「英語」と「ココロ」を伸ばす</span></p>
      </div>
      <div class="sec_home__container sec_home__lower">
        <p class="sec_home__lower-title fadeIn"><span>【伸ばす2つの力】</span></p>
        <ul class="sec_home__lower-list delayScroll">
          <li class="sec_home__lower-item">
            <p class="sec_home__lower-item-num">01</p>
            <div class="sec_home__lower-item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/about/home_01.png" alt="">
            </div>
            <p class="sec_home__lower-item-title">Communication Skills</p>
            <p class="sec_home__lower-item-text">コミュニケーション能力</p>
          </li>
          <li class="sec_home__lower-item">
            <p class="sec_home__lower-item-num">02</p>
            <div class="sec_home__lower-item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/about/home_02.png" alt="">
            </div>
            <p class="sec_home__lower-item-title">Heart</p>
            <p class="sec_home__lower-item-text">「ココロ」の成長</p>
          </li>
        </ul>
      </div>
      <p class="sec_home__btn btn btn__white fadeIn"><a href="#">詳しく見る</a></p>
    </div>
  </section>

  <!-- sec_features -->
  <section class="sec_features">
    <div class="sec_features__inner section__inner section__inner--center">
      <div class="sec_features__title section__title section__title--center fadeIn">
        <h2 class="sec_features__title-main section__title-main"><span>WGHの特徴</span><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_features.svg" alt=""></h2>
        <p class="sec_features__title-sub section__title-sub">Features</p>
      </div>
      <ul class="sec_features__list delayScroll">
        <li class="sec_features__item">
          <div class="sec_features__item-box">
            <p class="sec_features__item-num">Feature01</p>
            <div class="sec_features__item-img sec_features__item-img--01"><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_features_01.svg" alt=""></div>
            <p class="sec_features__item-title">少人数制でアットホーム</p>
          </div>
          <p class="sec_features__item-text">WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。</p>
          <p class="sec_features__item-btn sec_features__item-btn--01 btn btn__white"><a href="#">詳しく見る</a></p>
        </li>
        <li class="sec_features__item">
          <div class="sec_features__item-box">
            <p class="sec_features__item-num">Feature02</p>
            <div class="sec_features__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_features_02.svg" alt=""></div>
            <p class="sec_features__item-title">国際性豊かな先生&全て英語の環境</p>
          </div>
          <p class="sec_features__item-text">WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。</p>
          <p class="sec_features__item-btn btn btn__white"><a href="/staff/">講師紹介を見る</a></p>
        </li>
        <li class="sec_features__item">
          <div class="sec_features__item-box">
            <p class="sec_features__item-num">Feature03</p>
            <div class="sec_features__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_features_03.svg" alt=""></div>
            <p class="sec_features__item-title">独自メソッドとカリキュラム</p>
          </div>
          <p class="sec_features__item-text">WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。</p>
          <p class="sec_features__item-btn btn btn__white"><a href="#">詳しく見る</a></p>
        </li>
      </ul>
    </div>
  </section>

  <!-- sec_relief -->
  <section class="sec_relief">
    <div class="sec_relief__inner section__inner section__inner--center">
      <div class="sec_relief__title section__title section__title--center fadeIn">
        <h2 class="sec_relief__title-main section__title-main"><span>3つの安心</span><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_relief.svg" alt=""></h2>
        <p class="sec_relief__title-sub section__title-sub">Three Relief</p>
      </div>
      <ul class="sec_relief__list delayScroll">
        <li class="sec_relief__item">
          <p class="sec_relief__item-num">01</p>
          <div class="sec_relief__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/relief_01.png" alt=""></div>
          <div class="sec_relief__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_relief_01.svg" alt=""></div>
          <p class="sec_relief__item-title">安心安全を優先に</p>
          <p class="sec_relief__item-text">送り迎え、アルコール消毒、<br>少人数制だから目が届く</p>
        </li>
        <li class="sec_relief__item">
          <p class="sec_relief__item-num">02</p>
          <div class="sec_relief__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/relief_02.png" alt=""></div>
          <div class="sec_relief__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_relief_02.svg" alt=""></div>
          <p class="sec_relief__item-title">フレクシブル運営</p>
          <p class="sec_relief__item-text">24時間オンライン対応、<br>振替などもオンラインで簡単に</p>
        </li>
        <li class="sec_relief__item">
          <p class="sec_relief__item-num">03</p>
          <div class="sec_relief__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/relief_03.png" alt=""></div>
          <div class="sec_relief__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_relief_03.svg" alt=""></div>
          <p class="sec_relief__item-title">透明性</p>
          <p class="sec_relief__item-text">クラスの様子をライブで配信</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- sec_achievement -->
  <section class="sec_achievement">
    <div class="sec_achievement__inner section__inner section__inner--center">
      <div class="sec_achievement__title section__title section__title--center fadeIn">
        <h2 class="sec_achievement__title-main section__title-main"><span>実績を動画で紹介</span><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_achievement.svg" alt=""></h2>
        <p class="sec_achievement__title-sub section__title-sub">Achievement</p>
      </div>
      <ul class="sec_achievement__list delayScroll">
        <li class="sec_achievement__item">
          <div class="sec_achievement__item-video">
            <video src="<?php echo get_template_directory_uri(); ?>/video/sample.mp4" class="video1" playsinline muted></video>
            <img src="<?php echo get_template_directory_uri(); ?>/img/about/play.svg" alt="" class="play-btn1">
          </div>
          <p class="sec_achievement__item-title">Nanato英語と出会う。(2013.11：5歳7ヶ月)</p>
          <p class="sec_achievement__item-text">2013年10月、ABCも知らない状態からWings Global Homeに通い始めた、当時５ 歳のNanato君。アルファベットからフォニックス、さらにスペリングと文字習得 を目指して頑張っていました。早期の文字習得はバイリンガルに育つ上で大きな 近道となります。</p>
        </li>
        <li class="sec_achievement__item">
          <div class="sec_achievement__item-video">
            <video src="<?php echo get_template_directory_uri(); ?>/video/sample.mp4" class="video2" playsinline muted></video>
            <img src="<?php echo get_template_directory_uri(); ?>/img/about/play.svg" alt="" class="play-btn2">
          </div>
          <p class="sec_achievement__item-title">Nanato本を読み始める。(2014.02：5歳10ヶ月)</p>
          <p class="sec_achievement__item-text">フォニックス、そしてスペリングを身につけたら、本が読める様になりました。本の中には新しい言葉や初めて知ることがいっぱい。読書は言葉の力を一気に伸ばしてくれます。まずは数語の単語で構成される文章がメインの本から、次第に複雑な表現を含む本へとステップアップしていきます。</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- sec_voice -->
  <section class="sec_voice">
    <div class="sec_voice__inner section__inner section__inner--center">
      <div class="sec_voice__title section__title section__title--center fadeIn">
        <h2 class="sec_voice__title-main section__title-main"><span>父兄の声</span><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_voice.svg" alt=""></h2>
        <p class="sec_voice__title-sub section__title-sub">Voice</p>
      </div>
      <ul class="sec_voice__list delayScroll">
        <li class="sec_voice__item">
          <div class="sec_voice__item-left">
            <p class="sec_voice__item-num">01</p>
            <div class="sec_voice__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/voice_01.png" alt=""></div>
          </div>
          <div class="sec_voice__item-right">
            <p class="sec_voice__item-title">(年長)Reiちゃん</p>
            <p class="sec_voice__item-text">WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。</p>
            <p class="sec_voice__item-btn"><a href="#">続きを見る</a></p>
          </div>
        </li>
        <li class="sec_voice__item">
          <div class="sec_voice__item-left">
            <p class="sec_voice__item-num">02</p>
            <div class="sec_voice__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/voice_02.png" alt=""></div>
          </div>
          <div class="sec_voice__item-right">
            <p class="sec_voice__item-title">(年長)Reiちゃん</p>
            <p class="sec_voice__item-text">WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。</p>
            <p class="sec_voice__item-btn"><a href="#">続きを見る</a></p>
          </div>
        </li>
        <li class="sec_voice__item">
          <div class="sec_voice__item-left">
            <p class="sec_voice__item-num">03</p>
            <div class="sec_voice__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/voice_03.png" alt=""></div>
          </div>
          <div class="sec_voice__item-right">
            <p class="sec_voice__item-title">(年長)Reiちゃん</p>
            <p class="sec_voice__item-text">WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。</p>
            <p class="sec_voice__item-btn"><a href="#">続きを見る</a></p>
          </div>
        </li>
        <li class="sec_voice__item">
          <div class="sec_voice__item-left">
            <p class="sec_voice__item-num">04</p>
            <div class="sec_voice__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/voice_04.png" alt=""></div>
          </div>
          <div class="sec_voice__item-right">
            <p class="sec_voice__item-title">(年長)Reiちゃん</p>
            <p class="sec_voice__item-text">WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。WGHの特徴のテキストが入ります。</p>
            <p class="sec_voice__item-btn"><a href="#">続きを見る</a></p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- sec_faq -->
  <section class="sec_faq">
    <div class="sec_faq__inner section__inner section__inner--center">
      <div class="sec_faq__title section__title section__title--center fadeIn">
        <h2 class="sec_faq__title-main section__title-main"><span>よくある質問</span><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_faq.svg" alt=""></h2>
        <p class="sec_faq__title-sub section__title-sub">FAQ</p>
      </div>
      <ul class="sec_faq__list delayScroll">
        <li class="sec_faq__item">
          <div class="sec_faq__item-question">
            <div class="sec_faq__item-inner"><span class="q">Q</span><span>なぜ2-3歳からはじめるべきなのか。</span></div>
          </div>
          <div class="sec_faq__item-answer">
            <div class="sec_faq__item-inner"><span class="a">A</span><span>ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質</span></div>
          </div>
        </li>
        <li class="sec_faq__item">
          <div class="sec_faq__item-question">
            <div class="sec_faq__item-inner"><span class="q">Q</span><span>日本語が不自由にならないか？</span></div>
          </div>
          <div class="sec_faq__item-answer">
            <div class="sec_faq__item-inner"><span class="a">A</span><span>ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。</span></div>
          </div>
        </li>
        <li class="sec_faq__item">
          <div class="sec_faq__item-question">
            <div class="sec_faq__item-inner"><span class="q">Q</span><span>ここにはよくある質問が入ります。ここにはよくある質問が入ります。</span></div>
          </div>
          <div class="sec_faq__item-answer">
            <div class="sec_faq__item-inner"><span class="a">A</span><span>ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。</span></div>
          </div>
        </li>
        <li class="sec_faq__item">
          <div class="sec_faq__item-question">
            <div class="sec_faq__item-inner"><span class="q">Q</span><span>ここにはよくある質問が入ります。ここにはよくある質問が入ります。</span></div>
          </div>
          <div class="sec_faq__item-answer">
            <div class="sec_faq__item-inner"><span class="a">A</span><span>ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。ここにはよくある質問が入ります。</span></div>
          </div>
        </li>
      </ul>
      <p class="sec_faq__btn btn btn__white fadeIn"><a href="/faq/">よくある質問をもっと見る</a></p>
    </div>
  </section>

  <!-- sec_flow -->
  <section class="sec_flow">
    <div class="sec_flow__inner section__inner section__inner--center">
      <div class="sec_flow__title section__title section__title--center">
        <h2 class="sec_flow__title-main section__title-main"><span>入園までの流れ</span><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_flow.svg" alt=""></h2>
        <p class="sec_flow__title-sub section__title-sub">Flow</p>
      </div>
      <ul class="sec_flow__list">
        <li class="sec_flow__item fadeUpDown">
          <div class="sec_flow__item-circle">
            <p class="sec_flow__item-num">Step01</p>
            <div class="sec_flow__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_flow_01.svg" alt=""></div>
          </div>
          <div class="sec_flow__item-contents">
            <p class="sec_flow__item-title">入園説明会・無料見学のお申し込み</p>
            <p class="sec_flow__item-text">ここには入園までの流れのテキストが入ります。ここには入園までの流れのテキストが入ります。ここには入園までの流れのテキストが入ります。ここには入園までの流れのテキストが入</p>
          </div>
          <div class="sec_flow__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/flow_01.png" alt=""></div>
        </li>
        <li class="sec_flow__item fadeUpDown">
          <div class="sec_flow__item-circle">
            <p class="sec_flow__item-num">Step02</p>
            <div class="sec_flow__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_flow_02.svg" alt=""></div>
          </div>
          <div class="sec_flow__item-contents">
            <p class="sec_flow__item-title">入園願書提出・面談</p>
            <p class="sec_flow__item-text">ここには入園までの流れのテキストが入ります。ここには入園までの流れのテキストが入ります。ここには入園までの流れのテキストが入ります。ここには入園までの流れのテキストが入</p>
          </div>
          <div class="sec_flow__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/flow_02.png" alt=""></div>
        </li>
        <li class="sec_flow__item fadeUpDown">
          <div class="sec_flow__item-circle">
            <p class="sec_flow__item-num">Step03</p>
            <div class="sec_flow__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_flow_03.svg" alt=""></div>
          </div>
          <div class="sec_flow__item-contents">
            <p class="sec_flow__item-title">入園手続き・入園決定</p>
            <p class="sec_flow__item-text">ここには入園までの流れのテキストが入ります。ここには入園までの流れのテキストが入ります。ここには入園までの流れのテキストが入ります。ここには入園までの流れのテキストが入</p>
          </div>
          <div class="sec_flow__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/flow_03.png" alt=""></div>
        </li>
        <li class="sec_flow__item fadeUpDown">
          <div class="sec_flow__item-circle">
            <p class="sec_flow__item-num">Step04</p>
            <div class="sec_flow__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/about/icon_flow_04.svg" alt=""></div>
          </div>
          <div class="sec_flow__item-contents">
            <p class="sec_flow__item-title">入園式</p>
            <p class="sec_flow__item-text">ここには入園までの流れのテキストが入ります。ここには入園までの流れのテキストが入ります。ここには入園までの流れのテキストが入ります。ここには入園までの流れのテキストが入</p>
          </div>
          <div class="sec_flow__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about/flow_04.png" alt=""></div>
        </li>
      </ul>
      <p class="sec_flow__btn btn btn__white fadeIn"><a href="/application/">見学の申し込みをする</a></p>
    </div>
  </section>
  
</main>

<?php get_footer(); ?>