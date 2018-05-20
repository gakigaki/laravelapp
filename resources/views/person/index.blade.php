<html>
<head>
<title>動作確認</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous"></script>
    <script>
        function updatePerson(id) {
            $('#id').val(id);
            $('#form1').attr('action', 'person/update');
            $('#name').val($('#name' + id).val());
            $('#mail').val($('#mail' + id).val());
            $('#age').val($('#age' + id).val());
            document.form1.submit();
        }
        function deletePerson(id) {
            $('#id').val(id);
            $('#form1').attr('action', 'person/delete');
            document.form1.submit();
        }
    </script>
</head>
<body>
  <form id="form1" name="form1" action="" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" id="id" value="" />
    <input type="hidden" name="name" id="name" value="" />
    <input type="hidden" name="mail" id="mail" value="" />
    <input type="hidden" name="age" id="age" value="" />
  </form>
  <div class="container">

    <nav class="navbar navbar-default">
      <div class="navbar-header">
        <a href="#" class="navbar-brand">動作確認</a>
      </div>

      <div id="gnavi" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="person">一覧</a></li>
          <li><a href="person/add">登録</a></li>
        </ul>
      </div>
      <div id="gnavi2" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          @if (Auth::check())
            <p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
          @else
            <p>※ログインしていません。（<a href="/login">ログイン</a>｜
            <a href="/register">登録</a>）</p>
          @endif
        </ul>
      </div>
    </nav>

    <table class="table table-striped">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Mail</th>
      <th>Age</th>
      <th></th>
      <th></th>
    </tr>
      @foreach ($items as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td><input type="text" name="name" value="{{$item->name}}" id="name{{$item->id}}"/></td>
        <td><input type="text" name="mail" value="{{$item->mail}}" id="mail{{$item->id}}"/></td>
        <td><input type="text" name="age" value="{{$item->age}}" id="age{{$item->id}}"/></td>
        <td><button type="button" onclick="updatePerson({{$item->id}});" class="btn btn-primary btn-sm">更新</button></td>
        <td><button type="button" onclick="deletePerson({{$item->id}});" class="btn btn-danger btn-sm">削除</button></td>
      </tr>
     @endforeach
    </table>
    <div>
      {{ $items->links()}}
    </div>
   </div>
</body>
</html>
