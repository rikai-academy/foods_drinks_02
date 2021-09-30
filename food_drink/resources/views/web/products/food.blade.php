@extends('layouts.master')
@section('title')
    <title>Food Menu</title>
@endsection
@section('content')

    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

        <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Our Menu</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-menu">
        <div class="container-fluid">
            <div class="row d-md-flex">
                <div class="col-lg-12 ftco-animate p-md-5">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills filter-category" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                                @foreach($categories_child as $child)
                                    <a class="nav-link active filter-product-category" id="v-pills-1-tab" data-toggle="pill"
                                       href="{{ route('menu.product',['id' => $child->id]) }}"
                                       role="tab" data-id = "{{ $child->id }}"
                                       aria-controls="v-pills-1" aria-selected="true">{{ $child->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">
                            <div class="tab-content ftco-animate" id="v-pills-tabContent">
                                @include('web.products.list_food')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

