<?php
$item = Data::getOne("select * from item where id=".$_GET["id"]);
?>
<?php if($item!=null):?>
<div class="container">
<div class="col-md-9">
<?php if($item->kind==1):?>
<h1><?php echo $item->title; ?> <small>Proyecto</small></h1>
<?php elseif($item->kind==2):?>
<h1><?php echo $item->title; ?> <small>Tarea</small></h1>
<?php endif; ?>
<form method="post" action="./?action=items&opt=update">
<input type="hidden" name="id" value="<?php echo $item->id;?>">
<?php if($item->kind==1):?>
<input type="hidden" name="ref" value="projects">
<input type="hidden" name="item_id" value="">
<?php elseif($item->kind==2):?>

<input type="hidden" name="ref" value="">
  <div class="form-group">
    <label for="exampleInputEmail1">Proyecto</label>
    <select name="item_id" required class="form-control">
    	<option value="">-- SELECCIONE --</option>
    <?php foreach(Data::getMany("select * from item where kind=1") as $p):?>
    	<option value="<?php echo $p->id; ?>" <?php if($p->id==$item->item_id){ echo "selected"; }?>><?php echo "(P00".$p->id.") ".$p->title; ?></option>
    	<?php endforeach; ?>
    </select>
  </div>
<?php endif; ?>

  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" name="title" value="<?php echo $item->title; ?>" class="form-control" placeholder="Titulo">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Descripcion</label>
    <textarea class="form-control" name="description" placeholder="Descripcion"><?php echo $item->description; ?></textarea>
  </div>

  <div class="form-group">
  <div class="row">
  <div class="col-md-6">
    <label for="exampleInputEmail1">Inicio</label>
    <input type="date" name="start_at" class="form-control" value="<?php echo $item->start_at; ?>" placeholder="Inicio">
  </div>
  <div class="col-md-6">
    <label for="exampleInputEmail1">Fin</label>
    <input type="date" name="finish_at" class="form-control" value="<?php echo $item->finish_at; ?>" placeholder="Fin">
  </div>
  </div>
  </div>



  <button type="submit" class="btn btn-default"><i class="fa fa-check"></i> Actualizar</button>
</form>
</div>
</div>

<?php endif; ?>

