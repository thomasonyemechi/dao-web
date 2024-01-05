@extends('layouts.app')
@section('page_title')
    Blog Post
@endsection
@section('page_content')
    <section class="page-title" style="background-image: url(assets/images/home/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h2>Our Blog</h2>
                </div>
                <ul class="bread-crumb">
                    <li><a href="/">Home</a></li>
                    <li>what's happening</li>
                </ul>
            </div>
        </div>
    </section>




    <section class="blog-classic blog-page sidebar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                    <div class="blog-classic-content">
                        <div class="single-item  wow fadeInUp animated animated animated animated animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="img-box">
                                <a href="/blog/{{ $post->slug }}">
                                    <figure><img src="http://localhost/daodentals//{{ $post->image }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="lower-content">
                                <ul class="meta">
                                    <li>Posted: <span> {{ $post->created_at }} </span></li>
                                </ul>
                                <div class="title"><a href="#"> {{ $post->title }} </a>
                                </div>
                                <div class="text">
                                    <p>
                                        {!! $post->body !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <ul class="page-pagination centered">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul> --}}
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 sidbar-catagory service-details">
                    <div class="sidebar">

                        <div class="sidebar-widget search-box">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search" required="">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>

                        <div class="sidebar-widget sidebar-catagories">
                            <div class="title">Categories</div>
                            <div class="our-department">
                                <ul class="list">
                                    @foreach (explode(',', $post->tags) as $tag)
                                        <li><a href="#" >{{$tag}} </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="doctors-img centered">
                                <div class="img-box">
                                    <figure><img src="{{ asset('assets/images/service/d1.jpg') }}" alt=""></figure>
                                </div>
                                <div class="img-content">
                                    <div class="text">For Consultation<br>Call : <h3> {{ env('PHONE_1') }} </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-shediul">
                            <div class="opeing-hours">
                                <div class="title">Opening Hours</div>
                                <div class="shediul">
                                    <p>Monday - Saturday : 8am - 6pm</p>
                                    <p>Sunday : 2pm - 8pm</p>
                                    <div class="text">We are always open on the days of all
                                        calender &amp; bank holidays.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
