@extends('backend.layouts.master')

@section('body')
<div class="container-fluid">
    <div class="text-center m-1">
        <h4>Welcome to Admin panel where you can add, view, update and delete records.</h4>
    </div>
    <div class="row py-5">
        <div class="col-4">
            <div class="small-box bg-success py-4">
                <div class="inner">
                    <h3>{{$manufacturers->count()}}<sup style="font-size: 20px"></sup></h3>

                    <h5>Manufacturers Registered</h5>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{route('admin.manufacturer.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-4">
            <div class="small-box bg-warning py-4">
                <div class="inner">
                    <h3>{{$consoles->count()}}<sup style="font-size: 20px"></sup></h3>

                    <h5>Consoles Registered</h5>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{route('admin.console.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-4">
            <div class="small-box bg-info py-4">
                <div class="inner">
                    <h3>{{$games->count()}}<sup style="font-size: 20px"></sup></h3>

                    <h5>Games Registered</h5>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>


@endsection