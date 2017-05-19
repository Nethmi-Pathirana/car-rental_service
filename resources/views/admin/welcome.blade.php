@extends('admin.layout')

@section('username')
    {{$user->email}}
@endsection

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
                    <div class="row target" style=""><img src="img/header.png">

                        <div class="col-lg-12 text-center v-center">
                            <h1 class="" style="font-size:39pt;">Welcome to Key & Car Rental Service</h1>

                            <p class="lead">Best Car Rental Service Company</p>
                            <br class="">
                        </div>
                    </div>


                    <br class="">
                    <br class="">

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="">Manage Car Owners</h3>
                                </div>
                                <div class="panel-body">Manage car owners of the company</div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="">Manage Car Renters</h3>
                                </div>
                                <div class="panel-body">Manage Car Renters of the company</div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="">Manage Rent Requests</h3>
                                </div>
                                <div class="panel-body">Add, view , edit car details</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection