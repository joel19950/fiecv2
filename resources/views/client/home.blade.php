@extends('client.layouts.clientlayout')
@section('content')
    <!--banner-->
    <div class="banner">
        <div class="col-sm-3 banner-mat">
            <img class="img-responsive" src="{{ asset('images/ba1.jpg') }}" alt="">
        </div>
        <div class="col-sm-6 matter-banner">
            <div class="slider" height="100px">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <li>
                            <img src="{{ asset('images/1.jpg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('images/2.jpg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('images/1.jpg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('images/category-2.jpg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('images/category-3.jpg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('images/category-4.jpg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('images/image_4.jpg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('images/image_5.jpg') }}" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3 banner-mat">
            <img class="img-responsive" src="{{ asset('images/ba.jpg') }}" alt="">
        </div>

        <div class="clearfix"> </div>
    </div>
    <!--//banner---->
   

    <!--content-->
    <div class="content">
        <div class="container">
            @livewire('product-component')
        </div>
    </div>
    <!--//content-->
@endsection
