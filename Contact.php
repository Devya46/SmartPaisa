<?php include_once 'header.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us | Smart Money 24/7</title>
  </head>
  <body></body>
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
        <h1 class="edu-masterclass-hero-title">Contact Us</h1>
      </div>

      <!-- Breadcrumb -->

      <div class="edu-masterclass-breadcrumb">
        <a href="#"> Home </a>

        <span class="edu-masterclass-breadcrumb-separator"> / </span>

        <strong class="edu-masterclass-breadcrumb-current"> Contact Us </strong>
      </div>
    </section>
  </body>
</html>

<!-- ------ details------- -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, viewport-fit=cover"
    />
    <title>Smart Money · Contact</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap"
      rel="stylesheet"
    />
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

      .body-detsils {
        background: #ffffff;
        font-family: "Inter", sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        /* min-height: 100vh; */
        padding: 1.5rem 2.5rem;
      }

      .contact-full {
        width: 100%;
        max-width: 1130px;
        margin: 0 auto;
        background: #ffffff;
        padding: 1rem 0.3rem 1.5rem 0.3rem;
        text-align: center;
      }

      /* header */
      .contact-header {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        border-bottom: 1px solid #f0f2f5;
        padding-bottom: 0.9rem;
        margin-bottom: 1.8rem;
        gap: 0.3rem 1.5rem;
      }

      .brand-tag {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        background: #fcf8f0;
        padding: 0.1rem 1rem 0.1rem 0.7rem;
        border-radius: 40px;
        font-size: 0.75rem; /* bigger */
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        color: #8a7a4b;
        border-left: 2.5px solid #d4a53a;
        margin-bottom: 0.15rem;
      }
      .brand-tag i {
        color: #d4a53a;
        font-size: 0.65rem;
      }

      .header-left h1 {
        font-size: 40px;
        font-weight: 600;
        color: #0b1a26;
        letter-spacing: -0.02em;
        line-height: 1.2;
      }
      .header-left h1 span {
        color: #d4a53a;
        background: linear-gradient(145deg, #d4a53a, #b88a2c);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }

      .header-sub {
        font-size: 0.9rem; /* bigger */
        color: #5a6f80;
        font-weight: 400;
        max-width: 420px;
        /* border-left: 2px solid #d4a53a; */
        padding-left: 0.7rem;
        margin: 0.1rem auto 0;
        line-height: 1.4;
      }

      .header-right {
        font-size: 0.75rem; /* bigger */
        color: #8a9eaf;
        letter-spacing: 0.2px;
      }
      .header-right i {
        color: #d4a53a;
        margin-right: 3px;
      }

      /* grid – 3 columns */
      .options-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
        margin-top: 0.2rem;
      }

      .option-card {
        background: #fafbfc;
        border-radius: 1.4rem;
        padding: 1.3rem 1.5rem 1.6rem;
        transition: all 0.2s ease;
        border: 1px solid #edf0f4;
        box-shadow: 0 2px 6px rgba(0, 20, 30, 0.01);
        text-align: center;
      }

      .option-card:hover {
        transform: translateY(-2px);
        border-color: #d4a53a;
        box-shadow: 0 10px 22px -8px rgba(180, 140, 50, 0.08);
        background: #ffffff;
      }

      .card-icon {
        width: 46px;
        height: 46px;
        background: #fcf8f0;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 0.6rem auto;
        color: #b88a2c;
        font-size: 1.2rem;
        transition: 0.2s;
        border: 1px solid #f0e8d8;
      }
      .option-card:hover .card-icon {
        background: #d4a53a;
        color: white;
        border-color: #d4a53a;
      }
      .option-card:hover .card-icon i {
        color: white;
      }
      .card-icon i {
        color: #b88a2c;
      }

      .option-card h3 {
        font-size: 1rem; /* bigger */
        font-weight: 600;
        color: #0b1a26;
        margin-bottom: 0.1rem;
        letter-spacing: -0.01em;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.3rem;
      }
      .option-card h3 i {
        color: #d4a53a;
        font-size: 0.65rem;
        opacity: 0.5;
      }

      .option-card p {
        color: #4d6376;
        font-size: 0.85rem; /* bigger */
        line-height: 1.4;
        font-weight: 400;
        margin-top: 0.05rem;
        margin-bottom: 0.4rem;
      }

      .action-link {
        display: inline-block;
        font-weight: 600;
        font-size: 0.85rem; /* bigger */
        color: #0b1a26;
        text-decoration: none;
        border-bottom: 2px solid #d4a53a;
        padding-bottom: 1px;
        transition: 0.2s;
      }
      .action-link i {
        margin-left: 3px;
        font-size: 0.65rem;
        transition: 0.2s;
        color: #d4a53a;
      }
      .action-link:hover {
        color: #d4a53a;
      }
      .action-link:hover i {
        transform: translateX(3px);
      }

      .highlight-phone {
        font-weight: 600;
        color: #0b1a26;
        background: #fcf8f0;
        padding: 0.1rem 0.8rem;
        border-radius: 30px;
        font-size: 0.9rem; /* bigger */
        display: inline-block;
        margin-top: 0.1rem;
        border: 1px solid #eee6d6;
      }
      .highlight-phone i {
        color: #d4a53a;
        margin-right: 4px;
      }

      .btn-outline-gold {
        background: transparent;
        border: 1.5px solid #d4a53a;
        color: #0b1a26;
        padding: 0.15rem 0.9rem;
        border-radius: 40px;
        font-weight: 500;
        font-size: 0.75rem; /* bigger */
        transition: 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        cursor: default;
        letter-spacing: 0.2px;
      }
      .btn-outline-gold i {
        color: #d4a53a;
        font-size: 0.65rem;
      }
      .btn-outline-gold:hover {
        background: #d4a53a;
        color: white;
      }
      .btn-outline-gold:hover i {
        color: white;
      }

      .hours-badge {
        background: #fcf8f0;
        border-radius: 40px;
        padding: 0.1rem 0.8rem;
        display: inline-block;
        font-weight: 500;
        font-size: 0.75rem;
        color: #0b1a26;
        border: 1px solid #eee6d6;
        margin-top: 0.15rem;
      }
      .hours-badge i {
        color: #d4a53a;
        margin-right: 3px;
      }

      .business-hours-detail {
        background: #fcfaf7;
        border-radius: 0.8rem;
        padding: 0.4rem 0.8rem;
        margin-top: 0.4rem;
        border-left: 3px solid #d4a53a;
        border-right: 3px solid #d4a53a;
        display: inline-block;
        text-align: left;
      }
      .business-hours-detail p {
        font-size: 0.8rem; /* bigger */
        color: #2c4357;
        display: flex;
        align-items: center;
        gap: 0.3rem;
        flex-wrap: wrap;
        margin: 0.05rem 0;
        justify-content: center;
      }
      .business-hours-detail i {
        color: #d4a53a;
        width: 0.9rem;
        font-size: 0.75rem;
      }
      .business-hours-detail strong {
        font-weight: 600;
        color: #0b1a26;
      }

      /* after-hours card */
      .after-hours-card {
        background: #fcfaf7;
        border-radius: 1.4rem;
        padding: 0.8rem 1.5rem 1rem;
        margin-top: 1.2rem;
        border: 1px solid #edf0f4;
        display: inline-block;
        width: auto;
        max-width: 600px;
        text-align: center;
      }
      .after-hours-card i {
        color: #d4a53a;
        margin-right: 6px;
      }
      .after-hours-card strong {
        font-size: 0.9rem; /* bigger */
        color: #0b1a26;
      }
      .after-hours-card span {
        font-size: 0.85rem; /* bigger */
        color: #3a5368;
      }
      .after-hours-card .action-link {
        font-size: 0.85rem;
        margin-left: 4px;
      }

      .bottom-helper {
        margin-top: 1.6rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 0.8rem 1.5rem;
        border-top: 1px solid #f0f2f5;
        padding-top: 0.9rem;
      }

      .confidence-text {
        color: #3a5368;
        font-weight: 400;
        font-size: 0.8rem; /* bigger */
        display: flex;
        align-items: center;
        gap: 0.35rem;
      }
      .confidence-text i {
        color: #d4a53a;
        font-size: 0.85rem;
      }

      .small-note {
        color: #8a9eaf;
        font-size: 0.75rem; /* bigger */
        letter-spacing: 0.2px;
      }
      .small-note i {
        color: #d4a53a;
        margin-right: 3px;
      }

      .gold-line {
        margin-top: 0.8rem;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, #d4a53a 30%, #f0e8d8 100%);
        border-radius: 20px;
        opacity: 0.25;
      }

      /* responsive */
      @media (max-width: 900px) {
        .body-detsils {
          padding: 1rem 1.5rem;
        }
        .options-grid {
          gap: 1.2rem;
        }
      }
      @media (max-width: 760px) {
        .options-grid {
          grid-template-columns: 1fr 1fr;
        }
        .contact-header {
          flex-direction: column;
          align-items: center;
          gap: 0.3rem;
        }
        .header-right {
          text-align: center;
          width: 100%;
        }
      }
      @media (max-width: 500px) {
        .options-grid {
          grid-template-columns: 1fr;
        }
        .body-detsils {
          padding: 0.6rem;
        }
        .contact-full {
          padding: 0.5rem 0.1rem;
        }
        .header-left h1 {
          font-size: 1.6rem;
        }
        .option-card {
          padding: 1rem;
        }
      }
    </style>
  </head>
  <body>
    <section class="body-detsils">
      <div class="contact-full">
        <!-- header -->
        <div class="contact-header">
          <div class="header-left">
            <!-- <div class="brand-tag">
              <i class="fas fa-arrow-right"></i> Smart Money
            </div> -->
            <h1>Prefer to Talk to <span>Us</span> Directly?</h1>
            <div class="header-sub">Questions? Our team is ready to help.</div>
          </div>
          <!-- <div class="header-right">
          <i class="fas fa-clock"></i> Mon–Fri 9:00–18:00 IST
        </div> -->
        </div>

        <!-- 3 columns -->
        <div class="options-grid">
          <!-- Email -->
          <div class="option-card">
            <div class="card-icon"><i class="fas fa-envelope"></i></div>
            <h3>Email <i class="fas fa-chevron-right"></i></h3>
            <p>Get support from our team.</p>
            <a href="mailto:support@smartmoney.com" class="action-link">
              support@smartmoney.com <i class="fas fa-arrow-right"></i>
            </a>
            <div style="margin-top: 0.4rem">
              <span class="btn-outline-gold"
                ><i class="fas fa-reply-all"></i> 24h reply</span
              >
            </div>
          </div>

          <!-- Phone / WhatsApp -->
          <div class="option-card">
            <div class="card-icon"><i class="fas fa-phone-alt"></i></div>
            <h3>Phone / WhatsApp <i class="fas fa-chevron-right"></i></h3>
            <p>Speak directly with our team.</p>
            <div class="highlight-phone">
              <i class="fab fa-whatsapp"></i> +91 98765 43210
            </div>
            <div
              style="
                margin-top: 0.3rem;
                display: flex;
                gap: 0.4rem;
                flex-wrap: wrap;
                justify-content: center;
              "
            >
              <span
                class="btn-outline-gold"
                style="border-color: #25d366; color: #075e54"
                ><i class="fab fa-whatsapp"></i> WhatsApp</span
              >
              <span class="btn-outline-gold"
                ><i class="fas fa-phone"></i> Call</span
              >
            </div>
          </div>

          <!-- Business Hours -->
          <div class="option-card">
            <div class="card-icon"><i class="fas fa-clock"></i></div>
            <h3>Office Hours <i class="fas fa-chevron-right"></i></h3>
            <p>We're here when you need us.</p>
            <div class="business-hours-detail">
              <p>
                <i class="fas fa-calendar-day"></i> <strong>Mon – Fri</strong>
              </p>
              <p><i class="fas fa-clock"></i> 9:00 AM – 6:00 PM</p>
            </div>
            <div
              style="
                display: flex;
                gap: 0.4rem;
                flex-wrap: wrap;
                margin-top: 0.3rem;
                justify-content: center;
              "
            >
              <span class="hours-badge"><i class="fas fa-clock"></i> IST</span>
              <span
                class="btn-outline-gold"
                style="border-color: #1a3b5d; background: #f0f6ff"
                ><i class="fas fa-calendar-check"></i> Schedule</span
              >
            </div>
          </div>
        </div>

        <!-- After-hours message -->
        <div style="display: flex; justify-content: center; margin-top: 0.8rem">
          <div class="after-hours-card">
            <i class="fas fa-moon"></i>
            <strong>After-hours?</strong>
            <span>Leave a message and we’ll get back to you Soon.</span>
            <a
              href="#form-all"
              class="action-link"
              style="border-bottom: 2px solid #d4a53a; font-weight: 600"
            >
              <i class="fas fa-pen"></i> Leave a message
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- bottom -->
        <!-- <div class="bottom-helper">
        <div class="confidence-text">
          <i class="fas fa-shield-alt"></i>
          We’re here to help you move forward with confidence.
        </div>
        <div class="small-note">
          <i class="fas fa-phone-alt"></i> +91 98765 43210 ·
          <i class="fas fa-envelope"></i> support@smartmoney.com
        </div>
      </div> -->

        <div class="gold-line"></div>
      </div>
    </section>
  </body>
</html>

<!-- -----form------- -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Send Us a Message · Kirti Estates</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
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

      .body-form {
        background: white;
        font-family: "Inter", sans-serif;
        /* min-height: 100vh; */
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1.5rem;
      }

      .message-card {
        max-width: 1235px;
        width: 100%;
        background: #ffffff;
        border-radius: 2rem;
        box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: all 0.2s ease;
      }

      .grid-two {
        display: flex;
        flex-wrap: wrap;
      }

      /* left visual – full-width image */
      .visual-col {
        flex: 1.5;
        background: #f5f2ed;
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        min-height: 340px;
        overflow: hidden;
        position: relative;
      }

      .visual-col img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        position: absolute;
        top: 0;
        left: 0;
      }

      /* subtle overlay to keep text readable */
      .visual-overlay {
        position: relative;
        z-index: 2;
        padding: 2.5rem 2rem;
        background: rgba(0, 0, 0, 0.25);
        backdrop-filter: blur(2px);
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
      }

      .visual-overlay i {
        font-size: 2.8rem;
        color: #f5e7d9;
        margin-bottom: 0.8rem;
        opacity: 0.9;
      }

      .visual-overlay h3 {
        font-weight: 500;
        font-size: 1.3rem;
        letter-spacing: -0.3px;
        margin-bottom: 0.3rem;
        color: white;
      }

      .visual-overlay p {
        font-size: 0.9rem;
        max-width: 220px;
        line-height: 1.5;
        font-weight: 300;
        color: rgba(255, 255, 255, 0.9);
      }

      .visual-overlay .divider-line {
        width: 40px;
        height: 2px;
        background: #f5e7d9;
        margin: 0.8rem auto 0.5rem;
        border-radius: 4px;
      }

      /* right side – form */
      .form-col {
        flex: 1.2;
        padding: 2.4rem 2.5rem 2.8rem 2.5rem;
        background: #ffffff;
      }

      .form-col h2 {
        font-size: 1.6rem;
        font-weight: 600;
        color: #1f2c2e;
        letter-spacing: -0.4px;
        margin-bottom: 0.25rem;
      }

      .form-col .greeting {
        font-size: 0.9rem;
        color: #6f7e7a;
        margin-bottom: 1.8rem;
        border-left: 3px solid #c5850d;
        padding-left: 0.9rem;
      }

      .input-field {
        margin-bottom: 1.2rem;
        display: flex;
        flex-direction: column;
      }

      .input-field label {
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        color: #7f8d89;
        margin-bottom: 0.3rem;
      }

      .input-field input,
      .input-field select,
      .input-field textarea {
        width: 100%;
        padding: 0.7rem 1rem;
        border: 1px solid #e3ddd4;
        border-radius: 1.2rem;
        font-family: "Inter", sans-serif;
        font-size: 0.9rem;
        background: #fdfdfb;
        transition:
          border 0.2s,
          box-shadow 0.2s;
        outline: none;
        color: #1f2c2e;
      }

      .input-field input:focus,
      .input-field select:focus,
      .input-field textarea:focus {
        border-color: #c5850d;
        box-shadow: 0 0 0 3px rgba(197, 133, 13, 0.15);
        background: #ffffff;
      }

      .input-field textarea {
        resize: vertical;
        min-height: 70px;
      }

      .input-field select {
        appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="%238b7a66" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>');
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 14px;
      }

      .btn-send {
        background: #c5850d;
        border: none;
        color: white;
        padding: 0.9rem 1.8rem;
        font-weight: 600;
        border-radius: 3rem;
        width: 100%;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.6rem;
        cursor: pointer;
        transition:
          background 0.2s,
          transform 0.1s;
        margin-top: 0.3rem;
        font-family: "Inter", sans-serif;
        letter-spacing: 0.3px;
        box-shadow: 0 8px 16px -6px rgba(197, 133, 13, 0.25);
      }

      .btn-send:hover {
        background: #a5720b;
        transform: translateY(-1px);
      }

      .btn-send:active {
        transform: scale(0.97);
      }

      .footnote-light {
        margin-top: 1.2rem;
        font-size: 0.65rem;
        color: #b0a698;
        text-align: center;
        letter-spacing: 0.2px;
      }

      .footnote-light i {
        margin-right: 4px;
        color: #c5850d;
        opacity: 0.6;
      }

      /* toast */
      .toast-msg {
        position: fixed;
        bottom: 2rem;
        left: 50%;
        transform: translateX(-50%);
        background: #1f2c2e;
        color: #fef7ed;
        padding: 0.6rem 1.8rem;
        border-radius: 60px;
        font-size: 0.8rem;
        font-weight: 500;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(4px);
        transition: opacity 0.25s ease;
        pointer-events: none;
        white-space: nowrap;
        z-index: 999;
        font-family: "Inter", sans-serif;
      }

      /* responsive */
      @media (max-width: 780px) {
        .grid-two {
          flex-direction: column;
        }
        .visual-col {
          min-height: 200px;
        }
        .visual-overlay {
          padding: 2rem 1.5rem;
        }
        .form-col {
          padding: 2rem 1.5rem 2.2rem;
        }
      }

      @media (max-width: 480px) {
        .body-form {
          padding: 0.8rem;
        }
        .form-col h2 {
          font-size: 1.3rem;
        }
        .toast-msg {
          white-space: normal;
          width: 80%;
          text-align: center;
          font-size: 0.7rem;
          padding: 0.6rem 1.2rem;
        }
      }

      /* small helper */
      .req-star {
        color: #c5850d;
        margin-left: 2px;
        font-weight: 700;
      }
    </style>
  </head>
  <body>
    <section class="body-form" id="form-all">
      <div class="message-card">
        <div class="grid-two">
          <!-- left: full-width image with overlay -->
          <div class="visual-col">
            <img
              src="https://images.unsplash.com/photo-1615840287214-7ff58936c4cf?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y29udGFjdCUyMHVzfGVufDB8fDB8fHww"
              alt="Elegant contact us visual"
            />
            <div class="visual-overlay">
              <i class="far fa-envelope"></i>
              <h3>Send Us a Message</h3>
              <div class="divider-line"></div>
              <p>We’ll reply you Soon.</p>
            </div>
          </div>

          <!-- right: form -->
          <div class="form-col">
            <h2>Get in touch</h2>
            <div class="greeting">We’d love to hear from you.</div>

            <form id="messageForm">
              <!-- Full Name -->
              <div class="input-field">
                <label>Full Name <span class="req-star">*</span></label>
                <input
                  type="text"
                  id="fullName"
                  placeholder="Enter your name"
                  required
                />
              </div>

              <!-- Email -->
              <div class="input-field">
                <label>Email Address <span class="req-star">*</span></label>
                <input
                  type="email"
                  id="email"
                  placeholder="Enter your email address"
                  required
                />
              </div>

              <!-- Phone -->
              <div class="input-field">
                <label>Phone Number</label>
                <input
                  type="tel"
                  id="phone"
                  placeholder="Enter your contact number"
                />
              </div>

              <!-- Subject dropdown -->
              <div class="input-field">
                <label>Subject</label>
                <select id="subject">
                  <option value="">Select an inquiry type</option>
                  <option value="General">General</option>

                  <option value="Course">Course</option>
                  <option value="Career">Career</option>
                  <option value="Media">Media</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              <!-- Message -->
              <div class="input-field">
                <label>Your Message</label>
                <textarea
                  id="message"
                  rows="2"
                  placeholder="Tell us how we can help you…"
                ></textarea>
              </div>

              <button type="submit" class="btn-send">
                <i class="fas fa-paper-plane"></i> Send Message
              </button>
              <div class="footnote-light">
                <i class="fas fa-lock"></i> Your information is safe with us.
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Toast -->
    <div id="toastMsg" class="toast-msg" style="opacity: 0; visibility: hidden">
      ✨
    </div>

    <script>
      // ----------------------------------------------------------------
      // 1. Replace with your Apps Script URL (for production)
      //    (or keep as is – will use localStorage backup automatically)
      // ----------------------------------------------------------------
      const GOOGLE_SHEET_API_URL = "#";
      // ↑ replace with your own Apps Script Web App URL

      // ---------- helpers ----------
      function showToast(msg, isError = false) {
        const toast = document.getElementById("toastMsg");
        toast.style.backgroundColor = isError ? "#b27a5a" : "#1f2c2e";
        toast.style.color = "#fffcf5";
        toast.textContent = msg;
        toast.style.opacity = "1";
        toast.style.visibility = "visible";
        clearTimeout(toast._timer);
        toast._timer = setTimeout(() => {
          toast.style.opacity = "0";
          setTimeout(() => {
            toast.style.visibility = "hidden";
          }, 300);
        }, 3800);
      }

      function storeBackup(data) {
        try {
          const existing = JSON.parse(
            localStorage.getItem("msg_leads") || "[]",
          );
          existing.push(data);
          localStorage.setItem("msg_leads", JSON.stringify(existing));
        } catch (_) {
          /* ignore */
        }
      }

      // ---------- form handler ----------
      const form = document.getElementById("messageForm");
      form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const fullName = document.getElementById("fullName").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const subject = document.getElementById("subject").value;
        const message = document.getElementById("message").value.trim();

        // simple validation
        if (!fullName) {
          showToast("Please enter your full name.", true);
          return;
        }
        if (!email || !/^\S+@\S+\.\S+$/.test(email)) {
          showToast("Please provide a valid email address.", true);
          return;
        }

        const payload = {
          fullName,
          email,
          phone: phone || "—",
          subject: subject || "Not selected",
          message: message || "No message",
          timestamp: new Date().toISOString(),
        };

        const btn = form.querySelector(".btn-send");
        const originalText = btn.innerHTML;
        btn.innerHTML = '<i class="fas fa-spinner fa-pulse"></i> Sending…';
        btn.disabled = true;

        const isLive =
          GOOGLE_SHEET_API_URL &&
          GOOGLE_SHEET_API_URL.includes("script.google.com") &&
          !GOOGLE_SHEET_API_URL.includes("dummyReplaceWithYourOwn");

        try {
          if (isLive) {
            await fetch(GOOGLE_SHEET_API_URL, {
              method: "POST",
              mode: "no-cors",
              headers: { "Content-Type": "application/json" },
              body: JSON.stringify(payload),
            });
            storeBackup(payload);
            showToast("✓ Message sent! We’ll get back to you shortly.");
            form.reset();
          } else {
            // demo mode – local backup
            storeBackup(payload);
            showToast(
              "✨ Demo: message saved locally. (Set API URL for production.)",
            );
            form.reset();
          }
        } catch (_) {
          storeBackup(payload);
          showToast(
            "Note: request saved locally. Our team will reach out.",
            true,
          );
        } finally {
          btn.innerHTML = originalText;
          btn.disabled = false;
        }
      });

      // ---------- extra polish ----------
      // phone – digits only (optional)
      document.getElementById("phone").addEventListener("input", function () {
        this.value = this.value.replace(/\D/g, "");
      });

      console.log(
        "💬 Simple message form ready. Replace GOOGLE_SHEET_API_URL for live sheet logging.",
      );
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
