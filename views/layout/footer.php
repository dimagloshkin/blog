<?php if (preg_match('~^/recipes/one/[0-9]+$~', $_SERVER['REQUEST_URI'])): ?>
<section class="content__right col-md-4">
   <?php endif;
   ?>
    <div class="block">
        <h3>Ваше местоположение</h3>
        <div class="block__content">
            <script type="text/javascript"
                    src="//ra.revolvermaps.com/0/0/6.js?i=02op3nb0crr&amp;m=7&amp;s=320&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80"
                    async="async"></script>
        </div>
    </div>
    <div class="block">
        <h3>Топ читаемых статей</h3>
        <div class="block__content">
            <div class="articles articles__vertical">
               <?php
               foreach ($topArt as $art):
                  ?>
                   <article class="article">
                       <div class="article__image"
                            style="background-image: url(<?php echo $art['image'] . $art['id'] . '.jpg'; ?>);">
                       </div>
                       <div class="article__info">
                           <a href="/recipes/one/<?= $art['id']; ?>"><?= $art['tittle']; ?></a>
                           <div class="article__info__meta">

                              <?php
                              foreach ($name_cat as $cat) {
                                 if ($cat['id'] == $art['cat_id']) {
                                    ?>
                                     <small>Категория:
                                         <a href="/recipes/<?= $cat['id']; ?>">

                                            <?php echo $cat['name_cat']; ?>
                                         </a>
                                     </small>
                                    <?php
                                    break;
                                 }
                              }
                              ?>

                           </div>
                           <div class="article__info__preview">
                              <?php echo substr($art['content'], 0, 160) . ' ... '; ?>
                           </div>
                       </div>
                   </article>
               <?php
               endforeach;

               ?>

            </div>
        </div>
    </div>

    <div class="block">
        <h3>Последнии комментарии</h3>
        <?php
        foreach($topComments as $comment):
        ?>
        <div class="block__content">
            <div class="articles articles__vertical">

                <article class="article">
                    <div class="article__image" style="background-image: url(/template/media/images/user.jpg);"></div>
                    <div class="article__info">
                        <?= $comment['author'];?>
                        <div class="article__info__meta">
                            <small>
                               <?php
                               foreach($allrecipes as $recipe):
                                  if($recipe['id'] == $comment['art_id']):
                               ?>
                                <a href="/recipes/one/<?= $recipe['id']; ?>">
                                        <?= $recipe['tittle'];?>
                                </a>
                                <?php
                                endif;
                                endforeach;
                               ?>
                            </small>
                        </div>
                        <div class="article__info__preview">
                            <?= $comment['comment'];?>
                        </div>
                    </div>
                </article>


            </div>
        </div>
        <?php
            endforeach;
        ?>
    </div>
   <?php if (preg_match('~^/recipes/one/[0-9]+$~', $_SERVER['REQUEST_URI'])): ?>
</section>
<?php endif;
?>

</div>
</div>
</div>

<footer id="footer">
    <div class="container">
        <div class="footer__logo">
            <h1><?php echo $titleBlog['tittle']; ?></h1>
        </div>
        <nav class="footer__menu">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="#">Обо мне</a></li>
            </ul>
        </nav>
    </div>
</footer>
</div>
</body>
</html>