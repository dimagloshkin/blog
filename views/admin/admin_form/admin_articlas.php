

   <section>
      <div class="container">
         <div class="row">

            <br/>

            <div class="breadcrumbs">
               <ol class="breadcrumb">
                  <li><a href="/admin">Админпанель</a></li>
                  <li class="active">Управление статьями</li>
               </ol>
            </div>

            <a href="#" class="btn btn-default back"> Добавить статью</a>

            <h4>Список статей</h4>

            <br/>

            <table class="table-bordered table-striped table">
               <tr>
                  <th>ID статьи</th>
                  <th>Название</th>
                  <th>Автор</th>
                  <th>Дата</th>
                  <th>Изображение</th>
                  <th>Просмотры</th>
                  <th>ID категории</th>
                  <th></th>
                  <th></th>
               </tr>
                <?php foreach($recipes as $recip):?>
                  <tr>
                     <td><?= $recip['id'];?></td>
                     <td><?=$recip['tittle'] ;?></td>
                     <td><?= $recip['author'];?></td>
                     <td><?=$recip['date'] ;?></td>
                     <td><?= $recip['image'];?></td>
                     <td><?=$recip['views'] ;?></td>
                     <td><?=$recip['cat_id'] ;?></td>
                     <td><a href="#" title="Редактировать">Редактировать</a></td>
                     <td><a href="/admin/articles/<?= $recip['id'];?>" title="Удалить">Удалить</a></td>
                  </tr>
                <?php
                endforeach;
                ?>
            </table>

         </div>
      </div>
   </section>

