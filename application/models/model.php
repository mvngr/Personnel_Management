<?php
	require "includes/db.php";

	#test
	echo 'Test:<br><br>';
	$arr = array('desc' => 'test_text', 'cost' => 'tesc_cost', 'to_group' => 'test_group');
	$ord = new Orders($arr);
	$user = new User(4);
	$tmp = $user->getJobToString();

	echo $tmp;


	Class Error {
		public function __construct($err) {
			#temp code
			echo '<br><br>Error: '.$err;
			exit();
		}
	}
	Class Main {
		public function def() {
			#вызов отрисовки с добавлением зоголовков и т.п.
		}
	}
	Class Orders {

		protected $desc;
		private $cost;
		private $to_group;

		#подается массив desc cost to_group
		public function __construct(array $newOrder = array()) {
			$this->desc = $newOrder['desc'];
			$this->cost = $newOrder['cost'];
			$this->to_group = (int)$newOrder['to_group'];
		}

		public function printData() {
			echo '<br><br> ==> '.$this->to_group.' '.$this->desc.' '.$this->cost.' <==<br><br>';
		}

		public function addOrder($_id) {
			$res = mysql_query("INSERT INTO `internal_orders` (`id`, `id_from_user`, `id_to_group`, `description`, `cost`, `id_to_user`, `complete`) VALUES (NULL, $_id, '$this->to_group', '$this->desc', '$this->cost', '0', '0');");
			if($res == NULL) {
				$err = new Error('addOrder');
			}
			return $res;
		}

		
		
	}
	Class User {

		#todo constructor
		public $id;
		public $name;
		public $surname;
		public $id_post;
		public $id_avatar;
		public $birthday;
		public $id_group;

		private $data;

		public function __construct($id) {
			$res = mysql_fetch_array(mysql_query('SELECT * FROM `users` WHERE `id` = '.$id));
			if($res == NULL)
				$err = new Error('__construct User');

			$this->id = $res['id'];
			$this->name = $res['name'];
			$this->surname = $res['surname'];
			$this->id_post = $res['id_post'];
			$this->id_avatar = $res['id_avatar'];
			$this->birthday = $res['birthday'];
			$this->id_group = $res['id_group'];

			$data = $res;
		}

		public function getJob() {
			$res = mysql_query('SELECT * FROM `internal_orders` WHERE `id_to_group` = '.$this->id_group.' AND complete = 0 AND id_to_user = 0');	

			if($res == NULL)
				return NULL;

			$res_fetch = mysql_fetch_assoc($res);
			return $res_fetch;
		}

		public function getJobToString() {

			$fetch_job = $this->getJob();
			$from_user = new User($fetch_job['id_from_user']);
			$str = $from_user->name.' | '.$fetch_job['description'].' | Цена: '.$fetch_job['cost'];

			return $str;
		}

	}
	Class SignIn {

	}
?>