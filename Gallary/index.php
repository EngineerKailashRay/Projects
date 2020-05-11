
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="header" id="topheader">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <div class="container-fluid text-uppercase">
                    <a class="navbar-brand" href="#">Gallary</a>
                </div>
            </nav>
        </div>
        <div class="header" id="topheader">
            <div class="row">
                <?PHP
                $imagearr = array("png", "jpg", "jpeg", "gif");
                $dir = "Photos/";
// Sort in ascending order - this is default
                $a = scandir($dir);
                foreach ($a as $key => $value) {
                    $file_arr = explode(".", $value);
                    $last_file_arr = end($file_arr);
                    if (in_array(strtolower($last_file_arr), $imagearr)) {
                        ?>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="<?PHP echo $dir . $value ?>" target="_blank">
                                    <img src="<?PHP echo $dir . $value ?>" height="260px" alt="Lights" style="width:100%">
                                    <div class="caption">
                                        <p class="text-center"><?PHP echo $value ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?PHP
                    }
                }
                ?>

            </div>
        </div>
    </body>
</html>