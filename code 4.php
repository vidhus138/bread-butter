<!DOCTYPE html>
<head>
<title> TIME TABLE </title>
</head>
<body>

<form name="a" method="POST">

<table border=10 cellspacing=10>
<caption> <input type="text" name="branch" value="Enter Your Branch">  </caption>

<tr>
<th>TIME</th>
<th>MONDAY</th>
<th>TUESDAY</th>
<th>WEDNESDAY</th>
<th>THURSDAY</th>
<th>FRIDAY</th>
</tr>

<tr>
<td><b>8:00-9:00</b></td>
<td> 
Enter Subject <input type = "text" name="mon1"><br>
Enter Facuty   <input type="text" name="f1"><br>
</td>
<td> 
Enter Subject <input type = "text" name="tue1"><br>
Enter Facuty   <input type="text" name="f2"><br>
</td>
<td> 
Enter Subject <input type = "text" name="wed1"><br>
Enter Facuty   <input type="text" name="f3"><br>
</td>
<td> 
Enter Subject <input type = "text" name="thur1"><br>
Enter Facuty   <input type="text" name="f4"><br>
</td>
<td> 
Enter Subject <input type = "text" name="fri1"><br>
Enter Facuty   <input type="text" name="f5"><br>
</td>
</tr>

<tr>
<td><b>9:00-10:00</b></td>
<td> 
Enter Subject <input type = "text" name="mon2"><br>
Enter Facuty   <input type="text" name="f6"><br>
</td>
<td> 
Enter Subject <input type = "text" name="tue2"><br>
Enter Facuty   <input type="text" name="f7"><br>
</td>
<td> 
Enter Subject <input type = "text" name="wed2"><br>
Enter Facuty   <input type="text" name="f8"><br>
</td>
<td> 
Enter Subject <input type = "text" name="thur2"><br>
Enter Facuty   <input type="text" name="f9"><br>
</td>
<td> 
Enter Subject <input type = "text" name="fri2"><br>
Enter Facuty   <input type="text" name="f10"><br>
</td>
</tr>

<tr>
<td><b>10:00-11:00</b></td>
<td> 
Enter Subject <input type = "text" name="mon3"><br>
Enter Facuty   <input type="text" name="f11"><br>
</td>
<td> 
Enter Subject <input type = "text" name="tue3"><br>
Enter Facuty   <input type="text" name="f12"><br>
</td>
<td> 
Enter Subject <input type = "text" name="wed3"><br>
Enter Facuty   <input type="text" name="f13"><br>
</td>
<td> 
Enter Subject <input type = "text" name="thur3"><br>
Enter Facuty   <input type="text" name="f14"><br>
</td>
<td> 
Enter Subject <input type = "text" name="fri3"><br>
Enter Facuty   <input type="text" name="f15"><br>
</td>
</tr>

<tr>
<td><b>11:00-12:00</b></td>
<td> 
Enter Subject <input type = "text" name="mon4"><br>
Enter Facuty   <input type="text" name="f16"><br>
</td>
<td> 
Enter Subject <input type = "text" name="tue4"><br>
Enter Facuty   <input type="text" name="f17"><br>
</td>
<td> 
Enter Subject <input type = "text" name="wed4"><br>
Enter Facuty   <input type="text" name="f18"><br>
</td>
<td> 
Enter Subject <input type = "text" name="thur4"><br>
Enter Facuty   <input type="text" name="f19"><br>
</td>
<td> 
Enter Subject <input type = "text" name="fri4"><br>
Enter Facuty   <input type="text" name="f20"><br>
</td>
</tr>

