<?php
class Controller_Show_table extends Controller
{

	function __construct()
	{
		$this->model = new Model_Show_table();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('show_table_view.php', 'template_view.php', $data);
	}
}