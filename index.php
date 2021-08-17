<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>VIEW-1</title>
  </head>

  <body style="background-color:blue">
  <?php
  include 'navbar.php';
  ?>
      <div class="container-fluid" style="background-image: url('https://c.tenor.com/kKmvIr30vQYAAAAj/stars-changing-colors.gif');">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color:aqua">
              <div class="col-sm-12 col-md" style="background-color:#ADD8E6">
                <div class="heading text-center my-5" style="background-image: url('https://i.pinimg.com/originals/75/f5/a4/75f5a4bf815ae6c8f9d79da0e3655594.gif');">
                  <h3>Welcome to</h3>
                  <h1>THE VINAYAK FOUNDATION BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="bank2.jpg" class="img-fluid pt-2" style="width: 550px;">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="user.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="transfer.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="history1.png" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>