<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>
<?
	if(@$account){
		
	$link = mysqli_connect("localhost","123","123");
		mysqli_select_db("s_hotel",$link);
		mysqli_query("SET NAMES 'utf-8'",$link)
			$sql="insert into comm (account,password,name,sex,tel,id) values
			($account,$password,$name,$sex,$tel,$id)";
		mysqli_query($sql,$link);
		mysqli_close($link);
	};?>
	<h2 align="center"><font face="標楷體" color=#000000>新增
		</font></p>
	<hr color="#000000">
	<p align="center"><font face="標楷體" size="4">輸入資料:
		</font>
		<form action="14-1.php" method="get">
			<p align="center"><font face="標楷體">帳號:<input type="text" name=account></font><p>
			<p align="center"><font face="標楷體">密碼:<input type="text" name=password></font><p>
			<p align="center"><font face="標楷體">姓名:<input type="text" name=name></font><p>
			<p align="center"><font face="標楷體">性別:<input type="text" name=sex></font><p>
			<p align="center"><font face="標楷體">電話:<input type="text" name=tel></font><p>
			<p align="center"><font face="標楷體">身分證字號:<input type="text" name=id></font><p>
		<p align="center">
			<input type="submit" value="新增">
			</p>	
<body>
</body>
</html>
	</form>