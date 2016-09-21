<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  year:
    label: Year
    type:  text
  info:
    label: Project Meta
    type:  text
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags
