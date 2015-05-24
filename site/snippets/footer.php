
  </main> <!-- page-content -->

  <footer id="page-footer">
  	<div>
	    <div class="footer-copyright">
	      <div class="container center">
	      <?php echo $site->copyright()->kirbytext() ?>
	      </div>
	    </div>
    </div>
  </footer>


  <!--  Scripts-->
  <?php echo js("assets/js/script.min.js") ?>
  <script type="text/javascript">$script.path('<?php echo $kirby->urls->index; ?>/assets/js/');</script>
  <?php echo js("assets/js/init.js") ?>
  </body>
</html>
<?php echo css('assets/css/font-awesome.min.css') ?>