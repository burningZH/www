<?php
include_once 'admin_global.php';
$db->userstate_check(); 
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
  <TBODY>
  <TR>
    <TH>后台 >>>>>>>新闻维护&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username']."，您好！今天是 ".date("Y-m-d l",time());?>
    &nbsp;&nbsp;&nbsp;★★★提示:为保证功能完整，请最好使用IE内核浏览器登录！★★★
    </TH></TR></TBODY></TABLE><BR>

	<table border=0 cellspacing=1 align=center class=form>
	<tr>
		<th width='100'>新闻分类</th><th>新闻标题</th><th width='100'>作者</th><th width='100'>日期</th><th width='100'>操作</th>
	</tr>
	</table>
	</BODY>
	</html>