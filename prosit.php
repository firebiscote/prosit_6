<html>
    <head>
        <meta charset='utf-8'/>
        <title>prosit 6</title>
    </head>
    <body style="background-color: #A9A9A9;">
        <center>
            <table>
                <?php
                    $start = 128512;
                    if (isset($_POST['start'])) {
                        $start = (!empty($_POST['l'])) ? $_POST['start']-512 : $_POST['start'];
                    }
                    for($i = 0; $i < 16; $i++) {
                        echo '</tr><tr>';
                        for($y = 0; $y < 16; $y++) {
                            echo '<td style="height: 35px; width: 35px;">&#'.$start.'</td>';
                            $start++;
                        }
                    }
                ?>
            </table>
            <form action='prosit.php' method='post'>
                <input type='hidden' name='start' value='<?=$start?>'>
                <p style=""><input type='submit' id='bl' name='l' value='<'>
                <input type='submit' id = 'br' name='r' value='>'></p>
            </form>
        </center>
    </body>
</html>