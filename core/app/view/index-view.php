<div class="container">
<div class="row">
<div class="col-md-12">
<h1 style="margin:0;">TAREAS

<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
  Nueva tarea
</button>
</h1>
<br>

</div>
</div>

<?php

$list1 = Data::getMany("select * from item where kind = 2 and status=1");
$list2 = Data::getMany("select * from item where kind = 2 and status=2");
$list3 = Data::getMany("select * from item where kind = 2 and status=3");

?>


<div class="row">
<div class="col-md-4">
<div class="panel panel-default" >
<div class="panel-heading">Pendientes</div>

<ul class="list-group" data-id="1" style="height:480px;overflow-y: scroll;" id="list-1" >
<?php foreach($list1 as $l):
$pr = Data::getOne("select * from item where id=".$l->item_id);
?>
  <li class="list-group-item task" data-id="<?php echo $l->id; ?>">

 <span class="badge"><?php echo $pr->title;?></span>    <?php echo $l->title; ?>
 <?php if($l->file!=""):
 $path =  "storage/users/1/$l->file"; ?>
 	<?php if(file_exists($path)):?>
 		<?php if(is_array(getimagesize($path))):?>
 		<img src="<?php echo $path;?>" class="img-responsive">
 		<?php else:?>
 	<p class="well" style="padding:5px;"><a href='<?php echo $path; ?>' target="_blank"><i class='fa fa-file'></i> <?php echo $l->file; ?></a></p>
 <?php endif; ?> 	
 <?php endif; ?>
 <?php endif; ?>
 <p>
 	<div class="btn-group">
<!-- <a href="" class="btn btn-default btn-xs"><i class='fa fa-star-o'></i></a> -->
<a href="./?view=item&id=<?php echo $l->id; ?>" class="btn btn-default btn-xs"><i class='fa fa-eye'></i></a>
<a href="./?view=editi&id=<?php echo $l->id; ?>" class="btn btn-default btn-xs"><i class='fa fa-pencil'></i></a>
<a href="./?action=items&opt=totrash&id=<?php echo $l->id;?>&ref=" class="btn btn-default btn-xs"><i class='fa fa-archive'></i></a>
 	</div>
 </p>
 <?php if($l->finish_at!="0000-00-00"):?>
 	<?php if($l->finish_at<$l->created_at):?>
    <p class="text-danger">Vencio <?php echo date("d/M/Y",strtotime($l->finish_at));?>
      </p>
  <?php else:?>
    <p class="text-warning">Vence <?php echo date("d/M/Y",strtotime($l->finish_at));?>
      </p>
  <?php endif;?>
  <?php else:?>
    <p class="text-muted"><?php echo date("d/M/Y h:i:s",strtotime($l->created_at));?>
      </p>
  <?php endif;?>
  </li>
<?php endforeach; ?>
</ul>
</div>
</div>
<div class="col-md-4">
<div class="panel panel-warning" >
<div class="panel-heading">En desarrollo</div>

<ul class="list-group" data-id="2" style="height:480px;overflow-y: scroll;" id="list-2" >
<?php foreach($list2 as $l):
$pr = Data::getOne("select * from item where id=".$l->item_id);
?>
  <li class="list-group-item task" data-id="<?php echo $l->id; ?>">
 <span class="badge"><?php echo $pr->title;?></span>
     <?php echo $l->title; ?>
 <?php if($l->file!=""):
 $path =  "storage/users/1/$l->file"; ?>
 	<?php if(file_exists($path)):?>
 		<?php if(is_array(getimagesize($path))):?>
 		<img src="<?php echo $path;?>" class="img-responsive">
 		<?php else:?>
 	<p class="well" style="padding:5px;"><a href='<?php echo $path; ?>' target="_blank"><i class='fa fa-file'></i> <?php echo $l->file; ?></a></p>
 <?php endif; ?> 	
 <?php endif; ?>
 <?php endif; ?>
     <p>
 	<div class="btn-group">
<!-- <a href="" class="btn btn-default btn-xs"><i class='fa fa-star-o'></i></a> -->
<a href="./?view=item&id=<?php echo $l->id; ?>" class="btn btn-default btn-xs"><i class='fa fa-eye'></i></a>
<a href="./?view=editi&id=<?php echo $l->id; ?>" class="btn btn-default btn-xs"><i class='fa fa-pencil'></i></a>
<a href="./?action=items&opt=totrash&id=<?php echo $l->id;?>&ref=" class="btn btn-default btn-xs"><i class='fa fa-archive'></i></a>
 	</div>
 </p>
 <?php if($l->finish_at!="0000-00-00"):?>
 	<?php if($l->finish_at<$l->created_at):?>
    <p class="text-danger">Vencio <?php echo date("d/M/Y",strtotime($l->finish_at));?>
      </p>
  <?php else:?>
    <p class="text-warning">Vence <?php echo date("d/M/Y",strtotime($l->finish_at));?>
      </p>
  <?php endif;?>
  <?php else:?>
    <p class="text-muted"><?php echo date("d/M/Y h:i:s",strtotime($l->created_at));?>
      </p>
  <?php endif;?>
  </li>