<tr>
<td><b>1:00-2:00</b></td>
<td> 
Enter Subject <input type = "text" name="mon5"><br>
Enter Facuty   <input type="text" name="f21"><br>
</td>
<td> 
Enter Subject <input type = "text" name="tue5"><br>
Enter Facuty   <input type="text" name="f22"><br>
</td>
<td> 
Enter Subject <input type = "text" name="wed5"><br>
Enter Facuty   <input type="text" name="f23"><br>
</td>
<td> 
Enter Subject <input type = "text" name="thur5"><br>
Enter Facuty   <input type="text" name="f24"><br>
</td>
<td> 
Enter Subject <input type = "text" name="fri5"><br>
Enter Facuty   <input type="text" name="f25"><br>
</td>
</tr>

<tr>
<td><b>2:00-3:00</b></td>
<td> 
Enter Subject <input type = "text" name="mon6"><br>
Enter Facuty   <input type="text" name="f26"><br>
</td>
<td> 
Enter Subject <input type = "text" name="tue6"><br>
Enter Facuty   <input type="text" name="f27"><br>
</td>
<td> 
Enter Subject <input type = "text" name="wed6"><br>
Enter Facuty   <input type="text" name="f28"><br>
</td>
<td> 
Enter Subject <input type = "text" name="thur6"><br>
Enter Facuty   <input type="text" name="f29"><br>
</td>
<td> 
Enter Subject <input type = "text" name="fri6"><br>
Enter Facuty   <input type="text" name="f30"><br>
</td>
</tr>

<tr>
<td><b>3:00-4:00</b></td>
<td> 
Enter Subject <input type = "text" name="mon7"><br>
Enter Facuty   <input type="text" name="f31"><br>
</td>
<td> 
Enter Subject <input type = "text" name="tue7"><br>
Enter Facuty   <input type="text" name="f32"><br>
</td>
<td> 
Enter Subject <input type = "text" name="wed7"><br>
Enter Facuty   <input type="text" name="f33"><br>
</td>
<td> 
Enter Subject <input type = "text" name="thur7"><br>
Enter Facuty   <input type="text" name="f34"><br>
</td>
<td> 
Enter Subject <input type = "text" name="fri7"><br>
Enter Facuty   <input type="text" name="f35"><br>
</td>
</tr>
</table>

 <center> <input type=Reset>  <input type=submit value="Generate Timetable"> </center>
</form>

</body>


