<?php
include_once 'admin_global.php';
$db->userstate_check(); 
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
  <TBODY>
  <TR>
    <TH>��̨ >>>>>>>�������&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username']."�����ã������� ".date("Y-m-d l",time());?>
    &nbsp;&nbsp;&nbsp;������ʾ:Ϊ��֤���������������ʹ��IE�ں��������¼������
    </TH></TR></TBODY></TABLE><BR>

	<table border=0 cellspacing=1 align=center class=news>
	<tr>
		<th colspan="2">��ӷ���</th>
	</tr>
	<form action="" method="post" onsubmit="syncTextarea()" >
    <tr>
   <td width=80>���ŷ���</td>
  <td>
  <select name="cid">
    <option value="0">��ӷ���</option>
   
  </select>
    </td></tr>
   <tr>
   <td width=80>���ű���</td>
  <td>
  <input type="text" name="title" size=50>
  </select>
    </td>
    </tr>
       <tr>
   <td width=80>��������</td>
  <td>
  <input type="text" name="author" size=20>
    </td>
    </tr>
       <tr>
   <td width=80>���Źؼ���</td>
  <td>
  <input type="text" name="keywrod" size=80>
    </td>
    </tr>
       <tr>
   <td width=80>��������</td>
  <td>
  <textarea id="edited" name="content" style="width:95%;height:280px;"></textarea>
	<script language="javascript" type="text/javascript" src="public/edit/whizzywig.js"></script>
	<script type="text/javascript">buttonPath = "public/edit/images/";makeWhizzyWig("edited", "all");</script>
    </td>
    </tr>
    <tr>
   <td width=80></td>
  <td>
  <center><input type="submit" name="into_news" style="height:30px;" value="�������"></center>
    </td>
    </tr>
     </form>
	</table>
<br>

	</BODY></HTML>
