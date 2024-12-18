<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- primary meta tags -->
    <title>タイトル</title>
    
    <meta name="title" content="タイトル" />
    <meta name="description" content="キャッチコピー" />
    <meta property="og:title" content="カード形式で表示されるタイトル" />
    <meta property="og:description" content="キャッチコピー" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="URL" />
    <meta property="og:image" content="webp" />

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="タイトル" />
    <meta property="og:description" content="キャッチコピー" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="URL" />
    <meta property="og:image" content="webp" />

    <!-- X -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="タイトル" />
    <meta name="twitter:description" content="キャッチコピー" />
    <meta name="twitter:url" content="URL" />
    <meta name="twitter:image" content="webp" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Zen+Maru+Gothic&display=swap" rel="stylesheet" />

    <!-- favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/XXXX.ico" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/favicon/XXXX.ico" />

    <!-- font -->

    <script>
      (function (d) {
        var config = {
            kitId: "bqs7ccw",
            // scriptTimeout: 3000,
            async: true,
          },
          h = d.documentElement,
          t = setTimeout(function () {
            h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
          }, config.scriptTimeout),
          tk = d.createElement("script"),
          f = false,
          s = d.getElementsByTagName("script")[0],
          a;
        h.className += " wf-loading";
        tk.src = "https://use.typekit.net/" + config.kitId + ".js";
        tk.async = true;
        tk.onload = tk.onreadystatechange = function () {
          a = this.readyState;
          if (f || (a && a != "complete" && a != "loaded")) return;
          f = true;
          clearTimeout(t);
          try {
            Typekit.load(config);
          } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s);
      })(document);
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/app.css" />
    <script src="https://webfont.fontplus.jp/accessor/script/fontplus.js?hBXJ0cIJ9uI%3D&box=me4-P5a0e-I%3D&aa=1&ab=2"></script>
  </head>
  <body>
    <!-- header -->
    <header class="header">
      <div class="header__inner">
        <h1 class="header__logo">
          <a href="リンク先" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/header/header_logo.png" alt="rental space logo" /></a>
        </h1>

        <!-- pc header -->
        <nav class="header__nav">
          <ul>
            <li>
              <a href="#scene" class="header__link">ご利用シーン</a>
            </li>
            <li>
              <a href="#voice" class="header__link">ご利用者様の声</a>
            </li>
            <li>
              <a href="#information" class="header__link">料金・設備</a>
            </li>
            <li>
              <a href="#gallery" class="header__link">ギャラリー</a>
            </li>
            <li>
              <a href="#access" class="header__link">アクセス</a>
            </li>
          </ul>
        </nav>
      </div>

      <a href="mailto:example@example.com?subject=お問い合わせ&body=こちらにお問い合わせ内容をご記入ください。" class="header__icon--link">
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/header-icon.png" alt="メールフォーム" class="header__icon" data-only-show="pc" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/header-icon-sp.png" alt="メールフォーム" class="header__icon" data-only-show="sp" />
      </a>
      
    </header>
    

    <!-- fv -->
    <div class="fv">
      <div class="fv__inner">
        <div class="fv__swiper swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="swiper-slide__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/fv/fv-pc.jpg" alt="" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-slide__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/fv/fv-pc.jpg" alt="" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-slide__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/fv/fv-pc.jpg" alt="" />
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="fv__bg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/fv/fv-box.png" alt="" data-only-show="pc" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/fv/fv-box-sp.png" alt="" data-only-show="sp" />
        </div>
        <div class="fv__text">
          <p class="fv__title">レンタル<br class="br-sp" />スペース<br class="br-sp" />宝塚</p>
          <p class="fv__sub-title">
            レンタルスペース宝塚は<br class="br-pc" />
            「自転車で通える所に教室を！」をコンセプトに、<br class="br-pc" />
            主に周辺住民を対象としたお教室やサロン、<br class="br-pc" />
            ワークショップ、体験の場などを募集し、<br class="br-pc" />
            開催のサポートや教室を探している方への<br class="br-pc" />
            教室情報の発信をおこなっています。<br />
          </p>
        </div>
      </div>
    </div>

    <!-- schedule -->
    <section class="schedule">
      <div class="schedule__inner">
        <h2 class="schedule__title title">イベント情報</h2>
        <p class="schedule__subtitle subtitle">SCHEDULE</p>

        
       <div class="instagram-feed">
          <?php echo do_shortcode('[instagram-feed]'); ?>
       </div>
    </section>
    <div class="schedule__bottom">
      <img src="<?php echo get_template_directory_uri(); ?>/images/bottom/schedule-bottom-pc.png" alt="" data-only-show="pc" />
      <img src="<?php echo get_template_directory_uri(); ?>/images/bottom/schedule-bottom-sp.png" alt="" data-only-show="sp" />
    </div>

    <!-- scene -->
    <section class="scene" id="scene">
      <div class="scene__inner">
        <h2 class="scene__title title">さまざまな用途で<br class="br-sp" />ご利用いただけます</h2>
        <p class="scene__subtitle subtitle">SCENE</p>

        <ul class="scene__list">
          <li class="scene__list-item">
            <div class="scene__list-item--picture">
              <img src="<?php echo get_template_directory_uri(); ?>/images/scene/scene-picture-1.png" alt="" />
            </div>
            <div class="scene__list-item--contents">
              <p class="scene__list-item--number">01</p>
              <p class="scene__list-item--text">テキスト入りますテキスト入りますテキスト入ります</p>
              <p class="scene__list-item--description">
                本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります
              </p>
            </div>
          </li>
          <li class="scene__list-item">
            <div class="scene__list-item--picture">
              <img src="<?php echo get_template_directory_uri(); ?>/images/scene/scene-picture-1.png" alt="" />
            </div>
            <div class="scene__list-item--contents">
              <p class="scene__list-item--number">02</p>
              <p class="scene__list-item--text">テキスト入りますテキスト入りますテキスト入ります</p>
              <p class="scene__list-item--description">
                本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります
              </p>
            </div>
          </li>
          <li class="scene__list-item">
            <div class="scene__list-item--picture">
              <img src="<?php echo get_template_directory_uri(); ?>/images/scene/scene-picture-1.png" alt="" />
            </div>
            <div class="scene__list-item--contents">
              <p class="scene__list-item--number">03</p>
              <p class="scene__list-item--text">テキスト入りますテキスト入りますテキスト入ります</p>
              <p class="scene__list-item--description">
                本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <div class="scene__bottom">
      <img src="<?php echo get_template_directory_uri(); ?>/images/bottom/scene-bottom-pc.png" alt="" data-only-show="pc" />
      <img src="<?php echo get_template_directory_uri(); ?>/images/bottom/scene-bottom-sp.png" alt="" data-only-show="sp" />
    </div>

    <section class="voice" id="voice">
      <div class="voice__inner">
        <div class="voice__container">
          <!-- voice  title-->
          <div class="voice__vertical">
            <!-- voice text -->
            <div class="voice__vertical--text">
              <h2 class="voice__title">利用者様の声</h2>
              <p class="voice__subtitle">VOICE</p>
            </div>
            <!-- voice arrow -->
            <div class="voice__vertical--arrow">
              <div class="swiper-button-prev arrow arrow-left"><img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-arrow-left.png" alt="Left Arrow" class="arrow-cursol" /></div>
              <div class="swiper-button-next arrow arrow-right"><img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-arrow-right.png" alt="Right Arrow" class="arrow-cursol" /></div>
            </div>
          </div>
          <!-- voice swiper -->
          <div class="voice__slide-wrapper swiper">
            <div class="voice__slide swiper-wrapper">
              <div class="voice__slide--card swiper-slide">
                <div class="voice__slide--card-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-picture-1.png" alt="" />
                </div>
                <div class="voice__slide--card-text">
                  <p class="voice__slide--card-text-title">テキストテキストテキストテキストテキスト</p>
                  <p class="voice__slide--card-text-description">
                    本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文本文入ります本文本文入ります本文本文入ります本文
                  </p>
                </div>
              </div>
              <div class="voice__slide--card swiper-slide">
                <div class="voice__slide--card-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-picture-1.png" alt="" />
                </div>
                <div class="voice__slide--card-text">
                  <p class="voice__slide--card-text-title">テキストテキストテキストテキストテキスト</p>
                  <p class="voice__slide--card-text-description">
                    本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文本文入ります本文本文入ります本文本文入ります本文
                  </p>
                </div>
              </div>
              <div class="voice__slide--card swiper-slide">
                <div class="voice__slide--card-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-picture-1.png" alt="" />
                </div>
                <div class="voice__slide--card-text">
                  <p class="voice__slide--card-text-title">テキストテキストテキストテキストテキスト</p>
                  <p class="voice__slide--card-text-description">
                    本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文本文入ります本文本文入ります本文本文入ります本文
                  </p>
                </div>
              </div>
              <div class="voice__slide--card swiper-slide">
                <div class="voice__slide--card-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-picture-1.png" alt="" />
                </div>
                <div class="voice__slide--card-text">
                  <p class="voice__slide--card-text-title">テキストテキストテキストテキストテキスト</p>
                  <p class="voice__slide--card-text-description">
                    本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文本文入ります本文本文入ります本文本文入ります本文
                  </p>
                </div>
              </div>
              <div class="voice__slide--card swiper-slide">
                <div class="voice__slide--card-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-picture-1.png" alt="" />
                </div>
                <div class="voice__slide--card-text">
                  <p class="voice__slide--card-text-title">テキストテキストテキストテキストテキスト</p>
                  <p class="voice__slide--card-text-description">
                    本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文本文入ります本文本文入ります本文本文入ります本文
                  </p>
                </div>
              </div>
              <div class="voice__slide--card swiper-slide">
                <div class="voice__slide--card-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-picture-1.png" alt="" />
                </div>
                <div class="voice__slide--card-text">
                  <p class="voice__slide--card-text-title">テキストテキストテキストテキストテキスト</p>
                  <p class="voice__slide--card-text-description">
                    本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文本文入ります本文本文入ります本文本文入ります本文
                  </p>
                </div>
              </div>
              <div class="voice__slide--card swiper-slide">
                <div class="voice__slide--card-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-picture-1.png" alt="" />
                </div>
                <div class="voice__slide--card-text">
                  <p class="voice__slide--card-text-title">テキストテキストテキストテキストテキスト</p>
                  <p class="voice__slide--card-text-description">
                    本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文本文入ります本文本文入ります本文本文入ります本文
                  </p>
                </div>
              </div>
              <div class="voice__slide--card swiper-slide">
                <div class="voice__slide--card-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-picture-1.png" alt="" />
                </div>
                <div class="voice__slide--card-text">
                  <p class="voice__slide--card-text-title">テキストテキストテキストテキストテキスト</p>
                  <p class="voice__slide--card-text-description">
                    本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文本文入ります本文本文入ります本文本文入ります本文
                  </p>
                </div>
              </div>
              <div class="voice__slide--card swiper-slide">
                <div class="voice__slide--card-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-picture-1.png" alt="" />
                </div>
                <div class="voice__slide--card-text">
                  <p class="voice__slide--card-text-title">テキストテキストテキストテキストテキスト</p>
                  <p class="voice__slide--card-text-description">
                    本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文本文入ります本文本文入ります本文本文入ります本文
                  </p>
                </div>
              </div>
              <div class="voice__slide--card swiper-slide">
                <div class="voice__slide--card-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-picture-1.png" alt="" />
                </div>
                <div class="voice__slide--card-text">
                  <p class="voice__slide--card-text-title">テキストテキストテキストテキストテキスト</p>
                  <p class="voice__slide--card-text-description">
                    本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文本文入ります本文本文入ります本文本文入ります本文
                  </p>
                </div>
              </div>
              <div class="voice__slide--card swiper-slide">
                <div class="voice__slide--card-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-picture-1.png" alt="" />
                </div>
                <div class="voice__slide--card-text">
                  <p class="voice__slide--card-text-title">テキストテキストテキストテキストテキスト</p>
                  <p class="voice__slide--card-text-description">
                    本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文本文入ります本文本文入ります本文本文入ります本文
                  </p>
                </div>
              </div>
              <div class="voice__slide--card swiper-slide">
                <div class="voice__slide--card-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-picture-1.png" alt="" />
                </div>
                <div class="voice__slide--card-text">
                  <p class="voice__slide--card-text-title">テキストテキストテキストテキストテキスト</p>
                  <p class="voice__slide--card-text-description">
                    本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文本文入ります本文本文入ります本文本文入ります本文
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="voice__bottom">
      <img src="<?php echo get_template_directory_uri(); ?>/images/bottom/voice-bottom-pc.png" alt="" data-only-show="pc" />
      <img src="<?php echo get_template_directory_uri(); ?>/images/bottom/voice-bottom-sp.png" alt="" data-only-show="sp" />
    </div>

    <!-- information -->
    <section class="information" id="information">
      <div class="information__inner">
        <h2 class="information__title title">ご利用案内</h2>
        <p class="information__subtitle subtitle">INFORMATION</p>
      </div>

      <div class="information__card--container">
        <div class="information__card">
          <div class="information__card--title">利用料金</div>
          <div class="information__card--table">
            <table>
              <tbody>
                <tr class="information__card--text1">
                  <td class="information__card--left">毎週</td>
                  <td class="information__card--right">
                    1枠のご利用で10,000円<br />
                    2枠のご利用で18,000円<br />
                    3枠のご利用で25,500円<br />
                    4枠のご利用で32,000円
                  </td>
                </tr>
                <tr class="information__card--text1">
                  <td class="information__card--left">月1枠</td>
                  <td class="information__card--right">3,000円/月</td>
                </tr>
                <tr class="information__card--text1">
                  <td class="information__card--left">月2枠</td>
                  <td class="information__card--right">6,000円/月</td>
                </tr>
                <tr class="information__card--text1">
                  <td class="information__card--left">月3枠</td>
                  <td class="information__card--right">9,000円/月</td>
                </tr>
                <tr class="information__card--text1">
                  <td class="information__card--left">単発時間<br />(3時間)</td>
                  <td class="information__card--right">2,500円/1回</td>
                </tr>
                <tr class="information__card--text2">
                  <td class="information__card--bottom" colspan="2">
                    ※利用料は利用日の前月の末日までにお支払いください。<br />※初めての利用の場合は、利用日までにお支払いください。<br />※単発利用を除く契約は利用されない場合でも料金が発生します。<br />
                    ※夏季（６月～９月）、冬季（11月～2月）は冷暖房費200円×枠数を別途ご負担いただきます。
                    <br />※教室運営や営業に関して宣伝用チラシや資料作成など必要であれば協力します。<br />（料金は別途協議）
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="information__card">
          <div class="information__card--title">設備・備品</div>
          <div class="information__card--table">
            <table>
              <tbody>
                <tr class="information__card--text1">
                  <td class="information__card--left">広さ</td>
                  <td class="information__card--right">13㎡(8畳)</td>
                </tr>
                <tr class="information__card--text1">
                  <td class="information__card--left">利用人数</td>
                  <td class="information__card--right">〇〇〇人</td>
                </tr>
                <tr class="information__card--text1">
                  <td class="information__card--left">設備 (無料)</td>
                  <td class="information__card--right">エアコン・ミニキッチン(IH)・トイレ<br />長机(45×180) 3台・パイプ椅子6脚<br />無線Wi-Fi準備中</td>
                </tr>
                <tr class="information__card--text1">
                  <td class="information__card--left">設備 (有料)</td>
                  <td class="information__card--right">コピー機(A4用紙1枚 白黒5円/カラー50円) <br />電気ケトル・鍋・旗棒(各100円/日)</td>
                </tr>
                <tr class="information__card--text1">
                  <td class="information__card--left">駐車場</td>
                  <td class="information__card--right">1台(複数台ご利用を希望される場合はご相談ください)<br />自転車・バイク置き場有り</td>
                </tr>
                <tr class="information__card--text2">
                  <td class="information__card--bottom" colspan="2">
                    ※故意または過失により必要となった修繕に要する費用は負担していただきます。<br />
                    ※各自の物品は持ち帰り下さい。<br />
                    ※レンタルルーム使用中の事故、怪我、盗難については各使用責任者が負うこととします。 <br />※使用後はゴミの持ち帰り、清掃をお願いします。
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <div class="information__bottom">
      <img src="<?php echo get_template_directory_uri(); ?>/images/bottom/info-bottom-pc.png" alt="" data-only-show="pc" />
      <img src="<?php echo get_template_directory_uri(); ?>/images/bottom/info-bottom-sp.png" alt="" data-only-show="sp" />
    </div>

    <!-- gallery -->

    <section class="gallery" id="gallery">
      <div class="gallery__inner">
        <h2 class="gallery__title title">ギャラリー</h2>
        <p class="gallery__subtitle subtitle">GALLERY</p>

        <div class="gallery__swiper-top swiper">
          <div class="swiper-wrapper gallery__swiper-wrapper">
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-1.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-2.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-3.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-4.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-5.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-6.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-7.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-8.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-9.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-10.png" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="gallery__swiper-bottom swiper">
          <div class="swiper-wrapper gallery__swiper-wrapper">
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-1.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-2.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-3.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-4.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-5.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-6.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-7.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-8.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-9.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide gallery__swiper-slide">
              <div class="swiper-slide__img gallery__swiper-slide--img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/gallery-10.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- access -->
    <section class="access" id="access">
      <div class="access__top">
        <img src="<?php echo get_template_directory_uri(); ?>/images/bottom/gallery-bottom-pc.png" alt="" data-only-show="pc" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/bottom/gallery-bottom-sp.png" alt="" data-only-show="sp" />
      </div>
      <div class="access__inner">
        <h2 class="access__title title">アクセス</h2>
        <p class="access__subtitle subtitle">ACCESS</p>
        <div class="access__map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.558206747203!2d135.36475447635848!3d34.79189567831327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000f3fad9062a4d%3A0x612f5914b74ea82f!2z44CSNjY1LTAwNDEg5YW15bqr55yM5a6d5aGa5biC5b6h5omA44Gu5YmN55S677yR77yT4oiS77yR77yZ!5e0!3m2!1sja!2sjp!4v1731499807661!5m2!1sja!2sjp"
            title="Google Maps"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </section>

    <!-- message -->
    <section class="message" id="message">
      <div class="message__inner">
        <h2 class="message__title title">代表メッセージ</h2>
        <p class="message__subtitle subtitle">MESSAGE</p>
        <div class="message__image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/message/image-photo.png" alt="" class="message__image--photo" />
        </div>
        <div class="message__text">
          <p class="message__text--description">
            本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入ります本文入り
          </p>
        </div>
      </div>
    </section>
    <div class="message__bottom">
      <img src="<?php echo get_template_directory_uri(); ?>/images/bottom/message-bottom-pc.png" alt="" data-only-show="pc" />
      <img src="<?php echo get_template_directory_uri(); ?>/images/bottom/message-bottom-sp.png" alt="" data-only-show="sp" />
    </div>

    <!-- footer -->
    <footer class="footer">
      
      <div class="footer__inner">
        <div class="footer__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/footer/space-icon.png" alt="rental space logo" />
        </div>
        <!-- footer container -->
        <div class="footer__container">
          <div class="footer__sns">
            <a href="https://www.instagram.com/your-instagram-profile" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo get_template_directory_uri(); ?>/images/footer/sns-icon.png" alt="instagram" class="footer__sns" />
            </a>
          </div>
          <div class="footer__text">
            レンタルスペース宝塚<br />
            〒665-0041<br />
            兵庫県宝塚市御所の前町13-19 (県道沿い)
          </div>
        </div>
        <!-- footer button -->
        <div class="footer__button">
          <a href="mailto:example@example.com?subject=お問い合わせ&body=こちらにお問い合わせ内容をご記入ください。" target="_blank" class="footer__button-link">
            <div class="footer__button-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/images/footer/form-icon.png" alt="" />
            </div>
            <div class="footer__button-text">体験・見学お申込み</div>
          </a>
        </div>
        <div class="footer__copy">
          <p class="copyright"><a href="" target="_blank">© 2024 InfoFarm co.,Ltd</a></p>
        </div>
      </div>
      <a href="#" class="pagetop" id="js-pagetop"><img src="<?php echo get_template_directory_uri(); ?>/images/footer/pagetop.png" alt="" /></a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script/app.js"></script>
  </body>
</html>
