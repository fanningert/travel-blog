<?php

return function($site, $pages, $page) {

  // fetch the basic set of pages
  $article = $page;

  return compact('article');

};

?>
