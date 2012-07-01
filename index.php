<?php include("header.php"); ?>
<!--
<?php 
include("config.php");

$m=new Mongo($config['mongo_url']);
$rows=$m->listDBs();
print_r($rows);
?>
-->
<div data-role="page"> 
	<div data-role="header">
		<h1>Databases </h1>
	</div> 
	<div data-role="content">
		<ul data-role="listview">
			<?php foreach($rows['databases'] as $row){ ?>
			<li><a href="database.php?database=<?=$row['name']?>" data-transition="none"><?=$row['name']?></a></li>
			<?php } ?>
		</ul>
	</div> 
	<div data-role="footer" data-position="fixed" >
		<h4><?=$config['mongo_url']?></h4>
	</div> 
</div>
<?php include("footer.php"); ?>