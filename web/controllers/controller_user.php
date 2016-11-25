<?
class Controller_User extends Controller
{

	function __construct($db)
	{
		parent::__construct($db);
		$this->model = new Model_User($db);
	}

	function action_index()
	{	
		$this->view->generate('profile_view.php', 'template_view.php');		
	}

	function action_signup()
	{	
		if ($_POST["signup"]) {
			$this->model->regUser();
			$_SESSION["auth"] = true;
			header("location: /");
		}
		$this->view->generate('signup_view.php', 'template_view.php');
	}

	function action_signin()
	{		
		if ($_POST["signin"]) {
			$this->model->logUser();
			$_SESSION["auth"] = true;
			// $this->view->generate('profile_view.php', 'template_view.php');
			header("location: /user");
						// header("location: /profile".$config['prefix']);
		}
		$this->view->generate('signin_view.php', 'template_view.php');
	}
}

?>