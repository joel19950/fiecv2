@extends('admin.layouts.appadmin')
@section('content')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row grid-margin">
                <div class="col-12">
                    <form method="post" action="{{ url('/update_product_save_') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            @if (Session::has('status'))
                                <div class="alert alert-success">
                                    {{ Session::get('status') }}
                                    {{ Session::put('status', null) }}
                                </div>
                            @endif

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center">{{ $product->product_name }}</h4>
                                <div class="form-group row">
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Nom : </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" maxlength="25" type="text" name="product_name"
                                            value="{{ $product->product_name }}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Description:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" name="product_description"
                                            value="{{ $product->product_description }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Prix:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="number" name="product_price"
                                            value="{{ $product->product_price }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Catégorie</label>
                                    </div>
                                    <div class="col-lg-8">

                                        <select id="cname" class="form-control" name="product_category">
                                            <option> {{ $product->product_category }} </option>
                                            @if ($categories)
                                                @foreach ($categories as $category)
                                                    @if ($category->category_name != $product->product_category)
                                                        <option>{{ $category->category_name }} </option>
                                                    @endif
                                                @endforeach
                                            @endif

                                        </select>
                                    </div>
                                </div>







                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Boutique</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <select id="cname" class="form-control" name="product_shop">
                                            <option> {{ $product->product_shop }} </option>
                                            @if ($shops)
                                                @foreach ($shops as $shop)
                                                    @if ($shop->shop_name != $product->product_shop)
                                                        <option>{{ $shop->shop_name }} </option>
                                                    @endif
                                                @endforeach
                                            @endif

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Ville</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <select id="cname" class="form-control" name="product_city">
                                            <option> {{ $product->product_city }} </option>
                                            @if ($cities)
                                                @foreach ($cities as $city)
                                                    @if ($city->city_name != $product->product_city)
                                                        <option>{{ $city->city_name }} </option>
                                                    @endif
                                                @endforeach
                                            @endif

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Image</label>
                                    </div>
                                    <div class="col-lg-8">

                                        {{-- add images --}}
                                        <div class="input-group control-group increment">
                                            <input type="file" name="product_image[]" class="form-control">&nbsp;
                                            <div class="input-group-btn">
                                                <button class="btn btn-success add" type="button"><i
                                                        class="ti ti-plus"></i>&nbsp;Add</button>
                                            </div>
                                        </div>

                                        {{-- delete image --}}
                                        <div class="clone hide">
                                            <div class="control-group input-group" style="margin-top:10px">
                                                <input type="file" name="product_image[]" class="form-control"> &nbsp;
                                                <div class="input-group-btn">
                                                    <button class="btn btn-danger remove" type="button"><i
                                                            class="ti ti-close"></i>&nbsp; Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                $(".btn-success").click(function() {
                                                    var html = $(".clone").html();
                                                    $(".increment").after(html);
                                                });
                                                $("body").on("click", ".btn-danger", function() {
                                                    $(this).parents(".control-group").remove();
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-lg-3">
                                </div>
                                <div class="col-lg-8">
                                    <input type="submit" value="Envoyer" class="btn btn-warning">
                                    <a href="{{ URL::to('/list_product_a') }}" class="btn btn-danger"> Annuler</a>

                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        @include('include.footerAdmin')
        <!-- partial -->
    </div>
@endsection
