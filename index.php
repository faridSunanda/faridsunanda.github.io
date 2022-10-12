<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font By Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;700;900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Local Style -->
    <title>Farid Sunanda</title>
    <style>
        /* Basic----------------------------- */
        html {
            scroll-behavior: smooth;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lexend', sans-serif;
            background-color: rgb(22, 21, 21);
            color: aliceblue;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        .container {
            width: 80%;
            margin: auto;
        }

        .title {
            color: aliceblue;
            width: 100%;
            padding: 10px;
            text-align: center;
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .title span {
            color: #5271ff;
        }

        /* Basic End----------------------------- */


        /* Header------------------------------ */
        header {
            background-color: rgba(0, 0, 0, 0.5);
            color: aliceblue;
            width: 100%;
            padding: 10px;
            display: flex;
            position: fixed;
            top: 0;
            z-index: 99;
        }

        header .logo-web {
            width: 40%;
            font-size: 2rem;
            font-weight: bold;
            padding: 10px;
        }

        header .logo-web a {
            color: aliceblue;
        }

        header nav {
            width: 70%;
            display: flex;
            justify-content: flex-end;
            gap: 30px;
            align-items: center;
            padding: 10px;
        }

        header nav a {
            color: aliceblue;
            font-weight: 300;
            transition: 0.5s;
        }

        header nav a:hover {
            color: #5271ff;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }


        .responsive-nav {
            display: none;
        }

        .responsive-nav.active {
            background-color: rgba(0, 0, 0, 0.7);
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            align-items: center;
            padding: 10px;
            position: fixed;
            top: 80px;
            left: 0;
            z-index: 99;
        }

        .responsive-nav a {
            text-align: center;
            width: 100%;
            color: aliceblue;
            font-weight: 300;
            transition: 0.5s;
            padding: 20px 0;
        }

        .responsive-nav a:hover {
            color: #5271ff;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        .bar {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px auto;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background-color: #fff;
            border-radius: 7px;
        }

        /* Header End------------------------------ */


        /* Hiro Slide------------------------------ */
        .hiro-slide {
            width: 100%;
            min-height: 100vh;
            background-image: url(../img/slide.png);
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: right bottom;
            display: flex;
            align-items: center;
            background-attachment: fixed;
        }

        .hiro-slide .text-box {
            padding: 10px;
            font-size: 2rem;
            margin-left: 100px;
        }

        .hiro-slide .text-box span {
            color: #5271ff;
        }

        /* Hiro Slide End------------------------------ */


        /* About----------------------------------- */
        .about {
            width: 100%;
            padding: 10px;
            display: flex;
            flex-wrap: wrap;
            margin-top: 100px;
        }

        .about .about-img {
            width: 45%;
            height: 300px;
            background-image: url(me.jpg);
            background-size: cover;
            border-radius: 10px;
            background-position: center;
        }

        .about .about-says {
            width: 55%;
            padding: 10px 20px;
            text-indent: 10px;
        }

        .about .about-says a {
            font-weight: bold;
            color: aliceblue;
        }

        .about .about-says span {
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: #5271ff;
            border-radius: 50%;
            margin-top: 20px;
            box-shadow: 0 0 10px #4d6dff, 0 0 15px #5271ff;
            margin-right: 10px;
        }

        /* About End----------------------------------- */

        /* Project---------------------------------- */
        .projects {
            width: 100%;
            padding: 10px;
            margin-top: 250px;
            display: flex;
            flex-wrap: wrap;
        }

        .projects .item-projects {
            width: 25%;
            padding: 5px;
        }

        .projects .my-projects {
            border: 1px solid aliceblue;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            color: aliceblue;
            transition: all 0.5s;
        }

        .projects hr {
            width: 100%;
            height: 2px;
            border: none;
            background-color: #5271ff;
            margin-bottom: 5px;
            margin-top: 2px;
        }

        .projects .my-projects:hover {
            background-color: aliceblue;
            color: #1d2b34;
            box-shadow: 0 0 4px aliceblue;
        }

        /* Project End---------------------------------- */



        /* Services--------------------------------- */
        .services {
            margin-top: 260px;
            width: 100%;
            padding: 10px;
            display: flex;
            flex-wrap: wrap;
        }

        .services .item-service {
            width: calc(100% / 3);
            padding: 15px;
            transition: 0.5s;
            border-radius: 10px;
        }

        .services .item-service p {
            text-indent: 10px;
        }

        .services .item-service:hover {
            background-color: aliceblue;
            color: #333;
        }

        .services .item-service:hover i {
            transform: rotateY(180deg);
            transition: 0.5s;
        }

        .services .item-service h1 {
            font-size: 4rem;
            margin: 30px 0;
        }

        .services .item-service button {
            margin-top: 20px;
            padding: 10px 15px;
            font-size: 1.1rem;
            background-color: #5271ff;
            border-radius: 10px;
            font-weight: bold;
            color: aliceblue;
            border: none;
            transition: 0.5s;
            cursor: pointer;
        }

        .services .item-service button:hover {
            background-color: aliceblue;
            color: #333;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
        }

        /* Services End--------------------------------- */




        /* Portfolio----------------------------------- */
        .portfolio {
            margin-top: 250px;
            width: 100%;
            padding: 10px;
            display: flex;
            flex-wrap: wrap;
        }

        .portfolio .item-portfolio {
            width: 50%;
            padding: 15px;
            transition: 0.5s;
            height: 300px;
            background-color: aliceblue;
            color: #333;
        }

        .portfolio .item-portfolio h1 {
            font-size: 2rem;
            margin: 30px 0;
            text-align: center;
        }

        .portfolio .item-portfolio span {
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: #5271ff;
            border-radius: 50%;
            margin-top: 20px;
            box-shadow: 0 0 10px #4e6efa, 0 0 15px #5271ff;
            margin-right: 10px;
        }

        .portfolio .item-portfolio:last-child h1 {
            width: 100%;
            text-align: center;
        }

        .portfolio .item-portfolio:last-child {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            background-color: #5271ff;
            color: aliceblue;
        }

        .portfolio .item-portfolio:last-child font {
            border: 1px solid aliceblue;
            padding: 5px;
            height: 35px;
            border-radius: 3px;
        }

        /* Portfolio End----------------------------------- */

        /* Slide Bottom----------------------------------- */
        .slide-bottom {
            width: 100%;
            height: 40vh;
            background-image: url(other.JPG);
            background-attachment: fixed;
            background-size: cover;
            margin-top: 150px;
            position: relative;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .slide-bottom::before {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            width: 100%;
            height: 40vh;
            background-color: rgba(0, 106, 228, 0.5);
        }

        .slide-bottom .quotes {
            border: 3px solid aliceblue;
            width: 30%;
            z-index: 3;
            padding: 20px;
            text-align: center;
            font-weight: 900;
        }

        .slide-bottom .quotes span {
            font-size: 2rem;
        }

        /* Slide Bottom End----------------------------------- */



        /* contact----------------------------------- */
        .contact {
            margin-top: 250px;
            width: 100%;
            padding: 10px;
            display: flex;
            flex-wrap: wrap;
        }

        .contact .item-contact {
            width: 50%;
            padding: 15px;
            transition: 0.5s;
            border-radius: 10px;
        }

        .contact .item-contact h1 {
            font-size: 2rem;
            margin: 30px 0;
        }

        .contact .item-contact progress {
            width: 100%;
        }

        .contact .item-contact button {
            margin-top: 20px;
            padding: 10px;
            font-size: 1.1rem;
            background-color: #5271ff;
            border-radius: 10px;
            font-weight: bold;
            color: aliceblue;
            border: none;
            transition: 0.5s;
            cursor: pointer;
        }

        .contact .item-contact button:hover {
            background-color: aliceblue;
            color: #333;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
        }

        .contact .item-contact p {
            margin-bottom: 15px;
        }

        .contact .item-contact i:hover {
            transform: rotateY(360deg);
            transition: 0.7s;
            color: #5271ff;
        }

        .contact .item-contact a {
            color: aliceblue;
        }

        .contact .item-contact .box-sosmed {
            width: 40%;
            padding: 10px;
            display: flex;
            justify-content: space-around;
            font-size: 1.4rem;
            margin-top: 10px;
        }

        .contact .title-contact {
            color: aliceblue;
            width: 100%;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .contact .title-contact span {
            color: #5271ff;
        }

        /* contact End----------------------------------- */



        /* Footer------------------------------------- */
        footer {
            color: aliceblue;
            width: 100%;
            height: 40vh;
            display: flex;
            background-color: #1d2b34;
            padding-top: 20px;
            margin-top: 100px;
            position: relative;
        }

        footer .up {
            position: absolute;
            background-color: #5271ff;
            color: aliceblue;
            padding: 8px;
            top: 0;
            right: 8px;
        }

        footer .up:hover i {
            transform: rotateX(360deg);
            transition: 0.7s;
        }

        footer .footer-items {
            width: 50%;
            padding: 10px 10px 10px 100px;
        }

        footer .footer-items h1 {
            color: #5271ff;
        }

        footer ul li {
            list-style: none;
            margin-top: 10px;
        }

        footer ul li a {
            color: aliceblue;
            transition: 0.5s;
        }

        footer ul li a:hover {
            margin-left: 6px;
            border-bottom: 1px solid aliceblue;
            text-shadow: 0 0 5px aliceblue;
        }

        .copyright {
            background-color: #1d2b34;
            padding: 10px;
            width: 100%;
            text-align: center;
            font-size: 0.9rem;
            color: aliceblue;
        }

        .copyright hr {
            display: inline-block;
            border: none;
            height: 0.8px;
            width: 100%;
            background-color: bisque;
            margin-bottom: 10px;
        }

        /* Footer End------------------------------------- */

        /* Bottom Navigation */
        .bottom-nav {
            width: 100%;
            padding: 5px;
            display: flex;
            justify-content: space-evenly;
            background-color: rgba(0, 0, 0, 0.6);
            position: fixed;
            bottom: 0;
            display: none;
        }

        .bottom-nav .col-nav {
            width: 100% / 6;
            padding: 10px;
            text-align: center;
            font-size: 2em;
        }

        .bottom-nav .col-nav a {
            color: aliceblue;
            border-bottom: 2px solid transparent;
        }

        .bottom-nav .col-nav a:hover {
            color: #5271ff;
            border-bottom: 2px solid #5271ff;
        }

        /* Bottom Navigation End */


        /* Responsive############################################# */
        /* For Tablet */
        @media screen and (max-width: 800px) {
            header {
                background-color: #1d2b34;
            }

            header nav a.link {
                display: none;
            }

            .hamburger {
                display: block;
            }

            .hamburger.active .bar:nth-child(2) {
                opacity: 0;
            }

            .hamburger.active .bar:nth-child(1) {
                transform: translateY(8px) rotate(45deg);
            }

            .hamburger.active .bar:nth-child(3) {
                transform: translateY(-8px) rotate(-45deg);
            }

            .container {
                width: 90%;
                margin: auto;
            }


            .about .about-img {
                width: 50%;
                height: 200px;
            }

            .about .about-says {
                width: 50%;
                font-size: 0.9rem;
            }

            .projects .item-projects {
                width: 50%;
                padding: 5px;
            }

            .services .item-service {
                width: 50%;
                font-size: 0.8rem;
            }

            .portfolio .item-portfolio {
                font-size: 0.9rem;
            }

            .contact .item-contact .box-sosmed {
                width: 70%;
            }

            footer {
                flex-wrap: wrap;
                height: auto;
            }
        }

        /* For SmartPhone */
        @media screen and (max-width: 600px) {
            .title {
                font-size: 1.2rem;
            }

            header {
                background-color: #1d2b34;
            }

            header .logo-web img {
                max-width: 100%;
            }

            header nav a.link {
                display: none;
            }

            .hamburger {
                display: block;
            }

            .hamburger.active .bar:nth-child(2) {
                opacity: 0;
            }

            .hamburger.active .bar:nth-child(1) {
                transform: translateY(8px) rotate(45deg);
            }

            .hamburger.active .bar:nth-child(3) {
                transform: translateY(-8px) rotate(-45deg);
            }

            .hiro-slide {
                background-position: center bottom;
                align-items: flex-start;
                background-size: 80%;
                background-attachment: local;
                min-height: 85vh;
            }

            .hiro-slide .text-box {
                margin-top: 20vh;
                font-size: 1.5rem;
                margin-left: 30px;
            }



            .about {
                justify-content: center;
                margin-top: 200px;
            }

            .about .about-img {
                width: 90%;
                height: 150px;
            }

            .about .about-says {
                width: 100%;
                text-align: justify;
                font-size: 0.9rem;
            }


            .projects {
                justify-content: center;
            }

            .projects .item-projects {
                width: 90%;
            }


            .services .item-service {
                width: 100%;
                margin-bottom: 10px;
                text-align: justify;
            }


            .portfolio .item-portfolio {
                width: 100%;
                margin-bottom: 10px;
                border-radius: 10px;
            }

            .portfolio .item-portfolio h1 {
                font-size: 1.6rem;
            }

            .slide-bottom .quotes {
                width: 90%;
                padding: 20px 10px;
            }


            .slide-bottom {
                background-position: left;
            }


            .contact .item-contact {
                width: 100%;
            }

            .contact .item-contact .box-sosmed {
                width: 70%;
            }

            footer {
                flex-wrap: wrap;
                height: auto;
                font-size: 0.9rem;
            }

            footer .footer-items {
                width: 100%;
                margin-bottom: 20px;
                padding: 10px 10px 10px 50px;
            }

            .copyright {
                font-size: 0.7rem;
            }
        }
    </style>
</head>

<body>

    <!-- Header  -->
    <header>
        <div class="logo-web">
            <a href=""><img src="logo.png" alt="LOGO"></a>
        </div>
        <nav>
            <a class="link" href="">Home</a>
            <a class="link" href="#about">About</a>
            <a class="link" href="#projects">Projects</a>
            <a class="link" href="#services">Services</a>
            <a class="link" href="#portfolio">Portfolio</a>
            <a class="link" href="#contact">Contact</a>

            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <!-- Header End -->

    <!-- Hiro Slide -->
    <section class="hiro-slide" id="header">
        <div class="text-box">
            <p>Teknik Informatika</p>
            <h1>Hi, I am <span>Farid</span></h1>
            <h1>From Bengkulu, Indonesia</h1>
        </div>
    </section>
    <!-- Hiro Slide End -->

    <!-- About -->
    <div class="container">
        <section class="about" id="about">
            <div class="title">
                <h1>ABOUT <span>ME</span></h1>
            </div>

            <div class="about-img"></div>
            <div class="about-says">
                <p>Perkenalkan nama saya Hairudin Farid Sunanda, biasa dipanggil Farid. Saya adalah
                    lulusan Sekolah Menengah Kejuruan Darul A'mal Metro, Lampung. Dan saat ini saya
                    menyandang status sebagai mahasiswa Teknik Informatika di Universitas Wahid Hasyim Semarang
                </p>
                <p>Saya berasal dari Kaur, Bengkulu Selatan. Saat ini saya tinggal di Pondok Pesantren
                    Luhur Wahid Hasyim Semarang. Pendidikan non-formal sebelumnya, saya pernah belajar
                    di Pondok Pesantren Darul A'mal Metro, lampung.
                </p>
                <font><span></span> Male</font><br>
                <font><span></span> 2003</font><br>
                <font><span></span> Capricorn Boy</font><br>
                <font><span></span> Student</font>
            </div>
        </section>
    </div>
    <!-- About End -->

    <!-- Project -->
    <div class="container">
        <section class="projects" id="projects">
            <div class="title">
                <h1>MY <span>PROJECTS</span></h1>
            </div>

            <div class="item-projects">
                <a href="http://triplebaca.eu5.org/" target="_blank">
                    <div class="my-projects">
                        <h3>TripleBaca</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, aut....</p>
                    </div>
                </a>
            </div>
            <div class="item-projects">
                <a href="my-projects/x-blog/" target="_blank">
                    <div class="my-projects">
                        <h3>Company Website</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, aut....</p>
                    </div>
                </a>
            </div>
            <div class="item-projects">
                <a href="my-projects/linktree/" target="_blank">
                    <div class="my-projects">
                        <h3>Linktree Web</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, aut....</p>
                    </div>
                </a>
            </div>
            <div class="item-projects">
                <a href="my-projects/mockup1/" target="_blank">
                    <div class="my-projects">
                        <h3>Mockup Website</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, aut....</p>
                    </div>
                </a>
            </div>
        </section>
    </div>
    <!-- Project End -->


    <!-- Services -->
    <div class="container">
        <section class="services" id="services">
            <div class="title">
                <h1>MY <span>SERVICES</span></h1>
            </div>
            <div class="item-service">
                <center>
                    <h1><i class="fa-solid fa-code"></i></h1>
                </center>
                <h2>Web Developer</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi mollitia deserunt ex veniam quod eum
                    pariatur, distinctio maxime molestiae sunt dicta vitae consequatur sapiente nobis, reprehenderit
                    doloribus placeat a eveniet.</p>
                <center><button onclick="alert('Untuk fitur ini silahkan hubungi kontak developer dibawah😉')">Explore</button>
                </center>
            </div>
            <div class="item-service">
                <center>
                    <h1><i class="fa-brands fa-connectdevelop"></i></h1>
                </center>
                <h2>Frontend Developer</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi mollitia deserunt ex veniam quod eum
                    pariatur, distinctio maxime molestiae sunt dicta vitae consequatur sapiente nobis, reprehenderit
                    doloribus placeat a eveniet.</p>
                <center><button onclick="alert('Untuk fitur ini silahkan hubungi kontak developer dibawah😉')">Explore</button>
                </center>
            </div>
            <div class="item-service">
                <center>
                    <h1><i class="fa-sharp fa-solid fa-layer-group"></i></h1>
                </center>
                <h2>Web Design</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi mollitia deserunt ex veniam quod eum
                    pariatur, distinctio maxime molestiae sunt dicta vitae consequatur sapiente nobis, reprehenderit
                    doloribus placeat a eveniet.</p>
                <center><button onclick="alert('Untuk fitur ini silahkan hubungi kontak developer dibawah😉')">Explore</button>
                </center>
            </div>
        </section>
    </div>
    <!-- Services End -->


    <!-- Portfolio -->
    <div class="container">
        <section class="portfolio" id="portfolio">
            <div class="title">
                <h1>MY <span>PORTFOLIO</span></h1>
            </div>
            <div class="item-portfolio">
                <h1>Educational Background</h1>
                <font><span></span> SDN 09 Nasal Bengkulu</font><br>
                <font><span></span> SMPN 22 Kaur Bengkulu</font><br>
                <font><span></span> SMK Darul A'mal Lampung</font><br>
                <font><span></span> Universitas Wahid Hasyim</font>
            </div>
            <div class="item-portfolio">
                <h1>My Skills</h1>
                <font>HTML</font>
                <font>CSS</font>
                <font>Javascript</font>
                <font>PHP</font>
                <font>MySQL</font>
            </div>
        </section>
    </div>
    <!-- Portfolio End -->

    <!-- Slide Bottom -->
    <section class="slide-bottom">
        <div class="quotes">
            <p>
                "Dududklah bersama orang berilmu, maka kau akan tau betapa 'sampah' nya isi kepalamu"
            </p>
        </div>
    </section>
    <!-- Slide Bottom End -->



    <!-- Contact -->
    <div class="container">
        <section class="contact" id="contact">

            <div class="item-contact">
                <div class="title-contact">
                    <p>CONTACT <span>ME</span></p>
                </div>
                <p><i class="fa-brands fa-telegram"><a href="mailto:faridsunanda@gmail.com"></i> faridsunanda@gmail.com
                </p></a>
                <p><i class="fa-solid fa-phone"></i> 082122195303</p>
                <div class="box-sosmed">
                    <a href="https://www.facebook.com/dani.alvian.35/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.tiktok.com/@inisial_f2122"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="https://www.instagram.com/sunandafarid/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/farid-sunanda-485b22248/"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <a href="(CV) Hairudin Farid Sunanda.pdf"><button>Download CV</button></a>
            </div>
            <div class="item-contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.983505796549!2d110.38696101450088!3d-7.011222370623979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b0594cfd543%3A0x496f17c58e4b333f!2sPondok%20Pesantren%20Luhur%20Wahid%20Hasyim!5e0!3m2!1sid!2sid!4v1655558058575!5m2!1sid!2sid" width="100%" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </div>
    <!-- Contact End -->


    <!-- Footer -->
    <footer>
        <div class="footer-items">
            <h1>Education</h1>
            <ul>
                <li><a href="https://darulamalmetro.ponpes.id/">Ponpes Darul A'mal</a></li>
                <li><a href="https://unwahas.ac.id/">Wahid Hasyim University</a></li>
                <li><a href="https://www.youtube.com/c/WebProgrammingUNPAS">Web Programming Unpas</a></li>
                <li><a href="https://www.youtube.com/c/ProgrammerZamanNow">Progammer Zaman Now</a></li>
            </ul>
        </div>
        <div class="footer-items">
            <h1>My Community</h1>
            <ul>
                <li><a href="https://ti.teknik.unwahas.ac.id/">TI Unwahas</a></li>
                <li><a href="https://www.instagram.com/fr_academy/">FR Academy</a></li>
                <li><a href="https://www.instagram.com/pagarnusa_unwahas/">PSNU Unwahas</a></li>
                <li><a href="https://www.facebook.com/groups/IndoProgramer">Indo Progammer</a></li>
            </ul>
        </div>
        <div class="footer-items">
            <h1>Developer</h1>
            <ul>
                <li><a href="https://www.instagram.com/sunandafarid/">Farid Sunanda</a></li>
            </ul>
        </div>
        <a href="#header">
            <div class="up"><i class="fa-sharp fa-solid fa-circle-up"></i></div>
        </a>
    </footer>
    <section class="copyright">
        <hr>
        <p>Copyright &copy; 2022 By Farid. All right reserved.</p>
    </section>
    <!-- Footer End -->

    <!-- Bottom Navigation -->
    <section class="responsive-nav">
        <a class="link" id="linkShort" href="">Home</a>
        <a class="link" id="linkAbout" href="#about">About</a>
        <a class="link" id="linkProjects" href="#projects">Projects</a>
        <a class="link" id="linkServices" href="#services">Services</a>
        <a class="link" id="linkPortfolio" href="#portfolio">Portfolio</a>
        <a class="link" id="linkContact" href="#contact">Contact</a>
    </section>
    <!-- Bottom Navigation End -->


    <!-- Javascript Code -->
    <script>
        const hamburger = document.querySelector(".hamburger");
        const responsiveNav = document.querySelector(".responsive-nav");
        var linkAbout = document.querySelector("#linkAbout");
        var linkProjects = document.querySelector("#linkProjects");
        var linkServices = document.querySelector("#linkServices");
        var linkPortfolio = document.querySelector("#linkPortfolio");
        var linkContact = document.querySelector("#linkContact");

        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            responsiveNav.classList.toggle("active");
        })
        linkAbout.addEventListener("click", () => {
            hamburger.classList.remove("active");
            responsiveNav.classList.remove("active");
        })
        linkProjects.addEventListener("click", () => {
            hamburger.classList.remove("active");
            responsiveNav.classList.remove("active");
        })
        linkServices.addEventListener("click", () => {
            hamburger.classList.remove("active");
            responsiveNav.classList.remove("active");
        })
        linkPortfolio.addEventListener("click", () => {
            hamburger.classList.remove("active");
            responsiveNav.classList.remove("active");
        })
        linkContact.addEventListener("click", () => {
            hamburger.classList.remove("active");
            responsiveNav.classList.remove("active");
        })
    </script>
</body>

</html>