<?php
  include_once 'admin_global.php';
  if (!empty($_POST['username']) && !empty($_POST['password']))
  	$db->user_login($_POST['username'], $_POST['password']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��¼��̨����ϵͳ</title>
<link rel="stylesheet" href="public/css/style.css" type="text/css" />

</head>
<body>
	<!-- Header -->
	<header id="top">
		<div class="wrapper-login">
			<!-- Title/Logo - can use text instead of image -->
			<div id="title">��̨����ϵͳ</div>
		</div>
	</header>
	<!-- End of Header -->
	
	<!-- Page content -->
	<div id="page">
		<!-- Wrapper -->
		<div class="wrapper-login">
				<!-- Login form -->				

					<form id="loginform" method="post" action="">

						<p>
							<label class="required" for="username">��¼�û���</label><br/>
							<input type="text" id="username" class="full" value="" name="username"/>
						</p>
						
						<p>
							<label class="required" for="password">��¼���룺</label><br/>
							<input type="password" id="password" class="full" value="" name="password"/>
						</p>
						
						<p><center>
							<input type="submit" class="btn btn-blue big" value="��¼"/>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="reset"  class="btn btn-blue big" value="����"/>
							</center>
						</p>

					</form>
				<!-- End of login form -->	
		</div>
		<!-- End of Wrapper -->
	</div>
	<!-- End of Page content -->
	
	<!-- Page footer -->
	<footer id="bottom">
		<div class="wrapper-login">
		    <p>ɽ����ѧ��������<br></p>
			<p>Copyright &copy; 2013 <br></p>
		</div>
	</footer>
	<!-- End of Page footer -->

</body>
</html>