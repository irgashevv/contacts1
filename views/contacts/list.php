<?php
include_once __DIR__ . "/../header.php";
?>

    <div class="container">

        <form method="get" class="form-inline float-left p-2" action="/index.php/">
            <input type="hidden" name="model" value="contacts">
            <input type="hidden" name="action" value="read">
            <input type="text" name="search" placeholder="Поиск Контактов" class="form-control">
            <input type="submit" value="Искать" class="btn btn-secondary ml-3">
        </form>

        <table class="table table-striped mt-4">
            <thead class="thead-dark">
            <tr>
                <th>Имя</th>
                <th>Мобильный Номер</th>
                <th>Домашний Номер</th>
                <th>Электронная почта</th>
                <th>Резервная почта</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($all as $d) : ?>
                <tr>
                    <td><?= $d['name'] ?></td>
                    <td><?= $d['mobile_number'] ?></td>
                    <td><?= $d['home_number'] ?></td>
                    <td><?= $d['email'] ?></td>
                    <td><?= $d['reserve_email'] ?></td>
                    <td>
                        <a href="/?model=contacts&action=update&id=<?= $d['id'] ?>" class="btn btn-primary btn-sm">Редактировать</a>
                        <button class="btn btn-danger btn-sm" id="delete-btn" onclick="deleteBtn(<?= $d['id'] ?>, '<?= $d['name'] ?>')">
                            Удалить
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <nav aria-label="..." class="float-right ">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="/?model=contacts&action=read&page=1">1</a></li>
                <li class="page-item">
                    <a class="page-link" href="/?model=contacts&action=read&page=2">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="/?model=contacts&action=read&page=3">3</a></li>
            </ul>
        </nav>
    </div>
    <script>
        function deleteBtn(id, name) {
            if (confirm('Удалить ' + name + '?')) {
                document.location.href = "/?model=contacts&action=delete&id=" + id
            }
        }
    </script>
<?php
include_once __DIR__ . "/../footer.php";
?>