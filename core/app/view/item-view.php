<?php
$item = Data::getOne("select * from item where id=".$_GET["id"]);
?>
<?php if($item!=null):?>
<?php if($item->kind==1):?>
<div class="container">
<div class="col-md-9">
<h1><?php echo $item->title; ?> <small>Proyecto</small></h1>
<ol class="breadcrumb">
  <li><a href="./">Inicio</a></li>
</ol>
<p><?php echo $item->description; ?></p>
<ul>
	<li>Inicio: <?php echo $item->start_at; ?></li>
	<li>Fin: <?php echo $item->finish_at; ?></li>
	<li>Creacion: <?php echo $item->created_at; ?></li>
</ul>
</div>
<div class="col-md-3">
<table class="table table-bordered">
	<thead>
		<th>Pendiente</th>
		<th>Desarrollando</th>
		<th>Finalizado</th>
	</thead>
	<thead>
		<th><h2><center>0</center></h2></th>
		<th><h2><center>0</center></h2></th>
		<th><h2><center>0</center></h2></th>
	</thead>
</table>
</div>
</div>
<?php elseif($item->kind==2):?>
<?php
$pr = Data::getOne("select * from item where id=".$item->item_id);
?>

<div class="container">
<div class="col-md-12">
<h1><?php echo $item->title; ?> <small>Tarea</small></h1>
<ol class="breadcrumb">
  <li><a href="./">Inicio</a></li>
  <li><a href="./?view=item&id=<?php echo $pr->id; ?>"><?php echo $pr->title; ?></a></li>
</ol>
<p><?php echo $item->description; ?></p>
<ul>
	<li>Inicio: <?php echo $item->start_at; ?></li>
	<li>Fin: <?php echo $item->finish_at; ?></li>
	<li>Creacion: <?php echo $item->created_at; ?></li>
</ul>
</div>
</div>

<?php endif; ?>
<?php endif; ?>

