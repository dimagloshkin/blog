<div id="content">
    <div class="container">
        <div class="row">
            <section class="content__left col-md-8">
                <div class="block">
                    <a>Просмотров: <?= $oneRec['views']; ?></a>
                    <h1><?= $oneRec['tittle']; ?></h1>
                    <div class="block__content">
                        <img src="/template/media/images/<?= $oneRec['id']; ?>.jpg">
                        <div class="full-text">
                           <?= $oneRec['content']; ?>
                        </div>
                    </div>
                </div>
               <?php
               foreach ($arrComment as $comment):
                  ?>
                   <div class="block">
                       <h3>Комментарии к статье</h3>
                       <div class="block__content">
                           <div class="articles articles__vertical">
                               <article class="article">
                                   <div class="article__image"
                                        style="background-image: url(https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=125);">
                                   </div>
                                   <div class="article__info">
                                      <?= $comment['author']; ?>
                                       <div class="article__info__meta">
                                           <small>
                                              <?php
                                              $commentDate = date('d.m.Y H:i', strtotime($comment['date']));
                                              echo $commentDate;
                                              ?>
                                           </small>
                                       </div>
                                       <div class="article__info__preview">
                                          <?= $comment['comment']; ?>
                                       </div>
                                   </div>
                               </article>
                           </div>
                       </div>
                   </div>
               <?php
               endforeach;
               ?>
                <div class="block" id="comment-add-form">
                    <h3>Добавить комментарий</h3>
                    <div class="block__content">
                        <form class="form" method="POST" action="">
                            <div class="form__group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form__control" required="" name="author"
                                               placeholder="Имя">
                                    </div>
                                </div>
                            </div>
                            <div class="form__group">
                                    <textarea name="content" required="" class="form__control"
                                              placeholder="Текст комментария ..."></textarea>
                            </div>
                            <div class="form__group">
                                <input type="submit" class="form__control" name="do_post"
                                       value="Добавить комментарий">
                            </div>
                        </form>
                    </div>
                </div>
               <?php if (preg_match('~^/recipes/one/[0-9]+$~', $_SERVER['REQUEST_URI'])): ?>
            </section>
<?php endif;
?>