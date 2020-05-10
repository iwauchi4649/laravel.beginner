@extends('layouts.app')


@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-2">
    <h4>参加グループリスト</h4>
    <ul class="list-group" style="max-width: 400px;">
      <li class="list-group-item">リスト1</li>
      <li class="list-group-item">リスト2</li>
      <li class="list-group-item">リスト3</li>
    </ul>
    </div>
    <div class="col-10">
      <h4>戦績データ</h4>
        <table class="table">
          <thead>
          <tr>
          <th>名前</th>
          <th>体重</th>
          <th>身長</th>
          <th>前屈</th>
          </tr>
          </thead>
          <tbody>
          <tr>
          <td>畠井</td>
          <td>123.4kg</td>
          <td>123.4kg</td>
          <td>123.4kg</td>
          </tr>
          </tbody>
        </table>
      <h4>各項目の説明</h4>
        <dl class="dl-horizontal">
        <dt>名前</dt><dd>畠井の名前</dd>
        <dt>体重</dt><dd>畠井の体重</dd>
        <dt>身長</dt><dd>畠井の身長</dd>
        <dt>前屈</dt><dd>畠井の前屈</dd>
        </dl>
    </div>
  </div>
</div>
@endsection

    <!-- @foreach ($teams as $team)
      <p>{{$team->name}}</p>
    @endforeach -->