<?php
    include_once('header/header.php');   
    
    $pathway = getAll();

    /**
        * 
        * Create a function to grab all flyer images from the img/flyer folder
        * 
        */
    function getAll(){
        $ig = $_GET['work'];
        $allFlyers = array_diff(scandir("../img/$ig"), array('..', '.', '.DS_Store'));
        return $allFlyers;
    }
?>
    <div class="container" id="content">
        <div class="row">
            <div class="col-md">
                <img class="img-fluid" src="/img/objective/IgHeader.png" alt="">
            </div>
        </div>
        <div class="row" id="work">
            <?php foreach($pathway as $path) { ?>
                <div class="col-sm-6 col-md-3 work">
                    <img src="../img/socialMedia/<?=$path?>" alt="" class="workImg img-fluid">
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- The Close Button -->
                <span class="close">&times;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img01">

                <!-- Modal Caption (Image Text) -->
                <div id="caption">
                </div>
            </div>
        </div>
    </div>
    <script src="/js/modal.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>