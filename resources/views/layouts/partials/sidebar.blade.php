<div class="col-2">
  <h4 class="side_h4">参加グループリスト</h4>
  <ul class="list-group" style="max-width: 400px;">
    @foreach ($teams as $team)
    <a href="./{{$team->id}}" class="link">
    <li class="list-group-item">{{$team->name}}</li>
    </a>
      @endforeach
  </ul>
</div>