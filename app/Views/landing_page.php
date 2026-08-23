<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PracticePot</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Font -->
 <!--   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        .fw-bold {
            font-weight: 600 !important;
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
            <a class="navbar-brand" href="#">
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
                     <a href="<?= base_url('pricing') ?>" class="nav-link fw-medium me-4 login-link">
                        Sign Up
                    </a>

                    <!-- Get Started Button -->
                    <!--<a href="<?= base_url('user') ?>" class="btn get-started-btn">-->
                    <!--    Get Started-->
                    <!--</a>-->

                </div>

            </div>
        </div>
    </nav>
  <!-- ================= HERO ================= -->
    <section class="hero text-center py-5">
        <div class="container">

            <div class="top-badge">
                🎓 Welcome to our Experiential Learning Platform
            </div>

            <h1 class="mt-4">Become Job Ready</h1>

            <h2>
                Practice <span class="highlight">GST, TDS, UAE VAT, EPF & ESI</span><br>
                Through Interactive Simulations
            </h2>

            <p>
                Practice real workflows step-by-step and experience how actual filings work — no theoretical overload,
                only practical learning that makes you industry-ready.
            </p>

            <!--<div class="mt-4 inline-btns" >-->
            <!--    <a href="<?= base_url('pricing') ?>" class="btn get-started-btn me-3">Get Started Now →</a>-->
            <!--    <a href="<?= base_url('user') ?>" class="btn btn-outline-custom wat-demo" >Watch Demo</a>-->
            <!--</div>-->

            <!-- Stats -->
            <div class="row justify-content-center stats">

                <div class="col-md-3 col-4 stat-item divider">
                    <h3>20K+</h3>
                    <p>Active Students</p>
                </div>

                <div class="col-md-3 col-4 stat-item divider">
                    <h3>98%</h3>
                    <p>Success Rate</p>
                </div>

                <div class="col-md-3 col-4 stat-item">
                    <h3>4.9/5</h3>
                    <p>User Rating</p>
                </div>

            </div>

        </div>
    </section>

    <!-- ================= ABOUT ================= -->
    <section class="companies-section section-padding">
        <div class="container text-center">

            <h2 class="section-title mb-5">
                Featuring job simulations from leading companies
            </h2>

            <div class="row justify-content-center align-items-center g-4">

                <div class="col-6 col-md-2">
                    <img src="<?= base_url('public/assets/frontend/images/logos/1.jpg') ?>"
                        class="img-fluid company-logo">
                </div>

                <div class="col-6 col-md-2">
                    <img src="<?= base_url('public/assets/frontend/images/logos/2.png') ?>"
                        class="img-fluid company-logo">
                </div>

                <div class="col-6 col-md-2">
                    <img src="<?= base_url('public/assets/frontend/images/logos/3.jpg') ?>"
                        class="img-fluid company-logo">
                </div>

                <div class="col-6 col-md-2">
                    <img src="<?= base_url('public/assets/frontend/images/logos/3.png') ?>"
                        class="img-fluid company-logo">
                </div>

                <div class="col-6 col-md-2 lst-img">
                    <img src="<?= base_url('public/assets/frontend/images/logos/4.png') ?>"
                        class="img-fluid company-logo">
                </div>

            </div>

        </div>
    </section>

    <!-- ================= SIMULATIONS ================= -->
     <section class="section-padding ">
        <div class="container text-center">

            <h2 class="section-title mb-3" style="color: #000;">Master Real-World Finance with PracticePot</h2>
            <p class="text-muted mx-auto" style="max-width:850px;">
               Practicepot provides industry-expert designed, risk-free simulated learning and technology integration for students, working professionals and educational institutions, enabling hands-on mastery of end-to-end finance, accounting and statutory compliance processes. 

            </p>

        </div>

        <div class="container py-3">

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="custom-card h-100 d-flex flex-column">

                        <img src="<?= base_url('public/assets/frontend/new/images/For Universities ') ?>& Colleges (1).webp" alt="">

                        <div class="card-body-custom d-flex flex-column flex-grow-1">
                            <h5 class="card-title">For Universities & Colleges</h5>

                            <div class="badge-pill">🎓 Experiential Learning Tools</div>

                            <p class="card-text">
                                Integration into Commerce Curriculum
                            </p>

                            <!-- Push link to bottom -->
                            <div class="mt-auto">
                                <a href="javascript:void(0);" onclick="sendWhatsApp()" class="know-more">Know More →</a>
                                 
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="custom-card h-100 d-flex flex-column">

                        <img src="<?= base_url('public/assets/frontend/new/images/Coaching Centers ') ?>& Training Centers (1).webp" alt="">

                        <div class="card-body-custom d-flex flex-column flex-grow-1">
                            <h5 class="card-title">Coaching Centers & Training Centers</h5>

                            <div class="badge-pill">👥  Experiential Skill Enhancement Packages</div>

                            <p class="card-text">
                                Certification from SSCs under the Ministry of Skill Development & Entrepreneurship,
                                Government of India
                            </p>

                            <!-- Push link to bottom -->
                            <div class="mt-auto">
                                <a href="javascript:void(0);" onclick="sendWhatsApp()" class="know-more">Know More →</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="custom-card h-100 d-flex flex-column">

                        <img src="<?= base_url('public/assets/frontend/new/images/For Students.JPG (1).webp') ?>" alt="">

                        <div class="card-body-custom d-flex flex-column flex-grow-1">
                            <h5 class="card-title"> For Students & Working professionals</h5>

                            <div class="badge-pill">👤 Experiential Skill Enhancement Programs</div>

                            <p class="card-text">
                                Experiential Skill Enhancement Courses
                            </p>

                            <!-- Push link to bottom -->
                            <div class="mt-auto">
                                <a href="javascript:void(0);" onclick="sendWhatsApp()" class="know-more">Know More →</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div class="container py-4 text-center">
            <a href="<?= base_url('pricing') ?>" class="btn btn-outline-custom">View All Simulations</a>
        </div>
    </section>

    <!-- ================= HOW IT WORKS ================= -->
    <section class="py-5 ">
        <div class="container text-center">

            <h2 class="fw-bold mb-3">Explore our free job simulations</h2>
            <p class="text-muted mx-auto" style="max-width:850px;">
                Gain hands-on experience with real-world tasks from top companies. Build your skills and boost your
                resume.</p>

        </div>
        <div class="container position-relative">

            <!-- Carousel -->
            <div id="simulationCarousel" class="carousel slide" data-bs-ride="false">

                <div class="carousel-inner">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row g-4">

                            <!-- CARD -->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="sim-card h-100 d-flex flex-column">

                                    <div class="position-relative">
                                        <img src="<?= base_url('public/assets/frontend/new/images/Hr ') ?>& Payroll (1).webp" alt="">

                                        <span class="level-badge">Intermediate</span>
                                    </div>

                                    <div class="sim-body d-flex flex-column flex-grow-1">
                                        <h4 class="fw-bold">GST</h4>
                                        <p class="text-orange fw-medium">GST Compliance Executive</p>

                                        <p class="text-muted">
                                            Manage tax filings,input credits, and regulatory compliance
                                        </p>

                                        <div class="d-flex gap-4 small text-muted mb-3">
                                            <span>⏱ 2-3 hours</span>
                                            <span>👥 45,000+</span>
                                        </div>

                                        <div class="mt-auto">
                                            <a href="<?= base_url('pricing') ?>" class="btn btn-orange w-100">Start Simulation</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Duplicate same structure for 2nd & 3rd cards -->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="sim-card h-100 d-flex flex-column">
                                    <div class="position-relative">
                                        <img src="<?= base_url('public/assets/frontend/new/images/Digital Marketing.webp') ?>">
                                        <span class="level-badge">Advanced</span>
                                    </div>
                                    <div class="sim-body d-flex flex-column flex-grow-1">
                                        <h4 class="fw-bold">UAE VAT</h4>
                                        <p class="text-orange">Gulf Accountant</p>
                                        <p class="text-muted">
                                           Manage tax records,filings, and regional compliance
                                        </p>
                                        <div class="d-flex gap-4 small text-muted mb-3">
                                            <span>⏱ 3-4 hours</span>
                                            <span>👥 38,000+</span>
                                        </div>
                                        <div class="mt-auto">
                                            <a href="<?= base_url('pricing') ?>" class="btn btn-orange w-100">Start Simulation</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="sim-card h-100 d-flex flex-column">
                                    <div class="position-relative">
                                        <img src="<?= base_url('public/assets/frontend/new/images/Finance (1) (1).webp') ?>">
                                        <span class="level-badge">Advanced</span>
                                    </div>
                                    <div class="sim-body d-flex flex-column flex-grow-1">
                                        <h4 class="fw-bold">ESI & EPF</h4>
                                        <p class="text-orange">HR Executive</p>
                                        <p class="text-muted">
                                            Calculations of statutory contributions and periodic return filing
                                        </p>
                                        <div class="d-flex gap-4 small text-muted mb-3">
                                            <span>⏱ 2-3 hours</span>
                                            <span>👥 52,000+</span>
                                        </div>
                                        <div class="mt-auto">
                                            <a href="<?= base_url('pricing') ?>" class="btn btn-orange w-100">Start Simulation</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--<div class="carousel-item">-->
                    <!--    <div class="row g-4">-->

                            <!-- Card 4 -->
                    <!--       <div class="col-12 col-md-6 col-lg-4">-->
                    <!--            <div class="sim-card h-100 d-flex flex-column">-->
                    <!--                <div class="position-relative">-->
                    <!--                    <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c">-->
                    <!--                    <span class="level-badge">Advanced</span>-->
                    <!--                </div>-->
                    <!--                <div class="sim-body d-flex flex-column flex-grow-1">-->
                    <!--                    <h4 class="fw-bold">ESI & EPF</h4>-->
                    <!--                    <p class="text-orange">HR Executive</p>-->
                    <!--                    <p class="text-muted">-->
                    <!--                        Calculation of statutory contributions and periodic return filing-->
                    <!--                    </p>-->
                    <!--                    <div class="d-flex gap-4 small text-muted mb-3">-->
                    <!--                        <span>⏱ 2-3 hours</span>-->
                    <!--                        <span>👥 52,000+</span>-->
                    <!--                    </div>-->
                    <!--                    <div class="mt-auto">-->
                    <!--                        <a href="<?= base_url() ?>/" class="btn btn-orange w-100">Start Simulation</a>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                            <!-- card 2  --->
                    <!--        <div class="col-12 col-md-6 col-lg-4">-->
                    <!--            <div class="sim-card h-100 d-flex flex-column">-->
                    <!--                <div class="position-relative">-->
                    <!--                    <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c">-->
                    <!--                    <span class="level-badge">Advanced</span>-->
                    <!--                </div>-->
                    <!--                <div class="sim-body d-flex flex-column flex-grow-1">-->
                    <!--                    <h4 class="fw-bold">ESI & EPF</h4>-->
                    <!--                    <p class="text-orange">HR Executive</p>-->
                    <!--                    <p class="text-muted">-->
                    <!--                        Calculation of statutory contributions and periodic return filing-->
                    <!--                    </p>-->
                    <!--                    <div class="d-flex gap-4 small text-muted mb-3">-->
                    <!--                        <span>⏱ 2-3 hours</span>-->
                    <!--                        <span>👥 52,000+</span>-->
                    <!--                    </div>-->
                    <!--                    <div class="mt-auto">-->
                    <!--                        <a href="#" class="btn btn-orange w-100">Start Simulation</a>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                            <!-- card 3  --->
                    <!--        <div class="col-12 col-md-6 col-lg-4">-->
                    <!--            <div class="sim-card h-100 d-flex flex-column">-->
                    <!--                <div class="position-relative">-->
                    <!--                    <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c">-->
                    <!--                    <span class="level-badge">Advanced</span>-->
                    <!--                </div>-->
                    <!--                <div class="sim-body d-flex flex-column flex-grow-1">-->
                    <!--                    <h4 class="fw-bold">ESI & EPF</h4>-->
                    <!--                    <p class="text-orange">HR Executive</p>-->
                    <!--                    <p class="text-muted">-->
                    <!--                        Calculation of statutory contributions and periodic return filing-->
                    <!--                    </p>-->
                    <!--                    <div class="d-flex gap-4 small text-muted mb-3">-->
                    <!--                        <span>⏱ 2-3 hours</span>-->
                    <!--                        <span>👥 52,000+</span>-->
                    <!--                    </div>-->
                    <!--                    <div class="mt-auto">-->
                    <!--                        <a href="<?= base_url() ?>/" class="btn btn-orange w-100">Start Simulation</a>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->


                    <!--    </div>-->
                    <!--</div>-->

                </div>

                <!-- Navigation Arrows -->
                <!--<button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#simulationCarousel"-->
                <!--    data-bs-slide="prev">-->
                <!--    ‹-->
                <!--</button>-->

                <!--<button class="carousel-control-next custom-arrow" type="button" data-bs-target="#simulationCarousel"-->
                <!--    data-bs-slide="next">-->
                <!--    ›-->
                <!--</button>-->

            </div>

    </section>
    <!-- ======================  Steps  ========================== -->

    <section class="how-it-works-section py-5">
        <div class="container text-center">

            <h2 class="fw-bold mb-3">PracticePot is the bridge between education and career success</h2>
            <p class="text-muted mx-auto" style="max-width:850px;">
                Our job simulations build practical skills for real-world roles, offering a window into the
                company and a preview of the day-to-day experience. These simulations are open
                to everyone and entirely self-paced</p>


            <div class="row align-items-start justify-content-center position-relative py-5">

                <!-- STEP 1 -->
                <div class="col-lg-3 col-md-6 mb-5 step-wrapper">
                    <div class="step-number">1</div>
                    <h5 class="fw-semibold mt-4">Register for PracticePot</h5>
                    <p class="text-muted small">
                        Sign up and tell us a little about yourself.
                    </p>
                </div>

                <!-- STEP 2 -->
                <div class="col-lg-3 col-md-6 mb-5 step-wrapper">
                    <div class="step-number">2</div>
                    <h5 class="fw-semibold mt-4">Enroll in a Job Simulation</h5>
                    <p class="text-muted small">
                        Choose a package and dive into a series of practical,
                        real-world modules.
                    </p>
                </div>

                <!-- STEP 3 -->
                <div class="col-lg-3 col-md-6 mb-5 step-wrapper">
                    <div class="step-number">3</div>
                    <h5 class="fw-semibold mt-4">Access curated resources</h5>
                    <p class="text-muted small">
                        Access professional guides, templates, and hands-on projects
                        to help you master real-work skills.
                    </p>
                </div>

                <!-- STEP 4 -->
                <div class="col-lg-3 col-md-6 mb-5 step-wrapper">
                    <div class="step-number">4</div>
                    <h5 class="fw-semibold mt-4">Get Certified</h5>
                    <p class="text-muted small">
                        Earn a certificate and gain exclusive visibility with hiring teams.
                    </p>
                </div>

            </div>


            <!--<a href="<?= base_url('user') ?>" class="btn btn-orange " style="margin-top:-35px;">-->
            <!--    How PracticePot Works →-->
            <!--</a>-->


        </div>
    </section>

    <!-- careers  ------>
    <section class="transform-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <h2 class="fw-bold  mb-3 text-white" style="font-weight: 600 !important;padding-top:25px;">
                    Transforming careers through practice
                </h2>
                <!-- LEFT SIDE -->
                <div class="col-lg-6 text-white">



                    <p class="sub-text mb-5">
                        Join thousands of students who are building real-world skills and landing
                        their dream jobs
                    </p>

                    <!-- Stat Box 1 -->
                    <div class="stat-box mb-4 d-flex align-items-center">
                        <div class="icon-box me-4">
                            ↗
                        </div>
                        <div>
                            <h4 class="mb-1 stat-title">
                                4.3x <span class="highlight">more likely</span>
                            </h4>
                            <p class="mb-0 stat-sub">
                                to land a job after participating in a job simulation
                            </p>
                        </div>
                    </div>

                    <!-- Stat Box 2 -->
                    <div class="stat-box mb-4 d-flex align-items-center">
                        <div class="icon-box me-4">
                            📄
                        </div>
                        <div>
                            <h4 class="mb-1 stat-title">
                                100+ <span class="highlight">job simulations</span>
                            </h4>
                            <p class="mb-0 stat-sub">
                                and 125+ employers across diverse industries and careers
                            </p>
                        </div>
                    </div>

                    <!-- Stat Box 3 -->
                    <div class="stat-box mb-5 d-flex align-items-center">
                        <div class="icon-box me-4">
                            👥
                        </div>
                        <div>
                            <h4 class="mb-1 stat-title">
                                50K+ <span class="highlight">students</span>
                            </h4>
                            <p class="mb-0 stat-sub">
                                have signed up to PracticePot
                            </p>
                        </div>
                    </div>

                    <a href="<?= base_url('pricing') ?>" class="btn btn-orange px-4 py-3">
                        Find a Job Simulation →
                    </a>

                </div>


                <!-- RIGHT IMAGE --> 
                <div class="col-lg-6 mt-5 mt-lg-0 position-relative img-left" >

                    <div class="image-wrapper">
                        <img src="<?= base_url('public/assets/frontend/new/images/men.png') ?>"
                            class="img-fluid rounded-4" alt="">
                    </div>

                    <!-- Floating Success Box -->
                    <div class="success-box d-flex align-items-center">
                        <div class="icon-box-small me-3">
                            ↗
                        </div>
                        <div>
                            <h5 class="mb-0">98%</h5>
                            <small>Success Rate</small>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- level up -->

    <!--<section class=" text-center section-padding" style="background:#fff;">-->
    <!--    <div class="container">-->

            <!-- Heading -->
    <!--        <h2 class="fw-bold mb-3" style="font-size:42px;">-->
    <!--            Level Up Your Compliance Filing Skills-->
    <!--        </h2>-->

    <!--        <p class="text-muted fs-5 mb-5">-->
    <!--            Train on India’s most accurate simulator. Practice mistakes here, not in your clients’ filings.-->
    <!--        </p>-->

            <!-- Stats Cards -->
    <!--        <div class="row justify-content-center g-4 mb-5">-->

                <!-- Card 1 -->
    <!--            <div class="col-md-4">-->
    <!--                <div class="p-5 bg-white rounded-4 shadow-sm h-100">-->
    <!--                    <div class="mb-4">-->
    <!--                        <div class="mx-auto d-flex align-items-center justify-content-center"-->
    <!--                            style="width:70px;height:70px;background:#f28c18;border-radius:18px;">-->
    <!--                            <i class="bi bi-award text-white fs-3"></i>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <h3 class="fw-bold highlight display-5">50,000+</h3>-->
    <!--                    <p class="mb-0 text-muted">Professionals Trained</p>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Card 2 -->
    <!--            <div class="col-md-4">-->
    <!--                <div class="p-5 bg-white rounded-4 shadow-sm h-100">-->
    <!--                    <div class="mb-4">-->
    <!--                        <div class="mx-auto d-flex align-items-center justify-content-center"-->
    <!--                            style="width:70px;height:70px;background:#f28c18;border-radius:18px;">-->
    <!--                            <i class="bi bi-check-circle text-white fs-3"></i>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <h3 class="fw-bold highlight display-5">100%</h3>-->
    <!--                    <p class="mb-0 text-muted">Accurate Simulations</p>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Card 3 -->
    <!--            <div class="col-md-4">-->
    <!--                <div class="p-5 bg-white rounded-4 shadow-sm h-100">-->
    <!--                    <div class="mb-4">-->
    <!--                        <div class="mx-auto d-flex align-items-center justify-content-center"-->
    <!--                            style="width:70px;height:70px;background:#f28c18;border-radius:18px;">-->
    <!--                            <i class="bi bi-clock text-white fs-3"></i>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <h3 class="fw-bold highlight display-5">24/7</h3>-->
    <!--                    <p class="mb-0 text-muted">Practice Access</p>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--        </div>-->

            <!-- Buttons -->
    <!--        <div class="d-flex justify-content-center gap-3 mb-5">-->
    <!--            <a href="<?= base_url('pricing') ?>" class="btn get-started-btn">Try Now</a>-->
    <!--            <a href="<?= base_url('pricing') ?>" class="btn btn-outline-custom">Get Full Access</a>-->
    <!--        </div>-->

            <!-- Bottom Highlight Box -->
    <!--        <div class="mx-auto p-4 rounded-4 shadow-sm" style="background: #FFF8F0; max-width:1100px;">-->
    <!--            <p class="mb-0 fs-5">-->
    <!--                <span class="highlight fw-bold">78%</span>-->
    <!--                of businesses face penalties due to filing errors.-->
    <!--                Practice now to avoid costly mistakes.-->
    <!--            </p>-->
    <!--        </div>-->

    <!--    </div>-->
    <!--</section>-->

    <!-- employers  --->

    <section class="employers-section">

        <!-- Background building image (left side, desktop only) -->
        <img src="<?= base_url('public/assets/frontend/new/images/e8d42b70559aa96f2237b874c2cd1606a000f92f.png') ?>"
            alt="Building" class="bg-building" />

        <!-- Main layout row -->
        <div class="employers-layout">

            <!-- Cream card (overlaps the building image) -->
            <div class="cream-card">
                <h2>Employers who<br>look past the<br>resume.</h2>
            </div>

            <!-- Brands grid (right ~60%) -->
            <div class="brands-col">
                <div class="logos-grid">

                    <!-- Walmart -->
                    <div class="logo-card">
                        <img src="<?= base_url('public/assets/frontend/new/images/walmart.png') ?>"
                            alt="Walmart Global Tech" />
                        <span>SEE PROGRAMS</span>
                    </div>

                    <!-- White & Case -->
                    <div class="logo-card">
                        <img src="<?= base_url('public/assets/frontend/new/images/white.png') ?>"
                            alt="White & Case" />
                        <span>SEE PROGRAMS</span>
                    </div>

                    <!-- JP Morgan -->
                    <div class="logo-card">
                        <img src="<?= base_url('public/assets/frontend/new/images/jpm.png') ?>"
                            alt="JPMorgan Chase" />
                        <span>SEE PROGRAMS</span>
                    </div>

                    <!-- Red Bull -->
                    <div class="logo-card">
                        <img src="<?= base_url('public/assets/frontend/new/images/redbull.png') ?>"
                            alt="Red Bull" />
                        <span>SEE PROGRAMS</span>
                    </div>

                    <!-- BCG -->
                    <div class="logo-card">
                        <img src="<?= base_url('public/assets/frontend/new/images/bcg.png') ?>" alt="BCG" />
                        <span>SEE PROGRAMS</span>
                    </div>

                    <!-- Bank of America -->
                    <div class="logo-card">
                        <img src="<?= base_url('public/assets/frontend/new/images/bank.png') ?>"
                            alt="Bank of America" />
                        <span>SEE PROGRAMS</span>
                    </div>

                </div>
            </div>

        </div>
    </section>


     <!-- ================= TESTIMONIALS ================= -->
   <section class="testimonials-section">
        <div class="container">

            <!-- Quote badge -->
            <div class="quote-badge">
                <!-- quotation mark SVG -->
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z" />
                </svg>
            </div>

            <!-- Heading -->
            <h2 class="section-titles">Success Stories from Our Students</h2>
            <p class="section-subtitle">Hear from students who transformed their careers with PracticePot</p>

            <!-- Cards row -->
            <div class="row g-4">

                <!-- Card 1 — Priya Sharma -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="t-card">
                        <div>
                            <div class="stars">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                            <p class="t-quote">"The Journal entry practice module made me a real expert in passing entries with speed and accuracy. It really improved my confidence to attend interviews. Thank you Practicepot !!
"</p>
                        </div>
                        <div class="t-author">
                            <div class="avatar-wrap">
                                <img src="<?php echo base_url(); ?>/public/assets/images/01.jpg.jpeg" alt="Priya Sharma" />
                                <div class="tick">
                                    <svg viewBox="0 0 12 12">
                                        <path d="M2 6l3 3 5-5" stroke="#fff" stroke-width="1.8" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="t-author-info">
                                <div class="name">Priya Menon</div>
                                <!--<div class="role">Senior Auditor at Deloitte</div>-->
                                <!--<div class="college">Shri Ram College of Commerce</div>-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 — Rahul Verma -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="t-card">
                        <div>
                            <div class="stars">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                            <p class="t-quote">""The UAE VAT simulation module is exceptional! It prepared me for real-world tax scenarios and gave me confidence in my skills during client meetings." 
"</p>
                        </div>
                        <div class="t-author">
                            <div class="avatar-wrap">
                                <img src="<?php echo base_url(); ?>/public/assets/images/03.jpg.jpeg" alt="Rahul Verma" />
                                <div class="tick">
                                    <svg viewBox="0 0 12 12">
                                        <path d="M2 6l3 3 5-5" stroke="#fff" stroke-width="1.8" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="t-author-info">
                                <div class="name">Rahul Verma</div>
                                <!--<div class="role">Tax Consultant at PwC</div>-->
                                <!--<div class="college">Delhi University</div>-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 — Ananya Patel -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="t-card">
                        <div>
                            <div class="stars">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                            <p class="t-quote">"PracticePot helped me to upgrade my CMA US knowledge with Indian law compliances such as GST, TDS, ESI and EPF - it really gave me an edge in my career.
"</p>
                        </div>
                        <div class="t-author">
                            <div class="avatar-wrap">
                                <img src="<?php echo base_url(); ?>/public/assets/images/02.jpg.jpeg" alt="Ananya Patel" />
                                <div class="tick">
                                    <svg viewBox="0 0 12 12">
                                        <path d="M2 6l3 3 5-5" stroke="#fff" stroke-width="1.8" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="t-author-info">
                                <div class="name">Ananya M.V</div>
                                <!--<div class="role">Forensic Accountant at EY</div>-->
                                <!--<div class="college">Narsee Monjee College</div>-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 — Arjun Reddy -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="t-card">
                        <div>
                            <div class="stars">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                            <p class="t-quote">"The practical experience I gained in ESI and EPF through PracticePot was invaluable. It made my resume stand out and gave me real skills Big 4 firms were looking for."
"</p>
                        </div>
                        <div class="t-author">
                            <div class="avatar-wrap">
                                <img src="<?php echo base_url(); ?>/public/assets/images/04.jpg.jpeg" alt="Arjun Reddy" />
                                <div class="tick">
                                    <svg viewBox="0 0 12 12">
                                        <path d="M2 6l3 3 5-5" stroke="#fff" stroke-width="1.8" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="t-author-info">
                                <div class="name">Arjun Raj</div>
                                <!--<div class="role">Financial Auditor at KPMG</div>-->
                                <!--<div class="college">Loyola College Chennai</div>-->
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /cards row -->

            <!-- Stats bar -->
            <!--<div class="stats-bar">-->
            <!--    <div class="stat-item">-->
            <!--        <div class="stat-num">4.9/5</div>-->
            <!--        <div class="stat-label">Average Rating</div>-->
            <!--    </div>-->
            <!--    <div class="stat-item">-->
            <!--        <div class="stat-num orange">50,000+</div>-->
            <!--        <div class="stat-label">Success Stories</div>-->
            <!--    </div>-->
            <!--    <div class="stat-item">-->
            <!--        <div class="stat-num">95%</div>-->
            <!--        <div class="stat-label">Job Placement Rate</div>-->
            <!--    </div>-->
            <!--</div>-->

        </div>
    </section>

    <!-- ================= FAQ ================= -->
    <section class="faq-section">
        <div class="container">

            <!-- Icon badge -->
            <div class="faq-icon-badge">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z" />
                </svg>
            </div>

            <!-- Heading -->
            <h2 class="faq-title">Frequently Asked Questions</h2>
            <p class="faq-subtitle">Got questions? We've got answers. Find everything you need to know<br>about
                PracticePot.</p>

            <!-- FAQ List -->
            <div class="faq-list">

                <!-- Q1 — open by default -->
                <div class="faq-item open">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>What is PracticePot and how does it work?</span>
                        <div class="faq-toggle">
                            <svg viewBox="0 0 16 16" fill="none">
                                <line x1="8" y1="2" x2="8" y2="14" class="bar-v" />
                                <line x1="2" y1="8" x2="14" y2="8" />
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>PracticePot is an innovative educational platform that provides hands-on job simulations and
                            practical training in accounting and Compliance filing. Our platform allows you to practice
                            real-world scenarios in a risk-free environment, helping you to build confidence and
                            expertise before entering the workforce.</p>
                    </div>
                </div>

                <!-- Q2 -->
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>Are the simulations based on real Indian tax laws?</span>
                        <div class="faq-toggle">
                            <svg viewBox="0 0 16 16" fill="none">
                                <line x1="8" y1="2" x2="8" y2="14" class="bar-v" />
                                <line x1="2" y1="8" x2="14" y2="8" />
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, all simulations on PracticePot are built directly on current Indian tax laws and guidelines. Our content is regularly updated to reflect the latest amendments and notifications issued, ensuring your practice is always aligned with real-world compliance requirements.</p>
                    </div>
                </div>

                <!-- Q3 -->
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>Do I get a certificate after completing simulations?</span>
                        <div class="faq-toggle">
                            <svg viewBox="0 0 16 16" fill="none">
                                <line x1="8" y1="2" x2="8" y2="14" class="bar-v" />
                                <line x1="2" y1="8" x2="14" y2="8" />
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Absolutely! Upon successfully completing a simulation module, you will receive a verified
                            certificate of completion from PracticePot. These certificates are recognised by partner
                            employers and can be added to your LinkedIn profile or resume to demonstrate your practical
                            skills.</p>
                    </div>
                </div>

                <!-- Q4 -->
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>Is PracticePot suitable for CA students and professionals?</span>
                        <div class="faq-toggle">
                            <svg viewBox="0 0 16 16" fill="none">
                                <line x1="8" y1="2" x2="8" y2="14" class="bar-v" />
                                <line x1="2" y1="8" x2="14" y2="8" />
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Our programs are suitable for anyone interested in mastering compliance filings and simulations. There are no specific background requirements to enroll. Whether you are a graduate, a student pursuing a professional course, or a working professional looking to upskill, you can join the program and learn the modules effectively. </p>
                    </div>
                </div>

            </div><!-- /faq-list -->

            <!-- View more -->
            <!--<div class="view-more-wrap">-->
            <!--    <a href="<?= base_url('user') ?>" class="view-more-btn">View more</a>-->
            <!--</div>-->

        </div>
    </section>

    <!--    cta -->
    <section class="cta-section">
        <div class="cta-card">
            <h2>Still have questions?</h2>
            <p>Our support team is here to help you succeed</p>
            <a href="<?= base_url('contact') ?>" class="cta-btn">Contact Support</a>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="site-footer">
  <div class="container">
    <div class="row">

      <!-- Brand column -->
      <div class="col-12 col-md-4 col-lg-4 footer-brand">
        <div class="logo-wrap">
          <img src="<?= base_url('public/assets/frontend/new/images/fin-white.png') ?>" alt="PracticePot Logo"/>
        </div>
        <p>Practicepot offers risk-free, expert-led simulations for Indian commerce students to master real-world accounting and tax filing</p>
        <div class="social-icons">
          <!-- X (Twitter) -->
          <a href="#" aria-label="X">
            <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.748l7.73-8.835L1.254 2.25H8.08l4.261 5.632 5.903-5.632zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
          <!-- LinkedIn -->
          <a href="#" aria-label="LinkedIn">
            <svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
          <!-- Facebook -->
          <a href="#" aria-label="Facebook">
            <svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
        </div>
      </div>

      <!-- Spacer col -->
      <div class="col-12 col-md-8 col-lg-8">
        <div class="row">

          <!-- Product -->
          <div class="col-6 col-sm-3 footer-nav-col">
            <h6>Product</h6>
            <ul>
              <li><a href="#">Features</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>

          <!-- Company -->
          <div class="col-6 col-sm-3 footer-nav-col">
            <h6>Company</h6>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Press</a></li>
            </ul>
          </div>

          <!-- Resources -->
          <div class="col-6 col-sm-3 footer-nav-col mt-4 mt-sm-0">
            <h6>Resources</h6>
            <ul>
              <li><a href="#">Help Center</a></li>
              <li><a href="#">Community</a></li>
              <li><a href="#">Guides</a></li>
              <li><a href="#">Webinars</a></li>
            </ul>
          </div>

          <!-- Legal -->
          <div class="col-6 col-sm-3 footer-nav-col mt-4 mt-sm-0">
            <h6>Legal</h6>
            <ul>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Security</a></li>
              <li><a href="#">Cookies</a></li>
            </ul>
          </div>

        </div>
      </div>

    </div><!-- /row -->

    <!-- Divider -->
    <hr class="footer-divider"/>

    <!-- Bottom bar -->
    <div class="footer-bottom">
      <span class="copy">© 2025 Practicepot. All rights reserved.</span>
      <div class="bottom-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="#">Cookie Policy</a>
      </div>
    </div>

  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleFAQ(questionEl) {
            const item = questionEl.closest('.faq-item');
            const isOpen = item.classList.contains('open');

            // Close all
            document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('open'));

            // Open clicked if it was closed
            if (!isOpen) {
                item.classList.add('open');
            }
        }
       

 
function sendWhatsApp() {

    let phone = "918593939983";
    let message = "Hai, I would like to know more aboutPracticePot";

    let url = "https://wa.me/" + phone + "?text=" + encodeURIComponent(message);

    window.open(url, '_blank');
} 
    </script>
</body>

</html>