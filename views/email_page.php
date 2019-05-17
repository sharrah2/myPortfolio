<?php
   include_once('header/header.php');
   $pathway = getEmail();
   /**
    * 
    * Create a function to grab the specific pathway from the img/email folder
    * 
    */
   function getEmail(){
      $email = $_GET['email'];
      $allEmail = array_diff(scandir("../img/email"), array('..', '.', '.DS_Store'));
      
      $id = array_search($email, $allEmail);

      return $allEmail[$id];
   }
?>

    <div id="content" class="container">
       <div class="row">
           <div class="col">
               <img class="img-fluid" src="/img/email/<?=$pathway?>" alt="">
            </div>
       </div>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>