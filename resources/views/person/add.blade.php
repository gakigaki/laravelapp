<html>
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <form action="add" method="post">
            {{csrf_field()}}
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <a href="#" class="navbar-brand">動作確認</a>
                    </div>

                    <div id="gnavi" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="./">一覧</a></li>
                            <li><a href="add">登録</a></li>
                        </ul>
                    </div>
                </nav>

            <p>データを入力してください</p>
                <div class="form-group">
                    <label>名前</label>
                    <input type="text" name="name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label>メールアドレス</label>
                    <input type="text" name="mail" class="form-control"/>
                </div>

                <div class="form-group">
                    <label>年齢</label>
                    <input type="text" name="age" class="form-control"/>
                </div>
            <input type="submit" class="btn btn-primary btn-sm"/>
            </form>
        </div>
    </body>
</html>


