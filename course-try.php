

<?php
// ============================================================
// HOME PAGE - PUBLIC COURSE SHOWCASE
// ============================================================

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/config/functions.php';

$pdo = getDB();


// ============================================================
// GET ALL PUBLISHED COURSES
// ============================================================

$courses = [];

try {

    $stmt = $pdo->prepare("
        SELECT
            c.id,
            c.title,
            c.heading,
            c.level,
            c.thumbnail,
            c.description,
            c.status,
            c.mentor_name,
            c.mentor_image,
            c.created_at,

            (
                SELECT COUNT(*)
                FROM lessons l
                INNER JOIN modules m ON l.module_id = m.id
                WHERE m.course_id = c.id
                AND l.status = 'published'
            ) AS total_lessons

        FROM courses c

        WHERE c.status = 'published'

        ORDER BY c.created_at DESC
    ");

    $stmt->execute();

    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (Throwable $e) {

    $courses = [];

}


// ============================================================
// HELPER - COURSE IMAGE
// ============================================================

function getCourseImage($thumbnail)
{
    if (!empty($thumbnail)) {

        $thumbnail = basename($thumbnail);

        $path = __DIR__ . '/uploads/thumbnails/' . $thumbnail;

        if (file_exists($path)) {
            return 'uploads/thumbnails/' . rawurlencode($thumbnail);
        }
    }

    // Default image
    $default = __DIR__ . '/images/default-course.jpg';

    if (file_exists($default)) {
        return 'images/default-course.jpg';
    }

    return '';
}


// ============================================================
// HELPER - SHORT DESCRIPTION
// ============================================================

function shortCourseDescription($text, $length = 115)
{
    $text = trim(strip_tags($text));

    if ($text === '') {
        return '';
    }

    if (function_exists('mb_strimwidth')) {
        return mb_strimwidth($text, 0, $length, '...');
    }

    return strlen($text) > $length
        ? substr($text, 0, $length) . '...'
        : $text;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Explore Courses</title>

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <style>

        /* =====================================================
           RESET
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        html {
            scroll-behavior: smooth;
        }


        body {
            margin: 0;
            background: #050505;
            color: #ffffff;
            font-family:
                Arial,
                Helvetica,
                sans-serif;
        }


        a {
            text-decoration: none;
        }


        


        /* =====================================================
           COURSES SECTION
        ===================================================== */

        .courses-section {
            width: 100%;
            background:
                radial-gradient(
                    circle at 50% 0%,
                    rgba(245,196,0,0.045),
                    transparent 38%
                ),
                #050505;

            padding: 75px 20px 110px;
        }


        .courses-container {
            width: 100%;
            max-width: 1250px;
            margin: 0 auto;
        }


        /* =====================================================
           SECTION HEADING
        ===================================================== */

        .courses-heading {
            text-align: center;
            margin-bottom: 58px;
                margin-top: 31px;
        }


        .courses-eyebrow {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;

            color: #f5c400;

            font-size: 17px;
            font-weight: 700;

            margin-bottom: 18px;
        }


        .courses-eyebrow i {
            font-size: 15px;
        }


        .courses-heading h1 {
            color: #ffffff;

            font-size: 68px;
            line-height: 1.05;

            font-weight: 500;

            letter-spacing: -2.5px;

            margin: 0;
        }


        .courses-heading p {
            max-width: 680px;

            margin: 20px auto 0;

            color: #858585;

            font-size: 16px;
            line-height: 1.6;
        }


        /* =====================================================
           COURSE GRID
        ===================================================== */

        .courses-grid {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 24px;
        }


        /* =====================================================
           COURSE CARD
        ===================================================== */

        .course-card {
            position: relative;

            background: #101010;

            border: 1px solid #292929;

            border-radius: 11px;

            overflow: hidden;

            min-width: 0;

            transition:
                transform 0.25s ease,
                border-color 0.25s ease,
                box-shadow 0.25s ease;
        }


        .course-card:hover {
            transform: translateY(-5px);

            border-color: #414141;

            box-shadow:
                0 15px 45px rgba(0,0,0,0.35);
        }


        /* =====================================================
           COURSE IMAGE
        ===================================================== */

        .course-image {
            position: relative;

            width: 100%;

            height: 190px;

            overflow: hidden;

            background: #171717;
        }


        .course-image img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            display: block;

            transition:
                transform 0.4s ease;
        }


        .course-card:hover .course-image img {
            transform: scale(1.045);
        }


        .course-image::after {
            content: "";

            position: absolute;

            inset: 0;

            background:
                linear-gradient(
                    to bottom,
                    rgba(0,0,0,0.03),
                    rgba(0,0,0,0.28)
                );

            pointer-events: none;
        }


        /* =====================================================
           BADGES
        ===================================================== */

        .course-badge {
            position: absolute;

            top: 15px;
            right: 15px;

            z-index: 3;

            padding: 10px 16px;

            border-radius: 5px;

            font-size: 13px;

            font-weight: 800;

            letter-spacing: 0.3px;
        }


        .course-badge.new {
            background: #08a86b;
            color: #ffffff;
        }


        .course-badge.special {
            background: #e5b923;
            color: #000000;
        }


        /* =====================================================
           COURSE CONTENT
        ===================================================== */

        .course-content {
            padding: 25px 25px 22px;
        }


        .course-category {
            color: #a1a1a1;

            font-size: 14px;

            font-weight: 600;

            margin-bottom: 14px;
        }


        .course-title {
            color: #ffffff;

            font-size: 20px;

            font-weight: 700;

            line-height: 1.38;

            min-height: 56px;

            margin: 0;
        }


        .course-description {
            color: #8b8b8b;

            font-size: 14px;

            line-height: 1.5;

            margin-top: 11px;

            min-height: 42px;
        }


        /* =====================================================
           DIVIDER
        ===================================================== */

        .course-divider {
            width: 100%;

            height: 1px;

            background: #303030;

            margin: 21px 0 19px;
        }


        /* =====================================================
           COURSE BOTTOM
        ===================================================== */

        .course-bottom {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 12px;
        }


        .course-meta {
            display: flex;

            align-items: center;

            gap: 14px;

            flex-wrap: wrap;
        }


        .course-meta-item {
            display: inline-flex;

            align-items: center;

            gap: 6px;

            color: #b0b0b0;

            font-size: 13px;

            white-space: nowrap;
        }


        .course-meta-item i {
            color: #e6bb22;

            font-size: 12px;
        }


        /* =====================================================
           VIEW COURSE BUTTON
        ===================================================== */

        .view-course {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            flex-shrink: 0;

            padding: 9px 13px;

            background:
                rgba(245,196,0,0.08);

            border:
                1px solid rgba(245,196,0,0.25);

            border-radius: 6px;

            color: #f5c400;

            font-size: 13px;

            font-weight: 700;

            transition:
                background 0.2s ease,
                color 0.2s ease,
                border-color 0.2s ease;
        }


        .view-course:hover {
            background: #f5c400;

            border-color: #f5c400;

            color: #000000;
        }


        .view-course i {
            font-size: 11px;
        }


        /* =====================================================
           COACH
        ===================================================== */

        .course-coach {
            display: flex;

            align-items: center;

            gap: 8px;

            margin-top: 13px;
        }


        .coach-image {
            width: 27px;
            height: 27px;

            border-radius: 50%;

            object-fit: cover;

            border: 1px solid #3b3b3b;
        }


        .coach-avatar {
            width: 27px;
            height: 27px;

            border-radius: 50%;

            display: flex;

            align-items: center;
            justify-content: center;

            background: #1e1e1e;

            color: #888888;

            font-size: 12px;
        }


        .coach-text {
            display: flex;

            flex-direction: column;

            gap: 1px;
        }


        .coach-name {
            color: #bcbcbc;

            font-size: 12px;

            font-weight: 600;
        }


        .coach-label {
            color: #686868;

            font-size: 10px;
        }


        /* =====================================================
           EMPTY STATE
        ===================================================== */

        .empty-courses {
            width: 100%;

            padding: 70px 20px;

            text-align: center;

            border:
                1px solid #292929;

            border-radius: 10px;

            background: #101010;
        }


        .empty-courses i {
            display: block;

            font-size: 45px;

            color: #555555;

            margin-bottom: 18px;
        }


        .empty-courses h3 {
            color: #ffffff;

            font-size: 22px;

            margin-bottom: 8px;
        }


        .empty-courses p {
            color: #777777;

            font-size: 14px;
        }


        /* =====================================================
           VIEW ALL BUTTON
        ===================================================== */

        .view-all-wrapper {
            display: flex;

            justify-content: center;

            margin-top: 48px;
        }


        .view-all-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 9px;

            padding: 13px 25px;

            border-radius: 7px;

            background: #f5c400;

            color: #000000;

            font-size: 14px;

            font-weight: 700;

            transition: 0.2s ease;
        }


        .view-all-button:hover {
            background: #e2b600;

            transform: translateY(-2px);
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .simple-footer {
            background: #050505;

            border-top:
                1px solid #181818;

            padding: 25px 20px;

            text-align: center;

            color: #666666;

            font-size: 13px;
        }


        /* =====================================================
           TABLET
        ===================================================== */

        @media (max-width: 1050px) {

            .courses-grid {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }


            .courses-heading h1 {
                font-size: 56px;
            }

        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 680px) {

            .site-header {
                padding: 15px;
            }


            .site-logo {
                font-size: 18px;
            }


            .header-links {
                gap: 6px;
            }


            .header-button {
                padding: 8px 11px;

                font-size: 12px;
            }


            .courses-section {
                padding:
                    60px 15px 80px;
            }


            .courses-heading {
                margin-bottom: 40px;
            }


            .courses-eyebrow {
                font-size: 14px;
            }


            .courses-heading h1 {
                font-size: 42px;

                letter-spacing: -1.5px;
            }


            .courses-heading p {
                font-size: 14px;
            }


            .courses-grid {
                grid-template-columns: 1fr;

                gap: 20px;
            }


            .course-image {
                height: 205px;
            }


            .course-content {
                padding: 22px 20px 20px;
            }


            .course-title {
                font-size: 19px;

                min-height: auto;
            }


            .course-description {
                min-height: auto;
            }


            .course-bottom {
                align-items: flex-end;
            }


            .course-meta {
                gap: 9px;
            }


            .course-meta-item {
                font-size: 12px;
            }

        }


        /* =====================================================
           SMALL MOBILE
        ===================================================== */

        @media (max-width: 400px) {

            .courses-heading h1 {
                font-size: 36px;
            }


            .course-image {
                height: 185px;
            }


            .course-bottom {
                flex-direction: column;

                align-items: stretch;
            }


            .view-course {
                width: 100%;
            }

        }

    </style>

</head>


<body>


<!-- ============================================================
     EXPLORE COURSES
============================================================ -->

<section class="courses-section" id="courses">

    <div class="courses-container">


        <!-- ====================================================
             HEADING
        ===================================================== -->

        <div class="courses-heading">

            <div class="courses-eyebrow">

                <i class="fas fa-sparkles"></i>

                CHECKOUT NEW LIST

            </div>


            <h1>
                Explore Courses
            </h1>


            <p>
                Discover our latest trading courses and build
                practical skills through structured learning.
            </p>

        </div>


        <!-- ====================================================
             COURSES
        ===================================================== -->

        <?php if (!empty($courses)): ?>

            <div class="courses-grid">


                <?php foreach ($courses as $index => $course): ?>


                    <?php

                    $courseId =
                        (int)($course['id'] ?? 0);


                    $title =
                        $course['title']
                        ?? 'Untitled Course';


                    $heading =
                        trim($course['heading'] ?? '');


                    $description =
                        trim($course['description'] ?? '');


                    $level =
                        $course['level']
                        ?? 'Beginner';


                    $totalLessons =
                        (int)($course['total_lessons'] ?? 0);


                    $mentorName =
                        trim($course['mentor_name'] ?? '');


                    $thumbnail =
                        $course['thumbnail'] ?? '';


                    $image =
                        'https://images.unsplash.com/photo-1787285187589-ddbdf58b81b1?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0';


                    /*
                     * Badge logic:
                     *
                     * First course = NEW
                     * Third course = SPECIAL
                     *
                     * Remove/change these if you don't want
                     * automatic badges.
                     */

                    $isNew =
                        ($index === 0);


                    $isSpecial =
                        ($index === 2);

                    ?>


                    <article class="course-card">


                        <!-- =================================================
                             IMAGE
                        ================================================== -->

                        <div class="course-image">


                            <?php if (!empty($image)): ?>

                                <img
                                    src="<?php echo htmlspecialchars(
                                        $image,
                                        ENT_QUOTES,
                                        'UTF-8'
                                    ); ?>"
                                    alt="<?php echo htmlspecialchars(
                                        $title,
                                        ENT_QUOTES,
                                        'UTF-8'
                                    ); ?>"
                                    loading="lazy"
                                >

                            <?php else: ?>

                                <div
                                    style="
                                        width:100%;
                                        height:100%;
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;
                                        background:#171717;
                                        color:#555;
                                        font-size:42px;
                                    "
                                >
                                    <i class="fas fa-book-open"></i>
                                </div>

                            <?php endif; ?>


                            <?php if ($isNew): ?>

                                <span class="course-badge new">
                                    NEW
                                </span>

                            <?php elseif ($isSpecial): ?>

                                <span class="course-badge special">
                                    SPECIAL
                                </span>

                            <?php endif; ?>


                        </div>


                        <!-- =================================================
                             CONTENT
                        ================================================== -->

                        <div class="course-content">


                            <!-- CATEGORY -->

                            <div class="course-category">

                                <?php
                                echo htmlspecialchars(
                                    ucfirst($level),
                                    ENT_QUOTES,
                                    'UTF-8'
                                );
                                ?>

                            </div>


                            <!-- TITLE -->

                            <h2 class="course-title">

                                <?php
                                echo htmlspecialchars(
                                    $title,
                                    ENT_QUOTES,
                                    'UTF-8'
                                );
                                ?>

                            </h2>


                            <!-- DESCRIPTION -->

                            <?php

                            $displayDescription =
                                !empty($heading)
                                ? $heading
                                : $description;

                            ?>

                            <?php if (!empty($displayDescription)): ?>

                                <p class="course-description">

                                    <?php
                                    echo htmlspecialchars(
                                        shortCourseDescription(
                                            $displayDescription,
                                            115
                                        ),
                                        ENT_QUOTES,
                                        'UTF-8'
                                    );
                                    ?>

                                </p>

                            <?php else: ?>

                                <p class="course-description">
                                    Explore this course and start
                                    building your trading knowledge.
                                </p>

                            <?php endif; ?>


                            <!-- COACH -->

                            <?php if (!empty($mentorName)): ?>

                                <div class="course-coach">


                                    <?php if (!empty($course['mentor_image'])): ?>

                                        <?php

                                        $mentorImage =
                                            basename(
                                                $course['mentor_image']
                                            );

                                        $mentorPath =
                                            __DIR__
                                            . '/uploads/thumbnails/'
                                            . $mentorImage;

                                        ?>


                                        <?php if (file_exists($mentorPath)): ?>

                                            <img
                                                src="https://images.unsplash.com/photo-1787285187589-ddbdf58b81b1?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nzl8fGNvdXJzZSUyMHRodW1ibmFpbHxlbnwwfHwwfHx8MA%3D%3Dhttps://images.unsplash.com/photo-1787285187589-ddbdf58b81b1?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0"
                                                alt="Coach"
                                                class="coach-image"
                                                loading="lazy"
                                            >

                                        <?php else: ?>

                                            <div class="coach-avatar">
                                                <i class="fas fa-user"></i>
                                            </div>

                                        <?php endif; ?>


                                    <?php else: ?>

                                        <div class="coach-avatar">
                                            <i class="fas fa-user"></i>
                                        </div>

                                    <?php endif; ?>


                                    <div class="coach-text">

                                        <span class="coach-name">

                                            <?php
                                            echo htmlspecialchars(
                                                $mentorName,
                                                ENT_QUOTES,
                                                'UTF-8'
                                            );
                                            ?>

                                        </span>

                                        <span class="coach-label">
                                            By Coach
                                        </span>

                                    </div>


                                </div>

                            <?php endif; ?>


                            <!-- DIVIDER -->

                            <div class="course-divider"></div>


                            <!-- =================================================
                                 BOTTOM
                            ================================================== -->

                            <div class="course-bottom">


                                <div class="course-meta">


                                    <span class="course-meta-item">

                                        <i class="fas fa-book-open"></i>

                                        <?php
                                        echo $totalLessons;
                                        ?>

                                        Lessons

                                    </span>


                                    <span class="course-meta-item">

                                        <i class="fas fa-signal"></i>

                                        <?php
                                        echo htmlspecialchars(
                                            ucfirst($level),
                                            ENT_QUOTES,
                                            'UTF-8'
                                        );
                                        ?>

                                    </span>


                                </div>


                                <!-- =============================================
                                     PUBLIC COURSE LINK
                                     NO LOGIN REQUIRED
                                ============================================== -->

                                <a
                                    href="user/courses-lessons.php?id=<?php
                                        echo $courseId;
                                    ?>"
                                    class="view-course"
                                >

                                    View Course

                                    <i class="fas fa-arrow-right"></i>

                                </a>


                            </div>


                        </div>


                    </article>


                <?php endforeach; ?>


            </div>


            <!-- ============================================================
                 VIEW ALL
            ============================================================ -->

            <div class="view-all-wrapper">

                <a
                    href="user/courses-lessons.php"
                    class="view-all-button"
                >

                    View All Courses

                    <i class="fas fa-arrow-right"></i>

                </a>

            </div>


        <?php else: ?>


            <!-- ============================================================
                 NO COURSES
            ============================================================ -->

            <div class="empty-courses">

                <i class="fas fa-book-open"></i>

                <h3>
                    No Courses Available
                </h3>

                <p>
                    New courses will be available soon.
                </p>

            </div>


        <?php endif; ?>


    </div>

</section>






</body>

</html>