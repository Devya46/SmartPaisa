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

<!-- ---- Page header--- -->
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
        height: 415px;
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
      /* .market-hero::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 110px;
        background: linear-gradient(to top, rgba(6, 10, 18, 0.5), transparent);
        z-index: 1;
      } */
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
          Global Market Insights
          <span>Live Economic Calendar &amp; Breaking Market News</span>
        </h1>
      </div>
      <div class="market-breadcrumb">
        <a href="#">Home</a>
        <span class="sep">/</span>
        <a href="#">Markets</a>
        <span class="sep">/</span>
        <strong class="current">Live Dashboard</strong>
      </div>
    </section>

    <!-- ========== STATS RIBBON (SVG icons) ========== -->
    <div class="stats-ribbon">
      <!-- real-time -->
      <span class="stat-item">
        <svg viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10" />
          <polyline points="12,6 12,12 16,14" />
        </svg>
        <span class="stat-label">Real‑time data</span>
        <span class="stat-value">24/5 coverage</span>
      </span>

      <span class="stat-divider"></span>
      <!-- high-impact -->
      <span class="stat-item">
        <svg viewBox="0 0 24 24">
          <polygon
            points="12,2 15,9 22,9 16,14 18,21 12,17 6,21 8,14 2,9 9,9 12,2"
          />
        </svg>
        <span class="stat-label">High‑impact events today</span>
        <span class="stat-value stat-highlight">1.8%</span>
      </span>
      <span class="stat-divider"></span>
      <!-- S&P 500 futures -->
      <span class="stat-item">
        <svg viewBox="0 0 24 24">
          <polyline points="23,6 13.5,15.5 8.5,10.5 1,18" />
          <polyline points="17,6 23,6 23,12" />
        </svg>
        <span class="stat-label">S&amp;P 500 futures</span>
        <span class="stat-value stat-up">+0.6%</span>
      </span>
      <span class="stat-divider"></span>
      <!-- DXY -->
      <span class="stat-item">
        <svg viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10" />
          <line x1="2" y1="12" x2="22" y2="12" />
          <path d="M12,2 A10,10 0 0,1 12,22" />
        </svg>
        <span class="stat-label">DXY index</span>
        <span class="stat-value">103.2</span>
      </span>
    </div>
  </body>
</html>

