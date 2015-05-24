<?php if(!defined('KIRBY')) exit ?>

title: Place
pages: false
files: true
fields:
  title:
    label: Title
    type: text
    width: 3/4
  author:
    label: Author
    type:  user
    required: true
    width: 1/4
  date:
    label: Start date
    type:  date
    required: true
    format: YYYY-MM-DD
    width: 1/4
  time:
    label: Start time
    type:  time
    required: true
    format: hh:ii
    interval: 30
    width: 1/4
  datestop:
    label: End date
    type:  date
    format: YYYY-MM-DD
    width: 1/4
  timestop:
    label: End time
    type:  time
    format: hh:ii
    interval: 30
    width: 1/4
  coverimage:
    label: Cover image
    type:  select
    options: query
    query:
      fetch: images
      value: '{{filename}}'
      text: '{{filename}}'
    width: 1/4
  type:
    label: Type
    type: select
    options:
      none: none
    width: 1/4
  tags:
    label: Tags
    type: tags
    lowercase: true
    separator: |
    width: 1/2
  url:
    label: Website
    type: url
  location:
    label: Location
    type: place
    required: true
    help: >
      Move the pin wherever you'd like, or search for a location!
  text:
    label: Text
    type:  textarea