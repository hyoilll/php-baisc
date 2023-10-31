<html>
    <body>
        <!-- submitを押下すると、method(get)方式で、action("basic.php")に転送する。 -->
        <form method="get" action="">
            <label for="id">ID : </label>
            <input type="text" name="id" />
            <label for="pw">PW : </label>
            <input type="text" name="pw" />
            <input type="submit" />
        </form>
        <?php

        # $_get

        $id = $_GET["id"];
        $pw = $_GET["pw"];

        echo $id." ".$pw;

        ?>
    </body>
</html>