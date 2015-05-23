<?php 

$kirby = kirby();

// Workaround for panel
$kirby->urls->index = url::scheme().'://'.url::host().((!empty(url::port()))? ':'.url::port() : '' );

// Thumbs directory
$kirby->roots->thumbs = $kirby->roots()->index() . DS . 'thumbs';
$kirby->urls->thumbs = $kirby->urls()->index() . '/thumbs';

// Cache directory
$kirby->roots->cache = $kirby->roots()->index() . DS . 'cache';
$kirby->urls->cache = $kirby->urls()->index() . '/cache';

// Accounts
$kirby->roots->accounts = $kirby->roots()->index() . DS . 'accounts';
//$kirby->urls->a = $kirby->urls()->index() . '/cache';

// Avatars
$kirby->roots->avatars = $kirby->roots()->index() . DS . 'avatars';
$kirby->urls->avatars = $kirby->urls()->index() . '/avatars';