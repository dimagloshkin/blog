<div id="content">
    <div class="container">
        <div class="row">
            <section class="content__left col-md-8">
                <div class="block">
                    <a>Просмотров: <?= $oneRec['views'];?></a>
                    <h1><?= $oneRec['tittle'];?></h1>
                    <div class="block__content">
                        <img src="/template/media/images/<?= $oneRec['id'];?>.jpg">

                        <div class="full-text">

                            <?= $oneRec['content'];?>
                        </div>
                    </div>
                </div>

                <div class="block">
                    <a href="#comment-add-form">Добавить свой</a>
                    <h3>Комментарии к статье</h3>
                    <div class="block__content">
                        <div class="articles articles__vertical">

                            <article class="article">
                                <div class="article__image"
                                     style="background-image: url(https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=125);"></div>
                                <div class="article__info">
                                    <a href="#">Артём aka Snake</a>
                                    <div class="article__info__meta">
                                        <small>10 минут назад</small>
                                    </div>
                                    <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        ...
                                    </div>
                                </div>
                            </article>

                        </div>
                    </div>
                </div>

                <div class="block" id="comment-add-form">
                    <h3>Добавить комментарий</h3>
                    <div class="block__content">
                        <form class="form">
                            <div class="form__group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form__control" required="" name="name"
                                               placeholder="Имя">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form__control" required="" name="nickname"
                                               placeholder="Никнейм">
                                    </div>
                                </div>
                            </div>
                            <div class="form__group">
                                    <textarea name="text" required="" class="form__control"
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