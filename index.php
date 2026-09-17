<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aisiyah Nur Azizah — Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --serenade: #9bb9d3;
            --serenade-dark: #6689a7;
            --serenade-light: #e8f1f7;

            --rose: #e7b7c8;
            --rose-dark: #c98da7;
            --rose-light: #f8e9ef;

            --cream: #faf8f6;
            --white: #ffffff;
            --dark: #26333d;
            --gray: #68737c;
            --line: #dfe5e9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "DM Sans", sans-serif;
            background: var(--cream);
            color: var(--dark);
            line-height: 1.7;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            width: 100%;
            display: block;
        }

        /* NAVIGATION */

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 20px 7%;

            background: rgba(250, 248, 246, 0.88);
            backdrop-filter: blur(12px);

            border-bottom: 1px solid rgba(38, 51, 61, 0.06);
        }

        .logo {
            font-family: "Playfair Display", serif;
            font-size: 22px;
            font-weight: 600;
            color: var(--serenade-dark);
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
            font-size: 14px;
        }

        .nav-links a {
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: var(--rose-dark);
        }

        /* HERO */

        .hero {
            min-height: 100vh;

            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            align-items: center;

            padding: 130px 8% 80px;

            background:
                radial-gradient(circle at 90% 15%, var(--rose-light), transparent 30%),
                radial-gradient(circle at 15% 90%, var(--serenade-light), transparent 35%),
                var(--cream);
        }

        .hero-text {
            max-width: 680px;
        }

        .small-label {
            display: inline-block;

            padding: 7px 15px;
            margin-bottom: 20px;

            border-radius: 50px;

            background: var(--rose-light);
            color: var(--rose-dark);

            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .hero h1 {
            font-family: "Playfair Display", serif;
            font-size: clamp(50px, 7vw, 92px);
            line-height: 0.98;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .hero h1 span {
            color: var(--serenade-dark);
        }

        .hero-description {
            max-width: 570px;
            color: var(--gray);
            font-size: 17px;
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .button {
            display: inline-block;
            padding: 13px 22px;
            border-radius: 7px;

            font-size: 14px;
            font-weight: 600;

            transition: 0.3s;
        }

        .button-primary {
            background: var(--serenade-dark);
            color: white;
        }

        .button-primary:hover {
            background: var(--dark);
            transform: translateY(-2px);
        }

        .button-outline {
            border: 1px solid var(--line);
            background: white;
        }

        .button-outline:hover {
            border-color: var(--rose-dark);
            color: var(--rose-dark);
        }

        /* HERO CARD */

        .hero-visual {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-card {
            width: min(360px, 85%);
            background: white;

            padding: 15px;

            box-shadow: 0 25px 60px rgba(72, 92, 105, 0.13);

            transform: rotate(2deg);
        }

        .profile-photo {
            height: 430px;

            display: flex;
            align-items: flex-end;

            padding: 25px;

            background:
                linear-gradient(
                    135deg,
                    var(--serenade),
                    var(--rose)
                );

            position: relative;
            overflow: hidden;
        }

        .profile-photo::before {
            content: "";
            position: absolute;

            width: 220px;
            height: 220px;

            border-radius: 50%;

            background: rgba(255,255,255,0.25);

            top: -70px;
            right: -70px;
        }

        .profile-photo::after {
            content: "AIS";
            position: absolute;

            font-family: "Playfair Display", serif;
            font-size: 120px;

            color: rgba(255,255,255,0.18);

            top: 70px;
            left: 40px;
        }

        .profile-caption {
            position: relative;
            z-index: 2;

            background: rgba(255,255,255,0.88);

            padding: 15px;
            width: 100%;
        }

        .profile-caption strong {
            display: block;
            font-family: "Playfair Display", serif;
            font-size: 21px;
        }

        .profile-caption span {
            font-size: 12px;
            color: var(--gray);
        }

        /* GENERAL */

        section {
            padding: 100px 8%;
        }

        .section-heading {
            margin-bottom: 50px;
        }

        .section-number {
            color: var(--rose-dark);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .section-heading h2 {
            font-family: "Playfair Display", serif;
            font-size: clamp(35px, 5vw, 55px);
            line-height: 1.1;
            margin-top: 8px;
        }

        /* ABOUT */

        .about {
            background: white;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
        }

        .about-text p {
            color: var(--gray);
            margin-bottom: 18px;
        }

        .quote {
            border-left: 3px solid var(--rose);
            padding-left: 25px;
            font-family: "Playfair Display", serif;
            font-size: 25px;
            line-height: 1.5;
            margin-top: 30px;
        }

        .personal-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
        }

        .info-item {
            padding: 20px 0;
            border-bottom: 1px solid var(--line);
        }

        .info-item small {
            display: block;
            color: var(--gray);
            font-size: 12px;
            margin-bottom: 3px;
        }

        .info-item strong {
            font-size: 14px;
        }

        /* SKILLS */

        .skills {
            background: var(--serenade-light);
        }

        .skill-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .skill-card {
            background: white;
            padding: 30px;
            min-height: 190px;

            border: 1px solid rgba(102,137,167,0.12);

            transition: 0.3s;
        }

        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(70, 90, 105, 0.09);
        }

        .skill-icon {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-bottom: 18px;

            background: var(--rose-light);
            color: var(--rose-dark);

            border-radius: 50%;
            font-family: "Playfair Display", serif;
        }

        .skill-card h3 {
            font-family: "Playfair Display", serif;
            font-size: 21px;
            margin-bottom: 8px;
        }

        .skill-card p {
            font-size: 13px;
            color: var(--gray);
        }

        /* PORTFOLIO */

        .portfolio {
            background: var(--cream);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 35px;
        }

        .project {
            background: white;
            overflow: hidden;
        }

        .project-image {
            height: 340px;
            position: relative;
            overflow: hidden;
        }

        .project-image.one {
            background: linear-gradient(135deg, #b6cee0, #e8b9ca);
        }

        .project-image.two {
            background: linear-gradient(135deg, #d9b6c7, #8faec8);
        }

        .project-image.three {
            background: linear-gradient(135deg, #c1d6e5, #efc9d8);
        }

        .project-image.four {
            background: linear-gradient(135deg, #e6c3d0, #9ab8cf);
        }

        .project-number {
            position: absolute;

            top: 25px;
            left: 25px;

            font-family: "Playfair Display", serif;
            font-size: 70px;

            color: rgba(255,255,255,0.45);
        }

        .project-shape {
            position: absolute;

            width: 180px;
            height: 180px;

            border-radius: 50%;

            background: rgba(255,255,255,0.32);

            right: 15%;
            top: 25%;
        }

        .project-info {
            padding: 25px;
        }

        .project-category {
            font-size: 11px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--rose-dark);
            font-weight: 700;
        }

        .project-info h3 {
            font-family: "Playfair Display", serif;
            font-size: 25px;
            margin: 5px 0;
        }

        .project-info p {
            color: var(--gray);
            font-size: 13px;
        }

        /* EXPERIENCE */

        .experience {
            background: white;
        }

        .timeline {
            max-width: 900px;
        }

        .timeline-item {
            display: grid;
            grid-template-columns: 180px 1fr;
            gap: 40px;

            padding: 30px 0;

            border-top: 1px solid var(--line);
        }

        .timeline-date {
            color: var(--serenade-dark);
            font-size: 13px;
            font-weight: 700;
        }

        .timeline-content h3 {
            font-family: "Playfair Display", serif;
            font-size: 24px;
        }

        .timeline-content h4 {
            color: var(--rose-dark);
            font-size: 13px;
            margin: 3px 0 10px;
        }

        .timeline-content p {
            color: var(--gray);
            font-size: 14px;
        }

        /* EDUCATION */

        .education {
            background: var(--rose-light);
        }

        .education-box {
            background: white;
            padding: 40px;

            display: grid;
            grid-template-columns: 160px 1fr;
            gap: 35px;
        }

        .education-year {
            color: var(--serenade-dark);
            font-weight: 700;
        }

        .education-box h3 {
            font-family: "Playfair Display", serif;
            font-size: 27px;
        }

        .education-box p {
            color: var(--gray);
        }

        /* CONTACT */

        .contact {
            background: var(--dark);
            color: white;
            text-align: center;
        }

        .contact .section-number {
            color: var(--rose);
        }

        .contact h2 {
            font-family: "Playfair Display", serif;
            font-size: clamp(40px, 6vw, 70px);
            max-width: 800px;
            margin: 10px auto 20px;
        }

        .contact > p {
            max-width: 550px;
            margin: auto;
            color: #c2cbd0;
        }

        .contact-links {
            margin-top: 35px;

            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .contact-button {
            padding: 12px 20px;

            border: 1px solid rgba(255,255,255,0.2);

            border-radius: 5px;

            font-size: 13px;

            transition: 0.3s;
        }

        .contact-button:hover {
            background: white;
            color: var(--dark);
        }

        /* FOOTER */

        footer {
            background: var(--dark);
            color: #89949b;

            padding: 25px 8%;

            border-top: 1px solid rgba(255,255,255,0.08);

            display: flex;
            justify-content: space-between;

            font-size: 12px;
        }

        /* RESPONSIVE */

        @media (max-width: 850px) {

            .nav-links {
                display: none;
            }

            .hero {
                grid-template-columns: 1fr;
                gap: 60px;
            }

            .hero-visual {
                order: -1;
            }

            .about-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .skill-grid {
                grid-template-columns: 1fr 1fr;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
            }

            .timeline-item {
                grid-template-columns: 1fr;
                gap: 8px;
            }
        }

        @media (max-width: 550px) {

            nav {
                padding: 17px 5%;
            }

            section {
                padding: 70px 6%;
            }

            .hero {
                padding: 110px 6% 60px;
            }

            .skill-grid {
                grid-template-columns: 1fr;
            }

            .personal-info {
                grid-template-columns: 1fr;
            }

            .education-box {
                grid-template-columns: 1fr;
                gap: 10px;
                padding: 30px;
            }

            footer {
                flex-direction: column;
                gap: 5px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVIGATION -->

    <nav>
        <a href="#home" class="logo">AN.A</a>

        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>


    <!-- HERO -->

    <section class="hero" id="home">

        <div class="hero-text">

            <span class="small-label">
                VISUAL DESIGN • ILLUSTRATION • CREATIVE
            </span>

            <h1>
                Aisiyah<br>
                <span>Nur Azizah.</span>
            </h1>

            <p class="hero-description">
                Graphic design student yang tertarik pada ilustrasi,
                visual identity, editorial design, dan eksplorasi
                berbagai bentuk visual. Saya senang mengubah ide
                sederhana menjadi karya yang memiliki karakter.
            </p>

            <div class="hero-buttons">
                <a href="#portfolio" class="button button-primary">
                    Lihat Portfolio
                </a>

                <a href="#contact" class="button button-outline">
                    Hubungi Saya
                </a>
            </div>

        </div>


        <div class="hero-visual">

            <div class="profile-card">

                <div class="profile-photo">

                    <div class="profile-caption">
                        <strong>Aisiyah Nur Azizah</strong>
                        <span>Visual Designer & Illustrator</span>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ABOUT -->

    <section class="about" id="about">

        <div class="section-heading">
            <span class="section-number">01 — ABOUT ME</span>
            <h2>Sedikit tentang<br>saya.</h2>
        </div>


        <div class="about-grid">

            <div class="about-text">

                <p>
                    Halo, saya Aisiyah Nur Azizah. Saya merupakan
                    seorang pelajar di bidang Desain Komunikasi Visual
                    yang memiliki ketertarikan pada dunia kreatif,
                    terutama ilustrasi dan desain grafis.
                </p>

                <p>
                    Bagi saya, desain bukan hanya tentang membuat
                    sesuatu terlihat bagus. Setiap warna, bentuk,
                    tipografi, dan komposisi memiliki alasan serta
                    dapat digunakan untuk menyampaikan sebuah cerita.
                </p>

                <p>
                    Saya juga terbuka untuk mempelajari hal-hal baru
                    dan senang mengembangkan kemampuan melalui proyek
                    pribadi, tugas sekolah, maupun berbagai kegiatan
                    kreatif.
                </p>

                <div class="quote">
                    “Good design makes an idea easier to remember.”
                </div>

            </div>


            <div class="personal-info">

                <div class="info-item">
                    <small>Nama</small>
                    <strong>Aisiyah Nur Azizah</strong>
                </div>

                <div class="info-item">
                    <small>Tempat, Tanggal Lahir</small>
                    <strong>Kediri, 5 Desember</strong>
                </div>

                <div class="info-item">
                    <small>Bidang</small>
                    <strong>Desain Komunikasi Visual</strong>
                </div>

                <div class="info-item">
                    <small>Fokus</small>
                    <strong>Graphic Design & Illustration</strong>
                </div>

                <div class="info-item">
                    <small>Domisili</small>
                    <strong>Kediri, Jawa Timur</strong>
                </div>

                <div class="info-item">
                    <small>Status</small>
                    <strong>Student / Freelance Illustrator</strong>
                </div>

            </div>

        </div>

    </section>


    <!-- SKILLS -->

    <section class="skills" id="skills">

        <div class="section-heading">
            <span class="section-number">02 — WHAT I DO</span>
            <h2>Skills &<br>interests.</h2>
        </div>


        <div class="skill-grid">

            <div class="skill-card">

                <div class="skill-icon">01</div>

                <h3>Graphic Design</h3>

                <p>
                    Poster, layout, social media design,
                    typography, dan visual communication.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">02</div>

                <h3>Illustration</h3>

                <p>
                    Digital illustration, character design,
                    visual storytelling, dan artwork.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">03</div>

                <h3>Branding</h3>

                <p>
                    Eksplorasi identitas visual, logo,
                    warna, tipografi, dan brand concept.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">04</div>

                <h3>Layout</h3>

                <p>
                    Editorial layout, composition,
                    booklet, katalog, dan portfolio.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">05</div>

                <h3>Digital Art</h3>

                <p>
                    Eksplorasi warna, lighting, bentuk,
                    texture, dan berbagai digital artwork.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">06</div>

                <h3>Creative Direction</h3>

                <p>
                    Mengembangkan konsep visual dari ide awal
                    hingga menjadi sebuah karya yang utuh.
                </p>

            </div>

        </div>

    </section>


    <!-- PORTFOLIO -->

    <section class="portfolio" id="portfolio">

        <div class="section-heading">
            <span class="section-number">03 — SELECTED WORKS</span>
            <h2>Some things<br>I’ve made.</h2>
        </div>


        <div class="portfolio-grid">


            <article class="project">

                <div class="project-image one">

                    <span class="project-number">01</span>

                    <div class="project-shape"></div>

                </div>

                <div class="project-info">

                    <span class="project-category">
                        Illustration
                    </span>

                    <h3>Character Illustration</h3>

                    <p>
                        Eksplorasi desain karakter dengan pendekatan
                        warna pastel dan visual storytelling.
                    </p>

                </div>

            </article>


            <article class="project">

                <div class="project-image two">

                    <span class="project-number">02</span>

                    <div class="project-shape"></div>

                </div>

                <div class="project-info">

                    <span class="project-category">
                        Graphic Design
                    </span>

                    <h3>Poster Series</h3>

                    <p>
                        Seri poster dengan permainan tipografi,
                        bentuk geometris, dan warna kontras.
                    </p>

                </div>

            </article>


            <article class="project">

                <div class="project-image three">

                    <span class="project-number">03</span>

                    <div class="project-shape"></div>

                </div>

                <div class="project-info">

                    <span class="project-category">
                        Branding
                    </span>

                    <h3>Small Brand Identity</h3>

                    <p>
                        Konsep identitas visual untuk sebuah
                        brand fiktif dengan pendekatan sederhana
                        dan friendly.
                    </p>

                </div>

            </article>


            <article class="project">

                <div class="project-image four">

                    <span class="project-number">04</span>

                    <div class="project-shape"></div>

                </div>

                <div class="project-info">

                    <span class="project-category">
                        Editorial
                    </span>

                    <h3>Mini Magazine</h3>

                    <p>
                        Eksplorasi layout editorial melalui
                        kombinasi foto, ilustrasi, dan tipografi.
                    </p>

                </div>

            </article>

        </div>

    </section>


    <!-- EXPERIENCE -->

    <section class="experience" id="experience">

        <div class="section-heading">

            <span class="section-number">
                04 — EXPERIENCE
            </span>

            <h2>Things I've<br>worked on.</h2>

        </div>


        <div class="timeline">


            <div class="timeline-item">

                <div class="timeline-date">
                    2024 — NOW
                </div>

                <div class="timeline-content">

                    <h3>Freelance Illustrator</h3>

                    <h4>Independent Project</h4>

                    <p>
                        Mengerjakan ilustrasi berdasarkan brief,
                        melakukan komunikasi dengan klien,
                        revisi artwork, hingga proses finalisasi.
                    </p>

                </div>

            </div>


            <div class="timeline-item">

                <div class="timeline-date">
                    2024 — NOW
                </div>

                <div class="timeline-content">

                    <h3>Personal Design Projects</h3>

                    <h4>Creative Practice</h4>

                    <p>
                        Membuat berbagai proyek desain pribadi
                        untuk mengembangkan kemampuan ilustrasi,
                        poster, branding, dan visual composition.
                    </p>

                </div>

            </div>


            <div class="timeline-item">

                <div class="timeline-date">
                    2023 — NOW
                </div>

                <div class="timeline-content">

                    <h3>Design Competition</h3>

                    <h4>Creative Competition</h4>

                    <p>
                        Mengikuti beberapa kegiatan dan kompetisi
                        kreatif sebagai pengalaman untuk mengasah
                        kemampuan desain dan mengembangkan ide.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- EDUCATION -->

    <section class="education">

        <div class="section-heading">

            <span class="section-number">
                05 — EDUCATION
            </span>

            <h2>My learning<br>journey.</h2>

        </div>


        <div class="education-box">

            <div class="education-year">
                CURRENT
            </div>

            <div>

                <h3>Desain Komunikasi Visual</h3>

                <p>
                    Fokus pembelajaran meliputi desain grafis,
                    ilustrasi, fotografi, tipografi, layout,
                    branding, dan komunikasi visual.
                </p>

            </div>

        </div>

    </section>


    <!-- CONTACT -->

    <section class="contact" id="contact">

        <span class="section-number">
            06 — LET'S CONNECT
        </span>

        <h2>
            Have an idea?<br>
            Let's make something.
        </h2>

        <p>
            Jika kamu tertarik untuk bekerja sama,
            berdiskusi mengenai desain, atau sekadar
            ingin melihat karya lainnya, jangan ragu
            untuk menghubungi saya.
        </p>


        <div class="contact-links">

            <a href="#" class="contact-button">
                Instagram
            </a>

            <a href="mailto:emailkamu@example.com"
               class="contact-button">
                Email
            </a>

            <a href="#" class="contact-button">
                WhatsApp
            </a>

        </div>

    </section>


    <!-- FOOTER -->

    <footer>

        <span>
            © 2026 Aisiyah Nur Azizah
        </span>

        <span>
            Designed & illustrated with care.
        </span>

    </footer>


</body>
</html>