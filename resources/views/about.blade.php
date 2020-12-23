@extends('layouts.header')
@section('css')
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
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
<header style="background:
linear-gradient(to right,rgba(0,0,0,0.2),rgba(0,0,0,0.2)),
url({{asset('./images/bg-bunner-2.jpg')}});
height:70vh;
background-position:center;
background-size:cover;
position:relative;
background-attachment:fixed;
">


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



    </div>



</header>
@endsection


@section('content')
<main class="about__page">
    <section class="section__1 ">
        <div class="section__1__content show-on-scroll">
            <h2>
                We are an NGO breaking the silences that surround the issue of Child
                Sexual Abuse and confronting the issue “face-to-face”.
            </h2>
            <p>
                We believe that children should be taught how they can keep themselves
                safe from a young age and there should always be an open channel of
                communication between children and their significant adults, where the
                child feels comfortable and safe that their adults are there for them no
                matter what.
            </p>


        </div>
        <div class="section__1__quote show-on-scroll">
            <div class="section__1__quote__apostrophie">
                <h2>"</h2>
            </div>
            <div class="section__1__quote__content">
                <h2>
                    People ask " How can a person abuse a child "<br /><br /> We Ask " How can so Many ' good people ' do
                    nothing about it "
                </h2>
            </div>

        </div>

    </section>
    <section class="section__2" style="background:
linear-gradient(to right,#5d54a49c,#5d54a49c),
url({{asset('./images/ourimpact.jpg')}});
min-height:80vh;
height:auto;
background-position:center;
background-size:cover;
position:relative;
background-attachment:fixed;  ">
        <div class="section__2__heading">
            <h2>Our Misson</h2>
        </div>
        <div class="section__2__content">
            <div class="section__2__content--heading show-on-scroll">
                <span>What does Rubaroo Do ?</span>
            </div>
            <div class="section__2__content--content show-on-scroll">
                <span>
                    We work to eliminate the evil of Child Sexual Abuse by raising awareness
                    about it and inculcating greater gender sensitivity in children and adults,
                    and imparting body safety knowledge and providing healing support to
                    children.
                </span>
            </div>
        </div>
    </section>
    <section class="section__3 ">
        <div class="section__3__heading">
            <h2>Our Journey</h2>
        </div>
        <div class="section__1__content show-on-scroll">
            <h2>
                For us, the journey since 2014 ....
            </h2>
            <p>
                has evolved from wanting to simply be foot soldiers who talk to children
                to keep them safe to initiating key conversations around gender and sexual and reproductive health to
                address some of the core issues that lead to the silence of child sexual abuse. We began to understand
                and believe that child sexual abuse is an adult responsibility and we started to have conversations with
                adult stakeholders and organisations as a whole, to effectively participate in keeping their children
                safe.
                And with each step, our path has become clearer and while we know that we have a long way to go, we
                are proud of how far we have come. We’ve enjoyed our growth and success as an organisation but, the
                real reward has always come in
            </p>


        </div>
        <div class="section__1__quote show-on-scroll">
            <div class="section__1__quote__apostrophie">
                <h2>"</h2>
            </div>
            <div class="section__1__quote__content">
                <h2>
                    People ask "How can a person abuse a child"<br /><br /> We Ask " How can so Many ' good people ' do
                    nothing about it "
                </h2>
            </div>

        </div>
    </section>
    <section class="section__4" style="background:
linear-gradient(to right,#5d54a49c,#5d54a49c),
url({{asset('./images/happychildren.jpg')}});
min-height:80vh;
height:auto;
background-position:top;
background-size:cover;
position:relative;
background-attachment:fixed;  ">
        <div class="section__2__heading">
            <h2>Our Impact</h2>
        </div>
        <div class="section__3__content " >
            <div class="circular__content show-on-scroll">
                <div class="u-circle-text about--page ">
                    21,884
                </div>
                <div class="circular__content__desc">
                    children Reached
                </div>
            </div>
            <div class="circular__content show-on-scroll">
                <div class="u-circle-text about--page">
                    11,352
                </div>

                <div class="circular__content__desc">
                    adults reached
                </div>
            </div>
            <div class="circular__content show-on-scroll">
                <div class="u-circle-text about--page">
                    66
                </div>

                <div class="circular__content__desc">
                    Schools, NGOs, Colleges partnered with
                </div>
            </div>
            <div class="circular__content show-on-scroll">
                <div class="u-circle-text about--page">
                    4 states
                </div>

                <div class="circular__content__desc">
                    Maharshtra, Ap, Delhi, Karnatka
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
@section('script')
<script>
    looper('.show-on-scroll')
</script>
@endsection
