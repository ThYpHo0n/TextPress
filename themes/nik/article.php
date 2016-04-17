<section class="top">
    <div class="wrapper content_header clearfix <?php
    foreach ($article->getTags() as $slug => $tag) {
        echo $tag->name.' ';
    }
    ?>">
        <div class="work_nav">

            <ul class="btn clearfix">
                <li><a href="/" class="grid" data-title="Blog"></a></li>
            </ul>

        </div><!-- end work_nav -->
        <h1 class="title"><?php echo $article->getTitle(); ?></h1>
    </div>
</section><!-- end top -->

<section class="wrapper">
    <div class="content">
        <?php echo $article->getContent(); ?>
        <div class="tags">
            Tags :
            <?php
            foreach ($article->getTags() as $slug => $tag) {
                echo '<span class="tag"><a href="/tag/' , $slug ,'">' , $tag->name , "</a></span> ";
            }
            ?>
        </div>
        <div class="date">
            Date: <span class="date"><?php  echo $article->getDate($global['date.format']);  ?></span>
        </div>
    </div><!-- end content -->
</section>
