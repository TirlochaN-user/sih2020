<?php
require('tcpdf.php');
$name=$_POST['name'];
$address=$_POST['paddress'];
$fname=$_POST['fname'];
$phone=$_POST['phoneno'];
$date=$_POST['date'];
$crime=$_POST['ctype'];
$cdetails=$_POST['cdetails'];
$place=$_POST['place'];
$psname=$_POST['psname'];
$sdetails=$_POST['sdetails'];
$pdf=new TCPDF('P', 'cm','A4', true, 'UTF-8', false);
$pdf->AddPage('P',"A4");
$content=
"<h2>To<br>
The Police Officer in Charge<br>
$psname<br><br>
Sub: To file a FIR for $crime</h2><br><br>
<h3>Respected Sir,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I $name S/O $fname residing at $address having contact no $phone,would like to report that on $date
at $place, I was a victim of $crime,the particular details are $cdetails.and the suspect deatils are $sdetails<br><br>
I seek your help and request to kindly register my FIR in the subject matter.<br>
</h3>";
$pdf->writeHTML($content);
$pdf->Output('fir4.pdf', 'D');
header( "refresh:5;url=pdf.html" );
// echo  '<script>window.open("pdf.html","_blank")</script>';
?>
<!-- <!DOCTYPE html>
<html>

<head>
    <title>Title of the document</title>
</head>

<body>
    <h1>PDF Example with iframe</h1>
    <iframe src="./fir.pdf" width="100%" height="1000px">
    </iframe>
</body>

</html> -->