<html>
    <body>
        <div>
            <!-- submitを押下すると、method(get)方式で、action("basic.php")に転送する。 -->
            <!-- get dataが/basic.phpに転送されbasic.phpでデータを受け取り、データを処理する。 -->
            <!-- serverからデータを受け取る時によく使う。 -->
            <!-- 掲示板をコピーして誰かに送るときに、URLを送るため、URLにデータが残るGET方式を利用する。 -->
            <h1>GET send</h1>
            <form method="get" action="">
                <label for="get_id">ID : </label>
                <input type="text" name="get_id" />
                <label for="get_pw">PW : </label>
                <input type="text" name="get_pw" />
                <input type="submit" />
            </form>
            <?php

            # $_get

            $get_id = $_GET["get_id"];
            $get_pw = $_GET["get_pw"];

            echo $get_id." ".$get_pw;
            ?>
        </div>
        <div>
            <!-- submitを押下すると、method(post)方式で、action("basic.php")に転送する。 -->
            <!-- ユーザに見れないため、セキュリティー的にgetよりは良い。 -->
            <!-- Fiddler Web Debugger toolを利用すると、server - client間通信のHTTPプロトコルの中身を確認できる。 -->
            <!-- serverにデータを送信する時にはPOSTを使う。見られないため。 -->
            <h1>POST send</h1>
            <form method="post" action="">
                <label for="post_id">ID : </label>
                <input type="text" name="post_id" />
                <label for="post_pw">PW : </label>
                <input type="text" name="post_pw" />
                <input type="submit" />
            </form>
            <?php

            # $_post

            $post_id = $_POST["post_id"];
            $post_pw = $_POST["post_pw"];

            echo $post_id." ".$post_pw;
            ?>
        </div>
    </body>
</html>