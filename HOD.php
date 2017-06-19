<table class="table-hover" class="table-bordered">
	<?php
		include("DBConn.php");
		session_start();
		$sql="select * from form where HODStatus='1'";
		$result=$conn->query($sql);
		if($result->num_rows>0)
		{
			echo "<tr>";
			while($row=$result->fetch_assoc())
			{
				$FormNumber=$row['FormNumber'];
				$date=$row['date'];
				$name=$row['Name'];
				echo "<td>$FormNumber</td>";
				echo "<td>$date</td>";
				echo "<td>$row</td>";
				?>
				<td>
					<form method="post" action="">
					    <button type="submit">Check</button>
					</form>
				</td>
				<?php
				echo "</tr>";
			}
		}
		else
			echo "No Pending Applications";
	?>
</table>