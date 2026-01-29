<?php get_header();
/*
Template Name: 独自のメソッドとカリキュラム
*/
?>
<main class="page method">

  <!-- headline -->
  <?php get_template_part('parts/headline') ?>

  <!-- sec_environment -->
  <section class="sec_environment">
    <div class="sec_environment__inner section__inner section__inner--center">
      <div class="sec_environment__title section__title section__title--center fadeIn">
        <h2 class="sec_environment__title-main section__title-main"><span>英語習得の考え方</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/method/icon_sec_environment.svg" alt=""></h2>
        <p class="sec_environment__title-sub section__title-sub">Environment</p>
      </div>
      <div class="sec_environment__container">
        <div class="sec_environment__img fadeLeftRight">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/method/sec_environment.png" alt="" class="pc_tb">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/method/sec_environment-sp.png" alt="" class="sp_only">
        </div>
        <p class="sec_environment__text fadeRightLeft">英語をはじめとする言語は、様々な表現を覚えて→使うサイクルを繰り返す事で習得していきます。 その中でも日本のこども向け英語教育では、母国語習得と同様沢山英語を聞かせること(Listening)から始め、徐々に英語の表現を覚えて発話(Speaking)につながっていくことを期待するのが一般的ではないでしょうか。 一方Listeningに加え、同時に読解力(Reading)も早い段階から育成することによって、日常的に触れられる英語表現を劇的に増やし、英語習得の質とスピードを大幅に高めることが可能となります。 ここでいう読解力とは、英語の文字を読み取り、文章と文脈を理解する力、つまり「英語の本をスラスラと読み、理解出来るようになる」こと。 つまり英語の文章から音と意味をスムーズに把握出来るようになることで、身につけられる英語表現の幅が着実に増えていき、最終的に４技能(Reading, Listening, Speaking, Writing)全ての成長の土台となります。</p>
      </div>
    </div>
  </section>

  <!-- sec_nurture -->
  <section class="sec_nurture">
    <div class="sec_nurture__upper">
      <div class="sec_nurture__upper-inner section__inner section__inner--center">
        <div class="sec_nurture__title section__title section__title--center fadeIn">
          <h2 class="sec_nurture__title-main section__title-main"><span>Wings Methodによる</span><br class="sp_only"><span class="sec_nurture__title-main-left">読解力の育成<img src="<?php echo get_template_directory_uri(); ?>/assets/img/method/icon_sec_nurture.svg" alt=""></span></h2>
          <p class="sec_nurture__title-sub section__title-sub">Nurture</p>
        </div>
        <p class="sec_nurture__lead fadeIn">
          Wings Global Homeでは、英語環境下での様々な<br class="sp_only">コミュニケーションの機会に加え、<br>
          ２歳から１２歳まで毎日かかさず読解力の育成に取り組みます。<br>
          その中心を担うのが、独自のメソッドで毎日先生と<br class="sp_only">マンツーマンで行われる<br class="pc_tb">
          リーディングセッションです。<br class="sp_only">このリーディングセッションは<br class="pc_tb">
          自社開発したITツール<br class="sp_only">「Wings Management System （WMS）」によって<br class="sp_only">データ管理され、<br class="pc_tb">
          ABCを覚えて発音できる様になる<br class="sp_only">「文字習得」から、英検準一級相当の複雑な文章を読み解く<br>
          「読解力育成」までのプロセスを132のステップに細分化し、<br>
          こども達の日々の成長に合わせて毎日欠かさず実施されます。
        </p>
      </div>
    </div>
<!--     <div class="sec_nurture__lower">
      <div class="sec_nurture__lower-inner section__inner section__inner-s">
        <ul class="sec_nurture__list delayScroll">
          <li class="sec_nurture__item">
            <p class="sec_nurture__item-title">アルファベット<br class="pc_tb">10 steps</p>
            <div class="sec_nurture__item-video">
              <iframe id="player1" class="player1" width="560" height="315" src="https://www.youtube.com/embed/1_akvre-kt0?enablejsapi=1?" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <p class="sec_nurture__item-text">それぞれの文字の名前を覚えていきます</p>
          </li>
          <li class="sec_nurture__item">
            <p class="sec_nurture__item-title">フォニックス<br class="pc_tb">10 steps</p>
            <div class="sec_nurture__item-video">
              <iframe id="player1" class="player1" width="560" height="315" src="https://www.youtube.com/embed/1_akvre-kt0?enablejsapi=1?" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <p class="sec_nurture__item-text">それぞれの文字の音を覚えていきます</p>
          </li>
          <li class="sec_nurture__item">
            <p class="sec_nurture__item-title">スペリング<br class="pc_tb">12 steps</p>
            <div class="sec_nurture__item-video">
              <iframe id="player1" class="player1" width="560" height="315" src="https://www.youtube.com/embed/1_akvre-kt0?enablejsapi=1?" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <p class="sec_nurture__item-text"><span>それぞれの文字の音の組み合わせにより</span><span>構成される単語を読めるようにしていきます</span></p>
          </li>
          <li class="sec_nurture__item">
            <p class="sec_nurture__item-title">リーディング<br class="pc_tb">98 steps</p>
            <div class="sec_nurture__item-video">
              <iframe id="player1" class="player1" width="560" height="315" src="https://www.youtube.com/embed/1_akvre-kt0?enablejsapi=1?" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <p class="sec_nurture__item-text"><span>本の音読と講師からの質問を通して</span><span>読解力の向上を図ります。</span></p>
          </li>
        </ul>
      </div>
    </div> -->
  </section>

  <!-- sec_flow -->
  <section class="sec_flow">
      <div class="sec_flow__inner section__inner section__inner-s">
        <div class="sec_flow__title section__title fadeIn">
          <h2 class="sec_flow__title-main section__title-main"><span>独自システム</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/method/icon_sec_skills.svg" alt=""></h2>
          <p class="sec_flow__title-sub section__title-sub">System</p>
        </div>
        <div class="sec_flow__container fadeLeftRight">
          <div class="sec_flow__contents">
            <p class="sec_flow__text">
              <span>
                各ご家庭には「Wings Notes」というマイページが発行され、それぞれの進捗状況が毎日ご家庭にウェブ上で共有されます。<br>
                初期段階から始める読解力の育成により、音だけでなく文字からも沢山の「正しい英語表現」を日々蓄積し続けるからこそ、結果的に「少人数制の英語環境」を通して、より効果的なSpeaking力の向上も実現可能となります。
              </span>
              <span>
                Wings Global Homeに通うこども達の圧倒的な英語コミュニケーション力は、まさにこのWings Methodを中心につくりあげられるのです。
              </span>
            </p>
            <p class="sec_flow__btn btn btn__white"><a href="/skills/">伸ばす2つの力を見る</a></p>
          </div>
          <div class="sec_flow__img fadeRightLeft"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/method/sec_flow.png" alt=""></div>
        </div>
      </div>
  </section>

</main>

<?php get_footer(); ?>