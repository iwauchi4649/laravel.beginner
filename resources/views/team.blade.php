@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-2">
    <h4>参加グループリスト</h4>
    <ul class="list-group" style="max-width: 400px;">
    @foreach ($teams as $team)
    <a href="./{{$team->id}}" class="link">
    <li class="list-group-item">{{$team->name}}</li>
    <a>
      @endforeach
    </ul>
    </div>
    <div class="col-10">
    <h4>{{$teamname}}の戦績データ</h4>
        <table class="table">
          <thead>
          <tr>
          <th>名前</th>
          <th>試合数</th>
          <th>通算得点</th>
          <th>順位成績</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($members as $member)
          <tr>
            <td>{{$member["name"]}}</td>
            <td>{{$member["count"]}}</td>								
            <td>{{$member["pointsum"]}}</td>					
            <td>{{$member["rank"]}}</td>
          </tr>
          @endforeach  
        </tbody>
        </table>
      <h4>各項目の説明</h4>
        <dl class="dl-horizontal">
        <dt>名前</dt><dd>畠井の名前</dd>
        <dt>試合数</dt><dd>畠井の試合数</dd>
        <dt>通算得点</dt><dd>畠井の通算得点</dd>
        <dt>順位成績</dt><dd>畠井の順位成績</dd>
        </dl>
    </div>
  </div>
</div>
@endsection