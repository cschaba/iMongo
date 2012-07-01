<?php include("header.php"); ?>
<!--
<?php 
include("config.php");

$database=$_GET['database'];
$collection=$_GET['collection'];
$item_id=$_GET['_id'];

$m=new Mongo($config['mongo_url']);
$db=$m->{$database};
$col=$db->{$collection};
$result=$col->findOne(array('_id'=>new MongoId($item_id)));
print_r($result);
?>
-->
<div data-role="page"> 
	<div data-role="header">
		<a href="#" data-icon="arrow-l" data-rel="back">Back</a>
		<h1><?=$result['_id']?></h1>
	</div> 
	<div data-role="content">
		<form>
			<label for="raw">JSON Value:</label>
			<textarea readonly="true" name="raw">
				<?=json_encode($result)?>
			</textarea>
		</form>
	</div> 
	<div data-role="footer" data-position="fixed" >
		<h4><?=$config['mongo_url']?></h4>
	</div> 
</div>

<?php include("footer.php"); ?>