<?php
class Action extends MySQL{
	
	//�û�״̬���
	public function userstate_check(){
		if (isset($_SESSION['logined']) && $_SESSION['logined']){
			return TRUE;
		}	
		else {
			$this->admin_msg('index.php','���ȵ�¼��');
			return FALSE;
		}
	}
	
	//�û���¼
	public function user_login($username,$password) {
		$username = trim($username);
		$query = $this->query("select * from db_user where name = '$username'");
		$a = is_array($row = mysql_fetch_array($query));
		$flag = $a? md5($password) == $row[password] : FALSE;
		if ($flag){
			$_SESSION['logined'] = TRUE;
			$_SESSION['username'] = $username;
			$this->admin_msg('main.php','��¼�ɹ���');
		}
		else{
			$this->admin_msg('index.php','�û������������');
			session_destroy();
		}
	}
	
	//�û��˳���¼
	public function user_out(){
		session_destroy();
		$this->admin_msg('index.php','�˳��ɹ���');
	}
	
	//��̨ͨ����ʾ��Ϣ
	
	public function admin_msg($url,$show='�����ɹ���'){
		$msg = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
               <html><head>
                 <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
				<meta http-equiv="refresh" content="2; URL=' . $url . '" />
				<title>��������</title></head>
				<style type="text/css"> 
						body { font: normal 20px auto ����, Arial, Helvetica, sans-serif; color: #4f6b72; 
						background: #E6EAE9; } 
                        a { color: #c75f3e; } 
						p{font-size:16px}
						th { font: bold 20px ����, Arial, Helvetica, sans-serif; color: #4f6b72; border-right: 1px solid #C1DAD7; 
                             border-bottom: 1px solid #C1DAD7; border-top: 1px solid #C1DAD7; letter-spacing: 2px; 
						text-transform: uppercase; text-align: left; padding: 6px 6px 6px 12px; background: #CCCCCC no-repeat; } 
                        td { border-right: 1px solid #C1DAD7; border-bottom: 1px solid #C1DAD7; background: #FFFFFF; 
                        font-size:15px; padding: 6px 6px 6px 12px; color: #4f6b72; } </style> 
				 <body>
				<div>
				  <table width="30%" border="1" align="center"  cellpadding="3" cellspacing="0" style="margin-top:100px;">
				    <tr>
				      <th align="center" >��Ϣ��ʾ</th>
				    </tr>
				    <tr>
				      <td><p><strong>' . $show . '</strong><br /></p>
				      2��󷵻�ָ��ҳ�棡<br />
				      ���������޷���ת��<a href="' . $url . '">�����˴�</a>��</td>
				    </tr>
				  </table>
				</div>
				</body>
				</html>';
		echo $msg;
		exit();
	}
}