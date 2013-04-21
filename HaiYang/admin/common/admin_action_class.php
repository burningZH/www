<?php
class Action extends MySQL{
	
	//用户状态检测
	public function userstate_check(){
		if (isset($_SESSION['logined']) && $_SESSION['logined']){
			return TRUE;
		}	
		else {
			$this->admin_msg('index.php','请先登录！');
			return FALSE;
		}
	}
	
	//用户登录
	public function user_login($username,$password) {
		$username = trim($username);
		$query = $this->query("select * from db_user where name = '$username'");
		$a = is_array($row = mysql_fetch_array($query));
		$flag = $a? md5($password) == $row[password] : FALSE;
		if ($flag){
			$_SESSION['logined'] = TRUE;
			$_SESSION['username'] = $username;
			$this->admin_msg('main.php','登录成功！');
		}
		else{
			$this->admin_msg('index.php','用户名或密码错误！');
			session_destroy();
		}
	}
	
	//用户退出登录
	public function user_out(){
		session_destroy();
		$this->admin_msg('index.php','退出成功！');
	}
	
	//后台通用提示信息
	
	public function admin_msg($url,$show='操作成功！'){
		$msg = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
               <html><head>
                 <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
				<meta http-equiv="refresh" content="2; URL=' . $url . '" />
				<title>管理区域</title></head>
				<style type="text/css"> 
						body { font: normal 20px auto 宋体, Arial, Helvetica, sans-serif; color: #4f6b72; 
						background: #E6EAE9; } 
                        a { color: #c75f3e; } 
						p{font-size:16px}
						th { font: bold 20px 宋体, Arial, Helvetica, sans-serif; color: #4f6b72; border-right: 1px solid #C1DAD7; 
                             border-bottom: 1px solid #C1DAD7; border-top: 1px solid #C1DAD7; letter-spacing: 2px; 
						text-transform: uppercase; text-align: left; padding: 6px 6px 6px 12px; background: #CCCCCC no-repeat; } 
                        td { border-right: 1px solid #C1DAD7; border-bottom: 1px solid #C1DAD7; background: #FFFFFF; 
                        font-size:15px; padding: 6px 6px 6px 12px; color: #4f6b72; } </style> 
				 <body>
				<div>
				  <table width="30%" border="1" align="center"  cellpadding="3" cellspacing="0" style="margin-top:100px;">
				    <tr>
				      <th align="center" >信息提示</th>
				    </tr>
				    <tr>
				      <td><p><strong>' . $show . '</strong><br /></p>
				      2秒后返回指定页面！<br />
				      如果浏览器无法跳转，<a href="' . $url . '">请点击此处</a>。</td>
				    </tr>
				  </table>
				</div>
				</body>
				</html>';
		echo $msg;
		exit();
	}
}