<?php
   include_once 'admin_global.php';
   $db->userstate_check(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>校友网后台管理主页</title>
<SCRIPT language=JavaScript>
    window.self.focus();
</SCRIPT>
</head>

<FRAMESET border=0 frameSpacing=0 frameBorder=0 cols="10%,*">
<FRAME name=menu src="admin_left.php" scrolling=yes>
<FRAME name=main src="admin_main.php" scrolling=yes>
<NOFRAMES></NOFRAMES>
</FRAMESET>
</html>