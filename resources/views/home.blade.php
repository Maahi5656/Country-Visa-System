@extends('inc.frontend.main')

@section('content')

<section class="banner-area">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-8 col-md-8">
<div class="banner-text">
<span>Research More & More</span>
<h1>We are Happy To Build Your Best Business</h1>
<p>We help you for getting success</p>
<div class="banner-button">
<a class="default-btn" href="book-table.html">
Let's Start
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="video-wrap">
<div class="video-btn-wrap">
<a href="play-video.html" class="video-btn" data-ilb2-video='{"controls":"controls", "autoplay":false, "sources":[{"src":"assets/img/business.mp4", "type":"video/mp4"}]}' data-imagelightbox="video">
<i class="fa fa-play"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="shape shape-1">
<img src="{{ asset('frontend') }}/img/shape/1.png" alt="Shape">
</div>
<div class="shape shape-3">
<img src="{{ asset('frontend') }}/img/shape/3.png" alt="Shape">
</div>
<div class="shape shape-4">
<img src="{{ asset('frontend') }}/img/shape/4.png" alt="Shape">
</div>
<div class="shape shape-5">
<img src="{{ asset('frontend') }}/img/shape/5.png" alt="Shape">
</div>
<div class="shape shape-9">
<img src="{{ asset('frontend') }}/img/shape/5.png" alt="Shape">
</div>
<div class="shape shape-6">
<img src="{{ asset('frontend') }}/img/shape/6.png" alt="Shape">
</div>
<div class="shape shape-10">
<img src="{{ asset('frontend') }}/img/shape/6.png" alt="Shape">
</div>
<div class="shape shape-7">
<img src="{{ asset('frontend') }}/img/shape/7.png" alt="Shape">
</div>
<div class="shape shape-11">
<img src="{{ asset('frontend') }}/img/shape/7.png" alt="Shape">
</div>
</section>


<section class="box-area pt-100 m-0 pb-70">
    <div class="container">
        <form action="" method="post">
            <div class="row align-items-center">
            <div class="col-lg-3 col-md-3">
                <div class="form-group">
                    <label><b>I am a citizen of </b><span class="required">*</span></label>
                    <input type="text" class="form-control" value="Bangladesh">
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="form-group">
                    <label><b>Travelling To</b><span class="required">*</span></label>
                    <div class="select-box">
                        <select class="form-control">
                            <option value="5">United Arab Emirates</option>
                            <option value="1">China</option>
                            <option value="2">United Kingdom</option>
                            <option value="0">Germany</option>
                            <option value="3">France</option>
                            <option value="4">Japan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="form-group">
                    <label> <b>Category</b><span class="required">*</span></label>
                    <div class="select-box">
                        <select class="form-control">
                            <option value="">Select Category</option>
                            <option value="1">China</option>
                            <option value="2">United Kingdom</option>
                            <option value="0">Germany</option>
                            <option value="3">France</option>
                            <option value="4">Japan</option>
                        </select>
                    </div>                    
                </div>                                
            </div>
            <div class="col-lg-3 col-md-3">
                    <div class="form-group mt-4 pt-2">
                        <button type="submit" class="default-btn btn-two">
                            <span class="label">Check Requirement</span>
                            <i class='bx bx-plus'></i>
                        </button>
                    </div>
                </div>   
            </div>
            </div>        
        </form>

</section>


<section class="about-us-area about-us-area-2 ptb-100">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="about-title">
<span>About Us</span>
<h2>We ProvideTotal Business Solutions</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gda. Risus commodo viverra maecenas accumsan.</p>
<ul>
<li>
<i class="flaticon-right-arrow"></i>
Premium Service Beyond you
</li>
<li>
<i class="flaticon-right-arrow"></i>
Set a Like this Photo
</li>
<li>
<i class="flaticon-right-arrow"></i>
Premium Service beyond you
</li>
<li>
<i class="flaticon-right-arrow"></i>
A wonderful Serenity
</li>
</ul>
<a class="default-btn" href="#">Discover More</a>
</div>
</div>
<div class="col-lg-6">
<div class="about-us-img">
<img src="{{ asset('frontend') }}/img/about-1.jpg" alt="About Us">
<div class="about-img-2">
<img src="{{ asset('frontend') }}/img/about-2.jpg" alt="About Us">
</div>
</div>
</div>
</div>
</div>
</section>


