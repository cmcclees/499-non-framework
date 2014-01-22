<?php 

$host = 'itp460.usc.edu';
$dbname = 'music';
$user = 'student';
$pass = 'ttrojan';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$sql = "SELECT title, price, play_count FROM songs ORDER BY play_count DESC";

$statement = $pdo->prepare($sql);
// $statement->bindParam(':artist_name', $artist_name);
$statement->execute();
$songs = $statement->fetchAll();

var_dump($songs);
exit;

?>
	
<?php foreach ($songs as $song) : ?>
	<div class="song">
		<h3><?php echo $song['title']; ?></h3>
		<p>Play Count: <?php echo $song['play_count']; ?></p>
		<p>Price: $<?php echo $song['price']; ?></p>
	</div>
<?php endforeach; ?>
