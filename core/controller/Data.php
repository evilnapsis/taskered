<?php
class Data {

	public static function exec($sql){
		Executor::doit($sql);
	}


	public static function getOne($sql){
		$query = Executor::doit($sql);
		return Model::one($query[0],new Data());
	}


	public static function getMany($sql){
		$query = Executor::doit($sql);
		return Model::many($query[0],new Data());
	}

}

?>