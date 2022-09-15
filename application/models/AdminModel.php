<?php

class AdminModel extends CI_Model
{

	// Best option to load Database in Autoload file

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->library('database');
	// }

	public function isvalidate($username, $password)
	{
		$query = $this->db->select('*')->where(['username' => $username, 'password' => $password, 'status' => 1])
						  ->get('user')
						  ->result_array();
		if (count($query) == 1) {
			$logindata = ['id' => $query[0]['user_id'], 'firstname' =>  $query[0]['firstname'], 'lastname' => $query[0]['lastname'], 'email' => $query[0]['email'], 'status' => $query[0]['status'], 'lastlogin' => $query[0]['created_at'] ];
			return $logindata;
		}else{
			return 0;
		}
	}

	public function register($data)
	{
		return $this->db->insert('user',$data);
	}

	public function articlelist($limit,$offset)
	{
		$userid = $this->session->userdata('id');
		return $this->db->where(['status' => 1, 'user_id' => $userid])->limit($limit,$offset)->order_by('id','DESC')->get('article')->result_array();
	}

	public function article_num_rows()
	{
		$userid = $this->session->userdata('id');
		$query = $this->db->select()->from('article')->where(['status' => 1, 'user_id' => $userid])->get();
		return $query->num_rows();
	}

	public function addarticle($data)
	{
		return $this->db->insert('article',$data);
	}

	public function delarticle($id)
	{
		return $this->db->delete('article', ['id'=>$id]);
	}

	public function editarticle($id)
	{
		return $this->db->select(['id','article_title','article_body','image_path'])->where('id',$id)->get('article')->row_array();
	}

	public function updatearticle($data,$id)
	{
		return $this->db->where('id',$id)->update('article',$data);
	}

	public function articlelist_user_dash()
	{
		//return $this->db->get('article')->result_array();

		$this->db->select('article.*,user.firstname, user.lastname');    
		$this->db->from('article');
		$this->db->join('user', 'article.user_id = user.user_id');
		return $this->db->order_by('article.id','DESC')->get()->result_array();
	}

	public function fetch_country()
	{
		return $this->db->order_by('country_name','ASC')->get('country')->result_array();
	}

	public function fetch_state($id)
	{
		return $this->db->where('country_id',$id)->order_by('state_name','ASC')->get('state')->result_array();
	}

	public function fetch_city($id)
	{
		return $this->db->where('state_id',$id)->order_by('city_name','ASC')->get('city')->result_array();
	}

	public function product()
	{
		return $this->db->where(['status' => 1])->order_by('id','DESC')->get('products')->result_array();
	}

	public function orderData($orderData)
	{
		return $this->db->insert('orders',$orderData);
	}

	public function myorder()
	{
		$this->db->select('orders.*, products.name');
		$this->db->from('orders');
		$this->db->join('products','orders.product_id = products.id');
		return $this->db->where('user_id',1)->order_by('orders.id','DESC')->get()->result_array();
	}
}

?>
