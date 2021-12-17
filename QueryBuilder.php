<?php
$pdo = new PDO("mysql:host=localhost;dbname=oop","root","");


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


//$QB = new QueryBuilder($pdo); // создаем новый объект класса. $pdo - подключение к базе данных, $QB - экземпляр класса

//$QB->SelectALL($table); // выбирает все значения из таблицы
//$QB->SelectOne($table, $id); // выбирает одну строку из таблицы
//$QB->create($table, $colums, $data); // создает новую запись в таблице
//$QB->update($table, $colums, $data, $id); // редактирует указанную запись в таблице
//$QB->delete($table,$id); // удаляет указанную запись в таблице
//	string $table - имя таблицы, string $colums - имя столбца,string||int $data - информация которая вносится в базу данных, int $id - номер записи
//
//
//
//
//
//



































?>