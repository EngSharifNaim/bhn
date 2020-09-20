@extends('frontend.layouts.app')
@section('content')
<div id="colorlib-main">
    <aside id="colorlib-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                @foreach($slider_news as $blog)
               <li style="background-image: url(assets/images/blog-1.jpg);">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                               <div class="slider-text-inner">
                                <div class="desc">
                                    <h1>{{$blog->title}} </h1>
                                    <h2>{!! substr($blog->details,0,100) !!} ... <a href="#" target="_blank"></a></h2>
                                     <p><a class="btn btn-primary btn-learn" href="{{url('news/' . $blog->id)}}">تفاصيل<i class="icon-arrow-right3"></i></a></p>
                                 </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
                    @endforeach
              </ul>
          </div>
    </aside>
    <div class="colorlib-blog" id="news" style="padding-top: 20px">
        <div class="colorlib-narrow-content">
            <div class="row" style="background-color: #DCDCDC">
                <div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft" >
                    <span class="heading-meta">مستجدات البلدية</span>
                    <h2 class="colorlib-heading">آخر الأخبار و المستجدات</h2>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                <div class="col col-md-3">
                    <h2 class="colorlib-heading">{{$category->name}}</h2>
                    @if($category->blogs->first())
                    <div class="col-md-12 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="blog-entry">
                            <a href="{{url('news')}}" class="blog-img"><img src="assets/images/blog-1.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                            <div class="desc">
                                <span><small>10/09/2020 </small>  <small>  </small>  <small> </i> </small></span>
                                <h3><a href="{{url('news/' . $blog->id)}}">{{$category->blogs->first()->title}}</a></h3>
                                <p>{{$category->blogs->first()->title}}.</p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @foreach($category->blogs->where('main',1) as $key => $blog)
                        @if($key > 0)
                            <div class="col-md-6 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="{{url('news')}}" class="blog-img"><img src="assets/images/blog-2.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    <div class="desc">
                                        <span><small>15/09/2020 </small></span>
                                        <h3><a href="{{url('news/' . str_replace(' ','_',$blog->title) . '/' .  $blog->id)}}">{{$blog->title}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="col-md-12 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <a href="{{url('category_news/' . str_replace(' ' , '_' , $category->name) . '/' . $category->id )}}" class="btn btn-primary btn-block">عرض المزيد من المحتيات</a>
                    </div>


                </div>
                    @endforeach
            </div>
        </div>
    </div>

    <div class="colorlib-about">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(assets/images/Capture.PNG);">
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="about-desc">
                        <span class="heading-meta">أهلا بكم</span>
                        <h2 class="colorlib-heading">ماذا تعرف عن بيت حانون</h2>
                        <p>يت حانون قرية قديمة كان بها بيت لعبادة الآلهة والأصنام أسسها ملك وثنى هو الملك حانون وكانت مصيفاً له جرت بينه وبين الملك اليافى حروب طويلة حتى أهلكا بعضهما فعملوا له تمثالاً على حسب عاداتهم تذكاراً لعظمائهم ووضعوه في بيت العبادة فاشتهرت القرية ببيت حانون وورد في تاريخ بئر السبع في سنة 720 ق.م مشى سرجون بجيوشه إلى جنوب فلسطين فأخضع الفلسطينيين. دخل أهلها الإسلام منذ الفتح الإسلامي وقد جرت فيها وقائع وحصلت نواحيها معارك دموية لأنها باب غزة الشمالي وفي الأحد الرابع عشر الأول من عام 637هـ وقعت حرب بين الفرنجة والمسلمين انكسر فيها الفرنج كما تذكر البلاطة المثبتة فوق مسجد القرية الذي بنى خصيصاً لذكرى هذه الموقعة وسمي مسجد النصر إحياء لذكرى هذه الواقعة.</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="colorlib-about">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="about-desc">
                        <span class="heading-meta">أهلا بكم</span>
                        <h2 class="colorlib-heading">ماذا تعرف عن بيت حانون</h2>
                        <p>يت حانون قرية قديمة كان بها بيت لعبادة الآلهة والأصنام أسسها ملك وثنى هو الملك حانون وكانت مصيفاً له جرت بينه وبين الملك اليافى حروب طويلة حتى أهلكا بعضهما فعملوا له تمثالاً على حسب عاداتهم تذكاراً لعظمائهم ووضعوه في بيت العبادة فاشتهرت القرية ببيت حانون وورد في تاريخ بئر السبع في سنة 720 ق.م مشى سرجون بجيوشه إلى جنوب فلسطين فأخضع الفلسطينيين. دخل أهلها الإسلام منذ الفتح الإسلامي وقد جرت فيها وقائع وحصلت نواحيها معارك دموية لأنها باب غزة الشمالي وفي الأحد الرابع عشر الأول من عام 637هـ وقعت حرب بين الفرنجة والمسلمين انكسر فيها الفرنج كما تذكر البلاطة المثبتة فوق مسجد القرية الذي بنى خصيصاً لذكرى هذه الموقعة وسمي مسجد النصر إحياء لذكرى هذه الواقعة.</p>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(assets/images/Capture.PNG);">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                    <h2 class="colorlib-heading">النشأة</h2>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>
                </div>
                <div class="col-md-6 animate-box fadeInRight animated" data-animate-effect="fadeInRight">
                    <div class="fancy-collapse-panel">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">الأهداف
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">الرؤية
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        <ul>
                                            <li>Separated they live in Bookmarksgrove right</li>
                                            <li>Separated they live in Bookmarksgrove right</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">الرسالة
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="colorlib-about" id="mayor">
        <div class="colorlib-narrow-content">
            <div class="row">

                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="about-desc">
                        <span class="heading-meta">رئيس البلدية</span>
                        <h2 class="colorlib-heading">د. عماد عبد الله عدوان</h2>
                        <p>يت حانون قرية قديمة كان بها بيت لعبادة الآلهة والأصنام أسسها ملك وثنى هو الملك حانون وكانت مصيفاً له جرت بينه وبين الملك اليافى حروب طويلة حتى أهلكا بعضهما فعملوا له تمثالاً على حسب عاداتهم تذكاراً لعظمائهم ووضعوه في بيت العبادة فاشتهرت القرية ببيت حانون وورد في تاريخ بئر السبع في سنة 720 ق.م مشى سرجون بجيوشه إلى جنوب فلسطين فأخضع الفلسطينيين. دخل أهلها الإسلام منذ الفتح الإسلامي وقد جرت فيها وقائع وحصلت نواحيها معارك دموية لأنها باب غزة الشمالي وفي الأحد الرابع عشر الأول من عام 637هـ وقعت حرب بين الفرنجة والمسلمين انكسر فيها الفرنج كما تذكر البلاطة المثبتة فوق مسجد القرية الذي بنى خصيصاً لذكرى هذه الموقعة وسمي مسجد النصر إحياء لذكرى هذه الواقعة.</p>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(assets/images/emad.jpg);">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-blog" id="majles">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">المجلس البلدي</span>
                    <h2 class="colorlib-heading">أعضاء المجلس البلدي</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="{{url('news')}}" class="blog-img"><img src="assets/images/abdazeez.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>10/09/2020 </small>  <small>  </small>  <small> </i> </small></span>
                            <h3><a href="{{url('news')}}">عبد العزيز قاسم - نائي رئيس البلدية</a></h3>
                            <p>قامت البلدية بتعقيم كل من الشارع العام وشارع القرمان في اطار مواجهتها لفايروس كورونا.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="{{url('news')}}" class="blog-img"><img src="assets/images/ahmedamsha.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>15/09/2020 </small></span>
                            <h3><a href="{{url('news')}}">د. أحمد أبو عمشة</a></h3>
                            <p>قامت لجنة الطوارئ في بلدية بيت حانون باجتماع لمتابعة سير عمل الجنة</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="{{url('news')}}" class="blog-img"><img src="assets/images/ahmedfayad.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>01/09/2020 </small> </span>
                            <h3><a href="{{url('news')}}">أز أحمد فياض</a></h3>
                            <p>قامت البلدية وبالتعاون مع جمعية خيرة بتقديم مساعدة طائرة عبارة عن مواد تنظيف لموظفي مستشفى بيت حانون</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="colorlib-blog" id="majlesh">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">أخبار</span>
                    <h2 class="colorlib-heading">آخر الأخبار و المستجدات</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="{{url('news')}}" class="blog-img"><img src="images/blog-1.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="{{url('news')}}">Renovating National Gallery</a></h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="{{url('news')}}" class="blog-img"><img src="images/blog-2.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="{{url('news')}}">Wordpress for a Beginner</a></h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="{{url('news')}}" class="blog-img"><img src="images/blog-3.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Inspiration </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="{{url('news')}}">Make website from scratch</a></h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <div class="colorlib-services" id="departments">
        <div class="colorlib-narrow-content">
            <div class="row" style="direction: rtl">
                <div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">هيكلية</span>
                    <h2 class="colorlib-heading">أقسام و دوائر البلدية</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url(assets/images/services-1.jpg)"></div>
                                <div class="desc">
                                    <h3>التخطيط</h3>
                                </div>
                            </a>
                            <a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url(assets/images/services-2.jpg)"></div>
                                <div class="desc">
                                    <h3>التطوير</h3>
                                </div>
                            </a>
                            <a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url(assets/images/services-3.jpg)"></div>
                                <div class="desc">
                                    <h3>المتابعة </h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 move-bottom">
                            <a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url(assets/images/services-4.jpg)"></div>
                                <div class="desc">
                                    <h3>المراقبة</h3>
                                </div>
                            </a>
                            <a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url(assets/images/services-5.jpg)"></div>
                                <div class="desc">
                                    <h3>المسؤولية </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft" style="direction: rtl; alignment: right">
                                <div class="colorlib-text" style="direction: rtl; alignment: right">
                                    <h3>دائرة الهندسة</h3>
                                    <p>متابعة المخططات للبنية التحتية للمدينة ومتابعة وتسجيل خرائط المواطنين السكنية  </p>
                                </div>
                                <div class="colorlib-icon">
                                    <i class="flaticon-worker"></i>
                                </div>

                            </div>

                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="flaticon-sketch"></i>
                                </div>
                                <div class="colorlib-text">
                                    <h3>دائرة التخطيط والمشاريع</h3>
                                    <p>تخطيط وبناء روئية استراتيجية للمدينة للاعوام القادمة  والتطوير المستمر للنهوظ بمدينة متقدمة وجميلة </p>
                                </div>
                            </div>

                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="flaticon-engineering"></i>
                                </div>
                                <div class="colorlib-text">
                                    <h3>الدائرة المالية</h3>
                                    <p>تحصيل الفواتير  وجباية ومتابعة المشئات الاقتصادية والحرف في المدينة  </p>
                                </div>
                            </div>

                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="flaticon-crane"></i>
                                </div>
                                <div class="colorlib-text">
                                    <h3>دائرة العلاقات العامة </h3>
                                    <p>التواصل مع المواطنين والاطلاع على مقترحاتهم وشكاويهم  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(assets/images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="colorlib-narrow-content">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-skyline"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="60000" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">عدد السكان</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-engineer"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="150" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">عدد الموظفين</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">عدد المشاريع المنجزة </span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-worker"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="155005" data-speed="5000" data-refresh-interval="50">$</span>
                    <span class="colorlib-counter-label">ميزانية 2019</span>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-work" id="projects">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">مشاريع</span>
                    <h2 class="colorlib-heading animate-box">آخر المشاريع المنفذة</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url(assets/images/img-1.jpg);">
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
                <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url(assets/images/img-2.jpg);">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 02</a></h3>
                                <span>House, Apartment</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url(assets/images/img-3.jpg);">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 03</a></h3>
                                <span>Dining Room</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url(assets/images/img-4.jpg);">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 04</a></h3>
                                <span>House, Building</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url(assets/images/img-5.jpg);">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 05</a></h3>
                                <span>Condo, Pad</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url(assets/images/img-6.jpg);">
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