<?php endforeach; ?>
</ul>
</div>
</div>

<div class="col-md-4">
<div class="panel panel-info" >
<div class="panel-heading">Finalizado</div>

<ul class="list-group" id="list-3" data-id="3" style="height:480px;overflow-y: scroll;" >
<?php foreach($list3 as $l):
$pr = Data::getOne("select * from item where id=".$l->item_id);?>
  <li class="list-group-item task" data-id="<?php echo $l->id; ?>">
 <span class="badge"><?php echo $pr->title;?></span>
    <?php echo $l->title; ?>
 <?php if($l->file!=""):
 $path =  "storage/users/1/$l->file"; ?>
 	<?php if(file_exists($path)):?>
 		<?php if(is_array(getimagesize($path))):?>
 		<img src="<?php echo $path;?>" class="img-responsive">
 		<?php else:?>
 	<p class="well" style="padding:5px;"><a href='<?php echo $path; ?>' target="_blank"><i class='fa fa-file'></i> <?php echo $l->file; ?></a></p>
 <?php endif; ?> 	
 <?php endif; ?>
 <?php endif; ?>
    <p>
 	<div class="btn-group">
<!-- <a href="" class="btn btn-default btn-xs"><i class='fa fa-star-o'></i></a> -->
<a href="./?view=item&id=<?php echo $l->id; ?>" class="btn btn-default btn-xs"><i class='fa fa-eye'></i></a>
<a href="./?view=editi&id=<?php echo $l->id; ?>" class="btn btn-default btn-xs"><i class='fa fa-pencil'></i></a>
<a href="./?action=items&opt=totrash&id=<?php echo $l->id;?>&ref=" class="btn btn-default btn-xs"><i class='fa fa-archive'></i></a>
 	</div>
 </p>
 <?php if($l->finish_at!="0000-00-00"):?>
 	<?php if($l->finish_at<$l->created_at):?>
    <p class="text-danger">Vencio <?php echo date("d/M/Y",strtotime($l->finish_at));?>
      </p>
  <?php else:?>
    <p class="text-warning">Vence <?php echo date("d/M/Y",strtotime($l->finish_at));?>
      </p>
  <?php endif;?>
  <?php else:?>
    <p class="text-muted"><?php echo date("d/M/Y h:i:s",strtotime($l->created_at));?>
      </p>
  <?php endif;?>
  </li>
<?php endforeach; ?></ul>
</div>
</div>
</div>



</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva tarea</h4>
      </div>
      <div class="modal-body">

<form method="post" action="./?action=items&opt=add" enctype="multipart/form-data">
<input type="hidden" name="kind" value="2">
<input type="hidden" name="ref" value="">
  <div class="form-group">
    <label for="exampleInputEmail1">Proyecto</label>
    <select name="item_id" required class="form-control">
    	<option value="">-- SELECCIONE --</option>
    <?php foreach(Data::getMany("select * from item where kind=1") as $p):?>
    	<option value="<?php echo $p->id; ?>"><?php echo "(P00".$p->id.") ".$p->title; ?></option>
    	<?php endforeach; ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" name="title" class="form-control" placeholder="Titulo">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Descripcion</label>
    <textarea class="form-control" name="description" placeholder="Descripcion"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Archivo</label>
    <input type="file" name="file" class="form-control">
  </div>

  <div class="form-group">
  <div class="row">
  <div class="col-md-6">
    <label for="exampleInputEmail1">Inicio</label>
    <input type="date" name="start_at" class="form-control" placeholder="Inicio">
  </div>
  <div class="col-md-6">
    <label for="exampleInputEmail1">Fin</label>
    <input type="date" name="finish_at" class="form-control" placeholder="Fin">
  </div>
  </div>
  </div>



  <button type="submit" class="btn btn-default"><i class="fa fa-check"></i> Agregar Tarea</button>
</form>
      </div>

    </div>
  </div>
</div>
<script>
$(document).ready(function(){
$(".list-group").sortable({
	connectWith: ".list-group",
	update: function(event, ui){
		var id = ui.item.attr("data-id");
		//console.log(id)
		if(ui.sender){
			console.log($(this).attr("data-id"));
     $.post("./?action=items&opt=setstatus","id="+id+"&status="+$(this).attr("data-id"),function(data){
      console.log(data);
     });
		}
	}
}).disableSelection();

});
</script>