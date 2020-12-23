@extends('layouts.header')
@section('css')
<link rel="stylesheet" href="{{asset('css/blogPage.css')}}">
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
                <img src="{{asset('images/rubaroo.png')}}" alt="" srcset="">

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
                        @foreach($posts as $post)
                            <div class="single-post page-1 show-on-scroll">
                                @php

                                    $slug=join('-',explode(' ',strtolower($post->title)) )
                                @endphp

                                <div class="post-content">
                                    <div>
                                        <h3>
                                            <a class="single-post-link u-href-remover" href="{{url('blog'. '/' . $post->id . '/' .$slug)}}">
                                            {{$post->title}}
                                        </a>
                                        </h3>

                                        <div class="post" >
                                            <article>{!!$post->body!!}</article>
                                        </div>
                                        <div class="button">
                                            {{-- <a class="btn btn-black" href="{{url('blog'. '/' . $post->id . '/' .$slug)}}">Read More</a> --}}
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
                        @endforeach
                    </div>
                </div>
            </section>
          </div>
        {{-- <!-- {{$posts->links()}} --> --}}

        </main>

@endsection
@section('script')
    <script>
        looper('.page-1')
        let page=1
        const encryption="http"
        const host="localhost"
        const port='8000'
        let takeData=true
        const loadMoreData=(page)=>{
            let url="?page="+page
            $.ajax({
                url:url,
                error:function(xhr){
                    console.log("Some Error occured ",xhr)
                },
                success:function(result){

                    if(result.posts){
                        const listbody=document.querySelector('.list-body')
                        for(let i=0;i<result.posts.data.length;i++){
                            let data=result.posts.data[i]
                            let divElement=document.createElement('div')

                            let divPostElement=document.createElement('div')

                            let divContent=document.createElement('div')
                            let divPostImage=document.createElement('div')
                            let imgPostImage=document.createElement('img')
                            let headingElement=document.createElement('h3')
                            let meta_data=document.createElement('div')
                            let post_content=document.createElement('div')
                            let article=document.createElement('article')
                            let divPost=document.createElement('div')

                            //creating slug
                            let slug=data.title.toLowerCase().split(' ').join('-')
                            const url=`${encryption}://${host}:${port}/blog/${data.id}/${slug}`

                            divElement.classList.add('single-post')
                            divElement.classList.add(`page-${page}`)
                            divElement.classList.add('show-on-scroll')

                            divPostElement.classList.add('post-content')

                            //for div post-image
                            divPostImage.classList.add('post-image')
                            imgPostImage.setAttribute('src',data.image)
                            divPostImage.appendChild(imgPostImage)
                            //ends here

                            //for div post-content


                            headingElement.innerHTML=`<a class="u-href-remover" href=${url}>${data.title}</a>`
                            article.innerHTML=data.body
                            if(!article.innerHTML){
                                article.innerText=data.body
                            }
                            // console.log('text is ',article)
                            let text=article.innerText

                            article.innerHTML=''
                            article.innerText=text.split(' ').slice(0,30).join(' ')+' ....'
                            divPost.classList.add('post')
                            divPost.appendChild(article)
                            meta_data.classList.add('meta-data')
                            meta_data.innerHTML=`<span>${data.username}</span> | <span>${data.createdTime} </span>`
                            //main div content
                            divContent.appendChild(headingElement)
                            divContent.appendChild(meta_data)
                            divContent.appendChild(divPost)
                            //ends here

                            divPostElement.appendChild(divContent)
                            divPostElement.appendChild(divPostImage)
                            divElement.appendChild(divPostElement)

                            listbody.appendChild(divElement)
                        }
                        looper(`.page-${page}`)
                        takeData=true
                    }


                }
            })
        }
              const strippElement=(elements)=>{

                for(let i=0;i<elements.length;i++){
                    console.log('Element is ',elements[i])
                    let text=elements[i].innerText
                    elements[i].innerHTML=''

                    elements[i].innerText=text.split(' ').slice(0,30).join(' ')+' ....'

                }
        }
strippElement(document.getElementsByTagName('article'))
        $(window).scroll(function(){
            if(takeData&&$(window).height()+$(window).scrollTop()>=$(document).height()-100){
            page++;
            console.log("page is ",page)
                takeData=false
            loadMoreData(page)
            }
        })




    </script>
@endsection
