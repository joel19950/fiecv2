@extends('admin.layouts.appadmin')
@section('content')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row grid-margin">
                <div class="col-12">
                    <form method="post" action="{{ url('/add_product_save') }}" enctype="multipart/form-data">
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
                                <h4 class="card-title" style="text-align: center">Produit</h4>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Nom : </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" maxlength="25" type="text" name="product_name"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Description:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" name="product_description" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Prix:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="number" name="product_price" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Catégorie</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <select id="cname" class="form-control" name="category_id" required>

                                            @foreach ($categories as $cate)
                                                <option value="{{ $cate->id }}">{{ $cate->category_name }} </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Catalogue</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <select id="cname" class="form-control" name="catalogue_id" required>

                                            @foreach ($catalogues as $cata)
                                                <option value="{{ $cata->id }}">{{ $cata->catalogue_name }} </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>






                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Boutique :</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <select id="cname" class="form-control" name="shop_id" required>

                                            @foreach ($shops as $s)
                                                <option value="{{ $s->id }}">{{ $s->shop_name }} </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Ville:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" name="product_city" required>
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

                                    <a href="{{ URL::to('/list_product') }}" class="btn btn-danger"> Annuler</a>


                                </div>
                            </div>
                        </div>
                        <!-- content-wrapper ends -->
                        <!-- partial:../../partials/_footer.html -->
                        @include('include.footeradmin')
                        <!-- partial -->
                </div>

            @endsection
