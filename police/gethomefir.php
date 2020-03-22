<?php
session_start();
$conn = new mysqli("localhost", "root", "", "sih_login");
$sql = "select * from crimerecord where status!='solved'";
$res = $conn->query($sql);
$resp="";
while ($row = $res->fetch_assoc()) {
    $resp .= "<tr class='clickable-row'>
    <td class='firno'>" . $row['firid'] . " </td>
    <td class='lodgername'>" . $row['Name'] . "</td>
    <td class='dol'>" . $row['dol'] . "</td>
    <td class='status'>" . $row['status'] . "</td>
    </tr>";
}
echo $resp;