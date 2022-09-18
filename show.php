<?php

    echo"<h1>Display the data from the json file</h1>";

	echo"<table>";

		
		echo"<tr>";
        echo"<th>First name</th>";
        echo"<th>last name</th>";
        echo"<th>Email</th>";
        echo"<th>country</th>";
        echo"<th>Gender</th>";
        echo"<th>Department</th>";
		echo"</tr>";
        
		$json_data = file_get_contents("names.json");
		$data = json_decode($json_data, true);
		if (count($data) != 0) {

			foreach ($data as $dd) {

		?>
				<tr>
					<td>
						<?php echo $dd['firstName'] ?>
					</td>
					<td>
					<?php echo $dd['lastName'] ?>
					</td>
					<td>
					<?php echo $dd['Email'] ?>
					</td>
					<td>
					<?php echo $dd['Country'] ?>
					</td>
					<td>
					<?php echo $dd['Gender'] ?>
					</td>
					<td>
					<?php echo $dd['Dept'] ?>
					</td>
					
				</tr>
		<?php

			}
		}

        echo"</table>";
		?>


<style>

td,th{


border-radius: 1px;
border: solid black;

}
table{
    border-collapse: collapse;
}

</style>


