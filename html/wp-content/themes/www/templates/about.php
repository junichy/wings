<?php get_header();
/*
Template Name: 私たちについて
*/
?>
<main class="page">

  <!-- headline -->
  <?php get_template_part('parts/headline') ?>

  <!-- sec_wgh -->
  <section class="sec_">
    <div class="sec_wgh__inner section__inner">
      <div class="sec_wgh__img fadeLeftRight">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/wgh.svg" alt="">
      </div>
      <div class="sec_wgh__contents fadeRightLeft">
        <div class="sec_wgh__title section__title">
          <h2 class="sec_wgh__title-main section__title-main"><span>Wings Global Homeとは？</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_wgh.svg" alt=""></h2>
          <p class="sec_wgh__title-sub section__title-sub">About Wings Global Home?</p>
        </div>
        <p class="sec_wgh__text">
        私たちの特徴の一つは、年齢別のクラス分けをせず、異なる年齢の子供たちが兄弟のように学び、遊び、成長する特別な環境を提供していることです。外国人の講師がリーダーとなり、多彩なアクティビティを通じて、子供たちが楽しく学び、成長できる場を作り出しています。公園へのお出かけや遠足、発表会など、楽しく充実した行事が盛りだくさんです。<br>Wingsでは、教育と保育の両方を提供し、国際的な視野と家庭的な安心感を兼ね備えた環境を整えています。少人数制でアットホームな雰囲気の中、国際色豊かな講師陣が独自のメソッドとカリキュラムで子供たちの成長をサポートします。<br>さらに、私たちはフィジカルなアクティビティーを重視し、子供たちが健やかに成長できるよう多くの運動や屋外活動を取り入れています。子供たちは、遊びを通じて英語に自然に触れ、使いこなす力を身につけていきます。<br>私たちのロゴには、世界中の子供たちの「笑顔」と、Wingsによって手のひらに乗るような、小さくなった世界、という意味が込められています。
        </p>
      </div>
    </div>
  </section>

  <!-- sec_home -->
  <section class="sec_home">
    <div class="sec_home__inner section__inner">
      <div class="sec_home__title section__title section__title--center fadeIn">
        <h2 class="sec_home__title-main section__title-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/home.svg" alt="Home" class="sec_home__title-img--home"><span>とはどんな場所か？</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_sec_home.svg" alt=""></h2>
        <p class="sec_home__title-sub section__title-sub">Home</p>
      </div>
      <div class="sec_home__container sec_home__upper">
        <ul class="sec_home__upper-list delayScroll">
          <li class="sec_home__upper-item">
            <div class="sec_home__upper-item-img anime-upDown"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_home-upper_01.svg" alt=""></div>
            <p class="sec_home__upper-item-text">
              先生との強い絆と家族とのような温かい人間関係<br class="pc_tb">
              の中で、こども達は心穏やかに過ごせます。<br class="pc_tb">
              そこには「多くの対話」が生まれます。
            </p>
          </li>
          <li class="sec_home__upper-item">
            <div class="sec_home__upper-item-img anime-upDown"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_home-upper_02.svg" alt=""></div>
            <p class="sec_home__upper-item-text">
              生活環境を再現し、日常生活を通した<br class="pc_tb">
              「成功体験」を繰り返すことで<br class="pc_tb">
              「心」の成長が育まれます。
            </p>
          </li>
        </ul>
        <p class="sec_home__upper-catch fadeInOpacity"><span>こども達にとっての「HOME」で、</span><br><span>英語コミュニケーションスキルと</span><span>「心」を伸ばします。</span></p>
      </div>
      <div class="sec_home__container sec_home__lower">
        <p class="sec_home__lower-title fadeIn"><span>【伸ばす2つの力】</span></p>
        <ul class="sec_home__lower-list delayScroll">
          <li class="sec_home__lower-item">
            <p class="sec_home__lower-item-num">01</p>
            <div class="sec_home__lower-item-img">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/home_01.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/home_01.png" alt="">
              </picture>
            </div>
            <p class="sec_home__lower-item-title">Global Skills</p>
            <p class="sec_home__lower-item-text">英語コミュニケーション力</p>
          </li>
          <li class="sec_home__lower-item">
            <p class="sec_home__lower-item-num">02</p>
            <div class="sec_home__lower-item-img">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/home_02.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/home_02.png" alt="">
              </picture>
            </div>
            <p class="sec_home__lower-item-title">Life Skills</p>
            <p class="sec_home__lower-item-text">心の成長</p>
          </li>
        </ul>
      </div>
      <p class="sec_home__btn btn btn__white fadeIn"><a href="/skills/">詳しく見る</a></p>
    </div>
  </section>

  <!-- sec_features -->
  <section class="sec_features">
    <div class="sec_features__inner section__inner section__inner--center">
      <div class="sec_features__title section__title section__title--center fadeIn">
        <h2 class="sec_features__title-main section__title-main"><span>Wings Global Homeの特徴</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_features.svg" alt=""></h2>
        <p class="sec_features__title-sub section__title-sub">Features</p>
      </div>
      <ul class="sec_features__list delayScroll">
        <li class="sec_features__item">
          <div class="sec_features__item-box">
            <p class="sec_features__item-num">Feature01</p>
            <div class="sec_features__item-img sec_features__item-img--01"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_features_01.svg" alt=""></div>
            <p class="sec_features__item-title">少人数制でアットホーム</p>
          </div>
          <p class="sec_features__item-text">先生：生徒比率が１：５という少人数制で、マンツーマンリーディングプログラム等の独自カリキュラムを提供しています。少人数制だからこそ、先生と生徒の関係が家族のような距離感。こどもたちがリラックスして楽しめる環境になっています。</p>
          <p class="sec_features__item-btn sec_features__item-btn--01 btn btn__white"><a href="/method/">詳しく見る</a></p>
        </li>
        <li class="sec_features__item">
          <div class="sec_features__item-box">
            <p class="sec_features__item-num">Feature02</p>
            <div class="sec_features__item-img sec_features__item-img--02"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_features_02.svg" alt=""></div>
            <p class="sec_features__item-title">国際性豊かな先生&全て英語の環境</p>
          </div>
          <p class="sec_features__item-text">15ヶ国以上の国籍からなる講師陣は、こどもの心を掴む人柄に加えて、世界でもトップクラスの学歴や元弁護士等の多彩な職歴等、厳しい基準の選考を突破した優秀な先生達です。また言語バックグラウンドも様々で、ネイティブの英語力を持ちながら、自ら第二言語の習得に向け創意工夫をしてきた経験者でもあります。</p>
          <p class="sec_features__item-btn btn btn__white"><a href="/teacher/">講師紹介を見る</a></p>
        </li>
        <li class="sec_features__item">
          <div class="sec_features__item-box">
            <p class="sec_features__item-num">Feature03</p>
            <div class="sec_features__item-img sec_features__item-img--03"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_features_03.svg" alt=""></div>
            <p class="sec_features__item-title">独自メソッドとカリキュラム</p>
          </div>
          <p class="sec_features__item-text">Wings Global Homeのこども達が、日本語を保持しながら圧倒的な英語力を持つ最大の理由は、独自のWingsメソッドにあります。自社開発したITツールによって個別に最適化されたカリキュラムが、こども達の最速の英語習得を実現します。</p>
          <p class="sec_features__item-btn sec_features__item-btn--03 btn btn__white"><a href="/method/">詳しく見る</a></p>
        </li>
      </ul>
    </div>
  </section>

  <!-- sec_relief -->
  <section class="sec_relief">
    <div class="sec_relief__inner section__inner section__inner--center">
      <div class="sec_relief__title section__title section__title--center fadeIn">
        <h2 class="sec_relief__title-main section__title-main"><span>3つの安心</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_relief.svg" alt=""></h2>
        <p class="sec_relief__title-sub section__title-sub">Three Relief</p>
      </div>
      <ul class="sec_relief__list delayScroll">
        <li class="sec_relief__item">
          <p class="sec_relief__item-num">01</p>
          <div class="sec_relief__item-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/relief_01.png" alt="">
          </div>
          <div class="sec_relief__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_relief_01.svg" alt=""></div><p class="sec_relief__item-title">安心安全を優先に</p>
          <p class="sec_relief__item-text">送り迎え、アルコール消毒、<br>少人数制だから目が届く</p>
        </li>
        <li class="sec_relief__item">
          <p class="sec_relief__item-num">02</p>
          <div class="sec_relief__item-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/relief_02.png" alt="">
          </div>
          <div class="sec_relief__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_relief_02.svg" alt=""></div>
          <p class="sec_relief__item-title">フレキシブル運営</p>
          <p class="sec_relief__item-text">24時間オンライン対応、<br>振替などもオンラインで簡単に</p>
        </li>
        <li class="sec_relief__item">
          <p class="sec_relief__item-num">03</p>
          <div class="sec_relief__item-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/relief_03.png" alt="">
          </div>
          <div class="sec_relief__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_relief_03.svg" alt=""></div>
          <p class="sec_relief__item-title">透明性</p>
          <p class="sec_relief__item-text">日々のクラスの様子と成長の軌跡を<br>毎日各ご家庭に共有</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- sec_achievement -->
  <section class="sec_achievement">
    <div class="sec_achievement__inner section__inner section__inner--center">
      <div class="sec_achievement__title section__title section__title--center fadeIn">
        <h2 class="sec_achievement__title-main section__title-main"><span>実績を動画で紹介</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_achievement.svg" alt=""></h2>
        <p class="sec_achievement__title-sub section__title-sub">Achievement</p>
      </div>
      <ul class="sec_achievement__list delayScroll">
        <li class="sec_achievement__item">
          <div class="sec_achievement__item-video videoWrapper1">
            <!-- <video src="<?php echo get_template_directory_uri(); ?>/assets/video/sample.mp4" class="video1" playsinline muted></video> -->
            <iframe id="player1" class="player1" width="560" height="315" src="https://www.youtube.com/embed/1_akvre-kt0?enablejsapi=1?" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/play.svg" alt="" class="play-btn play-btn1" id="play1"> -->
          </div>
          <p class="sec_achievement__item-title">Nanato英語と出会う。(2013.11：5歳7ヶ月)</p>
          <p class="sec_achievement__item-text">2013年10月、ABCも知らない状態からWings Global Homeに通い始めた、当時５歳のNanato君。アルファベットからフォニックス、さらにスペリングと文字習得を目指して頑張っていました。早期の文字習得はバイリンガルに育つ上で大きな 近道となります。</p>
        </li>
        <li class="sec_achievement__item">
          <div class="sec_achievement__item-video videoWrapper2">
            <!-- <video src="<?php echo get_template_directory_uri(); ?>/assets/video/sample.mp4" class="video2" playsinline muted></video> -->
            <iframe id="player2" class="player2" width="560" height="315" src="https://www.youtube.com/embed/BljmLR2H2l8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/play.svg" alt="" class="play-btn play-btn2" id="play2"> -->
          </div>
          <p class="sec_achievement__item-title">４年生になったNanatoの英語プレゼン！(2018.12：10歳８ヶ月)</p>
          <p class="sec_achievement__item-text">公立小学校に入学後もWings Global Homeに通い続けたNanato。４年生(10歳)になった彼が、大好きな日本のお城について8分にもわたる英語プレゼンをしました。 5年の学習でこどもはバイリンガルになります。</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- sec_voice -->
  <section class="sec_voice">
    <div class="sec_voice__inner section__inner section__inner--center">
      <div class="sec_voice__title section__title section__title--center fadeIn">
        <h2 class="sec_voice__title-main section__title-main"><span>父兄の声</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_voice.svg" alt=""></h2>
        <p class="sec_voice__title-sub section__title-sub">Voice</p>
      </div>
      <ul class="sec_voice__list delayScroll">

        <li class="sec_voice__item">
          <a href="/blog/voice_01/">
            <div class="sec_voice__item-left">
              <p class="sec_voice__item-num">01</p>
              <div class="sec_voice__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/voice_01.png" alt="">
              </div>
            </div>
            <div class="sec_voice__item-right">
              <p class="sec_voice__item-title">
                Wingsの生徒第１号だった<br class="pc_only">Nanatoが卒業します！
              </p>
              <p class="sec_voice__item-text">
                他の子が集まっているときに、なかなか輪に入っていけない子でしたね。積極的なタイプではなかったです。年中のときに池尻に引っ越して・・・
              </p>
              <p class="sec_voice__item-btn">続きを見る</p>
            </div>
          </a>
        </li>
            
        <li class="sec_voice__item">
          <a href="/blog/voice_02/">
            <div class="sec_voice__item-left">
              <p class="sec_voice__item-num">02</p>
              <div class="sec_voice__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/voice_02.png" alt="">
              </div>
            </div>
            <div class="sec_voice__item-right">
              <p class="sec_voice__item-title">
                ママも羨む小学2年生英語力
              </p>
              <p class="sec_voice__item-text">
                いまだに覚えているんですけど、ここに入った２歳の時は「マーマー！！」って泣いてたり（笑）外まで聞こえましたね。自信が持てるよう・・・
              </p>
              <p class="sec_voice__item-btn">続きを見る</p>
            </div>
          </a>
        </li>
            
        <li class="sec_voice__item">
          <a href="/blog/voice_03/">
            <div class="sec_voice__item-left">
              <p class="sec_voice__item-num">03</p>
              <div class="sec_voice__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/voice_03.png" alt="">
              </div>
            </div>
            <div class="sec_voice__item-right">
              <p class="sec_voice__item-title">
                6歳児が”英語が分かる”から<br class="pc_only">“英語で学ぶ”
              </p>
              <p class="sec_voice__item-text">
                まだ日本語も片言みたいなときに入会したんですよね。大変お世話になっています。最近はようやく寂しくなってきました。今までは、早く・・・
              </p>
              <p class="sec_voice__item-btn">続きを見る</p>
            </div>
          </a>
        </li>
            
        <li class="sec_voice__item">
          <a href="/blog/voice_04/">
            <div class="sec_voice__item-left">
              <p class="sec_voice__item-num">04</p>
              <div class="sec_voice__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/voice_04.png" alt="">
              </div>
            </div>
            <div class="sec_voice__item-right">
              <p class="sec_voice__item-title">
                小学3年生の帰国子女が日本に<br class="pc_only">いながら英語力を伸ばす
              </p>
              <p class="sec_voice__item-text">
                性格上、向こうで馴染むのに結構苦労したので。英語を折角ちょっとできるようになったので、それを忘れないで将来役立つようにしてあげ・・・
              </p>
              <p class="sec_voice__item-btn">続きを見る</p>
            </div>
          </a>
        </li>
            
      </ul>
    </div>
  </section>

  <!-- sec_faq -->
  <?php echo get_template_part('parts/sec_faq'); ?>

  <!-- sec_flow -->
  <section class="sec_flow">
    <div class="sec_flow__inner section__inner section__inner--center">
      <div class="sec_flow__title section__title section__title--center fadeIn">
        <h2 class="sec_flow__title-main section__title-main"><span>入園までの流れ</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_flow.svg" alt=""></h2>
        <p class="sec_flow__title-sub section__title-sub">Flow</p>
      </div>
      <ul class="sec_flow__list">
        <li class="sec_flow__item fadeUpDown">
          <div class="sec_flow__item-circle">
            <p class="sec_flow__item-num">Step01</p>
            <div class="sec_flow__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_flow_01.svg" alt=""></div>
          </div>
          <div class="sec_flow__item-contents">
            <p class="sec_flow__item-title">スクール見学を予約</p>
            <p class="sec_flow__item-text">見学お申し込みフォームよりご見学をお申し込みください。</p>
          </div>
          <div class="sec_flow__item-img">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/flow_01.webp" type="image/webp"/>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/flow_01.png" alt="">
            </picture>
          </div>
        </li>
        <li class="sec_flow__item fadeUpDown">
          <div class="sec_flow__item-circle">
            <p class="sec_flow__item-num">Step02</p>
            <div class="sec_flow__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_flow_02.svg" alt=""></div>
          </div>
          <div class="sec_flow__item-contents">
            <p class="sec_flow__item-title">スクールのご見学</p>
            <p class="sec_flow__item-text">ご見学いただきながら、施設や教育内容のご説明をさせていただきます。</p>
          </div>
          <div class="sec_flow__item-img">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/flow_02.webp" type="image/webp"/>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/flow_02.png" alt="">
            </picture>
          </div>
        </li>
        <li class="sec_flow__item fadeUpDown">
          <div class="sec_flow__item-circle">
            <p class="sec_flow__item-num">Step03</p>
            <div class="sec_flow__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_flow_03.svg" alt=""></div>
          </div>
          <div class="sec_flow__item-contents">
            <p class="sec_flow__item-title">トライアルを予約</p>
            <p class="sec_flow__item-text">ご見学後、トライアルのご案内をさせていただきますので、ご都合の良い日程をご連絡ください。</p>
          </div>
          <div class="sec_flow__item-img">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/flow_03.webp" type="image/webp"/>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/flow_03.png" alt="">
            </picture>
          </div>
        </li>
        <li class="sec_flow__item fadeUpDown">
          <div class="sec_flow__item-circle">
            <p class="sec_flow__item-num">Step04</p>
            <div class="sec_flow__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_flow_04.svg" alt=""></div>
          </div>
          <div class="sec_flow__item-contents">
            <p class="sec_flow__item-title">トライアルに参加</p>
            <p class="sec_flow__item-text">実際にお子様にクラスにご参加いただき、当日の様子をご報告させていただきます。*</p>
          </div>
          <div class="sec_flow__item-img">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/flow_04.webp" type="image/webp"/>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/flow_04.png" alt="">
            </picture>
          </div>
        </li>
        <li class="sec_flow__item fadeUpDown">
          <div class="sec_flow__item-circle">
            <p class="sec_flow__item-num">Step05</p>
            <div class="sec_flow__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_flow_05.svg" alt=""></div>
          </div>
          <div class="sec_flow__item-contents">
            <p class="sec_flow__item-title">入園(入会)フォーム入力</p>
            <p class="sec_flow__item-text">入園(入会)をご希望の方は、メールにて入園(入会)フォームをご案内いたします。</p>
          </div>
          <div class="sec_flow__item-img">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/flow_05.webp" type="image/webp"/>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/flow_05.png" alt="">
            </picture>
          </div>
        </li>
        <li class="sec_flow__item fadeUpDown">
          <div class="sec_flow__item-circle">
            <p class="sec_flow__item-num">Step06</p>
            <div class="sec_flow__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_flow_06.svg" alt=""></div>
          </div>
          <div class="sec_flow__item-contents">
            <p class="sec_flow__item-title">入園(入会)お手続き</p>
            <p class="sec_flow__item-text">再度ご来校いただき、ご入力いただいた内容に従って手続きをいたします。</p>
          </div>
          <div class="sec_flow__item-img">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/flow_06.webp" type="image/webp"/>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/flow_06.png" alt="">
            </picture>
          </div>
        </li>
        <li class="sec_flow__item fadeUpDown">
          <div class="sec_flow__item-circle">
            <p class="sec_flow__item-num">Step07</p>
            <div class="sec_flow__item-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_flow_07.svg" alt=""></div>
          </div>
          <div class="sec_flow__item-contents">
            <p class="sec_flow__item-title">入園(入会)</p>
            <p class="sec_flow__item-text">Welcome to Wings Global Home! お手続きの後、最短で５営業日後から開始いただけます。</p>
          </div>
          <div class="sec_flow__item-img">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/flow_07.webp" type="image/webp"/>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/flow_07.png" alt="">
            </picture>
          </div>
        </li>
      </ul>
      <p class="sec_flow__note fadeIn">* トライアルの際に行動観察を通じた選考を実施しております。お子様や保護者様の英語力は問いません。<br class="pc_tb">ただし小学３年生以降のご入学に際しては、上記に加えて英語のレベルチェックを行います。</p>
      <p class="sec_flow__btn btn btn__white fadeIn"><a href="/application/">見学の申し込みをする</a></p>
    </div>
  </section>
  
</main>

<?php get_footer(); ?>