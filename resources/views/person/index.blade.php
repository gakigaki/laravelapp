<html>
<head>
   <title>動作確認</title>
</head>
<body>
   <h1>動作確認</h1>
   <hr size="1">
   <div class="content">
     <table border="1">
     <tr><th>Name</th><th>Mail</th><th>Age</th><th>Data</th></tr>
     @foreach ($items as $item)
         <tr>
             <td>{{$item->name}}</td>
             <td>{{$item->mail}}</td>
             <td>{{$item->age}}</td>
             <td>{{$item->getData()}}</td>
         </tr>
     @endforeach
     </table>
     
   </div>
</body>
</html>
