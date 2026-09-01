<?php include_once 'header.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Smart Money 24/7</title>
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
        <h1 class="edu-masterclass-hero-title">About US</h1>
      </div>

      <!-- Breadcrumb -->

      <div class="edu-masterclass-breadcrumb">
        <a href="#"> Home </a>

        <span class="edu-masterclass-breadcrumb-separator"> / </span>

        <strong class="edu-masterclass-breadcrumb-current"> About Us </strong>
      </div>
    </section>
  </body>
</html>

<!-- ------ her0----- -->
<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Built for Serious Traders</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
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

      body {
        background: #ffffff;
        font-family: "Inter", sans-serif;
        color: #0b1a33;
        overflow-x: hidden;
      }

      .about {
        padding: 80px 24px 70px;
        max-width: 1280px;
        margin: auto;
      }

      /* ----- text base (hidden until animated) ----- */
      .sub,
      .title,
      .desc {
        opacity: 0;
        transform: translateY(30px);
        transition:
          opacity 0.9s cubic-bezier(0.2, 0.9, 0.3, 1),
          transform 0.9s cubic-bezier(0.2, 0.9, 0.3, 1);
        will-change: transform, opacity;
      }

      .sub {
        color: #4a5a7a;
        font-size: 16px;
        text-align: center;
        margin-bottom: 12px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
      }

      .title {
        font-size: clamp(38px, 6.5vw, 68px);
        font-weight: 800;
        text-align: center;
        line-height: 1.1;
        margin-bottom: 14px;
        background: linear-gradient(145deg, #0b1a33 20%, #f5a623 75%);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        letter-spacing: -0.02em;
      }

      .desc {
        text-align: center;
        color: #3d4e6b;
        font-size: 19px;
        font-weight: 400;
        margin-bottom: 56px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
      }

      /* ----- hero image (hidden until animated) ----- */
      .hero {
        position: relative;
        overflow: hidden;
        border-radius: 28px;
        border: 1px solid rgba(0, 0, 0, 0.04);
        box-shadow:
          0 24px 64px rgba(0, 0, 0, 0.02),
          0 4px 12px rgba(0, 0, 0, 0.02);
        transition:
          box-shadow 0.5s ease,
          transform 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1);
        opacity: 0;
        transform: translateY(50px) scale(0.98);
        will-change: transform, opacity;
        background: #f8faff;
      }

      .hero.visible {
        opacity: 1;
        transform: translateY(0) scale(1);
      }

      .hero:hover {
        box-shadow:
          0 40px 80px rgba(0, 20, 40, 0.06),
          0 8px 24px rgba(0, 0, 0, 0.02);
      }

      .hero img {
        width: 100%;
        display: block;
        height: 600px;
        object-fit: cover;
        transition: transform 0.9s cubic-bezier(0.2, 0.9, 0.3, 1.1);
      }

      .hero:hover img {
        transform: scale(1.01);
      }

      .glow {
        position: absolute;
        inset: 0;
        background: radial-gradient(
          circle at 70% 20%,
          rgba(245, 166, 35, 0.08),
          transparent 55%
        );
        pointer-events: none;
        transition: opacity 0.6s;
        opacity: 0.6;
      }

      .hero:hover .glow {
        opacity: 0.9;
      }

      /* ----- stats cards (hidden until animated) ----- */
      .stats {
        margin-top: 24px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
      }

      .cardss {
        height: 156px;
        background: #ffffff;
        border: 1px solid rgba(0, 0, 0, 0.04);
        border-radius: 24px;
        position: relative;
        display: flex;
        padding: 28px 24px;
        justify-content: space-between;
        align-items: flex-end;
        transition:
          transform 0.45s cubic-bezier(0.2, 0.9, 0.3, 1.1),
          border-color 0.3s,
          box-shadow 0.45s ease;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.01);
        opacity: 0;
        transform: translateY(40px);
        will-change: transform, opacity;
        overflow: hidden;
        cursor: default;
      }

      .cardss::before {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(
          circle at bottom right,
          rgba(245, 166, 35, 0.04) 0%,
          transparent 70%
        );
        filter: blur(40px);
        transform: translateY(30%);
        pointer-events: none;
      }

      .cardss.visible {
        opacity: 1;
        transform: translateY(0);
      }

      .cardss:hover {
        border-color: rgba(0, 0, 0, 0.08);
        box-shadow:
          0 20px 48px rgba(0, 0, 0, 0.02),
          0 8px 16px rgba(0, 0, 0, 0.01);
        transform: translateY(-4px);
      }

      .cardss:active {
        transform: scale(0.97);
        transition-duration: 0.08s;
      }

      .top {
        position: absolute;
        top: 24px;
        left: 24px;
        display: flex;
        flex-direction: column;
        gap: 6px;
        z-index: 2;
      }

      .label {
        font-size: 15px;
        color: #2a3a5a;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
        letter-spacing: 0.3px;
      }

      .label i {
        font-size: 18px;
        color: #f5a623;
        width: 24px;
        text-align: center;
        transition: transform 0.25s ease;
      }

      .number {
        font-size: 52px;
        font-weight: 800;
        line-height: 1;
        letter-spacing: -0.03em;
        background: linear-gradient(135deg, #0b1a33, #4a6a9a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }

      .cardss img {
        position: absolute;
        right: 0;
        bottom: 0;
        height: 100%;
        width: auto;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.2, 0.9, 0.3, 1.1);
        opacity: 0.75;
        filter: drop-shadow(0 0 16px rgba(0, 0, 0, 0.02));
        z-index: 0;
      }

      .cardss:hover img {
        transform: scale(1.02) rotate(-1deg);
      }

      /* ----- responsive ----- */
      @media (max-width: 1024px) {
        .hero img {
          height: 480px;
        }
        .cardss {
          height: 160px;
          padding: 22px 18px;
        }
        .number {
          font-size: 44px;
        }
      }

      @media (max-width: 768px) {
        .about {
          padding: 70px 18px 40px;
        }
        .hero img {
          height: 340px;
        }
        .stats {
          grid-template-columns: 1fr;
          gap: 14px;
        }
        .cardss {
          height: 150px;
          padding: 20px 18px;
        }
        .number {
          font-size: 38px;
        }
        .label {
          font-size: 14px;
        }
        .cardss img {
          height: 80%;
          right: 2px;
          bottom: 2px;
        }
      }

      @media (max-width: 480px) {
        .about {
          padding: 60px 14px 30px;
        }
        .title {
          font-size: 30px;
        }
        .desc {
          font-size: 15px;
          margin-bottom: 32px;
        }
        .hero img {
          height: 220px;
        }
        .cardss {
          height: 130px;
          padding: 16px;
        }
        .number {
          font-size: 32px;
        }
        .top {
          top: 14px;
          left: 16px;
        }
        .label {
          font-size: 13px;
          gap: 6px;
        }
        .label i {
          font-size: 15px;
          width: 20px;
        }
        .cardss img {
          height: 75%;
        }
      }
    </style>
  </head>
  <body>
    <section class="about">
      <div class="sub">
        <i class="fas fa-flag" style="margin-right: 8px; opacity: 0.8"></i>
        Smart Money 24/7
      </div>
      <h1 class="title">We are Here for you</h1>
      <div class="desc">
        <i
          class="fas fa-chart-line"
          style="margin-right: 10px; opacity: 0.6"
        ></i>
        Making trading accessible through a simulated environment
      </div>

      <div class="hero">
        <div class="glow"></div>
        <img
          src="https://images.unsplash.com/photo-1563461660947-507ef49e9c47?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzJ8fHRlYW18ZW58MHx8MHx8fDA%3D"
          alt="Trading dashboard"
          loading="lazy"
        />
      </div>

      <div class="stats">
        <div class="cardss">
          <div class="top">
            <div class="label"><i class="fas fa-calendar-alt"></i> Since</div>
            <div class="number">2021</div>
          </div>
          <img
            src="https://images.unsplash.com/photo-1529310399831-ed472b81d589?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHBuZ3xlbnwwfHwwfHx8MA%3D%3D"
            alt="team"
            loading="lazy"
          />
        </div>

        <div class="cardss">
          <div class="top">
            <div class="label"><i class="fas fa-users"></i> Team Members</div>
            <div class="number">100+</div>
          </div>
          <img
            src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=300&q=80&auto=format&fit=crop&crop=center"
            alt="team"
            loading="lazy"
          />
        </div>

        <div class="cardss">
          <div class="top">
            <div class="label">
              <i class="fas fa-globe-americas"></i> Countries Served
            </div>
            <div class="number">13+</div>
          </div>
          <img
            src="https://images.unsplash.com/photo-1526470608268-f674ce90ebd4?w=300&q=80&auto=format&fit=crop&crop=center"
            alt="world"
            loading="lazy"
          />
        </div>
      </div>
    </section>

    <script>
      (function () {
        const sub = document.querySelector(".sub");
        const title = document.querySelector(".title");
        const desc = document.querySelector(".desc");
        const hero = document.querySelector(".hero");
        const cardsss = document.querySelectorAll(".cardss");
        const section = document.querySelector(".about");

        function resetElements() {
          [sub, title, desc].forEach((el) => {
            el.style.opacity = "0";
            el.style.transform = "translateY(30px)";
          });
          hero.classList.remove("visible");
          hero.style.opacity = "0";
          hero.style.transform = "translateY(50px) scale(0.98)";
          cardsss.forEach((cardss) => {
            cardss.classList.remove("visible");
            cardss.style.opacity = "0";
            cardss.style.transform = "translateY(40px)";
          });
        }

        function animateAll() {
          setTimeout(() => {
            sub.style.opacity = "1";
            sub.style.transform = "translateY(0)";
          }, 60);
          setTimeout(() => {
            title.style.opacity = "1";
            title.style.transform = "translateY(0)";
          }, 160);
          setTimeout(() => {
            desc.style.opacity = "1";
            desc.style.transform = "translateY(0)";
          }, 260);

          setTimeout(() => {
            hero.classList.add("visible");
            hero.style.opacity = "1";
            hero.style.transform = "translateY(0) scale(1)";
          }, 360);

          cardsss.forEach((cardss, index) => {
            setTimeout(
              () => {
                cardss.classList.add("visible");
                cardss.style.opacity = "1";
                cardss.style.transform = "translateY(0)";
              },
              460 + index * 140,
            );
          });
        }

        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                resetElements();
                animateAll();
              }
            });
          },
          {
            threshold: 0.12,
            rootMargin: "0px 0px -30px 0px",
          },
        );

        observer.observe(section);

        document.querySelectorAll(".cardss").forEach((cardss) => {
          cardss.addEventListener("mouseenter", function () {
            const icon = this.querySelector(".label i");
            if (icon) icon.style.transform = "scale(1.2) rotate(2deg)";
          });
          cardss.addEventListener("mouseleave", function () {
            const icon = this.querySelector(".label i");
            if (icon) icon.style.transform = "scale(1) rotate(0deg)";
          });
        });

        setTimeout(() => {
          const rect = section.getBoundingClientRect();
          const winHeight =
            window.innerHeight || document.documentElement.clientHeight;
          if (rect.top < winHeight - 80 && rect.bottom > 0) {
            resetElements();
            animateAll();
          }
        }, 300);
      })();
    </script>
  </body>