<?php
if($_POST)
{
$mon1=$_POST['mon1'];
$f1=$_POST['f1'];

$tue1=$_POST['tue1'];
$f2=$_POST['f2'];

$wed1=$_POST['wed1'];
$f3=$_POST['f3'];

$thur1=$_POST['thur1'];
$f4=$_POST['f4'];

$fri1=$_POST['fri1'];
$f5=$_POST['f5'];

$mon2=$_POST['mon2'];
$f6=$_POST['f6'];

$tue2=$_POST['tue2'];
$f7=$_POST['f7'];

$wed2=$_POST['wed2'];
$f8=$_POST['f8'];

$thur2=$_POST['thur2'];
$f9=$_POST['f9'];

$fri2=$_POST['fri2'];
$f10=$_POST['f10'];

$mon3=$_POST['mon3'];
$f11=$_POST['f11'];

$tue3=$_POST['tue3'];
$f12=$_POST['f12'];

$wed3=$_POST['wed3'];
$f13=$_POST['f13'];

$thur3=$_POST['thur3'];
$f14=$_POST['f14'];

$fri3=$_POST['fri3'];
$f15=$_POST['f15'];

$mon4=$_POST['mon4'];
$f16=$_POST['f16'];

$tue4=$_POST['tue4'];
$f17=$_POST['f17'];

$wed4=$_POST['wed4'];
$f18=$_POST['f18'];

$thur4=$_POST['thur4'];
$f19=$_POST['f19'];

$fri4=$_POST['fri4'];
$f20=$_POST['f20'];

$mon5=$_POST['mon5'];
$f21=$_POST['f21'];

$tue5=$_POST['tue5'];
$f22=$_POST['f22'];

$wed5=$_POST['wed5'];
$f23=$_POST['f23'];

$thur5=$_POST['thur5'];
$f24=$_POST['f24'];

$fri5=$_POST['fri5'];
$f25=$_POST['f25'];

$mon6=$_POST['mon6'];
$f26=$_POST['f26'];

$tue6=$_POST['tue6'];
$f27=$_POST['f27'];

$wed6=$_POST['wed6'];
$f28=$_POST['f28'];

$thur6=$_POST['thur6'];
$f29=$_POST['f29'];

$fri6=$_POST['fri6'];
$f30=$_POST['f30'];

$mon7=$_POST['mon7'];
$f31=$_POST['f31'];

$tue7=$_POST['tue7'];
$f32=$_POST['f32'];

$wed7=$_POST['wed7'];
$f33=$_POST['f33'];

$thur7=$_POST['thur7'];
$f34=$_POST['f34'];

$fri7=$_POST['fri7'];
$f35=$_POST['f35'];


echo"<table border=10 cellspacing=10>";
echo" <tr>";
echo"<th>TIME</th>";
echo" <th>MONDAY</th>";
echo" <th>TUESDAY</th>";
echo" <th><h4 style=background-color:Orange;>WEDNESDAY</h4></th>";
echo" <th>THURSDAY</th>";
echo"<th>FRIDAY</th>";
echo"</tr>";

echo"<tr>";
echo"<td><b>8:00-9:00</b></td>";
print" <td>$mon1<br>$f1</td>";
print" <td>$tue1<br>$f2</td>";
print" <td>$wed1<br>$f3</td>";
print" <td>$thur1<br>$f4</td>";
print"<td>$fri1<br>$f5</td>";
echo"</tr>";

echo"<tr>";
echo"<td><b>9:00-10:00</b></td>";
print"<td>$mon2<br>$f6</td>";
print"<td>$tue2<br>$f7</td>";
print"<td>$wed2<br>$f8</td>";
print"<td>$thur2<br>$f9</td>";
print"<td>$fri2<br>$f10</td>";
echo"</tr>";

echo"<tr>";
echo"<td><b>10:00-11:00</b></td>";
print"<td>$mon3<br>$f11</td>";
print"<td>$tue3<br>$f12</td>";
print"<td>$wed3<br>$f13</td>";
print"<td>$thur3<br>$f14</td>";
print"<td>$fri3<br>$f15</td>";
echo"</tr>";

echo"<tr>";
echo"<td><b>11:00-12:00</b></td>";
print"<td>$mon4<br>$f16</td>";
print"<td>$tue4<br>$f17</td>";
print"<td>$wed4<br>$f18</td>";
print"<td>$thur4<br>$f19</td>";
print"<td>$fri4<br>$f20</td>";
echo"</tr>";

echo"<tr>";
echo"<td><b>12:00-1:00</b></td>";
print"<td>BREAK</td>";

echo"<tr>";
echo"<td><b>1:00-2:00</b></td>";
print"<td>$mon5<br>$f21</td>";
print"<td>$tue5<br>$f22</td>";
print"<td>$wed5<br>$f23</td>";
print"<td>$thur5<br>$f24</td>";
print"<td>$fri5<br>$f25</td>";
echo"</tr>";

echo"<tr>";
echo"<td><b>2:00-3:00</b></td>";
print"<td>$mon6<br>$f26</td>";
print"<td>$tue6<br>$f27</td>";
print"<td>$wed6<br>$f28</td>";
print"<td>$thur6<br>$f29</td>";
print"<td>$fri6<br>$f30</td>";
echo"</tr>";

echo"<tr>";
echo"<td><b>2:00-4:00</b></td>";
print"<td>$mon7<br>$f31</td>";
print"<td>$tue7<br>$f32</td>";
print"<td>$wed7<br>$f33</td>";
print"<td>$thur7<br>$f34</td>";
print"<td>$fri7<br>$f35</td>";
echo"</tr>";


echo"</table>";
}
?>
</html>