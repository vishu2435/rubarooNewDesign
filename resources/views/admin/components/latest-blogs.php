
        <section class="latest-blogs">
            <div class="d-xl-flex align-items-xl-center" style="height: 600px;background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center" style="font-weight: 700;color: #1b5e20;font-size: 30px;">Latest Blogs</h1>
                </div>
            </div>
            <div class="row" style="margin-top: 15px;">
                <div class="col-md-4 col-xl-12 d-xl-flex justify-content-xl-center" style="padding-top: 14px;height: 450px;">
                    <div class="carousel slide" data-ride="carousel" data-pause="false" data-keyboard="false" id="carousel-2">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <ul class="list-inline">
                                    @php
                                    for($i=0;$i<3;$i++){
                                        $slug=join('-',explode(' ',strtolower($posts[$i]->title)) )
                                    @endphp

                                    <li class="list-inline-item" id="listing" style="width: 360px;">
                                        <div class="shadow-sm" style="width: 360px;background-color: #ffffff;padding-bottom: 25px;">
                                            <div style="background-color: #ffffff;padding-bottom: 20px;">
                                                <h1 style="font-size: 17px;padding-right: 10px;padding-left: 10px;padding-top: 20px;color: #313437;font-weight: 700;">{{$posts[$i]->title}}</h1>
                                            </div>
                                            @php
                                            if(substr($posts[$i]->image,0,4)=='http'){
                                            @endphp
                                            <div style="background: url({{$posts[$i]->image}});width: 360px;height: 210px;"></div>
                                            @php
                                            }else{
                                            @endphp
                                            <div style="background: url({{asset('storage/'. $posts[$i]->image)}});width: 360px;height: 210px;"></div>
                                            @php
                                            }
                                            @endphp
                                            <div style="background-color: #ffffff;height: 150px;padding-top: 15px;">
                                                <!-- <h1 class="border rounded" style="font-size: 15px;padding-right: 15px;padding-left: 15px;padding-top: 5px;font-weight: 700;color: #ffffff;width: 80px;background-color: #005005;height: 28px;margin-left: 6px;margin-top: 10px;">Health</h1> -->
                                                <article style="font-size: 15px;padding-right: 10px;padding-top: 0px;font-weight: 500;color: rgb(61,61,61);padding-left: 10px;">{!!$posts[$i]->body!!}</article>
                                                <a href="{{route('blog.post',$slug)}}?id={{$posts[$i]->id}}" class="btn btn-primary" role="button" style="background-color: rgba(2,102,42,0);width: 150px;height: 35px;border: 2px solid #02662a;color: #02662a;padding-top: 3px;padding-bottom: 3px;margin-left: 6px;">Read More</a></div>
                                        </div>
                                    </li>
                                    @php
                                        }
                                    @endphp
                                </ul>
                            </div>
                            <div class="carousel-item">
                                <ul class="list-inline">
                                @php
                                    for($i=3;$i<6;$i++){

                                    $slug=join('-',explode(' ',strtolower($posts[$i]->title)) )

                                    @endphp

                                    <li class="list-inline-item" id="listing" style="width: 360px;">
                                        <div class="shadow-sm" style="width: 360px;background-color: #ffffff;padding-bottom: 25px;">
                                            <div style="background-color: #ffffff;padding-bottom: 20px;">
                                                <h1 style="font-size: 17px;padding-right: 10px;padding-left: 10px;padding-top: 20px;color: #313437;font-weight: 700;">{{$posts[$i]->title}}</h1>
                                            </div>
                                            @php
                                            if(substr($posts[$i]->image,0,4)=='http'){
                                            @endphp
                                            <div style="background: url({{$posts[$i]->image}});width: 360px;height: 210px;"></div>
                                            @php
                                            }else{
                                            @endphp
                                            <div style="background: url({{asset('storage/'. $posts[$i]->image)}});width: 360px;height: 210px;"></div>
                                            @php
                                            }
                                            @endphp

                                            <div style="background-color: #ffffff;height: 150px;padding-top: 15px;">
                                                <!-- <h1 class="border rounded" style="font-size: 15px;padding-right: 15px;padding-left: 15px;padding-top: 5px;font-weight: 700;color: #ffffff;width: 80px;background-color: #005005;height: 28px;margin-left: 6px;margin-top: 10px;">Health</h1> -->
                                                <article style="font-size: 15px;padding-right: 10px;padding-top: 0px;font-weight: 500;color: rgb(61,61,61);padding-left: 10px;">{!!$posts[$i]->body!!}</article>
                                                <a class="btn btn-primary" href="{{route('blog.post',$slug)}}?id={{$posts[$i]->id}}" role="button" style="background-color: rgba(2,102,42,0);width: 150px;height: 35px;border: 2px solid #02662a;color: #02662a;padding-top: 3px;padding-bottom: 3px;margin-left: 6px;">Read More</a></div>
                                        </div>
                                    </li>
                                    @php
                                        }
                                    @endphp

                                </ul>
                            </div>
                        </div>
                        <div>
                            <a class="carousel-control-prev" style="left:-120px" href="#carousel-2" role="button" data-slide="prev"><span style="background-image: url({{asset('images/icons/back.svg')}});height:41px;width:41px" class="carousel-control-next-icon"></span><span  class="sr-only">Previous</span></a>
                            <a class="carousel-control-next" style="right:-120px" href="#carousel-2" role="button" data-slide="next"><span style="background-image: url({{asset('images/icons/next.svg')}});height:41px;width:41px" class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        </section>
        @endif