</html> -->

<!-- ---- about--- -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Money Systems | Who We Are</title>
    <!-- Premium Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <style>
      /* ---------- ROOT ---------- */
      :root {
        --navy: #07152d;
        --gold: #d99a00;
        --gold-light: #f2c14e;
        --gold-dark: #a96f00;
        --text: #172033;
        --border: #e8ebf0;
        --container: 1280px;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      /* body {
        background: #f8faff;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding: 20px;
      } */

      /* ---------- SECTION (full width, compact) ---------- */
      .who-section {
        position: relative;
        overflow: hidden;
        padding: 80px 90px 65px;
        background: white;
        /* border-radius: 32px; */
        /* box-shadow: 0 20px 60px rgba(7, 21, 45, 0.06); */
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        font-family: "DM Sans", sans-serif;
      }

      .who-container {
        width: 100%;
        max-width: var(--container);
        margin: auto;
      }

      /* ---------- MAIN GRID ---------- */
      .who-main {
        display: grid;
        grid-template-columns: 0.65fr 1.45fr;
        align-items: center;
        gap: 28px;
      }

      /* ---------- LEFT SIDE (heading + image stacked, no overlap) ---------- */
      .who-left {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 12px;
      }

      .mini-line {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 2px;
      }
      .mini-line span:first-child {
        width: 48px;
        height: 3px;
        border-radius: 50px;
        background: linear-gradient(90deg, var(--gold-dark), var(--gold-light));
      }
      .mini-dots {
        display: flex;
        gap: 5px;
      }
      .mini-dots span {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--gold);
      }

      .who-title {
        font-family: "Manrope", sans-serif;
        font-size: clamp(42px, 4.4vw, 62px);
        line-height: 0.98;
        letter-spacing: -2.5px;
        font-weight: 800;
        color: var(--navy);
      }
      .who-title span {
        background: linear-gradient(120deg, #8e5b00, #e2a900, #ffc928);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
      }

      .who-tagline {
        font-size: 15px;
        font-weight: 600;
        color: #667085;
        letter-spacing: 0.2px;
        margin-top: -2px;
      }

      /* ---------- CHART IMAGE (stacked below heading, natural) ---------- */
      .chart-visual {
        width: 100%;
        max-width: 420px;
        pointer-events: none;
        user-select: none;
        filter: drop-shadow(0 12px 28px rgba(217, 154, 0, 0.08));
        margin-top: 4px;
      }
      .chart-visual img {
        width: 100%;
        display: block;
      }

      /* ---------- RIGHT CONTENT (compact) ---------- */
      .who-right {
        padding-top: 0;
      }

      .intro-text {
        font-size: 17px;
        line-height: 1.6;
        color: #182235;
        margin-bottom: 8px;
      }
      .intro-text strong {
        font-family: "Manrope", sans-serif;
        font-weight: 800;
        color: var(--navy);
      }
      .intro-text .highlight {
        color: var(--gold-dark);
        font-weight: 700;
      }

      .responsible-text {
        font-size: 16px;
        line-height: 1.6;
        color: #384152;
        max-width: 820px;
        margin-bottom: 16px;
      }

      /* ---------- VALUE STRIP ---------- */
      .value-strip {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        border: 1px solid #ead9ad;
        background: linear-gradient(110deg, #fffaf0, #fffdf8);
        border-radius: 14px;
        padding: 10px 16px;
        margin-bottom: 16px;
        box-shadow: 0 6px 20px rgba(20, 30, 50, 0.03);
        width: 100%;
      }
      .value-item {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 4px 10px;
        position: relative;
      }
      .value-item:not(:last-child)::after {
        content: "";
        position: absolute;
        right: 0;
        width: 1px;
        height: 30px;
        background: #dfc98d;
      }
      .value-icon {
        width: 32px;
        height: 32px;
        flex: 0 0 32px;
        border-radius: 50%;
        display: grid;
        place-items: center;
        color: var(--gold-dark);
        font-size: 14px;
      }
      .value-content strong {
        display: block;
        font-family: "Manrope", sans-serif;
        color: var(--navy);
        font-size: 13px;
        font-weight: 800;
      }
      .value-content span {
        display: block;
        margin-top: 1px;
        color: #777f8e;
        font-size: 11px;
      }

      /* ---------- PHILOSOPHY ---------- */
      .philosophy-label {
        display: flex;
        align-items: center;
        gap: 12px;
        font-family: "Manrope", sans-serif;
        font-size: 15px;
        font-weight: 800;
        color: var(--navy);
        margin-bottom: 6px;
      }
      .philosophy-label::before {
        content: "";
        width: 4px;
        height: 20px;
        border-radius: 10px;
        background: linear-gradient(
          180deg,
          var(--gold-light),
          var(--gold-dark)
        );
      }

      .philosophy-box {
        position: relative;
        padding: 14px 24px 14px 28px;
        border: 1px solid #ebd59f;
        border-radius: 14px;
        background: linear-gradient(110deg, #fffdf8, #fff8e9);
        overflow: hidden;
        box-shadow: 0 8px 24px rgba(20, 30, 50, 0.04);
        width: 100%;
      }
      .philosophy-box::before {
        content: "";
        position: absolute;
        top: -40px;
        right: -30px;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: rgba(217, 154, 0, 0.05);
      }
      .quote-icon {
        position: absolute;
        top: 8px;
        left: 10px;
        font-size: 30px;
        line-height: 1;
        color: var(--gold);
        opacity: 0.5;
      }
      .philosophy-text {
        position: relative;
        z-index: 1;
        padding-left: 24px;
        font-family: cursive;
        font-size: clamp(16px, 1.5vw, 21px);
        line-height: 1.4;
        font-weight: 500;
        font-style: italic;
        color: var(--gold-dark);
      }

      /* ---------- FEATURE STRIP (full width, no cards) ---------- */
      .feature-strip {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
        margin-top: 28px;
        width: 100%;
      }
      .feature-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 16px;
        border: 1px solid var(--border);
        border-radius: 14px;
        background: #ffffff;
        transition:
          transform 0.25s ease,
          box-shadow 0.25s ease,
          border-color 0.25s ease;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
      }
      .feature-item:hover {
        transform: translateY(-3px);
        border-color: #e3c879;
        box-shadow:
          0 10px 28px rgba(7, 21, 45, 0.06),
          0 4px 12px rgba(217, 154, 0, 0.04);
      }

      .feature-icon {
        width: 40px;
        height: 40px;
        flex: 0 0 40px;
        display: grid;
        place-items: center;
        border-radius: 50%;
        color: #f4b817;
        background: var(--navy);
        font-size: 16px;
        box-shadow:
          inset 0 0 0 1px rgba(255, 193, 62, 0.2),
          0 5px 16px rgba(7, 21, 45, 0.08);
        transition: transform 0.25s ease;
      }
      .feature-item:hover .feature-icon {
        transform: scale(1.04) rotate(-2deg);
      }

      .feature-content h3 {
        font-family: "Manrope", sans-serif;
        color: var(--navy);
        font-size: 13px;
        font-weight: 800;
        margin-bottom: 2px;
        letter-spacing: 0.3px;
      }
      .feature-content p {
        color: #727b8b;
        font-size: 12px;
        line-height: 1.4;
      }

      /* ---------- ANIMATION ---------- */
      .animate-item {
        opacity: 0;
        transform: translateY(16px);
        transition:
          opacity 0.6s ease,
          transform 0.6s ease;
      }
      .animate-item.show {
        opacity: 1;
        transform: translateY(0);
      }

      /* ---------- RESPONSIVE ---------- */
      @media (max-width: 1100px) {
        .who-section {
          padding: 24px 24px 24px;
        }
        .who-main {
          grid-template-columns: 0.8fr 1.2fr;
          gap: 24px;
        }
        .chart-visual {
          max-width: 320px;
        }
        .intro-text {
          font-size: 16px;
        }
        .responsible-text {
          font-size: 15px;
        }
        .feature-strip {
          grid-template-columns: repeat(2, 1fr);
        }
        .value-strip {
          padding: 8px 12px;
        }
      }

      @media (max-width: 800px) {
        .who-section {
          padding: 20px 16px 20px;
          border-radius: 24px;
        }
        .who-main {
          grid-template-columns: 1fr;
          gap: 16px;
        }
        .who-left {
          gap: 8px;
        }
        .chart-visual {
          max-width: 300px;
          margin-top: 4px;
        }
        .who-title {
          font-size: clamp(38px, 12vw, 54px);
        }
        .who-right {
          padding-top: 0;
        }
        .value-strip {
          grid-template-columns: 1fr;
          gap: 4px;
        }
        .value-item {
          justify-content: flex-start;
          padding: 6px 8px;
        }
        .value-item:not(:last-child)::after {
          display: none;
        }
        .feature-strip {
          grid-template-columns: 1fr 1fr;
          margin-top: 22px;
          gap: 10px;
        }
        .intro-text {
          font-size: 15px;
          margin-bottom: 6px;
        }
        .responsible-text {
          font-size: 14px;
          margin-bottom: 12px;
        }
        .philosophy-box {
          padding: 12px 16px 12px 22px;
        }
        .philosophy-text {
          font-size: 15px;
          padding-left: 18px;
        }
      }

      @media (max-width: 520px) {
        .who-section {
          padding: 16px 12px 16px;
          border-radius: 20px;
        }
        .who-title {
          font-size: 34px;
          letter-spacing: -1.5px;
        }
        .who-tagline {
          font-size: 13px;
        }
        .intro-text {
          font-size: 14px;
          line-height: 1.6;
        }
        .responsible-text {
          font-size: 13px;
        }
        .value-strip {
          padding: 6px 8px;
        }
        .value-content strong {
          font-size: 12px;
        }
        .value-content span {
          font-size: 10px;
        }
        .feature-strip {
          grid-template-columns: 1fr;
          gap: 8px;
          margin-top: 18px;
        }
        .feature-item {
          padding: 10px 14px;
        }
        .feature-icon {
          width: 36px;
          height: 36px;
          flex: 0 0 36px;
          font-size: 14px;
        }
        .feature-content h3 {
          font-size: 11px;
        }
        .feature-content p {
          font-size: 11px;
        }
        .philosophy-text {
          font-size: 14px;
          padding-left: 14px;
        }
        .quote-icon {
          font-size: 24px;
          top: 6px;
          left: 6px;
        }
        .chart-visual {
          max-width: 220px;
        }
      }
    </style>
  </head>

  <body>
    <section class="who-section">
      <div class="who-container">
        <div class="who-main">
          <!-- ===== LEFT: heading stacked with image (nothing overlapping) ===== -->
          <div class="who-left animate-item">
            <div class="mini-line">
              <span></span>
              <div class="mini-dots">
                <span></span><span></span><span></span>
              </div>
            </div>
            <h2 class="who-title">Who <span>We Are</span></h2>
            <p class="who-tagline">Learn. Take Action. Get Rewarded.</p>
            <!-- Image sits below heading, natural stack -->
            <div class="chart-visual">
              <img
                src="Photos/abt-1.png"
                alt="Smart Money Systems growth illustration"
              />
            </div>
          </div>

          <!-- ===== RIGHT ===== -->
          <div class="who-right">
            <div class="intro-text animate-item">
              <strong>Learn Smart. Trade Responsibly.</strong>
              Smart Money Systems is a financial education platform helping
              Filipinos build practical knowledge in
              <span class="highlight"
                >financial literacy, Forex, Gold trading, MetaTrader, and risk
                management.</span
              >
            </div>

            <div class="intro-text animate-item">
              We make learning
              <span class="highlight"
                >simple, practical, and beginner-friendly</span
              >
              — so you can learn, take action, and make smarter financial
              decisions.
            </div>

            <!-- VALUE STRIP -->
            <div class="value-strip animate-item">
              <div class="value-item">
                <div class="value-icon">
                  <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div class="value-content">
                  <strong>Simple Learning</strong>
                  <span>Easy to Understand</span>
                </div>
              </div>
              <div class="value-item">
                <div class="value-icon">
                  <i class="fa-solid fa-bullseye"></i>
                </div>
                <div class="value-content">
                  <strong>Practical Approach</strong>
                  <span>Learn by Doing</span>
                </div>
              </div>
              <div class="value-item">
                <div class="value-icon">
                  <i class="fa-solid fa-shield-halved"></i>
                </div>
                <div class="value-content">
                  <strong>Responsible Trading</strong>
                  <span>Trade with Awareness</span>
                </div>
              </div>
            </div>

            <p class="responsible-text animate-item">
              We don't promise shortcuts or guaranteed profits. We focus on
              <strong>education, preparation, discipline,</strong> and
              responsible decision-making.
            </p>

            <!-- PHILOSOPHY -->
            <div class="philosophy-label animate-item">Our Philosophy</div>
            <div class="philosophy-box animate-item">
              <!-- <div class="quote-icon">
                <i class="fa-solid fa-quote-left"></i>
              </div> -->
              <div class="philosophy-text">
                "Building Smarter Money Decisions Through Practical Financial
                Education"
              </div>
            </div>
          </div>
        </div>

        <!-- ===== FEATURE STRIP (full width) ===== -->
        <div class="feature-strip">
          <div class="feature-item animate-item">
            <div class="feature-icon">
              <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <div class="feature-content">
              <h3>EDUCATION FIRST</h3>
              <p>Knowledge is the foundation of every smart decision.</p>
            </div>
          </div>
          <div class="feature-item animate-item">
            <div class="feature-icon">
              <i class="fa-solid fa-shield-halved"></i>
            </div>
            <div class="feature-content">
              <h3>RISK AWARE</h3>
              <p>We teach how to manage risk and protect what matters.</p>
            </div>
          </div>
          <div class="feature-item animate-item">
            <div class="feature-icon"><i class="fa-solid fa-brain"></i></div>
            <div class="feature-content">
              <h3>DISCIPLINE DRIVEN</h3>
              <p>Build the mindset for long-term consistency and success.</p>
            </div>
          </div>
          <div class="feature-item animate-item">
            <div class="feature-icon">
              <i class="fa-solid fa-chart-line"></i>
            </div>
            <div class="feature-content">
              <h3>PRACTICAL APPROACH</h3>
              <p>Real-world learning through tasks and hands-on activities.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      /* =========================================
         SCROLL REVEAL
      ========================================= */
      const animatedItems = document.querySelectorAll(".animate-item");
      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add("show");
              observer.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.12 },
      );

      animatedItems.forEach((item, index) => {
        item.style.transitionDelay = `${Math.min(index * 0.05, 0.3)}s`;
        observer.observe(item);
      });
    </script>
  </body>
