<?php
include ROOT . '/views/layout/header_admin.php';
?>
<section>
    <div class="container">
        <div class="row">
            <br/>
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/category">Управление категориями</a></li>
                    <li class="active">Редактировать категорию</li>
                </ol>
            </div>
            <h4>Редактировать категорию "<?= $cat['name_cat']; ?>"</h4>
            <br/>
            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">
                        <p>Название</p>
                        <input type="text" name="name_cat" placeholder="" value="<?= $cat['name_cat']; ?>">
                        <br><br>
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include ROOT . '/views/layout/footer_admin.php';
?>
