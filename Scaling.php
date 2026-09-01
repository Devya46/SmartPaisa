<?php include_once 'header.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body></body>
</html>

<!-- ------ header------ -->

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
        <h1 class="edu-masterclass-hero-title">Scaling Plan</h1>
      </div>

      <!-- Breadcrumb -->

      <div class="edu-masterclass-breadcrumb">
        <a href="#"> Home </a>

        <span class="edu-masterclass-breadcrumb-separator"> / </span>

        <strong class="edu-masterclass-breadcrumb-current">
          Scaling Plan
        </strong>
      </div>
    </section>
  </body>
</html>

<!-- ----- scalup plan----- -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Money — Scaling Plan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      :root {
        --navy: #0b2342;
        --blue: #0b4f91;
        --gold: #e4a51c;
        --gold2: #c88600;
        --green: #178344;
        --green2: #0b6332;
        --text: #18324f;
        --muted: #60758f;
        --line: #e6edf5;
      }
      .body-scale {
        font-family:
          Inter,
          -apple-system,
          BlinkMacSystemFont,
          "Segoe UI",
          sans-serif;
        background: linear-gradient(180deg, #fbfdff 0%, #f6f9fc 100%);
        color: var(--text);
        padding: 40px 135px 60px;
      }
      .scaling-plan {
        max-width: 1370px;
        margin: auto;
      }
      .plan-intro {
        text-align: center;
        margin: 0 auto 30px;
      }
      .plan-kicker {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 8px 15px;
        border-radius: 999px;
        background: #edf4fb;
        color: var(--blue);
        font-size: 10px;
        font-weight: 900;
        letter-spacing: 1.8px;
        text-transform: uppercase;
      }
      .plan-intro h1 {
        margin-top: 14px;
        font-size: clamp(30px, 4vw, 50px);
        line-height: 1.07;
        letter-spacing: -2px;
        color: var(--navy);
        font-weight: 700;
      }
      .plan-intro p {
        margin-top: 10px;
        color: var(--muted);
        font-size: 14px;
      }

      .scaling-container {
        display: flex;
        flex-direction: column;
        gap: 22px;
      }

      .scaling-row {
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        min-height: 460px;
        background: #fff;
        border: 1px solid #e3eaf2;
        border-radius: 30px;
        overflow: hidden;
        box-shadow: 0 20px 55px rgba(13, 42, 72, 0.08);
        position: relative;
        opacity: 0;
        transform: translateY(25px);
        transition:
          opacity 0.7s ease,
          transform 0.7s ease,
          box-shadow 0.35s ease;
      }
      .scaling-row.visible {
        opacity: 1;
        transform: none;
      }
      .scaling-row:hover {
        box-shadow: 0 28px 70px rgba(13, 42, 72, 0.12);
      }

      .stage-two {
        grid-template-columns: 0.85fr 1.15fr;
      }

      /* CONTENT */
      .scaling-content {
        padding: 42px 46px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        background:
          radial-gradient(
            circle at 95% 10%,
            rgba(228, 165, 28, 0.055),
            transparent 30%
          ),
          #fff;
      }
      .stage-two .scaling-content {
        background:
          radial-gradient(
            circle at 5% 10%,
            rgba(23, 131, 68, 0.055),
            transparent 30%
          ),
          #fff;
      }
      .stage-label {
        width: max-content;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #fff;
        background: var(--blue);
        border-radius: 999px;
        padding: 8px 15px;
        font-size: 10px;
        font-weight: 900;
        letter-spacing: 1.5px;
        margin-bottom: 17px;
        box-shadow: 0 8px 20px rgba(11, 79, 145, 0.18);
      }
      .green-label {
        background: var(--green);
        box-shadow: 0 8px 20px rgba(23, 131, 68, 0.18);
      }

      h2 {
        font-size: clamp(35px, 4vw, 49px);
        line-height: 0.98;
        letter-spacing: -2.5px;
        color: var(--navy);
        font-weight: 500;
        max-width: 670px;
      }
      .gold-text {
        color: var(--gold);
        text-shadow: 0 4px 16px rgba(228, 165, 28, 0.16);
      }
      .green-text {
        color: var(--green);
        text-shadow: 0 4px 16px rgba(23, 131, 68, 0.14);
      }
      .scaling-content h4 {
        margin-top: 18px;
        color: #17395f;
        font-size: 16px;
        font-weight: 800;
      }
      .intro {
        margin-top: 5px;
        color: var(--muted);
        font-size: 13px;
        line-height: 1.65;
        max-width: 600px;
      }

      /* REQUIREMENTS */
      .requirements {
        margin: 20px 2px;
        display: grid;
        gap: 9px;
        grid-template-columns: repeat(2, 1fr);
      }
      .requirement {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 16px;
        font-weight: 500;
        color: #25415e;
      }
      .number,
      .check {
        width: 35px;
        height: 28px;
        flex: 0 0 28px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
        font-weight: 900;
      }
      .number {
        background: #edf4fb;
        color: var(--blue);
      }
      .check {
        background: #e8f5ec;
        color: var(--green);
        font-size: 15px;
      }

      /* PREMIUM GOAL */
      .goal-box {
        position: relative;
        margin-top: 25px;
        min-height: 158px;
        padding: 30px 28px 25px 30px;
        border-radius: 24px;
        border: 1px solid #f1d795;
        background:
          radial-gradient(
            circle at 100% 0%,
            rgba(228, 165, 28, 0.14),
            transparent 36%
          ),
          linear-gradient(135deg, #fffdf7, #fff8e8);
        box-shadow: 0 15px 35px rgba(204, 143, 14, 0.1);
        overflow: visible;
        display: flex;
        align-items: center;
        gap: 20px;
      }
      .green-goal {
        border-color: #b9dfc6;
        background:
          radial-gradient(
            circle at 100% 0%,
            rgba(23, 131, 68, 0.12),
            transparent 36%
          ),
          linear-gradient(135deg, #fbfffc, #eef9f1);
        box-shadow: 0 15px 35px rgba(23, 131, 68, 0.09);
      }
      .goal-icon {
        width: 62px;
        height: 62px;
        flex: 0 0 62px;
        border-radius: 20px;
        background: #fff;
        border: 1px solid #f0d487;
        color: var(--gold);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 35px;
        box-shadow: 0 8px 20px rgba(186, 126, 0, 0.13);
        position: relative;
      }
      .green-icon {
        color: var(--green);
        border-color: #b6d9c0;
        box-shadow: 0 8px 20px rgba(23, 131, 68, 0.1);
      }
      .goal-icon:after {
        content: "";
        position: absolute;
        inset: -7px;
        border-radius: 25px;
        border: 1px solid rgba(228, 165, 28, 0.25);
      }
      .green-icon:after {
        border-color: rgba(23, 131, 68, 0.22);
      }
      .goal-content {
        min-width: 0;
      }
      .goal-label {
        display: flex;
        align-items: center;
        gap: 10px;
        color: var(--gold2);
        font-size: 10px;
        font-weight: 900;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 7px;
      }
      .green-goal .goal-label {
        color: var(--green);
      }
      .goal-label:before,
      .goal-label:after {
        content: "";
        height: 1px;
        width: 24px;
        background: currentColor;
        opacity: 0.45;
      }
      .goal-main {
        color: var(--navy);
        font-size: 17px;
        line-height: 1.35;
        font-weight: 800;
      }
      .goal-main .arrow {
        color: #8395a8;
        padding: 0 5px;
      }
      .goal-reward {
        display: block;
        margin-top: 7px;
        font-size: 32px;
        line-height: 1.22;
        color: var(--gold);
        font-weight: 700;
        letter-spacing: -1px;
      }
      .green-goal .goal-reward {
        color: var(--green);
      }
      .goal-note {
        margin-top: 8px;
        color: #647890;
        font-size: 10.5px;
        font-weight: 500;
      }

      /* IMAGE — centered, smaller, with top/bottom centering */
      .scaling-image {
        position: relative;
        min-height: 460px;
        overflow: hidden;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 15px; /* horizontal spacing */
      }
      .scaling-image img {
        display: block;
        width: 100%;
        max-width: 380px; /* smaller image */
        height: auto;
        max-height: 90%; /* constraint to keep vertical centering */
        object-fit: contain;
        transition: transform 0.8s cubic-bezier(0.15, 0.85, 0.3, 1);
        border-radius: 12px;
        /* box-shadow: 0 12px 30px rgba(0, 0, 0, 0.05); */
      }
      /* .scaling-row:hover .scaling-image img {
        transform: scale(1.02);
      } */
      /* subtle overlay removed for cleaner look, but keep if needed */
      .image-overlay {
        display: none; /* hidden, we want pure image focus */
      }
      .image-badge {
        position: absolute;
        left: 28px;
        bottom: 25px;
        display: flex;
        align-items: center;
        gap: 11px;
        padding: 12px 20px;
        border-radius: 999px;
        color: #fff;
        background: rgba(7, 44, 84, 0.92);
        border: 1px solid rgba(255, 255, 255, 0.45);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.18);
        backdrop-filter: blur(10px);
        font-size: 15px;
        font-weight: 700;
        letter-spacing: 1.5px;
      }
      .image-badge i {
        font-size: 18px;
      }
      .green-badge {
        background: rgba(12, 115, 57, 0.94);
      }

      .progress {
        display: flex;
        align-items: center;
        gap: 9px;
        margin-top: 18px;
        justify-content: center;
      }
      .progress-line {
        height: 4px;
        border-radius: 99px;
        background: #e8edf3;
        flex: 1;
        max-width: 180px;
      }
      .progress-line span {
        display: block;
        height: 100%;
        width: 50%;
        background: var(--gold);
        border-radius: 99px;
      }
      .stage-two .progress-line span {
        width: 100%;
        background: var(--green);
      }
      .progress-text {
        font-size: 17px;
        font-weight: 800;
        color: #71849a;
        letter-spacing: 1px;
        text-transform: uppercase;
      }

      /* RESPONSIVE */
      @media (max-width: 1000px) {
        .scaling-row,
        .stage-two {
          grid-template-columns: 1fr;
        }
        .stage-one .scaling-image {
          order: 2;
        }
        .stage-one .scaling-content {
          order: 1;
        }
        .stage-two .scaling-image {
          order: 1;
        }
        .stage-two .scaling-content {
          order: 2;
        }
        .scaling-image {
          min-height: 300px;
          padding: 20px 15px;
        }
        .scaling-image img {
          max-width: 280px;
          max-height: 80%;
        }
      }
      @media (max-width: 650px) {
        .body-scale {
          padding: 14px 9px 35px;
        }
        .plan-intro {
          margin-bottom: 20px;
        }
        .plan-intro h1 {
          letter-spacing: -1.5px;
        }
        .scaling-row {
          border-radius: 22px;
        }
        .scaling-content {
          padding: 28px 22px;
        }
        h2 {
          font-size: 36px;
          letter-spacing: -1.7px;
        }
        .scaling-image {
          min-height: 220px;
          padding: 12px 10px;
        }
        .scaling-image img {
          max-width: 220px;
          max-height: 90%;
        }
        .goal-box {
          padding: 25px 18px;
          gap: 14px;
          min-height: 150px;
        }
        .goal-icon {
          width: 52px;
          height: 52px;
          flex-basis: 52px;
          font-size: 20px;
          border-radius: 17px;
        }
        .goal-main {
          font-size: 14px;
        }
        .goal-reward {
          font-size: 27px;
        }
        .requirement {
          font-size: 11px;
        }
        .image-badge {
          left: 16px;
          bottom: 16px;
          padding: 10px 15px;
          font-size: 8px;
        }
      }
    </style>
  </head>
  <body>
    <div class="body-scale">
      <section class="scaling-plan">
        <div class="plan-intro">
          <div class="plan-kicker">
            <i class="fa-solid fa-layer-group"></i> SMART MONEY REWARD PATH
          </div>
          <h1>Learn - Complete - Get Rewarded</h1>
          <p>Progress through each milestone and unlock your next reward.</p>
        </div>

        <div class="scaling-container">
          <!-- STAGE 1 -->
          <article class="scaling-row stage-one">
            <div class="scaling-content">
              <div class="stage-label">
                <i class="fa-solid fa-star"></i> STAGE 1
              </div>
              <h2>
                CLAIM YOUR<br />GIFT REWARD <span class="gold-text">₱500</span>
              </h2>
              <h4>Complete Your Learning Tasks</h4>
              <p class="intro">
                Your first milestone is simple: learn, complete, and submit.
              </p>

              <div class="requirements">
                <div class="requirement">
                  <span class="number">01</span
                  ><span>Register with Smart Money Systems</span>
                </div>
                <div class="requirement">
                  <span class="number">02</span
                  ><span>Access the required learning materials</span>
                </div>
                <div class="requirement">
                  <span class="number">03</span
                  ><span>Watch the assigned videos</span>
                </div>
                <div class="requirement">
                  <span class="number">04</span
                  ><span>Complete the required learning tasks</span>
                </div>
                <div class="requirement">
                  <span class="number">05</span
                  ><span>Complete the quiz or submit required proof</span>
                </div>
                <div class="requirement">
                  <span class="number">06</span
                  ><span>Submit your reward claim</span>
                </div>
              </div>

              <div class="progress">
                <div class="progress-line"><span></span></div>
                <span class="progress-text">Milestone 1 of 2</span>
              </div>

              <div class="goal-box">
                <div class="goal-icon"><i class="fa-solid fa-gem"></i></div>
                <div class="goal-content">
                  <div class="goal-label">YOUR FIRST GOAL</div>
                  <div class="goal-main">
                    Complete the learning requirements
                    <span class="arrow">→</span>
                  </div>
                  <strong class="goal-reward">Qualify for ₱500</strong>
                  <p class="goal-note">
                    Complete the basics and unlock your first reward.
                  </p>
                </div>
              </div>
            </div>

            <div class="scaling-image">
              <img src="Photos/1.1.png" alt="Learning and completing tasks" />
              <!-- overlay removed for clean look -->
              <div class="image-badge">
                <i class="fa-solid fa-graduation-cap"></i> LEARN &amp; COMPLETE
              </div>
            </div>
          </article>

          <!-- STAGE 2 -->
          <article class="scaling-row stage-two">
            <div class="scaling-image">
              <img src="Photos/2.2.png" alt="Scaling your reward" />
              <div class="image-badge green-badge">
                <i class="fa-solid fa-arrow-trend-up"></i> SCALE YOUR REWARD
              </div>
            </div>

            <div class="scaling-content">
              <div class="stage-label green-label">
                <i class="fa-solid fa-circle-check"></i> STAGE 2
              </div>
              <h2>
                SCALE YOUR<br />REWARD TO <span class="green-text">₱1,000</span>
              </h2>
              <h4>Ready for the Next Level?</h4>
              <p class="intro">
                Complete the next requirements and move closer to your higher
                reward.
              </p>

              <div class="requirements">
                <div class="requirement">
                  <span class="check"><i class="fa-solid fa-check"></i></span
                  ><span>Complete all Stage 1 requirements</span>
                </div>
                <div class="requirement">
                  <span class="check"><i class="fa-solid fa-check"></i></span
                  ><span>Complete the additional learning requirements</span>
                </div>
                <div class="requirement">
                  <span class="check"><i class="fa-solid fa-check"></i></span
                  ><span>Follow the account funding instructions</span>
                </div>
                <div class="requirement">
                  <span class="check"><i class="fa-solid fa-check"></i></span
                  ><span
                    >Fund a verified trading account through the approved
                    process</span
                  >
                </div>
                <div class="requirement">
                  <span class="check"><i class="fa-solid fa-check"></i></span
                  ><span>Complete any required verification</span>
                </div>
                <div class="requirement">
                  <span class="check"><i class="fa-solid fa-check"></i></span
                  ><span>Submit the required proof for review</span>
                </div>
              </div>

              <div class="progress">
                <div class="progress-line"><span></span></div>
                <span class="progress-text">Final milestone</span>
              </div>

              <div class="goal-box green-goal">
                <div class="goal-icon green-icon">
                  <i class="fa-solid fa-trophy"></i>
                </div>
                <div class="goal-content">
                  <div class="goal-label">YOUR NEXT GOAL</div>
                  <div class="goal-main">
                    Complete the requirements + fund your verified account
                  </div>
                  <strong class="goal-reward">Qualify for ₱1,000</strong>
                  <p class="goal-note">
                    Verified account • Secure process • Higher reward
                  </p>
                </div>
              </div>
            </div>
          </article>
        </div>
      </section>
    </div>

    <script>
      (function () {
        const rows = document.querySelectorAll(".scaling-row");
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target);
              }
            });
          },
          { threshold: 0.12 },
        );

        rows.forEach((row) => observer.observe(row));

        setTimeout(() => {
          rows.forEach((row) => {
            const r = row.getBoundingClientRect();
            if (r.top < window.innerHeight * 0.92) row.classList.add("visible");
          });
        }, 100);
      })();
    </script>
  </body>
