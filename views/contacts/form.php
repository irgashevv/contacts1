<?php
    include_once __DIR__ . "/../header.php";

    $url = $_SERVER['REQUEST_URI'];
    if($url == '/?model=contacts&action=create')
        $city = 'Добавить новый контакт';
    else {
        $city = 'Изменить данные контакта';
    }
?>

    <div class="form-div">
            <h1 class="display-4 text-center mt-5"> <?= $city ?> </h1>
        <form class="form-horizontal w-50 container border border-info rounded " action="/?model=contacts&action=save" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="card-body">
                <input type="hidden" value="<?=$one['id'] ?? ''?>" name="id">

                <div class="form-group">
                    <label>Имя</label>
                        <input type="text" value="<?=$one['name'] ?? ''?>" name="name" class="form-control" required placeholder="Введите Ваше Имя" maxlength="30" minlength="4">
                </div>

                <label>Номер телефона</label>
                <div class="form-group d-flex">
                        <input type="text"  value="<?=$one['mobile_number'] ?? ''?>" name="mobile_number"  class="form-control" required placeholder="Введите Ваш номер телефона">
                    <a class="btn btn-primary ml-2" data-toggle="collapse" href="#hide-number" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">+</a>
                </div>

                <div class="collapse multi-collapse" id="hide-number">
                    <div class="form-group">
                        <label>Домашний Номер</label>
                            <input type="text"  value="<?=$one['home_number'] ?? ''?>" name="home_number"  class="form-control" placeholder="По желанию">
                    </div>
                </div>

                <label>Адрес электронной почты</label>
                <div class="form-group d-flex">
                        <input type="email"  value="<?=$one['email'] ?? ''?>" name="email"  class="form-control" required placeholder="Введите адрес электронной почты">
                    <button class="btn btn-primary ml-2" type="button" data-toggle="collapse" data-target="#hide-email" aria-expanded="false" aria-controls="multiCollapseExample2">+</button>
                </div>

                <div class="collapse multi-collapse" id="hide-email">
                <div class="form-group">
                    <label>Резервный электронный адрес</label>
                        <input type="email"  value="<?=$one['reserve_email'] ?? ''?>" name="reserve_email"  class="form-control" placeholder="По желанию">
                </div>
                </div>
                <div>
                    <input type="submit" class="btn btn-info btn-save" value="Сохранить">
                </div>
            </div>
        </form>

<?php
    include_once __DIR__ . "/../footer.php";
?>