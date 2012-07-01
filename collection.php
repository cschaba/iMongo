<?php include("header.php"); ?>
<!--
<?php 
include("config.php");

$database=$_GET['database'];
$collection=$_GET['collection'];

$m=new Mongo($config['mongo_url']);
$db=$m->{$database};
$col=$db->{$collection};
$rows=$col->find();
print_r($rows);
?>
-->
<div data-role="page"> 
	<div data-role="header">
		<a href="#" data-icon="arrow-l" data-rel="back">Back</a>
		<h1><?=$database.' - '.$collection?></h1>
	</div> 
	<div data-role="content">
		<ul data-role="listview" data-filter="true">
			<?php foreach($rows as $row){ ?>
			<?php 
				$title='';
				foreach($row as $key=>$value) {
					if($key=='_id'){
						continue;
					}
					if(is_array($value)){
						continue;
					}
					$title.=$value.' ';
				} 
			?>
			<li>
				<a href="item.php?database=<?=$database?>&collection=<?=$collection?>&_id=<?=$row['_id']?>" data-transition="none">
					<h3><?=$title?></h3>
					<p><?=$row['_id']?></p>
				</a>
			</li>
			<?php } ?>
		</ul>
	</div> 
	<div data-role="footer" data-position="fixed" >
		<h4><?=$config['mongo_url']?></h4>
	</div> 
</div>

<?php include("footer.php"); ?>