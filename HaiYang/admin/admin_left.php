<?php
   include_once 'admin_global.php';
   $db->userstate_check(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>校友网后台管理导航</title>
<LINK href="public/css/private.css" type=text/css rel=stylesheet>
<SCRIPT language=javascript>
<!--
function menu_tree(meval)
{
  var left_n=eval(meval);
  if (left_n.style.display=="none")
  { eval(meval+".style.display='';"); }
  else
  { eval(meval+".style.display='none';"); }
}
-->
</SCRIPT>
</head>
<BODY>
<CENTER>

<TABLE class=Menu cellSpacing="0" cellpadding="10">
  <TBODY>
  <TR>
    <TH onClick="javascript:menu_tree('left_1');" align=middle>〓 基础操作 〓</TH></TR>
  <TR id=left_1>
    <TD>
      <TABLE width="100%">
        <TBODY>
        <TR>
			<TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A href="admin_main.php" target=main>网站配置</A></TD>
		</TR>
        <TR>
          <TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A onClick="return confirm('提示：您确定要退出系统吗？')" href="admin_main.php?action=logout"  target=_parent>退出后台</A>
		  </TD>
		</TR>
	 </TBODY></TABLE>
	 </TD></TR></TBODY></TABLE>

<TABLE class=Menu cellSpacing="0" cellpadding="10" style="margin-top:10px">
  <TBODY>
  <TR>
    <TH onClick="javascript:menu_tree('left_2');" align=middle>〓 新闻内容 〓</TH></TR>
  <TR id=left_2>
    <TD>
      <TABLE width="100%">
        <TBODY>
        <TR>
			<TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A href="admin_add_class.php" target=main>新闻分类</A></TD>
		</TR>
		        <TR>
			<TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A href="admin_news_maintain.php" target=main>新闻维护</A></TD>
		</TR>
		        <TR>
			<TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A href="admin_add_news.php" target=main>添加新闻</A></TD>
		</TR>
	 </TBODY></TABLE>
	 </TD></TR></TBODY></TABLE>

	 <TABLE class=Menu cellSpacing="0" cellpadding="10" style="margin-top:10px">
  <TBODY>
  <TR>
    <TH onClick="javascript:menu_tree('left_3');" align=middle>〓 留言管理 〓</TH></TR>
  <TR id=left_3>
    <TD>
      <TABLE width="100%">
        <TBODY>
        <TR>
			<TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A href="" target=main>功能配置</A></TD>
		</TR>
		        <TR>
			<TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A href="" target=main>审核留言</A></TD>
		</TR>
		        <TR>
			<TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A href="" target=main>留言列表</A></TD>
		</TR>
	 </TBODY></TABLE>
	 </TD></TR></TBODY></TABLE>
	 
<TABLE class=Menu cellSpacing="0" cellpadding="10" style="margin-top:10px">
  <TBODY>
  <TR>
    <TH align=middle>〓 版本信息 〓</TH></TR>
  <TR>
    <TD align=middle>后台管理系统 1.0</TD></TR>
  <TR>
    <TD align=middle>山东大学（威海）</TD></TR></TBODY></TABLE>
    </CENTER>
    </BODY>
  </HTML>