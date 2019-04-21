<section>
    <div class="container">
        <div class="row">
            <br/>
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Управление категориями</li>
                </ol>
            </div>
            <a href="/admin/addcat" class="btn btn-default back"> Добавить категорию</a>
            <h4>Список категорий</h4>
            <br/>
            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID категории</th>
                    <th>Название категории</th>
                    <th></th>
                    <th></th>
                </tr>
               <?php foreach ($categories as $category): ?>
                   <tr>
                       <td><?= $category['id']; ?></td>
                       <td><?= $category['name_cat']; ?></td>
                       <td><a href="/admin/update/<?= $category['id']; ?>" title="Редактировать">Рудактировать</a></td>
                       <td><a href="/admin/category/<?= $category['id']; ?>" title="Удалить">Удалить</a></td>
                   </tr>
               <?php
               endforeach;
               ?>
            </table>

        </div>
    </div>
</section>

