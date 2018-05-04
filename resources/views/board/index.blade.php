<html>
<head>
   <title>Board/Index</title>
   <style>
      body {font-size:16pt; color:#999; }
      th {background-color:#999; color:fff; padding:5px 10px; }
      td {border: solid 1px #aaa; color:#999; padding:5px 10px; }
   </style>
</head>
<body>
   <h1>一覧</h1>
   <table>
   <tr><th>Message</th><th>Name</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->message}}</td>
           <td>{{$item->person->name}}</td>
       </tr>
   @endforeach
   </table>
</body>
</html>
