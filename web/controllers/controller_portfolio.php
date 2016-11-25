<?php

class Controller_Portfolio extends Controller
{

	function __construct()
	{
		$this->model = new Model_Portfolio($this->db);
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('portfolio_view.php', 'template_view.php', $data);
	}

	function action_add()
	{
		$id = trim(strip_tags(htmlspecialchars($_GET["id"])));
		$this->view->generate('portfolio_add_view.php', 'template_view.php', $id);
	}
}
