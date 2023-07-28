@extends('layouts.app')
@section('content')
    <div class="page-title">
        <div class="container">
            <h1>Contact Us</h1>
            <h3>Blessing Light</h3>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="container">
            <a href="{{ route('welcome') }}">Home</a>
            <i class="fa fa-long-arrow-right main-color"></i><span>Contact Us</span>
        </div>
    </div>

    <div class="md-padding">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-6">
                    <div class="heading style3">
                        <h3 class="uppercase">Our<span class="main-color"> Office</span></h3>
                    </div>
                    <div>
                        <div class="row m-b-2 over-hidden">
                            <div class="col-md-6">
                                <ul class="details">
                                    <li><i class="fa fa-map-marker main-color"></i><span>No.29, U Chit Maung Road, Sayar San
                                            (South) Quarter,
                                            <br> Bahan Township, Yangon, Myanmar.</span></li>
                                    <li><i class="fa fa-phone main-color"></i><span><strong>Phone:</strong> +959 789 755 722
                                        </span></li>
                                    <li><i class="fa fa-fax main-color"></i><span><strong>Fax:</strong> +959 789 755
                                            733</span></li>
                                    <li><i class="fa fa-envelope main-color"></i><span><strong>Email:</strong>
                                            blessinglight83@gmail.com</span></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="details">
                                    <li><i class="fa fa-map-marker main-color"></i><span>No.29, U Chit Maung Road, Sayar San
                                            (South) Quarter, <br> Bahan Township, Yangon, Myanmar.</span></li>
                                    <li><i class="fa fa-phone main-color"></i><span><strong>Phone:</strong> +959 789 755
                                            722</span></li>
                                    <li><i class="fa fa-fax main-color"></i><span><strong>Fax:</strong> +959 789 755
                                            733</span></li>
                                    <li><i class="fa fa-envelope main-color"></i><span><strong>Email:</strong>
                                            blessinglight83@gmail.com</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="ROADMAP" class="gmap full m-b-3" style="height: 320px">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.1651521401195!2d96.16340217418889!3d16.81816108397518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed1f80bc32eb%3A0xc8615906c6f9ef16!2sBlessing%20Light%20Oversea%20Employment%20Agency!5e0!3m2!1sen!2smm!4v1690352182302!5m2!1sen!2smm"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
                <div class="col-md-1">
                    <div class="vertical-sep"></div>
                </div>
                <div class="col-md-5">
                    <div class="heading style3">
                        <h3 class="uppercase"><span class="main-color">Get In </span> Touch</h3>
                    </div>

                    <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}" autocomplete="off"
                        id="create-form">
                        @csrf

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input name="name" type="text" required class="form-control" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input name="email" type="text" class="form-control" required placeholder="Email">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input name="phone" type="text" class="form-control" required placeholder="Phone">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input name="subject" type="text" class="form-control" required placeholder="Subject">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button class="btn main-bg btn-lg btn-3d uppercase" type="submit" id="contact-submit"
                                name="contact-submit" value="submit">Send Message</button>
                        </div>
                    </form>

                    <div class="alert alert-warning socials-cont m-t-2">
                        <div class="tbl social-list f-right">
                            <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i
                                    class="fa fa-facebook ic-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i
                                    class="fa fa-twitter ic-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i
                                    class="fa fa-linkedin ic-linkedin"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top"
                                data-original-title="Dribbble"><i class="fa fa-dribbble ic-dribbble"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top"
                                data-original-title="Google Plus"><i class="fa fa-google-plus ic-gplus"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Skype"><i
                                    class="fa fa-skype ic-skype"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
