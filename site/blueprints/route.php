<?php if(!defined('KIRBY')) exit ?>

title: Route
pages:
  template: place
  num: date
  sort: date asc time asc
files: true
fields:
  title:
    label: Title
    type:  text
    width: 3/4
  author:
    label: Author
    type:  user
    required: true
    width: 1/4
  coverimage:
    label: Cover image
    type:  select
    options: query
    query:
      fetch: images
      value: '{{filename}}'
      text: '{{filename}}'
    width: 1/2
  kml:
    label: KML
    type: select
    options: query
    query:
      fetch: files
      value: '{{filename}}'
      text: '{{filename}}'
    width: 1/2
  text:
    label: Text
    type:  textarea