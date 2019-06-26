<div id="contenu">
	<h2>Liste des visiteurs</h2>
	<table border="2px solid black">
		<tr>
			<!-- <th>Nom</th>
			<th>Prenom</th> -->
			<th>Visiteurs</th>
		</tr>
		<?php
		foreach ($lesVisiteurs as $unVisiteur) {
				$nom = $unVisiteur['nom'];
				$prenom = $unVisiteur['prenom'];
				echo "<tr>";
				// echo "<td>" . $nom . "</td>";
				// echo "<td>" . $prenom . "</td>";
				echo "<td>" . $nom . " " . $prenom . "</td>";
				echo "</tr>";
			}
		?>
	</table>
</div>