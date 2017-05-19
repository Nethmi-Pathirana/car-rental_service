@extends('admin.layout')

@section('content')

    <div id="page-wrapper">
        @if (!empty($message))
            <div class="alert alert-success">
                <strong>{{$message}}</strong>
            </div>
        @endif
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">

                    <div class="page-header">
                        <h1>Car Owner Requests</h1>
                    </div>

                    <div class="row list-group">
                        @foreach($owner_reqs as $req)
                        <div class="item  col-xs-4 col-lg-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Owner Request</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo 'Car Brand: '?>{{$req->car_brand}} <br>
                                        <?php echo 'Car Type: '?>{{$req->car_type}}
                                    <div class="col-xs-12 col-lg-6">
                                        <a class="btn btn-success" href="{{route('view_owner_req', ['request_id' => $req->request_id])}}">View Details</a>
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