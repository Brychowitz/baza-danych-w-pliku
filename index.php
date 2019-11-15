<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $mojplik = @fopen("baza.txt", "r") or die ("Błąd pliku!");
            $tablica = array();
            while( !feof($mojplik)){
                    $tablica[] = fgets($mojplik);
            }
            fclose($mojplik);
        ?>
        <table>
			<tr>
				<th>Id</th>
				<th>Imie</th>
				<th>Nazwisko</th>
				<th>Zawod</th>
				<th>Pensja</th>
			</tr>
            <?php
                foreach($tablica as $wiersz){
                    $rekord = explode(" ", $wiersz);
					echo '<tr>';
					echo "<td>$rekord[0]</td>";
					echo "<td>$rekord[1]</td>";
					echo "<td>$rekord[2]</td>";
					echo "<td>$rekord[3]</td>";
					echo "<td>$rekord[4]</td>";
					echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>