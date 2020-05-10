@extends('layouts.app')


@section('content')
  @foreach ($teams as $team)
    <p>{{$team->id}}</p>
    <p>{{$team->name}}</p>
  @endforeach
@endsection

@endsection
