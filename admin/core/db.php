<?
	
	class Db 
	{
		public $dbc;
		protected $query;
		protected $result;

		function __construct()
		{
			$this->dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWD, DB_NAME);
			if (!$this->dbc) {
				die();
			}
		}

		public function makeQuery($query){
			$this->result = mysqli_query($this->dbc, $query);
			if (!$this->result) {
				// var_dump($query);
				die();
			}

			return (is_bool($this->result))?  $this->result : mysqli_fetch_assoc($this->result)["realRoute"];
		} 


		function __destruct(){
			mysqli_close($this->dbc);
		}
	}

?>