<?php
$pdo = new PDO("mysql:host=localhost;dbname=oop","root","");
function dd($name){var_dump($name);die;}


class QueryBuilder{

	public $pdo;
	public function __construct($pdo){
		$this->pdo = $pdo;
	}

	public function SelectALL($table){

		$sql = "SELECT*FROM {$table}";
		$statement = $this->pdo->prepare($sql);
		$statement->execute();
		return $statement->FetchALL(PDO::FETCH_ASSOC);

	}

	public function SelectOne($table, $id){
		$sql = "SELECT*FROM {$table} WHERE id=:id";
		$statement = $this->pdo->prepare($sql);
		$statement->execute(['id' => $id]);
		return $statement->FetchALL(PDO::FETCH_ASSOC);
	}

	public function create($table, $colums, $data){
		$sql = "INSERT INTO {$table} ({$colums}) VALUES (:data)";
		$statement = $this->pdo->prepare($sql);
		$statement->execute(['data'=>$data]);

	}


	public function update($table, $colums, $data, $id){
		$sql = "UPDATE {$table} SET {$colums}=:data WHERE id=:id";
		$statement = $this->pdo->prepare($sql);
		$statement->execute(['data' => $data,
								'id' =>$id]);
		
	}

	public function delete($table,$id){
		$sql = "DELETE FROM {$table} WHERE id=:id";
		$statement = $this->pdo->prepare($sql);
		$statement->execute(['id'=>$id]);

	}



}



//$db = new QueryBuilder($pdo);

//$result = $db->SelectALL('posts');

//$getOne = $db->SelectOne('posts',4);

//$db->create('posts','title','dsfdsfdsf')
//$db->delete('posts',8);



































?>