<html>
<head>
   <title>動作確認</title>
</head>
<body>
   <h1>動作確認</h1>
   <hr size="1">
   <div class="content">
     <form action="/person/find" method="post">
     {{ csrf_field() }}
     <input type="text" name="input" value="{{$input}}">
     <input type="submit" value="find">
     </form>
     @if (isset($item))
     <table border="1">
     <tr><th>Name</th><th>Mail</th><th>Age</th><th>Data</th></tr>
     <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->getData()}}</td>
     </tr>
     </table>
     @endif
   </div>
</body>
</html>
