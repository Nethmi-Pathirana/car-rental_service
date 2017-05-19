@extends('admin.layout')

@section('content')
    @if (!empty($message))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{{$message}}</strong>
        </div>
    @endif
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        Car Owners
                    </h1>
                    <hr>

        <div  class="row list-group">
            @foreach($owners as $owner)
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="{{asset('img/alto.jpg')}}" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            {{$owner->name}}</h4>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="{{route('view_owner', ['owner_id' => $owner->owner_id])}}">View Details</a>
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