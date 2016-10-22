<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>.: Taskered :.</title>
    <link href="res/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="res/jquery-ui/jquery-ui.min.css" rel="stylesheet">

    <link rel="stylesheet" href="res/font-awesome/css/font-awesome.min.css">
    <script src="res/js/jquery.min.js"></script>
    <script src="res/jquery-ui/jquery-ui.min.js"></script>

  </head>

  <body>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./"><b><i class="fa fa-flag-checkered"></i> TASKERED</b></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./"><i class="fa fa-th-list"></i> INICIO</a></li>
        <li><a href="./?view=projects"><i class="fa fa-flask"></i> PROYECTOS</a></li>

      </ul>
    </div>
  </div>
</nav>


<?php 
  View::load("index");
?>
<script src="res/bootstrap/js/bootstrap.min.js"></script>


  </body>
</html>
