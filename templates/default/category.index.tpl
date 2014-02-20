<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>查看栏目</title>
    <link rel="stylesheet" type="text/css" href="/static/js/treeview/jquery.treeview.css"/>
    <script type="text/javascript" src="/static/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/static/js/treeview/jquery.treeview.js"></script>
  </head>
  <body>
  	<div id="wrapper">
  		<div id="left">
  		</div>
  		<div id="content">
  			<ul id="navigation">
         <{$menu}>
        </ul>
        <script language="javascript">
        $(document).ready(function(){
        $("#navigation").treeview({
          persist: "location",
          collapsed: true,
          unique: true
        });
      });
        </script>
  		</div>
        <{include file="category.add.tpl"}>
  	</div>
  </body>
</html>
