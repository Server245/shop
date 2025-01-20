<?php
include 'condb.php';
?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member</title>

<style type="text/css">
.หก {
	text-align: center;
}
</style>
</head>
<body>
    <div class="container">
    <center>
    <div class=" h4 text-center  alert alert-success mb-4 mt-4  " role="alert">
    
      <form method="POST" action="insert_member.php">
      <label><br>
        </label>
        <table width="301" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="30" colspan="2" bgcolor="#00CC99"><center><label>เพิ่มข้อมูลสินค้า</label></td>
          </tr>
          <tr>
            <td width="157" height="40">ชื่อสินค้า:</td>
            <td width="144"><input type="text" name="fname" class="form-control" placeholder="...ชื่อสินค้า"  required ></td>
          </tr>
          <tr>
            <td height="32"><label>ราคา:</label></td>
            <td><input type="number" name="telephone" class="form-control" placeholder="...ราคาสินค้า" required ></td>
          </tr>
          <tr>
            <td height="34">รายละเอียดสินค้า:</td>
            <td><input type="text" name="lname" class="form-control" placeholder="...รายละเอียดสินค้า"  required ></td>
          </tr>
        </table>
        <p>
          <label><br>
          </label>
          <br>
          <input type="submit" value="submit" class="btn btn-success" >
          <a href="show_member.php"  class="btn btn-danger">Cancel</a>
        </p>
        <p>&nbsp;</p>
        <p>แสดงข้อมูล</p>
      </form>
    </div>
    <table border="1" cellpadding="0" cellspacing="0" class="table table-striped">
    <tr>
        <th>รหัส</th>
        <th>ชื่อสินค้า</th>
        <th>ราคาสินค้า</th>
        <th>รายละเอียดสินค้า</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
  <?php
$sql = "SELECT * FROM member";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){    
?>
    <tr>
    <td><?=$row["id"]?></td>     
    <td><?=$row["name"]?></td>   
    <td><?=$row["telephone"]?></td>  
    <td><?=$row["surname"]?></td>      
    <td><a href="edit_member.php"  class="btn btn-warning">Edit</a>  </td>
    <td><a href="delete_member.php?id=<?=$row["id"]?>" class="btn btn-danger"  onclick="Del(this.href);return false;">Delete</a>   </td>


</tr>
<?php
}
mysqli_close($conn);  //ปิดการเชื่อมต่อฐานข้อมูล
?>

</table>

</div>
</body>
</html>

<script language="Javascript">
function Del(mypage){
    var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
    if(agree){
        window.location=mypage;    
    }     
}

</script>