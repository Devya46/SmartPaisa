<?php include_once 'header.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Money 24/7</title>
    <link
      rel="icon"
      type="image/png"
      href="Photos/SMART MONEY LOGO 01 (1).png"
    />
    <style>
      body {
        font-family: "Poppins", Arial, sans-serif !important;
      }
    </style>
  </head>
  <body>
    <!-- -----header----- -->
  </body>
</html>

<!-- ----- page heading----- -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Masterclass Courses</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <style>
      /* =========================================================
       GLOBAL
    ========================================================= */

      * {
        box-sizing: border-box;
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        margin: 0;
        padding: 0;

        background: #fffefe;
        color: #ffffff;

        font-family: "Inter", sans-serif;
      }

      /* =========================================================
       HERO
    ========================================================= */

      .edu-masterclass-hero {
        position: relative;

        width: 100%;
        height: 390px;

        overflow: visible;

        background-image: url("https://images.unsplash.com/photo-1660547923766-1214fc9e0a83?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTEyfHx3ZXxlbnwwfHwwfHx8MA%3D%3D");

        background-size: cover;
        background-position: center;

        display: flex;
        align-items: center;
      }

      /* Dark overlay */

      .edu-masterclass-hero::before {
        content: "";

        position: absolute;
        inset: 0;

        background: linear-gradient(
          90deg,
          rgba(3, 7, 12, 0.86) 0%,
          rgba(3, 10, 18, 0.67) 45%,
          rgba(3, 7, 12, 0.42) 100%
        );

        z-index: 1;
      }

      /* Bottom dark fade */

      .edu-masterclass-hero::after {
        content: "";

        position: absolute;

        left: 0;
        right: 0;
        bottom: 0;

        height: 110px;

        background: linear-gradient(to top, rgba(5, 5, 5, 0.45), transparent);

        z-index: 1;
      }

      /* Hero content */

      .edu-masterclass-hero-content {
        position: relative;
        z-index: 2;

        width: min(1470px, calc(100% - 80px));

        margin: 0 auto;
      }

      .edu-masterclass-hero-title {
        margin: 0 38px;
        color: #ffffff;
        font-size: 37px;
        font-weight: 700;
        line-height: 43px;
        letter-spacing: -1.5px;
        text-shadow: 0 5px 25px rgba(0, 0, 0, 0.45);
      }

      /* Gold underline */

      .edu-masterclass-hero-title::after {
        content: "";

        display: block;

        width: 52px;
        height: 3px;

        margin-top: 17px;

        border-radius: 20px;

        background: linear-gradient(90deg, #c49a3a, #f2d477);
      }

      /* =========================================================
       BREADCRUMB
    ========================================================= */

      .edu-masterclass-breadcrumb {
        position: absolute;

        z-index: 5;

        right: 11.3%;
        bottom: 0;

        min-width: 345px;
        height: 78px;

        padding: 0 38px;

        display: flex;

        align-items: center;
        justify-content: center;

        gap: 11px;

        background: #090909;

        border-radius: 12px 12px 0 0;

        box-shadow: 0 -10px 35px rgba(0, 0, 0, 0.35);
      }

      /* Gold top line */

      .edu-masterclass-breadcrumb::before {
        content: "";

        position: absolute;

        top: 0;
        left: 35px;
        right: 35px;

        height: 2px;

        background: linear-gradient(90deg, transparent, #d7b45b, transparent);
      }

      .edu-masterclass-breadcrumb a {
        color: #ffffff;

        text-decoration: none;

        font-size: 14px;

        font-weight: 600;

        transition: 0.25s ease;
      }

      .edu-masterclass-breadcrumb a:hover {
        color: #d8b45c;
      }

      .edu-masterclass-breadcrumb-separator {
        color: #666666;

        font-size: 14px;
      }

      .edu-masterclass-breadcrumb-current {
        color: #e2bd55;

        font-size: 14px;

        font-weight: 600;
      }

      /* =========================================================
       RESPONSIVE — TABLET
    ========================================================= */

      @media (max-width: 900px) {
        .edu-masterclass-container {
          width: min(650px, 100%);
        }

        .edu-masterclass-grid {
          grid-template-columns: repeat(2, 1fr);

          gap: 25px 16px;
        }

        .edu-masterclass-breadcrumb {
          right: 5%;
        }
      }

      /* =========================================================
       RESPONSIVE — MOBILE
    ========================================================= */

      @media (max-width: 600px) {
        .edu-masterclass-hero {
          height: 300px;

          background-position: center;
        }

        .edu-masterclass-hero-content {
          width: calc(100% - 35px);
        }

        .edu-masterclass-hero-title {
          font-size: 34px;
        }

        .edu-masterclass-breadcrumb {
          right: 15px;

          min-width: unset;

          width: auto;

          height: 58px;

          padding: 0 17px;

          gap: 7px;

          border-radius: 8px 8px 0 0;
        }

        .edu-masterclass-breadcrumb a,
        .edu-masterclass-breadcrumb-separator,
        .edu-masterclass-breadcrumb-current {
          font-size: 10px;
        }

        .edu-masterclass-courses {
          padding: 65px 15px 70px;
        }

        .edu-masterclass-header {
          margin-bottom: 30px;
        }

        .edu-masterclass-heading {
          font-size: 32px;
        }

        .edu-masterclass-grid {
          grid-template-columns: 1fr;

          gap: 22px;
        }

        .edu-masterclass-card-image {
          height: 185px;
        }

        .edu-masterclass-card-content {
          padding: 18px;
        }

        .edu-masterclass-card-title {
          font-size: 13px;
        }
      }

      /* =========================================================
       SMALL MOBILE
    ========================================================= */

      @media (max-width: 400px) {
        .edu-masterclass-hero {
          height: 270px;
        }

        .edu-masterclass-hero-title {
          font-size: 29px;
        }

        .edu-masterclass-breadcrumb {
          height: 52px;

          padding: 0 12px;
        }

        .edu-masterclass-courses {
          padding-top: 58px;
        }
      }
    </style>
  </head>

  <body>
    <!-- =========================================================
     HERO
========================================================= -->

    <section class="edu-masterclass-hero">
      <div class="edu-masterclass-hero-content">
        <h1 class="edu-masterclass-hero-title">Frequently Asked Questions</h1>
      </div>

      <!-- Breadcrumb -->

      <div class="edu-masterclass-breadcrumb">
        <a href="#"> Home </a>

        <span class="edu-masterclass-breadcrumb-separator"> / </span>

        <strong class="edu-masterclass-breadcrumb-current"> FAQ </strong>
      </div>
    </section>
  </body>
</html>

<!-- ----alll----- -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Global Market Insights · FAQ</title>
    <!-- Font Awesome 6 (free) -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        background: #f4f7fc;
        font-family:
          system-ui,
          -apple-system,
          "Segoe UI",
          Roboto,
          sans-serif;
        color: #0b1a2b;
      }

      /* ─── FAQ LAYOUT ─── */
      .faq-wrapper {
        max-width: 1300px;
        margin: 40px auto 60px;
        padding: 0 30px;
        display: flex;
        gap: 40px;
        align-items: flex-start;
      }

      .faq-nav {
        flex: 0 0 260px;
        background: #ffffff;
        border-radius: 24px;
        padding: 20px 0;
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.04);
        border: 1px solid rgba(0, 0, 0, 0.03);
        position: sticky;
        top: 110px;
        transition: all 0.2s;
      }

      .faq-nav .nav-title {
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #6b7f93;
        padding: 0 20px 12px;
        border-bottom: 1px solid #eef2f6;
        font-weight: 600;
      }

      .faq-nav ul {
        list-style: none;
        padding: 8px 0 0;
        margin: 0;
      }

      .faq-nav li {
        padding: 0 12px;
      }

      .faq-nav li a {
        display: block;
        padding: 8px 16px;
        border-radius: 40px;
        font-size: 19px;
        font-weight: 500;
        color: #1c2e40;
        text-decoration: none;
        transition: 0.2s;
      }

      .faq-nav li a i {
        width: 22px;
        color: #b8860b;
        margin-right: 6px;
      }

      .faq-nav li a:hover {
        background: #fcf3e0;
      }

      .faq-nav li a.active {
        background: #000000;
        color: #fff;
      }
      .faq-nav li a.active i {
        color: #fff;
      }

      .faq-content {
        flex: 1;
        background: #ffffff;
        border-radius: 28px;
        padding: 28px 36px 36px;
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.03);
        border: 1px solid rgba(0, 0, 0, 0.02);
      }

      .faq-content h2 {
        font-size: 32px;
        font-weight: 700;
        margin: 0 0 6px;
        color: #0b1a2b;
        letter-spacing: -0.3px;
      }

      .faq-content .faq-sub {
        color: #4d6679;
        border-bottom: 1px solid #eef2f6;
        padding-bottom: 18px;
        margin-bottom: 28px;
        font-size: 1rem;
      }

      .faq-item {
        margin-bottom: 28px;
      }

      .faq-item h3 {
        font-size: 20px;
        font-weight: 600;
        color: #0b1a2b;
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 6px;
      }

      .faq-item h3 i {
        color: #b8860b;
        font-size: 1rem;
        width: 22px;
        flex-shrink: 0;
      }

      .faq-item p {
        color: #1f3448;
        line-height: 1.6;
        font-size: 16.5px;
        padding-left: 36px;
      }

      .faq-item p strong {
        color: #0b1a2b;
      }

      /* ─── CTA ─── */
      .cta-section {
        max-width: 1300px;
        margin: 20px auto 60px;
        padding: 0 30px;
      }

      .cta-box {
        position: relative;
        overflow: hidden;
        isolation: isolate;

        background: linear-gradient(
          135deg,
          rgba(5, 5, 5, 0.638) 0%,
          rgba(35, 27, 8, 0.688) 45%,
          rgba(184, 135, 11, 0.501) 100%
        );

        border-radius: 32px;
        padding: 55px 40px;
        text-align: center;

        border: 1px solid rgba(226, 177, 45, 0.45);

        box-shadow:
          0 20px 60px rgba(0, 0, 0, 0.35),
          0 0 40px rgba(190, 139, 15, 0.12);

        color: #fff;
      }

      /* Background image */
      .cta-box::before {
        content: "";
        position: absolute;
        inset: 0;

        background-image: url("Photos/11-22.png");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

        /* opacity: 0.32; */
        z-index: -2;

        transform: scale(1.03);
      }

      .cta-box > * {
        position: relative;
        z-index: 2;
      }

      .cta-box h2 {
        font-size: 39px;
        font-weight: 600;
        color: #fff;
        margin-bottom: 6px;
        font-family: "Poppins", Arial, sans-serif !important;
      }

      .cta-box h2 i {
        color: #efe666;
        margin-right: 10px;
        padding: 12px 14px;
        background: #654800b8;
        border-radius: 50px;
        margin-bottom: 10px;
        font-size: 30px;
      }

      .cta-box p {
        color: rgba(255, 255, 255, 0.8);
        font-size: 1.1rem;
        max-width: 600px;
        margin: 8px auto 20px;
      }

      .cta-box .btn-gold {
        background: linear-gradient(
          135deg,
          #f7f18c 0%,
          #efe666 45%,
          #d8a91c 100%
        );
        border: none;
        padding: 14px 44px;
        border-radius: 60px;
        font-weight: 700;
        font-size: 1.05rem;
        color: #01060e;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        text-decoration: none;
        transition: 0.25s;
        box-shadow: 0 8px 28px rgba(239, 230, 102, 0.15);
        cursor: pointer;
        margin-top: 4px;
      }

      .cta-box .btn-gold:hover {
        transform: scale(1.03);
        box-shadow: 0 12px 40px rgba(239, 230, 102, 0.25);
      }

      .cta-box .btn-outline-light {
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.25);
        padding: 14px 36px;
        border-radius: 60px;
        font-weight: 600;
        font-size: 1rem;
        color: #fff;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        transition: 0.2s;
        backdrop-filter: blur(2px);
        margin-left: 12px;
      }

      .cta-box .btn-outline-light:hover {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.5);
      }

      .cta-box .action-group {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 12px;
        margin: 6px 0 0;
      }

      .more-questions {
        margin-top: 20px;
        border-top: 1px solid #eef2f6;
        padding-top: 24px;
        text-align: center;
        color: #4d6679;
      }

      .more-questions i {
        color: #b8860b;
        margin-right: 8px;
      }

      /* ─── RESPONSIVE: horizontal nav with wrap, no scroll ─── */
      @media (max-width: 1024px) {
        .faq-wrapper {
          gap: 28px;
          padding: 0 24px;
        }
        .faq-nav {
          flex: 0 0 220px;
        }
      }

      @media (max-width: 860px) {
        .faq-wrapper {
          flex-direction: column;
          padding: 0 20px;
          margin: 28px auto 40px;
          gap: 20px;
        }

        .faq-nav {
          flex: 1 1 auto;
          width: 100%;
          position: static;
          padding: 16px 0 10px;
          background: transparent;
          box-shadow: none;
          border: none;
          border-radius: 0;
          overflow: visible;
        }

        .faq-nav .nav-title {
          display: none;
        }

        .faq-nav ul {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          gap: 8px;
          padding: 4px 0 8px;
          border-bottom: 1px solid rgba(0, 0, 0, 0.06);
        }

        .faq-nav li {
          padding: 0;
          flex: 0 1 auto;
        }

        .faq-nav li a {
          padding: 8px 18px;
          background: #ffffff;
          border: 1px solid #e2e8f0;
          border-radius: 40px;
          font-size: 0.82rem;
          white-space: nowrap;
          box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
          display: inline-flex;
          align-items: center;
          gap: 4px;
        }

        .faq-nav li a i {
          margin-right: 4px;
          width: auto;
          font-size: 0.8rem;
        }

        .faq-nav li a.active {
          background: #b8860b;
          color: #fff;
          border-color: #b8860b;
        }
        .faq-nav li a.active i {
          color: #fff;
        }

        .faq-content {
          padding: 24px 20px 28px;
          border-radius: 24px;
        }

        .faq-content h2 {
          font-size: 1.5rem;
        }

        .faq-item {
          margin-bottom: 22px;
        }

        .faq-item h3 {
          font-size: 1rem;
          gap: 8px;
        }

        .faq-item p {
          padding-left: 0;
          font-size: 0.95rem;
        }

        .cta-box {
          padding: 32px 24px;
          border-radius: 32px;
        }

        .cta-box h2 {
          font-size: 1.6rem;
        }

        .cta-box .action-group {
          flex-direction: column;
          align-items: center;
        }

        .cta-box .btn-outline-light {
          margin-left: 0;
        }

        .cta-section {
          padding: 0 20px;
        }
      }

      @media (max-width: 600px) {
        .faq-nav ul {
          gap: 6px;
        }
        .faq-nav li a {
          font-size: 0.75rem;
          padding: 6px 14px;
        }
        .faq-nav li a i {
          font-size: 0.7rem;
        }
      }

      @media (max-width: 480px) {
        .faq-page-header {
          padding: 7.5rem 0 30px;
        }

        .faq-page-header h1 {
          font-size: 2rem;
        }

        .faq-page-header .subhead {
          font-size: 0.95rem;
          padding: 0 10px;
        }

        .faq-page-header .breadcrumb {
          font-size: 0.75rem;
          gap: 6px;
          flex-wrap: wrap;
          justify-content: center;
        }

        .faq-wrapper {
          padding: 0 12px;
          margin: 20px auto 32px;
        }

        .faq-nav ul {
          gap: 5px;
        }

        .faq-nav li a {
          font-size: 0.7rem;
          padding: 5px 12px;
          border-radius: 30px;
        }

        .faq-nav li a i {
          font-size: 0.65rem;
          margin-right: 2px;
        }

        .faq-content {
          padding: 18px 30px 22px;
          border-radius: 20px;
        }

        .faq-content h2 {
          font-size: 1.3rem;
        }

        .faq-content .faq-sub {
          font-size: 0.9rem;
          padding-bottom: 14px;
          margin-bottom: 20px;
        }

        .faq-item {
          margin-bottom: 18px;
        }

        .faq-item h3 {
          font-size: 0.95rem;
        }

        .faq-item p {
          font-size: 0.9rem;
          line-height: 1.5;
        }

        .cta-box {
          padding: 24px 16px;
          border-radius: 24px;
        }

        .cta-box h2 {
          font-size: 1.3rem;
        }

        .cta-box p {
          font-size: 0.95rem;
        }

        .cta-box .btn-gold {
          padding: 12px 28px;
          font-size: 0.95rem;
        }

        .cta-box .btn-outline-light {
          padding: 12px 24px;
          font-size: 0.9rem;
        }

        .cta-section {
          padding: 0 12px;
          margin: 16px auto 40px;
        }

        .more-questions {
          font-size: 0.9rem;
          padding-top: 18px;
          margin-top: 16px;
        }
      }

      @media (max-width: 380px) {
        .faq-page-header h1 {
          font-size: 1.7rem;
        }
        .faq-nav li a {
          font-size: 0.65rem;
          padding: 4px 10px;
        }
        .faq-content {
          padding: 14px 10px 18px;
        }
        .faq-item h3 {
          font-size: 0.85rem;
        }
        .faq-item p {
          font-size: 0.85rem;
        }
      }
    </style>
  </head>
  <body>
    <!-- ============ FAQ ============ -->
    <div class="faq-wrapper">
      <!-- left nav -->
      <nav class="faq-nav">
        <div class="nav-title">
          <i class="fas fa-list-ul" style="margin-right: 6px"></i> Topics
        </div>
        <ul>
          <li>
            <a href="#" class="active" data-target="general"
              ><i class="fas fa-globe"></i> General</a
            >
          </li>
          <li>
            <a href="#" data-target="courses"
              ><i class="fas fa-graduation-cap"></i> Courses</a
            >
          </li>
          <li>
            <a href="#" data-target="account"
              ><i class="fas fa-user-circle"></i> Access</a
            >
          </li>
          <li>
            <a href="#" data-target="tools"
              ><i class="fas fa-calculator"></i> Tools</a
            >
          </li>
          <li>
            <a href="#" data-target="market"
              ><i class="fas fa-chart-bar"></i> Market</a
            >
          </li>
          <li>
            <a href="#" data-target="risk"
              ><i class="fas fa-shield-alt"></i> Risk</a
            >
          </li>
          <li>
            <a href="#" data-target="support"
              ><i class="fas fa-headset"></i> Support</a
            >
          </li>
        </ul>
      </nav>

      <!-- right Q&A content -->
      <div class="faq-content" id="faqContent">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-sub">Quick answers to the most common questions</div>

        <!-- General & Platform -->
        <div class="faq-category" id="general">
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> What is Smart Money 24/7?
            </h3>
            <p>
              Smart Money 24/7 is an online Forex learning platform that
              provides structured video courses, practical trading education,
              professional trading tools, and real-time market insights to help
              traders build knowledge, confidence, and discipline.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Who can learn from Smart
              Money 24/7?
            </h3>
            <p>
              The platform is designed for traders at all levels — from complete
              beginners learning Forex fundamentals to experienced traders
              looking to improve their strategies, risk management, and market
              analysis.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Do I need previous Forex
              trading experience?
            </h3>
            <p>
              No. Our courses are structured to take you from the basics through
              advanced concepts, making them suitable for beginners as well as
              experienced traders.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Can I learn at my own pace?
            </h3>
            <p>
              Yes. Courses are available on demand, allowing you to watch
              lessons and progress through the learning material at your own
              pace.
            </p>
          </div>
        </div>

        <!-- Courses & Learning -->
        <div class="faq-category" id="courses" style="display: none">
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> What topics are covered in
              the Forex courses?
            </h3>
            <p>
              Our learning content covers Forex fundamentals, currency pairs,
              pips, leverage, technical analysis, price action, trading
              strategies, risk management, trading psychology, and advanced
              trading concepts.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> How are the courses
              structured?
            </h3>
            <p>
              Courses are organized into structured video lessons and learning
              modules, allowing you to progress step-by-step from foundational
              concepts to more advanced topics.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Are the courses
              video-based?
            </h3>
            <p>
              Yes. Smart Money 24/7 primarily provides professional, on-demand
              video lessons designed to make complex Forex concepts easier to
              understand.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Can beginners start
              directly with the courses?
            </h3>
            <p>
              Yes. Beginners can start with the foundational modules and
              gradually progress toward technical analysis, strategies, risk
              management, and advanced concepts.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Can experienced traders
              also benefit from the courses?
            </h3>
            <p>
              Absolutely. Experienced traders can use the advanced lessons,
              practical strategies, market insights, and trading tools to
              strengthen their existing knowledge and refine their approach.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Do I receive a certificate
              after completing a course?
            </h3>
            <p>
              Yes. Eligible courses include a Certificate of Completion to
              recognize your successful completion of the learning program.
            </p>
          </div>
        </div>

        <!-- Account & Course Access -->
        <div class="faq-category" id="account" style="display: none">
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> How do I access my
              purchased course?
            </h3>
            <p>
              Create your account, purchase your selected course, and access the
              course through your learning dashboard.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> When do I get access after
              purchasing a course?
            </h3>
            <p>
              Course access is provided through your account after a successful
              purchase, allowing you to begin learning through your dashboard.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Can I access my courses
              from different devices?
            </h3>
            <p>
              Yes. The platform is designed to provide convenient access across
              supported devices, so you can continue learning wherever you are.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> How long can I access my
              course?
            </h3>
            <p>
              Course access depends on the specific program you purchase. Where
              lifetime access is included, you can return to the course and
              continue learning at your own pace.
            </p>
          </div>
        </div>

        <!-- Trading Tools -->
        <div class="faq-category" id="tools" style="display: none">
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> What trading tools are
              available on the platform?
            </h3>
            <p>
              Smart Money 24/7 provides practical tools such as the
              <strong
                >Position Size Calculator, Pip Value Calculator, and Currency
                Strength Meter</strong
              >
              to support better trade planning and risk management.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> What is the Position Size
              Calculator used for?
            </h3>
            <p>
              It helps determine an appropriate trade size based on your account
              balance, risk percentage, stop-loss distance, currency pair, and
              account currency.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> What is the Pip Value
              Calculator used for?
            </h3>
            <p>
              The Pip Value Calculator helps determine the monetary value of a
              pip based on your currency pair, account currency, lot size, and
              exchange rate.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Are the trading calculators
              suitable for beginners?
            </h3>
            <p>
              Yes. The calculators are designed to simplify common trading
              calculations and help beginners understand position sizing, pip
              values, and risk more easily.
            </p>
          </div>
        </div>

        <!-- Market Intelligence -->
        <div class="faq-category" id="market" style="display: none">
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> What is the Economic
              Calendar used for?
            </h3>
            <p>
              The Economic Calendar helps traders track important economic
              events such as interest-rate decisions, inflation data, employment
              reports, GDP releases, and other potentially market-moving events.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Is the Economic Calendar
              updated in real time?
            </h3>
            <p>
              The calendar provides live market-event information through its
              integrated market-data provider. Availability and update frequency
              may depend on the underlying data source.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Does Smart Money 24/7
              provide live Forex news?
            </h3>
            <p>
              Yes. The platform includes a live market-news section featuring
              financial headlines and market-moving developments.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Why are economic news and
              events important for Forex traders?
            </h3>
            <p>
              Major economic announcements can create significant market
              volatility. Following the economic calendar and relevant news can
              help traders understand potential market catalysts and plan their
              trades more carefully.
            </p>
          </div>
        </div>

        <!-- Risk Management & Trading -->
        <div class="faq-category" id="risk" style="display: none">
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Does Smart Money 24/7
              provide trading signals?
            </h3>
            <p>
              The platform focuses primarily on Forex education, market
              knowledge, strategies, and trading tools. Any market analysis or
              educational examples should be used as learning material rather
              than guaranteed trade recommendations.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Does completing a course
              guarantee profitable trading?
            </h3>
            <p>
              No. Trading involves significant risk, and education cannot
              guarantee profits. The courses are designed to help you develop
              knowledge, skills, risk-management practices, and disciplined
              decision-making.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Why is risk management
              included in the courses?
            </h3>
            <p>
              Risk management is an essential part of responsible trading. The
              courses cover concepts such as position sizing, stop-loss
              planning, and maintaining consistent risk to help traders manage
              potential losses.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Can I use the calculators
              before placing every trade?
            </h3>
            <p>
              Yes. Using position-sizing and pip-value calculations before
              entering a trade can help you understand your potential risk and
              maintain more consistent trade sizing.
            </p>
          </div>
        </div>

        <!-- Support & Community -->
        <div class="faq-category" id="support" style="display: none">
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Is there community support
              available?
            </h3>
            <p>
              Smart Money 24/7 is designed to provide a learning environment
              where traders can interact, learn, and grow together, depending on
              the community features available with your course or membership.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Can I ask questions about
              the course material?
            </h3>
            <p>
              Course-specific support depends on the program and support
              features included with your purchase.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Can I continue learning
              after completing a course?
            </h3>
            <p>
              Yes. Where lifetime access is provided, you can revisit lessons
              and continue using the available educational resources at your own
              pace.
            </p>
          </div>
          <div class="faq-item">
            <h3>
              <i class="fas fa-question-circle"></i> Is Smart Money 24/7 a
              financial advisory or brokerage service?
            </h3>
            <p>
              Smart Money 24/7 is an educational platform. Its courses,
              calculators, market information, news, and other resources are
              provided for educational and informational purposes and should not
              be considered personalized financial advice or a guarantee of
              trading results.
              <strong
                >Forex trading involves substantial risk, and you can lose
                money.</strong
              >
            </p>
          </div>
        </div>

        <div class="more-questions">
          <i class="fas fa-comment-dots"></i> Still have questions? Reach out to
          our support team.
        </div>
      </div>
    </div>

    <!-- ============ CTA SECTION (last) ============ -->
    <div class="cta-section">
      <div class="cta-box">
        <h2>
          <i class="fas fa-rocket"></i> <br />Ready to Master the Markets?
        </h2>
        <p>
          Join Smart Money 24/7 and get full access to video courses, trading
          tools, economic calendar, live news, and more.
        </p>
        <div class="action-group">
          <a href="#" class="btn-gold"
            ><i class="fas fa-play-circle"></i> Start Learning</a
          >
          <a href="#" class="btn-outline-light"
            ><i class="fas fa-headset"></i> Contact Support</a
          >
        </div>
        <p
          style="margin-top: 20px; font-size: 0.8rem; opacity: 0.5; color: #fff"
        >
          More questions? Reach us at support@smartmoney247.com
        </p>
      </div>
    </div>

    <!-- ============ FAQ NAVIGATION TOGGLE ============ -->
    <script>
      (function () {
        const navLinks = document.querySelectorAll(".faq-nav a");
        const categories = {
          general: document.getElementById("general"),
          courses: document.getElementById("courses"),
          account: document.getElementById("account"),
          tools: document.getElementById("tools"),
          market: document.getElementById("market"),
          risk: document.getElementById("risk"),
          support: document.getElementById("support"),
        };

        function showCategory(id) {
          Object.keys(categories).forEach((key) => {
            if (categories[key]) categories[key].style.display = "none";
          });
          if (categories[id]) categories[id].style.display = "block";
          navLinks.forEach((link) => link.classList.remove("active"));
          document
            .querySelector(`.faq-nav a[data-target="${id}"]`)
            ?.classList.add("active");
        }

        navLinks.forEach((link) => {
          link.addEventListener("click", function (e) {
            e.preventDefault();
            const target = this.getAttribute("data-target");
            if (target && categories[target]) {
              showCategory(target);
            }
          });
        });

        // default: show General
        showCategory("general");
      })();
    </script>
  </body>