<!-- ----economic Calendar----  -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Global Economic Calendar · Edu Stockx</title>

    <!-- Google Font (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome 6 (free) – solid icons -->
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

      .body-Economic {
        font-family: "Poppins", Arial, sans-serif !important;
        background: #f9fcff;
        color: #0b1a2e;
        line-height: 1.5;
        -webkit-font-smoothing: antialiased;
      }

      :root {
        --bg-card: #ffffff;
        --primary: #a0eb56;
        --primary-dark: #1b552c;
        --gold: #d4b05c;
        --blue-deep: #0f4b6e;
        --blue-accent: #126294;
        --silver: #f0f4fa;
        --text-main: #0b1a2e;
        --text-secondary: #1f334a;
        --text-muted: #5e718b;
        --border-soft: #dfe6ef;
        --shadow-sm: 0 8px 28px rgba(0, 20, 40, 0.06);
        --shadow-raised: 0 20px 48px rgba(11, 26, 46, 0.1);
        --radius-card: 24px;
        --radius-element: 16px;
        --transition: 0.25s cubic-bezier(0.2, 0, 0, 1);
      }

      .economic-page {
        width: 100%;
        min-height: 100vh;
        background:
          radial-gradient(
            circle at 80% 10%,
            rgba(160, 235, 86, 0.07),
            transparent 35%
          ),
          radial-gradient(
            circle at 20% 90%,
            rgba(18, 98, 148, 0.04),
            transparent 30%
          ),
          #f9fcff;
        padding: 0 0 60px;
      }

      .economic-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 56px 28px 40px;
      }

      /* ----- header / hero ----- */
      .economic-header {
        text-align: center;
        max-width: 880px;
        margin: 0 auto 52px;
      }

      .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 6px 18px 6px 16px;
        border-radius: 60px;
        background: rgba(160, 235, 86, 0.16);
        color: var(--primary-dark);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        margin-bottom: 20px;
        border: 1px solid rgba(160, 235, 86, 0.25);
        backdrop-filter: blur(2px);
      }

      .eyebrow i {
        font-size: 10px;
        color: var(--primary-dark);
        opacity: 0.9;
      }

      .eyebrow .dot-indicator {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--primary);
        box-shadow: 0 0 0 4px rgba(160, 235, 86, 0.2);
        display: inline-block;
      }

      .economic-header h2 {
        font-size: 48px;
        line-height: 1.08;
        font-weight: 600;
        margin-bottom: 20px;
        letter-spacing: -1.5px;
        color: #1e1e1e;
      }

      .economic-header h2 span {
        color: #ffc52f;
        background: linear-gradient(145deg, #d99f1a, #b87d0a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 700;
      }

      .economic-header p {
        max-width: 780px;
        margin: 0 auto;
        color: var(--text-muted);
        font-size: 17px;
        font-weight: 450;
        line-height: 1.7;
        letter-spacing: -0.2px;
      }

      /* ----- quick highlights ----- */
      .calendar-highlights {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        margin-bottom: 44px;
      }

      .highlight-card {
        background: var(--bg-card);
        border: 1px solid var(--border-soft);
        border-radius: var(--radius-element);
        padding: 24px 28px;
        display: flex;
        align-items: center;
        gap: 20px;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        backdrop-filter: blur(2px);
      }

      .highlight-card:hover {
        transform: translateY(-5px);
        border-color: rgba(160, 235, 86, 0.5);
        box-shadow: var(--shadow-raised);
        background: #ffffff;
      }

      .highlight-icon {
        width: 54px;
        height: 54px;
        flex: 0 0 54px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 16px;
        background: #ecf3fa;
        color: var(--blue-accent);
        font-size: 24px;
        transition: var(--transition);
      }

      .highlight-card:nth-child(2) .highlight-icon {
        background: rgba(212, 176, 92, 0.14);
        color: #b48d3e;
      }

      .highlight-card:nth-child(3) .highlight-icon {
        background: rgba(160, 235, 86, 0.18);
        color: var(--primary-dark);
      }

      .highlight-content strong {
        display: block;
        font-size: 16px;
        font-weight: 600;
        color: var(--text-main);
        margin-bottom: 2px;
        letter-spacing: -0.2px;
        font-family: "Poppins", Arial, sans-serif !important;
      }

      .highlight-content p {
        font-size: 14px;
        color: var(--text-muted);
        margin: 0;
        font-weight: 450;
      }

      /* ----- calendar section ----- */
      .calendar-section {
        background: #ffffff;
        border: 1px solid var(--border-soft);
        border-radius: var(--radius-card);
        overflow: hidden;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
      }

      .calendar-section:hover {
        box-shadow: var(--shadow-raised);
      }

      .calendar-topbar {
        padding: 22px 32px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        border-bottom: 1px solid var(--border-soft);
        background: linear-gradient(
          90deg,
          rgba(160, 235, 86, 0.06),
          rgba(18, 98, 148, 0.02),
          rgba(212, 176, 92, 0.04)
        );
      }

      .calendar-title {
        display: flex;
        align-items: center;
        gap: 16px;
      }

      .calendar-title-icon {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 14px;
        background: var(--primary-dark);
        color: #fff;
        font-size: 22px;
        box-shadow: 0 6px 14px rgba(27, 85, 44, 0.2);
      }

      .calendar-title h3 {
        font-size: 22px;
        font-weight: 800;
        color: var(--text-main);
        letter-spacing: -0.4px;
        margin: 0;
      }

      .calendar-title p {
        margin-top: 2px;
        font-size: 13px;
        color: var(--text-muted);
        font-weight: 450;
        letter-spacing: -0.1px;
      }

      .live-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 8px 18px 8px 16px;
        border-radius: 60px;
        background: rgba(160, 235, 86, 0.15);
        color: var(--primary-dark);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.6px;
        text-transform: uppercase;
        border: 1px solid rgba(160, 235, 86, 0.25);
        backdrop-filter: blur(2px);
      }

      .live-badge i {
        font-size: 11px;
      }

      .live-dot {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: var(--primary-dark);
        animation: pulse-dot 2s infinite;
        display: inline-block;
      }

      @keyframes pulse-dot {
        0% {
          box-shadow: 0 0 0 0 rgba(27, 85, 44, 0.35);
        }
        70% {
          box-shadow: 0 0 0 8px rgba(27, 85, 44, 0);
        }
        100% {
          box-shadow: 0 0 0 0 rgba(27, 85, 44, 0);
        }
      }

      /* ----- tradingview wrapper - FIXED to show full container ----- */
      .tradingview-wrapper {
        width: 100%;
        height: 680px;
        background: #ffffff;
        position: relative;
        overflow: hidden;
      }

      .tradingview-widget-container {
        width: 100%;
        height: 100%;
        position: relative;
      }

      .tradingview-widget-container__widget {
        width: 100%;
        height: calc(100% - 40px);
        position: relative;
      }

      /* Iframe fix - ensure it fills container */
      .tradingview-widget-container iframe {
        width: 100% !important;
        height: 100% !important;
        display: block;
      }

      .tradingview-widget-copyright {
        padding: 8px 28px 10px;
        font-size: 12px;
        text-align: right;
        background: #ffffff;
        border-top: 1px solid var(--border-soft);
        letter-spacing: 0.2px;
        position: relative;
        z-index: 2;
      }

      .tradingview-widget-copyright a {
        color: var(--blue-accent);
        text-decoration: none;
        font-weight: 600;
        transition: var(--transition);
      }

      .tradingview-widget-copyright a:hover {
        color: var(--primary-dark);
        text-decoration: underline;
      }

      .trademark {
        color: var(--text-muted);
        font-weight: 450;
        margin-left: 4px;
      }

      /* ----- bottom note ----- */
      .calendar-note {
        margin-top: 36px;
        padding: 26px 32px;
        display: flex;
        align-items: flex-start;
        gap: 20px;
        background: var(--silver);
        border: 1px solid var(--border-soft);
        border-radius: var(--radius-element);
        backdrop-filter: blur(2px);
        transition: var(--transition);
      }

      .calendar-note:hover {
        border-color: rgba(160, 235, 86, 0.35);
        background: #f5faff;
      }

      .note-icon {
        width: 44px;
        height: 44px;
        flex: 0 0 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 14px;
        background: #ffffff;
        color: var(--blue-accent);
        font-size: 18px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
        border: 1px solid var(--border-soft);
      }

      .calendar-note h4 {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-main);
        margin-bottom: 5px;
        letter-spacing: -0.2px;
      }

      .calendar-note p {
        font-size: 14px;
        color: var(--text-secondary);
        line-height: 1.7;
        max-width: 800px;
        font-weight: 450;
      }

      /* ===== PREMIUM ADDITIONS ===== */

      /* Impact filter pills */
      .impact-filters {
        display: flex;
        gap: 10px;
        align-items: center;
        flex-wrap: wrap;
      }

      .impact-pill {
        padding: 4px 14px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.3px;
        background: var(--silver);
        color: var(--text-muted);
        border: 1px solid var(--border-soft);
        cursor: default;
        transition: var(--transition);
      }

      .impact-pill.high {
        background: rgba(220, 50, 50, 0.08);
        color: #b33a3a;
        border-color: rgba(220, 50, 50, 0.15);
      }

      .impact-pill.medium {
        background: rgba(212, 176, 92, 0.12);
        color: #9a7a2e;
        border-color: rgba(212, 176, 92, 0.2);
      }

      .impact-pill.low {
        background: rgba(160, 235, 86, 0.1);
        color: var(--primary-dark);
        border-color: rgba(160, 235, 86, 0.15);
      }

      .impact-pill:hover {
        transform: translateY(-1px);
        box-shadow: var(--shadow-sm);
      }

      /* Stats bar */
      .calendar-stats {
        display: flex;
        gap: 30px;
        padding: 16px 32px;
        background: #fafcff;
        border-bottom: 1px solid var(--border-soft);
        flex-wrap: wrap;
      }

      .stat-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        color: var(--text-secondary);
      }

      .stat-item i {
        color: var(--blue-accent);
        font-size: 14px;
        opacity: 0.7;
      }

      .stat-item strong {
        color: var(--text-main);
        font-weight: 700;
      }

      .stat-divider {
        width: 1px;
        height: 24px;
        background: var(--border-soft);
      }

      /* ----- responsive ----- */
      @media (max-width: 1024px) {
        .economic-wrapper {
          padding: 44px 20px 30px;
        }
        .calendar-highlights {
          gap: 16px;
        }
        .tradingview-wrapper {
          height: 580px;
        }
      }

      @media (max-width: 820px) {
        .calendar-highlights {
          grid-template-columns: 1fr 1fr;
        }
        .highlight-card:last-child {
          grid-column: span 2;
        }
        .calendar-topbar {
          flex-direction: column;
          align-items: flex-start;
          padding: 20px 24px;
        }
        .calendar-stats {
          padding: 12px 20px;
          gap: 16px;
        }
        .stat-divider {
          display: none;
        }
        .tradingview-wrapper {
          height: 520px;
        }
        .economic-header h2 {
          font-size: 42px;
        }
        .impact-filters {
          margin-top: 6px;
        }
      }

      @media (max-width: 580px) {
        .economic-wrapper {
          padding: 30px 14px 20px;
        }
        .economic-header {
          margin-bottom: 32px;
        }
        .economic-header h2 {
          font-size: 34px;
          letter-spacing: -1px;
        }
        .economic-header p {
          font-size: 15px;
        }
        .calendar-highlights {
          grid-template-columns: 1fr;
        }
        .highlight-card:last-child {
          grid-column: span 1;
        }
        .highlight-card {
          padding: 18px 22px;
        }
        .calendar-topbar {
          padding: 18px 18px;
        }
        .calendar-title h3 {
          font-size: 19px;
        }
        .calendar-title p {
          font-size: 12px;
        }
        .live-badge {
          font-size: 11px;
          padding: 6px 14px;
        }
        .tradingview-wrapper {
          height: 480px;
        }
        .calendar-stats {
          flex-direction: column;
          gap: 8px;
          padding: 12px 18px;
        }
        .calendar-note {
          flex-direction: column;
          padding: 20px;
          gap: 12px;
        }
        .note-icon {
          width: 40px;
          height: 40px;
          flex: 0 0 40px;
        }
        .calendar-note h4 {
          font-size: 15px;
        }
        .calendar-note p {
          font-size: 13px;
        }
        .tradingview-widget-copyright {
          padding: 8px 16px 10px;
          font-size: 11px;
        }
        .impact-filters {
          gap: 6px;
        }
        .impact-pill {
          font-size: 10px;
          padding: 3px 10px;
        }
      }

      @media (max-width: 420px) {
        .economic-header h2 {
          font-size: 28px;
        }
        .calendar-title-icon {
          width: 40px;
          height: 40px;
          font-size: 18px;
        }
        .highlight-icon {
          width: 44px;
          height: 44px;
          flex: 0 0 44px;
          font-size: 20px;
        }
        .tradingview-wrapper {
          height: 420px;
        }
      }

      .blue-text {
        color: #126294;
        font-weight: 600;
      }
    </style>
  </head>

  <body>
    <section class="body-Economic">
      <main class="economic-page">
        <div class="economic-wrapper">
          <!-- ===== HEADER ===== -->
          <header class="economic-header">
            <div class="eyebrow">
              <span class="dot-indicator"></span>
              <i class="fas fa-bolt" style="font-size: 10px"></i>
              Market Intelligence · Real‑time
            </div>
            <h2>Global <span>Economic Calendar</span></h2>
            <p>
              Navigate volatility with confidence. Track central bank decisions,
              employment data, inflation reports, and GDP releases — all in one
              polished, professional dashboard.
            </p>
          </header>

          <!-- ===== HIGHLIGHTS ===== -->
          <section class="calendar-highlights">
            <div class="highlight-card">
              <div class="highlight-icon"><i class="fas fa-clock"></i></div>
              <div class="highlight-content">
                <strong>Live market events</strong>
                <p>Real‑time updates from global exchanges.</p>
              </div>
            </div>
            <div class="highlight-card">
              <div class="highlight-icon"><i class="fas fa-bolt"></i></div>
              <div class="highlight-content">
                <strong>Volatility signals</strong>
                <p>Identify high‑impact releases instantly.</p>
              </div>
            </div>
            <div class="highlight-card">
              <div class="highlight-icon">
                <i class="fas fa-chart-line"></i>
              </div>
              <div class="highlight-content">
                <strong>Strategic edge</strong>
                <p>Plan entries and exits with macroeconomic clarity.</p>
              </div>
            </div>
          </section>

          <!-- ===== CALENDAR ===== -->
          <section class="calendar-section">
            <div class="calendar-topbar">
              <div class="calendar-title">
                <div class="calendar-title-icon">
                  <i class="fas fa-calendar-alt"></i>
                </div>
                <div>
                  <h3>Economic Events</h3>
                  <p>Curated releases from 20+ major economies</p>
                </div>
              </div>
              <div class="live-badge">
                <span class="live-dot"></span>
                <i
                  class="fas fa-circle"
                  style="font-size: 6px; opacity: 0.6"
                ></i>
                Live updates
              </div>
            </div>

            <!-- Stats Bar - Premium addition -->
            <div class="calendar-stats">
              <div class="stat-item">
                <i class="fas fa-globe-americas"></i>
                <span>20+ <strong>economies</strong></span>
              </div>
              <div class="stat-divider"></div>
              <div class="stat-item">
                <i class="fas fa-flag"></i>
                <span>50+ <strong>indicators</strong></span>
              </div>
              <div class="stat-divider"></div>
              <div class="stat-item">
                <i class="fas fa-exclamation-triangle"></i>
                <span><strong>High impact</strong> events highlighted</span>
              </div>
              <div class="stat-divider"></div>
              <div class="impact-filters">
                <span class="impact-pill high"
                  ><i
                    class="fas fa-circle"
                    style="font-size: 6px; margin-right: 4px"
                  ></i
                  >High</span
                >
                <span class="impact-pill medium"
                  ><i
                    class="fas fa-circle"
                    style="font-size: 6px; margin-right: 4px"
                  ></i
                  >Medium</span
                >
                <span class="impact-pill low"
                  ><i
                    class="fas fa-circle"
                    style="font-size: 6px; margin-right: 4px"
                  ></i
                  >Low</span
                >
              </div>
            </div>

            <!-- TradingView Widget - FIXED container height -->
            <div class="tradingview-wrapper">
              <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright">
                  <a
                    href="https://www.tradingview.com/economic-calendar/"
                    rel="noopener nofollow"
                    target="_blank"
                  >
                    <span class="blue-text"
                      ><i
                        class="fas fa-chart-simple"
                        style="margin-right: 4px"
                      ></i
                      >Economic Calendar</span
                    >
                  </a>
                  <span class="trademark">by TradingView</span>
                </div>
                <script
                  type="text/javascript"
                  src="https://s3.tradingview.com/external-embedding/embed-widget-events.js"
                  async
                >
                  {
                    "colorTheme": "light",
                    "isTransparent": false,
                    "locale": "en",
                    "countryFilter": "ar,au,br,ca,cn,fr,de,in,id,it,jp,kr,mx,ru,sa,za,tr,gb,us,eu",
                    "importanceFilter": "-1,0,1",
                    "width": "100%",
                    "height": "100%",
                    "widgetType": "events"
                  }
                </script>
              </div>
            </div>
          </section>

          <!-- ===== NOTE ===== -->
          <div class="calendar-note">
            <div class="note-icon"><i class="fas fa-info-circle"></i></div>
            <div>
              <h4>Why follow the economic calendar?</h4>
              <p>
                Interest rate decisions, CPI, Non‑Farm Payrolls, and GDP
                revisions can trigger sharp moves in currencies, indices, and
                commodities. Use this calendar to filter high‑importance events
                and align your trading strategy with institutional flows.
              </p>
            </div>
          </div>
        </div>
      </main>
    </section>
  </body>
