@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Subs</div>
                    @if (Route::has('login'))
                        <div class="top-right links">

                            @if (is_array($subs))

                            @endif
                        </div>
                    @endif
                    <div class="panel-body">
                        You are Subscribed to:
                        @foreach($subs as $sub)
                            <div id = {{$sub}}>
                                <label>Subscription: </label>
                                <span>{{$sub}}</span>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
