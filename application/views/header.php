<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pratek CI3</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="maincss.css?<?php echo time();?>"/>
  </head>
  
<body>
  <ul class="nav nav-tabs d-flex justify-content-md-center">
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url(); ?>">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="<?= base_url(); ?>bilangan">Program Bilangan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url(); ?>bilangan/output">Output</a>
  </li>
  <li class="nav-item">
    <a class="nav-link Active" href="<?= base_url(); ?>about" >About</a>
  </li>
</ul>