<style>
   body{
      font-family: 'Anonymous Pro', monospace !important;
   }
   #content{
      margin-top: 100px;
   }
   .thumbnail {
        height: auto ;
        width: 200px;
        margin: 20px 0px;
   }
   .thumbnail:hover {
        position:relative;
        top:-25px;
        left:-35px;
        width:500px;
        height:auto;
        display:block;
        z-index:999;
    }
</style>
<?php
   include_once('header/header.php');

   $pathway = getAll();

   /**
    * 
    * Create a function to grab all flyer images from the img/flyer folder
    * 
    */
   function getAll(){
      $tv = $_GET['work'];
      $allTv= array_diff(scandir("../img/tv"), array('..', '.', '.DS_Store'));
      return $allTv;
   }
?>
    <div class="container" id="content">
        <div class="row">
            <div class="col-md">
                <img class="img-fluid" src="/img/objective/TVHeader.png" alt="">
            </div>
        </div>
        <div class="row">
            <?php foreach($pathway as $path) { ?>
                <div class="col-sm-6 col-md-4 work">
                    <img src="../img/tv/<?=$path?>" alt="../img/tv/<?=$path?>" class="img-fluid">
                </div>
            <?php } ?>
        </div>
       
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>