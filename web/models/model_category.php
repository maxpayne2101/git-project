<?
class Model_Category extends Model
{
	protected $goods;
	protected $good;
	public function __construct($db)
	{
		parent::__construct($db);
		//var_dump($db);
		}


	public function getGoods(){
		$this->query = "SELECT * FROM `goods`";
		$this->goods = $this->db->makeQuery($this->query);

		// $this->query = "SELECT  `id_good`, `name_img`, `alt`, `title` FROM `imgGood`";
		$this->goods['images'] = $this->db->makeQuery($this->query);
		//var_dump($this->goods) ;
		return $this->goods;
	}
		public function getGood($id_good){
		$this->query = "SELECT `id`, `name`, `url`, `meta_title`, `meta_description`, `meta_keywords`, `sticker`, `price`, `oldPrice`, `ending`, `raiting`, `description`, `mediaLinkVideo`, `mediaLinkDemo`, `mainImg` FROM `goods` WHERE `id`=$id_good";
		$this->good = $this->db->makeQuery($this->query);

		// $this->query = "SELECT  `id_good`, `name_img`, `alt`, `title` FROM `imgGood` WHERE `id_good`=$id_good";
		$this->good['image'] = $this->db->makeQuery($this->query);
		
		return $this->good;
	}
}
?>