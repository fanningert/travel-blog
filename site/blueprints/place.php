<?php if(!defined('KIRBY')) exit ?>

title: Place
pages: true
files: true
fields:
  title:
    label: Title
    type: text
  author:
    label: Author
    type: user
    required: true
    width: 1/4
  date:
    label: Date from
    type: date
    required: true
    format: YYYY-MM-DD
    width: 1/4
  dateto:
    label: Date to
    type: date
    required: true
    format: YYYY-MM-DD
    width: 1/4
  coverimage:
    label: Cover image
    type: select
    options: query
    query:
      fetch: images
      value: '{{filename}}'
      text: '{{filename}}'
  location:
    label: Location
    type: place
    required: true
    help: >
      Move the pin wherever you'd like, or search for a location!
  text:
    label: Text
    type:  textarea