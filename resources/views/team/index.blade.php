@extends('layouts.app')
@section('content')
    <div class="md-padding">

        <div class="container">

            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-md-3">
                        <div class="team-box box-2">
                            <div class="team-img">
                                <img alt="" src="{{ $team->photo }}"
                                    style="width:230px;height:230px;" />
                                <div class="team-socials">
                                    <div class="social-list tbl">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            data-original-title="Facebook"><i
                                                class="fa fa-facebook ic-facebook ic-colored"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            data-original-title="Twitter"><i
                                                class="fa fa-twitter ic-twitter ic-colored"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            data-original-title="Linkedin"><i
                                                class="fa fa-linkedin ic-linkedin ic-colored"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            data-original-title="Google Plus"><i
                                                class="fa fa-google-plus ic-gplus ic-colored"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-details t-center">
                                <h4 class="team-name main-bg">
                                    {{ $team->name ?? '' }}
                                    <br>
                                    <span class="white-color">
                                        {{ $team->position ?? '' }}
                                    </span>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
