
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
                       <a href="/recipes/one/<?= $art['id'];?>"><?= $art['tittle']; ?></a>
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
    <div class="block__content">
        <div class="articles articles__vertical">

            <article class="article">
                <div class="article__image" style="background-image: url(/media/images/post-image.jpg);"></div>
                <div class="article__info">
                    <a href="#">Jonny Flame</a>
                    <div class="article__info__meta">
                        <small><a href="#">Название статьи #1</a></small>
                    </div>
                    <div class="article__info__preview">Бла бла бла бла бла бла бла, и думаю еще что бла бла бла бла бла
                        бла бла ...
                    </div>
                </div>
            </article>




        </div>
    </div>
</div>
</section>
</div>
</div>
</div>