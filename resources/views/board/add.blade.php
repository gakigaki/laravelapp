<html>
<head>
   <title>Board/Add</title>
   <style>
      body {font-size:16pt; color:#999; }
      th {background-color:#999; color:fff; padding:5px 10px; }
      td {border: solid 1px #aaa; color:#999; padding:5px 10px; }
   </style>
</head>
<body>
   <h1>登録</h1>
   <table>
     <form action="/laravelapp/public/board/add" method="post">
        {{ csrf_field() }}
        <tr><th>person id: </th><td><input type="number" name="person_id"></td></tr>
        <tr><th>title: </th><td><input type="text" name="title"></td></tr>
        <tr><th>message: </th><td><input type="text" name="message"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
     </form>
   </table>
</body>
</html>
