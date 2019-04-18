<div id="content">
    <div class="container">
        <div class="row">
            <section class="content__left col-md-8">
                <div class="block">

                    <h3>Все рецепты</h3>
                    <div class="block__content">
                        <div class="articles articles__horizontal">
                           <?php
                           foreach ($arrRecipes as $num => $recipe):
                           ?>
                            <article class="article">
                                <div class="article__image"
                                     style="background-image: url(<?php echo $recipe['image'] . $recipe['id'] . '.jpg'; ?>)"></div>
                                <div class="article__info">
                                    <a href="recipes/one/<?= $recipe['id'];?>"><?= $recipe['tittle'];?></a>
                                    <div class="article__info__meta">
                                       <?php
                                       foreach ($name_cat as $cat) {
                                          if ($cat['id'] == $recipe['cat_id']) {
                                             ?>
                                              <small>Категория:
                                                  <a href="/recipes/<?= $cat['id']; ?>">
                                                     <?php echo $cat['name_cat'];
                                                     ?>
                                                  </a>
                                              </small>
                                             <?php
                                             break;
                                          }
                                       }
                                       ?>
                                    </div>
                                    <div class="article__info__preview">
                                       <?php echo substr($recipe['content'], 0, 160) . ' ... '; ?>
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




