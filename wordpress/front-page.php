<?php get_header(); ?>

<div class="fv">
  <img src="<?php echo get_theme_file_uri( 'assets/img/fv.webp' ); ?>" alt="" decoding="async" width="1282" height="1226">
  <div class="scroll">SCROLL</div>
</div>

<main class="main">
  <div id="fv_nav" class="fv_nav">
    <nav class="nav">
      <ul id="js-fixedBtn_visiblity" class="nav_menu">
        <li class="sp_only"><a href="#top">Top</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#skill">Skill</a></li>
        <li><a href="#profile">Profile</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </div>
    <div class="container">
      <section id="gallery" class="gallery" data-aos="fade-up">
        <div class="section_inner">
          <h2>Gallery</h2>
          <p class="note">Click image to open page!</p>
          <div class="flex">
            <div class="flex_item">
              <div class="thumbnail">
                <a href="#top"><img src="<?php echo get_theme_file_uri( 'assets/img/portfolio.webp' ); ?>" alt="ポートフォリオサイト" decoding="async" width="300" height="300"></a>
              </div>
              <div class="txt_box">
                <h3>ポートフォリオサイト</h3>
                <p>制作時間：約30時間</p>
                <p>使用言語：HTML SASS javascript PHP</p>
                <p>使用ツール：Wordpress VScode Photoshop Illustrator</p>
                <p>このページです。画像やJSの使用量を抑えてHTMLとCSSをメインで作りました。普段実務で書いているものよりもモダンなコーディングを心掛けました。
                </p>
              </div>
            </div>
            <div class="flex_item">
              <div class="thumbnail">
                <a href="http://curiosity8.html.xdomain.jp/gallery/chatbot/index_fb2.html" target="_blank"><img src="<?php echo get_theme_file_uri( 'assets/img/chatbot.webp' ); ?>" alt="チャットボット風アンケートLP" decoding="async" width="300" height="300"></a>
              </div>
              <div class="txt_box">
                <h3>チャットボット風アンケートLP</h3>
                <p>制作時間：5営業日</p>
                <p>使用言語：HTML CSS Jquery</p>
                <p>使用ツール：VScode Photoshop</p>
                <p>オペレーターとチャットで会話しているような雰囲気を出すため、吹き出しを表示するタイミングにこだわりました</p>
              </div>
            </div>
            <div class="flex_item">
              <div class="thumbnail">
                <a href="http://curiosity8.html.xdomain.jp/gallery/anq/index.html" target="_blank"><img src="<?php echo get_theme_file_uri( 'assets/img/anq.webp' ); ?>" alt="アンケートLP" decoding="async" width="300" height="300"></a>
              </div>
              <div class="txt_box">
                <h3>アンケートLP</h3>
                <p>制作時間：5営業日</p>
                <p>使用言語：HTML CSS Jquery</p>
                <p>使用ツール：VScode Photoshop</p>
                <p>回答すると説明文が表示される構成のため、回答すると説明分箇所まで自動遷移するようにて「続きがある」と分かるようにしました。</p>
              </div>
            </div>
            <div class="flex_item">
              <div class="thumbnail">
                <a href="http://curiosity8.html.xdomain.jp/gallery/oudan/sougou.html" target="_blank"><img src="<?php echo get_theme_file_uri( 'assets/img/oudan.webp' ); ?>" alt="サンプル" decoding="async" width="300" height="300"></a>
              </div>
              <div class="txt_box">
                <h3>カルーセルでみせる横断LP</h3>
                <p>制作時間：7営業日</p>
                <p>使用言語：Pug SASS Jquery Python</p>
                <p>使用ツール：VScode Photoshop</p>
                <p>幅広いユーザーをターゲットにしているため、古いブラウザでも表示崩れしないように作りました。</p>
              </div>
            </div>
            <div class="flex_item">
              <div class="thumbnail">
                <a href="http://curiosity8.html.xdomain.jp/gallery/seminar/index.html" target="_blank"><img src="<?php echo get_theme_file_uri( 'assets/img/seminar.webp' ); ?>" alt="サンプル" decoding="async" width="300" height="300"></a>
              </div>
              <div class="txt_box">
                <h3>セミナーイベント告知LP</h3>
                <p>制作時間：5営業日</p>
                <p>使用言語：HTML CSS Jquery</p>
                <p>使用ツール：VScode Photoshop</p>
                <p>今後のイベント開催に合わせて更新を繰り返すLPなので、テキストコーディング箇所を多くしたり、メンテナンス性を意識して作りました。</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="skill" class="skill" data-aos="fade-up">
        <div class="section_inner">
          <h2>Skill</h2>
          <details>
            <summary>レクチャー経験あり</summary>
            <ul class="skill_flex">
              <li class="skill_area html">
                <ul class="graph">
                  <li>HTML(Pug)</li>
                  <li>実務経験：4年</li>
                </ul>
              </li>
              <li class="skill_area css">
                <ul class="graph">
                  <li>CSS(SASS)</li>
                  <li>実務経験：4年</li>
                </ul>
              </li>
              <li class="skill_area javascript">
                <ul class="graph">
                  <li>javascript<br>(JQuery)</li>
                  <li>実務経験：3年</li>
                </ul>
              </li>
              <li class="skill_area vscode">
                <ul class="graph">
                  <li>VScode</li>
                  <li>実務経験：3年</li>
                </ul>
              </li>
              <li class="skill_area git">
                <ul class="graph">
                  <li>Git(GitLab)</li>
                  <li>実務経験：3年</li>
                </ul>
              </li>
              <li class="skill_area photoshop">
                <ul class="graph">
                  <li>Photoshop</li>
                  <li>実務経験：7年</li>
                </ul>
              </li>
              <li class="skill_area illustrator">
                <ul class="graph">
                  <li>Illustrator</li>
                  <li>実務経験：5年</li>
                </ul>
              </li>
              <li class="skill_area figma">
                <ul class="graph">
                  <li>Figma</li>
                  <li>実務経験：0.5年</li>
                </ul>
              </li>
            </ul>
          </details>
          <details>
            <summary>実務経験あり</summary>
            <ul class="skill_flex">
              <li class="skill_area ptengine">
                <ul class="graph">
                  <li>Ptengine</li>
                  <li>実務経験：1年</li>
                </ul>
              </li>
              <li class="skill_area dlpo">
                <ul class="graph">
                  <li>DLPO</li>
                  <li>実務経験：2年</li>
                </ul>
              </li>
              <li class="skill_area sb">
                <ul class="graph">
                  <li>Squad beyond</li>
                  <li>実務経験：0.5年</li>
                </ul>
              </li>
              <li class="skill_area xd">
                <ul class="graph">
                  <li>XD</li>
                  <li>実務経験：0.5年</li>
                </ul>
              </li>
              <li class="skill_area gas">
                <ul class="graph">
                  <li>GAS</li>
                  <li>実務経験：2年</li>
                </ul>
              </li>
              <li class="skill_area python">
                <ul class="graph">
                  <li>Python</li>
                  <li>実務経験：1年</li>
                </ul>
              </li>
              <li class="skill_area sheets">
                <ul class="graph">
                  <li>Google Sheets</li>
                  <li>実務経験：5年</li>
                </ul>
              </li>
              <li class="skill_area excel">
                <ul class="graph">
                  <li>Excel</li>
                  <li>実務経験：5年</li>
                </ul>
              </li>
              <li class="skill_area powerpoint">
                <ul class="graph">
                  <li>PowerPoint</li>
                  <li>実務経験：4年</li>
                </ul>
              </li>
              <li class="skill_area chatwork">
                <ul class="graph">
                  <li>Chatwork</li>
                  <li>実務経験：3年</li>
                </ul>
              </li>
              <li class="skill_area zoom">
                <ul class="graph">
                  <li>Zoom</li>
                  <li>実務経験：3年</li>
                </ul>
              </li>
              <li class="skill_area slack">
                <ul class="graph">
                  <li>Slack</li>
                  <li>実務経験：0.5年</li>
                </ul>
              </li>
            </ul>
          </details>
        </div>
      </section>

      <section id="profile" class="profile" data-aos="fade-up">
        <div class="section_inner">
          <h2>Profile</h2>
          <div class="profile_inner">
            <img src="<?php echo get_theme_file_uri( 'assets/img/profile_img.webp' ); ?>" alt="" decoding="async" width="200" height="200">
            <p><strong>古井丸 紘子</strong> - Koimaru Hiroko -<br>
              <br>
              東京都葛飾区亀有で生まれる<br>
              千葉、パラオ、東京で育つ<br>
              好きなものは旅行、着物、映画、海外ドラマ、アニメ、漫画
            </p>
          </div>
        </div>
      </section>


      <section id="contact" class="contact" data-aos="fade-up">
        <div class="section_inner">
          <h2>Contact</h2>
          <p>
            <mail>koimaruhiroko418@gmail.com</mail>
          </p>
        </div>
      </section>
    </div>
</main>
<footer>

</footer>

<div id="nav_fixed" class="nav_fixed">
  <div class="nav">
    <img class="sheep_wool" src="<?php echo get_theme_file_uri( 'assets/img/sheep_wool.webp' ); ?>" alt="" decoding="async" width="432" height="323">
    <div class="nav_inner">
      <p id="top_btn" class="nav_ttl"><a href="#top">Koimaru Hiroko's Portfolio</a></p>
      <ul class="nav_menu">
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#profile">Profile</a></li>
        <li><a href="#skill">Skill</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
    <img id="sheep_face" class="sheep_face" src="<?php echo get_theme_file_uri( 'assets/img/sheep_face.webp' ); ?>" alt="" decoding="async" width="153" height="95">
  </div>
</div>

<?php get_footer(); ?>