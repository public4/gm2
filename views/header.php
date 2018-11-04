<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $pageData['_title'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=URL.DIR;?>/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <?php
    if (isset($pageData['_css']))
    {
      echo '<link rel="stylesheet" href="css/'.$pageData['_css'].'">';
    }
    ?>
    <script src="https://yastatic.net/jquery/3.1.1/jquery.min.js"></script>
    <base href="<?=URL.DIR; ?>/">
</head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="list">Мои листы <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add">Добавить</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="list/expired">Мои просроченные листы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="list/all">Все листы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="list/bomj">Листы-Бомжи</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Я вижу некоторое дерьмо</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php 
                if (isset($_SESSION['username'])) echo $_SESSION['username'];
                ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="profile">Профиль</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="auth/logout">Выход</a>
              </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="<?=DIR; ?>/list/search" method="POST">
          <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search" name="query">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти</button>
        </form>
      </div>
    </nav>

  </div>
<!-- <div class="row"> -->
