<!--
<?php 
include("config.php");

$database=$_GET['database'];
$collection=$_GET['collection'];

$m=new Mongo($config['mongo_url']);
$db=$m->{$database};
$col=$db->{$collection};
$skip=$_GET['skip'];
$rows=$col->find()->limit(PAGING_SIZE)->skip($skip);
$count=$col->count();

?>
-->
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
