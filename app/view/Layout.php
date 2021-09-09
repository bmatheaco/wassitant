<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, inicial-scale=1">
  <meta name="author" content="beMath">
  <meta name="description" content="<?php echo $this->getDescription(); ?>">
  <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
  <title><?php echo $this->getTitle(); ?></title>
  <!-- <link rel="stylesheet" href="/public/css/Style.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <?php echo $this->addHead(); ?>

</head>

<body class="bg-dark text-white">

  <nav class="border border-primary fixed-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo DIR_PAGE . 'listAnime' ?>"><i class="bi bi-tv text-primary"></i> WatchAssistant</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo DIR_PAGE . 'listAnime' ?>"><i class="bi bi-list-ul mb-0"></i> Minha Lista</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo DIR_PAGE . 'addAnime' ?>"><i class="bi bi-plus-circle-dotted"></i> Adicionar Anime</a>
            </li>
        </div>
      </nav>
    </div>
  </nav>

  <?php echo $this->addHeader(); ?>

  </nav>

  <div class="container xxl mt-5">
    <?php echo $this->addMain(); ?>
  </div>

  <div class="mb-0">

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-secondary text-white">
      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://github.com/Elect-Git">beMath</a>
      </div>
      <!-- Copyright -->

      <?php echo $this->addFooter(); ?>

    </footer>

  </div>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

</html>