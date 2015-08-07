@extends('frontend/layout/layout')
@section('styles')
  
@stop
@section('scripts')@stop
    @section('top') 
    @include('frontend.top-default')
    @endsection
@section('pagetitle')
        <!-- Page Title ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>FAQs</h1>
                <span>All your Questions answered in one place</span>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                 
                    <li class="active">FAQs</li>
                </ol>
            </div>

        </section><!-- #page-title end -->
@stop
        <!-- Content ============================================= -->


@section('content')


        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Post Content ============================================= -->
                    <div class="postcontent col_last nobottommargin clearfix">

                        <div id="faqs" class="faqs">

                            <div id="faqs-list" class="fancy-title title-bottom-border">
                                <h3>Some of your Questions:</h3>
                            </div>

                            <ul class="iconlist faqlist">
                            @foreach( $faqs as $faq )
                                <li><i class="icon-caret-right"></i>
                                <strong><a href="#" data-scrollto="#faq-1">{!! $faq->question !!}</a></strong>
                                </li>
                            @endforeach
                            </ul>

                            <div class="divider"><i class="icon-circle"></i></div>
                            @foreach( $faqs as $faq )
                            <h3 id="faq-1"><strong>Q.</strong> {!! $faq->question !!}</h3>
                            <small>answer</small>
                            <p>{!! $faq->answer !!}</p>
                            @endforeach
                        </div>
                            
                    </div><!-- .postcontent end -->

                    <!-- Sidebar ============================================= -->
                    <div class="sidebar nobottommargin clearfix">
                        <div class="sidebar-widgets-wrap">




                   {{--          <div class="widget widget_links clearfix">

                                <h4>Pages</h4>
                                <ul>
                                    <li><a href="#"><div>About Us</div></a></li>
                                    <li><a href="#"><div>About Us - Layout 2</div></a></li>
                                    <li><a href="#"><div>About Me</div></a></li>
                                    <li><a href="#"><div>Team Members</div></a></li>
                                    <li><a href="#"><div>Careers</div></a></li>
                                    <li><a href="#"><div>Side Navigation</div></a></li>
                                    <li><a href="#"><div>Page Submenu</div></a></li>
                                    <li><a href="#"><div>Services - Layout 1</div></a></li>
                                    <li><a href="#"><div>Services - Layout 2</div></a></li>
                                    <li><a href="#"><div>Services - Layout 3</div></a></li>
                                    <li><a href="#"><div>FAQs - Layout 1</div></a></li>
                                    <li><a href="#"><div>FAQs - Layout 2</div></a></li>
                                    <li><a href="#"><div>FAQs - Layout 3</div></a></li>
                                    <li><a href="#"><div>FAQs - Layout 4</div></a></li>
                                    <li><a href="#"><div>Full Width Page</div></a></li>
                                    <li><a href="#"><div>Full Width - Wide Page</div></a></li>
                                    <li><a href="#"><div>Right Sidebar Page</div></a></li>
                                    <li><a href="#"><div>Left Sidebar Page</div></a></li>
                                    <li><a href="#"><div>Both Sidebar Page</div></a></li>
                                    <li><a href="#"><div>Both Right Sidebar Page</div></a></li>
                                    <li><a href="#"><div>Both Left Sidebar Page</div></a></li>
                                    <li><a href="#"><div>Maintenance Page</div></a></li>
                                    <li><a href="#"><div>Blank Page</div></a></li>
                                    <li><a href="#"><div>Sitemap</div></a></li>
                                    <li><a href="#"><div>Login/Register</div></a></li>
                                    <li><a href="#"><div>404 - Simple Layout</div></a></li>
                                    <li><a href="#"><div>404 - Parallax Image</div></a></li>
                                    <li><a href="#"><div>404 - HTML5 Video</div></a></li>
                                </ul>

                            </div> --}}

                            <div class="widget clearfix">

                                <h4>Recent Posts</h4>
                                <div id="post-list-footer">
                             {{--    @foreach($articles as $article)
                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                        @if($article->path)
                                            <a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}" class="nobg">
                                            <img src="{!! url($article->path . $article->file_name) !!}" alt="{!! $article->title !!}">
                                            </a>
                                        @else
                                            <a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}" class="nobg">
                                            <img src="{!! url('assets/images/blog_default.png') !!}" alt="{!! $article->title !!}">
                                            </a>
                                        @endif
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}">
                                                {!! $article->title !!}</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>{!! $article->created_at !!}</li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
 --}}
 
                                </div>

                            </div>

                            <div class="widget clearfix">

                                <h4>Connect with Us</h4>
                                <a href="#" class="social-icon si-colored si-small si-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-delicious" data-toggle="tooltip" data-placement="top" title="Delicious">
                                    <i class="icon-delicious"></i>
                                    <i class="icon-delicious"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-android" data-toggle="tooltip" data-placement="top" title="Android">
                                    <i class="icon-android"></i>
                                    <i class="icon-android"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-gplus" data-toggle="tooltip" data-placement="top" title="Google Plus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-stumbleupon" data-toggle="tooltip" data-placement="top" title="Stumbleupon">
                                    <i class="icon-stumbleupon"></i>
                                    <i class="icon-stumbleupon"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-foursquare" data-toggle="tooltip" data-placement="top" title="Foursquare">
                                    <i class="icon-foursquare"></i>
                                    <i class="icon-foursquare"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-forrst" data-toggle="tooltip" data-placement="top" title="Forrst">
                                    <i class="icon-forrst"></i>
                                    <i class="icon-forrst"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-digg" data-toggle="tooltip" data-placement="top" title="Digg">
                                    <i class="icon-digg"></i>
                                    <i class="icon-digg"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-spotify" data-toggle="tooltip" data-placement="top" title="Spotify">
                                    <i class="icon-spotify"></i>
                                    <i class="icon-spotify"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-reddit" data-toggle="tooltip" data-placement="top" title="Reddit">
                                    <i class="icon-reddit"></i>
                                    <i class="icon-reddit"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-blogger" data-toggle="tooltip" data-placement="top" title="Blogger">
                                    <i class="icon-blogger"></i>
                                    <i class="icon-blogger"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-dribbble" data-toggle="tooltip" data-placement="top" title="Dribbble">
                                    <i class="icon-dribbble"></i>
                                    <i class="icon-dribbble"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-flickr" data-toggle="tooltip" data-placement="top" title="Flickr">
                                    <i class="icon-flickr"></i>
                                    <i class="icon-flickr"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-linkedin" data-toggle="tooltip" data-placement="top" title="Linked In">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-rss" data-toggle="tooltip" data-placement="top" title="RSS">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-skype" data-toggle="tooltip" data-placement="top" title="Skype">
                                    <i class="icon-skype"></i>
                                    <i class="icon-skype"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-youtube" data-toggle="tooltip" data-placement="top" title="Youtube">
                                    <i class="icon-youtube"></i>
                                    <i class="icon-youtube"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-vimeo" data-toggle="tooltip" data-placement="top" title="Vimeo">
                                    <i class="icon-vimeo"></i>
                                    <i class="icon-vimeo"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-yahoo" data-toggle="tooltip" data-placement="top" title="Yahoo">
                                    <i class="icon-yahoo"></i>
                                    <i class="icon-yahoo"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-github" data-toggle="tooltip" data-placement="top" title="Github">
                                    <i class="icon-github-circled"></i>
                                    <i class="icon-github-circled"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-tumblr" data-toggle="tooltip" data-placement="top" title="Trumblr">
                                    <i class="icon-tumblr"></i>
                                    <i class="icon-tumblr"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-instagram" data-toggle="tooltip" data-placement="top" title="Instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-pinterest" data-toggle="tooltip" data-placement="top" title="Pinterst">
                                    <i class="icon-pinterest"></i>
                                    <i class="icon-pinterest"></i>
                                </a>

                            </div>

                   

                        </div>
                    </div>
                    <!-- .sidebar end -->

                </div>

            </div>

        </section><!-- #content end -->

 @endsection

@stop
