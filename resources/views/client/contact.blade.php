@extends('client.layouts.clientlayout')
@section('content')
    <div class="contact">
        <div class="container">
            <h1>Contact</h1>

            <div class="contact-grids">
                <div class="contact-form">
                    <form  method="post" action="{{url('/contact')}}" >
                        <div class="contact-bottom">
                            <div class="col-md-4 in-contact">
                                <span>Nom</span>
                                <input type="text">
                            </div>
                            <div class="col-md-4 in-contact">
                                <span>Email</span>
                                <input type="text">
                            </div>
                            <div class="col-md-4 in-contact">
                                <span>Téléphone</span>
                                <input type="text">
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="contact-bottom-top">
                            <span>Message</span>
                            <textarea> </textarea>
                        </div>
                        <input type="submit" value="Envoyer">
                    </form>
                </div>
                <!---728x90--->
                <div class="address">
                    <div class=" address-more">
                        <h2>Adresse</h2>
                        <div class="col-md-4 address-grid">
                            <i class="glyphicon glyphicon-map-marker"></i>
                            <div class="address1">
                                <p>Douala</p>
                                <p>LT Cameroun</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <h2>Téléphone</h2>
                        <div class="col-md-4 address-grid ">
                            <i class="glyphicon glyphicon-phone"></i>
                            <div class="address1">
                                <p>+237 676 471 717</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <h2>Email</h2>
                        <div class="col-md-4 address-grid ">
                            <i class="glyphicon glyphicon-envelope"></i>
                            <div class="address1">
                                <p><a href="mailto:@example.com"> contact@promo24.com</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//content-->
@endsection
