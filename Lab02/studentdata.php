  
<?php
    require_once "dashboard.php";
    $query  = "select * from student";
    $result = get($query);
?>


<html>
      <head>
	  </head>
<body>
    <table border="1" style="border-collapse:collapse">
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Credit</th>
            <th>CGPA</th>
            <th>Dept_id</th>
            <th>Edit</th>
            <th>Delete</th>
			
        </tr>
   

<?php
    foreach($result as $row){
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["credit"]."</td>";
        echo "<td>".$row["cgpa"]."</td>";
        echo "<td>".$row["dept_id"]."</td>";
    }
?>
 </table>
</body>
</html>