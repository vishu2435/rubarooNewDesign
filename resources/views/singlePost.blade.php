@extends('layouts.header')

@section('css')
    <link rel="stylesheet" href="{{asset('css/single-post.css')}}">
@endsection
@section('header')

@if(substr($post->image,0,4)=='http')
@php
   $postImageUrl=$post->image
@endphp
@else
@php
    $postImageUrl='storage/'.$post->image


@endphp
@endif


<header style="background:
linear-gradient(to right,rgba(0,0,0,0.2),rgba(0,0,0,0.2)),
url({{asset($postImageUrl)}});
height:70vh;
background-position:center;
background-size:cover;
position:relative;
background-attachment:fixed;
">



    <div class="header-section">
        <div class="top-header">
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
        <div class="singlePostTitle">
            <h1>{{$post->title}}</h1>
        </div>

    </div>



</header>
@endsection
@section('content')
<div class="progress-bar">

</div>
<div class="single-post">

                <!-- <div class="metadata">
                    <span>by {{$post->user->firstname}}</span>
                </div> -->
                <div class="meta-data">
                    @php
                        $authorname=strtolower($post->user->firstname).'-'.strtolower($post->user->lastname)
                    @endphp
                <span><a href="{{url('blog/author'. '/' . $post->user->id . '/' .$authorname)}}">by {{$post->user->firstname}} {{$post->user->lastname}}</a></span> | <span>{{\Carbon\Carbon::createFromTimestamp(strtotime($post->created_at))->diffForHumans(\Carbon\Carbon::now())}}</span>
                </div>





                <div class="post-body">
                    <p>
                        {!!$post->body!!}
                    </p>
                </div>





</div>
<section class="related-posts">
    <div class="heading">
        <h2>Latest Posts</h2>
    </div>
    <div class="posts">

        @foreach($posts as $post)
                            <div class="c-card">
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
                                <div class="post-content">
                                    @php

                                    $slug=join('-',explode(' ',strtolower($post->title)) )
                                    @endphp
                                    <div>
                                        <h3><a href="{{url('blog'. '/' . $post->id . '/' .$slug)}}" class="u-href-remover">{{$post->title}}</a></h3>
                                        <div class="meta-data">
                                        <span>by {{$post->user->firstname}} {{$post->user->lastname}}</span> | <span>{{\Carbon\Carbon::createFromTimestamp(strtotime($post->created_at))->diffForHumans(\Carbon\Carbon::now())}}</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="post-content">
                                    <div>
                                    @php

                                    $slug=join('-',explode(' ',strtolower($post->title)) )
                                    @endphp
                                        <h3><a href="{{url('blog'. '/' . $post->id . '/' .$slug)}}">{{$post->title}}</a></h3>
                                        <div class="meta-data">
                                        <span>by {{$post->user->firstname}}</span> | <span>{{\Carbon\Carbon::createFromTimestamp(strtotime($post->created_at))->diffForHumans(\Carbon\Carbon::now())}}</span>
                                        </div>
                                        <div class="post" >
                                            <article>{!!$post->body!!}</article>
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
                                </div> --}}

                            </div>
                        @endforeach

    </div>
</section>
@endsection

@section('script')
            <script>
                const scrollProgressBarIndicator=document.querySelector('.progress-bar')
                const postcontent=document.querySelector('.single-post')
                window.addEventListener('scroll',()=>{
                    let scrollAmount=window.scrollY;
                    let postHeight=postcontent.clientHeight-window.innerHeight
                    let progress=Math.min((scrollAmount/postHeight)*100,100)
                    console.log(postHeight,scrollAmount,progress)
                    scrollProgressBarIndicator.style.width=progress+'%';
                })
            </script>
@endsection
