<?php snippet('header') ?>

<article itemscope="" itemtype="http://schema.org/BlogPosting">

  <header class="article-header">
    <span class="article-header-title">
      <?php if( !$article->dateto()->empty() ){ ?>
      <h6 class="article-date"><i class="fa fa-calendar-o"></i> <time><?php echo $article->date('Y/m/d'); ?></time> to <time><?php echo $article->date('Y/m/d', 'dateto'); ?></time></h6>
      <?php }else{ ?>
      <h6 class="article-date"><i class="fa fa-calendar-o"></i> <time><?php echo $article->date('Y/m/d'); ?></time></h6>
      <?php } ?>
      <h1 class="article-header-title-text" title="<?php echo $article->title()->html() ?>" itemprop="name"><?php echo $article->title()->html() ?></h1>
    </span>
  </header><!-- article-header -->

  <section class="article-content" itemprop="articleBody">
    <div class="googlemaps googlemaps-square right" data-googlemaps="true" data-lat="<?php echo $article->locationlat(); ?>" data-lng="<?php echo $article->locationlng(); ?>" data-zoom="<?php echo $article->locationzoom(); ?>"></div>
    <?php echo $article->text()->kirbytext() ?>
  </section><!-- article content -->

  <footer class="article-footer">
    
  </footer><!-- article-footer -->

</article>


<?php snippet('footer') ?>