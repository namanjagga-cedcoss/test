<?php 
namespace MyApp\Models;
use Phalcon\Mvc\Model;


Class Student extends Resourcemodel {

	public $table = 'student';
	public $primaryKey = 'roll_no';
	public $connection = false;

	public function onConstruct($connection){
		$this->connection = $connection;
        $this->saveStudent($connection);
	}
    public function __set($name, $value)
    {
        $name = $value;

        return $name;
    }

}