<?php if(!defined('KIRBY')) exit ?>

title: Route
pages:
  template: place
  num: date
  sort: flip
files: true
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  user
    required: true
  text:
    label: Text
    type:  textarea