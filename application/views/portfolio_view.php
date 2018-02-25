<h1>Portfolio</h1>
<table>
	
	<?php 

		foreach($data as $row){
			echo '<tr><td>'.$row['Year'] .'</td><td>' . $row['Site']. '</td><td>'.$row[
				'Description'] . '</td></tr>'

		}

	 ?>
</table>