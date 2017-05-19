@extends('admin.layout')

@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Analysis Report
                    </h1>
                    <form class="form-horizontal" role="form" method="post" action="{{route('analysis_submit')}}">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Start Date</label>
                            <div class="col-lg-3">
                                <input class="form-control" name="start" type="date" placeholder="Start Date">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label" >End Date</label>
                            <div class="col-lg-3">
                                <input class="form-control" name="end" placeholder="End Date" type="date">
                            </div>
                        </div>

                <br>
                <br>
                <br>

                        <div class="col-lg-8">
                            <input class="btn btn-primary" value="View Results" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection