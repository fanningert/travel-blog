<?php if(!defined('KIRBY')) exit ?>

title: Lodging
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
    label: Arrive date
    type:  date
    required: true
    format: YYYY-MM-DD
    width: 1/4
  time:
    label: Arrive time
    type:  time
    required: true
    format: hh:ii
    interval: 30
    width: 1/4
  datedepart:
    label: Depart date
    type:  date
    required: true
    format: YYYY-MM-DD
    width: 1/4
  timedepart:
    label: Depart time
    type:  time
    required: true
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
    required: true
    options:
      hotel: Hotel
      camping: Camping
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
  locationlat:
    label: Latitude
    type: text
    required: true
    width: 1/4
  locationlng:
    label: Longitude
    type: text
    required: true
    width: 1/4
  locationzoom:
    label: Zoom
    type: select
    required: true
    default: 7
    width: 1/4
    options:
      0: 0
      1: 1
      2: 2
      3: 3
      4: 4
      5: 5
      6: 6
      7: 7
      8: 8
      9: 9
      10: 10
      11: 11
      12: 12
      13: 13
      14: 14
      15: 15
      16: 16
      17: 17
      18: 18
      19: 19
  text:
    label: Text
    type:  textarea