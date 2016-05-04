<?php
namespace Home\Controller;
use Think\Controller;
class BackController extends Controller {
    
	
	public function index() {
    	$this->display('login');
    }
	
	public function check() {
    	echo 'this is check<br>';
    	$username = $_POST['username'];
    	$password = $_POST['password'];
    	$where['username'] = $username;
    	$check = M('user')->where($where)->getField('password');
    	if($check == $password){
    		setcookie('username', $username);
    		setcookie('password', $password);
    	
    		$elements = M('comment')->select();
    		$this->assign('elements', $elements);
			$this->display('comment');
    	}
    }
    
	public function addElement() {
		$a = $_POST['name'];
		$b = $_POST['comment'];
		
		if ($a != '') {
			$data = array(
				'username' => $a,
				'comment'  => $b	
			);
			M('comment')->add($data);
		}
		$elements = M('comment')->select();
		$this->assign('elements', $elements);
		$this->display('comment');
	}
			
}