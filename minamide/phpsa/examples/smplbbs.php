<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Simple Bulletin Board</title>
</head>
<body bgcolor="#FFFFCC">
<h3>Simple Bulletin Board</h3>
<h4>(*) is required.</h4>
<form method="post" action="smplbbs.php">
<p>Name(*)<br/>
<input type="text" size="20" name="name"/></p>
<p>Title<br/>
<input type="text" size="30" name="title"/></p>
<p>Comment(*)<br/>
<textarea cols="60" rows="5" name="comment"></textarea></p>
<input type="submit" value="SEND"/>
</form>
<br/>
<hr/>
<br/>
<?php
if($_POST['name']!="" && $_POST['comment']!=""){
  $wdb=mysql_connect("localhost","smplbbs","smplbbs");
  mysql_select_db("bbs",$wdb);
  $wsql="INSERT INTO bbsdata(nam,title,comment) VALUES('".mysql_escape_string($_POST['name'])."','".mysql_escape_string($_POST['title'])."','".mysql_escape_string($_POST['comment'])."')";
  mysql_query($wsql,$wdb);
  mysql_close($wdb);
}
$rdb=mysql_connect("localhost","smplbbs","smplbbs");
mysql_select_db("bbs",$rdb);
$rsql="select * from bbsdata";
$rs=mysql_query($rsql,$rdb);
while($ary=mysql_fetch_array($rs)){
  print("<br/>Name:".htmlspecialchars($ary[0])."<br/>");
  print("<br/>Title:".htmlspecialchars($ary[1])."<br/>");
  $comment = nl2br(htmlspecialchars($ary[2]));
  $comment = preg_replace("|\\[b\\](.*)\\[/b\\]|U","<b>\\1</b>", $comment);
  print("<div>Comment:<br/>".$comment."</div>");
  print("<hr/>");
}
mysql_close($rdb);
?>
</body>
</html>

