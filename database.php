<?php include("header.php"); ?>
<!--
<?php 
include("config.php");

$database=$_GET['database'];

$m=new Mongo($config['mongo_url']);
$db=$m->{$database};
$rows=$db->listCollections();
print_r($rows);
?>
-->
<div data-role="page"> 
	<div data-role="header">
		<a href="#" data-icon="arrow-l" data-rel="back">Back</a>
		<h1><?=$database?></h1>
	</div> 
	<div data-role="content">
		<ul data-role="listview">
			<?php foreach($rows as $row){ ?>
			<li><a href="collection.php?database=<?=$database?>&collection=<?=$row->getName()?>" data-transition="none"><?=$row->getName()?></a></li>
			<?php } ?>
		</ul>
	</div> 
	<div data-role="footer" data-position="fixed" >
		<h4><?=$config['mongo_url']?></h4>
	</div> 
</div>
<?php include("footer.php"); ?>