<html>
    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous"></script>
    <script>
        function updateWoman(id) {
            $('#id').val(id);
            $('#form1').attr('action', '/hello/update');
            $('#tall').val($('#tall' + id).val());
            $('#age').val($('#age' + id).val());
            $('#cup').val($('#cup' + id).val());
            document.form1.submit();
        }
        function deleteWoman(id) {
            $('#id').val(id);
            $('#form1').attr('action', '/hello/delete');
            document.form1.submit();
        }
    </script>

    <body>
        <form id="form1" name="form1" action="" method="post">
            {{csrf_field()}}
            <input type="hidden" name="id" id="id" value="" />
            <input type="hidden" name="tall" id="tall" value="" />
            <input type="hidden" name="age" id="age" value="" />
            <input type="hidden" name="cup" id="cup" value="" />
        </form>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>身長</th>
                    <th>年齢</th>
                    <th>カップ</th>
                    <th>更新</th>
                    <th>削除</th>
                </tr>
                @foreach ($items as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <th><input type="text" name="tall" id="tall{{$item->id}}" value="{{$item->tall}}" /></th>
                    <th><input type="text" name="age" id="age{{$item->id}}" value="{{$item->age}}" /></th>
                    <th><input type="text" name="cup" id="cup{{$item->id}}" value="{{$item->cup}}" /></th>
                    <th><button type="button" onclick="updateWoman({{$item->id}});">更新</button></th>
                    <th><button type="button" onclick="deleteWoman({{$item->id}});">削除</button></th>
                </tr>
                @endforeach
            </table>
        </form>
        <br />
        <button type="button" onclick="window.location.href='/hello'">登録</button>
    </body>
</html>
