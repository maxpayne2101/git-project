<?php

class Controller_Goods extends Controller
{

	function __construct($db)
	{
		$this->model = new Model_Goods($db);
		$this->view = new View();
	}

	function action_index()
	{	
		$goods = $this->model->get_goods();	
		$this->view->generate('goods_view.php', 'template_view.php', '$goods');		
	}

	function action_add_good()
	{
		$this->view->generate('goods_add_view.php', 'template_view.php');		
	}

	function action_edit_good()
	{
		$this->view->generate('goods_edit_view.php', 'template_view.php');
	}
	
	function action_delete_good()
	{
		$this->view->generate('goods_delete_view.php', 'template_view.php');
	}
	

}
?>