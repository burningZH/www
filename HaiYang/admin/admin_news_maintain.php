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
    <TH>��̨ >>>>>>>����ά��&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username']."�����ã������� ".date("Y-m-d l",time());?>
    &nbsp;&nbsp;&nbsp;������ʾ:Ϊ��֤���������������ʹ��IE�ں��������¼������
    </TH></TR></TBODY></TABLE><BR>

	<table border=0 cellspacing=1 align=center class=form>
	<tr>
		<th width='100'>���ŷ���</th><th>���ű���</th><th width='100'>����</th><th width='100'>����</th><th width='100'>����</th>
	</tr>
	</table>
	</BODY>
	</html>