<section class="processing-areac ptb-100">
<div class="container">
<div class="section-title">
<span>Steps For Processing</span>
<h2>Take Some Easy Steps For Processing</h2>
</div>
<div class="row">
<div class="col-lg-3 col-sm-6 icon-color">
<div class="single-processing">
<span>1</span>
<div class="processing-icon">
<i class="fa fa-phone"></i>
</div>
<h3>Contact Us First</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 icon-color">
<div class="single-processing">
<span>2</span>
<div class="processing-icon">
<i class="flaticon-interview"></i>
</div>
<h3>Consult With Us</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 icon-color">
<div class="single-processing">
<span>3</span>
<div class="processing-icon">
<i class="flaticon-target"></i>
</div>
<h3>Place Order</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 icon-color">
<div class="single-processing">
<span>4</span>
<div class="processing-icon">
<i class="flaticon-money"></i>
</div>
<h3>Make Payment</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
</div>
</div>
</div>
</div>
</section>


<section class="services-area pb-100">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="services-title">
<span>Services</span>
<h2>Take Some Easy Steps For Processing</h2>
</div>
</div>
<div class="col-lg-6">
<div class="services-title">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit a blanditiis molestiae, earum et repellat ab saepe deserunt rem eaque harum velit magnam accusamus debitis, quia, ut officiis dignissimos placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit a blanditiis molestiae, earum et repellat ab saepe deserunt rem eaque harum.</p>
</div>
</div>
</div>
<div class="row">
<div class="service-wrap owl-carousel owl-theme">
<div class="single-services">
<img src="{{ asset('frontend') }}/img/services/1.jpg" alt="">
<div class="service-text">
<h3>
<a href="#">Business Strategy & Planing<i class="flaticon-strategy"></i></a>
</h3>
</div>
</div>
<div class="single-services">
<img src="{{ asset('frontend') }}/img/services/3.jpg" alt="">
<div class="service-text">
<h3>
<a href="#">Market Research & Analysis<i class="flaticon-strategy"></i></a>
</h3>
</div>
</div>
<div class="single-services">
<img src="{{ asset('frontend') }}/img/services/2.jpg" alt="">
<div class="service-text">
<h3>
<a href="#">Business Planning<i class="flaticon-strategy"></i></a>
</h3>
</div>
</div>
<div class="single-services">
<img src="{{ asset('frontend') }}/img/services/3.jpg" alt="">
<div class="service-text">
<h3>
<a href="#">Business Strategy & Planing <i class="flaticon-strategy"></i></a>
</h3>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="features-area">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="features-left-area">
</div>
</div>
<div class="col-lg-6">
<div class="features-right-area">
<div class="features-title">
<span>Features</span>
<h2>We Can Give the Best Facilities for Business</h2>
</div>
<div class="features-list">
<i class="flaticon-creativity"></i>
<div class="creative-text">
<h3>Risk Management</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam veniam voluptate accusantium tempora velit modi neque consequatur officia animi</p>
</div>
</div>
<div class="features-list">
<i class="flaticon-hand"></i>
<div class="creative-text">
<h3>Creative Idea</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam veniam voluptate accusantium tempora velit modi neque consequatur officia animi</p>
</div>
</div>
<div class="features-list">
<i class="flaticon-money"></i>
<div class="creative-text">
<h3>Easy To Manage Fund</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam veniam voluptate accusantium tempora velit modi neque consequatur officia animi</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="pricing-area pt-100 pb-70">
<div class="container">
<div class="section-title">
<span>Our Pricing Table</span>
<h2>Choose Pricing Packages</h2>
</div>
<div class="row">
<div class="col-lg-4 col-sm-6">
<div class="single-pricing">
<h3>Standard Plan</h3>
<i class="money-bag flaticon-money-bag"></i>
<div class="pricing-wrap">
<span>$550<sub>/Month</sub></span>
<ul>
<li>
<i class="flaticon-check-mark"></i>
Advanced Analysis
</li>
<li>
<i class="flaticon-check-mark"></i>
Strategy & Marketing
</li>
<li>
<i class="flaticon-check-mark"></i>
Corporate Finance
</li>
</ul>
<a class="default-btn" href="#">Choose Plan</a>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="single-pricing">
<h3>Premium Plan</h3>
<i class="money-bag flaticon-money-bag"></i>
<div class="pricing-wrap">
<span>$570<sub>/Month</sub></span>
<ul>
<li>
<i class="flaticon-check-mark"></i>
Advanced Analysis
</li>
<li>
<i class="flaticon-check-mark"></i>
Strategy & Marketing
</li>
<li>
<i class="flaticon-check-mark"></i>
Corporate Finance
</li>
</ul>
<a class="default-btn" href="#">Choose Plan</a>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="single-pricing">
<h3>Commercial</h3>
<i class="money-bag flaticon-money-bag"></i>
<div class="pricing-wrap">
<span>$990<sub>/Month</sub></span>
<ul>
<li>
<i class="flaticon-check-mark"></i>
Advanced Analysis
</li>
<li>
<i class="flaticon-check-mark"></i>
Strategy & Marketing
</li>
<li>
<i class="flaticon-check-mark"></i>
Corporate Finance
</li>
</ul>
<a class="default-btn" href="#">Choose Plan</a>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="partner-area pb-100">
<div class="container">
<div class="partner-wrap owl-carousel owl-theme">
<div class="single-logo">
<a href="#">
<img src="{{ asset('frontend') }}/img/partner-logo/1.png" alt="Partner">
</a>
</div>
<div class="single-logo">
<a href="#">
<img src="{{ asset('frontend') }}/img/partner-logo/2.png" alt="Partner">
</a>
</div>
<div class="single-logo">
<a href="#">
<img src="{{ asset('frontend') }}/img/partner-logo/3.png" alt="Partner">
</a>
</div>
<div class="single-logo">
<a href="#">
<img src="{{ asset('frontend') }}/img/partner-logo/4.png" alt="Partner">
</a>
</div>
<div class="single-logo">
<a href="#">
<img src="{{ asset('frontend') }}/img/partner-logo/5.png" alt="Partner">
</a>
</div>
</div>
</div>
</div>