</html>

<!-- ---- steps----- -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scaling Plan · how it works</title>
    <!-- Font Awesome 6 (free) -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
    <!-- Google Font: DM Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      :root {
        --gold: #f2b91e;
        --gold-light: #ffd95c;
        --gold-dark: #bd8500;
        --blue: #4a8cff;
        --blue-dim: #2a5fbf;
        --white: #ffffff;
        --black: #000000;
        --card-bg: #101116;
      }

      .body-steps {
        background: white;
        font-family: "DM Sans", sans-serif;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 66px 0 70px;
      }

      .sms-process {
        position: relative;
        width: 100%;
        max-width: 1710px;
        padding: 30px 40px 70px;
        margin: 0 auto;
        background:
          radial-gradient(
            circle at 50% 30%,
            rgba(22, 52, 100, 0.4),
            transparent 55%
          ),
          linear-gradient(145deg, #010b1e 0%, #0a1d3f 60%, #020d24 100%);
        isolation: isolate;
        overflow: hidden;
        /* box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.8); */
      }

      .top-decoration {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-bottom: 12px;
      }

      .top-line {
        width: 200px;
        max-width: 18vw;
        height: 1px;
        background: linear-gradient(
          90deg,
          transparent,
          rgba(255, 255, 255, 0.15),
          rgba(255, 255, 255, 0.25)
        );
      }
      .top-line.right {
        background: linear-gradient(
          90deg,
          rgba(255, 255, 255, 0.25),
          rgba(255, 255, 255, 0.15),
          transparent
        );
      }

      .top-icon {
        position: relative;
        width: 68px;
        height: 68px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1.5px solid rgba(255, 255, 255, 0.12);
        border-radius: 50%;
        color: #b0caff;
        font-size: 32px;
        background: rgba(255, 255, 255, 0.02);
        box-shadow: 0 0 20px rgba(74, 140, 255, 0.04);
        z-index: 5;
        transition: border-color 0.2s;
      }
      .top-icon i {
        filter: drop-shadow(0 0 6px rgba(74, 140, 255, 0.15));
      }

      .main-heading {
        position: relative;
        z-index: 5;
        text-align: center;
        font-size: clamp(38px, 4.2vw, 54px);
        line-height: 1.08;
        font-weight: 400;
        letter-spacing: -0.5px;
        color: #ffffff;
        margin-top: 6px;
      }
      .main-heading .gold {
        color: var(--gold);
        text-shadow: 0 0 20px rgba(242, 185, 30, 0.06);
        font-weight: 500;
      }

      .heading-underline {
        position: relative;
        width: 60px;
        height: 2px;
        margin: 14px auto 12px;
        background: linear-gradient(
          90deg,
          transparent,
          var(--gold),
          transparent
        );
        opacity: 0.5;
      }
      .heading-underline::after {
        content: "";
        position: absolute;
        width: 30px;
        height: 1.5px;
        left: 50%;
        top: 0;
        transform: translateX(-50%);
        background: #ffffff;
        opacity: 0.2;
      }

      .subtitle {
        position: relative;
        z-index: 5;
        text-align: center;
        color: rgba(255, 255, 255, 0.7);
        font-size: 20px;
        line-height: 1.4;
        font-weight: 400;
        margin-bottom: 28px;
        letter-spacing: 0.2px;
      }

      .process-container {
        position: relative;
        z-index: 5;
        max-width: 1250px;
        margin: 0 auto;
      }

      .timeline {
        position: absolute;
        left: 6%;
        right: 6%;
        top: 90px;
        height: 2px;
        background: linear-gradient(
          90deg,
          transparent 0%,
          rgba(74, 140, 255, 0.2) 10%,
          rgba(74, 140, 255, 0.3) 30%,
          rgba(242, 185, 30, 0.2) 70%,
          rgba(74, 140, 255, 0.2) 90%,
          transparent 100%
        );
        box-shadow: 0 0 6px rgba(74, 140, 255, 0.15);
        z-index: 1;
      }

      .timeline-point {
        position: absolute;
        top: 50%;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #fff;
        border: 4px solid rgba(74, 140, 255, 0.6);
        transform: translate(-50%, -50%);
        box-shadow:
          0 0 5px rgba(74, 140, 255, 0.3),
          0 0 12px rgba(74, 140, 255, 0.15);
        animation: pulsePoint 2.6s infinite ease-in-out;
      }
      .timeline-point:nth-child(1) {
        left: 12%;
      }
      .timeline-point:nth-child(2) {
        left: 30%;
      }
      .timeline-point:nth-child(3) {
        left: 50%;
      }
      .timeline-point:nth-child(4) {
        left: 69%;
      }
      .timeline-point:nth-child(5) {
        left: 88%;
      }

      @keyframes pulsePoint {
        0%,
        100% {
          box-shadow:
            0 0 5px rgba(74, 140, 255, 0.2),
            0 0 12px rgba(74, 140, 255, 0.1);
        }
        50% {
          box-shadow:
            0 0 8px rgba(74, 140, 255, 0.4),
            0 0 22px rgba(74, 140, 255, 0.2);
        }
      }

      .steps {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 10px;
        position: relative;
      }

      .step {
        position: relative;
        z-index: 5;
        text-align: center;
        min-width: 0;
        opacity: 0;
        transform: translateY(20px);
        transition:
          opacity 0.6s ease,
          transform 0.6s ease;
      }
      .step.visible {
        opacity: 1;
        transform: translateY(0);
      }

      .step-number {
        height: 40px;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        color: rgba(255, 255, 255, 0.5);
        font-size: 22px;
        font-weight: 500;
        letter-spacing: 0.5px;
        margin-bottom: 2px;
      }
      .number-glow {
        position: absolute;
        top: 38px;
        left: 50%;
        width: 50px;
        height: 1.5px;
        transform: translateX(-50%);
        background: linear-gradient(
          90deg,
          transparent,
          rgba(74, 140, 255, 0.25),
          transparent
        );
        filter: drop-shadow(0 0 4px rgba(74, 140, 255, 0.1));
      }

      .step-icon {
        position: relative;
        width: 88px;
        height: 88px;
        margin: 0 auto;
        border-radius: 50%;
        border: 1.5px solid rgba(74, 140, 255, 0.25);
        background: radial-gradient(circle at 45% 35%, #000000, #090b0f 70%);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #7aa9ff;
        font-size: 28px;
        box-shadow:
          inset 0 0 20px rgba(74, 140, 255, 0.02),
          0 0 10px rgba(74, 140, 255, 0.03);
        transition:
          transform 0.3s ease,
          box-shadow 0.3s ease,
          border-color 0.3s,
          color 0.2s;
      }
      .step:hover .step-icon {
        transform: translateY(-3px);
        border-color: rgba(74, 140, 255, 0.5);
        box-shadow:
          inset 0 0 25px rgba(74, 140, 255, 0.04),
          0 0 20px rgba(74, 140, 255, 0.08);
      }
      .step-icon::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: -24px;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 14px solid transparent;
        border-right: 14px solid transparent;
        border-top: 22px solid rgba(74, 140, 255, 0.2);
        filter: drop-shadow(0 2px 4px rgba(74, 140, 255, 0.08));
      }
      .step-icon::before {
        content: "";
        position: absolute;
        left: 50%;
        bottom: -23px;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 12px solid transparent;
        border-right: 12px solid transparent;
        border-top: 19px solid rgba(255, 255, 255, 0.03);
        z-index: -1;
      }

      .step-content {
        margin-top: 38px;
      }
      .step-title {
        display: inline-block;
        position: relative;
        color: #ffffff;
        font-size: 21px;
        font-weight: 500;
        margin-bottom: 6px;
        letter-spacing: 0.3px;
        line-height: 1.2;
      }
      .step-title::after {
        content: "";
        position: absolute;
        bottom: -8px;
        left: 50%;
        width: 40px;
        height: 1.5px;
        transform: translateX(-50%);
        background: linear-gradient(
          90deg,
          transparent,
          rgba(74, 140, 255, 0.3),
          transparent
        );
      }
      .step-description {
        max-width: 190px;
        margin: 12px auto 0;
        color: rgba(255, 255, 255, 0.6);
        font-size: 17px;
        line-height: 1.5;
        font-weight: 400;
        letter-spacing: 0.2px;
      }

      /* highlight for reward steps (4 & 6) */
      .step-highlight .step-icon {
        border-color: rgba(242, 185, 30, 0.6);
        box-shadow:
          0 0 25px rgba(242, 185, 30, 0.15),
          inset 0 0 20px rgba(242, 185, 30, 0.05);
        color: #f2b91e;
      }
      .step-highlight .step-title {
        color: #f2b91e;
        font-weight: 700;
        font-size: 22px;
      }
      .step-highlight .step-title::after {
        background: linear-gradient(90deg, transparent, #f2b91e, transparent);
      }
      .step-highlight .step-description {
        color: rgba(255, 255, 255, 0.8);
      }
      .step-highlight .step-number {
        color: rgba(242, 185, 30, 0.7);
      }
      .step-highlight .number-glow {
        background: linear-gradient(
          90deg,
          transparent,
          rgba(242, 185, 30, 0.4),
          transparent
        );
      }
      .step-highlight .step-icon::before {
        content: "";
        position: absolute;
        inset: -6px;
        border-radius: 50%;
        border: 1.5px solid rgba(242, 185, 30, 0.2);
        animation: ringPulse 3s infinite ease-in-out;
        pointer-events: none;
      }
      @keyframes ringPulse {
        0%,
        100% {
          transform: scale(1);
          opacity: 0.5;
        }
        50% {
          transform: scale(1.08);
          opacity: 0.9;
        }
      }
      .step-highlight .step-icon i {
        filter: drop-shadow(0 0 8px rgba(242, 185, 30, 0.3));
      }
      .step-highlight {
        animation: highlightPulse 2.8s infinite ease-in-out;
      }
      @keyframes highlightPulse {
        0%,
        100% {
          filter: drop-shadow(0 0 6px rgba(242, 185, 30, 0.2));
        }
        50% {
          filter: drop-shadow(0 0 20px rgba(242, 185, 30, 0.35));
        }
      }

      .bottom-waves {
        position: absolute;
        z-index: 1;
        left: -5%;
        right: -5%;
        bottom: -20px;
        height: 130px;
        overflow: hidden;
        pointer-events: none;
        opacity: 0.4;
      }
      .wave {
        position: absolute;
        left: -5%;
        width: 110%;
        height: 100px;
        border-radius: 50%;
        border-top: 1px dotted rgba(74, 140, 255, 0.15);
        transform-origin: center;
        opacity: 0.5;
      }
      .wave-1 {
        bottom: 60px;
        transform: rotate(4deg) scaleX(1.02);
      }
      .wave-2 {
        bottom: 48px;
        transform: rotate(3deg) scaleX(1.05);
      }
      .wave-3 {
        bottom: 36px;
        transform: rotate(2deg) scaleX(1.08);
      }
      .wave-4 {
        bottom: 24px;
        transform: rotate(1deg) scaleX(1.11);
      }
      .wave-5 {
        bottom: 12px;
        transform: rotate(0deg) scaleX(1.14);
      }

      .dot-field {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 100px;
        opacity: 0.25;
        background-image: radial-gradient(
          circle,
          rgba(74, 140, 255, 0.3) 1px,
          transparent 1.5px
        );
        background-size: 14px 14px;
        mask-image: linear-gradient(180deg, transparent, #000 30%, transparent);
        -webkit-mask-image: linear-gradient(
          180deg,
          transparent,
          #000 30%,
          transparent
        );
        transform: perspective(300px) rotateX(50deg) scaleX(1.1);
      }

      .bottom-glow {
        position: absolute;
        z-index: 5;
        bottom: 48px;
        left: 50%;
        width: 300px;
        height: 1.5px;
        transform: translateX(-50%);
        background: linear-gradient(
          90deg,
          transparent,
          rgba(74, 140, 255, 0.2),
          rgba(255, 255, 255, 0.1),
          rgba(74, 140, 255, 0.2),
          transparent
        );
        box-shadow: 0 0 10px rgba(74, 140, 255, 0.1);
      }
      .bottom-glow::after {
        content: "";
        position: absolute;
        left: 50%;
        top: 50%;
        width: 8px;
        height: 8px;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        background: #ffffff;
        box-shadow:
          0 0 6px rgba(255, 255, 255, 0.2),
          0 0 14px rgba(74, 140, 255, 0.15);
        opacity: 0.5;
      }

      /* responsive */
      @media (max-width: 1200px) {
        .step-icon {
          width: 82px;
          height: 82px;
          font-size: 26px;
        }
        .timeline {
          top: 100px;
        }
        .step-title {
          font-size: 18px;
        }
        .step-description {
          font-size: 14px;
          max-width: 180px;
        }
      }

      @media (max-width: 950px) {
        .sms-process {
          padding: 24px 24px 60px;
        }
        .main-heading {
          font-size: 40px;
        }
        .subtitle {
          font-size: 18px;
          margin-bottom: 22px;
        }
        .steps {
          grid-template-columns: repeat(3, 1fr);
          gap: 40px 16px;
        }
        .timeline,
        .timeline-point {
          display: none;
        }
        .step-icon {
          width: 100px;
          height: 100px;
          font-size: 34px;
        }
        .step-title {
          font-size: 19px;
        }
        .step-description {
          max-width: 220px;
        }
      }

      @media (max-width: 600px) {
        .sms-process {
          padding: 18px 12px 50px;
          border-radius: 24px;
        }
        .top-decoration {
          margin-bottom: 6px;
        }
        .top-line {
          width: 50px;
        }
        .top-icon {
          width: 54px;
          height: 54px;
          font-size: 26px;
        }
        .main-heading {
          font-size: 30px;
        }
        .subtitle {
          font-size: 16px;
          margin-bottom: 18px;
        }
        .steps {
          grid-template-columns: 1fr 1fr;
          gap: 40px 12px;
        }
        .step-number {
          font-size: 20px;
          height: 32px;
        }
        .step-icon {
          width: 90px;
          height: 90px;
          font-size: 30px;
        }
        .step-icon::after {
          border-left-width: 12px;
          border-right-width: 12px;
          border-top-width: 18px;
          bottom: -20px;
        }
        .step-content {
          margin-top: 32px;
        }
        .step-title {
          font-size: 18px;
        }
        .step-description {
          font-size: 14px;
          max-width: 200px;
        }
        .bottom-waves {
          opacity: 0.3;
        }
        .bottom-glow {
          width: 70%;
        }
      }
    </style>
  </head>
  <body>
    <div class="body-steps" id="Steps-sm">
      <section class="sms-process">
        <!-- top decoration -->
        <div class="top-decoration">
          <div class="top-line"></div>
          <div class="top-icon"><i class="fa-regular fa-gem"></i></div>
          <div class="top-line right"></div>
        </div>

        <!-- heading -->
        <h1 class="main-heading">
          How the <span class="gold">Scaling Plan</span> Works
        </h1>
        <div class="heading-underline"></div>
        <p class="subtitle">Clear steps to earn your Gift Rewards</p>

        <div class="process-container">
          <!-- connecting line (6 steps) -->
          <div class="timeline">
            <span class="timeline-point"></span>
            <span class="timeline-point"></span>
            <span class="timeline-point"></span>
            <span class="timeline-point"></span>
            <span class="timeline-point"></span>
          </div>

          <div class="steps">
            <!-- STEP 1 -->
            <div class="step">
              <div class="step-number">01</div>
              <div class="number-glow"></div>
              <div class="step-icon"><i class="fa-regular fa-user"></i></div>
              <div class="step-content">
                <h2 class="step-title">Register</h2>
                <p class="step-description">
                  Create your Smart Money Systems account and enter the program.
                </p>
              </div>
            </div>

            <!-- STEP 2 -->
            <div class="step">
              <div class="step-number">02</div>
              <div class="number-glow"></div>
              <div class="step-icon"><i class="fa-regular fa-compass"></i></div>
              <div class="step-content">
                <h2 class="step-title">Learn</h2>
                <p class="step-description">
                  Watch the required lessons and understand the fundamentals.
                </p>
              </div>
            </div>

            <!-- STEP 3 -->
            <div class="step">
              <div class="step-number">03</div>
              <div class="number-glow"></div>
              <div class="step-icon">
                <i class="fa-regular fa-pen-to-square"></i>
              </div>
              <div class="step-content">
                <h2 class="step-title">Complete</h2>
                <p class="step-description">
                  Finish your assigned tasks, quizzes, and activities.
                </p>
              </div>
            </div>

            <!-- STEP 4 – CLAIM ₱500 (highlighted) -->
            <div class="step step-highlight">
              <div class="step-number">04</div>
              <div class="number-glow"></div>
              <div class="step-icon">
                <i class="fa-regular fa-circle-check"></i>
              </div>
              <div class="step-content">
                <h2 class="step-title">Claim ₱500</h2>
                <p class="step-description">
                  Submit your required proof and claim your first Gift Reward.
                </p>
              </div>
            </div>

            <!-- STEP 5 – SCALE -->
            <div class="step">
              <div class="step-number">05</div>
              <div class="number-glow"></div>
              <div class="step-icon">
                <i class="fa-regular fa-chart-line"></i>
              </div>
              <div class="step-content">
                <h2 class="step-title">Scale</h2>
                <p class="step-description">
                  Complete the next requirements and fund your verified trading
                  account.
                </p>
              </div>
            </div>

            <!-- STEP 6 – CLAIM ₱1,000 (highlighted) -->
            <div class="step step-highlight">
              <div class="step-number">06</div>
              <div class="number-glow"></div>
              <div class="step-icon"><i class="fa-regular fa-star"></i></div>
              <div class="step-content">
                <h2 class="step-title">Claim ₱1,000</h2>
                <p class="step-description">
                  Once all requirements are verified, submit your claim for the
                  increased Gift Reward.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- bottom decorative waves -->
        <div class="bottom-waves">
          <div class="wave wave-1"></div>
          <div class="wave wave-2"></div>
          <div class="wave wave-3"></div>
          <div class="wave wave-4"></div>
          <div class="wave wave-5"></div>
          <div class="dot-field"></div>
        </div>
        <div class="bottom-glow"></div>
      </section>
    </div>

    <script>
      (function () {
        // scroll reveal for steps
        const steps = document.querySelectorAll(".step");
        const stepObserver = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                const index = [...steps].indexOf(entry.target);
                setTimeout(() => {
                  entry.target.classList.add("visible");
                }, index * 80);
                stepObserver.unobserve(entry.target);
              }
            });
          },
          { threshold: 0.15 },
        );
        steps.forEach((step) => stepObserver.observe(step));

        // icon hover effect (blue / gold highlight)
        document.querySelectorAll(".step-icon").forEach((icon) => {
          icon.addEventListener("mouseenter", () => {
            const parent = icon.closest(".step");
            if (parent && parent.classList.contains("step-highlight")) {
              icon.style.color = "#ffff";
              icon.style.borderColor = "rgba(242, 185, 30, 0.8)";
            } else {
              icon.style.color = "#ffff";
              icon.style.borderColor = "rgba(74, 140, 255, 0.5)";
            }
          });
          icon.addEventListener("mouseleave", () => {
            const parent = icon.closest(".step");
            if (parent && parent.classList.contains("step-highlight")) {
              icon.style.color = "#f2b91e";
              icon.style.borderColor = "rgba(242, 185, 30, 0.6)";
            } else {
              icon.style.color = "#7aa9ff";
              icon.style.borderColor = "rgba(74, 140, 255, 0.25)";
            }
          });
        });
      })();
    </script>
  </body>
