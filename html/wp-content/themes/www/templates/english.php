<?php get_header();
/*
Template Name: English Site
*/
?>
<main class="page english">

  <!-- headline -->
  <?php get_template_part('parts/headline') ?>

  <!-- sec_wgh -->
  <section class="sec_wgh">
    <div class="sec_wgh__inner section__inner">
      <div class="sec_wgh__img fadeLeftRight">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/wgh.svg" alt="">
      </div>
      <div class="sec_wgh__contents fadeRightLeft">
        <div class="sec_wgh__title section__title">
          <h2 class="sec_wgh__title-main section__title-main"><span>About Wings Global<br>Home</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/english/icon_wgh-orange.svg" alt=""></h2>
          <!-- <p class="sec_wgh__title-sub section__title-sub">About WGH?</p> -->
        </div>
        <p class="sec_wgh__text">
          Wings Global Home is an afterschool and kindergarten program for children aged 2 to 10 years old. We develop both children’s Global and Life skills. Global skills are the combination of English and intercultural skills, and self-efficacy, curiosity and social-awareness are the 3 elements of Life skills.
        </p>
      </div>
    </div>
  </section>

  <!-- sec_home -->
  <section class="sec_home">
    <div class="sec_home__inner section__inner">
      <div class="sec_home__title section__title section__title--center fadeIn">
        <h2 class="sec_home__title-main section__title-main"><span>About</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/home.svg" alt="Home" class="sec_home__title-img--home"><span></span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_sec_home.svg" alt=""></h2>
        <!-- <p class="sec_home__title-sub section__title-sub">Home</p> -->
      </div>
      <div class="sec_home__container sec_home__upper">
        <ul class="sec_home__upper-list delayScroll">
          <li class="sec_home__upper-item">
            <div class="sec_home__upper-item-img anime-upDown"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_home-upper_01.svg" alt=""></div>
            <p class="sec_home__upper-item-text">
              HOME is where children will develop their Global skills and Life skills.  
            </p>
          </li>
          <li class="sec_home__upper-item">
            <div class="sec_home__upper-item-img anime-upDown"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_home-upper_02.svg" alt=""></div>
            <p class="sec_home__upper-item-text">
              Children always have peace of mind through their strong
              emotional ties with teachers and the feeling of being 
              embraced and protected. Such environments,
              will trigger more interactions and communication. 
            </p>
          </li>
        </ul>
        <p class="sec_home__upper-catch fadeInOpacity">
          We create a “home” environment where
          children can accumulate “successful
          experiences” which results in the
          development of a strong “mind”. 
        </p>
      </div>
      <div class="sec_home__container sec_home__lower">
        <p class="sec_home__lower-title fadeIn"><span>Two Skills To Develop</span></p>
        <ul class="sec_home__lower-list delayScroll">
          <li class="sec_home__lower-item">
            <p class="sec_home__lower-item-num">01</p>
            <div class="sec_home__lower-item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/home_01.png" alt="">
            </div>
            <p class="sec_home__lower-item-title">Global Skills</p>
            <!-- <p class="sec_home__lower-item-text">コミュニケーション能力</p> -->
          </li>
          <li class="sec_home__lower-item">
            <p class="sec_home__lower-item-num">02</p>
            <div class="sec_home__lower-item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/home_02.png" alt="">
            </div>
            <p class="sec_home__lower-item-title">Life Skills</p>
            <!-- <p class="sec_home__lower-item-text">「ココロ」の成長</p> -->
          </li>
        </ul>
      </div>
      <!-- <p class="sec_home__btn btn btn__white fadeIn"><a href="/skills/">詳しく見る</a></p> -->
    </div>
  </section>

  <!-- sec_features -->
  <section class="sec_features">
    <div class="sec_features__inner section__inner section__inner--center">
      <div class="sec_features__title section__title section__title--center fadeIn">
        <h2 class="sec_features__title-main section__title-main"><span>Features</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/english/icon_features-orange.svg" alt=""></h2>
        <!-- <p class="sec_features__title-sub section__title-sub">Features</p> -->
      </div>
      <ul class="sec_features__list delayScroll">
        <li class="sec_features__item">
          <div class="sec_features__item-box">
            <p class="sec_features__item-num">Feature01</p>
            <div class="sec_features__item-img sec_features__item-img--01"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_features_01.svg" alt=""></div>
            <p class="sec_features__item-title">With a low teacher</p>
          </div>
          <p class="sec_features__item-text">
            Student ratio 1:5 and our "one on one reading session," children feel more comfortable, thinking “I feel at home here.” 
          </p>
          <!-- <p class="sec_features__item-btn sec_features__item-btn--01 btn btn__white"><a href="/method/">詳しく見る</a></p> -->
        </li>
        <li class="sec_features__item">
          <div class="sec_features__item-box">
            <p class="sec_features__item-num">Feature02</p>
            <div class="sec_features__item-img sec_features__item-img--02"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_features_02.svg" alt=""></div>
            <p class="sec_features__item-title">The all English environment is created by teachers coming from all over the world</p>
          </div>
          <p class="sec_features__item-text">
            Teachers are graduates from top universities across the world and have various background such as 
            lawyers and have met the very difficult criteria we set.  They themselves have experience
            learning a foreign language by creating unique methods of acquisition. 
          </p>
          <!-- <p class="sec_features__item-btn btn btn__white"><a href="/teacher/">講師紹介を見る</a></p> -->
        </li>
        <li class="sec_features__item">
          <div class="sec_features__item-box">
            <p class="sec_features__item-num">Feature03</p>
            <div class="sec_features__item-img sec_features__item-img--03"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon_features_03.svg" alt=""></div>
            <p class="sec_features__item-title">The original English teaching methos and curriculum</p>
          </div>
          <p class="sec_features__item-text">
            Open for opinions and criticism to always improve our methods. 
          </p>
          <!-- <p class="sec_features__item-btn btn btn__white"><a href="/method/">詳しく見る</a></p> -->
        </li>
      </ul>
    </div>
  </section>

  <!-- staff's-voice -->
  <section class="s-voice">
    <div class="s-voice__inner section__inner section__inner--center">
      <div class="s-voice__title section__title section__title--center fadeIn">
        <h2 class="s-voice__title-main section__title-main"><span>Staff's Voice</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/english/icon_voice-orange.svg" alt=""></h2>
        <!-- <p class="s-voice__title-sub section__title-sub">Voice</p> -->
      </div>
      <ul class="s-voice__list delayScroll">

        <!-- スタッフ（1人目） -->
        <li class="s-voice__item">
          <div class="s-voice__item-upper">
            <div class="s-voice__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/english/s-voice_01.jpg" alt=""><span class="s-voice__item-img-triangle"></span></div>
            <div class="s-voice__item-contents">
              <p class="s-voice__item-school s-voice__item-school--gakugei">Gakugei school</p>
              <p class="s-voice__item-title">Siyyon Sato</p>
              <p class="s-voice__item-position">Manager</p>
            </div>
          </div>
          <div class="s-voice__item-box">
            <div class="s-voice__item-box-inner">
              <p class="s-voice__item-text">
                I'm Ms. Siyyon, the manager at the Gakugei school. I have been working at Wings for almost 2 years now.<br>
                I first joined because I was impressed about the private reading time. At Gakugei, we started with a few students but now we have over 100 students and many more contacting me to join. I am excited that it seems the company is moving to a more open culture where we can talk with each other freely. My biggest accomplishment at Wings is gaining the trust of the parents and co-workers."
              </p>
              <div class="s-voice__item-btn"><span>CLOSE</span></div>
            </div>
          </div>
        </li>

        <!-- スタッフ（2人目） -->
        <li class="s-voice__item">
          <div class="s-voice__item-upper">
            <div class="s-voice__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/english/s-voice_02.jpg" alt=""><span class="s-voice__item-img-triangle"></span></div>
            <div class="s-voice__item-contents">
              <p class="s-voice__item-school s-voice__item-school--ikejiri">Ikejiri school</p>
              <p class="s-voice__item-title">Milena Machida</p>
              <p class="s-voice__item-position">Part-Time Teacher</p>
            </div>
          </div>
          <div class="s-voice__item-box">
            <div class="s-voice__item-box-inner">
              <p class="s-voice__item-text">
                I'm Milena, a part-time teacher usually at the Ikejiri school and have been working here for a little over a year and half now. I first joined because I live in the neighborhood and have often passed by Wings at Gakugei. I was impressed by the cozy atmosphere and happy faces of children and teachers. I knew this is the place I want to work. I love the philosophy of Wings to create a family-like , comfortable and fun atmosphere for teachers and students.The most unique thing here is the international, friendly, and comfortable environment and of course the team of great teachers, supervisors and managers providing it.
              </p>
              <div class="s-voice__item-btn"><span>CLOSE</span></div>
            </div>
          </div>
        </li>

        <!-- スタッフ（3人目） -->
        <li class="s-voice__item">
          <div class="s-voice__item-upper">
            <div class="s-voice__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/english/s-voice_03.jpg" alt=""><span class="s-voice__item-img-triangle"></span></div>
            <div class="s-voice__item-contents">
              <p class="s-voice__item-school s-voice__item-school--gakugei">Gakugei school</p>
              <p class="s-voice__item-title">Fairuz Emran</p>
              <p class="s-voice__item-position">Part-Time Teacher</p>
            </div>
          </div>
          <div class="s-voice__item-box">
            <div class="s-voice__item-box-inner">
              <p class="s-voice__item-text">
                I'm Fairuz, a part-time teacher usually at the Gakugei school and have been working here for a little over a year now. I first joined because I was interested in the design of the school, and I love the place. I identify with how Wings tries to create a warm and comfortable environment, helping kids be close and friendly with the teachers as well as giving students the confidence to speak English at all times. My most memorable experience here was when I was selected for all three categories of the part-timer award. One thing I've noticed about the management is how caring and professional the manager is as well as how efficient the supervisors are which helps operations run smoothly.
              </p>
              <div class="s-voice__item-btn"><span>CLOSE</span></div>
            </div>
          </div>
        </li>

        <!-- スタッフ（4人目） -->
        <li class="s-voice__item">
          <div class="s-voice__item-upper">
            <div class="s-voice__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/english/s-voice_04.jpg" alt=""><span class="s-voice__item-img-triangle"></span></div>
            <div class="s-voice__item-contents">
              <p class="s-voice__item-school s-voice__item-school--ikejiri">Ikejiri school</p>
              <p class="s-voice__item-title">Karina Kaczmarczyk</p>
              <p class="s-voice__item-position">Supervisor</p>
            </div>
          </div>
          <div class="s-voice__item-box">
            <div class="s-voice__item-box-inner">
              <p class="s-voice__item-text">
                I'm Karina, a supervisor at the Ikejiri school and have been working here for almost a year-and-a-half now. I first joined because I like kids, so I tried to find some work where I can be with them. When I started it was still the middle of the corona-lockdown. We were super busy, short of staff and everyone was worried about getting sick. Luckily, things are slowly getting back to normal, so the work environment is much better. The most unique part of working here is watching the children grow up and seeing them start to use English to communicate, improving day by day through hard work. My biggest accomplishment here has been being appreciated by superiors and co-workers.
              </p>
              <div class="s-voice__item-btn"><span>CLOSE</span></div>
            </div>
          </div>
        </li>
        
        <!-- スタッフ（5人目） -->
        <li class="s-voice__item">
          <div class="s-voice__item-upper">
            <div class="s-voice__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/english/s-voice_05.jpg" alt=""><span class="s-voice__item-img-triangle"></span></div>
            <div class="s-voice__item-contents">
              <p class="s-voice__item-school s-voice__item-school--gakugei">Gakugei school</p>
              <p class="s-voice__item-title">Janice Huynh</p>
              <p class="s-voice__item-position">Assistant Supervisor</p>
            </div>
          </div>
          <div class="s-voice__item-box">
            <div class="s-voice__item-box-inner">
              <p class="s-voice__item-text">
                I'm Janice, the assistant supervisor at Gakugei. I've been at Wings for 4 months now, drawn by the small teacher to student ratio and the flexible curriculum. It seemed unique compared to the traditional classroom image. The Wings team's diveristy is very unique and valuable as a part of the children's education, this gives students exposure to other cultures and values. My most memorable moment so far is the first time a student gave me a drawing. I was really surprised. I hung it on my fridge that night, took a picture, and showed him the next day.
              </p>
              <div class="s-voice__item-btn"><span>CLOSE</span></div>
            </div>
          </div>
        </li>
        <!-- スタッフ（6人目） -->
        <li class="s-voice__item">
          <div class="s-voice__item-upper">
            <div class="s-voice__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/english/s-voice_06.jpg" alt=""><span class="s-voice__item-img-triangle"></span></div>
            <div class="s-voice__item-contents">
              <p class="s-voice__item-school s-voice__item-school--ikejiri">Ikejiri school</p>
              <p class="s-voice__item-title">Maree Nacpil</p>
              <p class="s-voice__item-position">Assistant Supervisor</p>
            </div>
          </div>
          <div class="s-voice__item-box">
            <div class="s-voice__item-box-inner">
              <p class="s-voice__item-text">
                I'm Maree, an assistant supervisor at the Ikejiri school and have been working here for a little over a eight months now. I first came to Wings because I had graduated college and the thought of working in Japan was always just a “imagine if...” until I decided to apply.  I had worked with kids in my last semester as part of an internship and had so much fun that the thought of continuing to work with kids and remembering that idea of working in Japan... all of the sudden I’m here now writing a newsletter. The aspect of Wings that I most indentify with is encouraging students to speak what is on their minds and if they don’t understand something, being able to not be afraid to ask why.  The most unique part about working here is seeing coworkers coming from all walks of life come together and connect over the students! 
              </p>
              <div class="s-voice__item-btn"><span>CLOSE</span></div>
            </div>
          </div>
        </li>

      </ul>
    </div>
  </section>

  <!-- sec_faq -->
  <?php echo get_template_part('parts/sec_faq'); ?>

  <!-- recruit-positions -->
  <section class="recruit-positions">
    <div class="recruit-positions__inner section__inner section__inner-s">

      <div class="recruit-positions__title section__title section__title--center fadeIn">
        <h2 class="recruit-positions__title-main section__title-main"><span>Available Positions</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/english/icon_position-orange.svg" alt=""></h2>
      </div>
      
      <!-- recruit-position_01 -->
      <div id="recruit-position_01" class="recruit-position">
        <div class="recruit-position__inner">
          <!-- <div class="recruit-position__title fadeIn">
            <h2 class="recruit-position__title-main">英語講師</h2>
          </div> -->
          <dl class="recruit-position__list fadeIn">
            <div class="recruit-position__item">
              <dt class="recruit-position__item-title">Position</dt>
              <dd class="recruit-position__item-text">
                Part-Time Teacher, Full-Time Teacher, Full-Time Manager</dd>
            </div>
            <div class="recruit-position__item">
              <dt class="recruit-position__item-title">Salary</dt>
              <dd class="recruit-position__item-text">
                <span>Part-Time Teacher :</span> ¥1,000-¥1,600/hr<br>
                <span>Full-Time Teacher :</span> ¥200k-¥280k/month<br>
                <span>Full-Time Manager :</span> ¥200k-¥310k/month
              </dd>
            </div>
            <!-- <div class="recruit-position__item">
              <dt class="recruit-position__item-title">勤務地</dt>
              <dd class="recruit-position__item-text">
                本社：〒１５３-００４３<br class="sp_only"> 東京都目黒区東山 ３−６−１１<br>
                池尻大橋校：〒154-0001<br class="sp_only"> 東京都世田谷区池尻２丁目３１−５<br class="sp_only"> プライマルイプセ池尻大橋２階<br>
                学芸大学校：〒152-0001<br class="sp_only"> 東京都目黒区中央町２丁目３８−５ １F
              </dd>
            </div> -->
            <div class="recruit-position__item">
              <dt class="recruit-position__item-title">Working Hours</dt>
              <dd class="recruit-position__item-text">
                <span>Part-Time Teacher :</span> 4+ hours/day<br>
                <span>Full-Time Teacher :</span> 40 hours/week<br>
                <span>Full-Time Manager :</span> 40 hours/week
              </dd>
            </div>
            <div class="recruit-position__item">
              <dt class="recruit-position__item-title">Job Description</dt>
              <dd class="recruit-position__item-text">
                <span>Educator :</span> As an English speaking teacher the first few months you will learn how to teach, and then you will move up to working as a main teacher, who takes the initiative to lead classes. You will be working with children aged 2.5-12 years in groups (approx. 5 kids per teacher). The morning class is for younger kids and serves as a preschool/kindergarten, then in the afternoon the school serves as an after-school program for older children. During your training you will learn about the structure of our school, however, we are also excited to discuss your ideas, skills, experiences, and methods regarding second language learning.<br>
                <span>Manager :</span> <a href="/teacher#manager">See link</a>
              </dd>
            </div>
            <div class="recruit-position__item">
              <dt class="recruit-position__item-title">Staff Benefits</dt>
              <dd class="recruit-position__item-text">
                <span>Wings Perks -</span> Our company provides each school with a fund for snacks to be provided to all staff. This means every day you arrive to work at one of our school there will be a snack waiting for you. There are also a number of discounts available for our full-time staff.<br>
                <span>Housing Hunting Support -</span> Our company will introduce staff to English speaking realtors to help you find a place to live. For full-time staff we also provide a monthly subsidization based on travel distance to our schools as well as a moving allowance for moving costs. Travel expenses is reimbursed for all staff.<br>
                <span>Bonus -</span> Bonuses can be provided twice a year from the 2nd year of employment. As well as a potential pay raise after 6 months of employment.<br>
                <span>And More...</span> Our company is always looking for ways to make sure our staff is satisfied. Due to this, we are continuously working on programs to help staff get accustomed to Japan, enjoy the country as much as possible, and live a healthy life. We are able to do this through our Initiative Programs (see the <a href="#sec_faq">FAQ section</a> for more information).
              </dd>
            </div>
            <div class="recruit-position__item">
              <dt class="recruit-position__item-title">Qualifications</dt>
              <dd class="recruit-position__item-text">
                <span>Part-time :</span> Currently enrolled university undergraduate/graduate students of any discipline or university graduates with a Bachelor’s Degree or higher qualification that have a native-level English competence are qualified to apply. Applicants should be outgoing, creative, energetic, and interested in working with children. Working abroad also requires a person to be open to a new way of life, willing to learn, and able to take on challenges. No previous experience is required as training occurs on the job.<br>
                <span>Full-time :</span> University currently enrolled/undergraduates/graduates of any discipline with a bachelor’s degree or higher qualification, who have native-level English competence, are qualified to apply. Applicants should be outgoing, creative, energetic and interested in working with children. Working abroad also requires a person to be open to a new way of life, willing to learn, and able to take on challenges. No previous experience is required as training occurs on the job.
              </dd>
            </div>
            <!-- <div class="recruit-position__item">
              <dt class="recruit-position__item-title">休日・休暇</dt>
              <dd class="recruit-position__item-text">完全週休2日制(土日祝)・年間休日126日</dd>
            </div>
            <div class="recruit-position__item">
              <dt class="recruit-position__item-title">雇用形態</dt>
              <dd class="recruit-position__item-text">正社員</dd>
            </div> -->
          </dl>
        </div>
      </div>

    </div>

  </section>

  <!-- english-entry -->
  <section id="english-entry" class="english-entry">
    <div class="english-entry__inner section__inner section__inner-s">
      <div class="english-entry__title section__title section__title--center fadeIn">
        <h2 class="english-entry__title-main section__title-main"><span>Job Entry</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/english/icon_english-entry-orange.svg" alt=""></h2>
      </div>
      <div class="english-entry__contents form__contents fadeIn">
        <?php the_content(); ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>