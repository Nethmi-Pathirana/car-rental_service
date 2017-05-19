@extends('admin.layout')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <h1>View Renter</h1>
                    <hr>
                    <img  src ="{{asset('img/avatar2.png')}}" class=" col-md-offset-3"> <!--  src="$owner->image" -->

                    <br><br>
                    <div class="col-md-9">

                        <form class="form-horizontal" role="form" method="post" action="{{route('delete_renter_submit')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="renter_id" value="{{$renter->renter_id}}">

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Name</label>
                                <div class="col-lg-8">
                                    <input  class="form-control" type="text" value="{{$renter->name}}" readonly="readonly" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Address</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="{{$renter->address}}"readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">NIC</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="{{$renter->NIC}}" readonly="readonly" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label">Phone Number</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="{{$renter->phone}}" readonly="readonly" >
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-lg-8">
                                    <!-- <button href="/owner/deletesubmit" class="confirm" type="submit" data-text="Do you really want to delete that owner?" data-confirm-button="Yes" data-cancel-button="No">
                                        Remove Owner
                                    </button> -->
                                    <input class="btn btn-primary" value="Remove Renter" type="submit">
                                    <span></span>
                                    <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div></div>
@endsection