</html>

<!-- -----appproch----- -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Approach · professional</title>

    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />

    <!-- Google Fonts: Manrope + Playfair Display for heading accent -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      .body-approch {
        background: #ffffff;
        font-family: "Manrope", sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        /* min-height: 100vh; */
        padding: 24px 16px;
      }

      /* ---- main card: dark blue, professional, compact ---- */
      .approach-section {
        position: relative;
        width: 100%;
        max-width: 1320px;
        background:
          radial-gradient(
            circle at 50% 30%,
            rgba(22, 52, 100, 0.4),
            transparent 55%
          ),
          linear-gradient(145deg, #010b1e 0%, #0a1d3f 60%, #020d24 100%);
        color: #ffffff;
        border-radius: 36px 36px 28px 28px;
        border-bottom: 4px solid #d8a92f;
        padding: 34px 44px 50px;
        isolation: isolate;
        box-shadow:
          0 28px 56px -16px rgba(0, 0, 0, 0.7),
          0 0 0 1px rgba(216, 169, 47, 0.1) inset;
        transition: box-shadow 0.2s;
      }

      .approach-section:hover {
        box-shadow:
          0 36px 72px -18px rgba(0, 0, 0, 0.8),
          0 0 0 1px rgba(216, 169, 47, 0.2) inset;
      }

      /* ---- label: smaller, refined ---- */
      .approach-label {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 16px;
        margin-bottom: 18px;
        color: #f0bd3f;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 2.4px;
        text-transform: uppercase;
      }

      .approach-label::before,
      .approach-label::after {
        content: "";
        width: 120px;
        height: 1.5px;
        background: linear-gradient(90deg, transparent, #d9a82e);
        border-radius: 2px;
      }
      .approach-label::after {
        background: linear-gradient(90deg, #d9a82e, transparent);
      }

      .approach-label span {
        position: relative;
        padding: 0 6px;
      }
      /* .approach-label span::before {
        content: "";
        position: absolute;
        width: 8px;
        height: 8px;
        background: #dcae36;
        transform: rotate(45deg);
        left: 50%;
        bottom: -20px;
        translate: -50% 0;
        border-radius: 2px;
        box-shadow: 0 0 10px #f7c64d66;
      } */

      /* ---- heading: playfair for elegance, but smaller ---- */
      .approach-heading {
        position: relative;
        z-index: 5;
        text-align: center;
        font-family: "Manrope", sans-serif;
        font-size: clamp(26px, 3.8vw, 40px);
        line-height: 1.1;
        font-weight: 600;
        margin: 0 auto;
        max-width: 960px;
      }

      .heading-gold {
        display: block;
        color: #f0bb3d;
        text-shadow: 0 4px 16px rgba(218, 165, 40, 0.15);
        letter-spacing: -0.2px;
      }
      .heading-white {
        display: block;
        color: #ffffff;
        margin-top: 2px;
        letter-spacing: -0.1px;
      }

      /* ---- center line: gold, glow, compact ---- */
      .center-line {
        position: relative;
        width: 400px;
        max-width: 58%;
        height: 2px;
        margin: 20px auto 22px;
        background: linear-gradient(
          90deg,
          transparent,
          #c79629 20%,
          #ffffff 50%,
          #c79629 80%,
          transparent
        );
        border-radius: 4px;
        transition: box-shadow 0.3s;
      }

      .center-line::after {
        content: "";
        position: absolute;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #ffd96b;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        box-shadow:
          0 0 14px #f7c64d,
          0 0 32px rgba(247, 198, 77, 0.4);
        transition: box-shadow 0.4s;
      }
      .center-line.glow::after {
        box-shadow:
          0 0 24px #f7c64d,
          0 0 56px rgba(247, 198, 77, 0.7);
      }

      /* ---- description: smaller, cleaner ---- */
      .approach-description {
        position: relative;
        z-index: 5;
        max-width: 680px;
        margin: 0 auto;
        text-align: center;
        color: #eef2f9;
        font-size: 18px;
        line-height: 1.5;
        font-weight: 400;
        letter-spacing: 0.1px;
      }

      /* ---- waves: subtle, less opacity ---- */
      .wave {
        position: absolute;
        width: 340px;
        height: 180px;
        opacity: 0.18;
        pointer-events: none;
        z-index: 1;
      }
      .wave-left {
        left: -70px;
        top: 190px;
        transform: rotate(7deg);
      }
      .wave-right {
        right: -70px;
        top: 190px;
        transform: scaleX(-1) rotate(7deg);
      }

      .wave span {
        position: absolute;
        width: 100%;
        height: 1.5px;
        left: 0;
        background: linear-gradient(
          90deg,
          transparent,
          rgba(214, 165, 45, 0.5),
          rgba(214, 165, 45, 0.1),
          transparent
        );
        border-radius: 50%;
      }
      .wave span:nth-child(1) {
        top: 14px;
        transform: rotate(6deg);
      }
      .wave span:nth-child(2) {
        top: 26px;
        transform: rotate(5deg);
      }
      .wave span:nth-child(3) {
        top: 38px;
        transform: rotate(4deg);
      }
      .wave span:nth-child(4) {
        top: 50px;
        transform: rotate(3deg);
      }
      .wave span:nth-child(5) {
        top: 62px;
        transform: rotate(2deg);
      }
      .wave span:nth-child(6) {
        top: 74px;
        transform: rotate(1deg);
      }
      .wave span:nth-child(7) {
        top: 86px;
        transform: rotate(0deg);
      }

      /* ---- process wrapper: tighter margin ---- */
      .process-wrapper {
        position: relative;
        z-index: 5;
        max-width: 1100px;
        margin: 40px auto 0;
      }

      .process-grid {
        display: grid;
        grid-template-columns: 1fr 60px 1fr 60px 1fr 60px 1fr;
        align-items: start;
        gap: 0;
      }

      /* ---- card: professional, minimal ---- */
      .process-card {
        text-align: center;
        transition:
          transform 0.25s ease,
          filter 0.25s ease;
      }
      .process-card:hover {
        transform: translateY(-4px);
        filter: drop-shadow(0 10px 20px rgba(227, 179, 54, 0.1));
      }

      /* icon circle – smaller, clean */
      .icon-circle {
        position: relative;
        width: 104px;
        height: 104px;
        margin: 0 auto 12px;
        border-radius: 50%;
        border: 2px solid #e8b83f;
        background: radial-gradient(
          circle,
          rgba(230, 181, 58, 0.06),
          rgba(0, 0, 0, 0.02)
        );
        display: flex;
        align-items: center;
        justify-content: center;
        color: #efbb40;
        font-size: 40px;
        box-shadow:
          inset 0 0 16px rgba(228, 179, 56, 0.03),
          0 0 16px rgba(213, 165, 44, 0.02);
        transition: 0.3s ease;
      }
      .process-card:hover .icon-circle {
        transform: scale(1.03);
        box-shadow:
          0 0 24px rgba(227, 179, 54, 0.15),
          inset 0 0 20px rgba(227, 179, 54, 0.05);
        border-color: #f0c44a;
      }

      /* gold mark – smaller */
      .icon-mark {
        position: relative;
        width: 48px;
        height: 2px;
        background: #e8b83f;
        margin: 0 auto 10px;
        border-radius: 4px;
      }
      .icon-mark::before {
        content: "";
        position: absolute;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #f5c64e;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        box-shadow: 0 0 8px #f5c64e88;
      }

      /* title + text: Manrope, smaller, crisp */
      .process-title {
        font-family: "Manrope", sans-serif;
        font-size: 20px;
        font-weight: 700;
        color: #edbb40;
        line-height: 1.2;
        margin-bottom: 4px;
        letter-spacing: -0.2px;
      }
      .process-text {
        max-width: 240px;
        margin: auto;
        font-size: 15px;
        line-height: 1.5;
        color: #eef2f9;
        font-weight: 400;
      }

      /* ---- arrow: more subtle, shorter ---- */
      .arrow-ap {
        position: relative;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .arrow-ap-line {
        position: relative;
        width: 100%;
        height: 2px;
        background: linear-gradient(
          90deg,
          transparent,
          #dba936 18%,
          #f3c44c 60%,
          transparent
        );
        border-radius: 4px;
        box-shadow: 0 0 10px rgba(231, 181, 56, 0.3);
      }
      .arrow-ap-line::after {
        content: "";
        position: absolute;
        right: 0;
        top: 50%;
        width: 12px;
        height: 12px;
        border-top: 3px solid #f0bf43;
        border-right: 3px solid #f0bf43;
        transform: translateY(-50%) rotate(45deg);
        filter: drop-shadow(0 0 6px rgba(240, 191, 67, 0.6));
        border-radius: 2px;
      }

      /* ---- bottom notch: refined ---- */
      /* .approach-section::after {
        content: "";
        position: absolute;
        z-index: 10;
        left: 50%;
        bottom: -30px;
        width: 60px;
        height: 60px;
        background: #ffffff;
        transform: translateX(-50%) rotate(45deg);
        border-right: 4px solid #d8a92f;
        border-bottom: 4px solid #d8a92f;
        border-radius: 0 0 18px 0;
        box-shadow: 0 4px 12px -4px rgba(0, 0, 0, 0.15);
      } */

      /* ---- responsive: keep it professional ---- */
      @media (max-width: 1200px) {
        .approach-section {
          padding: 28px 28px 44px;
        }
        .process-grid {
          grid-template-columns: 1fr 44px 1fr 44px 1fr 44px 1fr;
        }
        .icon-circle {
          width: 94px;
          height: 94px;
          font-size: 34px;
        }
        .process-title {
          font-size: 18px;
        }
        .process-text {
          font-size: 14px;
        }
        .approach-description {
          font-size: 17px;
        }
        .arrow-ap {
          height: 90px;
        }
      }

      @media (max-width: 900px) {
        .approach-section {
          border-radius: 28px 28px 22px 22px;
          padding: 24px 18px 48px;
        }
        .approach-label {
          font-size: 14px;
          gap: 10px;
        }
        .approach-label::before,
        .approach-label::after {
          width: 60px;
        }
        .approach-heading {
          font-size: clamp(30px, 5.5vw, 46px);
        }
        .approach-description {
          font-size: 16px;
          max-width: 520px;
        }
        .process-grid {
          grid-template-columns: 1fr 1fr;
          row-gap: 40px;
        }
        .arrow-ap {
          display: none;
        }
        .process-card {
          padding: 0 6px;
        }
        .wave {
          opacity: 0.12;
          width: 200px;
        }
        .wave-left {
          left: -30px;
        }
        .wave-right {
          right: -30px;
        }
      }

      @media (max-width: 600px) {
        .approach-section {
          padding: 20px 12px 42px;
          border-radius: 22px 22px 18px 18px;
        }
        .approach-label {
          font-size: 12px;
          gap: 6px;
          letter-spacing: 1px;
        }
        .approach-label::before,
        .approach-label::after {
          width: 24px;
        }
        .approach-label span::before {
          width: 6px;
          height: 6px;
          bottom: -16px;
        }
        .approach-heading {
          font-size: 26px;
          line-height: 1.2;
        }
        .heading-white {
          margin-top: 2px;
        }
        .center-line {
          max-width: 75%;
          margin: 16px auto;
        }
        .approach-description {
          font-size: 14px;
          line-height: 1.6;
        }
        .process-wrapper {
          margin-top: 28px;
        }
        .process-grid {
          grid-template-columns: 1fr;
          row-gap: 34px;
        }
        .icon-circle {
          width: 90px;
          height: 90px;
          font-size: 34px;
        }
        .process-title {
          font-size: 18px;
        }
        .process-text {
          font-size: 14px;
          max-width: 240px;
        }
        .wave {
          display: none;
        }
        .approach-section::after {
          width: 42px;
          height: 42px;
          bottom: -21px;
          border-width: 3px;
        }
      }
    </style>
  </head>
  <body>
    <div class="body-approch" id="Approcessh">
      <section class="approach-section">
        <!-- waves (very subtle) -->
        <div class="wave wave-left">
          <span></span><span></span><span></span><span></span> <span></span
          ><span></span><span></span>
        </div>
        <div class="wave wave-right">
          <span></span><span></span><span></span><span></span> <span></span
          ><span></span><span></span>
        </div>

        <!-- label -->
        <div class="approach-label">
          <span>Our Approach</span>
        </div>

        <!-- heading -->
        <h2 class="approach-heading">
          <span class="heading-gold">We Don’t Teach Shortcuts.</span>
          <span class="heading-white">We Teach the Right Process.</span>
        </h2>

        <!-- center gold line -->
        <div class="center-line"></div>

        <!-- description -->
        <p class="approach-description">
          Our approach is built on a strong foundation that helps you learn with
          clarity, grow with consistency, and act with responsibility.
        </p>

        <!-- process grid -->
        <div class="process-wrapper">
          <div class="process-grid">
            <!-- 1 -->
            <div class="process-card">
              <div class="icon-circle">
                <i class="fa-solid fa-book-open"></i>
              </div>
              <div class="icon-mark"></div>
              <h3 class="process-title">Knowledge</h3>
              <p class="process-text">
                Build a strong understanding of the core concepts.
              </p>
            </div>

            <div class="arrow-ap"><div class="arrow-ap-line"></div></div>

            <!-- 2 -->
            <div class="process-card">
              <div class="icon-circle">
                <i class="fa-solid fa-clipboard-check"></i>
              </div>
              <div class="icon-mark"></div>
              <h3 class="process-title">Preparation</h3>
              <p class="process-text">
                Prepare yourself with the right tools, strategies, and mindset.
              </p>
            </div>

            <div class="arrow-ap"><div class="arrow-ap-line"></div></div>

            <!-- 3 -->
            <div class="process-card">
              <div class="icon-circle">
                <i class="fa-solid fa-bullseye"></i>
              </div>
              <div class="icon-mark"></div>
              <h3 class="process-title">Discipline</h3>
              <p class="process-text">
                Stay consistent, follow your plan, and manage risk with
                discipline.
              </p>
            </div>

            <div class="arrow-ap"><div class="arrow-ap-line"></div></div>

            <!-- 4 -->
            <div class="process-card">
              <div class="icon-circle">
                <i class="fa-solid fa-shield-halved"></i>
              </div>
              <div class="icon-mark"></div>
              <h3 class="process-title">Responsible Action</h3>
              <p class="process-text">
                Make informed decisions and take responsible action.
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script>
      (function () {
        // scroll reveal for cards
        const cards = document.querySelectorAll(".process-card");
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0)";
                observer.unobserve(entry.target);
              }
            });
          },
          { threshold: 0.2 },
        );

        cards.forEach((card, i) => {
          card.style.opacity = "0";
          card.style.transform = "translateY(20px)";
          card.style.transition = `opacity 0.5s cubic-bezier(0.2, 0.9, 0.3, 1) ${i * 0.07}s, transform 0.5s cubic-bezier(0.2, 0.9, 0.3, 1) ${i * 0.07}s`;
          observer.observe(card);
        });

        // glow toggle on center line
        const centerLine = document.querySelector(".center-line");
        let glow = false;
        setInterval(() => {
          glow = !glow;
          centerLine.classList.toggle("glow", glow);
        }, 1900);
      })();
    </script>
  </body>
