<?php session_start(); ?>
<!--�W��y�k���ҥ�session�A���y�k�n��b�����̫e��-->
<meta http-equiv="Content-Type" content="text/html; charset=Big5" />
<?php
//�s����Ʈw
//�u�n�������W���Ψ�s��MySQL�N�ninclude��
include("db.php");
$id = $_POST['id'];
$pw = $_POST['pw'];

//�j�M��Ʈw���
$sql = "SELECT * FROM tbl_user where user_name = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

//�P�_�b���P�K�X�O�_���ť�
//�H��MySQL��Ʈw�̬O�_���o�ӷ|��
if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
{
      	//�N�b���g�Jsession�A��K�s�عq�l�G��Ѫ̨���
       	$_SESSION['username'] = $id;
       	echo '�n�J���\!';
       	echo "<meta http-equiv=REFRESH CONTENT=1;url=index.php?user=$id>";
}
else
{
        echo '�n�J����!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>