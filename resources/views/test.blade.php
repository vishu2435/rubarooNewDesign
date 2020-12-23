@extends('layouts.header')
@section('css')
<link rel="stylesheet" href="{{asset('css/blogPage.css')}}">
@endsection


@section('header')
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
        <nav class="desktop-only">

            <ul>
                <li><a href="/" class="u-href-remover">Home</a></li>
                <li><a href="/about" class="u-href-remover">About Us</a></li>
                <li>Child Sexual Abuse</li>
                <li>Blog</li>
                <li>Contact Us</li>
                <li><i class="fas fa-search"></i></li>

            </ul>
        </nav>
        <div class="c-on-image-text">
            <h1>Blogs</h1>
        </div>
        <nav class="mobile-only">
            <div class="logo">
                <img src="./images/rubaroo.png" alt="" srcset="">
            </div>
            <ul>
                <li><i class="fas fa-hamburger"></i></li>
            </ul>
        </nav>

    </div>



</header>
@endsection
@section('content')
        <main class="container blogspage" style="margin-top: 4vh;">
          <div class="maingrid">
            <section class="main-column">
                <div class="titleGroup">
                    <h1 class="titleGroup-title ">Blogs</h1>
                </div>
                <div class="descriptiveParagraph" style="background-image: url({{asset('images/texture.jpg')}});">
                    <p class="largeText" style="background-image: url({{asset('images/texture.jpg')}});">A place for breaking silence on abuse </p>
                </div>
                <div class="list">
                    <div class="list-body">
                        <?php
                            echo var_dump($posts[0]->user);
                            ?>
                        {{-- @foreach($posts as $post)
                            <div class="single-post page-1 show-on-scroll">
                                <div class="post-content">
                                    <div>
                                    @php

                                    // $slug=join('-',explode(' ',strtolower($post->title)) )
                                    @endphp
                                        <h3>{{$post->title}}</h3>
                                        <div class="meta-data">
                                        <span>by {{$post->user->firstname}}</span> | <span>{{\Carbon\Carbon::createFromTimestamp(strtotime($post->created_at))->diffForHumans(\Carbon\Carbon::now())}}</span>
                                        </div>
                                        <div class="post" >
                                            <article>{!!$post->body!!}</article>
                                        </div>
                                        <div class="button">
                                            <a class="btn btn-black" href="{{url('blog'. '/' . $post->id . '/' .$slug)}}">Read More</a>
                                        </div>
                                    </div>
                                    <div class="post-image">
                                        @php
                                        if(substr($post->image,0,4)=='http'){
                                        @endphp
                                            <img src='{{$post->image}}' alt='' srcset=''>
                                        @php
                                        }else{
                                        @endphp

                                            <img src='{{asset("storage/". $post->image)}}' alt='' srcset=''>
                                         @php
                                        }
                                        @endphp


                                    </div>
                                </div>

                            </div>
                        @endforeach --}}
                    </div>
                </div>
            </section>
          </div>

        </main>

@endsection
