@extends('layouts.header')
@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
@endsection




@section('header')

<div class="navigation">
    <input type="checkbox" class="navigation__checkbox" name="" id="navi-toggle">
    <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">&nbsp;</span>
    </label>

    <div class="navigation__background">&nbsp;</div>
    <nav class="navigation__nav">
         <ul class="navigation__list">
            <li class="navigation__item"><a href="/" class="navigation__link">Home</a></li>
            <li class="navigation__item"><a href="/about" class="navigation__link">About Us</a></li>
            <li class="navigation__item"><a href="#" class="navigation__link">Child Sexual Abuse</a></li>
            <li class="navigation__item"><a href="/blog" class="navigation__link">Blog</a></li>
            <li class="navigation__item"><a href="#" class="navigation__link">Contact Us</a></li>

        </ul>
    </nav>

</div>
<header>
    <div class="slider">
        <!-- <img class="img-move" src="./p.jpg" alt="">
        <img class="img-move" src="./corusel-img.jpg" alt="">
        <img class="img-move" src="./corusel-img-2.jpg" alt=""> -->
        <div class="img-container">
            <div class="img-move active" style="background:
                    linear-gradient(to right,rgba(0,0,0,0.2),rgba(0,0,0,0.2)),
                    url({{asset('./images/bg-bunner-2.jpg')}});">

            </div>

        </div>
        <div class='img-container'>

            <div class="img-move" style="background:
        linear-gradient(to right,rgba(0,0,0,0.2),rgba(0,0,0,0.2)),
        url({{asset('./images/sex-ed-1024x630.jpg')}});">
            </div>
        </div>

        <div class="img-container">
            <div class="img-move" style="background:
        linear-gradient(to right,rgba(0,0,0,0.2),rgba(0,0,0,0.2)),
        url({{asset('./images/web-Laura-02.jpg')}});">

            </div>
        </div>
    </div>


    </div>

    <div class="header-section">
        <div class="top-header">
            <div style="margin-right: 50vw;" class="logo">
                <img src="./images/rubaroo.png" alt="" srcset="">

            </div>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>

            <button>Donate Now</button>

        </div>
        {{-- <nav class="desktop-only">
            <!-- <div class="logo">
            <img src="./images/rubaroo.png" alt="" srcset="">
        </div> -->
            <ul>
                <li><a href="/" class="u-href-remover">Home</a></li>
                <li><a href="/about" class="u-href-remover">About Us</a></li>
                <li>Child Sexual Abuse</li>
                <li><a href="/blog" class="u-href-remover">Blog</a></li>
                <li>Contact Us</li>
                <li><i class="fas fa-search"></i></li>

            </ul>
        </nav>
        <nav class="mobile-only">
            <div class="logo">
                <img src="./images/rubaroo.png" alt="" srcset="">
            </div>
            <ul>
                <li><i class="fas fa-hamburger"></i></li>
            </ul>
        </nav> --}}
        <div class="arrows prev">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="arrows next">
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>



</header>

@endsection















@section('content')
<section class="child sect">


