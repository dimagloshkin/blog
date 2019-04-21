<?php
$topNewArt = WorkWithLayout::getFourTopNewArt();
?>
<div id="content">
    <div class="container">
        <div class="row">
            <section class="content__left col-md-8">
               <?php
               foreach ($name_cat as $category_name):
                  ?>
                   <div class="block">
                       <a href="/recipes">Все записи</a>
                       <h3>Новейшее <?= $category_name['name_cat']; ?></h3>
                       <div class="block__content">
                           <div class="articles articles__horizontal">
                              <?php
                              $cloneTopNewArt = $topNewArt;
                              for ($i = 0; $i < 4; $i++) {
                                 foreach ($cloneTopNewArt as $id => $art) {
                                    if ($art['cat_id'] == $category_name['id']) {
                                       ?>
                                        <article class="article">
                                            <div class="article__image"
                                                 style="background-image: url(<?php echo $art['image'] . $art['id'] . '.jpg'; ?>);"></div>
                                            <div class="article__info">
                                                <a href="recipes/one/<?= $art['id']; ?>"><?= $art['tittle']; ?></a>
                                                <div class="article__info__meta">
                                                    <small>Категория: <a href="/recipes/<?= $category_name['id']; ?>">
                                                          <?php
                                                          foreach ($name_cat as $cat) {
                                                             if ($cat['id'] == $art['cat_id']) {
                                                                echo $cat['name_cat'];
                                                                break;
                                                             }
                                                          }
                                                          ?>
                                                        </a></small>
                                                </div>
                                                <div class="article__info__preview">
                                                   <?php echo substr($art['content'], 0, 160) . ' ... '; ?>
                                                </div>
                                            </div>
                                        </article>
                                       <?php
                                       unset($cloneTopNewArt[$id]);
                                       break;
                                    }
                                 }
                              }
                              ?>
                           </div>
                       </div>
                   </div>
               <?php
               endforeach;
               ?>
            </section>
            <section class="content__right col-md-4">


