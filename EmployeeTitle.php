<?php
session_start();
 ?>
<h1> Theatre Database</h1>


<link rel="stylesheet" href="sakura.css">

<table style="width:100%">
  <tr>
    <th>Employee ID</th>
    <th>Title</th>
  </tr>


<?php
// DRY database setup
include("loggedin.php");

$sqlQueryString = 'select * from `EMPLOYEE TITLE`;';

$sql_result = $con->query($sqlQueryString);


while ($row = $sql_result->fetch_assoc()) {
        printf ("<tr><td>%s</td> <td>%s</td></tr>",$row["Employee ID"], $row["Title"]);
    }

echo "</table>";

$con->close();

?>

<a href="TheatreStage.php"><button>Theatre Stage</button></a>
<a href="employee.php"><button>Employee</button></a>
<a href="EmployeeTitle.php"><button>Employee Title</button></a>
<a href="Theatre.php"><button>Theatre</button></a>
