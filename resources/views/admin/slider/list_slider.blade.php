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
                        <h4 class="card-title col-10"> {{__('Liste des Sliders')}}</h4>
                        <button class="btn btn-outline-primary mb-4" data-toggle="modal" data-target="#exampleModal">
                             {{__('Ajouter')}}
                        </button>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">  {{__('Nouvelle slide')}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ url('/add_slider_save') }}"
                                        enctype="multipart/form-data">
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
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">{{__('Nom')}} : </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" maxlength="25" type="text"
                                                            name="slider_name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label"> {{__('Prix')}} : </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" maxlength="25" type="number"
                                                            name="slider_price" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label"> {{__('Description')}}  :</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" type="text" name="slider_description"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label"> {{__('Image')}}</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" name="slider_image" type="file"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-3">
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="submit" value="Envoyer" class="btn btn-success">
                                                    <button class="btn btn-danger" data-dismiss="modal">  {{__('Annuler')}}</button>

                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">

                                    <thead>
                                        <tr>
                                            <th>{{__('Ordre')}} #</th>
                                            <th>{{__('Image')}} </th>
                                            <th> {{__('Nom')}} </th>
                                            <th> {{__('Date de création')}}</th>
                                            <th> {{__('Status')}}</th>
                                            <th colspan="3" style="text-align:center"> {{__('Action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($sliders)


                                            @forelse ($sliders as $slider)


                                                <tr>
                                                    <td>{{ $inc }}</td>
                                                    <td><img src="{{ $slider->slider_image }}"></td>
                                                    <td>{{ $slider->slider_name }}</td>
                                                    <td>{{ $slider->created_at->format('d/m/Y   H:i:s') }}</td>

                                                    <td>
                                                        @if ($slider->slider_status == 1)
                                                            <label class="badge badge-success">  {{__('Activer')}}</label>
                                                        @else
                                                            <label class="badge badge-danger"> {{__('Désactiver')}} </label>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        <a
                                                            onclick="window.location='{{ url('/update_slider_save/' . $slider->id) }}'">
                                                            <i class="ti-pencil-alt"> </i></a>
                                                    </td>

                                                    <td>
                                                        <a href="{{ url('/delete_slider/' . $slider->id) }}" id="delete">
                                                            <i class="ti-trash"> </i></a>
                                                    </td>
                                                    <td>
                                                        @if ($slider->slider_status == 1)
                                                            <button class="btn btn-outline-warning"
                                                                onclick="window.location='{{ url('/desactiverslider/' . $slider->id) }}'">
                                                                 {{__('Désactiver')}}
                                                            </button>
                                                        @else
                                                            <button class="btn btn-outline-success"
                                                                onclick="window.location='{{ url('/activerslider/' . $slider->id) }}'">
                                                                 {{__('Activer')}}
                                                            </button>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <input type="hidden" value="{{ $inc = $inc + 1 }}">

                                            @empty
                                                <tr>
                                                    <td style="text-align: center;" colspan="6">
                                                        <p>  {{__('Aucun Sliders Ajouter')}}</p>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        @endif
                                    </tbody>

                                </table>
                                {{ $sliders->links('pagination.paginatelinks')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        @include('include.footerAdmin')
        <!-- partial -->
    </div>
@endsection
