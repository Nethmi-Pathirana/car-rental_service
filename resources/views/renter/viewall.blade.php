@extends('admin.layout')

@section('content')

    <div id="page-wrapper">
        @if (!empty($message))
            <div class="alert alert-success">
                <strong>{{$message}}</strong>
            </div>
        @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        Car Renters
                    </h1>
                    <hr>

                    <div  class="row list-group">
                        @foreach($renters as $renter)
                            <div class="item  col-xs-4 col-lg-4">
                                <div class="thumbnail">
                                    <img class="group list-group-image" src="{{asset('img/avatar3.png')}}" alt="" />
                                    <div class="caption">
                                        <h4 class="group inner list-group-item-heading">
                                            {{$renter->name}}</h4>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <a class="btn btn-success" href="{{route('view_renter', ['renter_id' => $renter->renter_id])}}">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection