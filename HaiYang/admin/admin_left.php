<?php
   include_once 'admin_global.php';
   $db->userstate_check(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>У������̨������</title>
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
    <TH onClick="javascript:menu_tree('left_1');" align=middle>�� �������� ��</TH></TR>
  <TR id=left_1>
    <TD>
      <TABLE width="100%">
        <TBODY>
        <TR>
			<TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A href="admin_main.php" target=main>��վ����</A></TD>
		</TR>
        <TR>
          <TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A onClick="return confirm('��ʾ����ȷ��Ҫ�˳�ϵͳ��')" href="admin_main.php?action=logout"  target=_parent>�˳���̨</A>
		  </TD>
		</TR>
	 </TBODY></TABLE>
	 </TD></TR></TBODY></TABLE>

<TABLE class=Menu cellSpacing="0" cellpadding="10" style="margin-top:10px">
  <TBODY>
  <TR>
    <TH onClick="javascript:menu_tree('left_2');" align=middle>�� �������� ��</TH></TR>
  <TR id=left_2>
    <TD>
      <TABLE width="100%">
        <TBODY>
        <TR>
			<TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A href="admin_add_class.php" target=main>���ŷ���</A></TD>
		</TR>
		        <TR>
			<TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A href="admin_news_maintain.php" target=main>����ά��</A></TD>
		</TR>
		        <TR>
			<TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A href="admin_add_news.php" target=main>�������</A></TD>
		</TR>
	 </TBODY></TABLE>
	 </TD></TR></TBODY></TABLE>

	 <TABLE class=Menu cellSpacing="0" cellpadding="10" style="margin-top:10px">
  <TBODY>
  <TR>
    <TH onClick="javascript:menu_tree('left_3');" align=middle>�� ���Թ��� ��</TH></TR>
  <TR id=left_3>
    <TD>
      <TABLE width="100%">
        <TBODY>
        <TR>
			<TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A href="" target=main>��������</A></TD>
		</TR>
		        <TR>
			<TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A href="" target=main>�������</A></TD>
		</TR>
		        <TR>
			<TD><IMG src="public/img/menu.gif" align=absMiddle border=0>&nbsp;
		  <A href="" target=main>�����б�</A></TD>
		</TR>
	 </TBODY></TABLE>
	 </TD></TR></TBODY></TABLE>
	 
<TABLE class=Menu cellSpacing="0" cellpadding="10" style="margin-top:10px">
  <TBODY>
  <TR>
    <TH align=middle>�� �汾��Ϣ ��</TH></TR>
  <TR>
    <TD align=middle>��̨����ϵͳ 1.0</TD></TR>
  <TR>
    <TD align=middle>ɽ����ѧ��������</TD></TR></TBODY></TABLE>
    </CENTER>
    </BODY>
  </HTML>