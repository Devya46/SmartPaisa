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
  </head>
  <body>
    <!-- --------header---- -->
  </body>
</html>

<!-- -----page header------ -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Global Market Insights · Live Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <style>
      /* ----- reset & base ----- */
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      html {
        scroll-behavior: smooth;
      }
      body {
        background: #f8f7f5;
        color: #1a1e24;
        font-family: "Inter", sans-serif;
        line-height: 1.5;
      }

      /* ----- hero (financial data bg) ----- */
      .market-hero {
        position: relative;
        width: 100%;
        height: 400px;
        overflow: visible;

        background-image: url("https://images.unsplash.com/photo-1660547923766-1214fc9e0a83?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTEyfHx3ZXxlbnwwfHwwfHx8MA%3D%3D");

        background-size: cover;
        background-position: center;

        display: flex;
        align-items: center;
      }
      .market-hero::before {
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

      .market-hero-content {
        position: relative;
        z-index: 2;
        width: min(1470px, calc(100% - 80px));
        margin: 0 auto;
      }
      .market-hero-title {
        margin: 0 38px;
        color: #ffffff;
        font-size: 37px;
        font-weight: 700;
        line-height: 1.2;
        letter-spacing: -0.5px;
        text-shadow: 0 6px 30px rgba(0, 0, 0, 0.5);
      }
      /* .market-hero-title::after {
        content: "";
        display: block;
        width: 62px;
        height: 3px;
        margin-top: 18px;
        border-radius: 20px;
        background: linear-gradient(90deg, #d4af37, #f5d97e);
      } */

      .market-hero-title span {
        font-size: 20px;
        font-weight: 400;
        color: #cfd9e6;
        display: block;
        margin-top: 4px;
      }

      /* ----- breadcrumb (gold trim) ----- */
      .market-breadcrumb {
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
        background: #0c0f14;
        border-radius: 12px 12px 0 0;
        box-shadow: 0 -10px 35px rgba(0, 0, 0, 0.35);
      }
      .market-breadcrumb::before {
        content: "";
        position: absolute;
        top: 0;
        left: 35px;
        right: 35px;
        height: 2px;
        background: linear-gradient(90deg, transparent, #d4b36a, transparent);
      }
      .market-breadcrumb a {
        color: #eaeef2;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        transition: 0.2s;
      }
      .market-breadcrumb a:hover {
        color: #e2c067;
      }
      .market-breadcrumb .sep {
        color: #6a727c;
        font-size: 14px;
      }
      .market-breadcrumb .current {
        color: #e2c067;
        font-size: 14px;
        font-weight: 600;
      }

      /* ----- stats ribbon (icons via svg) ----- */
      .stats-ribbon {
        background: #0d121b;
        color: #f0f3f7;
        padding: 10px 60px;
        border-bottom: 1px solid #2a313c;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 19px 33px;
        font-size: 15px;
        font-weight: 500;
        letter-spacing: 0.2px;
      }
      .stats-ribbon .stat-item {
        display: flex;
        align-items: center;
        gap: 8px;
      }
      .stats-ribbon .stat-item svg {
        width: 18px;
        height: 18px;
        fill: none;
        stroke: #b7c0d0;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
        flex-shrink: 0;
      }
      .stats-ribbon .stat-item .stat-label {
        color: #98a2b3;
        font-weight: 400;
      }
      .stats-ribbon .stat-item .stat-value {
        color: #fff;
        font-weight: 600;
      }
      .stats-ribbon .stat-highlight {
        color: #f5d77b;
      }
      .stats-ribbon .stat-up {
        color: #57c7a2;
      }
      .stats-ribbon .stat-divider {
        width: 1px;
        height: 28px;
        background: #2f3846;
      }

      /* responsive */
      @media (max-width: 1024px) {
        .market-grid {
          grid-template-columns: repeat(2, 1fr);
        }
        .market-breadcrumb {
          right: 5%;
        }
      }
      @media (max-width: 800px) {
        .market-hero {
          height: 320px;
        }
        .market-hero-title {
          font-size: 32px;
          margin: 0 20px;
        }
        .stats-ribbon {
          gap: 12px 20px;
          font-size: 13px;
          padding: 12px 16px;
        }
        .stats-ribbon .stat-divider {
          display: none;
        }
        .market-heading {
          font-size: 28px;
        }
        .market-grid {
          gap: 20px;
        }
      }
      @media (max-width: 640px) {
        .market-hero {
          height: 280px;
        }
        .market-hero-content {
          width: calc(100% - 30px);
        }
        .market-hero-title {
          font-size: 28px;
        }
        .market-breadcrumb {
          right: 12px;
          min-width: unset;
          width: auto;
          height: 56px;
          padding: 0 16px;
          gap: 6px;
          border-radius: 8px 8px 0 0;
        }
        .market-breadcrumb a,
        .market-breadcrumb .sep,
        .market-breadcrumb .current {
          font-size: 11px;
        }
        .market-courses {
          padding: 50px 16px 60px;
        }
        .market-grid {
          grid-template-columns: 1fr;
        }
        .market-card-image {
          height: 140px;
        }
        .market-header {
          flex-direction: column;
          align-items: flex-start;
          gap: 10px;
        }
        .market-sub {
          font-size: 12px;
          padding: 4px 14px;
        }
      }
      @media (max-width: 420px) {
        .market-hero {
          height: 250px;
        }
        .market-hero-title {
          font-size: 24px;
        }
        .stats-ribbon {
          font-size: 11px;
          gap: 6px 12px;
          flex-wrap: wrap;
        }
        .stats-ribbon .stat-item {
          gap: 4px;
        }
      }
    </style>
  </head>
  <body>
    <!-- ========== HERO ========== -->
    <section class="market-hero">
      <div class="market-hero-content">
        <h1 class="market-hero-title">
          Pip Value Calculator
          <span>Know the exact value of every Pip before you Trade.</span>
        </h1>
      </div>
      <div class="market-breadcrumb">
        <a href="#">Home</a>
        <span class="sep">/</span>
        <a href="#">Markets</a>
        <span class="sep">/</span>
        <strong class="current">Pip Value Calculator</strong>
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
    <title>Pip Value Calculator · Premium</title>
    <!-- Font Awesome 6 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family:
          "Inter",
          -apple-system,
          BlinkMacSystemFont,
          "Segoe UI",
          Roboto,
          sans-serif;
      }
      body {
        background: #f5f8fc;
        color: #0b1a2f;
        line-height: 1.5;
      }
      .container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 28px;
      }
      .bg-white {
        background: #ffffff;
      }
      .bg-soft {
        background: #f8fbff;
      }
      .bg-dark {
        background: #0b1a2f;
      }
      .section-pad {
        padding: 70px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.03);
      }
      .section-pad:last-of-type {
        border-bottom: none;
      }
      .section-title {
        font-size: 2.3rem;
        font-weight: 700;
        letter-spacing: -0.02em;
        color: #0b1a2f;
        margin-bottom: 10px;
        text-align: center;
      }
      .section-sub {
        font-size: 1.05rem;
        color: #2d4059;
        max-width: 700px;
        margin: 0 auto 28px;
        text-align: center;
      }
      .text-center {
        text-align: center;
      }

      /* ----- HERO: simple & premium ----- */
      .hero-premium {
        background: linear-gradient(
          90deg,
          #030405 0%,
          #08121f 50%,
          #071a2c 100%
        );
        padding: 9rem 0 60px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        position: relative;
        overflow: hidden;
        text-align: center;
      }
      .hero-premium::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image:
          linear-gradient(rgba(255, 255, 255, 0.015) 1px, transparent 1px),
          linear-gradient(
            90deg,
            rgba(255, 255, 255, 0.015) 1px,
            transparent 1px
          );
        background-size: 60px 60px;
        pointer-events: none;
      }
      .hero-premium h1 {
        font-size: 3.6rem;
        font-weight: 700;
        letter-spacing: -0.02em;
        background: linear-gradient(
          135deg,
          #f7f18c 0%,
          #efe666 45%,
          #d8a91c 100%
        );
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 10px;
      }
      .hero-premium p {
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.9);
        max-width: 600px;
        margin: 0 auto 20px;
      }
      .btn-gold {
        background: linear-gradient(
          135deg,
          #f7f18c 0%,
          #efe666 45%,
          #d8a91c 100%
        );
        border: none;
        padding: 14px 40px;
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
      }
      .btn-gold:hover {
        transform: scale(1.03);
        box-shadow: 0 12px 40px rgba(239, 230, 102, 0.25);
      }
      .hero-stats {
        display: flex;
        justify-content: center;
        gap: 40px;
        margin-top: 30px;
        flex-wrap: wrap;
      }
      .hero-stats .stat {
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.95rem;
      }
      .hero-stats .stat strong {
        color: #efe666;
        font-weight: 700;
        font-size: 1.2rem;
        display: block;
      }
      .floating-glow {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        opacity: 0.2;
        pointer-events: none;
      }
      .glow1 {
        width: 400px;
        height: 400px;
        background: #a0eb56;
        top: -120px;
        right: -80px;
      }
      .glow2 {
        width: 300px;
        height: 300px;
        background: #126294;
        bottom: -80px;
        left: -60px;
      }

      /* ----- two-col layout for calculator section ----- */
      .two-col {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 48px 60px;
        align-items: center;
      }

      /* ----- calculator card (blue) ----- */
      .calc-card {
        background: linear-gradient(145deg, #0b2d50, #0a2644);
        border-radius: 32px;
        padding: 36px 32px 40px;
        box-shadow: 0 20px 50px rgba(11, 45, 80, 0.25);
        border: 1px solid rgba(255, 255, 255, 0.06);
        color: #fff;
        transition: 0.2s;
      }
      .calc-card h3 {
        font-size: 1.8rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 4px;
      }
      .calc-card h3 i {
        color: #efe666;
      }
      .calc-desc {
        color: rgba(255, 255, 255, 0.75);
        margin-bottom: 28px;
        padding: 10px 16px;
        background: rgba(255, 255, 255, 0.06);
        border-radius: 16px;
        border-left: 4px solid #efe666;
        font-size: 0.95rem;
      }
      .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px 20px;
      }
      .form-group {
        display: flex;
        flex-direction: column;
        gap: 4px;
      }
      .form-group label {
        font-weight: 600;
        font-size: 0.75rem;
        letter-spacing: 0.04em;
        color: rgba(255, 255, 255, 0.8);
        display: flex;
        align-items: center;
        gap: 8px;
      }
      .form-group label i {
        color: #efe666;
        width: 18px;
      }
      .form-group .helper {
        font-size: 0.65rem;
        color: rgba(255, 255, 255, 0.4);
        margin-left: 26px;
        margin-top: -2px;
      }
      .form-group select,
      .form-group input {
        padding: 12px 14px;
        border-radius: 14px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #fff;
        font-size: 0.95rem;
        transition: 0.2s;
        width: 100%;
      }
      .form-group select option {
        background: #0b2d50;
        color: #fff;
      }
      .form-group select:focus,
      .form-group input:focus {
        outline: none;
        border-color: #efe666;
        box-shadow: 0 0 0 4px rgba(239, 230, 102, 0.15);
        background: rgba(255, 255, 255, 0.12);
      }
      .calc-btn {
        background: linear-gradient(135deg, #a0eb56, #58d64e);
        border: none;
        padding: 16px 24px;
        border-radius: 60px;
        font-weight: 700;
        font-size: 1rem;
        color: #01060e;
        cursor: pointer;
        transition: 0.25s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 14px;
        width: 100%;
        margin-top: 18px;
        box-shadow: 0 8px 28px rgba(88, 214, 78, 0.15);
      }
      .calc-btn:hover {
        transform: scale(1.02);
        filter: brightness(1.06);
      }
      .result-area {
        margin-top: 24px;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(8px);
        border-radius: 20px;
        padding: 20px 24px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        border: 1px solid rgba(255, 255, 255, 0.06);
      }
      .result-item {
        display: flex;
        flex-direction: column;
      }
      .result-item .label {
        font-size: 0.65rem;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: rgba(255, 255, 255, 0.5);
      }
      .result-item .value {
        font-size: 1.8rem;
        font-weight: 700;
        color: #a0eb56;
        letter-spacing: -0.01em;
      }
      .result-item .value small {
        font-weight: 400;
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.5);
        margin-left: 4px;
      }

      /* ----- How It Works: premium step timeline ----- */
      .how-it-works {
        max-width: 650px;
      }

      .how-title {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 8px;
      }

      .how-title-icon {
        width: 42px;
        height: 42px;
        flex: 0 0 42px;
        display: grid;
        place-items: center;
        border-radius: 50%;
        background: linear-gradient(135deg, #126294, #0b4d78);
        color: #fff;
        font-size: 16px;
        box-shadow: 0 8px 20px rgba(18, 98, 148, 0.18);
      }

      .how-title h3 {
        margin: 0;
        font-size: 2rem;
        line-height: 1.15;
        color: #0b1a2f;
        font-weight: 750;
        letter-spacing: -0.025em;
      }

      .how-intro {
        margin: 0 0 26px 54px;
        color: #536a83;
        font-size: 1rem;
      }

      .how-steps {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 8px;
      }

      .how-steps::before {
        content: "";
        position: absolute;
        left: 19px;
        top: 24px;
        bottom: 24px;
        width: 2px;
        background: linear-gradient(
          to bottom,
          rgba(18, 98, 148, 0.35),
          rgba(18, 98, 148, 0.08)
        );
      }

      .how-step {
        position: relative;
        display: grid;
        grid-template-columns: 40px 150px 1fr;
        align-items: center;
        gap: 16px;
        padding: 15px 18px 15px 0;
        border-radius: 18px;
        transition: 0.25s ease;
      }

      .how-step:hover {
        background: #fff;
        transform: translateX(5px);
        box-shadow: 0 12px 30px rgba(11, 26, 47, 0.06);
        padding-left: 8px;
      }

      .how-step-number {
        position: relative;
        z-index: 2;
        width: 40px;
        height: 40px;
        display: grid;
        place-items: center;
        border-radius: 50%;
        background: #fff;
        border: 2px solid #126294;
        color: #126294;
        font-size: 0.78rem;
        font-weight: 800;
        box-shadow: 0 4px 12px rgba(18, 98, 148, 0.12);
      }

      .how-step-title {
        color: #0b1a2f;
        font-size: 1rem;
        font-weight: 750;
        line-height: 1.35;
      }

      .how-step-description {
        color: #536a83;
        font-size: 0.98rem;
        line-height: 1.55;
      }

      .how-step-description strong {
        color: #126294;
        font-weight: 700;
      }

      @media (max-width: 600px) {
        .how-title h3 {
          font-size: 1.7rem;
        }

        .how-intro {
          margin-left: 0;
        }

        .how-step {
          grid-template-columns: 40px 1fr;
          gap: 8px 12px;
          padding-right: 0;
        }

        .how-step-title,
        .how-step-description {
          grid-column: 2;
        }

        .how-step-description {
          margin-top: -4px;
        }
      }

      /* What is Pip Value – centered */
      .pip-visual {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
        background: #f0f6fe;
        border-radius: 20px;
        padding: 20px 30px;
        margin: 20px auto 0;
        max-width: 620px;
        border-left: 5px solid #126294;
      }
      .pip-visual span {
        font-weight: 600;
      }
      .pip-visual .badge {
        background: #a0eb56;
        color: #01060e;
        padding: 4px 18px;
        border-radius: 40px;
        font-weight: 700;
      }

      /* Why Pip Value Matters */
      .matters-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        gap: 20px;
        margin-top: 20px;
      }
      .matter-card {
        background: #ffffff;
        border-radius: 24px;
        padding: 24px 16px;
        text-align: center;
        border: 1px solid #e9f0f8;
        transition: 0.3s;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
      }
      .matter-card:hover {
        transform: translateY(-6px);
        border-color: #126294;
        box-shadow: 0 16px 40px rgba(18, 98, 148, 0.06);
      }
      .matter-card img {
        width: 48px;
        height: 48px;
        object-fit: contain;
        margin-bottom: 10px;
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
      .matter-card h5 {
        font-weight: 700;
        font-size: 0.95rem;
        color: #0b1a2f;
        margin-bottom: 4px;
      }
      .matter-card p {
        font-size: 0.85rem;
        color: #2d4059;
        margin: 0;
      }

      /* Who is this for */
      .who-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 28px;
        margin-top: 18px;
      }
      .who-card {
        background: #ffffff;
        padding: 28px 24px;
        border-radius: 28px;
        border: 1px solid #e9f0f8;
        transition: 0.3s;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
        text-align: center;
      }
      .who-card:hover {
        transform: translateY(-8px);
        border-color: #126294;
        box-shadow: 0 20px 60px rgba(18, 98, 148, 0.08);
      }
      .who-card img {
        width: 56px;
        height: 56px;
        object-fit: contain;
        margin-bottom: 12px;
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
      .who-card h4 {
        font-size: 1.2rem;
        font-weight: 700;
        color: #0b1a2f;
        margin-bottom: 6px;
      }
      .who-card p {
        color: #2d4059;
        font-size: 0.95rem;
      }

      /* CTA dark */
      .cta-dark {
        background: #0b1a2f;
        border-radius: 40px;
        padding: 48px 40px;
        text-align: center;
        color: white;
        margin-top: 40px;
        position: relative;
        overflow: hidden;
      }
      .cta-dark::after {
        content: "";
        position: absolute;
        top: -40%;
        right: -10%;
        width: 400px;
        height: 400px;
        background: radial-gradient(
          circle,
          rgba(160, 235, 86, 0.06),
          transparent 70%
        );
        border-radius: 50%;
      }
      .cta-dark h4 {
        font-size: 2.2rem;
        font-weight: 700;
      }
      .cta-dark p {
        color: rgba(255, 255, 255, 0.8);
        max-width: 600px;
        margin: 8px auto 20px;
      }

      /* responsive */
      @media (max-width: 1024px) {
        .two-col {
          grid-template-columns: 1fr;
          gap: 40px;
        }
        .matters-grid {
          grid-template-columns: 1fr 1fr 1fr;
        }
        .who-grid {
          grid-template-columns: 1fr 1fr;
        }
      }
      @media (max-width: 820px) {
        .form-row {
          grid-template-columns: 1fr;
        }
        .hero-premium h1 {
          font-size: 2.6rem;
        }
        .matters-grid {
          grid-template-columns: 1fr 1fr;
        }
        .who-grid {
          grid-template-columns: 1fr;
        }
        .result-area {
          flex-direction: column;
          align-items: flex-start;
          gap: 14px;
        }
        .hero-stats {
          gap: 20px;
        }
        .pip-visual {
          flex-direction: column;
          gap: 10px;
        }
      }
      @media (max-width: 480px) {
        .hero-premium {
          padding: 7.5rem 0 50px;
        }
        .hero-premium h1 {
          font-size: 2rem;
        }
        .section-title {
          font-size: 1.8rem;
        }
        .calc-card {
          padding: 24px 16px;
        }
        .cta-dark {
          padding: 30px 20px;
        }
        /* .matters-grid {
          grid-template-columns: 1fr;
        } */
      }
    </style>
  </head>
  <body>
    <!-- ===== What is a Pip Value Calculator? (centered) ===== -->
    <section class="bg-white section-pad">
      <div class="container text-center">
        <h2 class="section-title">What is a Pip Value Calculator?</h2>
        <p style="color: #2d4059; max-width: 720px; margin: 0 auto 16px">
          A Pip Value Calculator automatically calculates the cash value of one
          pip based on your trade details.
        </p>
        <p style="color: #2d4059; max-width: 720px; margin: 0 auto 24px">
          Instead of manually performing complex calculations, the tool provides
          accurate results in seconds. It is widely used by both beginner and
          professional traders to improve position sizing and risk management.
        </p>
        <div class="pip-visual">
          <span style="font-weight: 700">EUR/USD</span>
          <span
            style="
              background: #12629420;
              padding: 4px 16px;
              border-radius: 40px;
            "
            >1.1000</span
          >
          <i class="fas fa-arrow-down" style="color: #58d64e"></i>
          <span
            style="
              background: #12629420;
              padding: 4px 16px;
              border-radius: 40px;
            "
            >1.1001</span
          >
          <span class="badge">= 1 Pip</span>
        </div>
        <!-- removed Did You Know & formula box as requested -->
      </div>
    </section>

    <!-- ===== Calculator + How it works ===== -->
    <section class="bg-soft section-pad" id="calculator-section">
      <div class="container">
        <div class="two-col">
          <div class="left-content how-it-works">
            <div class="how-title">
              <span class="how-title-icon">
                <i class="fas fa-play"></i>
              </span>
              <h3>How It Works</h3>
            </div>

            <p class="how-intro">
              Simply enter the following details to calculate your pip value.
            </p>

            <div class="how-steps">
              <div class="how-step">
                <span class="how-step-number">01</span>
                <div class="how-step-title">Currency Pair</div>
                <div class="how-step-description">
                  Select the <strong>currency pair</strong> you want to trade.
                </div>
              </div>

              <div class="how-step">
                <span class="how-step-number">02</span>
                <div class="how-step-title">Account Currency</div>
                <div class="how-step-description">
                  Choose your account's <strong>base currency</strong>.
                </div>
              </div>

              <div class="how-step">
                <span class="how-step-number">03</span>
                <div class="how-step-title">Lot Size</div>
                <div class="how-step-description">
                  Enter your <strong>trade volume</strong> or position size.
                </div>
              </div>

              <div class="how-step">
                <span class="how-step-number">04</span>
                <div class="how-step-title">Exchange Rate</div>
                <div class="how-step-description">
                  Input the <strong>current market price</strong>.
                </div>
              </div>
            </div>

            <!-- example trade -->
            <!-- example trade -->
            <div
              style="
                background: #f0f6fe;
                border-radius: 24px;
                padding: 24px;
                margin-top: 20px;
                border-left: 6px solid #126294;
              "
            >
              <h5 style="display: flex; align-items: center; gap: 8px">
                <i class="fas fa-chart-line" style="color: #126294"></i> Example
                Trade
              </h5>
              <div
                style="
                  display: grid;
                  grid-template-columns: 1fr 1fr 1fr;
                  gap: 12px;
                  margin: 12px 0 8px;
                "
              >
                <div
                  style="
                    background: white;
                    border-radius: 16px;
                    padding: 12px;
                    text-align: center;
                    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
                  "
                >
                  <div
                    style="
                      font-size: 0.7rem;
                      text-transform: uppercase;
                      color: #6a7f98;
                    "
                  >
                    Pair
                  </div>
                  <div style="font-weight: 700">EUR/USD</div>
                </div>
                <div
                  style="
                    background: white;
                    border-radius: 16px;
                    padding: 12px;
                    text-align: center;
                    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
                  "
                >
                  <div
                    style="
                      font-size: 0.7rem;
                      text-transform: uppercase;
                      color: #6a7f98;
                    "
                  >
                    Lot Size
                  </div>
                  <div style="font-weight: 700">1 Standard</div>
                </div>
                <div
                  style="
                    background: white;
                    border-radius: 16px;
                    padding: 12px;
                    text-align: center;
                    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
                  "
                >
                  <div
                    style="
                      font-size: 0.7rem;
                      text-transform: uppercase;
                      color: #6a7f98;
                    "
                  >
                    Exchange Rate
                  </div>
                  <div style="font-weight: 700">1.0850</div>
                </div>
              </div>
              <div
                style="
                  background: white;
                  border-radius: 16px;
                  padding: 12px 16px;
                  margin-top: 8px;
                  display: flex;
                  justify-content: space-between;
                  flex-wrap: wrap;
                "
              >
                <span><strong>1 Pip =</strong> $10.00</span>
                <span
                  ><strong>If EUR/USD moves 50 pips →</strong>
                  <span style="color: #126294; font-weight: 700"
                    >$500</span
                  ></span
                >
              </div>
            </div>
          </div>

          <!-- calculator -->
          <div class="calc-card">
            <h3><i class="fas fa-coins"></i> Pip Value Calculator</h3>
            <div class="calc-desc">
              <i
                class="fas fa-info-circle"
                style="margin-right: 8px; color: #efe666"
              ></i>
              Calculate the value of every pip before you trade.
            </div>
            <form id="pipCalculatorForm">
              <div class="form-row">
                <div class="form-group">
                  <label><i class="fas fa-flag"></i> Currency Pair</label>
                  <select id="currencyPair">
                    <option value="EURUSD">EUR/USD</option>
                    <option value="GBPUSD">GBP/USD</option>
                    <option value="USDJPY">USD/JPY</option>
                    <option value="AUDUSD">AUD/USD</option>
                    <option value="USDCAD">USD/CAD</option>
                    <option value="USDCHF">USD/CHF</option>
                    <option value="NZDUSD">NZD/USD</option>
                    <option value="EURGBP">EUR/GBP</option>
                    <option value="EURJPY">EUR/JPY</option>
                    <option value="GBPJPY">GBP/JPY</option>
                  </select>
                  <span class="helper">Select the pair you're trading</span>
                </div>
                <div class="form-group">
                  <label
                    ><i class="fas fa-money-bill-wave"></i> Account
                    Currency</label
                  >
                  <select id="accountCurrency">
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                    <option value="GBP">GBP</option>
                    <option value="JPY">JPY</option>
                    <option value="AUD">AUD</option>
                    <option value="CAD">CAD</option>
                    <option value="CHF">CHF</option>
                    <option value="NZD">NZD</option>
                  </select>
                </div>
                <div class="form-group">
                  <label
                    ><i class="fas fa-arrows-left-right"></i> Lot Size</label
                  >
                  <select id="lotSize">
                    <option value="100000">Standard (100,000)</option>
                    <option value="10000">Mini (10,000)</option>
                    <option value="1000">Micro (1,000)</option>
                    <option value="500">Custom 500</option>
                    <option value="2500">Custom 2,500</option>
                    <option value="5000">Custom 5,000</option>
                    <option value="25000">Custom 25,000</option>
                  </select>
                </div>
                <div class="form-group">
                  <label
                    ><i class="fas fa-chart-simple"></i> Exchange Rate
                    <i
                      class="fas fa-question-circle"
                      style="
                        color: rgba(255, 255, 255, 0.4);
                        font-size: 0.7rem;
                        cursor: help;
                      "
                      title="Current market price"
                    ></i
                  ></label>
                  <input
                    type="number"
                    id="exchangeRate"
                    step="0.00001"
                    placeholder="e.g. 1.0850"
                    value="1.0850"
                  />
                  <span class="helper">Current market price</span>
                </div>
              </div>
              <button type="button" class="calc-btn" id="calculateBtn">
                <i class="fas fa-calculator"></i> Calculate Pip Value
              </button>
            </form>
            <div id="resultArea" class="result-area">
              <div class="result-item">
                <span class="label">Pip Value</span
                ><span class="value" id="pipValueDisplay"
                  >0.00 <small>USD</small></span
                >
              </div>
              <div class="result-item">
                <span class="label">Value per Pip</span
                ><span class="value" id="valuePerPipDisplay"
                  >0.00 <small>USD</small></span
                >
              </div>
              <div class="result-item">
                <span class="label">Est. cost / pip</span
                ><span class="value" id="costPerPipDisplay"
                  >0.00 <small>USD</small></span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== Why Pip Value Matters ===== -->
    <section class="bg-white section-pad">
      <div class="container text-center">
        <h2 class="section-title">Why Pip Value Matters</h2>
        <p class="section-sub">
          Every currency pair has a different pip value, and it changes
          depending on your trade size and account currency. Knowing your pip
          value helps you:
        </p>
        <div class="matters-grid">
          <div class="matter-card">
            <img
              src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='48' height='48' viewBox='0 0 24 24' fill='none' stroke='%23126294' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M12 2L2 7l10 5 10-5-10-5z'/%3E%3Cpath d='M2 17l10 5 10-5'/%3E%3Cpath d='M2 12l10 5 10-5'/%3E%3C/svg%3E"
              alt="Protect capital"
            />
            <h5>Protect Capital</h5>
            <p>Know your risk per pip to safeguard your trading account.</p>
          </div>
          <div class="matter-card">
            <img
              src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='48' height='48' viewBox='0 0 24 24' fill='none' stroke='%23126294' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M12 2v4M12 22v-4'/%3E%3Cpath d='M4.93 4.93l2.83 2.83'/%3E%3Cpath d='M19.07 4.93l-2.83 2.83'/%3E%3Ccircle cx='12' cy='12' r='4'/%3E%3C/svg%3E"
              alt="Calculate risk"
            />
            <h5>Calculate Risk</h5>
            <p>Assess risk before placing any trade with confidence.</p>
          </div>
          <div class="matter-card">
            <img
              src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='48' height='48' viewBox='0 0 24 24' fill='none' stroke='%23126294' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M22 12h-4l-3 9-4-18-3 9H2'/%3E%3C/svg%3E"
              alt="Stop-loss"
            />
            <h5>Set Stop-Loss</h5>
            <p>Place accurate stop-loss and take-profit levels easily.</p>
          </div>
          <div class="matter-card">
            <img
              src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='48' height='48' viewBox='0 0 24 24' fill='none' stroke='%23126294' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round'%3E%3Crect x='2' y='7' width='20' height='14' rx='2' ry='2'/%3E%3Cpath d='M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16'/%3E%3C/svg%3E"
              alt="Position sizing"
            />
            <h5>Position Sizing</h5>
            <p>Maintain consistent position sizing across all trades.</p>
          </div>
          <div class="matter-card">
            <img
              src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='48' height='48' viewBox='0 0 24 24' fill='none' stroke='%23126294' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M12 2L2 7l10 5 10-5-10-5z'/%3E%3Cpath d='M2 17l10 5 10-5'/%3E%3Cpath d='M2 12l10 5 10-5'/%3E%3C/svg%3E"
              alt="Confidence"
            />
            <h5>Trade with Confidence</h5>
            <p>Greater discipline and clarity in every trade decision.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== Who Is This Tool For? (PNG icons) ===== -->
    <section class="bg-soft section-pad">
      <div class="container text-center">
        <h2 class="section-title">Who Is This Tool For?</h2>
        <p class="section-sub">
          Whether you're a beginner or an experienced trader, the Pip Value
          Calculator helps you understand exactly how much each pip is worth.
        </p>
        <div class="who-grid">
          <div class="who-card">
            <img
              src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='56' height='56' viewBox='0 0 24 24' fill='none' stroke='%23126294' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M12 2L2 7l10 5 10-5-10-5z'/%3E%3Cpath d='M2 17l10 5 10-5'/%3E%3Cpath d='M2 12l10 5 10-5'/%3E%3C/svg%3E"
              alt="Beginner"
            />
            <h4>Beginner Traders</h4>
            <p>
              Learn the value of pips quickly and build a solid foundation for
              risk management without complex math.
            </p>
          </div>
          <div class="who-card">
            <img
              src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='56' height='56' viewBox='0 0 24 24' fill='none' stroke='%23126294' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M21 12v-2a5 5 0 0 0-5-5H8a5 5 0 0 0-5 5v2'/%3E%3Ccircle cx='12' cy='16' r='5'/%3E%3Cpath d='M12 11v5'/%3E%3C/svg%3E"
              alt="Professional"
            />
            <h4>Professional Traders</h4>
            <p>
              Manage multiple positions with precision, optimize lot sizing, and
              fine-tune your entry and exit strategies.
            </p>
          </div>
          <div class="who-card">
            <img
              src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='56' height='56' viewBox='0 0 24 24' fill='none' stroke='%23126294' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round'%3E%3Crect x='2' y='3' width='20' height='14' rx='2' ry='2'/%3E%3Cline x1='8' y1='21' x2='16' y2='21'/%3E%3Cline x1='12' y1='17' x2='12' y2='21'/%3E%3C/svg%3E"
              alt="Algorithmic"
            />
            <h4>Algorithmic & Quant Traders</h4>
            <p>
              Integrate pip value calculations into your models and backtesting
              frameworks for data-driven decisions.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== CTA dark ===== -->
    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes"
        />
        <title>Smart Money 24/7 · CTA</title>
        <!-- Font Awesome 6 (free) for icons -->
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        />
        <!-- Google Font Poppins (optional but matches style) -->
        <link
          href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
          rel="stylesheet"
        />
        <style>
          /* reset / base for demo */
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
          }

          /* ---------- CTA SECTION (exactly as provided, with minor tweaks for full width) ---------- */
          .cta-section {
            max-width: 1300px;
            width: 100%;
            margin: 20px auto 60px;
            padding: 0 30px;
            font-family: "Poppins", Arial, sans-serif;
            background: #ffffff; /* dark background to make CTA pop */
            /* display: flex;
        align-items: center;
        justify-content: center; */
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
            font-family: "Poppins", Arial, sans-serif !important;
          }

          /* Background image — using a placeholder gradient if image missing, 
       but we keep the rule with a fallback so it looks polished even without "Photos/11-22.png" */
          .cta-box::before {
            content: "";
            position: absolute;
            inset: 0;
            /* using a real image from picsum to simulate "Photos/11-22.png" 
         in case the original file is not available – but we keep both */
            background-image: url("Photos/111-222.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: -2;
            transform: scale(1.03);
            /* fallback if image fails: */
            background-color: #1f1a0e;
          }

          /* extra overlay to keep text legible */
          .cta-box::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgb(0 0 0 / 45%);
            z-index: -1;
            border-radius: 32px;
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
            color: rgba(255, 255, 255, 0.85);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 8px auto 20px;
            font-weight: 400;
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

          @media (max-width: 480px) {
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
              margin-left: 0; /* remove left margin on small screens */
            }

            .cta-section {
              padding: 0 12px;
              margin: 16px auto 40px;
            }
          }

          @media (max-width: 380px) {
            .cta-box h2 {
              font-size: 1.1rem;
            }
            .cta-box p {
              font-size: 0.85rem;
            }
            .cta-box .btn-gold {
              padding: 10px 22px;
              font-size: 0.85rem;
            }
            .cta-box .btn-outline-light {
              padding: 10px 18px;
              font-size: 0.8rem;
            }
          }

          /* extra polish: action group on very small screens stacks nicely */
          @media (max-width: 420px) {
            .cta-box .action-group {
              flex-direction: column;
              align-items: center;
            }
            .cta-box .btn-outline-light {
              margin-left: 0;
            }
          }
        </style>
      </head>
      <body>
        <!-- ============ CTA SECTION (last) ============ -->
        <div class="cta-section">
          <div class="cta-box">
            <h2>
              <i class="fas fa-rocket"></i> <br />
              Ready to Master the Markets?
            </h2>
            <p>
              Join Smart Money 24/7 and get full access to video courses,
              trading tools, economic calendar, live news, and more.
            </p>
            <div class="action-group">
              <a href="Coursees.html" class="btn-gold"
                ><i class="fas fa-play-circle"></i> Start Learning</a
              >
              <a href="Contact.html" class="btn-outline-light"
                ><i class="fas fa-headset"></i> Contact Support</a
              >
            </div>
            <p
              style="
                margin-top: 20px;
                font-size: 0.8rem;
                opacity: 0.5;
                color: #fff;
              "
            >
              More questions? Reach us at support@smartmoney247.com
            </p>
          </div>
        </div>

        <!-- small note: the background image uses an Unsplash finance photo as fallback,
       but you can replace the url with your own "Photos/11-22.png" -->
      </body>
    </html>

    <script>
      (function () {
        const currencyPair = document.getElementById("currencyPair");
        const accountCurrency = document.getElementById("accountCurrency");
        const lotSize = document.getElementById("lotSize");
        const exchangeRate = document.getElementById("exchangeRate");
        const calculateBtn = document.getElementById("calculateBtn");
        const pipValueDisplay = document.getElementById("pipValueDisplay");
        const valuePerPipDisplay =
          document.getElementById("valuePerPipDisplay");
        const costPerPipDisplay = document.getElementById("costPerPipDisplay");

        function getPipFactor(pair) {
          return pair.endsWith("JPY") ? 0.01 : 0.0001;
        }

        function animateValue(el, target, symbol) {
          let current = 0;
          const step = Math.max(0.01, target / 30);
          const interval = setInterval(() => {
            current += step;
            if (current >= target) {
              current = target;
              clearInterval(interval);
            }
            el.innerHTML = `${current.toFixed(2)} <small>${symbol}</small>`;
          }, 20);
        }

        function calculatePipValue() {
          const pair = currencyPair.value;
          const accCurrency = accountCurrency.value;
          const lot = parseFloat(lotSize.value);
          const rate = parseFloat(exchangeRate.value);
          if (isNaN(lot) || lot <= 0 || isNaN(rate) || rate <= 0) {
            pipValueDisplay.innerHTML = "0.00 <small>USD</small>";
            valuePerPipDisplay.innerHTML = "0.00 <small>USD</small>";
            costPerPipDisplay.innerHTML = "0.00 <small>USD</small>";
            return;
          }
          const pipFactor = getPipFactor(pair);
          const quote = pair.substring(3);
          let pipValueQuote = lot * pipFactor;
          let pipValueInAccount = pipValueQuote;

          // simplified conversion
          if (quote === "USD" && accCurrency === "USD")
            pipValueInAccount = pipValueQuote;
          else if (pair === "USDJPY" && accCurrency === "USD")
            pipValueInAccount = pipValueQuote / rate;
          else if (pair === "EURUSD" && accCurrency === "EUR")
            pipValueInAccount = pipValueQuote * rate;
          else if (pair === "GBPUSD" && accCurrency === "GBP")
            pipValueInAccount = pipValueQuote * rate;
          else if (pair === "AUDUSD" && accCurrency === "AUD")
            pipValueInAccount = pipValueQuote * rate;
          else if (pair === "NZDUSD" && accCurrency === "NZD")
            pipValueInAccount = pipValueQuote * rate;
          else if (quote === accCurrency) pipValueInAccount = pipValueQuote;
          else if (pair.startsWith(accCurrency))
            pipValueInAccount = pipValueQuote / rate;
          else pipValueInAccount = pipValueQuote;

          const rounded = Math.round(pipValueInAccount * 100) / 100;
          const symbol = accCurrency;
          animateValue(pipValueDisplay, rounded, symbol);
          animateValue(valuePerPipDisplay, rounded, symbol);
          animateValue(costPerPipDisplay, rounded, symbol);
        }

        calculateBtn.addEventListener("click", calculatePipValue);
        document
          .querySelectorAll(
            "#pipCalculatorForm select, #pipCalculatorForm input",
          )
          .forEach((el) => {
            el.addEventListener("change", calculatePipValue);
            el.addEventListener("input", calculatePipValue);
          });
        calculatePipValue();

        document
          .querySelectorAll('a[href="#calculator-section"]')
          .forEach((link) => {
            link.addEventListener("click", function (e) {
              e.preventDefault();
              document
                .getElementById("calculator-section")
                .scrollIntoView({ behavior: "smooth" });
            });
          });
      })();
    </script>
  </body>
</html>

<!-- ---- footer---- -->
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
