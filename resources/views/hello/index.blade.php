<html>
    <body>
        <form action="/hello" method="post">
        {{csrf_field()}}
            <p>好きな女性のタイプを入力してください。</p>
            <p>{{$msg}}</p>
            @if (0 < count($errors))
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <table>
                <tr>
                    <th>身長：</th>
                    <td>
                        <input type="text" name="tall" value="{{old('tall')}}"/>cm
                        @if ($errors->has('tall'))
                            @foreach ($errors->get('tall') as $error)
                            <p>ERROR:{{$error}}</p>
                            @endforeach
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>年齢：</th>
                    <td>
                        <input type="text" name="age" value="{{old('age')}}"/>歳
                        @if ($errors->has('age'))
                            @foreach ($errors->get('age') as $error)
                            <p>ERROR:{{$error}}</p>
                            @endforeach
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>カップ：</th>
                    <td>
                        <input type="text" name="cup" value="{{old('cup')}}"/>カップ
                        @if ($errors->has('cup'))
                            @foreach ($errors->get('cup') as $error)
                            <p>ERROR:{{$error}}</p>
                            @endforeach
                        @endif
                    </td>
                </tr>
            </table>
            <input type="submit"/>
        </form>

    </body>
</html>
