<?php if(!defined('KIRBY')) exit ?>

title: Site
pages:
  template:
    - default
    - route
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  user
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea