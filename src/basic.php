<html>
    <body>
        <div>
            <?php
                $arr = [
                  ["hyoil1", 10],
                  ["hyoil2", 20],
                  ["hyoil3", 30],  
                ];

                foreach ($arr as [$key, $value]){
                    echo "key: {$key}, value: {$value}<br/>";
                }
            ?>
        </div>
    </body>
</html>