</section>
<main>
    <section class="image-gal">
        <div class="col-1">
            <div class="box-img-animate">
                <div class="box-img-animate-item">
                    <img src="./images/animated/animate-img-1.jpg" alt="" srcset="">
                </div>
                <div class="box-img-animate-item">
                    <img src="./images/animated/animate-img-2.jpg" alt="" srcset="">
                </div>
                <div class="box-img-animate-item">
                    <img src="./images/animated/animate-img-3.jpg" alt="" srcset="">
                </div>
                <div class="box-img-animate-item">
                    <img src="./images/animated/animate-img-4.jpg" alt="" srcset="">
                </div>
                <div class="box-img-animate-item">
                    <img src="./images/animated/animate-img-5.jpg" alt="" srcset="">
                </div>
                <div class="box-img-animate-item">
                    <img src="./images/animated/animate-img-6.jpg" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="col-2-heading show-on-scroll">
                <h2>Our Belief</h2>
            </div>
            <div class="col-2-subheading show-on-scroll">
                <span>
                    We believe that it is important to
                </span>

            </div>
            <div class="content show-on-scroll">
                <ul>
                    <li>
                        <div class="content__list-icon">
                            <span class="lnr lnr-pencil"></span>
                        </div>
                        <div class="content__list-content">

                        <h2>Educate</h2>
                        <p>Adult stakeholders like parents, teachers, caregivers, NGO workers etc so as to help
                            them identify and prevent incidents of child sexual abuse </p>
                        </div>
                    </li>
                    <li>
                        <div class="content__list-icon">
                            <span class="lnr lnr-sun"></span>
                        </div>

                        <div class="content__list-content">

                        <h2>Empower</h2>
                        <p>Children and youth by providing them with knowledge and skills to keep themselves safe
                            from sexual abuse .
                        </p>
                        </div>
                    </li>
                    <li>

                        <div class="content__list-icon">
                            <span class="lnr lnr-heart"></span>
                        </div>

                        <div class="content__list-content">

                            <h2>Heal</h2>
                            <p>Our team and highly trained mental health experts provide therapeutic support and guidence to both
                                child and adult survivours in order to help them heal from traumatic impact of CSA
                            </p>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="sliders show-on-scroll" style="position: relative;
      height: 100%;">
        <div class="u-text-center " type="heading">
            <h1 class="sliders__heading"><b>Our programmes</b></h1>
        </div>
        <div class="swiper-container  " type="content">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div style="position:absolute;top:0;bottom:0;
                            background-image:url({{asset('./images/father-hugging-daughter.jpg')}})
                            " class="swiper-slide__side swiper-slide__side--front">
                        <div class="swiper-slide--text">
                            <h1>My Body My Safety</h1>
                        </div>
                    </div>
                    <div style="position:absolute;top:0;bottom:0;
                            background-image:linear-gradient(to right,rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url({{asset('./images/father-hugging-daughter.jpg')}})"
                        class="swiper-slide__side swiper-slide__side--back">
                        <div class="u-vertical-align">
                            <button data-target=1 class="c-style-button swiper-slide__main__button">Know More</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div style="position:absolute;top:0;bottom:0;
                    background-image:url({{asset('./images/Child-sexual-abuse.jpg')}})

                    " class="swiper-slide__side swiper-slide__side--front">
                    </div>
                    <div style="position:absolute;top:0;bottom:0;
                     background-image:linear-gradient(to right,rgba(0,0,0,0.3),rgba(0,0,0,0.3)),
                     url({{asset('./images/Child-sexual-abuse.jpg')}})


                    " class="swiper-slide__side swiper-slide__side--back">
                        <div class="u-vertical-align">
                            <button data-target=2 class="c-style-button swiper-slide__main__button">Know More</button>
                        </div>



                    </div>
                </div>
                <div class="swiper-slide">
                    <div style="position:absolute;top:0;bottom:0;
                    background-image:url({{asset('./images/Child-sexual-abuse.jpg')}})
                    " class="swiper-slide__side swiper-slide__side--front">

                    </div>
                    <div style="position:absolute;top:0;bottom:0;
                     background-image:linear-gradient(to right,rgba(0,0,0,0.3),rgba(0,0,0,0.3)),
                     url({{asset('./images/Child-sexual-abuse.jpg')}})

                    " class="swiper-slide__side swiper-slide__side--back">
                        <div class="u-vertical-align">
                            <button data-target=3 class="c-style-button swiper-slide__main__button">Know More</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div style="position:absolute;top:0;bottom:0;
                    background-image:url({{asset('./images/Child-sexual-abuse.jpg')}})
                    " class="swiper-slide__side swiper-slide__side--front">

                    </div>
                    <div style="position:absolute;top:0;bottom:0;
                     background-image:linear-gradient(to right,rgba(0,0,0,0.3),rgba(0,0,0,0.3)),
                     url({{asset('./images/Child-sexual-abuse.jpg')}})
                    " class="swiper-slide__side swiper-slide__side--back">
                        <div class="u-vertical-align">
                            <button data-target=4 class="c-style-button swiper-slide__main__button">Know More</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div style="position:absolute;top:0;bottom:0;
                    background-image:url({{asset('./images/Child-sexual-abuse.jpg')}})

                    " class="swiper-slide__side swiper-slide__side--front">

                    </div>
                    <div style="position:absolute;top:0;bottom:0;
                     background-image:linear-gradient(to right,rgba(0,0,0,0.3),rgba(0,0,0,0.3)),
                     url({{asset('./images/Child-sexual-abuse.jpg')}})
                    " class="swiper-slide__side swiper-slide__side--back">
                        <div class="u-vertical-align">
                            <button data-target=5 class="c-style-button swiper-slide__main__button">Know More</button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <section class="sec__4 show-on-scroll" style="background-image:url({{asset('./images/helpCause.jpg')}})">
        <div class="sec__4__content">
            <h2>Help The Global Cause</h2>
            <button>Donate Now</button>
        </div>
    </section>
</main>



















<div class="cardsGallery">
    <div class="popup-list-items" targetid="1">
        <div id=1 class="home-button-popup">
            <button class="home-causes-item-button text-button" style="z-index:2000">
                <div class="home-causes-item-main">
                    <div>
                        <h3 class="home-causes-item-main-heading">My Body My Safety</h3>
                        <p>
                            The MBMS programme aims at
                            holistic empowerment of children
                            by imparting knowledge and skills
                            to deal with unsafe situations in
                            order to prevent occurrences of Child
                            Sexual Abuse. It also promotes gender
                            sensitivity among children and provides
                            age-appropriate sexuality and reproductive
                            health education.
                        </p>
                    </div>

                </div>
            </button>
            <button class="home-causes-item-button "
                style="z-index:3000; background: url('images/father-hugging-daughter.jpg'); ">

            </button>
        </div>
        <div id=2 class="home-button-popup">
            <button class="home-causes-item-button text-button" style="z-index:2000">
                <div class="home-causes-item-main">
                    <div>
                        <h3 class="home-causes-item-main-heading">Child Sexual Abuse Awareness</h3>
                        <p>
                            It is designed for parents
                            and caregivers of children and
                            consists of information about child
                            sexual abuse that can help adults prevent
                            occurrences of child sexual abuse,
                            recognize signs of distress and effectively
                            reach out to support their children in such times.


                        </p>
                    </div>

                </div>
            </button>
            <button class="home-causes-item-button "
                style="z-index:3000; background: url('images/Child-sexual-abuse.jpg'); ">

            </button>
        </div>
        <div id=3 class="home-button-popup">
            <button class="home-causes-item-button text-button" style="z-index:2000">
                <div class="home-causes-item-main">
                    <div>
                        <h3 class="home-causes-item-main-heading">Teacher Training</h3>
                        <p>
                            This Programme aims to sensitize and build
                            empathy among teachers, to help them recognize
                            signs of distress in children and to train them
                            to handle crisis situations effectively.
                        </p>
                    </div>

                </div>
            </button>
            <button class="home-causes-item-button "
                style="z-index:3000; background: url('images/pre-primary-teacher-training.jpg'); ">

            </button>
        </div>
        <div id=4 class="home-button-popup">
            <button class="home-causes-item-button text-button" style="z-index:2000">
                <div class="home-causes-item-main">
                    <div>
                        <h3 class="home-causes-item-main-heading">Comprehensive Sexuality Education - 16+</h3>
                        <p>
                            The aim of the CSE programme is to provide
                            extensive knowledge on sexuality and reproductive
                            health from a rights and choices perspective, inculcate
                            greater gender sensitivity, encourage participants to
                            make safer and better choices, teach them the
                            importance of consent and healthy relationships.
                        </p>
                    </div>

                </div>
            </button>
            <button class="home-causes-item-button "
                style="z-index:3000; background: url('images/sex-ed-1024x630.jpg'); ">

            </button>
        </div>
        <div id=5 class="home-button-popup">
            <button class="home-causes-item-button text-button" style="z-index:2000">
                <div class="home-causes-item-main">
                    <div>
                        <h3 class="home-causes-item-main-heading">Customized Body Safety and Gender Sensitization</h3>
                        <p>
                            We understand that the needs of our beneficiaries which may not always fit the existing
                            modules,
                            therefore, we have the Customized Body Safety and Gender Sensitization programme to help
                            them best.
                        </p>
                    </div>

                </div>
            </button>
            <button class="home-causes-item-button "
                style="z-index:3000; background: url('images/sex-ed-1024x630.jpg'); ">

            </button>
        </div>
        <div id='popup-permanant' class="popup-cross-icon">
            <span></span>
        </div>
    </div>
</div>

@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/customJs/app.js')}}"></script>
<script src="{{asset('js/customJs/slides.js')}}"></script>
<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
    //   width:900,
    slidesPerView: 3,
    spaceBetween: 60,
    slidesPerGroup: 3,
    speed: 1000,

    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
// swiper.autoplay.start()
</script>
@endsection
