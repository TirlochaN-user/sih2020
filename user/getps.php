<?php
$pin=$_REQUEST['pin'];
$conn = new mysqli("localhost", "root", "", "sih_login");
$sql = "select * from police where pin=".$pin;
$res = $conn->query($sql);
$resp;
if($res->num_rows>0)
{
    $resp="";
    while($row=$res->fetch_assoc())
    {
        $resp.="<option>".$row['name']."</option>";
    }
}
else
{
    $resp="<option>Choose...</option>";
}
echo $resp;
