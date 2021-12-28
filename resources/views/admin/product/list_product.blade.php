@extends('admin.layouts.appadmin')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <input type="hidden" value="{{ $inc = 1 }}">
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

                    <div class="row">
                        <h4 class="card-title col-10">{{__('Produits')}}</h4>
                        <a href="{{ URL::to('/add_product') }}" class="btn btn-outline-primary mb-4">
                            {{__('Ajouter')}}
                        </a>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">

                                    <thead>
                                        <tr>
                                            <th> {{__('Ordre')}} #</th>
                                            <th>{{__('Image')}}</th>
                                            <th>{{__('Nom')}}</th>
                                            <th> {{__('Prix')}}</th>
                                            <th>{{__('Date de création')}}</th>
                                            <th> {{__('Status')}}</th>
                                            <th colspan="3" style="text-align:center">{{__('action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($products)



                                            @forelse ($products as $product)
                                                <tr>
                                                    <td>{{ $inc }}</td>
                                                    <td> <img
                                                            src="/public_images/{{ json_decode($product->product_image)['0'] ?? null }}"
                                                            alt="images"></td>
                                                    <td>{{ $product->product_name }}</td>
                                                    <td>{{ $product->product_price }}</td>
                                                    <td>{{ $product->created_at->format('d/m/Y   H:i:s') }}</td>

                                                    <td>
                                                        @if ($product->product_status == 1)
                                                            <label class="badge badge-success">  {{__('Activer')}}</label>
                                                        @else
                                                            <label class="badge badge-danger"> {{__('Desactiver')}} </label>
                                                        @endif

                                                    </td>
                                                    <td><a
                                                            onclick="window.location='{{ url('/update_product_save/' . $product->id) }}'"><i
                                                                class="ti-pencil-alt"></i></a></td>

                                                    <td>
                                                        <a href="{{ url('/delete_product/' . $product->id) }}"
                                                            id="delete"><i class="ti-trash"></i></a>
                                                    </td>
                                                    <td>
                                                        @if ($product->product_status == 1)
                                                            <button class="btn btn-outline-warning"
                                                                onclick="window.location='{{ url('/desactiverproduct/' . $product->id) }}'"> {{__('Désactiver')}}</button>
                                                        @else
                                                            <button class="btn btn-outline-success"
                                                                onclick="window.location='{{ url('/activerproduct/' . $product->id) }}'"> {{__('Activer')}}</button>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <input type="hidden" value="{{ $inc = $inc + 1 }}">

                                            @empty
                                                <tr>
                                                    <td colspan="9" style="text-align: center"> {{__('Aucun Produit disponible')}}
                                                    </td>
                                                </tr>
                                            @endforelse
                                        @endif



                                    </tbody>
                                </table>
                                <div class="col-lg-9"> </div>
                                <div style="text-align: right" class="col-lg-3">
                                    <span> {{ $products->links('pagination.paginatelinks') }}</span>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        @include('include.footeradmin')
        <!-- partial -->
    </div>
@endsection