</html>

<!-- ------ founder----- -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Money Systems · Team</title>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />

    <!-- Google Font: Manrope -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      .body-founder {
        font-family: "Manrope", sans-serif;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        /* min-height: 100vh; */
        padding: 2rem 1.5rem;
      }

      .team-section {
        max-width: 1320px;
        width: 100%;
        /* background: #ffffff; */
        /* border-radius: 2.2rem; */
        padding: 2.8rem 3.2rem 3.5rem;
        box-shadow: 0 20px 50px -14px rgba(15, 26, 47, 0.08);
        position: relative;
        overflow: hidden;
        transition: all 0.2s;
      }

      /* subtle warm overlay */
      .team-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
          radial-gradient(
            circle at 10% 20%,
            rgba(212, 175, 55, 0.015),
            transparent 55%
          ),
          radial-gradient(
            circle at 90% 80%,
            rgba(212, 175, 55, 0.015),
            transparent 50%
          );
        pointer-events: none;
      }

      /* ---- top ornament ---- */
      .section-top {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1.6rem;
        margin-bottom: 1.4rem;
        position: relative;
        z-index: 2;
      }

      .top-line {
        width: 120px;
        height: 2px;
        background: linear-gradient(90deg, transparent, #c9a13b);
      }
      .top-line.right {
        background: linear-gradient(90deg, #c9a13b, transparent);
      }

      .top-icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #f7f0e4;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #b58b2b;
        font-size: 22px;
        box-shadow: 0 4px 10px rgba(181, 139, 43, 0.06);
      }

      .section-kicker {
        text-align: center;
        font-size: 0.85rem;
        font-weight: 600;
        letter-spacing: 2.8px;
        text-transform: uppercase;
        color: #8f7a4e;
        margin-bottom: 0.4rem;
        position: relative;
        z-index: 2;
      }

      .main-heading {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 0.8rem;
        font-size: 53px;
        font-weight: 800;
        line-height: 1.06;
        letter-spacing: -2px;
        color: #0f1a2f;
        position: relative;
        z-index: 2;
      }

      .main-heading .gold {
        display: block;
        color: #b78a2b;
        font-weight: 700;
        margin-top: 0.1rem;
        letter-spacing: -1px;
      }

      /* ---- team grid (vertical) ---- */
      .team-container {
        position: relative;
        z-index: 3;
        margin: 2rem auto 0;
        display: flex;
        flex-direction: row;
        gap: 1.8rem;
        max-width: 1210px;
        justify-content: center;
      }

      .team-card {
        background: #ffffff;
        border-radius: 1.6rem;
        padding: 1.8rem 2.2rem 1.8rem 2.2rem;
        display: flex;
        align-items: center;
        gap: 2.2rem;
        border: 1px solid #ede7dc;
        box-shadow: 0 6px 20px -6px rgba(15, 26, 47, 0.03);
        transition:
          transform 0.2s ease,
          box-shadow 0.25s ease,
          border-color 0.2s;
        position: relative;
        backdrop-filter: blur(2px);
      }

      .team-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 38px -12px rgba(15, 26, 47, 0.07);
        border-color: #dccdb6;
      }

      /* card layout: first card image left, second card image right */
      .team-card:nth-child(1) {
        flex-direction: row;
      }
      .team-card:nth-child(2) {
        flex-direction: row-reverse;
      }

      /* profile image — bigger */
      .profile-image {
        flex-shrink: 0;
        width: 260px;
        height: 300px;
        border-radius: 16%;
        border: 3px solid #dbb067;
        overflow: hidden;
        background: #f3ede4;
        box-shadow: 0 6px 16px -6px rgba(0, 0, 0, 0.03);
        transition: border-color 0.3s;
      }

      .team-card:hover .profile-image {
        border-color: #b78a2b;
      }

      .profile-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
      }

      .team-info {
        flex: 1;
        align-self: center;
      }

      .role {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 1.8px;
        text-transform: uppercase;
        color: #b78a2b;
        background: #f6f0e5;
        padding: 0.25rem 1.2rem 0.25rem 0.9rem;
        border-radius: 40px;
        margin-bottom: 0.7rem;
        border: 1px solid #ede3d2;
      }

      .role-icon {
        font-size: 0.8rem;
        color: #b78a2b;
      }

      .team-name {
        font-size: 1.6rem;
        font-weight: 700;
        color: #0f1a2f;
        letter-spacing: -0.4px;
        line-height: 1.15;
        margin-bottom: 0.3rem;
      }

      .small-line {
        width: 40px;
        height: 3px;
        background: #dbb067;
        border-radius: 6px;
        margin-bottom: 0.7rem;
      }

      .team-description {
        color: #1f2b3f;
        font-size: 0.95rem;
        line-height: 1.6;
        font-weight: 400;
        max-width: 340px;
      }

      .team-description .highlight {
        font-weight: 600;
        color: #b78a2b;
      }

      /* decorative chart (lighter) */
      .card-chart {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 180px;
        height: 80px;
        opacity: 0.06;
        pointer-events: none;
      }
      .candle {
        position: absolute;
        bottom: 14px;
        width: 8px;
        background: #b78a2b;
        opacity: 0.4;
        border-radius: 2px 2px 0 0;
      }
      .candle::before {
        content: "";
        position: absolute;
        left: 3px;
        bottom: 100%;
        width: 2px;
        height: 18px;
        background: #b78a2b;
      }
      .candle:nth-child(1) {
        left: 10px;
        height: 20px;
      }
      .candle:nth-child(2) {
        left: 32px;
        height: 38px;
      }
      .candle:nth-child(3) {
        left: 54px;
        height: 26px;
      }
      .candle:nth-child(4) {
        left: 76px;
        height: 48px;
      }
      .candle:nth-child(5) {
        left: 98px;
        height: 32px;
      }
      .candle:nth-child(6) {
        left: 120px;
        height: 56px;
      }
      .candle:nth-child(7) {
        left: 142px;
        height: 42px;
      }
      .candle:nth-child(8) {
        left: 164px;
        height: 62px;
      }

      /* bottom line (card) */
      .bottom-line {
        position: absolute;
        left: 2.2rem;
        bottom: 1.4rem;
        width: 34px;
        height: 2px;
        background: linear-gradient(90deg, #dbb067, transparent);
        opacity: 0.4;
      }

      /* ---- divider (kept but subtle) ---- */
      .center-divider {
        position: absolute;
        top: 50%;
        left: 51.5%;
        width: 1px;
        height: 140px;
        transform: translate(-50%, -50%);
        background: linear-gradient(
          180deg,
          transparent,
          #e5d8c0 20%,
          #e5d8c0 80%,
          transparent
        );
        z-index: 6;
        opacity: 0.5;
      }
      .center-diamond {
        position: absolute;
        left: 51.5%;
        top: 50%;
        width: 12px;
        height: 12px;
        background: #dbb067;
        transform: translate(-50%, -50%) rotate(45deg);
        z-index: 7;
        box-shadow:
          0 0 0 8px #ffffff,
          0 4px 12px rgba(0, 0, 0, 0.02);
        border-radius: 2px;
      }

      /* ---- commitment (smaller, tighter) ---- */
      .commitment {
        position: relative;
        z-index: 5;
        max-width: 920px;
        margin: 2.6rem auto 0;
        text-align: center;
        background: #fcf9f4;
        padding: 1.6rem 2rem 1.8rem;
        border-radius: 2rem;
        border: 1px solid #ede3d2;
      }

      .commitment-top {
        display: flex;
        align-items: center;
        gap: 1.6rem;
        margin-bottom: 0.8rem;
      }

      .commitment-line {
        flex: 1;
        height: 1px;
        background: linear-gradient(
          90deg,
          transparent,
          #dbb067 40%,
          #dbb067 60%,
          transparent
        );
      }

      .handshake {
        flex-shrink: 0;
        width: 62px;
        height: 62px;
        border-radius: 50%;
        border: 2px solid #dbb067;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #b78a2b;
        font-size: 26px;
        background: #ffffff;
        box-shadow: 0 4px 14px -6px rgba(183, 138, 43, 0.06);
      }

      .commitment-text {
        font-size: 1.25rem;
        line-height: 1.5;
        font-weight: 500;
        color: #0f1a2f;
        letter-spacing: -0.2px;
      }

      .commitment-text strong {
        color: #b78a2b;
        font-weight: 700;
      }

      /* decorative waves (more subtle) */
      .waves {
        position: absolute;
        left: -2%;
        bottom: -6px;
        width: 104%;
        height: 120px;
        pointer-events: none;
        opacity: 0.1;
        z-index: 0;
      }
      .waves.right {
        transform: scaleX(-1);
        bottom: -2px;
        opacity: 0.06;
      }
      .wave-line {
        position: absolute;
        left: 0;
        width: 38%;
        height: 60px;
        border-top: 1px solid #b78a2b;
        border-radius: 50%;
        transform-origin: left center;
      }
      .wave-line:nth-child(1) {
        top: 30px;
        transform: rotate(4deg);
      }
      .wave-line:nth-child(2) {
        top: 36px;
        transform: rotate(5deg);
      }
      .wave-line:nth-child(3) {
        top: 42px;
        transform: rotate(6deg);
      }
      .wave-line:nth-child(4) {
        top: 48px;
        transform: rotate(7deg);
      }
      .wave-line:nth-child(5) {
        top: 54px;
        transform: rotate(8deg);
      }
      .wave-line:nth-child(6) {
        top: 60px;
        transform: rotate(9deg);
      }
      .wave-line:nth-child(7) {
        top: 66px;
        transform: rotate(10deg);
      }
      .wave-line:nth-child(8) {
        top: 72px;
        transform: rotate(11deg);
      }
      .wave-line:nth-child(9) {
        top: 78px;
        transform: rotate(12deg);
      }

      /* ---- responsive ---- */
      @media (max-width: 1024px) {
        .team-section {
          padding: 2.2rem 2rem 2.8rem;
        }
        .profile-image {
          width: 170px;
          height: 170px;
        }
        .team-name {
          font-size: 1.4rem;
        }
        .team-description {
          font-size: 0.9rem;
        }
      }

      @media (max-width: 820px) {
        .team-card {
          flex-direction: column !important;
          text-align: center;
          padding: 1.8rem 1.5rem;
        }
        .team-card:nth-child(1) {
          flex-direction: column !important;
        }
        .team-card:nth-child(2) {
          flex-direction: column !important;
        }
        .profile-image {
          width: 180px;
          height: 180px;
          margin: 0 auto;
        }
        .team-info {
          width: 100%;
        }
        .role {
          justify-content: center;
        }
        .small-line {
          margin: 0 auto 0.8rem;
        }
        .team-description {
          max-width: 100%;
        }
        .bottom-line {
          display: none;
        }
        .card-chart {
          opacity: 0.03;
        }
        .center-divider,
        .center-diamond {
          display: none;
        }
        .commitment {
          padding: 1.4rem 1.2rem;
        }
        .commitment-text {
          font-size: 1.05rem;
        }
        .main-heading {
          font-size: clamp(2rem, 5vw, 2.8rem);
        }
      }

      @media (max-width: 500px) {
        .team-section {
          padding: 1.6rem 1rem 2rem;
          border-radius: 1.6rem;
        }
        .section-top {
          gap: 0.8rem;
        }
        .top-line {
          width: 40px;
        }
        .top-icon {
          width: 38px;
          height: 38px;
          font-size: 16px;
        }
        .section-kicker {
          font-size: 0.65rem;
          letter-spacing: 1.6px;
        }
        .main-heading {
          font-size: 1.7rem;
        }
        .profile-image {
          width: 140px;
          height: 140px;
        }
        .team-name {
          font-size: 1.2rem;
        }
        .team-description {
          font-size: 0.8rem;
        }
        .handshake {
          width: 50px;
          height: 50px;
          font-size: 20px;
        }
        .commitment-text {
          font-size: 0.95rem;
        }
        .waves {
          display: none;
        }
      }

      /* reveal animation */
      .team-card,
      .commitment {
        opacity: 0;
        transform: translateY(16px);
        transition:
          opacity 0.6s ease,
          transform 0.6s ease;
      }
      .team-card.show,
      .commitment.show {
        opacity: 1;
        transform: translateY(0);
      }
    </style>
  </head>
  <body>
    <div class="body-founder">
      <section class="team-section">
        <!-- top -->
        <div class="section-top">
          <div class="top-line"></div>
          <div class="top-icon"><i class="fa-solid fa-users"></i></div>
          <div class="top-line right"></div>
        </div>

        <div class="section-kicker">
          Meet the people behind Smart Money Systems
        </div>

        <h1 class="main-heading">
          Built by People Who Believe
          <span class="gold">in Financial Education</span>
        </h1>

        <!-- team cards (vertical) -->
        <div class="team-container">
          <!-- Founder – image left, content right -->
          <article class="team-card">
            <div class="profile-image">
              <img src="founder-left.png" alt="Founder" />
            </div>
            <div class="team-info">
              <div class="role">
                <span class="role-icon"><i class="fa-solid fa-user"></i></span>
                FOUNDER
              </div>
              <h2 class="team-name">Mr. Alexander Uy</h2>
              <div class="small-line"></div>
              <p class="team-description">
                <span class="highlight">Founder</span><br />
                Forex Trading Automation Coach<br />
                Financial Education Advocate
              </p>
            </div>
            <div class="card-chart">
              <span class="candle"></span><span class="candle"></span>
              <span class="candle"></span><span class="candle"></span>
              <span class="candle"></span><span class="candle"></span>
              <span class="candle"></span><span class="candle"></span>
            </div>
            <div class="bottom-line"></div>
          </article>

          <!-- Co-Founder – image right, content left -->
          <article class="team-card">
            <div class="profile-image">
              <img src="cofounder-right.png" alt="Co-Founder" />
            </div>
            <div class="team-info">
              <div class="role">
                <span class="role-icon"><i class="fa-solid fa-user"></i></span>
                CO-FOUNDER
              </div>
              <h2 class="team-name">
                Chester Angelo <br />
                Marino
              </h2>
              <div class="small-line"></div>
              <p class="team-description">
                <span class="highlight">Co-Founder</span><br />
                Trading Mentor<br />
                Financial Literacy Advocate
              </p>
            </div>
            <div class="card-chart">
              <span class="candle"></span><span class="candle"></span>
              <span class="candle"></span><span class="candle"></span>
              <span class="candle"></span><span class="candle"></span>
              <span class="candle"></span><span class="candle"></span>
            </div>
          </article>
        </div>

        <!-- divider (kept for premium feel) -->
        <div class="center-divider"></div>
        <div class="center-diamond"></div>

        <!-- commitment -->
        <div class="commitment">
          <div class="commitment-top">
            <div class="commitment-line"></div>
            <div class="handshake"><i class="fa-solid fa-handshake"></i></div>
            <div class="commitment-line"></div>
          </div>
          <p class="commitment-text">
            Together, they are committed to making
            <br />
            <strong>practical financial education</strong>
            more accessible to Filipinos.
          </p>
        </div>

        <!-- waves -->
        <div class="waves">
          <span class="wave-line"></span><span class="wave-line"></span>
          <span class="wave-line"></span><span class="wave-line"></span>
          <span class="wave-line"></span><span class="wave-line"></span>
          <span class="wave-line"></span><span class="wave-line"></span>
          <span class="wave-line"></span>
        </div>
        <div class="waves right">
          <span class="wave-line"></span><span class="wave-line"></span>
          <span class="wave-line"></span><span class="wave-line"></span>
          <span class="wave-line"></span><span class="wave-line"></span>
          <span class="wave-line"></span><span class="wave-line"></span>
          <span class="wave-line"></span>
        </div>
      </section>
    </div>

    <script>
      (function () {
        const elements = document.querySelectorAll(".team-card, .commitment");
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                entry.target.classList.add("show");
                observer.unobserve(entry.target);
              }
            });
          },
          { threshold: 0.18 },
        );

        elements.forEach((el) => observer.observe(el));

        window.addEventListener("load", () => {
          elements.forEach((el) => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight * 0.85) {
              el.classList.add("show");
            }
          });
        });
      })();
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
