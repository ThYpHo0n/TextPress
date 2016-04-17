<div class="wrapper" style="margin-top: 30px;">
    <?php
    if( count($articles) < 1 ){
      echo "<h3>No articles found!</h3>";
    }
    else{
      foreach($articles as $article){
    ?>

    <div class="post-masonry col-md-4 col-sm-6 isotope-item">
      <div class="blog-thumb">
          <img src="<?php echo $global['assets.prefix'];?>/images/tags/<?= array_values($article->getTags())[0]->name ?>.jpg" alt="">
          <div class="overlay-b">
              <div class="overlay-inner">
                  <a href="<?php echo $article->getUrl(); ?>" class="fa fa-link"></a>
              </div>
          </div>
      </div>
      <div class="blog-body">
          <div class="box-content">
              <h3 class="post-title"><a href="<?php echo $article->getUrl(); ?>"><?php echo $article->getTitle(); ?></a></h3>
              <span class="blog-meta"><?php echo date($global['date.format'],strtotime($article->getDate())); ?></span>
              <p><?php echo $article->getSummary(150); ?>...</p>
          </div>
      </div>
    </div>
    <?php
      }
    }
    ?>
    </div>
</div>
