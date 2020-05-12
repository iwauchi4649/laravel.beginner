@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="content">
                <div class="title m-b-md">
                    麻雀成績記録
                </div>

                <div class="links">
                    <a href="{{ url('/teams/1') }}">DATA</a>
                    <a href="{{ url('/') }}">CREATE</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