</html>

<!-- ---- disclaimer--- -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reward notice · improved</title>
    <style>
      /* ── reset & base ── */
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      .body-disclmer {
        /* min-height: 100vh; */
        display: flex;
        align-items: center;
        justify-content: center;
        /* background: #f8f6f4; */
        font-family:
          "Inter",
          -apple-system,
          BlinkMacSystemFont,
          "Segoe UI",
          Roboto,
          Helvetica,
          Arial,
          sans-serif;
        /* padding: 1.5rem; */
      }

      /* ── card container ── */
      .reward-warning {
        max-width: 1050px;
        width: 100%;
        background: #ffffff;
        border-radius: 20px;
        padding: 1.8rem 2rem 2rem 2rem;
        transition: box-shadow 0.2s ease;
        border: 1px solid #a20000;
        margin-bottom: 50px;
      }

      .reward-warning:hover {
        box-shadow: 0 18px 36px rgba(0, 0, 0, 0.08);
      }

      /* ── flex layout (icon + content) ── */
      .warning-grid {
        display: flex;
        gap: 1.25rem;
        align-items: flex-start;
      }

      /* ── icon ── */
      .warning-icon {
        flex: 0 0 48px;
        width: 48px;
        height: 48px;
        background: #fef3e9;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.2s;
      }

      .warning-icon svg {
        width: 32px;
        height: 32px;
        display: block;
      }

      /* ── content area ── */
      .warning-content {
        flex: 1;
        min-width: 0;
      }

      .warning-title {
        font-size: 1rem;
        font-weight: 700;
        letter-spacing: -0.01em;
        color: #1f1a17;
        margin-bottom: 0.65rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        flex-wrap: wrap;
      }

      .warning-title .badge {
        background: #e36b1f;
        color: white;
        font-size: 0.6rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.3px;
        padding: 0.2rem 0.6rem;
        border-radius: 20px;
        line-height: 1.4;
      }

      .warning-text {
        font-size: 0.9rem;
        line-height: 1.6;
        color: #2b2b2b;
        margin: 0;
      }

      .warning-text strong {
        font-weight: 700;
        color: #1f1a17;
      }

      .warning-section {
        margin-bottom: 1rem;
        padding-left: 0;
        border-left: 0;
      }

      .warning-section:last-child {
        margin-bottom: 0;
      }

      /* subtle dividers between sections */
      .warning-section + .warning-section {
        padding-top: 0.9rem;
        border-top: 1px solid #f2ece7;
      }

      /* extra micro spacing */
      .warning-section .warning-text br {
        display: none;
      }

      /* ── responsive ── */
      @media (max-width: 640px) {
        .reward-warning {
          padding: 1.5rem 1.2rem 1.5rem 1.2rem;
          border-radius: 16px;
        }

        .warning-grid {
          gap: 0.9rem;
        }

        .warning-icon {
          flex: 0 0 40px;
          width: 40px;
          height: 40px;
          border-radius: 12px;
        }

        .warning-icon svg {
          width: 26px;
          height: 26px;
        }

        .warning-title {
          font-size: 0.9rem;
          gap: 0.3rem;
        }

        .warning-title .badge {
          font-size: 0.55rem;
          padding: 0.1rem 0.5rem;
        }

        .warning-text {
          font-size: 0.82rem;
          line-height: 1.55;
        }

        .warning-section + .warning-section {
          padding-top: 0.7rem;
        }
      }

      @media (max-width: 420px) {
        .warning-grid {
          flex-wrap: wrap;
        }

        .warning-icon {
          flex: 0 0 36px;
          width: 36px;
          height: 36px;
        }

        .warning-icon svg {
          width: 22px;
          height: 22px;
        }

        .warning-title {
          font-size: 0.82rem;
        }
      }

      /* ── print-friendly ── */
      @media print {
        .body-disclmer {
          background: white;
          padding: 0.5in;
        }
        .reward-warning {
          box-shadow: none;
          border: 1px solid #ccc;
          padding: 1.5rem;
        }
        .warning-icon {
          background: #f3f0ed;
        }
      }
    </style>
  </head>
  <body>
    <section class="body-disclmer">
      <div
        class="reward-warning"
        role="note"
        aria-label="Important reward requirements"
      >
        <div class="warning-grid">
          <!-- icon -->
          <div class="warning-icon" aria-hidden="true">
            <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M24 4L44 40H4L24 4Z"
                fill="none"
                stroke="#e36b1f"
                stroke-width="3.5"
                stroke-linejoin="round"
              />
              <path
                d="M24 15V27"
                stroke="#e36b1f"
                stroke-width="3.5"
                stroke-linecap="round"
              />
              <circle cx="24" cy="34" r="1.8" fill="#e36b1f" />
            </svg>
          </div>

          <!-- content -->
          <div class="warning-content">
            <div class="warning-title">
              <span>Important: rewards are based on requirements</span>
              <span class="badge">must read</span>
            </div>

            <div class="warning-section">
              <p class="warning-text">
                <strong>Gift Rewards are not automatic.</strong>
                Participants must complete the applicable learning tasks and
                other program requirements before a reward can be approved. All
                submissions may be reviewed for eligibility and verification.
              </p>
            </div>

            <div class="warning-section">
              <p class="warning-text">
                <strong>Trading profits are not part of the reward.</strong>
                The Gift Reward is provided based on the applicable program
                requirements, not on trading performance or guaranteed profits.
              </p>
            </div>
          </div>
          <!-- /content -->
        </div>
        <!-- /grid -->
      </div>
    </section>
    <!-- /card -->

    <!-- (optional) tiny JS remains, but now we keep it clean -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const warning = document.querySelector(".reward-warning");
        if (warning) {
          // already has role="note" and aria-label in markup, but we ensure it:
          warning.setAttribute("role", "note");
          warning.setAttribute("aria-label", "Important reward requirements");
        }
      });
    </script>
  </body>
</html>

<!-- -----footer--- -->
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
