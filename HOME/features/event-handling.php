<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>
<?php include '../content.php'; ?>

<h1>Event Handling</h1>
<div id="chartContainer"></div>

<?php
    $dataPoints1 = array(
        array("y" => 71),
        array("y" => 55),
        array("y" => 50),
        array("y" => 65),
        array("y" => 95),
        array("y" => 68),
        array("y" => 28),
        array("y" => 34),
        array("y" => 14)
    );;
    $dataPoints2 = array(
        array("y" => 55),
        array("y" => 50),
        array("y" => 65),
        array("y" => 95),
        array("y" => 68),
        array("y" => 28),
        array("y" => 34),
        array("y" => 14),
        array("y" => 71)
    );
?>

<script type="text/javascript">
    
    function onClick(e) {
        alert("Type: " + e.dataSeries.type + ", dataPoint { x:" + e.dataPoint.x + ", y: " + e.dataPoint.y + " }");
    };

    $(function () {
		
		var chart = new CanvasJS.Chart("chartContainer",
		{
    		title: {
    			text: "Try Clicking Any DataPoint"
    		},
    		data: [
			{
				click: onClick,
				cursor: "pointer",
        		type: "column",
        		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
			},
			{
				click: onClick,
				cursor: "pointer",
        		type: "line",
        		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
			}]
		});

		chart.render();
	});
</script>

<?php include '../footer.php'; ?>