<?php
   include_once 'admin_global.php';
   $db->userstate_check(); 
   if ($_GET['action'] == 'logout')
   	$db->user_out();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>校友网后台管理主页</title>
<LINK href="public/css/private.css" type=text/css rel=stylesheet>
</head>
<BODY>
<TABLE class=navi cellSpacing=1 align=center border=0>
  <TR>
    <TH>后台 >>>>>>>网站配置&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username']."，您好！今天是 ".date("Y-m-d l",time());?>
    &nbsp;&nbsp;&nbsp;★★★提示:为保证功能完整，请最好使用IE内核浏览器登录！★★★
    </TH></TR></TABLE><BR>
   <form action="" method="post" >
	<table border=0 cellspacing=1 align=center class=form>
	<tr>
		<th colspan="2">配置网站基本信息</th>
	</tr>
   <tr>
      <td align="right">网站名称：</td>
      <td><input type="text" name="website_name" />  </td>
   </tr>
   <tr>
      <td align="right">网站地址：</td>
      <td><input type="password" name="wedsite_addr" />  </td>
   </tr>
    <tr>
      <td align="right">版权信息：</td>
      <td><input type="password" name="copyright" />  </td>
   </tr>
   <tr>
      <td align="right">联系电话：</td>
      <td><input type="password" name="telephone" />  </td>
   </tr>
    <tr>
      <td align="right">E-MAIL：</td>
      <td><input type="password" name="email" />  </td>
   </tr>
    <tr>
    <td colspan="2" align="center" height='30'>
  <input type="submit" name="update" value=" 确定 "/></td>  
    </tr>
  	</table>
  	</form>
  	<br>
  <form action="" method="post" >
	<table border=0 cellspacing=1 align=center class=form>
	<tr>
		<th colspan="2">修改管理员密码</th>
	</tr>
   <tr>
      <td align="right">输入原始密码：</td>
      <td><input type="password" name="ori_password" />  </td>
   </tr>
   <tr>
      <td align="right">输入新密码：</td>
      <td><input type="password" name="new_password" />  </td>
   </tr>
   <tr>
      <td align="right">再次输入新密码：</td>
      <td><input type="password" name="re_password" />  </td>
   </tr>
    <tr>
    <td colspan="2" align="center" height='30'>
  <input type="submit" name="update" value=" 修改 "/></td>  
    </tr>
  	</table>
  	</form>
</BODY></HTML>
  