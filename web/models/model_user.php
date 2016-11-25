<?
class Model_User extends Model
{
	protected $login;
	protected $passwd;
	protected $email;
	protected $query;
	protected $valid;

	public function __construct($db){
		parent::__construct($db);
	}

	public function regUser(){
		// Validation
		$this->login = clearRequest($_POST['login']);
		$this->passwd = clearRequest($_POST['passwd']);
		$this->email = clearRequest($_POST['email']);

		$this->valid = Validation::checkAllFields(["login"=>$this->login, 'passwd'=>$this->passwd, "email"=>$this->email]);

		if (!$this->valid) {
			die();
		}

		$this->login = mysqli_real_escape_string($this->db->dbc, $this->login);
		$this->passwd = mysqli_real_escape_string($this->db->dbc, $this->passwd);
		$this->email = mysqli_real_escape_string($this->db->dbc, $this->email);
		
		$this->query = "INSERT INTO `Users`(`login`, `passwd`, `email`) VALUES ('$this->login', '$this->passwd', '$this->email')";

		$this->db->makeQuery($this->query);
	}

	public function logUser(){
		// Validation
		$this->login = clearRequest($_POST['login']);
		$this->passwd = clearRequest($_POST['passwd']);

		$this->valid = Validation::checkAllFields(["login"=>$this->login, 'passwd'=>$this->passwd]);

		if (!$this->valid) {
			die();
		}

		$this->login = mysqli_real_escape_string($this->db->dbc, $this->login);
		$this->passwd = mysqli_real_escape_string($this->db->dbc, $this->passwd);



		$this->query = "SELECT id, login FROM Users WHERE login= '$this->login' AND passwd ='$this->passwd'";

		$this->db->makeQuery($this->query);
	}


}
?>