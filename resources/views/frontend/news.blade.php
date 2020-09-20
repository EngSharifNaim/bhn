@extends('frontend.layouts.app')
@section('content')
<div id="colorlib-main">
    <aside id="colorlib-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
               <li style="background-image: url({{url('assets/images/blog-2.jpg')}});">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                               <div class="slider-text-inner">
                                <div class="desc">
                                    <h1>{{$blog->title}} </h1>
                                    <h2>{!! substr($blog->details, 0 ,100) !!} <a href="#" target="_blank"></a></h2>
                                     <p><a class="btn btn-primary btn-learn" href="#details">تفاصيل<i class="icon-arrow-right3"></i></a></p>
                                 </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
              </ul>
          </div>
    </aside>

    <div class="colorlib-about" id="details">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                    <div class="about-desc">
                        <span class="heading-meta"></span>
                        <h2 class="colorlib-heading">تفاصيل الخبر</h2>
                        <p>{!! $blog->details !!}</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-work" id="projects">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">مشاريع</span>
                    <h2 class="colorlib-heading animate-box fadeInUp animated">البوم الصور</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url({{url('assets/images/img-6.jpg')}});">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 01</a></h3>
                                <span>Building</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url({{url('assets/images/img-6.jpg')}});">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 06</a></h3>
                                <span>Table, Chairs</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url({{url('assets/images/img-6.jpg')}});">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 06</a></h3>
                                <span>Table, Chairs</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url({{url('assets/images/img-6.jpg')}});">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 06</a></h3>
                                <span>Table, Chairs</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="colorlib-blog" id="news">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">أخبار</span>
                    <h2 class="colorlib-heading">محتويات ذات صلة</h2>
                </div>
            </div>
            <div class="row">
                @foreach($related_blogs as $blog)
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="blog.html" class="blog-img"><img src="{{url('assets/images/blog-2.jpg')}}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>{{$blog->created_at}} </small>  <small>  </small>  <small> </i> </small></span>
                            <h3><a href="blog.html">{{$blog->title}}</a></h3>
                            <p>{{substr($blog->details,0,100)}} ...</p>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>


    <div class="colorlib-contact" id="contact">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">تواصل معنا</span>
                    <h2 class="colorlib-heading">إدا كان لديك أي شكوى او اقتراح يرجى مراسلتنا على الفور</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="colorlib-feature colorlib-feature-sm animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                        <div class="colorlib-icon">
                            <i class="icon-globe-outline"></i>
                        </div>
                        <div class="colorlib-text">
                            <p><a href="#">info@beithanoun.ps</a></p>
                        </div>
                    </div>

                    <div class="colorlib-feature colorlib-feature-sm animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                        <div class="colorlib-icon">
                            <i class="icon-map"></i>
                        </div>
                        <div class="colorlib-text">
                            <p>بيت حانون - شارع خليل الوزير - مدخل حي الزيتون</p>
                        </div>
                    </div>

                    <div class="colorlib-feature colorlib-feature-sm animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                        <div class="colorlib-icon">
                            <i class="icon-phone"></i>
                        </div>
                        <div class="colorlib-text">
                            <p><a href="tel://">+970 8 2488012</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-md-push-1">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="الإسم">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="رقم الجوال">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="الموضوع">
                                </div>
                                <div class="form-group">
                                    <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="الرسالة"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-send-message" value="إرسال">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div></div>
@endsection