</html>

<!-- ----footer---- -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Money 24/7 · Footer</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome 6 (free) -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <style>
      /* ---------- ROOT VARIABLES ---------- */
      :root {
        --smart-primary: #0b2b3b;
        --smart-secondary: #1c4e6a;
        --smart-accent: #3b8c9e;
        --smart-gold: #d4af37;
        --smart-dark-gold: #b8962e;
        --smart-navy: #04121c;
        --smart-white: #ffffff;
        --smart-light-bg: #f4f7fa;
        --smart-light-gray: #e0e5ec;
        --smart-dark-text: #0f1a24;
        --smart-secondary-text: #6b7f8e;
      }

      /* ---------- RESET / BASE ---------- */
      .footer-smart * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      .footer-smart {
        font-family: "Poppins", Arial, sans-serif !important;
        background: linear-gradient(
          145deg,
          #001e32 0%,
          #000000 40%,
          #001e32 100%
        );
        padding: 40px 0 18px;
        color: #fff;
        width: 100%;
        border-top: 2px solid #444444;
      }

      .footer-smart .container {
        width: 92%;
        max-width: 1200px;
        margin: 0 auto;
      }

      /* ---------- GRID: 3 columns (desktop) ---------- */
      .footer-smart .footer-grid {
        display: grid;
        grid-template-columns: 2fr 1.2fr 1.2fr;
        gap: 40px;
        align-items: start;
      }

      /* ---------- LOGO ---------- */
      .footer-smart .footer-logo {
        width: 270px;
        height: auto;
        display: block;
        filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.4));
      }

      .footer-smart .footer-about p {
        color: #cbd8e3;
        font-size: 14px;
        line-height: 1.7;
        margin-top: 12px;
        max-width: 400px;
      }

      /* ---------- HEADINGS ---------- */
      .footer-smart h3 {
        font-size: 18px;
        margin-bottom: 20px;
        position: relative;
        font-weight: 600;
        color: var(--smart-white);
        letter-spacing: 0.3px;
      }

      .footer-smart h3::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -8px;
        width: 40px;
        height: 3px;
        background: var(--smart-gold);
        border-radius: 10px;
      }

      /* ---------- LISTS ---------- */
      .footer-smart ul {
        list-style: none;
        padding: 0;
      }

      .footer-smart ul li {
        margin-bottom: 10px;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
        color: #cbd8e3;
      }

      .footer-smart ul li a {
        text-decoration: none;
        color: #cbd8e3;
        transition: 0.2s;
        font-size: 14px;
      }

      .footer-smart ul li a:hover {
        color: var(--smart-gold);
        padding-left: 4px;
      }

      .footer-smart ul li i {
        color: var(--smart-gold);
        width: 22px;
        font-size: 15px;
        text-align: center;
      }

      /* ---------- SOCIAL (icons only) ---------- */
      .footer-smart .social {
        display: flex;
        gap: 12px;
        margin-top: 20px;
        flex-wrap: wrap;
      }

      .footer-smart .social a {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.07);
        border: 1px solid rgba(212, 175, 55, 0.25);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 16px;
        text-decoration: none;
        transition: 0.3s;
      }

      .footer-smart .social a:hover {
        background: var(--smart-gold);
        color: #000;
        transform: translateY(-3px);
        border-color: var(--smart-gold);
      }

      /* ---------- BOTTOM BAR ---------- */
      .footer-smart .footer-bottom {
        margin-top: 35px;
        padding-top: 18px;
        border-top: 1px solid rgba(212, 175, 55, 0.25);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 12px;
      }

      .footer-smart .footer-bottom p {
        color: #b7c7d4;
        font-size: 13px;
        margin: 0;
      }

      .footer-smart .footer-bottom p strong {
        color: var(--smart-gold);
        font-weight: 600;
      }

      .footer-smart .footer-bottom-links {
        display: flex;
        gap: 18px;
        flex-wrap: wrap;
      }

      .footer-smart .footer-bottom-links a {
        color: #b7c7d4;
        text-decoration: none;
        font-size: 13px;
        transition: 0.2s;
      }

      .footer-smart .footer-bottom-links a:hover {
        color: var(--smart-gold);
      }

      .footer-smart .footer-bottom-links a i {
        color: var(--smart-gold);
        margin-right: 4px;
      }

      /* ---------- RESPONSIVE: tablet 2 cols, mobile 1 col, always left-aligned ---------- */
      @media (max-width: 991px) {
        .footer-smart .footer-grid {
          grid-template-columns: 1fr 1fr;
          gap: 30px 20px;
        }
        .footer-smart .footer-about p {
          max-width: 100%;
        }
        .footer-smart .footer-about,
        .footer-smart .footer-about p,
        .footer-smart .footer-about .social,
        .footer-smart h3,
        .footer-smart ul li,
        .footer-smart .footer-bottom {
          text-align: left;
          justify-content: flex-start;
        }
        .footer-smart .footer-about {
          align-items: flex-start;
        }
        .footer-smart h3::after {
          left: 0;
          transform: none;
        }
        .footer-smart ul li {
          justify-content: flex-start;
        }
        .footer-smart .social {
          justify-content: flex-start;
        }
      }

      @media (max-width: 768px) {
        .footer-smart .footer-grid {
          display: grid;
          grid-template-columns: 1fr 1fr;
          gap: 20px 16px;
        }
        .footer-smart .footer-grid > div:nth-child(1) {
          grid-column: 1 / -1;
        }
        .footer-smart .footer-grid > div:nth-child(2) {
          grid-column: 1 / 2;
        }
        .footer-smart .footer-grid > div:nth-child(3) {
          grid-column: 2 / 3;
        }

        .footer-smart .footer-about p {
          max-width: 100%;
        }
        .footer-smart .footer-about,
        .footer-smart .footer-about p,
        .footer-smart .footer-about .social,
        .footer-smart h3,
        .footer-smart ul li,
        .footer-smart .footer-bottom {
          text-align: left;
          justify-content: flex-start;
        }
        .footer-smart .footer-about {
          align-items: flex-start;
        }
        .footer-smart h3::after {
          left: 0;
          transform: none;
        }
        .footer-smart ul li {
          justify-content: flex-start;
        }
        .footer-smart .social {
          justify-content: flex-start;
        }
        .footer-smart .footer-bottom {
          flex-direction: column;
          align-items: flex-start;
          text-align: left;
        }
        .footer-smart .footer-bottom-links {
          justify-content: flex-start;
        }
      }

      @media (max-width: 480px) {
        .footer-smart {
          padding: 28px 10px 14px;
        }
        .footer-smart h3 {
          font-size: 16px;
          margin-bottom: 16px;
        }
        .footer-smart ul li {
          font-size: 13px;
          margin-bottom: 8px;
        }
        .footer-smart .footer-logo {
          width: 110px;
        }
        .footer-smart .social a {
          width: 34px;
          height: 34px;
          font-size: 14px;
        }
        .footer-smart .footer-grid {
          grid-template-columns: 1fr 1fr;
          gap: 16px 12px;
        }
        .footer-smart .footer-grid > div:nth-child(1) {
          grid-column: 1 / -1;
        }
        .footer-smart .footer-grid > div:nth-child(2) {
          grid-column: 1 / 2;
        }
        .footer-smart .footer-grid > div:nth-child(3) {
          grid-column: 2 / 3;
        }
        .footer-smart .footer-about,
        .footer-smart .footer-about p,
        .footer-smart .footer-about .social,
        .footer-smart h3,
        .footer-smart ul li,
        .footer-smart .footer-bottom {
          text-align: left;
          justify-content: flex-start;
        }
        .footer-smart .footer-about {
          align-items: flex-start;
        }
        .footer-smart h3::after {
          left: 0;
          transform: none;
        }
        .footer-smart ul li {
          justify-content: flex-start;
        }
        .footer-smart .social {
          justify-content: flex-start;
        }
      }
    </style>
  </head>
  <body>
    <!-- FOOTER – Smart Money 24/7, pure dark background, 3 columns desktop, left-aligned -->
    <footer class="footer-smart">
      <div class="container">
        <!-- ===== 3-COLUMN GRID (desktop) ===== -->
        <div class="footer-grid">
          <!-- 1st: LOGO + DESCRIPTION + SOCIAL ICONS -->
          <div class="footer-about">
            <!-- logo placeholder – replace src with your actual logo -->
            <img
              src="Photos/lgo-11-Photoroom.png"
              alt="Smart Money 24/7 Logo"
              class="footer-logo"
            />
            <p>
              <strong>Smart Money 24/7</strong> – Your trusted partner for
              Financial Clarity. We provide Real-Time Tools, Expert Insights,
              and Actionable Strategies to help you navigate markets with
              Confidence.
            </p>
            <!-- SOCIAL ICONS (unchanged, connect with us) -->
            <div class="social">
              <a href="#" aria-label="Facebook"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a href="#" aria-label="Instagram"
                ><i class="fab fa-instagram"></i
              ></a>
              <a href="#" aria-label="LinkedIn"
                ><i class="fab fa-linkedin-in"></i
              ></a>
              <a href="#" aria-label="YouTube"
                ><i class="fab fa-youtube"></i
              ></a>
            </div>
          </div>

          <!-- 2nd: QUICK LINKS – updated with new pages -->
          <div>
            <h3>Quick Links</h3>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li>
                <a href="Position-Size-Calculator.html"
                  >Position Size Calculator</a
                >
              </li>
              <li><a href="Value-Calculator.html">Value Calculator</a></li>
              <li><a href="Currency-Strength.html">Currency Strength</a></li>
              <li><a href="Scaling.html">Scaling Plan</a></li>
              <li><a href="FAQ.html">FAQ</a></li>
            </ul>
          </div>

          <!-- 3rd: CONTACT – updated address, helpline, email -->
          <div>
            <h3>Connect with Us</h3>
            <ul>
              <li>
                <a href="Contact.html">
                  <i class="fa fa-paper-plane"></i> Contact us</a
                >
              </li>
              <li><i class="fas fa-phone"></i> Helpline: 10505</li>
              <li><i class="fas fa-envelope"></i> SmartMoney24/7.gmail.com</li>
              <li>
                <i class="fas fa-location-dot"></i> XYZ Lane, XYZ Road – 223120
              </li>
              <li>
                <i class="fas fa-clock"></i> Mon – Fri : 9:00 AM – 6:00 PM
              </li>
            </ul>
          </div>
        </div>
        <!-- end footer-grid -->

        <!-- ===== BOTTOM BAR ===== -->
        <div class="footer-bottom">
          <p>© 2026 <strong>SmartMoney24/7</strong>. All Rights Reserved.</p>
          <div class="footer-bottom-links">
            <a
              href="https://skilled-va.com/"
              target="_blank"
              style="font-weight: 500"
            >
              <i class="fas fa-code"></i> Designed &amp; Developed by
              <strong>Skilled VA</strong>
            </a>
          </div>
        </div>
      </div>
      <!-- end container -->
    </footer>
  </body>
</html>
