@extends('layouts.app')

@section('content')

<div class="layout-px-spacing p-0">

    <h2 class="mt-3 pt-5 pb-5">Notifications</h2>

    @forelse ($notifications as $notification)

            <div class="card col-md-7 mb-2">
                <div class="card-body">

                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-bell-o" aria-hidden="true"></i>
                        </div>
                        <div class="col-7">
                            <h6>{{$notification->title}}</h6>
                            {{$notification->body}}
                        </div>
                        <div class="col-3">
                            <span class="badge badge-sm badge-secondary">{{$notification->status}}</span>
                            <br>
                            <form action="">
                                <button class="btn btn-outline-secondary btn-sm mt-3">mark as read</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    @empty

            <h5 class="mt-5 text-center">No notifications yet...</h5>
        
    @endforelse
       




</div>
@endsection