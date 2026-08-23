<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PracticePot</title>

 <!-- Favicon -->
    <link rel="shortcut icon" href="../public/assets/frontend/images/pp-fav.png">
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="<?= base_url('public/assets/home/css/custom.css') ?>" rel="stylesheet">
    <!-- Google Font -->
 <!--   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        .fw-bold {
            font-weight: 600 !important;
        }
body {
    font-family: 'DM Sans', sans-serif;
}
        /****** login buttons********/
        .login-link {
            color: #000;
            font-size: 16px;
            text-decoration: none;
        }

        .login-link:hover {
            color: #ff7a00;
        }

        .get-started-btn {
            background-color: #ff7a00;
            color: #fff;
            padding: 6px 19px;
            border-radius: 12px;
            font-weight: 500;
            transition: 0.3s ease;
        }

        .get-started-btn:hover {
            background-color: #e86d00;
            color: #fff;
        }

        /*****banner**********/
        /* Small Top Badge */
        .top-badge {
            display: inline-block;
            padding: 8px 18px;
            background: #f3e7d9;
            border-radius: 30px;
            color: #f28c18;
            font-weight: 500;
            font-size: 14px;
        }

        /* Main Headings */
        .hero h1 {
            font-size: 35px;
            font-weight: 600;
            margin-top: 20px;
        }

        .hero h2 {
            font-size: 47px;
            font-weight: 600;
            line-height: 1.5;
        }

        .highlight {
            color: #f28c18;
        }

        .hero p {
            font-size: 20px;
            color: #3c3b3b;
            max-width: 900px;
            margin: 20px auto;
            font-weight: 500;
        }


        /* Buttons */
        .btn-primary-custom {
            background: #f28c18;
            color: #fff;
            border: none;
            padding: 14px 28px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 500;
        }

        .btn-primary-custom:hover {
            background: #dd7d12;
            color: #fff;
        }

        .btn-outline-custom {
            border: 2px solid #f28c18;
            color: #f28c18;
            padding: 5px 28px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 500;
        }

        .btn-outline-custom:hover {
            background: #f28c18;
            color: #fff;
        }

        /* Stats */
        .stats {
            margin-top: 60px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-item h3 {
            font-size: 30px;
            font-weight: 700;
        }

        .stats p {
            font-size: 16px;
            margin: 0px;
        }

        .hero {
            padding-top: 2rem !important;
            padding-bottom: 8rem !important;
        }

        .divider {
            border-right: 1px solid #ccc;
        }

        /* Responsive */
        @media(max-width:768px) {

            .hero h1 {
                font-size: 32px;
            }

            .hero h2 {
                font-size: 38px;
            }

            .hero p {
                font-size: 16px;
            }

        }

        @media (min-width: 768px) {
            .stats .col-md-3 {
                flex: 0 0 auto;
                width: 11%;
            }
        }

        /******* companies*******/
        .companies-section {
            background-color: #e8dccb;
            /* Beige background */
        }

        .section-title {
            color: #f28c18;
            /* Orange text */
            font-weight: 600;
            font-size: 38px;
        }

        .company-logo {
            max-height: 60px;
            object-fit: contain;
            filter: grayscale(100%);
            transition: 0.3s ease;
        }

        .company-logo:hover {
            filter: grayscale(0%);
            transform: scale(1.05);
        }

        .section-padding {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        /*******courses*********/
        /* Card Styling */
        .custom-card {
            background: #f8f8f8;
            border-radius: 20px;
            overflow: hidden;

            /* Slightly darker shadow */
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);

            transition: 0.3s ease;
        }

        .custom-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.18);
        }

        .custom-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card-body-custom {
            padding: 15px;
        }

        .card-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #f3e5d4;
            color: #f28c18;
            padding: 10px 22px;
            border-radius: 50px;
            font-weight: 600;
            margin-bottom: 18px;
            font-size: 13px;

        }

        .card-text {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .know-more {
            color: #f28c18;
            font-weight: 600;
            text-decoration: none;
        }

        .know-more:hover {
            text-decoration: underline;
        }

        /* Responsive Adjust */
        @media(max-width:768px) {
            .custom-card img {
                height: 200px;
            }
        }
        

        /********carousel*********/
        /* Card */
        .sim-card {
            background: #f8f8f8;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
            transition: .3s;
        }

        .sim-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.18);
        }

        .sim-card img {
            width: 100%;
            height: 240px;
            object-fit: cover;
        }

        /* Body */
        .sim-body {
            padding: 25px;
        }

        /* Orange */
        .text-orange {
            color: #f28c18;
            font-weight: 600;
        }

        /* Level Badge */
        .level-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: white;
            color: #f28c18;
            font-weight: 600;
            padding: 2px 12px;
            border-radius: 20px;
            font-size: 11px;
        }

        .sim-card p {
            font-size: 14px;
        }

        .sim-card span {
            font-size: 11px;
        }

        /* Orange Button */
        .btn-orange {
            background: #f28c18;
            color: #fff;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
        }

        .btn-orange:hover {
            background: #dd7d12;
            color: #fff;
        }

        /* Carousel Arrows */
        .custom-arrow {
            position: absolute;
            top: 45%;
            width: 55px;
            height: 55px;
            background: #f28c18;
            color: white;
            border-radius: 50%;
            font-size: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
            border: none;
        }

        .carousel-control-prev {
            left: -70px;
        }

        .carousel-control-next {
            right: -70px;
        }
           @media (max-width: 767px) {

    .carousel-item .row {
        flex-wrap: nowrap;
    }

    .carousel-item .col-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

}
@media (max-width: 991px) {
    .carousel-control-prev {
        left: 10px;
    }

    .carousel-control-next {
        right: 10px;
    }

    .custom-arrow {
        width: 40px;
        height: 40px;
        font-size: 20px;
    }
}

        /*****careers***************/
        .transform-section {
            background: linear-gradient(90deg,
                    #1c2b3f 0%,
                    #0f1e33 50%,
                    #071423 100%);
            padding: 80px 0;
        }

        /* Headings */
        .main-heading {
            font-size: 36px;
            font-weight: 600;
        }

        .sub-text {
            color: #c9d3df;
            max-width: 480px;
        }

        .stat-title {
            font-weight: 600;
            font-size: 26px;
        }

        .stat-sub {
            color: #c9d3df;
            font-size: 15px;
        }

        .highlight {
            color: #f5a623;
            font-weight: 600;
        }

        /* Stat Box */
        .stat-box {
            background: rgba(255, 255, 255, 0.06);
            border-radius: 16px;
            padding: 22px 26px;
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* Icons */
        .icon-box {
            width: 55px;
            height: 55px;
            background: #f5a623;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: #fff;
            font-weight: 600;
        }

        .icon-box-small {
            width: 45px;
            height: 45px;
            background: #f5a623;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 600;
        }

        /* Button */
        .btn-orange {
            background: #f5a623;
            color: #fff;
            border-radius: 10px;
            font-weight: 600;
        }

        .btn-orange:hover {
            background: #dd911c;
            color: #fff;
        }

        /* Right Side */
        .image-wrapper img {
            border-radius: 20px;
            width: 100%;
        }
.img-left{
    padding-left: 187px; 
}

@media (max-width: 768px) {
   .img-left{
    padding-left: 0px; 
}
}
        .success-box {
            position: absolute;
            bottom: 30px;
            left: 30px;
            background: #fff;
            padding: 18px 25px;
            border-radius: 16px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        .success-box h5 {
            font-weight: 600;
            font-size: 22px;
        }

        .success-box small {
            color: #555;
        }

        /* Responsive */
        @media(max-width:991px) {
            .success-box {
                left: 20px;
                bottom: -30px;
            }
        }

        /*******************/
        .nav-link {
            color: #000;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .hero {
            background: linear-gradient(135deg, #f8f9ff, #eef2ff);
        }

        .stat-box h3 {
            font-weight: 800;
        }

        .sim-card {
            border: 1px solid #eee;
            border-radius: 12px;
            transition: .3s;
        }

        .sim-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .step-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #0d6efd;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin: auto;
        }

        /********steps*********************/
        .how-it-works-section {
            background: #ffffff;
        }

        .main-title {
            max-width: 800px;
            margin: 0 auto;
            font-size: 32px;
        }

        .description {
            max-width: 720px;
            font-size: 16px;
        }

        .step-number {
            width: 55px;
            height: 55px;
            background: #f28c18;
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        .step-wrapper {
            position: relative;
            padding: 0 20px;
        }

        .step-wrapper h5 {
            font-size: 1.05rem;
        }

        /* Arrow between steps (desktop only) */
        @media (min-width:992px) {
            .step-wrapper:not(:last-child)::after {
                content: "→";
                position: absolute;
                top: 40px;
                right: -10px;
                font-size: 28px;
                color: #f28c18;
            }
        }

        /* CTA button (reuse style) */
        .btn-orange {
            background: #f28c18;
            color: #fff;
            border-radius: 10px;
            font-weight: 600;
        }

        .btn-orange:hover {
            background: #dd7d12;
            color: #fff;
        }

        /********level up ***************/
        .display-5 {
            font-size: 48px;
        }

        .rounded-4 {
            border-radius: 20px !important;
        }

        .shadow-sm {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08) !important;
        }

        /*********Employers************/

        /******** EMPLOYERS SECTION FIXED ********/
        /* ── Outer section: full width, light grey background ── */
        .employers-section {
            position: relative;
            width: 100%;
            background: #fff;
            overflow: hidden;
            padding: 50px 0;
            margin-top: 80px;
            margin-bottom: 80px;
        }

        /* ── Building image: left ~25% of viewport, full height of section ── */
        .bg-building {
            position: absolute;
            top: 0;
            left: 0;
            width: 23%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
            z-index: 0;
        }

        /* ── Inner layout: flex row ── */
        .employers-layout {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            width: 100%;
            min-height: 420px;
        }

        /* ── Cream card: starts at ~20%, width ~22% of viewport ── */
        .cream-card {
            flex-shrink: 0;
            width: 23%;
            margin-left: 11%;
            /* push it so it starts around 18-20% of screen */
            background-color: #f5efd6;
            border-radius: 8px;
            padding: 52px 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 360px;
            align-self: stretch;
        }

        .cream-card h2 {
            font-size: clamp(1.4rem, 2vw, 2rem);
            font-weight: 600;
            color: #f0a500;
            line-height: 1.3;
            text-align: center;
            margin: 0;
        }

        /* ── Brands column: takes remaining ~60% ── */
        .brands-col {
            flex: 1;
            padding: 30px 210px 30px 40px;
            display: flex;
            align-items: center;
        }

        /* ── Logo grid: 3 columns ── */
        .logos-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            width: 100%;
        }

        /* ── Individual logo card ── */
        .logo-card {
            background: #ffffff;
            border: 1.5px solid #c3c3c3;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 22px;
            padding: 36px 20px 26px;
            min-height: 170px;
            cursor: pointer;
            transition: box-shadow 0.22s ease;
        }

        .logo-card:hover {
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.09);
        }

        .logo-card img {
            /*  max-height: 52px;
      max-width: 150px; */
            width: 100%;
            object-fit: contain;
        }

        .logo-card span {
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0.13em;
            color: #1c1c1c;
            text-transform: uppercase;
        }

        .logo-card:hover span {
            color: #f0a500;
        }

        /* ── TABLET (max 991px) ── */
        @media (max-width: 991px) {
            .employers-section {
                padding: 0;
            }

            .bg-building {
                width: 100%;
                height: 240px;
                position: relative;
                display: block;
            }

            .employers-layout {
                flex-direction: column;
                min-height: auto;
            }

            .cream-card {
                width: 60%;
                margin-left: auto;
                margin-right: auto;
                margin-top: -60px;
                min-height: auto;
                padding: 36px 30px;
                align-self: auto;
            }

            .brands-col {
                width: 100%;
                padding: 32px 24px 48px;
            }

            .logos-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 14px;
            }
        }

        /* ── MOBILE (max 575px) ── */
        @media (max-width: 575px) {
            .bg-building {
                height: 200px;
            }

            .cream-card {
                width: 82%;
                padding: 28px 24px;
            }

            .cream-card h2 {
                font-size: 1.45rem;
            }

            .logos-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 12px;
            }

            .brands-col {
                padding: 28px 14px 36px;
            }

            .logo-card {
                min-height: 140px;
                padding: 24px 12px 18px;
                gap: 16px;
            }
        }

        /**************testimonials*********************/
        /* ── Section ── */
        .testimonials-section {
            position: relative;
            background: #fff;
            padding: 70px 0 60px;
            overflow: hidden;
        }

        /* Soft orange blob — top left */
        .testimonials-section::before {
            content: '';
            position: absolute;
            top: -60px;
            left: -80px;
            width: 340px;
            height: 340px;
            background: radial-gradient(circle, rgba(255, 200, 100, 0.18) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            z-index: 0;
        }

        /* Soft orange blob — bottom right */
        .testimonials-section::after {
            content: '';
            position: absolute;
            bottom: 40px;
            right: -60px;
            width: 260px;
            height: 260px;
            background: radial-gradient(circle, rgba(255, 200, 100, 0.13) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            z-index: 0;
        }

        .testimonials-section .container {
            position: relative;
            z-index: 1;
        }

        /* ── Quote icon badge ── */
        .quote-badge {
            width: 62px;
            height: 62px;
            background: #f0a500;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
        }

        .quote-badge svg {
            width: 30px;
            height: 30px;
            fill: #fff;
        }

        /* ── Section heading ── */
        .section-titles {
            font-size: clamp(1.7rem, 3vw, 2.2rem);
            font-weight: 600;
            color: #111;
            text-align: center;
            margin-bottom: 10px;
        }

        .section-subtitle {
            font-size: 1rem;
            font-weight: 400;
            color: #666;
            text-align: center;
            margin-bottom: 48px;
        }

        /* ── Testimonial card ── */
        .t-card {
            background: #fff;
            border: 1.5px solid #e8e8e8;
            border-radius: 16px;
            padding: 28px 24px 24px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: box-shadow 0.2s;
        }

        .t-card:hover {
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
        }

        /* Stars */
        .stars {
            display: flex;
            gap: 3px;
            margin-bottom: 16px;
        }

        .stars span {
            font-size: 1.1rem;
            color: #f0a500;
        }

        /* Quote text */
        .t-quote {
            font-size: 0.92rem;
            color: #333;
            line-height: 1.7;
            flex: 1;
            margin-bottom: 24px;
        }

        /* Author row */
        .t-author {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .t-author .avatar-wrap {
            position: relative;
            flex-shrink: 0;
        }

        .t-author .avatar-wrap img {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Orange tick badge on avatar */
        .t-author .avatar-wrap .tick {
            position: absolute;
            bottom: 0;
            right: -2px;
            width: 18px;
            height: 18px;
            background: #f0a500;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #fff;
        }

        .t-author .avatar-wrap .tick svg {
            width: 9px;
            height: 9px;
            fill: #fff;
        }

        .t-author-info .name {
            font-size: 0.95rem;
            font-weight: 700;
            color: #111;
            margin-bottom: 2px;
        }

        .t-author-info .role {
            font-size: 0.82rem;
            font-weight: 600;
            color: #f0a500;
            margin-bottom: 2px;
            line-height: 1.3;
        }

        .t-author-info .college {
            font-size: 0.8rem;
            color: #888;
        }

        /* ── Bottom stats bar ── */
        .stats-bar {
            margin-top: 52px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0;
            border-top: 1px solid #eee;
            padding-top: 40px;
        }

        .stat-item {
            text-align: center;
           /* padding: 0 60px; */
        }

        .stat-item+.stat-item {
            border-left: 1.5px solid #ddd;
        }

        .stat-num {
            font-size: 2rem;
            font-weight: 800;
            color: #111;
            line-height: 1.1;
        }

        .stat-num.orange {
            color: #f0a500;
        }

        .stat-label {
            font-size: 0.85rem;
            color: #888;
            margin-top: 5px;
            font-weight: 400;
        }

        /* ── Responsive ── */
        @media (max-width: 991px) {
            .stat-item {
                padding: 0 30px;
            }
        }

        @media (max-width: 767px) {
            .stats-bar {
                flex-direction: column;
                gap: 28px;
                border-top: none;
                padding-top: 24px;
            }

            .stat-item+.stat-item {
                border-left: none;
                border-top: 1.5px solid #eee;
                padding-top: 28px;
                width: 100%;
            }
        }

        /***************faq********************/
        /* ── Section ── */
        .faq-section {
            padding: 70px 0 60px;
            background: #fff;
        }

        /* ── Icon badge ── */
        .faq-icon-badge {
            width: 64px;
            height: 64px;
            background: #f0a500;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
        }

        .faq-icon-badge svg {
            width: 30px;
            height: 30px;
            fill: #fff;
        }

        /* ── Heading ── */
        .faq-title {
            font-size: clamp(1.8rem, 3.5vw, 2.4rem);
            font-weight: 800;
            color: #111;
            text-align: center;
            margin-bottom: 12px;
        }

        .faq-subtitle {
            font-size: 1rem;
            color: #888;
            text-align: center;
            line-height: 1.6;
            margin-bottom: 50px;
        }

        /* ── FAQ accordion wrapper ── */
        .faq-list {
            max-width: 860px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        /* ── Individual FAQ item ── */
        .faq-item {
            border: 1.5px solid #e8e8e8;
            border-radius: 14px;
            overflow: hidden;
            background: #fff;
            transition: box-shadow 0.2s;
        }

        .faq-item.open {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        }

        /* Question row (clickable) */
        .faq-question {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 22px 24px;
            cursor: pointer;
            gap: 16px;
            user-select: none;
        }

        .faq-question span {
            font-size: 1rem;
            font-weight: 600;
            color: #111;
            line-height: 1.4;
        }

        /* +/- toggle button */
        .faq-toggle {
            flex-shrink: 0;
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f5f5f5;
            transition: background 0.2s;
        }

        .faq-item.open .faq-toggle {
            background: #f0a500;
        }

        .faq-toggle svg {
            width: 16px;
            height: 16px;
            stroke: #555;
            stroke-width: 2.5;
            transition: stroke 0.2s;
        }

        .faq-item.open .faq-toggle svg {
            stroke: #fff;
        }

        /* Minus icon: hide the vertical bar when open */
        .faq-toggle .bar-v {
            transition: opacity 0.2s;
        }

        .faq-item.open .faq-toggle .bar-v {
            opacity: 0;
        }

        /* Answer panel */
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease, padding 0.25s ease;
            padding: 0 24px;
        }

        .faq-item.open .faq-answer {
            max-height: 300px;
            padding: 0 24px 24px;
        }

        .faq-answer p {
            font-size: 0.93rem;
            color: #555;
            line-height: 1.75;
            margin: 0;
        }

        /* ── View more link ── */
        .view-more-wrap {
            text-align: center;
            margin-top: 36px;
        }

        .view-more-btn {
            font-size: 0.95rem;
            font-weight: 600;
            color: #111;
            background: none;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: color 0.2s;
        }

        .view-more-btn:hover {
            color: #f0a500;
        }

        /* ── Responsive ── */
        @media (max-width: 575px) {
            .faq-question {
                padding: 18px 16px;
            }

            .faq-item.open .faq-answer {
                padding: 0 16px 20px;
            }

            .faq-question span {
                font-size: 0.93rem;
            }
        }

        /************Cta********************/
        /* ── Outer section ── */
        .cta-section {
            padding: 50px 24px;
            background: #f4f6f9;
        }

        /* ── Inner cream card ── */
        .cta-card {
            max-width: 1100px;
            margin: 0 auto;
            background: #fffbf0;
            border-radius: 20px;
            padding: 64px 40px;
            text-align: center;
        }

        .cta-card h2 {
            font-size: clamp(1.6rem, 3vw, 2rem);
            font-weight: 800;
            color: #111;
            margin-bottom: 12px;
        }

        .cta-card p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 32px;
            font-weight: 400;
        }

        .cta-btn {
    display: inline-block;
    background: #f0a500;
    color: #fff;
    font-size: 15px;
    font-weight: 500;
    font-family: 'DM Sans', sans-serif;
    padding: 15px 38px;
    border-radius: 17px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    transition: background 0.2s, transform 0.15s;
}

        .cta-btn:hover {
            background: #d9940a;
            color: #fff;
            transform: translateY(-1px);
        }

        @media (max-width: 575px) {
            .cta-card {
                padding: 48px 24px;
            }
        }

        /********* footer *******************/
       /* ── Footer wrapper ── */
    .site-footer {
      background-color: #0e1624;
      padding: 60px 0 0;
      color: #cdd3dd;
    }

    /* ── Brand column ── */
    .footer-brand .logo-wrap {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 20px;
    }

    .footer-brand .logo-wrap img {
       
      width: 37%;
    }

    .footer-brand p {
      font-size: 0.88rem;
      color: #8a93a2;
      line-height: 1.7;
      max-width: 320px;
      margin-bottom: 24px;
    }

    /* Social icons */
    .social-icons {
      display: flex;
      gap: 10px;
    }

    .social-icons a {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: #1c2b3a;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      transition: background 0.2s;
    }

    .social-icons a:hover {
      background: #f0a500;
    }

    .social-icons a svg {
      width: 16px;
      height: 16px;
      fill: #cdd3dd;
    }

    /* ── Nav columns ── */
    .footer-nav-col h6 {
      font-size: 0.95rem;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 20px;
      letter-spacing: 0.01em;
    }

    .footer-nav-col ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .footer-nav-col ul li a {
      font-size: 0.88rem;
      color: #8a93a2;
      text-decoration: none;
      transition: color 0.2s;
    }

    .footer-nav-col ul li a:hover {
      color: #f0a500;
    }

    /* ── Divider ── */
    .footer-divider {
      border-color: #1e2d3d;
      margin: 48px 0 0;
    }

    /* ── Bottom bar ── */
    .footer-bottom {
      padding: 20px 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 12px;
    }

    .footer-bottom .copy {
      font-size: 0.82rem;
      color: #5a6372;
    }

    .footer-bottom .bottom-links {
      display: flex;
      gap: 24px;
    }

    .footer-bottom .bottom-links a {
      font-size: 0.82rem;
      color: #5a6372;
      text-decoration: none;
      transition: color 0.2s;
    }

    .footer-bottom .bottom-links a:hover {
      color: #f0a500;
    }

    /* ── Responsive ── */
    @media (max-width: 767px) {
      .footer-brand {
        margin-bottom: 36px;
      }

      .footer-nav-col {
        margin-bottom: 28px;
      }

      .footer-bottom {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
      .wat-demo{
          margin-top: 15px;
      }
      .get-started-btn {
   
    margin-left: 14px !important;
}
.lst-img{
    display:none;
}
.hero { 
    padding-bottom: 5rem !important;
}
.section-padding {
    padding-top: 72px;
    padding-bottom: 89px;
}
.section-title {
    color: #f28c18;
    font-weight: 600;
    font-size: 36px;
}
    }
    </style>
</head>

<body>

    <!-- ================= NAVBAR ================= -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
        <div class="container">

            <!-- Logo (Left) -->
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url('public/assets/frontend/images/pp-logo.png') ?>" alt="Logo" height="70">
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu + Button -->
            <div class="collapse navbar-collapse justify-content-between" id="mainNavbar">

                <!-- Center Menu -->
                <ul class="navbar-nav mx-auto text-center">
                    
                        <li class="nav-item">
                        <a class="nav-link px-3" href="<?= base_url('pricing') ?>">Pricing</a>
                    </li>
                          <li class="nav-item">
                        <a class="nav-link px-3" href="<?= base_url('contact') ?>">Contact</a>
                    </li>
                <!--    <li class="nav-item">-->
                <!--        <a class="nav-link px-3" href="#">Explore</a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--        <a class="nav-link px-3" href="#">Internship</a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--        <a class="nav-link px-3" href="#">Simulation</a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--        <a class="nav-link px-3" href="#">Blog</a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--        <a class="nav-link px-3" href="#">For Enterprise</a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--        <a class="nav-link px-3" href="#">For Educators</a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--        <a class="nav-link px-3" href="#">Support</a>-->
                <!--    </li>-->
                </ul>

                <!-- Right Button -->
                <div class="ms-auto d-flex align-items-center">

                    <!-- Login -->
                    <a href="<?= base_url('user') ?>" class="nav-link fw-medium me-4 login-link">
                        Login
                    </a>

                    <!-- Get Started Button -->
                    <!--<a href="<?= base_url('user') ?>" class="btn get-started-btn">-->
                    <!--    Get Started-->
                    <!--</a>-->

                </div>

            </div>
        </div>
    </nav>