<html>
<head>
    <title>ユーザー認証</title>
</head>
<body>
    <h1>ユーザー認証</h1>
    <hr size="1">
    <p>{{$message}}</p>
    <table>
      <form action="/person/auth" method="post">
         {{ csrf_field() }}
         <tr><th>mail: </th><td><input type="text"
               name="email"></td></tr>
         <tr><th>pass: </th><td><input type="password"
               name="password"></td></tr>
         <tr><th></th><td><input type="submit"
               value="send"></td></tr>
      </form>
    </table>
</body>
</html>
