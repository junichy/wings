<?php get_header();
/*
Template Name: コース紹介
*/
?>
<main class="page">

  <!-- headline -->
  <?php get_template_part('parts/headline') ?>

  <?php 
  if(is_page('preschool')):
    $image_path = 'preschool';
  elseif(is_page('bilingual')):
    $image_path = 'bilingual';
  elseif(is_page('kinder')):
    $image_path = 'kinder';
  elseif(is_page('elementary')):
    $image_path = 'elementary';
  elseif(is_page('advanced')):
    $image_path = 'advanced';
  elseif(is_page('kinder_bilingual')):
    $image_path = 'kinder_bilingual';
  endif; 
  ?>
<?php if(is_page('preschool')): ?>
<?php elseif(is_page('bilingual')): ?>
<?php elseif(is_page('kinder')): ?>
<?php elseif(is_page('elementary')): ?>
<?php elseif(is_page('advanced')): ?>
<?php elseif(is_page('kinder_bilingual')): ?>
<?php endif; ?>

  <!-- sec_course -->
  <section class="sec_course">
    <div class="sec_course__inner section__inner">
      <div class="sec_course__container fadeIn">
        <div class="sec_course__title section__title section__title--center">

          <!-- コース名 -->
          <?php if(is_page('preschool')): ?>
            <h2 class="sec_course__title-main section__title-main"><span>プリスクールコース</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/icon_sec_course.svg" alt=""></h2>
          <?php elseif(is_page('bilingual')): ?>
            <h2 class="sec_course__title-main section__title-main"><span>バイリンガルコース</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/icon_sec_course.svg" alt=""></h2>
          <?php elseif(is_page('kinder')): ?>
            <h2 class="sec_course__title-main section__title-main"><span>キンダーフレックスコース</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/icon_sec_course.svg" alt=""></h2>
          <?php elseif(is_page('elementary')): ?>
            <h2 class="sec_course__title-main section__title-main"><span>エレメンタリーコース</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/icon_sec_course.svg" alt=""></h2>
          <?php elseif(is_page('advanced')): ?>
            <h2 class="sec_course__title-main section__title-main"><span>アドバンストプラスコース</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/icon_sec_course.svg" alt=""></h2>
          <?php elseif(is_page('kinder_bilingual')): ?>
            <h2 class="sec_course__title-main sec_course__title-main--kb section__title-main"><span>ビーアイキンダーコース</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/icon_sec_course.svg" alt=""></h2>
          <?php endif; ?>

          <p class="sec_course__title-sub section__title-sub">Course</p>
        </div>

        <!-- リード文 -->
        <?php if(is_page('preschool')): ?>
          <p class="sec_course__lead">幼児期の教育は、お子様が人として心豊かにたくましく生きるための<br class="pc_only">「人間形成の基礎」をつくります。私たちはこの時期を生涯学習の第一段階として捉え、<br class="pc_only">「遊び」を通して、お子様の知識、技能など様々な能力を発達させる取り組みを、<br class="pc_only">英語で行っています。こども達は言葉に文字が存在することを潜在的に知っており、<br class="pc_only">文字に対して非常に興味を示します。この幼児期をスタートアップとして捉え、<br class="pc_only">高いレベルのバイリンガル育成の為、英語による文字教育プログラムをスタートさせます。</p>
        <?php elseif(is_page('bilingual')): ?>
          <p class="sec_course__lead">日本でも「グローバル化」が進み、英語が当たり前になる未来。バイリンガルコースでは、<br class="pc_only">英語による非認知能力開発を通して英語習得が伴う幼児教育を提供します。<br class="pc_only">それぞれのこどもの固有の体験を通して生まれる自発性を尊重し、自らが課題に取り組み、<br class="pc_only">結果を導き出すプロセスを重視します。「英語による読解力」の育成プログラムを中心とし、<br class="pc_only">英語での体験を通し自らが育つ力「自己教育力」により、お子様の人格形成や<br class="pc_only">思考力の土台を作り、記憶力の向上や集中力、知的好奇心などが育成されます。<br class="pc_only">それは、お子様の将来において、かけがえのない財産となることでしょう。</p>
        <?php elseif(is_page('kinder')): ?>
          <p class="sec_course__lead">バイリンガル教育は「二つの言語が自然に育つ環境をどのようにつくるか」<br class="pc_only">という事がテーマになります。幼少期から二つの言語を使う機会があり、<br class="pc_only">どちらの言語も大事だと感じられる体験をすることは、<br class="pc_only">バイリンガルとして育つための重要な基盤となります。<br class="pc_only">キンダーフレックスコースでは個別に最適化された読解力育成プログラムをご提供しています。<br class="pc_only">適切な指導、環境があれば、お子様は英語で本が読めるようになります。<br class="pc_only">英語文字列の向こう側に何か意味があり、そこに違う世界が感じられるという体験は、<br class="pc_only">高度なバイリンガルへの重要なアプローチになります。</p>
        <?php elseif(is_page('elementary')): ?>
          <p class="sec_course__lead">日英二つの言語で日常の意思疎通ができるというレベルと、二つの言語の両方で<br class="pc_only">文章の読解や作文、議論などもできるというレベルには大きな差があります。<br class="pc_only">エレメンタリーコースでは、小学6年生をゴールに文脈を捉え行間を読み取る事ができるようになる、<br class="pc_only">英語による読解力の育成に注力しています。高度な読解力があれば、<br class="pc_only">英語によるプレゼンテーションスキル、コミュニケーションスキルも育ち、<br class="pc_only">中学進学の際もその英語力をフルに活用することができます。<br class="pc_only">Wings Global Homeだけで英語を学んできた既卒生（現在中学生）は、<br class="pc_only">今や英語選択入試で進学した先の中学校で、<br class="pc_only">海外からの帰国生と同じクラスで英語の授業を受けたり、<br class="pc_only">国際バカロレアの認定校に入学しその英語力を思う存分活用しています。</p>
        <?php elseif(is_page('advanced')): ?>
          <p class="sec_course__lead">近年、急激に増えている中学受験の「英語入試」。首都圏の中学入試において英語入試を取り入れている学校は、<br class="pc_only">2014年度の15校から急増し、2023年以降東京都内私立の半分を超える約160校以上が実施しています。<br class="pc_only">ただ英語ができるのではなく、批判的に考え、それを論理的に英語で表現できる人材が、<br class="pc_only">大学だけでなく中学でも求められています。しかし多くの教育機関では、英語入試で求められているような<br class="pc_only">総合的な英語力を伸ばす英語教育が行われていません。<br class="pc_only">アドバンストプラスコースでは、今まで培ってきた高い英語力をさらに向上させ、<br class="pc_only">英語での面接や論述にも対応できるレベルまで伸ばすことを目指します。<br class="pc_only">受験や進学後に有利となる英語学習を考えている方や、従来の受験英語対策に対して疑問を持っている方、<br class="pc_only">他校からの転校をご検討の方は、是非新しいカタチの学びをスタートしませんか？</p>
        <?php elseif(is_page('kinder_bilingual')): ?>
          <!-- <div class="phtBox">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/kinder_bilingual/pht_global.png" alt="ビーアイキンダーコースの未来の可能性">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/kinder_bilingual/table_global_pc.svg" alt="ビーアイキンダーコースの未来の可能性" class="pc_only">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/kinder_bilingual/table_global_sp.svg" alt="ビーアイキンダーコースの未来の可能性" class="sp_only">
          </div> -->
          <p class="sec_course__lead">Wings Global Homeのビーアイキンダーコースは、<br class="pc_only">将来のグローバルな社会で活躍するための基盤を築くことを目指しています。<br class="pc_only">BI-Kinderからアフタースクールの間、こども達は、楽しみながら高度な英語を身につけます。<br class="pc_only">その間、家庭や学校では日本語をしっかり身につけることにより、<br class="pc_only">日本語を犠牲にすることなく、「本当のバイリンガル」に成長します。<br class="pc_only">それは、こども達に広い選択肢を与えることは<br class="pc_only">「自分らしく自由に生きていく」ための力を与えることに他なりません。</p>
          <!-- <p class="sec_course__lead">Bi.-Kindergartenでは、これまでノウハウを蓄積してきた、お子様自身が持つ<br class="pc_only">「自己教育力」が存分に発揮できる「教育環境」を「認可外保育施設」としてご提供します。<br class="pc_only">お子様固有の体験を通して生まれる自発性を尊重し、自らが課題に取り組み、<br class="pc_only">結果を導き出すプロセスを重視した教育機会となります。<br class="pc_only">また開校以来多大なる実績を残してきました「思考力を育てる読解力の育成プログラム」をご提供します。<br class="pc_only">個別に最適化されたマンツーマンレッスンを通して、お子様のつまずきを見逃すことなく、<br class="pc_only">「読む力」を育成します。さらに幼児教育として、数や図形の認識、時間の概念、科学、天体、地理、歴史等、<br class="pc_only">体験を通して学習ができるプログラムをご用意し、<br class="pc_only">お子様にとって知的好奇心が刺激されるイマージョン教育を取り入れています。</p> -->
        <?php endif; ?>

        <dl class="sec_course__list">

          <!-- 対象年齢 -->
          <div class="sec_course__item">
            <dt class="sec_course__item-title">対象年齢</dt>
            <?php if(is_page('preschool')): ?>
              <dd class="sec_course__item-text">2歳6ヶ月～3歳</dd>
            <?php elseif(is_page('bilingual')): ?>
              <dd class="sec_course__item-text">年少～年長</dd>
            <?php elseif(is_page('kinder')): ?>
              <dd class="sec_course__item-text">年少～年長</dd>
            <?php elseif(is_page('elementary')): ?>
              <dd class="sec_course__item-text">小学1年生〜6年生（英語が初めてのお子様は小学3年生まで入会可）</dd>
            <?php elseif(is_page('advanced')): ?>
              <dd class="sec_course__item-text">小学3年生〜6年生</dd>
            <?php elseif(is_page('kinder_bilingual')): ?>
              <dd class="sec_course__item-text">年小〜年長</dd>
            <?php endif; ?>
          </div>

          <!-- スケジュール -->
          <div class="sec_course__item">
            <dt class="sec_course__item-title">スケジュール</dt>
            <?php if(is_page('preschool')): ?>
              <dd class="sec_course__item-text">9:30 - 13:00</dd>
            <?php elseif(is_page('bilingual')): ?>
              <dd class="sec_course__item-text">10:30 - 14:00（9:30~延長無料）</dd>
            <?php elseif(is_page('kinder')): ?>
              <dd class="sec_course__item-text">9:30 - 13:00<br>15:00 - 18:30</dd>
            <?php elseif(is_page('elementary')): ?>
              <dd class="sec_course__item-text">9:00 - 13:00<br>14:30 - 18:30（19:30まで延長無料）</dd>
            <?php elseif(is_page('advanced')): ?>
              <dd class="sec_course__item-text">18:00 - 19:30</dd>
            <?php elseif(is_page('kinder_bilingual')): ?>
              <dd class="sec_course__item-text">9:30 - 16:00 or 9:30 - 18:30（8:00~延長無料）</dd>
            <?php endif; ?>
          </div>

          <!-- 英語レベル -->
          <?php if(!is_page('kinder_bilingual')): ?>
          <div class="sec_course__item">
            <dt class="sec_course__item-title">英語レベル</dt>
            <?php if(is_page('advanced')): ?>
              <dd class="sec_course__item-text">CEFR A2以上の英語力相当<br>＊入会にあたって英語テストを行う場合があります。</dd>
            <?php else: ?>
              <dd class="sec_course__item-text">英語未経験可</dd>
            <?php endif; ?>
          </div>
          <?php endif; ?>

          <?php if(is_page('kinder_bilingual')):?>
          <!-- 定員 -->
            <div class="sec_course__item">
              <dt class="sec_course__item-title">定員</dt>
              <dd class="sec_course__item-text">
                池尻大橋校　計72名(年少〜年長)<br>
                学芸大学駅前校　計54名(年少〜年長)<br>
                桜新町校　計48名(年少〜年長)<br>
                *国の基準より１児童あたり約1.5倍のスペースを確保しています。
              </dd>
            </div>
          <?php endif; ?>


          <!-- 入会時期 -->
          <div class="sec_course__item">
            <dt class="sec_course__item-title">入会</dt>
            <?php if(is_page('advanced')): ?>
              <dd class="sec_course__item-text">4月～５月<br>＊月曜日、火曜日、木曜日、金曜日(全日18:00 – 19:30)のうち２日 ＊どの曜日の組み合わせでも受講可能ですが、学習効率を考慮し週の前半と後半の組み合わせにしていただく事をお勧めしております。</dd>
            <?php else: ?>
              <dd class="sec_course__item-text">随時*</dd>
            <?php endif; ?>
          </div>
            
        </dl>
        <?php if(is_page('kinder_bilingual')): ?>
          <p class="sec_course__note">*空き枠の有無についてはお問い合わせください</p>
          <p class="sec_course__note">**土日祝日、及びGW期間中の平日、夏季休暇(8/11-8/15)、年末年始休暇(12/27-1/3)を除く全平日にてお預けいただくことが可能です。また追加料金で土曜のお預かりも可能です。</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- sec_features -->
  <section class="sec_features">
    <div class="sec_features__inner section__inner">
      <div class="sec_features__title section__title section__title--center fadeIn">
        <h2 class="sec_features__title-main section__title-main"><span>コースの特徴</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/icon_sec_features.svg" alt=""></h2>
        <p class="sec_features__title-sub section__title-sub">Features</p>
      </div>

      <?php if(is_page('kinder_bilingual')):?><!-- キンダーフレックスコース -->
        <ul class="sec_features__list sec_features__list--kb delayScroll">
          <li class="sec_features__item sec_features__item--kb">
            <p class="sec_features__item-num">Feature01</p>
            <div class="sec_features__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/<?php echo $image_path ?>/features_01.jpg" alt="">
            </div>
            <div class="sec_features__item-contents">
              <p class="sec_features__item-title">健やかな子どもを育む保育環境</p>
              <p class="sec_features__item-text">Wings Global Homeでは、英語を通じた教育だけでなく、子供たちが心身ともに健やかに成長できる保育環境を提供しています。充実した運動プログラムや異なる年齢の子供たちが一緒に活動することにより、兄弟のような関係性を育むとともに、フィジカルなアクティビティーも豊富に取り入れています。広いスペースと少人数制で、子供たちが安心してのびのびと過ごせる環境が整っています。</p>
              <!-- <p class="sec_features__item-text">Bi.-Kinderでは、英語による「読解力」の育成に注力し、精度の高い音読プログラムをご提供しています。<br>単に読むスキルの獲得に留まらず、文脈を捉え単語の意味を類推し、行間を読み登場人物の気持ちを汲み取る力を育成します。言葉の敏感期にいる子どもたちは、英語で本が読めるようになれば語彙を豊かにし、文法や文章構成を理解していきます。通常の歌やゲームだけの英会話レッスンでは、到達し得ない高度な認知、学力面での英語を身につけることができます。</p> -->
            </div>
          </li>
          <li class="sec_features__item sec_features__item--kb">
            <p class="sec_features__item-num">Feature02</p>
            <div class="sec_features__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/<?php echo $image_path ?>/features_02.jpg" alt="">
            </div>
            <div class="sec_features__item-contents">

              <p class="sec_features__item-title">思考力を育てる「読解力の育成」</p>
              <p class="sec_features__item-text">Wings Global Homeのビーアイキンダーコースでは、英語による「読解力」の育成に注力しています。精度の高い音読プログラムを通じて、子供たちは文脈を捉え、単語の意味を類推し、行間を読み登場人物の気持ちを汲み取る力を養います。英語で本が読めるようになることで、語彙を豊かにし、文法や文章構成を理解する力を育て、将来的な学力向上につながります。</p>

            </div>
          </li>
          <li class="sec_features__item sec_features__item--kb">
            <p class="sec_features__item-num">Feature03</p>
            <div class="sec_features__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/<?php echo $image_path ?>/features_03.jpg" alt="">
            </div>
            <div class="sec_features__item-contents">

              <p class="sec_features__item-title">数・図形の概念を育成する「算数の遊び」</p>
              <p class="sec_features__item-text">日常生活で体験する身近な現象の中で、子供達の気づきを導き出し、知的好奇心を刺激する教育プログラムをご提供します。子供達の興味が動物、植物、宇宙、歴史、世界へ広がるよう「なぜ？どうして？」の疑問から答えを見つけるまでのプロセスを大切に育てます。</p>

            </div>
          </li>
          <li class="sec_features__item sec_features__item--kb">
            <p class="sec_features__item-num">Feature04</p>
            <div class="sec_features__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/<?php echo $image_path ?>/features_04.jpg" alt="">
            </div>
            <div class="sec_features__item-contents">
              <p class="sec_features__item-title">知りたがる、調べたがる<br>子供を育成する理科・社会科教育</p>
              <p class="sec_features__item-text">
              日常生活で体験する身近な現象を通じて、子供たちの気づきを引き出し、知的好奇心を刺激する教育プログラムを提供しています。子供たちの興味が動物、植物、宇宙、歴史、世界へ広がるよう、「なぜ？どうして？」の疑問から答えを見つけるプロセスを重視し、探求心を育てます。</p>
            </div>
          </li>
        </ul>

      <?php else: ?><!-- それ以外 -->
        
        <ul class="sec_features__list delayScroll">
          <li class="sec_features__item">
            <p class="sec_features__item-num">Feature01</p>
            <div class="sec_features__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/<?php echo $image_path ?>/features_01.jpg" alt="">
            </div>
            <div class="sec_features__item-contents">


            <?php if(is_page('preschool')): ?>
              <p class="sec_features__item-title">自立を促す英語保育</p>
              <p class="sec_features__item-text">衣服の着脱や、自分の荷物を自分でお片付けがする事ができるなど、自分でできることをどんどん増やしていく英語保育を積極的に行います。お子様が英語での指導を理解し、その場で行動に移していく事を繰り返す日常は、バイリンガル教育の初めの一歩となります。</p>
            <?php elseif(is_page('bilingual')): ?>
              <p class="sec_features__item-title">「英語×知育」のバイリンガル養成</p>
              <p class="sec_features__item-text">一生の中で成長速度が最も早く、その後失われていく幼児期の自然習得の力をフルに活用することがお子様の人生に大いに貢献すると考えています。幼児期に数概念、時間概念、図形感覚、サイエンスやソーシャルスタディ等の知育を英語で行えば、通常の英会話レッスンでは到達し得ない高度な認知、学力面での英語力を身につけることができます。</p>
            <?php elseif(is_page('kinder')): ?>
              <p class="sec_features__item-title">英語教育の早期化に対応</p>
              <p class="sec_features__item-text">英語教育の早期化に伴い小学１年生から英語教育が始まっていますが、教育現場では様々な課題があり解決の糸口は未だ見出されていません。今後急速に変化する国内の英語教育に対応していくには、各家庭において幼児期からの準備が重要です。当園では幼児期のお子様が確実に英語４技能を身につけていく為のプログラムをご用意しています。</p>
            <?php elseif(is_page('elementary')): ?>
              <p class="sec_features__item-title">他の英会話教室では実現できない教育効果</p>
              <p class="sec_features__item-text">・少人数制<br>効率的な英語習得を目指す上で、お子様の学年と英語レベルを考慮した環境が重要です。一般の英会話教室では学年別にクラスが分かれていますが、実際には同学年でも英語レベルは違います。Wings Global Homeでは、お子様の英語レベルを的確に判断し、学年と考慮した上で平均５名のグループを編成します。英語をはじめて学ぶお子様も無理なく英語を身に着けられる環境を整えています。<br>・マンツーマンレッスン<br>英語で本がスムーズに読めるようになる為には、細かな段階を追った過程必要です。Wings Global Homeでは、今日までの膨大なデータ蓄積を元に非常に細やかな段階を設定し、お子様の英語レベルに最適な段階でマンツーマン指導しています。スタート時点の英語レベルに関わらず、全てのお子様が、英語で本が読めるようになります。</p>
            <?php elseif(is_page('advanced')): ?>
              <p class="sec_features__item-title">発想力を伸ばす議論や<br class="sp_only">ディベート中心の授業</p>
              <p class="sec_features__item-text">少人数だからこそ一人当たりの発言回数を最大限に確保することができます。常日頃から周りの物事に対して多角的に考え英語での議論を繰り返すことで、こどもたちの思考力と発信力は自然に伸びていくと私たちは考えます。</p>
            <?php endif; ?>

            </div>
          </li>
          <li class="sec_features__item">
            <p class="sec_features__item-num">Feature02</p>
            <div class="sec_features__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/<?php echo $image_path ?>/features_02.jpg" alt="">
            </div>
            <div class="sec_features__item-contents">

            <?php if(is_page('preschool')): ?>
              <p class="sec_features__item-title">集中力が自然と身につく</p>
              <p class="sec_features__item-text">お子様の将来において、全ての能力を伸ばす源となる重要なスキルです。知的好奇心が刺激されれば自然と集中力は育ちますが、容易ではありません。遊びとしての教育プログラム、スケジュールの組み立方、少人数制であること、スタッフの指導スキル、などが組み合わさり、お子様の集中力は自然と育成されます。</p>
            <?php elseif(is_page('bilingual')): ?>
              <p class="sec_features__item-title">社会性を育む「異年齢クラス」</p>
              <p class="sec_features__item-text">私たちはこども達の社会性を育てる上で、異年齢クラスは理想的な教育環境だと考えています。こどもは大人から学ぶだけでなく、こども同士で多くのことを学びます。自分と発達段階が違う多様性の中で、助けたり、助けられたり、挑戦したり、見守ったりする行為が自然と出来るようになり、環境がこども達を育てていきます。</p>
            <?php elseif(is_page('kinder')): ?>
              <p class="sec_features__item-title">文字教育に注力</p>
              <p class="sec_features__item-text">アルファベットを歌で歌えるだけでは、英語を習得したとは言えません。アルファベットの集まりが単語、そして文となっても、自ら読むことができ理解する英語力が必要です。当園では文字教育に注力し、お子様の英語発達のステップを見過ごしたり飛ばしたりすることなく、小刻みなステップアップの仕組みを着実に上っていくよう指導しています。</p>
            <?php elseif(is_page('elementary')): ?>
              <p class="sec_features__item-title">発想力と発信力を育てるプレゼンテーションタイム</p>
              <p class="sec_features__item-text">急速な国際化が進むお子様の将来では、自分の考えや意見を持ち、自分の言葉でしっかり相手に伝えるスキルが非常に重要となります。 Wings Global Homeに通うこども達は、大勢の前でも自分の意見を堂々と述べることができるよう、毎日のクラスの中で「英語でのプレゼンテーション」を行います。 こども達は自分の意見を聞いてもらえる場所があれば、おのずと自らの発想力と発信力をどんどん伸ばしていきます。</p>
            <?php elseif(is_page('advanced')): ?>
              <p class="sec_features__item-title">お互いに切磋琢磨できる英語環境</p>
              <p class="sec_features__item-text">同じレベルの生徒同士が少人数で集まることで、お互いの成長が刺激になり、競争心を持ちながら積極的に学び続けることができます。</p>
            <?php endif; ?>

            </div>
          </li>
          <li class="sec_features__item">
            <p class="sec_features__item-num">Feature03</p>
            <div class="sec_features__item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/<?php echo $image_path ?>/features_03.jpg" alt="">
            </div>
            <div class="sec_features__item-contents">

            <?php if(is_page('preschool')): ?>
              <p class="sec_features__item-title">早い文字習得で効率的なスタートを</p>
              <p class="sec_features__item-text">アルファベットを初め、お天気／曜日／色、などの単語を文字でも認識ができるようにします。幼くも言葉には文字がある事に気づき、文字を読む事の楽しさを経験する事ができ、知知的好奇心が育ちます。一人一人のお子様の英語レベルに合わせマンツーマンレッスンで丁寧に指導しています。</p>
            <?php elseif(is_page('bilingual')): ?>
              <p class="sec_features__item-title">学ぶ姿勢を身につける「少人数制」</p>
              <p class="sec_features__item-text">言語習得や非認知能力開発は、先生がこども達一人一人に「対話による確認」が不可欠であるため、ゆとりある少人数制クラスが必要だと考えています。従って生徒４〜６名に対して先生が１名つきます。先生と生徒間の細やかな対話の中で、こども達は常に理由や過程を英語で考え、表現する様になります。​この「対話する力」が自然と身につき、就学以降の学習に影響します。<br>*「少人数制」とは先生生徒比率(１：５)を指し、クラス全体の生徒数について表したものではありません。</p>
            <?php elseif(is_page('kinder')): ?>
              <p class="sec_features__item-title">楽しいアクティビティ</p>
              <p class="sec_features__item-text">身につけた英語を積極的に表現できるようWings Global Homeでは「アクティビティ・アプローチ」を取り入れています。幼児期になると、「競争心」「共感」「達成感」など心理的発達が見られるようになります。絵工作や、外遊び、ゲームなどを通して、お子様が英語を発言したくなる場を創出する事で、INPUTの学習が大いに生き、お子様自身も周りのお友達やスタッフと相互理解ができる「通じる言葉」としての英語を実感する体験ができます。</p>
            <?php elseif(is_page('elementary')): ?>
              <p class="sec_features__item-title">学校の長期休暇にも対応する学童保育機能</p>
              <p class="sec_features__item-text">長くフリーな時間も有意義に使えば、お子様の将来に大いに役立ちます。海外留学は未だ心配、近所の安心できる場所で、しかもオールイングリッシュの環境下で長時間過ごせば、留学以上の英語力が身につきます。休暇中の急な家族旅行にも、お手元のスマホで簡単にキャンセル、振替ができ、フレキシブルに対応が出来るオンライン予約システムを導入しています。</p>
            <?php elseif(is_page('advanced')): ?>
              <p class="sec_features__item-title">レベルに合わせてカスタマイズされた学習計画</p>
              <p class="sec_features__item-text">グループのレベルに合わせて提案された最適なアプローチで、着実に一人一人の総合的な英語力を伸ばします。</p>
            <?php endif; ?>

            </div>
          </li>
        </ul>
      <?php endif;?>

    </div>
  </section>

  <!-- sec_flow -->
  <section class="sec_flow">
    <div class="sec_flow__inner section__inner section__inner-s">
      <div class="sec_flow__title section__title section__title--center fadeIn">
        <h2 class="sec_flow__title-main section__title-main"><span>1日の流れ</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/icon_sec_flow.svg" alt=""></h2>
        <p class="sec_flow__title-sub section__title-sub">Flow</p>
      </div>
      <div class="sec_flow__img fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/<?php echo $image_path ?>/flow.jpg" alt=""></div>
      
      <!--1日の流れ：プリスクールコース -->
      <?php if(is_page('preschool')): ?>
        <ul class="sec_flow__list delayScroll">
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Free Time 9:30-10:00（30分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・家庭での日本語から英語に切り替えるためと、母子分離をスムーズに行うためのクッションとなる時間。<br>
                ・自立を促す為、お弁当や水筒を自分のバックパックから取り出し所定の場所へ納める練習をします。<br>
                ・そのほか、自由にスタッフと遊んでいます。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                お子様の自立を促す保育を英語で行います。英語での指導を理解し行動に移していくことは、バイリンガル教育の大きな第一歩となります。Wings Global Homeでの成長は、そのまま家庭でも見られるようになり、保護者の方をびっくりさせてくれるでしょう。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                特にグループ分けはありません。生徒３～４名につきスタッフ１名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Snack Time 10:00-10:30（30分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・おやつの時間です。（手洗い、用意、片付けを含む）<br>
                ・お子様自身で、手洗い⇒おやつの用意⇒後片付け、の順をスムーズに行えるようになります。<br>
                ・おやつ／水筒を配る、テーブルを拭く、など「係のお仕事」をする事で「人の為に役立つ経験」をします。<br>
                ・係のお仕事を自発的に英語で行うことで、こども間で英語フレーズが行きかう初めのシーンとなります。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                係の仕事は、「人の為に行動する」という貴重な経験です。係のお仕事を通じて人の役に立つ感覚を体験してもらい、たくさん褒めることでお子様の自立心を育てます。例えば水筒を配る係では、「Whose is this?」⇒「It’s mine.」⇒「Here you are!」⇒「Thank you!」と、こども間で英語が行きかいます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                お子様の性格や様子によって、スタッフが配席します。生徒数10～15名につきスタッフ3～4名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Circle Time 10:30-11:00（30分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・一人一人、ホワイトボードの前で質問をしていきます。お子様は自分で名前、年齢を書いたり、スタッフと仲良くなります。<br>
                ・自分の名前や年齢など、「自分について」答えられ、書けるようになります。<br>
                ・大文字アルファベット、フォニックスの習得。 CVC(cup,map,dog,cat,など）のスペリングの習得。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                Wings Global Homeでは、2～3才でも文字教育を取り入れており、プリスクールのサークルタイムは、英語の4技能習得の「初めの一歩」となります。アルファベット、フォニックスの習得度、スペリングができる単語数をカウントし、今後の展望と併せて保護者にお伝えしています。文字を取り込むことで質の高い英語教育となり、その後のリーディング力を押し上げます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                個別レッスン。スタッフとマンツーマンで練習します。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Monthly Theme 11:00-11:15（15分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・毎月約15英単語を、オリジナル教材を使って語彙、フレーズを記憶し、練習します。<br>
                ・月前半：語彙の積み上げ・スペリングの習得をします。<br>
                ・月後半：前半で学習した単語が含まれる英語フレーズ（過去形、進行形、前置詞、冠詞なども含め）を記憶し、言えるようになります。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                日本のこどもたちは外国語に触れる機会が圧倒的に少ないため、語彙の積み上げに力点を置くことが重要だと考えます。Wings Global Homeではオリジナル教材によって語彙の積み上げを継続的に行う事で、こどもたちの英語力発達の下支えとなります。また、第2言語を習得する場合は日本語を習得するように、文を塊でインプットする事が重要です。前置詞の使い方や冠詞、不定詞などの文法的な説明は最低限に止め、理屈抜きで塊で多量に覚えていく事が「Reading」「Speaking」スキルの向上につながります。経過年数と共に、記憶する能力そのものが育ち、全ての単語／フレーズを記憶する為に必要な時間数が徐々に低減していき、数回聞けば覚えられるようになっていき、英語習得以外の学習能力の向上にもつながります。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                お子様の英語のレベルによって、生徒10～15名につきスタッフ2～3名を配置します。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Activity Time 11:15-11:45（30分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・室内外における英語での教育的遊び（アルファベットや数字のカードゲーム）や、外でのかけっこや草花虫の観察をします。<br>
                ・遊び（絵遊び、工作、外遊び）などを通して、こどもたちが様々な事を体験する中で、自然な英語を習得できます。<br>
                ・幼児向けワークシートで筆圧トレーニングを行い、Writingスキルの練習をします。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                こども達は「遊び」が大好き。 遊びを通して、自然と自分の伝えたいことを伝えられるようになります。<br>
                またお子様一人一人を見て、どこができ、どの部分でスタッフのヘルプが必要だったのかを保護者の方にもお伝えします。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                特にグループ分けはありません。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Lunch Time 11:45-12:45（60分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・ランチタイム。準備、配膳、手洗いなどこどもたちが率先して担当します。自分で用意し、自分で食べることで自立を促します。<br>
                ・食事中のマナーとして立ち歩かず、最後まで自分で食べられるように声掛けをしています。<br>
                ・係りのお仕事を生徒自身により英語で行うことで、こども間で英語フレーズが行きかう初めのシーンとなります。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                Wings Global Homeのランチは、手作り＆無添加です。 完食した子にはご褒美ステッカーを挙げるなどでこども達を勇気づけ、達成感、喜びを実感できるようにしています。また係の仕事は、「人の為に行動する」という貴重な経験です。係のお仕事を通じて人の役に立つ感覚を体験してもらい、たくさん褒めることでお子様の自立心を育てます。例えば水筒を配る係では、「Whose is this?」⇒「It’s mine.」⇒「Here you are!」⇒「Thank you!」と、こども間で英語が行きかいます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                お子様の性格や様子によって、スタッフが配席します。生徒数10～15名につきスタッフ3～4名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Goodbye Time 12:45-13:00（15分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・ランチの後はお迎えタイムになります。「Did you finish your lunch？」という質問に「Yes, I did.」と答えられればご褒美シールがもらえます。<br>
                ・お帰りの支度も全て自分でできるように見守っています。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ご褒美シールはこどもたちにとってとても魅力てきなご褒美。シールが欲しくてまた頑張る、その気持ちを大切に育てていく事で、「自立」「また頑張る気持ち」「悔しさ」「自信」など、非認知スキルを育てます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                先生が個別に見送ります。
              </p>
            </div>
          </li>
        </ul>

      <!--1日の流れ：バイリンガルコース -->
      <?php elseif(is_page('bilingual')): ?>
        <ul class="sec_flow__list delayScroll">
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Free Time 9:30-10:00（30分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・家庭での日本語から英語に切り替えるためと、母子分離をスムーズに行うためのクッションとなる時間。<br>
                ・自立を促す為、お弁当や水筒を自分のバックパックから取り出し所定の場所へ納める練習をします。<br>
                ・そのほか、自由にスタッフと遊んでいます。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                お子様の自立を促す保育を英語で行います。英語での指導を理解し行動に移していくことは、バイリンガル教育の大きな第一歩となります。Wings Global Homeでの成長は、そのまま家庭でも見られるようになり、保護者の方をびっくりさせてくれるでしょう。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                特にグループ分けはありません。生徒３～４名につきスタッフ１名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Snack Time 10:00-10:30（30分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・おやつの時間です。（手洗い、用意、片付けを含む）<br>
                ・お子様自身で、手洗い⇒おやつの用意⇒後片付け、の順をスムーズに行えるようになります。<br>
                ・おやつ／水筒を配る、テーブルを拭く、など「係のお仕事」をする事で「人の為に役立つ経験」をします。<br>
                ・係のお仕事を自発的に英語で行うことで、こども間で英語フレーズが行きかう初めのシーンとなります。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                係の仕事は、「人の為に行動する」という貴重な経験です。係のお仕事を通じて人の役に立つ感覚を体験してもらい、たくさん褒めることでお子様の自立心を育てます。例えば水筒を配る係では、「Whose is this?」⇒「It’s mine.」⇒「Here you are!」⇒「Thank you!」と、こども間で英語が行きかいます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                お子様の性格や様子によって、スタッフが配席します。生徒数10～15名につきスタッフ3～4名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Circle Time 10:30-11:00（30分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・一人一人、ホワイトボードの前で質問をしていきます。お子様は自分で名前、年齢を書いたり、スタッフと仲良くなります。<br>
                ・自分の名前や年齢など、「自分について」答えられ、書けるようになります。<br>
                ・大文字アルファベット、フォニックスの習得。 CVC(cup,map,dog,cat,など）のスペリングの習得。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                Wings Global Homeでは、2～3才でも文字教育を取り入れており、プリスクールのサークルタイムは、英語の4技能習得の「初めの一歩」となります。アルファベット、フォニックスの習得度、スペリングができる単語数をカウントし、今後の展望と併せて保護者にお伝えしています。文字を取り込むことで質の高い英語教育となり、その後のリーディング力を押し上げます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                個別レッスン。スタッフとマンツーマンで練習します。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Monthly Theme 11:00-11:15（15分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・毎月約15英単語を、オリジナル教材を使って語彙、フレーズを記憶し、練習します。<br>
                ・月前半：語彙の積み上げ・スペリングの習得をします。<br>
                ・月後半：前半で学習した単語が含まれる英語フレーズ（過去形、進行形、前置詞、冠詞なども含め）を記憶し、言えるようになります。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                日本のこどもたちは外国語に触れる機会が圧倒的に少ないため、語彙の積み上げに力点を置くことが重要だと考えます。Wings Global Homeではオリジナル教材によって語彙の積み上げを継続的に行う事で、こどもたちの英語力発達の下支えとなります。また、第2言語を習得する場合は日本語を習得するように、文を塊でインプットする事が重要です。前置詞の使い方や冠詞、不定詞などの文法的な説明は最低限に止め、理屈抜きで塊で多量に覚えていく事が「Reading」「Speaking」スキルの向上につながります。経過年数と共に、記憶する能力そのものが育ち、全ての単語／フレーズを記憶する為に必要な時間数が徐々に低減していき、数回聞けば覚えられるようになっていき、英語習得以外の学習能力の向上にもつながります。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                お子様の英語のレベルによって、生徒10～15名につきスタッフ2～3名を配置します。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Learning Time 11:15-12:00（45分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・室内外における英語での教育的遊び（アルファベットや数字のカードゲーム）や、外でのかけっこや草花虫の観察をします。<br>
                ・遊び（絵遊び、工作、外遊び）などを通して、こどもたちが様々な事を体験する中で、自然な英語を習得できます。<br>
                ・幼児向けワークシートで筆圧トレーニングを行い、Writingスキルの練習をします。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                こども達は「遊び」が大好き。 遊びを通して、自然と自分の伝えたいことを伝えられるようになります。<br>
                またお子様一人一人を見て、どこができ、どの部分でスタッフのヘルプが必要だったのかを保護者の方にもお伝えします。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                特にグループ分けはありません。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Lunch Time 12:00-13:00（60分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・ランチタイム。準備、配膳、手洗いなどこどもたちが率先して担当します。自分で用意し、自分で食べることで自立を促します。<br>
                ・食事中のマナーとして立ち歩かず、最後まで自分で食べられるように声掛けをしています。<br>
                ・係りのお仕事を生徒自身により英語で行うことで、こども間で英語フレーズが行きかう初めのシーンとなります。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                Wings Global Homeのランチは、手作り＆無添加です。 完食した子にはご褒美ステッカーを挙げるなどでこども達を勇気づけ、達成感、喜びを実感できるようにしています。また係の仕事は、「人の為に行動する」という貴重な経験です。係のお仕事を通じて人の役に立つ感覚を体験してもらい、たくさん褒めることでお子様の自立心を育てます。例えば水筒を配る係では、「Whose is this?」⇒「It’s mine.」⇒「Here you are!」⇒「Thank you!」と、こども間で英語が行きかいます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                お子様の性格や様子によって、スタッフが配席します。生徒数10～15名につきスタッフ3～4名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Work Time 13:00-13:45（45分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                Wings Global Homeではモンテッソーリ教育を英語で取り入れています。
                目的は、「自立していて、有能で、責任感と他人への思いやりがあり、生涯学び続ける姿勢を持った人間を育てること」です。
                前提としてこどもには自分を育てる力である自己教育力が備わっていると考えます。
                大人の手を借りず、ひとりで物事をこなしてみたくなる時期を敏感期と呼びます。
                感覚器官がほぼ発達を遂げる幼児期に現れる「感覚の敏感期」を利用し、教具を操作することを通して「ものを観察する能力」と「ものを考える方法」とを身につけられます。「感覚教育」は「言語・算数・文化教育」という知的教育分野の基礎となる重要な役割を担っています。
                こどもたちは、この時間に興味のあるお仕事を自らが自由に選択し、納得できるまで、時間をかけゆっくりと取り組みました。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Goodby Time 13:45-14:00（15分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・ランチの後はお迎えタイムになります。「Did you finish your lunch？」という質問に「Yes, I did.」と答えられればご褒美シールがもらえます。<br>
                ・お帰りの支度も全て自分でできるように見守っています。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ご褒美シールはこどもたちにとってとても魅力てきなご褒美。シールが欲しくてまた頑張る、その気持ちを大切に育てていく事で、「自立」「また頑張る気持ち」「悔しさ」「自信」など、非認知スキルを育てます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                先生が個別に見送ります。
              </p>
            </div>
          </li>
        </ul>

      <!--1日の流れ：キンダーーコース -->
      <?php elseif(is_page('kinder')): ?>
        <ul class="sec_flow__list delayScroll">
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Free Time 15:00-15:30（30分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・家庭での日本語から英語に切り替えるための時間。<br>
                ・スナック／玩具で遊ぶ／DVD鑑賞から自分で選択し自主的に過ごします。<br>
                ・時間配分や、何を選択するかはこどもたちが自由に決定し行動することで意思決定力を育成します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                選ぶ数や項目には個性が現れ、画一的な教育環境ではなく、自分の意志で選択することができる教育環境をこども達に提供していく事で、取り組むことの楽しさ、積極性などを育みます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                特にグループ分けはありません。生徒5名につきスタッフ1名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Snack Time 15:30-16:00（30分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・おやつの時間です。（手洗い、用意、片付けを含む）<br>
                ・お子様自身で、手洗い⇒おやつの用意⇒後片付け、の順をスムーズに行えるようになります。<br>
                ・おやつ／水筒を配る、テーブルを拭く、など「係のお仕事」をする事で「人の為に役立つ経験」をします。<br>
                ・係のお仕事を自発的に英語で行うことで、こども間で英語フレーズが行きかう初めのシーンとなります。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                係の仕事は、「人の為に行動する」という貴重な経験です。係のお仕事を通じて人の役に立つ感覚を体験してもらい、たくさん褒めることでお子様の自立心を育てます。例えば水筒を配る係では、「Whose is this?」⇒「It’s mine.」⇒「Here you are!」⇒「Thank you!」と、こども間で英語が行きかいます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                お子様の性格や様子によって、スタッフが配席します。生徒数10～15名につきスタッフ1～2名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Song Time 16:00-16:15（15分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・欧米の幼児向けの歌を楽しく歌い、英単語・フレーズを身につけます。（ABC、数、色、形、動物、季節、曜日、月の名前etc）<br>
                ・歌を楽しく歌う事で、アクセントやフレーズなどが自然に楽しく身につきます。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                こども達は皆歌が大好き。英語の歌や音楽で歌ったり、踊ったりすることで、Wings Global Homeでの時間を楽しんでもらうことで英語習得の効果をアップします。<br>
                また幼児向けの歌は、正しいアクセントで作られているので、歌が歌えることで正しいアクセントで単語やフレーズを習得でき、英語習得にとても効果が高いです。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                特にグループ分けはありません。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Circle Time 16:15-17:00（45分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・一人一人、ホワイトボードの前で質問をしていきます。お子様は自分で名前、年齢を書いたり、スタッフと仲良くなります。<br>
                ・自分の名前や年齢など、「自分について」答えられ、書けるようになります。<br>
                ・大文字アルファベット、フォニックスの習得。 CVC（cup,map,dog,cat,など）のスペリングの習得。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                Wings Global Homeでは、2～3才でも文字教育を取り入れており、プリスクールのサークルタイムは、英語の4技能習得の「初めの一歩」となります。
                アルファベット、フォニックスの習得度、スペリングができる単語数をカウントし、今後の展望と併せて保護者にお伝えしています。
                文字を取り込むことで質の高い英語教育となり、その後のリーディング力を押し上げます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                個別レッスン。スタッフとマンツーマンで練習します。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Monthly Theme 17:00-17:15（15分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・毎月約15英単語を、オリジナル教材を使って語彙、フレーズを記憶し、練習します。<br>
                ・月前半：語彙の積み上げ・スペリングの習得をします。<br>
                ・月後半：前半で学習した単語が含まれる英語フレーズ（過去形、進行形、前置詞、冠詞なども含め）を記憶し、言えるようになります。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                日本のこどもたちは外国語に触れる機会が圧倒的に少ないため、語彙の積み上げに力点を置くことが重要だと考えます。Wings Global Homeではオリジナル教材によって語彙の積み上げを継続的に行う事で、こどもたちの英語力発達の下支えとなります。 また、第2言語を習得する場合は日本語を習得するように、文を塊でインプットする事が重要です。 前置詞の使い方や冠詞、不定詞などの文法的な説明は最低限に止め、理屈抜きで塊で多量に覚えていく事が「Reading」「Speaking」スキルの向上につながります。 経過年数と共に、記憶する能力そのものが育ち、全ての単語／フレーズを記憶する為に必要な時間数が徐々に低減していき、数回聞けば覚えられるようになっていき、英語習得以外の学習能力の向上にもつながります。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                お子様の英語のレベルによって、生徒10～15名につきスタッフ2～3名を配置します。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Activity Time 17:15-18:00（45分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・室内外における英語での教育的遊びをします。<br>
                ・アートや工作、ゲーム、外遊びなどバラエティに富んだ遊びのカリキュラムを体験する中で、Listening、Speaking Skill などを習得します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                こども達の行動力/集中力を引き出す「楽しい遊び」を種類豊富に提供しています。こども達はその体験を通して英語によるコミュニケーションの回数を自然と重ねていきます。 INPUTの学習が大いに生きる場面となり、こども自身も相手と相互理解ができる「通じる言葉」として実感することができるようになります。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                基本的には年齢別にグループ分けをしていますが、内容によって調整しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>DVD Time 18:00-18:15（15分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・動画を教材として、英語の表現方法、登場人物の感情表現、ストーリー全体の理解ができるようにします。<br>
                ・日常の生活では経験することがない状況の英語表現を、動画を通して学習します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                日常の生活では経験することが少ない、崖から落ちる、飛行機がぶつかるが助かる、などこども向けに作られた動画を駆使し、登場人物の感情の抑揚や場面の説明の仕方などの英語表現を学習します。また英語は日本語と比較すると語彙数が非常に多く、同義語も多数存在します。微妙な意味の違いを伝えるために動画は適切な教材と考えます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                基本的にはコースごとに1グループになります。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Goodby Time 18:15-18:30</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・ランチの後はお迎えタイムになります。「Did you finish your lunch？」という質問に「Yes, I did.」と答えられればご褒美シールがもらえます。<br>
                ・お帰りの支度も全て自分でできるように見守っています。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ご褒美シールはこどもたちにとってとても魅力的なご褒美。<br>
                シールが欲しくてまた頑張る、その気持ちを大切に育てていく事で、「自立」「また頑張る気持ち」「悔しさ」「自信」など、非認知スキルを育てます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                先生が個別に見送ります。
              </p>
            </div>
          </li>
        </ul>

      <!--1日の流れ：エレメンタリーコース -->
      <?php elseif(is_page('elementary')): ?>
        <ul class="sec_flow__list delayScroll">
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Free Time 14:30-15:30（60分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・家庭での日本語から英語に切り替えるための時間。<br>
                ・スナック／玩具で遊ぶ／DVD鑑賞から自分で選択し自主的に過ごします。<br>
                ・時間配分や、何を選択するかはこどもたちが自由に決定し行動することで意思決定力を育成します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                選ぶ数や項目には個性が現れ、画一的な教育環境ではなく、自分の意志で選択することができる教育環境をこども達に提供していく事で、取り組むことの楽しさ、積極性などを育みます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                特にグループ分けはありません。生徒5名につきスタッフ1名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Snack Time 15:30-16:00（30分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・おやつの時間です。（手洗い、用意、片付けを含む）<br>
                ・お子様自身で、手洗い⇒おやつの用意⇒後片付け、の順をスムーズに行えるようになります。<br>
                ・おやつ／水筒を配る、テーブルを拭く、など「係のお仕事」をする事で「人の為に役立つ経験」をします。<br>
                ・係のお仕事を自発的に英語で行うことで、こども間で英語フレーズが行きかう初めのシーンとなります。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                係の仕事は、「人の為に行動する」という貴重な経験です。係のお仕事を通じて人の役に立つ感覚を体験してもらい、たくさん褒めることでお子様の自立心を育てます。例えば水筒を配る係では、「Whose is this?」⇒「It’s mine.」⇒「Here you are!」⇒「Thank you!」と、こども間で英語が行きかいます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                お子様の性格や様子によって、スタッフが配席します。生徒数10～15名につきスタッフ1～2名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Song Time 16:00-16:15（15分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・欧米の幼児向けの歌を楽しく歌い、英単語・フレーズを身につけます。（ABC、数、色、形、動物、季節、曜日、月の名前etc）<br>
                ・歌を楽しく歌う事で、アクセントやフレーズなどが自然に楽しく身につきます。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                こども達は皆歌が大好き。英語の歌や音楽で歌ったり、踊ったりすることで、Wings Global Homeでの時間を楽しんでもらうことで英語習得の効果をアップします。<br>
                また幼児向けの歌は、正しいアクセントで作られているので、歌が歌えることで正しいアクセントで単語やフレーズを習得でき、英語習得にとても効果が高いです。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                特にグループ分けはありません。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Circle Time 16:15-17:00（45分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・一人一人、ホワイトボードの前で質問をしていきます。お子様は自分で名前、年齢を書いたり、スタッフと仲良くなります。<br>
                ・自分の名前や年齢など、「自分について」答えられ、書けるようになります。<br>
                ・大文字アルファベット、フォニックスの習得。 CVC（cup,map,dog,cat,など）のスペリングの習得。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                Wings Global Homeでは、2～3才でも文字教育を取り入れており、プリスクールのサークルタイムは、英語の4技能習得の「初めの一歩」となります。
                アルファベット、フォニックスの習得度、スペリングができる単語数をカウントし、今後の展望と併せて保護者にお伝えしています。
                文字を取り込むことで質の高い英語教育となり、その後のリーディング力を押し上げます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                個別レッスン。スタッフとマンツーマンで練習します。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Monthly Theme 17:00-17:15（15分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・毎月約15英単語を、オリジナル教材を使って語彙、フレーズを記憶し、練習します。<br>
                ・月前半：語彙の積み上げ・スペリングの習得をします。<br>
                ・月後半：前半で学習した単語が含まれる英語フレーズ（過去形、進行形、前置詞、冠詞なども含め）を記憶し、言えるようになります。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                日本のこどもたちは外国語に触れる機会が圧倒的に少ないため、語彙の積み上げに力点を置くことが重要だと考えます。Wings Global Homeではオリジナル教材によって語彙の積み上げを継続的に行う事で、こどもたちの英語力発達の下支えとなります。 また、第2言語を習得する場合は日本語を習得するように、文を塊でインプットする事が重要です。 前置詞の使い方や冠詞、不定詞などの文法的な説明は最低限に止め、理屈抜きで塊で多量に覚えていく事が「Reading」「Speaking」スキルの向上につながります。 経過年数と共に、記憶する能力そのものが育ち、全ての単語／フレーズを記憶する為に必要な時間数が徐々に低減していき、数回聞けば覚えられるようになっていき、英語習得以外の学習能力の向上にもつながります。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                お子様の英語のレベルによって、生徒10～15名につきスタッフ2～3名を配置します。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Activity Time 17:15-18:00（45分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・室内外における英語での教育的遊びをします。 <br>
                ・アートや工作、ゲーム、外遊びなどバラエティに富んだ遊びのカリキュラムを体験する中で、Listening、Speaking Skill などを習得します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                こども達の行動力/集中力を引き出す「楽しい遊び」を種類豊富に提供しています。こども達はその体験を通して英語によるコミュニケーションの回数を自然と重ねていきます。 INPUTの学習が大いに生きる場面となり、こども自身も相手と相互理解ができる「通じる言葉」として実感することができるようになります。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                基本的には年齢別にグループ分けをしていますが、内容によって調整しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>DVD Time 18:00-18:15（15分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・動画を教材として、英語の表現方法、登場人物の感情表現、ストーリー全体の理解ができるようにします。<br>
                ・日常の生活では経験することがない状況の英語表現を、動画を通して学習します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                日常の生活では経験することが少ない、崖から落ちる、飛行機がぶつかるが助かる、などこども向けに作られた動画を駆使し、登場人物の感情の抑揚や場面の説明の仕方などの英語表現を学習します。また英語は日本語と比較すると語彙数が非常に多く、同義語も多数存在します。微妙な意味の違いを伝えるために動画は適切な教材と考えます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                基本的にはコースごとに1グループになります。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Goodby Time 18:15-18:30</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・ランチの後はお迎えタイムになります。「Did you finish your lunch？」という質問に「Yes, I did.」と答えられればご褒美シールがもらえます。<br>
                ・お帰りの支度も全て自分でできるように見守っています。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ご褒美シールはこどもたちにとってとても魅力的なご褒美。<br>
                シールが欲しくてまた頑張る、その気持ちを大切に育てていく事で、「自立」「また頑張る気持ち」「悔しさ」「自信」など、非認知スキルを育てます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                先生が個別に見送ります。
              </p>
            </div>
          </li>
        </ul>

      <!--1日の流れ：アドバンスドコース -->
      <?php elseif(is_page('advanced')): ?>
        <ul class="sec_flow__list delayScroll">
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Homework check Time 18:00-18:10（10分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・毎回出される課題は前回の授業で学んだ文法とリーディングまたはライティングなど。学んだことが定着しているかどうか宿題を通してチェックし、先生から個別に丁寧なフィードバックをもらいます。<br>
                ・先生からの解説と反復練習をすることで学んだ知識や考え方、ノウハウを長期的に定着させます。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・先生は一人一人の宿題を見て、きめ細かなフィードバックをします。そのため生徒の疑問点を残したまま授業を進めません。<br>
                ・特にライティングの宿題の場合は、先生が一人一人の文章校正をして個別に解説をし、生徒が書き直すことで、着実なライティング力の向上を可能にします。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Vocabulary Time 18:10-18:30（20分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・毎レッスンで新しい単語と品詞を全て英語で学び、定期的に小テストを行います。<br>
                ・授業で使う英語教材ではテーマ別で単語がまとめられているため、関連した単語も一緒に記憶することができます。また単語ごとに例文を自分で考え、例文と一緒に暗記することで、「自分の言葉」として長期的に記憶します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・幅広い単語を学ぶことで、さまざまなトピックを扱う英語入試や資格にも柔軟に対応できる力がつきます。<br>
                ・また、最初から意味を教えるのではなく、生徒に質問を投げかけながら授業を進めることで、生徒の、英語で言い換える力が伸び、よりネイティブに近い英語に発展していくと考えます。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Grammar Time 18:30-18:55（25分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                基礎から応用まで多様な文法を英語で学習します。最初から教材に頼るのではなく、先生と生徒同士の議論を通して、文法を深掘りしていきます。さらに学んだ文法を用いて、自分で例文を作る練習をします。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・文法はエッセイを書くに当たって必要不可欠なスキルでありながら、苦手意識を持つお子様は少なくありません。このコースでは教材とにらめっこをするのではなく、先生とこども同士で”WHY？”を聞き合いながら授業を進めるため、より文法を正しく、深く理解できます。<br>
                ・また英語でインプットした文法を、自力で自分の言葉にしてアウトプットすることを繰り返すことで「使える文法」になっていくと考えます。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Game Time 18:55-19:05（10分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                インプットの学習が活かされる英語でのゲームを行います。例えば生徒が一文ずつ書き、クラス全体で物語を作ったり、単語のスペルを当てる競争をしたり〜。学習の要素をゲーム化することで他の生徒と協力したり競争したりしながら自主的に学びます。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・ゲームを通じ、五感を使って学んだことを復習することで、コミュニケーション力だけでなく発想力や発信力を自然と伸ばします。<br>
                ・一般的な英語塾と違って「答えを教わるだけの受け身の学習」ではなく、英語でのゲームやディスカッションを通し、積極的・能動的な学習を促すことで、効率的に英語が上達すると考えています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Reading/Writing Time 19:05-19:30（25分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・アドバンストプラスコースではリーディングやライティングに関してもこどもたちが主体となって学習を進める「実践的な学び」を心がけています。<br>
                ・リーディングでは多様な英文教材をクラス全体で読み、先生と生徒間でのディスカッションを通して、英文内容や著者の目的を深読みします。またライティングではフィクション、ノンフィクションの短いパラグラフ（段落）を書くところから、複数パラグラフを用いたエッセイライティングを自力で書けるようになるまで丁寧かつ徹底した指導を行います。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・毎週必ず行う自由作文は先生からのフィードバックをもらうことで、より長期的なライティングスキルの向上を目指します。<br>
                ・多読を通じてたくさんの表現や語彙に触れ、学んだことを声に出したり、書いたりすることで、より「自分の英語」として吸収されると考えます。日々のディスカッションを通して、他の生徒の考え方や意見に触れることで、それを土台に、より批判的に自分の意見を組み立て説明する力が伸びると考えます。
              </p>
            </div>
          </li>
        </ul>

      <!--1日の流れ：ビーアイキンダーコース -->
      <?php elseif(is_page('kinder_bilingual')): ?>
        <ul class="sec_flow__list delayScroll">
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Work Time 8:00-9:00（60分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・Wings Global Homeでは、「自立していて、有能で、責任感と他人への思いやりがあり、生涯学び続ける姿勢を持った人間を育てること」を目的とした、モンテッソーリ教育のプログラムであるWork Timeを英語で取り入れています。<br>
                ・このWork Time は、お子様が自身で玩具を選び、遊び方の工夫を自らがくり返しながらおもちゃに夢中になっていく時間です。この時間がお子様の「自己教育力」を育成すると考えます。<br>
                ・登園したお子様から、マンツーマン音読レッスンを受講します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                モンテッソーリ教育では、大人の手を借りずひとりで物事をこなしてみたくなる時期を敏感期と呼びます。このWork Timeでは感覚器官がほぼ発達を遂げる幼児期に現れる「感覚の敏感期」を利用し、教具を操作することを通して「ものを観察する能力」と「ものを考える方法」とを身につけるようにします。「言語・算数・英語」の各感覚が自然と育つ知育玩具を用いて、子供達は一人遊びに夢中になる時間です。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                お子様は自分の好きな知育玩具を使い、静かに一人遊びに集中します。<br>
                先生は静かに子供達を見守り、必要に応じてサポートします。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Snack Time 9:00-10:00（60分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・おやつの時間です。（手洗い、用意、片付けを含む）<br>
                ・お子様自身で、手洗い⇒おやつの用意⇒後片付け、の順をスムーズに行えるようになります。<br>
                ・テーブルを拭いたりスナックタイムの準備を行う「係のお仕事」を担っている子供は、「人の為に役立つ経験」をします。<br>
                ・係のお仕事を自発的に英語で行うことで、子供同士で英語の会話が行きかう場面を創出します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・ただスナックを食べるだけの時間ではなく、係のお仕事などを通して「人の為に行動する」という貴重な経験を積むことができます。<br>
                ・係のお仕事を通じて人の役に立つ感覚を体験し、たくさん褒めらることでお子様の自己肯定感が育まれます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                生徒数10～15名につきスタッフ3～4名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Circle Time 10:00-11:00（60分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・英語による「読解力の育成」の下支えになる、非常に重要な教育プログラムです。<br>
                ・お子様の挙手数など、学びに対する積極性に対してスペシャルスティッカーが与えられ、お子様の努力を可視化しています。<br>
                ・アルファベット、フォニックス、スペリングの練習をくり返し行います。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・英語による「読解力の育成」の下支えになる、非常に重要な時間です。<br>
                ・本を英語でスラスラ読めるようになるためには、70種類以上あるフォニックスのルールを単に記憶するのではなく、体得することが必要です。<br>
                ・お子様はスペシャルスティッカーが動機付けとなり積極的にプログラムに取り組むことができ、フォニックスのルールを自然と体得することができます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                少人数制のグループレッスンとして、生徒５～６名にスタッフが1名配置されます。<br>
                グループは英語のレベル別になります。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Outdoor Time 11:00-12:15（75分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                子供たちは毎日公園に出かけ、お友達や先生と時間も忘れて遊びます。外遊びは子どもの脳や体の発達を促すとともに世界を広げる絶好の機会となります。<br>様々な国から来た先生と一緒に走ったり遊んだり、時には甘えたりしながら身近な存在として関係を築きます。そのような時間を通して人とのつながりを体感し、グローバルな感覚が自然と身につき多様な人間関係を学ぶ事ができます。（天候により室内で行う場合もございます。）
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                外遊びは子どもの脳や体の発達を促すとともに、基礎体力や運動能力が向上し、コミュニケーション能力を発達させます。また失敗経験から学習できる、といった多くのメリットを得られます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                ・お子様の年齢に合わせ生徒10〜15名グループとして、スタッフ3～5名を配置します。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Lunch Time 12:15-13:00（45分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・ランチタイムをリードする係りのお仕事を担っている生徒により、準備、配膳、手洗いなどと準備が進みます。子供たちは自主的に行動します。<br>
                ・食事中のマナーとして立ち歩かず、最後まで自分で食べられるようにスタッフから声掛けを行います。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・食育として、まず 完食するよう指導します。完食した子供達にはご褒美スティッカーを与え、子供達が達成感、喜びを実感できるようにします。<br>
                ・係のお仕事は、「人の為に行動する」という貴重な経験です。係のお仕事を通じて人の役に立つ体験をし、感謝されることでお子様の社会性を育成します。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                生徒数10～15名につきスタッフ3～4名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Learning Time  13:00-14:00（60分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・幼児教育を英語で行うイマージョン教育プログラムです。<br>
                ・英語で数、図形、理科、社会、などを、遊びを通して英語で学習します。<br>
                ・幼児向けワークシートを使い、学習に向かう姿勢を育成する就学前教育プログラムとしてご提供します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・一生の中で成長速度が最も早く、その後失われていく幼児期の自然習得の力をフルに活用することがお子様の人生に大いに貢献すると考えています。幼児期に数概念、時間概念、図形感覚、サイエンスやソーシャルスタディ等の知育を英語で行うイマージョン教育を受講すれば、通常の英会話レッスンでは到達し得ない高度な認知、学力面での英語力を身につけることができます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                学年、英語レベル別として生徒５～７名に対しスタッフ1名が配置されます。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Nap Time 14:00-15:00（60分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・午後からの活動に備え、身体を休めるお昼寝の時間です。<br>
                ・お昼寝を必要としないお子様は休憩する時間として、絵本の読み聞かせ、お絵描き、文字練習、などをしながら過ごします。<br>
                ・ご家庭と連携しながら個別に対応致します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・お昼寝や休憩を取ると、脳や体の疲れが和らぎ、午後からの集中力が回復します。<br>
                ・集中力が午後からも継続できれば、午後以降の教育プログラムがより効果を発揮します。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                ・生徒数10～15名につきスタッフ1～2名を配置します。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Snack Time 15:00-16:00（60分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・おやつの時間です。（手洗い、用意、片付けを含む）<br>
                ・お子様自身で、手洗い⇒おやつの用意⇒後片付け、の順をスムーズに行えるようになります。<br>
                ・テーブルを拭いたりスナックタイムの準備を行う「係のお仕事」を担っている子供は、「人の為に役立つ経験」をします。<br>
                ・係のお仕事を自発的に英語で行うことで、子供同士で英語の会話が行きかう場面が創出されます。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                単にスナックを食べるだけの時間ではなく、係のお仕事などを通して「人の為に行動する」という貴重な経験を積むことができます。<br>
                係のお仕事を通じて人の役に立つ感覚を体験し、たくさん褒めらることでお子様の成功体験から自立ん心を育てます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                生徒数10～15名につきスタッフ3～4名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Activity Time 16:00-18:00（120分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・室内外における英語での教育的遊びを行います<br>
                ・アートや工作、ゲーム、外遊びなどバラエティに富んだ遊びのカリキュラムを体験する中で、聞いたり話したりするスキルなどを獲得します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・子供達の行動力/集中力を引き出す「楽しい遊び」を種類豊富に提供しています。<br>
                ・子供達は体験を通して英語によるコミュニケーションの回数を自然と重ねていきます。<br>
                ・ INPUTの学習が大いに活きる場面となり、子供自身も相手と相互理解ができる「通じる言葉」として実感することができるようになります。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                基本的には年齢別にグループ分けをしていますが、内容によって調整しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Presentation Time 18:00-18:30（30分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・子どもたちの「生きる力」にもつながるプレゼン力を育み、自信につなげる時間です。<br>
                ・プレゼン力は『技術』であり、練習すれば誰でも身につける事ができます。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・人前で意見を発表する機会が日常多く与えられている子供たちは、自然とプレゼン力が鍛えられます。<br>
                ・しっかり声を出す癖をつける。人の目を見て話す。<br>
                ・英語のアウトプットを通して、プレゼンの「型」を、まず身につけます。<br>
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                基本的にはコースごとに1グループになります。
              </p>
            </div>
          </li>
        </ul>
        <!-- <ul class="sec_flow__list delayScroll">
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Free Time 8:00-8:30（30分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・家庭での日本語から、英語環境に自然と切り替えることができる時間です。<br>
                ・お子様の自立を促す為、自分の荷物の管理から一日はスタートします。<br>
                ・登園したお子様から、マンツーマン音読レッスンを受講します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・お子様の自立を促す保育を英語で行っています。<br>
                ・マンツーマンレッスンでは英語で本が読めるようになる音読プログラムをご提供し、着実にステップが上がるように指導しています。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                ・特にグループ分けはありません。生徒５～６名に対しスタッフ１名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Work Time (1)  8:30-9:15（45分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・Wings Global Homeでは、「自立していて、有能で、責任感と他人への思いやりがあり、生涯学び続ける姿勢を持った人間を育てること」を目的とした、モンテッソーリ教育のプログラムであるWork Timeを英語で取り入れています。<br>
                ・このWork Time は、お子様が自身で玩具を選び、遊び方の工夫を自らがくり返しながらおもちゃに夢中になっていく時間です。この時間がお子様の「自己教育力」を育成すると考えます。<br>
                ・登園したお子様から、マンツーマン音読レッスンを受講します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                モンテッソーリ教育では、大人の手を借りずひとりで物事をこなしてみたくなる時期を敏感期と呼びます。このWork Timeでは感覚器官がほぼ発達を遂げる幼児期に現れる「感覚の敏感期」を利用し、教具を操作することを通して「ものを観察する能力」と「ものを考える方法」とを身につけるようにします。「言語・算数・英語」の各感覚が自然と育つ知育玩具を用いて、子供達は一人遊びに夢中になる時間です。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                お子様は自分の好きな知育玩具を使い、静かに一人遊びに集中します。<br>
                先生は静かに子供達を見守り、必要に応じてサポートします。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Snack Time 9:15-10:00（45分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・おやつの時間です。（手洗い、用意、片付けを含む）<br>
                ・お子様自身で、手洗い⇒おやつの用意⇒後片付け、の順をスムーズに行えるようになります。<br>
                ・テーブルを拭いたりスナックタイムの準備を行う「係のお仕事」を担っている子供は、「人の為に役立つ経験」をします。<br>
                ・係のお仕事を自発的に英語で行うことで、子供同士で英語の会話が行きかう場面を創出します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・ただスナックを食べるだけの時間ではなく、係のお仕事などを通して「人の為に行動する」という貴重な経験を積むことができます。<br>
                ・係のお仕事を通じて人の役に立つ感覚を体験し、たくさん褒めらることでお子様の自己肯定感が育まれます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                生徒数10～15名につきスタッフ3～4名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Circle Time 10:00-10:30（30分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・英語による「読解力の育成」の下支えになる、非常に重要な教育プログラムです。<br>
                ・お子様の挙手数など、学びに対する積極性に対してスペシャルスティッカーが与えられ、お子様の努力を可視化しています。<br>
                ・アルファベット、フォニックス、スペリングの練習をくり返し行います。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・英語による「読解力の育成」の下支えになる、非常に重要な時間です。<br>
                ・本を英語でスラスラ読めるようになるためには、70種類以上あるフォニックスのルールを単に記憶するのではなく、体得することが必要です。<br>
                ・お子様はスペシャルスティッカーが動機付けとなり積極的にプログラムに取り組むことができ、フォニックスのルールを自然と体得することができます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                少人数制のグループレッスンとして、生徒５～６名にスタッフが1名配置されます。<br>
                グループは英語のレベル別になります。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Monthly Theme 10:30-10:45（15分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・毎月約15英単語を、オリジナル教材を使って語彙/フレーズの練習をします。<br>
                ・月前半：語彙の積み上げ・スペリングの習得<br>
                ・月後半：前半で学習した単語が含まれる英語フレーズ（過去形、進行形、前置詞、冠詞なども含め）の習得
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                日本の子供たちは外国語に触れる機会が圧倒的に少ないため、語彙の積み上げの練習が必要です。<br>
                子供たちがより多くの語彙を獲得する為に、オリジナル教材を作成しています。<br>
                英単語をバラバラに覚えるのではなく、文章としてインプットする事で文法も自然と習得し、「読む」「話す」スキルの向上へとつながります。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                お子様の英語のレベルによる生徒10～15名グループとして、スタッフ2～3名を配置します。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Physical Education Time 10:45-11:30（45分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・幼児期に必要な基礎的な動きを身につける、外遊びの運動プログラムです。（天候により室内で行う場合もございます。）<br>
                ・体を動かす遊びを通して、日常的な動作/立つ・歩く・持ち上げる、スポーツの基礎/走る、飛ぶ、投げるなどの多様な動きを身につけます。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・神経系機能の発達が著しい幼児期・児童期は、動きの獲得やその質の向上に最も適した時期です。したがって、この時期に多様な動きを経験し、さまざまな基礎的動きを身につけることが重要です。<br>
                ・運動プログラムを通し、子供たちの個性と自主性を尊重しスタッフとともに考えながら取り組む事で、子どもたちとの信頼関係を築くことができます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                ・お子様の年齢に合わせ生徒10～15名グループとして、スタッフ2～3名を配置します。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Lunch Time 11:30-12:30（60分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・ランチタイムをリードする係りのお仕事を担っている生徒により、準備、配膳、手洗いなどと準備が進みます。子供たちは自主的に行動します。<br>
                ・食事中のマナーとして立ち歩かず、最後まで自分で食べられるようにスタッフから声掛けを行います。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・食育として、まず 完食するよう指導します。完食した子供達にはご褒美スティッカーを与え、子供達が達成感、喜びを実感できるようにします。<br>
                ・係のお仕事は、「人の為に行動する」という貴重な経験です。係のお仕事を通じて人の役に立つ体験をし、感謝されることでお子様の社会性を育成します。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                生徒数10～15名につきスタッフ3～4名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Nap Time 12:30-13:30（60分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・午後からの活動に備え、身体を休めるお昼寝の時間です。<br>
                ・お昼寝を必要としないお子様は休憩する時間として、絵本の読み聞かせ、お絵描き、文字練習、などをしながら過ごします。<br>
                ・ご家庭と連携しながら個別に対応致します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・お昼寝や休憩を取ると、脳や体の疲れが和らぎ、午後からの集中力が回復します。<br>
                ・集中力が午後からも継続できれば、午後以降の教育プログラムがより効果を発揮します。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                ・生徒数10～15名につきスタッフ1～2名を配置します。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Job Chart＆Sticker Time / Walking time 13:30-14:15（45分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・その他の係のお仕事に取り組みます。<br>
                ・お子様の自信につながるご褒美スティッカーや宝物が配られます。<br>
                ・お昼寝後の軽い運動として、スクール周りを散歩する事もあります。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・お子様の努力をご褒美として可視化する事で、成功体験として自覚し自己肯定感がお子様の心の中で育ちます。<br>
                ・午後クラスにより取り組めるよう、近隣を軽く散歩する事もあります。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                ・生徒数10～15名につきスタッフ２～３名を配置します。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Learning Time  14:15-15:15（60分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・幼児教育を英語で行うイマージョン教育プログラムです。<br>
                ・英語で数、図形、理科、社会、などを、遊びを通して英語で学習します。<br>
                ・幼児向けワークシートを使い、学習に向かう姿勢を育成する就学前教育プログラムとしてご提供します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・一生の中で成長速度が最も早く、その後失われていく幼児期の自然習得の力をフルに活用することがお子様の人生に大いに貢献すると考えています。幼児期に数概念、時間概念、図形感覚、サイエンスやソーシャルスタディ等の知育を英語で行うイマージョン教育を受講すれば、通常の英会話レッスンでは到達し得ない高度な認知、学力面での英語力を身につけることができます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                学年、英語レベル別として生徒５～７名に対しスタッフ1名が配置されます。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span> Snack Time 15:15-15:45（30分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・おやつの時間です。（手洗い、用意、片付けを含む）<br>
                ・お子様自身で、手洗い⇒おやつの用意⇒後片付け、の順をスムーズに行えるようになります。<br>
                ・テーブルを拭いたりスナックタイムの準備を行う「係のお仕事」を担っている子供は、「人の為に役立つ経験」をします。<br>
                ・係のお仕事を自発的に英語で行うことで、子供同士で英語の会話が行きかう場面が創出されます。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                単にスナックを食べるだけの時間ではなく、係のお仕事などを通して「人の為に行動する」という貴重な経験を積むことができます。<br>
                係のお仕事を通じて人の役に立つ感覚を体験し、たくさん褒めらることでお子様の成功体験から自立ん心を育てます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                生徒数10～15名につきスタッフ3～4名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>(16時までのお子様) Good-bye Time 15:45-16:00（15分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・子供たちは自分でお帰りの支度をし、保護者様のお迎えを待ちます。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・お子様が、今日も一日楽しかったと実感できるようにします。<br>
                ・スタッフと子供たちは、明日へのお約束ごとなどを確認し、明日の活動へつなげます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                Global Playground Plan（～午後16時）のお子様全員
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Song Time 16:00-16:15（15分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・英語のリズムや抑揚を歌を通して、感覚的に体得する時間です。<br>
                ・子供達が大好きなキャラクターが登場する歌や、伝統的な歌まで様々なジャンルの歌をうたいます。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・子供たちはリズミカルで抑揚のある歌が大好きです。<br>
                ・単に歌うのではなく、必ず歌詞をつけ読みながら歌うように習慣づけます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                ・特にグループ分けはありません。生徒10～15名に対しスタッフ3～4名を配置しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Work Time (2) 16:15-17:00（45分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・こちらのWork Timeでは、主にSTEM教育を中心とした知育玩具で遊びます。<br>
                ・お子様が自身で玩具を選び、遊び方の工夫を自らがくり返しながらおもちゃに夢中になっていく時間です。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・海外では積極的に導入されているSTEM。科学・技術・工学・数学の教育分野を総称した言葉です。<br>
                ・今後求められるのは、「新しい課題を自らこなす能力」や「新しいシステムを作る能力」。子供たちがstemを行うことで、小さな頃から論理的思考力や問題解決能力を育んだり、創造力を豊かにします。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                お子様は自分の好きな知育玩具を使い、静かに一人遊びに集中します。<br>
                先生は静かに子供達を見守り、必要に応じてサポートします。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Activity Time 17:00-18:00（60分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・室内外における英語での教育的遊びを行います<br>
                ・アートや工作、ゲーム、外遊びなどバラエティに富んだ遊びのカリキュラムを体験する中で、聞いたり話したりするスキルなどを獲得します。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・子供達の行動力/集中力を引き出す「楽しい遊び」を種類豊富に提供しています。<br>
                ・子供達は体験を通して英語によるコミュニケーションの回数を自然と重ねていきます。<br>
                ・ INPUTの学習が大いに活きる場面となり、子供自身も相手と相互理解ができる「通じる言葉」として実感することができるようになります。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                基本的には年齢別にグループ分けをしていますが、内容によって調整しています。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Presentation Time 18:00-18:15（15分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・子どもたちの「生きる力」にもつながるプレゼン力を育み、自信につなげる時間です。<br>
                ・プレゼン力は『技術』であり、練習すれば誰でも身につける事ができます。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ・人前で意見を発表する機会が日常多く与えられている子供たちは、自然とプレゼン力が鍛えられます。<br>
                ・しっかり声を出す癖をつける。人の目を見て話す。<br>
                ・英語のアウトプットを通して、プレゼンの「型」を、まず身につけます。<br>
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                基本的にはコースごとに1グループになります。
              </p>
            </div>
          </li>
          <li class="sec_flow__item">
            <div class="sec_flow__item-time">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/flow_time.svg" alt="">
              <span>Goodby Time 18:15-18:30（15分）</span>
            </div>
            <div class="sec_flow__item-contents">
              <p class="sec_flow__item-text">
                ●プログラム概要<br>
                ・その日に一番頑張って発言したお子様にご褒美シールをプレゼントし、頑張ったことを褒めます。<br>
                ・お帰りの支度も全て自分でします。
              </p>
              <p class="sec_flow__item-text">
                ●ポイント<br>
                ご褒美シールは子供達にとって、努力の証。<br>
                シールが欲しくてまた頑張る、その気持ちを大切に育てていく事で、「自尊心」「継続力」「向上心」など、非認知スキルを育てます。
              </p>
              <p class="sec_flow__item-text">
                ●グループ<br>
                生徒約10名につき、スタッ1〜2名を配置します。
              </p>
            </div>
          </li>
        </ul> -->
      <?php else: ?>
        
      <?php endif; ?>
    </div>
  </section>

  <!-- sec_price -->
  <section class="sec_price">
    <div class="sec_price__inner section__inner section__inner-s">
      <div class="sec_price__title section__title section__title--center fadeIn">
        <?php if(is_page('kinder_bilingual')): ?>
          <h2 class="sec_price__title-main section__title-main"><span>料金について</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/icon_sec_price.svg" alt=""></h2>
        <?php else: ?>
          <h2 class="sec_price__title-main section__title-main"><span>月極料金</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/icon_sec_price.svg" alt=""></h2>
        <?php endif; ?>
        <p class="sec_price__title-sub section__title-sub">Price</p>
      </div>

      <?php if(is_page('bilingual')): ?>

        <!-- <p class="sec_price__list-title fadeIn">バイリンガルコース（10:00～14:00）の料金<br>※9:30〜10:00延長無料</p> -->
        <ul class="sec_price__list delayScroll">
          <li class="sec_price__item">
            <div class="sec_price__item-upper sec_price__item-upper--l">
              <p class="sec_price__item-upper-days">2日/週</p>
              <p class="sec_price__item-upper-yen sec_price__item-upper-yen--pt">¥43,600<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥21,800</p>
            </div>
          </li>
          <li class="sec_price__item">
            <div class="sec_price__item-upper sec_price__item-upper--l">
              <p class="sec_price__item-upper-days">3日/週</p>
              <p class="sec_price__item-upper-yen sec_price__item-upper-yen--pt">¥59,400<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥19,800</p>
            </div>
          </li>
          <li class="sec_price__item">
            <div class="sec_price__item-upper sec_price__item-upper--l">
              <p class="sec_price__item-upper-days">4日/週</p><br>
              <p class="sec_price__item-upper-yen--delete">¥72,200</p>
              <p class="sec_price__item-upper-yen">¥59,400<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower sec_price__item-lower--asterisk">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥14,850</p>
            </div>
          </li>
          <li class="sec_price__item">
            <div class="sec_price__item-upper sec_price__item-upper--l">
              <p class="sec_price__item-upper-days">5日/週</p><br>
              <p class="sec_price__item-upper-yen--delete">¥82,000</p>
              <p class="sec_price__item-upper-yen">¥59,400<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower sec_price__item-lower--asterisk">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥11,880</p>
            </div>
          </li>
        </ul>
        <p class="sec_price__item-note fadeIn">
        <span>*割引は２０２４年３月までに入会された生徒に適用</span><br>
        *1週間あたりの日数が増えるにつれて1回あたりの料金がお安くなっております。<br>*入園(入会)時に別途入会金¥70,000(税別)がかかります。
        <!-- <br> -->
        <!-- *延長料金につきましては、年齢で金額が異なりますが全てのコースにおいて同一の金額となっております。 -->
        </p>

        <!-- <p class="sec_price__list-title fadeIn">バイリンガルコース(10:00～14:00)＋<br>中延長無料＋午後キンダー(15:00〜18:30)</p> -->
        <!-- <ul class="sec_price__list delayScroll">
          <li class="sec_price__item">
            <div class="sec_price__item-upper sec_price__item-upper--l">
              <p class="sec_price__item-upper-days">2日/週</p>
              <p class="sec_price__item-upper-yen sec_price__item-upper-yen--pt">¥83,000<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥41,500</p>
            </div>
          </li>
          <li class="sec_price__item">
            <div class="sec_price__item-upper sec_price__item-upper--l">
              <p class="sec_price__item-upper-days">3日/週</p>
              <p class="sec_price__item-upper-yen sec_price__item-upper-yen--pt">¥112,500<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥37,500</p>
            </div>
          </li>
          <li class="sec_price__item">
            <div class="sec_price__item-upper sec_price__item-upper--l">
              <p class="sec_price__item-upper-days">4日/週</p><br>
              <p class="sec_price__item-upper-yen--delete">¥133,000</p>
              <p class="sec_price__item-upper-yen">¥112,500<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower sec_price__item-lower--asterisk">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥28,125</p>
            </div>
          </li>
          <li class="sec_price__item">
            <div class="sec_price__item-upper sec_price__item-upper--l">
              <p class="sec_price__item-upper-days">5日/週</p><br>
              <p class="sec_price__item-upper-yen--delete">¥153,500</p>
              <p class="sec_price__item-upper-yen">¥112,500<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower sec_price__item-lower--asterisk">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥22,500</p>
            </div>
          </li>
        </ul> -->
        <!-- 
        <p class="sec_price__list-title fadeIn">
          バイリンガルコース(10:00～14:00)＋中延長無料<br class="sp_only">
          ＋午後キンダー(15:00〜18:30)
        </p>
        <ul class="sec_price__list delayScroll">
          <li class="sec_price__item">
            <div class="sec_price__item-upper">
              <p class="sec_price__item-upper-days">2日/週</p>
              <p class="sec_price__item-upper-yen">¥83,000<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥41,500</p>
            </div>
          </li>
          <li class="sec_price__item">
            <div class="sec_price__item-upper">
              <p class="sec_price__item-upper-days">3日/週</p>
              <p class="sec_price__item-upper-yen">¥112,500<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥37,500</p>
            </div>
          </li>
          <li class="sec_price__item">
            <div class="sec_price__item-upper">
              <p class="sec_price__item-upper-days">4日/週</p>
              <p class="sec_price__item-upper-yen">¥112,500<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥28,125</p>
            </div>
          </li>
          <li class="sec_price__item">
            <div class="sec_price__item-upper">
              <p class="sec_price__item-upper-days">5日/週</p>
              <p class="sec_price__item-upper-yen">¥112,500<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥25,500</p>
            </div>
          </li>
        </ul> -->

      <?php elseif(is_page('advanced')): ?>

        <ul class="sec_price__list delayScroll">
          <!-- <li class="sec_price__item">
            <div class="sec_price__item-upper">
              <p class="sec_price__item-upper-days">1日/週</p>
              <p class="sec_price__item-upper-yen">¥23,100<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥23,100</p>
            </div>
          </li> -->
          <li class="sec_price__item">
            <div class="sec_price__item-upper">
              <p class="sec_price__item-upper-days">2日/週</p>
              <p class="sec_price__item-upper-yen">¥39,000<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥19,500</p>
            </div>
          </li>
          <!-- <li class="sec_price__item">
            <div class="sec_price__item-upper">
              <p class="sec_price__item-upper-days">2日/週</p>
              <p class="sec_price__item-upper-yen">¥42,500</p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥21,250</p>
            </div>
          </li>
          <li class="sec_price__item">
            <div class="sec_price__item-upper">
              <p class="sec_price__item-upper-days">2日/週</p>
              <p class="sec_price__item-upper-yen">¥42,500</p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥21,250</p>
            </div>
          </li> -->
        </ul>

      <?php elseif(is_page('kinder_bilingual')): ?>

        <!-- <ul class="sec_price__list delayScroll">
          <li class="sec_price__item">
            <div class="sec_price__item-upper">
              <p class="sec_price__item-upper-days">5日/週<br>(8:00 ~ 16:00)</p>
              <p class="sec_price__item-upper-yen">¥123,750</p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower sec_price__item-lower--kb">
              <p class="sec_price__item-lower-text">消費税非課税</p>
            </div>
          </li>
          <li class="sec_price__item">
            <div class="sec_price__item-upper">
              <p class="sec_price__item-upper-days">5日/週<br>(8:00 ~ 18:30)</p>
              <p class="sec_price__item-upper-yen">¥145,000</p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower sec_price__item-lower--kb">
              <p class="sec_price__item-lower-text">消費税非課税</p>
            </div>
          </li>
        </ul> -->

        <div class="sec_price__table fadeIn">
          <div class="sec_price__table-inner">
            <table>
              <tr>
                <th class="sec_price__table-blank sec_price__table-gray">時間枠</th>
                <th class="sec_price__table-orange sec_price__table-orange--01">保育料金</th>
                <th class="sec_price__table-orange sec_price__table-orange--02">実質保育料金額</th>
              </tr>
              <tr>
                <td class="sec_price__table-item">
                  <span>5日/週(8:00 - 16:00)</span>
                </td>
                <td>¥123,750</td>
                <td>¥46,750*</td>
              </tr>
              <tr>
                <td class="sec_price__table-item">
                  <span>5日/週(8:00 - 18:30)</span>
                </td>
                <td>¥145,000</td>
                <td class="sec_price__table-last_td">¥68,000*</td>
              </tr>
            </table>
            <div class="sec_price__table-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/kinder_bilingual/icon_table.svg" alt=""></div>
          </div>
        </div>

      <?php elseif(is_page('elementary')): ?>

        <ul class="sec_price__list delayScroll">
          <li class="sec_price__item">
            <div class="sec_price__item-upper">
              <p class="sec_price__item-upper-days">2日/週</p>
              <p class="sec_price__item-upper-yen">¥42,500<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥21,250</p>
            </div>
          </li>
          <li class="sec_price__item">
            <div class="sec_price__item-upper">
              <p class="sec_price__item-upper-days">3日/週</p>
              <p class="sec_price__item-upper-yen">¥57,750<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥19,250</p>
            </div>
          </li>
          <li class="sec_price__item">
            <div class="sec_price__item-upper">
              <p class="sec_price__item-upper-days">4日/週</p>
              <p class="sec_price__item-upper-yen">¥70,000<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥17,500</p>
            </div>
          </li>
          <li class="sec_price__item">
            <div class="sec_price__item-upper">
              <p class="sec_price__item-upper-days">5日/週</p>
              <p class="sec_price__item-upper-yen">¥79,250<span>(税別)</span></p>
              <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
            </div>
            <div class="sec_price__item-lower">
              <p class="sec_price__item-lower-text">週1回あたり</p>
              <p class="sec_price__item-lower-yen">¥15,850</p>
            </div>
          </li>
        </ul>

      <?php else: //キンダーフレックス、プリスクール共通 ?>
        <?php
          $parent_page = get_post($post->post_parent); // 現在のページの親ページ情報を取得
          if ($parent_page) {
            $parent_slug = $parent_page->post_name; // 親ページのスラッグを取得
          ?>
            <?php
            switch ($parent_slug) {
              case 'ikejiri_old':
            ?>
              <ul class="sec_price__list delayScroll">
                <li class="sec_price__item">
                  <div class="sec_price__item-upper">
                    <p class="sec_price__item-upper-days">2日/週</p>
                    <p class="sec_price__item-upper-yen">¥46,750<span>(非課税)</span></p>
                    <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
                  </div>
                  <div class="sec_price__item-lower">
                    <p class="sec_price__item-lower-text">週1回あたり</p>
                    <p class="sec_price__item-lower-yen">¥23,375</p>
                  </div>
                </li>
                <li class="sec_price__item">
                  <div class="sec_price__item-upper">
                    <p class="sec_price__item-upper-days">3日/週</p>
                    <p class="sec_price__item-upper-yen">¥63,525<span>(非課税)</span></p>
                    <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
                  </div>
                  <div class="sec_price__item-lower">
                    <p class="sec_price__item-lower-text">週1回あたり</p>
                    <p class="sec_price__item-lower-yen">¥21,175</p>
                  </div>
                </li>
                <li class="sec_price__item">
                  <div class="sec_price__item-upper">
                    <p class="sec_price__item-upper-days">4日/週</p>
                    <p class="sec_price__item-upper-yen">¥77,000<span>(非課税)</span></p>
                    <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
                  </div>
                  <div class="sec_price__item-lower">
                    <p class="sec_price__item-lower-text">週1回あたり</p>
                    <p class="sec_price__item-lower-yen">¥19,250</p>
                  </div>
                </li>
                <li class="sec_price__item">
                  <div class="sec_price__item-upper">
                    <p class="sec_price__item-upper-days">5日/週</p>
                    <p class="sec_price__item-upper-yen">¥87,175<span>(非課税)</span></p>
                    <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
                  </div>
                  <div class="sec_price__item-lower">
                    <p class="sec_price__item-lower-text">週1回あたり</p>
                    <p class="sec_price__item-lower-yen">¥17,435</p>
                  </div>
                </li>
              </ul>
              <p class="sec_price__item-note  sec_price__item-note--mb0 fadeIn">
                *月謝料金に消費税はかかりません。
              </p>
            <?php
              break;
              case 'gakugei_old':
            ?>
              <ul class="sec_price__list delayScroll">
                <li class="sec_price__item">
                  <div class="sec_price__item-upper">
                    <p class="sec_price__item-upper-days">2日/週</p>
                    <p class="sec_price__item-upper-yen">¥42,500<span>(税別)</span></p>
                    <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
                  </div>
                  <div class="sec_price__item-lower">
                    <p class="sec_price__item-lower-text">週1回あたり</p>
                    <p class="sec_price__item-lower-yen">¥21,250</p>
                  </div>
                </li>
                <li class="sec_price__item">
                  <div class="sec_price__item-upper">
                    <p class="sec_price__item-upper-days">3日/週</p>
                    <p class="sec_price__item-upper-yen">¥57,750<span>(税別)</span></p>
                    <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
                  </div>
                  <div class="sec_price__item-lower">
                    <p class="sec_price__item-lower-text">週1回あたり</p>
                    <p class="sec_price__item-lower-yen">¥19,250</p>
                  </div>
                </li>
                <li class="sec_price__item">
                  <div class="sec_price__item-upper">
                    <p class="sec_price__item-upper-days">4日/週</p>
                    <p class="sec_price__item-upper-yen">¥70,000<span>(税別)</span></p>
                    <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
                  </div>
                  <div class="sec_price__item-lower">
                    <p class="sec_price__item-lower-text">週1回あたり</p>
                    <p class="sec_price__item-lower-yen">¥17,500</p>
                  </div>
                </li>
                <li class="sec_price__item">
                  <div class="sec_price__item-upper">
                    <p class="sec_price__item-upper-days">5日/週</p>
                    <p class="sec_price__item-upper-yen">¥79,250<span>(税別)</span></p>
                    <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
                  </div>
                  <div class="sec_price__item-lower">
                    <p class="sec_price__item-lower-text">週1回あたり</p>
                    <p class="sec_price__item-lower-yen">¥15,850</p>
                  </div>
                </li>
              </ul>
            <?php
              break;
              default:
                // デフォルトの処理はここに書く
              ?>
                <ul class="sec_price__list delayScroll">
                <li class="sec_price__item">
                  <div class="sec_price__item-upper">
                    <p class="sec_price__item-upper-days">2日/週</p>
                    <p class="sec_price__item-upper-yen">¥46,750<span>(非課税)</span></p>
                    <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
                  </div>
                  <div class="sec_price__item-lower">
                    <p class="sec_price__item-lower-text">週1回あたり</p>
                    <p class="sec_price__item-lower-yen">¥23,375</p>
                  </div>
                </li>
                <li class="sec_price__item">
                  <div class="sec_price__item-upper">
                    <p class="sec_price__item-upper-days">3日/週</p>
                    <p class="sec_price__item-upper-yen">¥63,525<span>(非課税)</span></p>
                    <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
                  </div>
                  <div class="sec_price__item-lower">
                    <p class="sec_price__item-lower-text">週1回あたり</p>
                    <p class="sec_price__item-lower-yen">¥21,175</p>
                  </div>
                </li>
                <li class="sec_price__item">
                  <div class="sec_price__item-upper">
                    <p class="sec_price__item-upper-days">4日/週</p>
                    <p class="sec_price__item-upper-yen">¥77,000<span>(非課税)</span></p>
                    <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
                  </div>
                  <div class="sec_price__item-lower">
                    <p class="sec_price__item-lower-text">週1回あたり</p>
                    <p class="sec_price__item-lower-yen">¥19,250</p>
                  </div>
                </li>
                <li class="sec_price__item">
                  <div class="sec_price__item-upper">
                    <p class="sec_price__item-upper-days">5日/週</p>
                    <p class="sec_price__item-upper-yen">¥87,175<span>(非課税)</span></p>
                    <p class="sec_price__item-upper-text">基本授業料/維持管理費</p>
                  </div>
                  <div class="sec_price__item-lower">
                    <p class="sec_price__item-lower-text">週1回あたり</p>
                    <p class="sec_price__item-lower-yen">¥17,435</p>
                  </div>
                </li>
              </ul>
              <p class="sec_price__item-note  sec_price__item-note--mb0 fadeIn">
                *月謝料金に消費税はかかりません。
              </p>
              <?php
              break;
            }
          }
        ?>
          
          
      <?php endif; ?>
      <p class="sec_price__item-note  sec_price__item-note--mb0 fadeIn">
        <?php if(is_page('kinder_bilingual')): ?>
          *目黒区、世田谷区在住の場合。その他市区町村の場合は直接自治体にお問い合わせ下さい。<br>
          *上記料金に消費税はかかりません。<br>
          *幼児教育無償化対象のコースです。お住まいの自治体にて所定の手続きを行っていただくことで、１月あたり¥37,000の補助金が各お子様に支給されます。また自治体によって追加の補助金が支給される場合もあります(世田谷区、目黒区はそれぞれ１月あたり¥40,000の追加補助金)。詳細は各自治体にお問い合わせ下さい。<br>*入園(入会)時に別途入会金¥70,000(非課税)がかかります。
          <?php elseif(!is_page('bilingual')): ?>
          *入園(入会)時に別途入会金¥70,000(税別)がかかります。
        <?php endif; ?>
      </p>

      <!-- <div class="sec_price__title section__title section__title--center fadeIn">
        <h2 class="sec_price__title-main section__title-main"><span>ランチ・おやつ込み</span></h2>
      </div>

      <?php if(is_page(array('bilingual', 'advanced'))): ?>

        <div class="sec_price__table fadeIn">
          <table>
            <tr>
              <th class="sec_price__table-blank"></th>
              <th class="sec_price__table-orange sec_price__table-orange--01">週2日コース</th>
              <th class="sec_price__table-orange sec_price__table-orange--02">週3日コース</th>
              <th class="sec_price__table-orange sec_price__table-orange--03">週4日コース</th>
              <th class="sec_price__table-orange sec_price__table-orange--04">週5日コース</th>
            </tr>
            <tr>
              <td class="sec_price__table-item">
                <span>基本授業料</span>
              </td>
              <td>¥40,600</td>
              <td>¥56,400</td>
              <td>¥69,200</td>
              <td>¥79,000</td>
            </tr>
            <tr>
              <td class="sec_price__table-item">
                <span>維持管理費</span>
              </td>
              <td>¥ 3,000</td>
              <td>¥ 3,000</td>
              <td>¥ 3,000</td>
              <td>¥ 3,000</td>
            </tr>
            <tr>
              <td class="sec_price__table-item">
                <span>昼食代(月極)</span>
              </td>
              <td>¥ 4,400</td>
              <td>¥ 6,600</td>
              <td>¥ 8,800</td>
              <td>¥11,000</td>
            </tr>
            <tr>
              <td class="sec_price__table-item">
                <span>おやつ代(月極)</span>
              </td>
              <td>¥ 1,200</td>
              <td>¥ 1,800</td>
              <td>¥ 2,400</td>
              <td>¥ 3,000</td>
            </tr>
            <tr>
              <td class="sec_price__table-item sec_price__table-item--gray sec_price__table-gray">
                <span>月額合計</span>
              </td>
              <td class="sec_price__table-gray">¥49,200</td>
              <td class="sec_price__table-gray">¥67,800</td>
              <td class="sec_price__table-gray"><span class="delete"><span>¥83,400</span></span><span>¥70,600</span></td>
              <td class="sec_price__table-last_td sec_price__table-gray"><span class="delete"><span>¥96,000</span></span><span>¥73,400</span></td>
            </tr>
          </table>
        </div>

      <?php elseif(is_page('preschool')): ?>

        <div class="sec_price__table fadeIn">
          <table>
            <tr>
              <th class="sec_price__table-blank"></th>
              <th class="sec_price__table-orange sec_price__table-orange--01">週2日コース</th>
              <th class="sec_price__table-orange sec_price__table-orange--02">週3日コース</th>
              <th class="sec_price__table-orange sec_price__table-orange--03">週4日コース</th>
              <th class="sec_price__table-orange sec_price__table-orange--04">週5日コース</th>
            </tr>
            <tr>
              <td class="sec_price__table-item">
                <span>基本授業料</span>
              </td>
              <td>¥39,500</td>
              <td>¥54,750</td>
              <td>¥67,000</td>
              <td>¥79,250</td>
            </tr>
            <tr>
              <td class="sec_price__table-item">
                <span>維持管理費</span>
              </td>
              <td>¥ 3,000</td>
              <td>¥ 3,000</td>
              <td>¥ 3,000</td>
              <td>¥ 3,000</td>
            </tr>
            <tr>
              <td class="sec_price__table-item">
                <span>昼食代(月極)</span>
              </td>
              <td>¥ 4,400</td>
              <td>¥ 6,600</td>
              <td>¥ 8,800</td>
              <td>¥11,000</td>
            </tr>
            <tr>
              <td class="sec_price__table-item">
                <span>おやつ代(月極)</span>
              </td>
              <td>¥ 1,200</td>
              <td>¥ 1,800</td>
              <td>¥ 2,400</td>
              <td>¥ 3,000</td>
            </tr>
            <tr>
              <td class="sec_price__table-item sec_price__table-item--gray sec_price__table-gray">
                <span>月額合計</span>
              </td>
              <td class="sec_price__table-gray">¥48,100</td>
              <td class="sec_price__table-gray">¥66,150</td>
              <td class="sec_price__table-gray">¥81,200</td>
              <td class="sec_price__table-last_td sec_price__table-gray">¥96,250</td>
            </tr>
          </table>
        </div>

      <?php elseif(is_page(array('kinder', 'elementary'))): ?>

        <div class="sec_price__table fadeIn">
          <table>
            <tr>
              <th class="sec_price__table-blank"></th>
              <th class="sec_price__table-orange sec_price__table-orange--01">週2日コース</th>
              <th class="sec_price__table-orange sec_price__table-orange--02">週3日コース</th>
              <th class="sec_price__table-orange sec_price__table-orange--03">週4日コース</th>
              <th class="sec_price__table-orange sec_price__table-orange--04">週5日コース</th>
            </tr>
            <tr>
              <td class="sec_price__table-item">
                <span>基本授業料</span>
              </td>
              <td>¥39,500</td>
              <td>¥54,750</td>
              <td>¥67,000</td>
              <td>¥76,250</td>
            </tr>
            <tr>
              <td class="sec_price__table-item">
                <span>維持管理費</span>
              </td>
              <td>¥ 3,000</td>
              <td>¥ 3,000</td>
              <td>¥ 3,000</td>
              <td>¥ 3,000</td>
            </tr>
            <tr>
              <td class="sec_price__table-item">
                <span>おやつ代(月極)</span>
              </td>
              <td>¥ 1,200</td>
              <td>¥ 1,800</td>
              <td>¥ 2,400</td>
              <td>¥ 3,000</td>
            </tr>
            <tr>
              <td class="sec_price__table-item sec_price__table-item--gray sec_price__table-gray">
                <span>月額合計</span>
              </td>
              <td class="sec_price__table-gray">¥43,700</td>
              <td class="sec_price__table-gray">¥59,550</td>
              <td class="sec_price__table-gray">¥72,400</td>
              <td class="sec_price__table-last_td sec_price__table-gray">¥82,250</td>
            </tr>
          </table>
        </div>

      <?php endif; ?> -->


      <!-- <p class="sec_price__item-btn btn btn__white fadeIn"><a href="/application/">見学の申し込みをする</a></p> -->
    </div>
  </section>

  <!-- sec_other-price -->
  <section class="sec_other-price">
    <div class="sec_other-price__inner section__inner section__inner-s">

      <?php if(!is_page(array('advanced'))): ?>

        <div class="sec_other-price__title section__title section__title--center fadeIn">
          <h2 class="sec_other-price__title-main section__title-main"><span>その他費用</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/icon_sec_other-price.svg" alt=""></h2>
          <p class="sec_other-price__title-sub section__title-sub">Other Price</p>
        </div>
        <div class="sec_other-price__table sec_other-price__table-upper fadeIn">
          <p class="sec_other-price__table-upper-text">月極(週回数毎)</p>
          <table>
            <tr>
              <th class="sec_other-price__table-blank"></th>
              <th class="sec_other-price__table-orange sec_other-price__table-orange--01">スポット<br>(単発)</th>
              <th class="sec_other-price__table-orange sec_other-price__table-orange--02">1日/週</th>
              <th class="sec_other-price__table-orange sec_other-price__table-orange--03">2日/週</th>
              <th class="sec_other-price__table-orange sec_other-price__table-orange--04">3日/週</th>
              <th class="sec_other-price__table-orange sec_other-price__table-orange--05">4日/週</th>
              <th class="sec_other-price__table-orange sec_other-price__table-orange--06">5日/週</th>
            </tr>
            <tr>
              <td class="sec_other-price__table-item sec_other-price__table-item--asterisk sec_other-price__table-item--asterisk_01">
                <span>ケータリング</span>
              </td>
              <td>¥740</td>
              <td>¥2,500</td>
              <td>¥5,000</td>
              <td>¥7,500</td>
              <td>¥10,000</td>
              <td>¥12,500</td>
            </tr>
            <tr>
              <td class="sec_other-price__table-item sec_other-price__table-item--asterisk sec_other-price__table-item--asterisk_02">
                <span>スナック</span>
              </td>
              <td>¥150</td>
              <td>¥600</td>
              <td>¥1,200</td>
              <td>¥1,800</td>
              <td>¥2,400</td>
              <td class="sec_other-price__table-last_td">¥3,000</td>
            </tr>
          </table>
        </div>
        <div class="sec_other-price__table fadeIn">
          <table>
            <tr>
              <th class="sec_other-price__table-text-blue">延長</th>
              <th class="sec_other-price__table-orange sec_other-price__table-orange--lower sec_other-price__table-orange--01 sec_other-price__table-last_th">30分毎</th>
              <th class="sec_other-price__table-orange sec_other-price__table-orange--02 op0"></th>
              <th class="sec_other-price__table-orange sec_other-price__table-orange--03 op0"></th>
              <th class="sec_other-price__table-orange sec_other-price__table-orange--04 op0"></th>
              <th class="sec_other-price__table-orange sec_other-price__table-orange--05 op0"></th>
              <th class="sec_other-price__table-orange sec_other-price__table-orange--06 op0"></th>
            </tr>
            <tr>
              <td class="sec_other-price__table-item">
                <span>未就学児</span>
              </td>
              <td class=" <?php if(is_page('kinder_bilingual')): echo 'sec_other-price__table-last_td'; endif; ?>">¥600</td>
              <td class="op0"></td>
              <td class="op0"></td>
              <td class="op0"></td>
              <td class="op0"></td>
              <td class="op0"></td>
            </tr>
            <?php if(!is_page('kinder_bilingual')): ?>
              <tr>
                <td class="sec_other-price__table-item">
                  <span>小学生</span>
                </td>
                <td class="sec_other-price__table-last_td">¥500</td>
                <td class="op0"></td>
                <td class="op0"></td>
                <td class="op0"></td>
                <td class="op0"></td>
                <td class="op0"></td>
              </tr>
            <?php endif; ?>
          </table>
        </div>
        <p class="sec_other-price__note fadeIn">
          <span>*提携先の調理センターで調理された手作り&無添加の食事を提供します。翌月にその他月謝と合わせてご精算となります。</span><br>
          <span>**午前、午後共に補食(スナック)の時間があります。事前にスナック要否をご登録いただき、提供いたします。<br>翌月に提供実績回数に従ってその他月謝と合わせてご精算となります。上記週回数毎の金額は目安となります。</span><br>
          <?php if(is_page('kinder_bilingual')): ?>
            <span>***退園予定時刻から最大20:00までご滞在時間の延長が可能です。翌月にその他月謝と合わせてご精算となります。</span>
          <?php else: ?>
            <span>***延長料金につきましては、年齢で金額が異なりますが全てのコースにおいて同一の金額となっております。<br>各コースの開始時間前と終了時間後につき、午前中は8:30から15:00まで、<br class="pc_tb">午後は14:00から20:00までご滞在時間の延長が可能です。翌月にその他月謝と合わせてご精算となります。</span>
          <?php endif; ?>
        </p>

      <?php endif; ?>

      <p class="sec_other-price__btn btn btn__white fadeIn"><a href="/application/">見学の申し込みをする</a></p>
    </div>
  </section>

</main>

<?php get_footer(); ?>