<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>

      @media (min-width: 992px) { 
        .card{
        width: 900px;
        margin: auto;
        }
      }

      .article{
        margin: 30px;
      }
      .card-header{
        background-color: white;
      }

      .row-fluid{
        text-align: center;
      }
      .img-thumbnail{ 
        margin: 0px 10px 20px;
      }

    </style>

    <title>article</title>
  </head>
  <body>
    <div class="article">

    
    <div class="container">
      <div class="card mb-3">
        <div class="card-body">
          <span class="meta-category">
            <p class="text-primary">kategori (ex: obat, terapi, herbal)</p>
          </span>
          <?php
                $dat = json_decode($data->data);
          ?>
          <h1><?= $dat->title?></h1>
          <hr class="pt-4 pb-1">
          <div class="row-fluid">
            <img class="img-thumbnail" src="<?php echo base_url()?>assets/img/medgency1.png" alt="Responsive image">
          </div>
          <p class="card-text"><?= $dat->desc?></p>
          <p class="card-text"><small class="text-muted"><?= $dat->time?></small></p>
        </div>
      </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>