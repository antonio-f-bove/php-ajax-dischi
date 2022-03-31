<?php

include __DIR__ . '/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-ajax-dischi</title>

  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="app-container">
    <header></header>
    <main>

      <div class="container">
        <div class="flex-row">
          <?php
          foreach($albums as $album):
            extract($album);
            ?>
            <div class="card">
              <div class="img-container">
                <img src="<?= $poster ?>" alt="">
              </div>
              <h4 class="title"><?= strtoupper($title) ?></h4>
              <div class="info-box">
                <div class="author"><?= $author ?></div>
                <div class="year"><?= $year ?></div>
              </div>
            </div>
            <?php
          endforeach
          ?>
        </div>
      </div>

    </main>
  </div>
  
</body>
</html>