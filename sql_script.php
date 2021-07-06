<html>
	<head>

	</head>
	<body>
		<?php
			$filter = $_GET['filter'];
			$sub_filter = $_GET['sub_filter'];

			$servername = "localhost";
			$username = "root";
			$password = "";
		  $dbname = "DB_Attivita";

		  // Create connection
		  $conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error)
			{
				die("Connection failed: " . $conn->connect_error . "<br>");
			}

			$queryString = "SELECT * FROM ATTIVITA";

		  $result = $conn->query($queryString);
			echo "<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Indirizzo</th>
			<th>Comune</th>
			<th>Tipologia</th>
			<th>Telefono</th>
			<th>Rating</th>
			<th>Prezzi</th>
			<th>Stato</th>
			<th></th>
			</tr>";
			while($row = mysqli_fetch_array($result)) {
			  echo "<tr>";
			  echo "<td>" . $row['Identificativo'] . "</td>";
			  echo "<td>" . $row['Nome'] . "</td>";
			  echo "<td>" . $row['Indirizzo'] . "</td>";
			  echo "<td>" . $row['Comune'] . "</td>";
			  echo "<td>" . $row['Tipologia'] . "</td>";
				echo "<td>" . $row['Telefono'] . "</td>";
				echo "<td>" . $row['Rating'] . "</td>";
				echo "<td>" . $row['Prezzi'] . "</td>";
				echo "<td>" . $row['Stato'] . "</td>";
			  echo "</tr>";
			}

			mysqli_close($conn);
		?>
	</body>
</html>
