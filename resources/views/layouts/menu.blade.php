<div class="top-bar main-bg no-border" style="background-color:#163202;">
    <div class="container">

        <ul class="top-info f-left">
            <li><i class="fa fa-envelope white"></i><b class="white">Email:</b> <a
                    href="#">bleesinglight83@gmail.com</a></li>
            <li><i class="fa fa-phone white"></i><b class="white">Phone:</b> +959 789 755 722,</li>
            <li class="dropdown language-selector">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true"><i
                        class="fa fa-flag white"></i>EN</a>
                <a href="#" class="" data-toggle="" data-close-others="true"><i
                        class="fa fa-flag white"></i>Chinese</a>

                {{-- <ul class="dropdown-menu">
                    <li>
                        <a href="#" style="color:#163202">Chinese</a>
                    </li>
                    
                </ul> --}}
            </li>
        </ul>

        <div class="f-right social-list">
            <span class="lbl-txt">Follow Us On:</span>
            <a href="#" data-toggle="tooltip" data-placement="bottom" data-original-title="Facebook"><i
                    class="fa fa-facebook ic-facebook no-border"></i></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" data-original-title="Twitter"><i
                    class="fa fa-twitter ic-twitter no-border"></i></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" data-original-title="Linkedin"><i
                    class="fa fa-linkedin ic-linkedin no-border"></i></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" data-original-title="Dribbble"><i
                    class="fa fa-dribbble ic-dribbble no-border"></i></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" data-original-title="Google Plus"><i
                    class="fa fa-google-plus ic-gplus no-border"></i></a>
        </div>

    </div>
</div>
<header class="top-head header-1 skew">
    <div class="container">
        <!-- Logo start -->
        <div class="logo">
            <a href="{{ route('welcome') }}"><img alt="" src="{{ asset('assets/images/bl_logo.png') }}" /></a>
        </div>
        <!-- Logo end -->

        <div class="responsive-nav">
            <!-- top navigation menu start -->
            <nav class="top-nav">
                <ul>
                    <li class="selected">
                        <a href="{{ route('welcome') }}">
                            <span>Home</span>
                        </a>
                    </li>

                    <li><a href="{{ route('about.index') }}"><span>About Us</span></a>
                        <ul>

                            <li><a href="{{ route('about.index') }}">Our Firm</a></li>
                            <li><a href="{{ route('md.index') }}">Our Mentor</a></li>
                            <li><a href="{{ route('team.index') }}">Professional Teams</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript::void(0)">
                            <span>Overseas Jobs</span>
                        </a>
                        <ul>
                            @foreach ($countries as $country)
                                <li>
                                    <a href="{{ route('job.show', $country->id) }}">
                                        {{ $country->country ?? '' }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li><a href="#"><span>Manpower Services</span></a>
                        <ul>
                            <li><a href="{{ route('service.index') }}">Our Services</a></li>
                            <li><a href="{{ route('process.index') }}">Manpower Recruit & Process</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0"><span>Application</a></span>
                        <ul>
                            <li><a href="{{ route('job.index') }}">Job Application</a></li>
                            <li><a href="{{ route('employer.index') }}">Employer Form</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('activities.index') }}"><span>Activities</a></span></li>
                    <li><a href="{{ route('contact.index') }}"><span>Contact</a></span></li>

                </ul>
            </nav>
            <div class="f-right">
                <div class="top-search">
                    <a href="#"><span class="fa fa-facebook"></span></a>

                </div>

            </div>
        </div>
    </div>
</header>
