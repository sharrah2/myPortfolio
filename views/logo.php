<?php
   
    $pathway = pathway();

    /**
     * 
     * Create a function to grab all pathways from the img/logo folder
     * 
     */
    function pathway(){
       $logo = $_GET['work'];
       return array_diff(scandir("../img/$logo"), array('..', '.', '.DS_Store'));
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sharon Harrah | Portfolio</title>
    <style>
        body {
            font-family: 'Anonymous Pro', monospace !important;

        }
        .thumbnail:hover {
            position:relative;
            top:-25px;
            left:-35px;
            width:350px;
            height:auto;
            display:block;
            z-index:999;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Wells Ministry</h1>
            </div>
            <div class="col">
                <h1>STFC</h1>
            </div>
            <div class="col">
                <h1>ASUWT</h1>
            </div>
        </div>
        <div class="row">
            <?php foreach($pathway as $path){ ?>
                <div class="col-3">
                    <img src="../img/logo/<?=$path?>" height="200" width="200" alt="" class="thumbnail" style="background-color: red; margin: 0px 10px;">
                </div>
            <?php }?>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