</html>

<!-- ------ news----- -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Live &amp; Latest News · Edu Stockx</title>

    <!-- Google Font (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome 6 (free) – solid icons -->
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

      .body-news {
        font-family:
          "Inter",
          -apple-system,
          BlinkMacSystemFont,
          "Segoe UI",
          Roboto,
          Helvetica,
          Arial,
          sans-serif;
        background: #f2f7fe;
        color: #0b1a2e;
        line-height: 1.5;
        -webkit-font-smoothing: antialiased;
      }

      :root {
        --bg-card: #ffffff;
        --primary: #4db8ff;
        --primary-dark: #0e4b7a;
        --gold: #f5b342;
        --blue-deep: #0f4b6e;
        --blue-accent: #1a73e8;
        --silver: #eef3f9;
        --text-main: #0b1a2e;
        --text-secondary: #1f334a;
        --text-muted: #5e718b;
        --border-soft: #dce3ed;
        --shadow-sm: 0 8px 28px rgba(0, 20, 40, 0.06);
        --shadow-raised: 0 20px 48px rgba(11, 26, 46, 0.1);
        --radius-card: 24px;
        --radius-element: 16px;
        --transition: 0.25s cubic-bezier(0.2, 0, 0, 1);
      }

      .news-page {
        width: 100%;
        min-height: 100vh;
        background:
          radial-gradient(
            circle at 80% 10%,
            rgba(77, 184, 255, 0.08),
            transparent 35%
          ),
          radial-gradient(
            circle at 20% 90%,
            rgba(26, 115, 232, 0.04),
            transparent 30%
          ),
          #f2f7fe;
        padding: 0 0 60px;
      }

      .news-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 56px 28px 40px;
      }

      /* ----- header / hero ----- */
      .news-header {
        text-align: center;
        max-width: 880px;
        margin: 0 auto 52px;
      }

      .news-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 6px 18px 6px 16px;
        border-radius: 60px;
        background: rgba(77, 184, 255, 0.16);
        color: var(--primary-dark);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        margin-bottom: 20px;
        border: 1px solid rgba(77, 184, 255, 0.25);
        backdrop-filter: blur(2px);
      }

      .news-eyebrow i {
        font-size: 10px;
        color: var(--primary-dark);
        opacity: 0.9;
      }

      .news-eyebrow .live-indicator {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #ff4d4d;
        box-shadow: 0 0 0 4px rgba(255, 77, 77, 0.2);
        display: inline-block;
        animation: pulse-red 2s infinite;
      }

      @keyframes pulse-red {
        0% {
          box-shadow: 0 0 0 0 rgba(255, 77, 77, 0.4);
        }
        70% {
          box-shadow: 0 0 0 8px rgba(255, 77, 77, 0);
        }
        100% {
          box-shadow: 0 0 0 0 rgba(255, 77, 77, 0);
        }
      }

      .news-header h2 {
        font-size: 54px;
        line-height: 1.08;
        font-weight: 600;
        margin-bottom: 20px;
        letter-spacing: -1.5px;
        color: #1e1e1e;
      }

      .news-header h2 span {
        color: #ffc52f;
        background: linear-gradient(145deg, #d99f1a, #b87d0a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 700;
      }

      .news-header p {
        max-width: 780px;
        margin: 0 auto;
        color: var(--text-muted);
        font-size: 18px;
        font-weight: 450;
        line-height: 1.7;
        letter-spacing: -0.2px;
      }

      /* ----- quick highlights (news flavors) ----- */
      .news-highlights {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        margin-bottom: 44px;
      }

      .highlight-news-card {
        background: var(--bg-card);
        border: 1px solid var(--border-soft);
        border-radius: var(--radius-element);
        padding: 24px 28px;
        display: flex;
        align-items: center;
        gap: 20px;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        backdrop-filter: blur(2px);
      }

      .highlight-news-card:hover {
        transform: translateY(-5px);
        border-color: rgba(77, 184, 255, 0.5);
        box-shadow: var(--shadow-raised);
        background: #ffffff;
      }

      .highlight-news-icon {
        width: 54px;
        height: 54px;
        flex: 0 0 54px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 16px;
        background: #e2edfb;
        color: var(--blue-accent);
        font-size: 24px;
        transition: var(--transition);
      }

      .highlight-news-card:nth-child(2) .highlight-news-icon {
        background: rgba(245, 179, 66, 0.16);
        color: #b3862e;
      }

      .highlight-news-card:nth-child(3) .highlight-news-icon {
        background: rgba(77, 184, 255, 0.16);
        color: var(--primary-dark);
      }

      .highlight-news-content strong {
        display: block;
        font-size: 16px;
        font-weight: 700;
        color: var(--text-main);
        margin-bottom: 2px;
        letter-spacing: -0.2px;
      }

      .highlight-news-content p {
        font-size: 14px;
        color: var(--text-muted);
        margin: 0;
        font-weight: 450;
      }

      /* ----- main news section ----- */
      .news-section {
        background: #ffffff;
        border: 1px solid var(--border-soft);
        border-radius: var(--radius-card);
        overflow: hidden;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
      }

      .news-section:hover {
        box-shadow: var(--shadow-raised);
      }

      .news-topbar {
        padding: 22px 32px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        border-bottom: 1px solid var(--border-soft);
        background: linear-gradient(
          90deg,
          rgba(77, 184, 255, 0.06),
          rgba(26, 115, 232, 0.02),
          rgba(245, 179, 66, 0.04)
        );
      }

      .news-title {
        display: flex;
        align-items: center;
        gap: 16px;
      }

      .news-title-icon {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 14px;
        background: var(--primary-dark);
        color: #fff;
        font-size: 22px;
        box-shadow: 0 6px 14px rgba(14, 75, 122, 0.25);
      }

      .news-title h3 {
        font-size: 22px;
        font-weight: 800;
        color: var(--text-main);
        letter-spacing: -0.4px;
        margin: 0;
      }

      .news-title p {
        margin-top: 2px;
        font-size: 13px;
        color: var(--text-muted);
        font-weight: 450;
        letter-spacing: -0.1px;
      }

      .live-badge-news {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 8px 18px 8px 16px;
        border-radius: 60px;
        background: rgba(77, 184, 255, 0.15);
        color: var(--primary-dark);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.6px;
        text-transform: uppercase;
        border: 1px solid rgba(77, 184, 255, 0.25);
        backdrop-filter: blur(2px);
      }

      .live-badge-news i {
        font-size: 11px;
      }

      .live-dot-news {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: #ff4d4d;
        animation: pulse-dot-news 2s infinite;
        display: inline-block;
      }

      @keyframes pulse-dot-news {
        0% {
          box-shadow: 0 0 0 0 rgba(255, 77, 77, 0.35);
        }
        70% {
          box-shadow: 0 0 0 8px rgba(255, 77, 77, 0);
        }
        100% {
          box-shadow: 0 0 0 0 rgba(255, 77, 77, 0);
        }
      }

      /* ----- tradingview timeline wrapper (news) - FIXED ----- */
      .tradingview-news-wrapper {
        width: 100%;
        min-height: 600px;
        height: 700px;
        background: #ffffff;
        position: relative;
      }

      /* CRITICAL FIX: TradingView container must have explicit dimensions */
      .tradingview-news-container {
        width: 100%;
        height: 100%;
        position: relative;
      }

      .tradingview-news-container__widget {
        width: 100%;
        height: calc(100% - 40px);
        min-height: 550px;
      }

      /* Ensure iframe fills container */
      .tradingview-news-container iframe {
        width: 100% !important;
        height: 100% !important;
        display: block;
        border: none;
      }

      .tradingview-news-copyright {
        padding: 8px 28px 10px;
        font-size: 12px;
        text-align: right;
        background: #ffffff;
        border-top: 1px solid var(--border-soft);
        letter-spacing: 0.2px;
        position: relative;
        z-index: 2;
      }

      .tradingview-news-copyright a {
        color: var(--blue-accent);
        text-decoration: none;
        font-weight: 600;
        transition: var(--transition);
      }

      .tradingview-news-copyright a:hover {
        color: var(--primary-dark);
        text-decoration: underline;
      }

      .trademark-news {
        color: var(--text-muted);
        font-weight: 450;
        margin-left: 4px;
      }

      /* ----- bottom note (news) ----- */
      .news-note {
        margin-top: 36px;
        padding: 26px 32px;
        display: flex;
        align-items: flex-start;
        gap: 20px;
        background: var(--silver);
        border: 1px solid var(--border-soft);
        border-radius: var(--radius-element);
        backdrop-filter: blur(2px);
        transition: var(--transition);
      }

      .news-note:hover {
        border-color: rgba(77, 184, 255, 0.35);
        background: #f2f9ff;
      }

      .news-note-icon {
        width: 44px;
        height: 44px;
        flex: 0 0 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 14px;
        background: #ffffff;
        color: var(--blue-accent);
        font-size: 18px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
        border: 1px solid var(--border-soft);
      }

      .news-note h4 {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-main);
        margin-bottom: 5px;
        letter-spacing: -0.2px;
      }

      .news-note p {
        font-size: 14px;
        color: var(--text-secondary);
        line-height: 1.7;
        max-width: 800px;
        font-weight: 450;
      }

      /* ===== PREMIUM ADDITIONS ===== */

      /* Category pills */
      .category-filters {
        display: flex;
        gap: 10px;
        align-items: center;
        flex-wrap: wrap;
      }

      .category-pill {
        padding: 4px 14px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.3px;
        background: var(--silver);
        color: var(--text-muted);
        border: 1px solid var(--border-soft);
        cursor: default;
        transition: var(--transition);
      }

      .category-pill.markets {
        background: rgba(26, 115, 232, 0.08);
        color: #1a5bb5;
        border-color: rgba(26, 115, 232, 0.15);
      }

      .category-pill.economy {
        background: rgba(245, 179, 66, 0.12);
        color: #9a7a2e;
        border-color: rgba(245, 179, 66, 0.2);
      }

      .category-pill.earnings {
        background: rgba(77, 184, 255, 0.1);
        color: var(--primary-dark);
        border-color: rgba(77, 184, 255, 0.15);
      }

      .category-pill:hover {
        transform: translateY(-1px);
        box-shadow: var(--shadow-sm);
      }

      /* Stats bar */
      .news-stats {
        display: flex;
        gap: 30px;
        padding: 16px 32px;
        background: #fafcff;
        border-bottom: 1px solid var(--border-soft);
        flex-wrap: wrap;
      }

      .stat-news-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        color: var(--text-secondary);
      }

      .stat-news-item i {
        color: var(--blue-accent);
        font-size: 14px;
        opacity: 0.7;
      }

      .stat-news-item strong {
        color: var(--text-main);
        font-weight: 700;
      }

      .stat-news-divider {
        width: 1px;
        height: 24px;
        background: var(--border-soft);
      }

      /* Loading state */
      .news-loading {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        min-height: 400px;
        color: var(--text-muted);
        font-size: 16px;
        flex-direction: column;
        gap: 16px;
      }

      .news-loading i {
        font-size: 32px;
        color: var(--blue-accent);
        animation: spin 1.5s linear infinite;
      }

      @keyframes spin {
        0% {
          transform: rotate(0deg);
        }
        100% {
          transform: rotate(360deg);
        }
      }

      /* ----- responsive ----- */
      @media (max-width: 1024px) {
        .news-wrapper {
          padding: 44px 20px 30px;
        }
        .news-highlights {
          gap: 16px;
        }
        .tradingview-news-wrapper {
          height: 600px;
          min-height: 500px;
        }
      }

      @media (max-width: 820px) {
        .news-highlights {
          grid-template-columns: 1fr 1fr;
        }
        .highlight-news-card:last-child {
          grid-column: span 2;
        }
        .news-topbar {
          flex-direction: column;
          align-items: flex-start;
          padding: 20px 24px;
        }
        .news-stats {
          padding: 12px 20px;
          gap: 16px;
        }
        .stat-news-divider {
          display: none;
        }
        .tradingview-news-wrapper {
          height: 550px;
          min-height: 450px;
        }
        .news-header h2 {
          font-size: 42px;
        }
        .category-filters {
          margin-top: 6px;
        }
      }

      @media (max-width: 580px) {
        .news-wrapper {
          padding: 30px 14px 20px;
        }
        .news-header {
          margin-bottom: 32px;
        }
        .news-header h2 {
          font-size: 34px;
          letter-spacing: -1px;
        }
        .news-header p {
          font-size: 15px;
        }
        .news-highlights {
          grid-template-columns: 1fr;
        }
        .highlight-news-card:last-child {
          grid-column: span 1;
        }
        .highlight-news-card {
          padding: 18px 22px;
        }
        .news-topbar {
          padding: 18px 18px;
        }
        .news-title h3 {
          font-size: 19px;
        }
        .news-title p {
          font-size: 12px;
        }
        .live-badge-news {
          font-size: 11px;
          padding: 6px 14px;
        }
        .tradingview-news-wrapper {
          height: 480px;
          min-height: 400px;
        }
        .news-stats {
          flex-direction: column;
          gap: 8px;
          padding: 12px 18px;
        }
        .news-note {
          flex-direction: column;
          padding: 20px;
          gap: 12px;
        }
        .news-note-icon {
          width: 40px;
          height: 40px;
          flex: 0 0 40px;
        }
        .news-note h4 {
          font-size: 15px;
        }
        .news-note p {
          font-size: 13px;
        }
        .tradingview-news-copyright {
          padding: 8px 16px 10px;
          font-size: 11px;
        }
        .category-filters {
          gap: 6px;
        }
        .category-pill {
          font-size: 10px;
          padding: 3px 10px;
        }
      }

      @media (max-width: 420px) {
        .news-header h2 {
          font-size: 28px;
        }
        .news-title-icon {
          width: 40px;
          height: 40px;
          font-size: 18px;
        }
        .highlight-news-icon {
          width: 44px;
          height: 44px;
          flex: 0 0 44px;
          font-size: 20px;
        }
        .tradingview-news-wrapper {
          height: 420px;
          min-height: 350px;
        }
      }

      .blue-text-news {
        color: #1a73e8;
        font-weight: 600;
      }
    </style>
  </head>

  <body>
    <section class="body-news">
      <main class="news-page">
        <div class="news-wrapper">
          <!-- ===== HEADER ===== -->
          <header class="news-header">
            <div class="news-eyebrow">
              <span class="live-indicator"></span>
              <i class="fas fa-bolt" style="font-size: 10px"></i>
              Live Intelligence · Breaking
            </div>
            <h2>Live &amp; <span>Latest News</span></h2>
            <p>
              Stay ahead of the curve with real‑time headlines, market-moving
              stories, and in‑depth analysis — curated from global sources and
              delivered to you in a clean, professional dashboard.
            </p>
          </header>

          <!-- ===== HIGHLIGHTS (news flavors) ===== -->
          <section class="news-highlights">
            <div class="highlight-news-card">
              <div class="highlight-news-icon">
                <i class="fas fa-newspaper"></i>
              </div>
              <div class="highlight-news-content">
                <strong>Breaking headlines</strong>
                <p>Real‑time news from major financial hubs.</p>
              </div>
            </div>
            <div class="highlight-news-card">
              <div class="highlight-news-icon">
                <i class="fas fa-bullhorn"></i>
              </div>
              <div class="highlight-news-content">
                <strong>Market catalysts</strong>
                <p>Identify events that move stocks &amp; indices.</p>
              </div>
            </div>
            <div class="highlight-news-card">
              <div class="highlight-news-icon">
                <i class="fas fa-brain"></i>
              </div>
              <div class="highlight-news-content">
                <strong>Actionable insight</strong>
                <p>Navigate volatility with clarity and context.</p>
              </div>
            </div>
          </section>

          <!-- ===== NEWS WIDGET ===== -->
          <section class="news-section">
            <div class="news-topbar">
              <div class="news-title">
                <div class="news-title-icon">
                  <i class="fas fa-rss"></i>
                </div>
                <div>
                  <h3>Top Stories</h3>
                  <p>Curated from TradingView &amp; global sources</p>
                </div>
              </div>
              <div class="live-badge-news">
                <span class="live-dot-news"></span>
                <i
                  class="fas fa-circle"
                  style="font-size: 6px; opacity: 0.6"
                ></i>
                Live feed
              </div>
            </div>

            <!-- Stats Bar - Premium addition -->
            <div class="news-stats">
              <div class="stat-news-item">
                <i class="fas fa-globe-americas"></i>
                <span>20+ <strong>sources</strong></span>
              </div>
              <div class="stat-news-divider"></div>
              <div class="stat-news-item">
                <i class="fas fa-clock"></i>
                <span>24/7 <strong>coverage</strong></span>
              </div>
              <div class="stat-news-divider"></div>
              <div class="stat-news-item">
                <i class="fas fa-tag"></i>
                <span><strong>Trending</strong> topics highlighted</span>
              </div>
              <div class="stat-news-divider"></div>
              <div class="category-filters">
                <span class="category-pill markets"
                  ><i
                    class="fas fa-circle"
                    style="font-size: 6px; margin-right: 4px"
                  ></i
                  >Markets</span
                >
                <span class="category-pill economy"
                  ><i
                    class="fas fa-circle"
                    style="font-size: 6px; margin-right: 4px"
                  ></i
                  >Economy</span
                >
                <span class="category-pill earnings"
                  ><i
                    class="fas fa-circle"
                    style="font-size: 6px; margin-right: 4px"
                  ></i
                  >Earnings</span
                >
              </div>
            </div>

            <!-- TradingView Timeline Widget - FIXED IMPLEMENTATION -->
            <div class="tradingview-news-wrapper">
              <!-- Loading indicator (optional, shows while widget loads) -->
              <div class="news-loading" id="newsLoading">
                <i class="fas fa-spinner"></i>
                <span>Loading latest news...</span>
              </div>

              <!-- TradingView Container -->
              <div class="tradingview-news-container" id="tvContainer">
                <div
                  class="tradingview-news-container__widget"
                  id="tvWidget"
                ></div>
                <div class="tradingview-news-copyright">
                  <a
                    href="https://www.tradingview.com/news/top-providers/tradingview/"
                    rel="noopener nofollow"
                    target="_blank"
                  >
                    <span class="blue-text-news"
                      ><i
                        class="fas fa-chart-simple"
                        style="margin-right: 4px"
                      ></i
                      >Top stories</span
                    >
                  </a>
                  <span class="trademark-news">by TradingView</span>
                </div>
              </div>
            </div>
          </section>

          <!-- ===== NOTE ===== -->
          <div class="news-note">
            <div class="news-note-icon"><i class="fas fa-info-circle"></i></div>
            <div>
              <h4>Why follow the news feed?</h4>
              <p>
                From Fed speeches and earnings surprises to geopolitical events
                and commodity shocks — the news drives price action. Use this
                feed to filter high‑impact stories and align your trading
                strategy with real‑time information flows.
              </p>
            </div>
          </div>
        </div>
      </main>
    </section>

    <!-- TradingView Script - Placed at the end for proper loading -->
    <script type="text/javascript">
      // Hide loading indicator once widget starts loading
      document.addEventListener("DOMContentLoaded", function () {
        // Create and append the script
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src =
          "https://s3.tradingview.com/external-embedding/embed-widget-timeline.js";
        script.async = true;
        script.innerHTML = JSON.stringify({
          displayMode: "regular",
          feedMode: "all_symbols",
          colorTheme: "light",
          isTransparent: false,
          locale: "en",
          width: "100%",
          height: "100%",
        });

        // Find the widget container and append the script
        var widgetContainer = document.getElementById("tvWidget");
        if (widgetContainer) {
          widgetContainer.appendChild(script);

          // Remove loading indicator after a short delay
          setTimeout(function () {
            var loading = document.getElementById("newsLoading");
            if (loading) {
              loading.style.display = "none";
            }
          }, 2000);
        }
      });
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
