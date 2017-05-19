@extends('admin.layout')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
    <h1>
        All Cars
    </h1>
                    <hr>
                    <h3>
                        Budget Cars
                    </h3>
        <div class="row list-group">
            @foreach($car_budget as $car_b)
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="{{$car_b -> image}}" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                {{$car_b -> brand }}</h4>
                            <p class="group inner list-group-item-text">
                                {{$car_b -> car_condition }}</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        <?php echo 'Rs.' ?>{{$car_b -> price }}<?php echo ' Per Day' ?></p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="{{route('view_car', ['car_id' => $car_b->car_id])}}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
                    <hr>
                    <h3>
                        Standard/Compact Cars
                    </h3>
                    <div id="products" class="row list-group">
                        @foreach($car_stand as $car_s)
                        <div class="item  col-xs-4 col-lg-4">
                            <div class="thumbnail">
                                <img class="group list-group-image" src="{{$car_s -> image }}" alt="" />
                                <div class="caption">
                                    <h4 class="group inner list-group-item-heading">
                                        {{$car_s -> brand }}</h4>
                                    <p class="group inner list-group-item-text">
                                        {{$car_s -> car_condition }} </p>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <p class="lead">
                                                <?php echo 'Rs.' ?>{{$car_s -> price }}<?php echo ' Per Day' ?></p>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <a class="btn btn-success" href="{{route('view_car', ['car_id' => $car_s->car_id])}}">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <hr>
                    <h3>
                        Luxury Cars
                    </h3>
                    <div id="products" class="row list-group">
                        @foreach($car_luxury as $car_l)
                        <div class="item  col-xs-4 col-lg-4">
                            <div class="thumbnail">
                                <img class="group list-group-image" src="{{$car_l -> image }}" alt="" />
                                <div class="caption">
                                    <h4 class="group inner list-group-item-heading">
                                        {{$car_l -> brand }}</h4>
                                    <p class="group inner list-group-item-text">
                                        {{$car_l -> car_condition }}</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <p class="lead">
                                                <?php echo 'Rs.' ?>{{$car_l -> price }} <?php echo ' Per Day' ?> </p>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <a class="btn btn-success" href="{{route('view_car', ['car_id' => $car_l->car_id])}}">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    </div>
    </div></div></div>
@endsection


