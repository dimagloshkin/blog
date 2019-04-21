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
                        <li><a href="/admin/articles">Управление статьями</a></li>
                        <li class="active">Добавить статью</li>
                    </ol>
                </div>


                <h4>Редактировать статью "<?= $rec['tittle']; ?>"</h4>

                <br/>


                <div class="col-lg-4">
                    <div class="login-form">
                        <form action="#" method="post" enctype="multipart/form-data">

                            <p>Название статьи</p>
                            <input type="text" name="tittle" placeholder="" value="<?= $rec['tittle']; ?>">

                            <p>Содержимое</p>
                            <textarea type="text" name="content" placeholder="" value="">
                         <?= $rec['content']; ?>
                     </textarea>

                            <p>Автор</p>
                            <input type="text" name="author" placeholder="" value="<?= $rec['author']; ?>">

                            <p>Категория</p>
                            <select name="category_id">
                               <?php
                               foreach ($allCat as $cat): ?>
                                   <option value="<?php echo $cat['id']; ?>"
                                       <?php if ($rec['cat_id'] == $cat['id']){ echo ' selected="selected"'; }?>>
                                      <?php echo $cat['name_cat']; ?>
                                   </option>
                               <?php
                               endforeach;
                               ?>

                            </select>

                            <br/><br/>


                            <p>Изображение товара</p>
                            <img src="<?= $rec['image'] . $rec['id'] . '.jpg'; ?>" width="200" alt="" />
                            <input type="file" name="image" placeholder="" value="">

                            <br/><br/>

                            <input type="submit" name="submit" class="btn btn-default" value="Сохранить">

                            <br/><br/>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="page-buffer"></div>
    </div>
<?php
include ROOT . '/views/layout/footer_admin.php';
?>