@extends('layouts.app')
@section('content')
    <div class="page-title">
        <div class="container">
            <h1>Activities</h1>
            <h3>Our Activities</h3>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="container">
            <a href="{{ route('welcome') }}">Home</a>
            <i class="fa fa-long-arrow-right main-color"></i>
            <span>Our Activities</span>
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
                            <li>
                                <a href="{{ route('activities.index') }}">
                                    <span>All</span>
                                </a>
                            </li>
                            @foreach ($categories as $category)
                                <li class="@if ($category_id == $category->id) selected @endif">
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
