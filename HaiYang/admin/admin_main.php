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
<title>У������̨������ҳ</title>
<LINK href="public/css/private.css" type=text/css rel=stylesheet>
</head>
<BODY>
<TABLE class=navi cellSpacing=1 align=center border=0>
  <TR>
    <TH>��̨ >>>>>>>��վ����&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username']."�����ã������� ".date("Y-m-d l",time());?>
    &nbsp;&nbsp;&nbsp;������ʾ:Ϊ��֤���������������ʹ��IE�ں��������¼������
    </TH></TR></TABLE><BR>
   <form action="" method="post" >
	<table border=0 cellspacing=1 align=center class=form>
	<tr>
		<th colspan="2">������վ������Ϣ</th>
	</tr>
   <tr>
      <td align="right">��վ���ƣ�</td>
      <td><input type="text" name="website_name" />  </td>
   </tr>
   <tr>
      <td align="right">��վ��ַ��</td>
      <td><input type="password" name="wedsite_addr" />  </td>
   </tr>
    <tr>
      <td align="right">��Ȩ��Ϣ��</td>
      <td><input type="password" name="copyright" />  </td>
   </tr>
   <tr>
      <td align="right">��ϵ�绰��</td>
      <td><input type="password" name="telephone" />  </td>
   </tr>
    <tr>
      <td align="right">E-MAIL��</td>
      <td><input type="password" name="email" />  </td>
   </tr>
    <tr>
    <td colspan="2" align="center" height='30'>
  <input type="submit" name="update" value=" ȷ�� "/></td>  
    </tr>
  	</table>
  	</form>
  	<br>
  <form action="" method="post" >
	<table border=0 cellspacing=1 align=center class=form>
	<tr>
		<th colspan="2">�޸Ĺ���Ա����</th>
	</tr>
   <tr>
      <td align="right">����ԭʼ���룺</td>
      <td><input type="password" name="ori_password" />  </td>
   </tr>
   <tr>
      <td align="right">���������룺</td>
      <td><input type="password" name="new_password" />  </td>
   </tr>
   <tr>
      <td align="right">�ٴ����������룺</td>
      <td><input type="password" name="re_password" />  </td>
   </tr>
    <tr>
    <td colspan="2" align="center" height='30'>
  <input type="submit" name="update" value=" �޸� "/></td>  
    </tr>
  	</table>
  	</form>
</BODY></HTML>
  