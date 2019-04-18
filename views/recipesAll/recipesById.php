<div id="content">
    <div class="container">
        <div class="row">
            <section class="content__left col-md-8">
                <div class="block">

                    <h3>Все рецепты</h3>
                    <div class="block__content">
                        <div class="articles articles__horizontal">
                           <?php
                           foreach ($resById as $recipes):
                              ?>
                               <article class="article">
                                   <div class="article__image"
                                        style="background-image: url(<?php echo $recipes['image'] . $recipes['id'] . '.jpg'; ?>)"></div>
                                   <div class="article__info">
                                       <a href="one/<?= $recipes['id'];?>"><?= $recipes['tittle'];?></a>
                                       <div class="article__info__preview">
                                          <?php echo substr($recipes['content'], 0, 160) . ' ... '; ?>
                                       </div>
                                   </div>
                               </article>
                           <?php
                           endforeach;
                           ?>

                        </div>
                    </div>
                </div>

            </section>
            <section class="content__right col-md-4">




