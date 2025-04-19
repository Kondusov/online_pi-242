<?php
class Model_Show_table extends Model
{
	public function get_data()
	{	$conn = new PDO("mysql:host=localhost;dbname=sklad", "root", "");
        $shoes = "SELECT * FROM shoes";
        $data = $conn->query($shoes);
        // var_dump($result);
        // die();
		return $data;
	}
}