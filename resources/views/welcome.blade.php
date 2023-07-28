@extends('layouts.app')
@section('content')
    <div class="sm-padding grad-desk">
        <div class="container">
            <div class="cta_btn">

                <div class="cta-left">
                    <h2 class="cta_heading">Discover the avaible jobs of the world. <span class="main-color">Call today</span>
                    </h2>
                    <h4 class="cta_heading">So if you were waiting for the perfect time to seize this opportunity, the time
                        is now. Call us at <span class="main-color bolder">+959 789 755 722</span>.</h4>
                </div>

                <div class="cta-right cta-small">
                    <a class="btn btn-xl rect-angles btn-gry-border cta-right uppercase"
                        href="{{ route('contact.index') }}"><span><span><span><span>Contact
                                        Now</span></span></span></span></a>
                </div>

            </div>
        </div>
    </div>
    <div class="md-padding">

        <div class="container">

            <div class="row row-eq-height icon-boxes-1">
                <div class="col-md-3">
                    <div class="icon-box-1">

                        <div class="icon-desc">
                            <i class="fa fa-users"></i>
                            <h4 class="uppercase main-color">Sending Candidates</h4>
                        </div>
                        <div class="box-number light-font"><span class="count-title"><span class="odometer"
                                    data-value="1983" data-timer="1500"></span></span></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box-1">

                        <div class="icon-desc">
                            <i class="fa fa-clock-o"></i>
                            <h4 class="uppercase main-color">Working Experience</h4>
                        </div>
                        <div class="box-number light-font"><span class="count-title"><span class="odometer"
                                    data-value="5632" data-timer="1500"></span></span></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box-1">

                        <div class="icon-desc">
                            <i class="fa fa-users"></i>
                            <h4 class="uppercase main-color">Our Valued Partners</h4>
                        </div>
                        <div class="box-number light-font"><span class="count-title"><span class="odometer"
                                    data-value="7200" data-timer="1500"></span></span></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box-1">

                        <div class="icon-desc">
                            <i class="fa fa-file"></i>
                            <h4 class="uppercase main-color">Jobs Available</h4>
                        </div>
                        <div class="box-number light-font"><span class="count-title"><span class="odometer" data-value="100"
                                    data-timer="1500" data-after="%"></span></span></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="sm-padding wall-bg p-b-1">
        <div class="container">
            <div class="row">
                <div class="col-md-7 f-right">
                    <div class="heading style3">
                        <h3 class="uppercase">Why Choose <span class="main-color">Blessing Light</span></h3>
                        <p>
                            When you choose Blessing Light Services, you can be assured that:
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box simple fx" data-animate="fadeIn" data-animation-delay="200">
                                <i class="fa fa-leaf lg-icon main-border icon-border border3px" style="color:green;"></i>
                                <div class="icon-simple-desc">
                                    <h4 class="uppercase">Experience</h4>
                                    <p>Years of expertise in international recruitment, navigating complexities.</p>
                                </div>
                            </div>
                            <div class="icon-box simple fx" data-animate="fadeIn" data-animation-delay="400">
                                <i class="fa fa-refresh lg-icon main-border icon-border border3px" style="color:green;"></i>
                                <div class="icon-simple-desc">
                                    <h4 class="uppercase">Candidate Support</h4>
                                    <p>Comprehensive assistance from start to finish.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box simple fx" data-animate="fadeIn" data-animation-delay="600">
                                <i class="fa fa-bomb lg-icon main-border icon-border border3px" style="color:green;"></i>
                                <div class="icon-simple-desc">
                                    <h4 class="uppercase">Skill Development</h4>
                                    <p>Tailored programs to enhance employability.</p>
                                </div>
                            </div>
                            <div class="icon-box simple fx" data-animate="fadeIn" data-animation-delay="800">
                                <i class="fa fa-hand-grab-o lg-icon main-border icon-border border3px"
                                    style="color:green;"></i>
                                <div class="icon-simple-desc">
                                    <h4 class="uppercase">Streamlined Process</h4>
                                    <p>Hassle-free documentation and logistics.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img alt="" src="{{ asset('assets/images/wc.png') }}" class="fx" data-animate="swing"
                        data-animation-delay="200">
                </div>
            </div>
        </div>
    </div>

    <div class="no-padding">
        <div class="row-eq-height">
            <div class="col-md-6 gry-bg section">
                <div class="row">
                    <div class="col-md-5 hidden-md"></div>
                    <div class="col-md-6 mn-cell md-pd-40">
                        <div class="row">
                            <div class="heading style3">
                                <h4 class="uppercase">About <span class=" uppercase" style="color:#163202;">Blessing
                                        Light</span></h4>
                            </div>
                            <p style="text-align: justify;">
                                Our company "Blessing Light Services Co.,Ltd." was established in the year 2020 for the
                                manpower supply. Blessing Light Service Co.,Ltd is one of the registered licence companies
                                in Republic of the Union of Myanmar and authorized by the Ministry of the National Planning
                                & Economic Development and Ministry of Labor, Employment & Social Welfare. We specialize in
                                the supply of manpower to overseas countries.
                            </p>
                            <p style="text-align: justify;">
                                "Blessing Light Services Co.,Ltd." has been in this manpower recruitment services for many
                                years and we are proud and modest to inform that we have had substantial success in the
                                supply of labor in the different business sectors.
                            </p>
                            <p style="text-align: justify;">
                                We arrange enrollment for Singapore, Malaysia and Thailand. And, we are fully accredited
                                member of Myanmar Overseas Employment Agencies Federation (MOEAF).
                            </p>
                            <p style="text-align: justify;">
                                "Blessing Light Services Co.,Ltd." always welcome for your manpower needs and "Blessing
                                Light Services Co.,Ltd." will provide our best services as your reliable agency.
                            </p>
                            <p style="text-align: justify;">
                                <i>
                                    Join us today, and let's embark on a journey to unlock global opportunities together!
                                </i>
                            </p>


                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <div class="col-md-6 section lft-border-7 main-border">
                <div class="col-md-7 mn-cell">
                    <div class="heading style3">
                        <h4 class="uppercase">Who We <span class="main-color">Are?</span></h4>
                    </div>
                    <div class="testimonials testimonials-1 vertical-slider m-t-3">
                        <div>
                            <div class="testimonials-img main-border">
                                <img alt="" src="{{ asset('assets/images/md.png') }}"
                                    style="width:70px;height:70px;">
                            </div>
                            <div class="testimonials-bg">
                                <p>
                                    Thank you for your trust, dedication, and hard work. Your contributions are what make
                                    our agency truly exceptional.With gratitude and excitement for the journey ahead,

                                </p>
                                <div class="testimonials-name">
                                    <span class="main-color">Mrs. Myo Zin Win</span> - Managing Director
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testimonials-img main-border">
                                <img alt=""
                                    src="{{ asset('assets/images/d2.jpeg') }}"style="widht:70px;height:70px;">
                            </div>
                            <div class="testimonials-bg">
                                <p>
                                    Thank you for entrusting Blessing Light Company with your aspirations. With your talent
                                    and our dedication, there is no limit to what we can achieve together.
                                </p>
                                <div class="testimonials-name">
                                    <span class="main-color">Mr. Kyaw Thu</span> - Director
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testimonials-img main-border">
                                <img alt="" src="{{ asset('assets/images/testimonials/2.jpg') }}">
                            </div>
                            <div class="testimonials-bg">
                                <p>
                                    Together, we will build bridges that transcend borders, opening doors to a world of
                                    possibilities. So, let us embark on this extraordinary journey of dreams, ambitions, and
                                    success hand in hand.
                                </p>
                                <div class="testimonials-name">
                                    <span class="main-color">Mr. Wai Phyo Aung</span> - Director
                                </div>
                            </div>
                        </div>
                        {{-- <div>
                            <div class="testimonials-img main-border">
                                <img alt="" src="{{asset('assets/images/testimonials/1.jpg')}}">
                            </div>
                            <div class="testimonials-bg">
                                <p>Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristiqueMauris in quam tristique, dignissim urna in, molestie felis.</p>
                                <div class="testimonials-name">
                                    <span class="main-color">Amy Bennett</span> - SomeCompany Owner
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
                <div class="col-md-5 hidden-md"></div>
            </div>
        </div>
    </div>
    <br><br>
    <center>
        <div class="col-md-12 py-5" style="background-color: white;">
            <style>
                .table {
                    border-collapse: collapse;
                    border: 1px dotted black;
                    width: 50%;
                }

                th,
                tr,
                td {
                    border: 1px dotted black;
                }
            </style>
            <table style="border: 2px dotted black" class="table animate__animated animate__lightSpeedInRight">
                <tbody>
                    <tr style="background-color: #fafafa;">
                        <td style="color:black;   width: 25%; border: 2px dotted black">
                            Name of Company
                        </td>

                        <td style="color:black; border: 2px dotted black">
                            Blessing Light Services Co.,Ltd.
                        </td>
                    </tr>

                    <tr>
                        <td style="color:black;">
                            Nature of Business
                        </td>

                        <td style="color:black;">
                            Services, Recruitment, Manpower supply
                        </td>
                    </tr>

                    <tr style="background-color: #fafafa;">
                        <td style="color:black; border: 2px dotted black">
                            Nationality of Company
                        </td>

                        <td style="color:black; border: 2px dotted black">
                            Local Myanmar
                        </td>
                    </tr>

                    <tr>
                        <td style="color:black; border: 2px dotted black">
                            Company Registration
                        </td>

                        <td style="color:black; border: 2px dotted black">
                            Directorate of Investment and Comapny Administration
                        </td>
                    </tr>

                    <tr style="background-color: #fafafa;">
                        <td style="color:black; border: 2px dotted black">
                            Registration No.
                        </td>

                        <td style="color:black; border: 2px dotted black">
                            118376935
                        </td>
                    </tr>

                    <tr>
                        <td style="color:black; border: 2px dotted black">
                            Licence Approval
                        </td>

                        <td style="color:black; border: 2px dotted black">
                            Ministry of Labor in Myanmar
                        </td>
                    </tr>

                    <tr style="background-color: #fafafa;">
                        <td style="color:black;border: 2px dotted black ">
                            Overseas Employment Licence No.
                        </td>

                        <td style="color:black; border: 2px dotted black">
                            82/2021
                        </td>
                    </tr>

                    <tr>
                        <td style="color:black border: 2px dotted black;">
                            Office Location
                        </td>

                        <td style="color:black; border: 2px dotted black">
                            No.29, U Chit Maung Road, Sayar San (South) Quarter, Bahan Township, Yangon, Myanmar.
                        </td>
                    </tr>

                    <tr style="background-color: #fafafa;">
                        <td style="color:black; border: 2px dotted black">
                            Office Phone No.
                        </td>

                        <td style="color:black; border: 2px dotted black">
                            <a href="tel:+959 789 755 722">
                                +959 789 755 722
                            </a>,
                            <a href="tel:+959 789 755 722">
                                +959 789 755 722
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td style="color:black;border: 2px dotted black">
                            Mail Address
                        </td>

                        <td style="color:black; border: 2px dotted black">
                            <a href="mailto:blessinglight83@gmail.com">
                                blessinglight83@gmail.com
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </center>

    <div class="section py-5">
        <div class="container">
            <div class="heading main centered">
                <h3 class="uppercase bolder font-40">We Are <span class="main-color">Blessing Light</span></h3>
                <h4 class="light-font font-30 lg-title"><span class="main-color">Business</span> Achievement</h4>
                <p class="heading-desc centered">Together, we will continue to make a difference in the world of overseas
                    employment and transform lives.</p>
            </div>

            <div class="t-center">
                <img alt="" src="{{ asset('assets/images/cer3.png') }}" class="fx"
                    data-animate="fadeInDown">
            </div>


            <div class="row steps-2-container">
                <div class="col-sm-3">
                    <div class="steps-2 t-center">
                        <span class="bo_ribbon bottom main-bg"><i class="fa fa-link"></i></span>
                        <span class="num main-color fx" data-animate="fadeInDown" data-animation-delay="200">01</span>
                        <h4 class="step-title uppercase fx" data-animate="fadeInDown" data-animation-delay="300">
                            Successful Placements</h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="steps-2 t-center">
                        <span class="bo_ribbon bottom main-bg"><i class="fa fa-diamond"></i></span>
                        <span class="num main-color fx" data-animate="fadeInDown" data-animation-delay="400">02</span>
                        <h4 class="step-title uppercase fx" data-animate="fadeInDown" data-animation-delay="500">Ethical
                            Practices</h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="steps-2 t-center">
                        <span class="bo_ribbon bottom main-bg"><i class="fa fa-magnet"></i></span>
                        <span class="num main-color fx" data-animate="fadeInDown" data-animation-delay="600">03</span>
                        <h4 class="step-title uppercase fx" data-animate="fadeInDown" data-animation-delay="800">Strong
                            Team</h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="steps-2 t-center">
                        <span class="bo_ribbon bottom main-bg"><i class="fa fa-diamond"></i></span>
                        <span class="num main-color fx" data-animate="fadeInDown" data-animation-delay="800">04</span>
                        <h4 class="step-title uppercase fx" data-animate="fadeInDown" data-animation-delay="1000">
                            Recognition and Awards</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="md-padding gry-bg">

        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <div class="team-box box-1">
                        <div class="team-img">
                            <img alt="" src="{{ asset('assets/images/c1.png') }}" />
                            <span></span>
                        </div>
                        <div class="team-details t-center">
                            <h4 class="team-name">Company Registration Card</h4>
                            <h5 class="uppercase main-color">****</h5>
                            <div class="team-socials">
                                <div class="social-list tbl">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                        data-original-title="File"><i class="fa fa-file ic-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-box box-1">
                        <div class="team-img">
                            <img alt="" src="{{ asset('assets/images/c2.png') }}" />
                            <span></span>
                        </div>
                        <div class="team-details t-center">
                            <h4 class="team-name">Company Licence</h4>
                            <h5 class="uppercase main-color">****</h5>
                            <div class="team-socials">
                                <div class="social-list tbl">
                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                        data-original-title="File"><i class="fa fa-file ic-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="no-padding">

        <div class="row-eq-height">
            <div class="col-md-5"></div>

            <div class="col-md-2">
                <div class="center-v-menu">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <h4><a href="#vision" role="tab" data-toggle="tab"><i
                                        class="fa fa-eye font-30  clear-icon"></i>Our Company Vision</a></h4>
                        </li>
                        <li role="presentation">
                            <h4><a href="#mission" role="tab" data-toggle="tab"><i
                                        class="fa fa-clock-o font-30  clear-icon"></i>Our Company Mission</a></h4>
                        </li>
                        <li role="presentation">
                            <h4><a href="#strategy" role="tab" data-toggle="tab"><i
                                        class="fa fa-gears font-30  clear-icon"></i>Our Company Strategy</a></h4>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="vision">
                <div class="row-eq-height">
                    <div class="col-md-5 md-padding gry-bg pattern-3">
                        <div class="tbl tbl-70">
                            <div class="heading style3">
                                <h3 class="uppercase">Our Company <span class="main-color bolder">Vision</span></h3>

                                <p class="t-justify lg-txt">Our vision is to be the premier overseas employment agency,
                                    empowering individuals to achieve their career aspirations while supporting employers in
                                    building diverse and skilled teams.

                                </p>
                                <p class="t-justify lg-txt">To be the leading global talent connector, empowering
                                    individuals to thrive in diverse work environments while enabling employers to build
                                    exceptional and culturally rich teams that drive innovation and success.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="dash-bord"></div>
                    </div>
                    <div class="col-md-5 md-padding"
                        style="background:url('assets/images/vision.png') no-repeat 0 0;  background-size:cover; "></div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="mission">
                <div class="row-eq-height">

                    <div class="col-md-5 md-padding"
                        style="background:url('assets/images/mission.png') no-repeat 0 0;background-size: contain;"></div>
                    <div class="col-md-2">
                        <div class="dash-bord"></div>
                    </div>
                    <div class="col-md-5 md-padding gry-bg pattern-2">
                        <div class="tbl tbl-70">
                            <div class="heading style3">
                                <h3 class="uppercase">Our Company <span class="main-color bolder">Mission</span></h3>

                            </div>

                            <p class="t-justify lg-txt">

                                Our mission is to be the trusted gateway to global opportunities, providing seamless and
                                ethical overseas employment solutions for job seekers, while delivering top-tier talent to
                                employers worldwide, driving mutual prosperity and enriching lives.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="strategy">
                <div class="row-eq-height">
                    <div class="col-md-5 md-padding gry-bg pattern-1">
                        <div class="tbl tbl-70">
                            <div class="heading style3">
                                <h3 class="uppercase">Our Company <span class="main-color bolder">Strategy</span></h3>
                            </div>
                            <p class="t-justify lg-txt">
                            <ul class="list-icons">
                                <li style="text-align: justify; color: black;">
                                    Excellence - We strive for excellence in every aspect of our services,
                                    aiming to
                                    exceed expectations.
                                </li>

                                <li style="text-align: justify; color: black;">
                                    Collaboration - We foster strong partnerships, working together to achieve
                                    mutual success.
                                </li>
                                <li style="text-align: justify; color: black;">
                                    Responsiveness - We are responsive to the needs of our clients, providing
                                    timely
                                    solutions and support.
                                </li>
                            </ul>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="dash-bord"></div>
                    </div>
                    <div class="col-md-5 md-padding" style="background:url('assets/images/strategy.jpeg') no-repeat 0 0">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="md-padding">
        <div class="container">
            <div class="heading main centered">
                <h3 class="uppercase bolder font-40">Our <span class="main-color">Activities</span></h3>
                <h4 class="light-font font-30 lg-title"><span class="main-color">Photo</span> Gallery</h4>
                <p class="heading-desc centered">Together, we will continue to make a difference in the world of overseas
                    employment and transform lives.</p>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="filter-by skew-nav">
                        <ul id="filters">
                            <li class="selected">
                                <a href="{{ route('activities.index') }}">
                                    <span>All</span>
                                </a>
                            </li>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('activities.show', $category->id) }}">
                                        <span>
                                            {{ $category->title ?? '' }}
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="portfolio grid p-4-cols p-style3" id="grid">
                        @foreach ($activities as $activity)
                            @php
                                $images = explode(',', $activity->images);
                            @endphp
                            @foreach ($images as $image)
                                <div class="portfolio-item design">
                                    <figure>
                                        <img alt="" src="{{ $image }}">
                                        <figcaption>
                                            <div class="port-captions">
                                                <h4>
                                                    <a href="javascriot::void(0)">
                                                        {{ $activity->title ?? '' }}
                                                    </a>
                                                </h4>
                                                <p class="description">
                                                    <a href="">
                                                        {{ $activity->categories->title ?? '' }}
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="icon-links">
                                                <a href="portfolio-single.html" class="link">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                                <a href="{{ $image }}" class="zoom"
                                                    title="{{ $activity->title ?? '' }}">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            @endforeach
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
