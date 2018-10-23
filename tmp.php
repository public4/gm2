<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
</head>
<style>
body{
    padding-top: 55px;
}
</style>
<body>
    <div class="container">
        <div class="row">
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
    </div>


<!-- <div class="row"> -->
    <div class="container-fluid">
        <div class="row">
            <table class="table table-sm table-borderless" id="mytable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Контрагент</th>
                        <th scope="col">Документ</th>
                        <th scope="col">Адрес</th>
                        <th scope="col">Открыт</th>
                        <th scope="col">Комментарий</th>
                        <th scope="col">Отделы</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ООО "Ромашка"</td>
                        <td>Спецификация 1</td>
                        <td>email@example.com</td>
                        <td>27-05-2018</td>
                        <td>No comments</td>
                        <td>Legal</td>
                    </tr>
                </tbody>
        </div>
    </div>
<!-- </div> -->







</body>
</html>