<section class="client-area ptb-100">
<div class="container">
<div class="section-title">
<span>Press Coverage</span>
<h2>What Our Client Say</h2>
</div>
<div class="row align-items-center client-bg">
<div class="col-lg-6 p-0">
<div class="client-img">
<img src="{{ asset('frontend') }}/img/client-img/client-img.jpg" alt="">
</div>
</div>
<div class="col-lg-6 p-0">
<div class="client-details-wrap owl-carousel owl-theme">
<div class="client-details">
<img src="{{ asset('frontend') }}/img/client-img/1.jpg" alt="">
<h3>Amelia Daniel</h3>
<span>Chairman and founder</span>
<i class="flaticon-quote"></i>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus viverra maecenas accumsan lacus vel facilisis.</p>
<ul>
<li>
<i class="fa fa-star"></i>
</li>
<li>
<i class="fa fa-star"></i>
</li>
<li>
<i class="fa fa-star"></i>
</li>
<li>
<i class="fa fa-star"></i>
</li>
<li>
<i class="fa fa-star"></i>
</li>
</ul>
</div>
<div class="client-details">
<img src="{{ asset('frontend') }}/img/client-img/2.jpg" alt="">
<h3>Alex Mason</h3>
<span>Visual Media</span>
<i class="flaticon-quote"></i>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus viverra maecenas accumsan lacus vel facilisis.</p>
<ul>
<li>
<i class="fa fa-star"></i>
</li>
<li>
<i class="fa fa-star"></i>
</li>
<li>
<i class="fa fa-star"></i>
</li>
<li>
<i class="fa fa-star"></i>
</li>
<li>
<i class="fa fa-star"></i>
</li>
</ul>
</div>
<div class="client-details">
<img src="{{ asset('frontend') }}/img/client-img/3.jpg" alt="">
<h3>Michael Harper</h3>
<span>Sales Manager</span>
<i class="flaticon-quote"></i>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus viverra maecenas accumsan lacus vel facilisis.</p>
<ul>
<li>
<i class="fa fa-star"></i>
</li>
<li>
<i class="fa fa-star"></i>
</li>
<li>
<i class="fa fa-star"></i>
</li>
<li>
<i class="fa fa-star"></i>
</li>
<li>
<i class="fa fa-star"></i>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="team-area team-area-two pb-70">
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="section-title">
<span>Team Member</span>
<h2>Our Expart Team</h2>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore quae illo rerum odio aut dolor eos veniam voluptas. Nihil, voluptates dolore! Tempora perspiciatis reprehenderit amet, ipsum soluta animi rerum aspernatur.</p>
<a class="default-btn" href="#">Meet the team</a>
</div>
</div>
<div class="col-lg-8">
<div class="row">
<div class="team-wraps owl-carousel owl-theme">
<div class="single-team">
<div class="team-img">
<img src="{{ asset('frontend') }}/img/team/2.jpg" alt="">
<ul class="team-icon">
<li>
<a href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-instagram "></i>
</a>
</li>
</ul>
</div>
<div class="team-text">
<h3>Frazer Diamond</h3>
<span>Founder & CEO</span>
</div>
</div>
<div class="single-team">
<div class="team-img">
<img src="{{ asset('frontend') }}/img/team/3.jpg" alt="">
<ul class="team-icon">
<li>
<a href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-instagram "></i>
</a>
</li>
</ul>
</div>
<div class="team-text">
<h3>Frazer Diamond</h3>
<span>SR.Product Engineer</span>
</div>
</div>
<div class="single-team">
<div class="team-img">
<img src="{{ asset('frontend') }}/img/team/4.jpg" alt="">
<ul class="team-icon">
<li>
<a href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-instagram "></i>
</a>
</li>
</ul>
</div>
<div class="team-text">
<h3>Denial Peterson</h3>
<span>Founder & CEO</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="questions-area pb-100">
<div class="container">
<div class="section-title">
<span>FAQ</span>
<h2>Frequently Asked Questions</h2>
</div>
<div class="row align-items-center">
<div class="col-lg-6">
<div class="questions-bg-area">
<div class="row">
<div class="col-lg-12">
<div class="faq-accordion">
<ul class="accordion">
<li class="accordion-item">
<a class="accordion-title active" href="javascript:void(0)">
<i class="fa fa-arrow-right"></i>
How to change partner gray image to color?Q
</a>
<p class="accordion-content show">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis deleniti nisi necessitatibus, dolores voluptates quam blanditiis fugiat doloremque? Excepturi, minus rem error aut necessitatibus quasi voluptates assumenda ipsum provident tenetur? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni nesciunt consectetur sed, tempore, corporis ea maiores libero.</p>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="fa fa-arrow-right"></i>
Where do I add my email address in the caldera form?
</a>
<p class="accordion-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis deleniti nisi necessitatibus, dolores voluptates quam blanditiis fugiat doloremque? Excepturi, minus rem error aut necessitatibus quasi voluptates assumenda ipsum provident tenetur? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni nesciunt consectetur sed, tempore, corporis ea maiores libero.</p>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="fa fa-arrow-right"></i>
Page showing 404 but this page still there?
</a>
<p class="accordion-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis deleniti nisi necessitatibus, dolores voluptates quam blanditiis fugiat doloremque? Excepturi, minus rem error aut necessitatibus quasi voluptates assumenda ipsum provident tenetur? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni nesciunt consectetur sed, tempore, corporis ea maiores libero.</p>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="fa fa-arrow-right"></i>
How to increase upload_max_filesize?
</a>
<p class="accordion-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis deleniti nisi necessitatibus, dolores voluptates quam blanditiis fugiat doloremque? Excepturi, minus rem error aut necessitatibus quasi voluptates assumenda ipsum provident tenetur? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni nesciunt consectetur sed, tempore, corporis ea maiores libero.</p>
</li>
<li class="accordion-item">
<a class="accordion-title" href="javascript:void(0)">
<i class="fa fa-arrow-right"></i>
How to change partner gray image to color?
</a>
<p class="accordion-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis deleniti nisi necessitatibus, dolores voluptates quam blanditiis fugiat doloremque? Excepturi, minus rem error aut necessitatibus quasi voluptates assumenda ipsum provident tenetur? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni nesciunt consectetur sed, tempore, corporis ea maiores libero.</p>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="choose-img">
<img src="{{ asset('frontend') }}/img/choose-img.jpg" alt="">
<div class="video-wrap">
<div class="video-btn-wrap">
<a href="play-video.html" class="video-btn" data-ilb2-video='{"controls":"controls", "autoplay":false, "sources":[{"src":"assets/img/business.mp4", "type":"video/mp4"}]}' data-imagelightbox="video">
<i class="fa fa-play"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="blog-area pb-100">
<div class="container">
<div class="section-title">
<span>News</span>
<h2>Latest News</h2>
</div>
<div class="row">
<div class="blog-wrap owl-carousel owl-theme">
<div class="single-blog-post">
<div class="post-image">
<a href="#">
<img src="{{ asset('frontend') }}/img/blog/1.jpg" alt="image">
</a>
</div>
<div class="post-content">
<div class="date">
<i class="fa fa-calendar"></i>
<span>12 September 2019</span>
</div>
<h3>
<a href="#">Successful Growth In Business 2019</a>
</h3>
<p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
<a href="blog-details.html" class="default-btn">Read More</a>
</div>
</div>
<div class="single-blog-post">
<div class="post-image">
<a href="#">
<img src="{{ asset('frontend') }}/img/blog/2.jpg" alt="image">
</a>
</div>
<div class="post-content">
<div class="date">
<i class="fa fa-calendar"></i>
<span>13 October 2019</span>
</div>
<h3>
<a href="#">Seminar for Best Marketing Strategy</a>
</h3>
<p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
<a href="blog-details.html" class="default-btn">Read More</a>
</div>
</div>
<div class="single-blog-post">
<div class="post-image">
<a href="#">
<img src="{{ asset('frontend') }}/img/blog/3.jpg" alt="image">
</a>
</div>
<div class="post-content">
<div class="date">
<i class="fa fa-calendar"></i>
<span>14 November 2019</span>
</div>
<h3>
<a href="#">10 Strategies to Manage Financial Forecast</a>
</h3>
<p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
<a href="blog-details.html" class="default-btn">Read More</a>
</div>
</div>
<div class="single-blog-post">
<div class="post-image">
<a href="#">
<img src="{{ asset('frontend') }}/img/blog/4.jpg" alt="image">
</a>
</div>
<div class="post-content">
<div class="date">
<i class="fa fa-calendar"></i>
<span>14 November 2019</span>
</div>
<h3>
<a href="#">Tips for Achieving Success in Your Business</a>
</h3>
<p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
<a href="blog-details.html" class="default-btn">Read More</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="footer-top-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="single-widget">
<a href="index.html">
<img src="{{ asset('frontend') }}/img/white-logo.png" alt="White-Logo">
</a>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt aliqua. Quis ipsum suspendisse ultrices gravida.</p>
<ul class="address">
<li>
<i class="fa fa-map-marker"></i>
32 st Kilda Road, Melbourne VIC, 3004 Australia
</li>
<li>
<i class="fa fa-phone"></i>
<a href="tel:+123(456)123">+123(456)123</a>
</li>
<li>
<i class="fa fa-envelope"></i>
<a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#4129242d2d2e01312433346f222e2c"><span class="__cf_email__" data-cfemail="e38b868f8f8ca393869196cd808c8e">[email&#160;protected]</span></a>
</li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-6">
<div class="single-widget">
<h3>Links</h3>
<ul class="links">
<li>
<a href="index.html">Home</a>
</li>
<li>
<a href="service.html">Service</a>
</li>
<li>
<a href="about.html">About Us</a>
</li>
<li>
<a href="testimonial.html">Testimonial</a>
</li>
<li>
<a href="blog.html">Blog</a>
</li>
<li>
<a href="contact.html">Contact Us</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-6">
<div class="single-widget">
<h3>Support</h3>
<ul class="links">
<li>
<a href="contact.html">Contact Us</a>
</li>
<li>
<a href="#">Submit To Ticket</a>
</li>
<li>
<a href="#">Visit Knowledge Base</a>
</li>
<li>
<a href="#">Refund Policy</a>
</li>
<li>
<a href="#">Professional Service</a>
</li>
<li>
<a href="#">Refund Policy</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-widget">
<h3>Instagram</h3>
<ul class="instragram">
<li>
<a href="#">
<img src="{{ asset('frontend') }}/img/inst/1.jpg" alt="">
</a>
</li>
<li>
<a href="#">
<img src="{{ asset('frontend') }}/img/inst/2.jpg" alt="">
</a>
</li>
<li>
<a href="#">
<img src="{{ asset('frontend') }}/img/inst/3.jpg" alt="">
</a>
</li>
<li>
<a href="#">
<img src="{{ asset('frontend') }}/img/inst/4.jpg" alt="">
 </a>
</li>
<li>
<a href="#">
<img src="{{ asset('frontend') }}/img/inst/5.jpg" alt="">
</a>
</li>
<li>
<a href="#">
<img src="{{ asset('frontend') }}/img/inst/6.jpg" alt="">
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


@endsection