@extends('frontend.layouts.app')
@section('content')
<div id="colorlib-main">

    <div class="colorlib-blog">
        <div class="colorlib-narrow-content">
            <div class="row" style="background-color: #DCDCDC; margin-bottom: 30px">
                <div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft" >
                    <span class="heading-meta">مستجدات البلدية</span>
                    <h2 class="colorlib-heading">آخر الأخبار و المستجدات</h2>
                </div>
            </div>
            <div class="colorlib-blog">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">مستجدات البلدية</span>
                            <h2 class="colorlib-heading">{{str_replace('_',' ',$name)}}</h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($news as $blog)
                        <div class="col-md-4 col-sm-6 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="blog.html" class="blog-img"><img src="{{asset('assets/images/blog-1.jpg')}}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc">
                                    <span><small>{{$blog->created_at}} </small> | <small> {{$blog->user_id}} </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                    <h3><a href="blog.html">{{$blog->title}}</a></h3>
                                    <p>{!! $blog->details !!}</p>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>

                    <div class="row">
                        <div class="col-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                            <ul class="pagination">
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
