<html>
    <head>
        <title>Connect Laravel to DB</title>
    </head>
    <body>
        <div>
        <?php
            if(DB::connection()->getPdo()){
                echo "Connection Success";
            }
        ?>
        </div>
    </body>
</html>