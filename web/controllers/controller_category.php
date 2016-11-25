<?php

class Controller_category extends Controller
{
	function __construct($db)
	{
		parent::__construct($db);
		$this->model = new Model_Category($db);
	}

	function action_index(){	
	}


	function action_goods()
	{	
		$goods = $this->model->getGoods();	
		$this->view->generate('goods_view.php', 'template_view.php', $goods);

	}
	function action_good($id_good)
	{	
		$good = $this->model->getGood($id_good);
		$this->view->generate('good_view.php','template_view.php', $good);
	}

}
?>