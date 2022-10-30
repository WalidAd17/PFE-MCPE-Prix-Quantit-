<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>
<?php include '../content.php'; ?>
<h1>Date-Time Axis</h1>
<div id="chartContainer"></div>

<?php
    //Date/Time is sent as a timestamp. Please not that JavaScript uses milliseconds for timestamp. So you'll have to multiply unix timestamp (seconds) by 1000
    //Refer to this link for more details http://stackoverflow.com/questions/10233080/pass-datetime-timestamp-from-php-to-javascript-by-echo
    $dataPoints1 = array(
        array("x" => 1330540200000, "y" => 30000),
        array("x" => 1333218600000, "y" => 35000),
        array("x" => 1335810600000, "y" => 30000),
        array("x" => 1338489000000, "y" => 30400),
        array("x" => 1341081000000, "y" => 20900),
        array("x" => 1343759400000, "y" => 31000),
        array("x" => 1346437800000, "y" => 30200),
        array("x" => 1349029800000, "y" => 30000),
        array("x" => 1351708200000, "y" => 33000),
        array("x" => 1354300200000, "y" => 38000),
        array("x" => 1356978600000, "y" => 38900),
        array("x" => 1359657000000, "y" => 39000)
    );

    $dataPoints2 = array(
        array("x" => 1330540200000, "y" => 20100),
        array("x" => 1333218600000, "y" => 16000),
        array("x" => 1335810600000, "y" => 14000),
        array("x" => 1338489000000, "y" => 18000),
        array("x" => 1341081000000, "y" => 18000),
        array("x" => 1343759400000, "y" => 21000),
        array("x" => 1346437800000, "y" => 22000),
        array("x" => 1349029800000, "y" => 25000),
        array("x" => 1351708200000, "y" => 23000),
        array("x" => 1354300200000, "y" => 25000),
        array("x" => 1356978600000, "y" => 26000),
        array("x" => 1359657000000, "y" => 25000)
    );

    $dataPoints3 = array(
        array("x" => 1330540200000, "y" => 10100),
        array("x" => 1333218600000, "y" => 6000),
        array("x" => 1335810600000, "y" => 3400),
        array("x" => 1338489000000, "y" => 4000),
        array("x" => 1341081000000, "y" => 9000),
        array("x" => 1343759400000, "y" => 3900),
        array("x" => 1346437800000, "y" => 4200),
        array("x" => 1349029800000, "y" => 5000),
        array("x" => 1351708200000, "y" => 14300),
        array("x" => 1354300200000, "y" => 12300),
        array("x" => 1356978600000, "y" => 8300),
        array("x" => 1359657000000, "y" => 6300)
    );

    $dataPoints4 = array(
        array("x" => 1330540200000, "y" => 1700),
        array("x" => 1333218600000, "y" => 2600),
        array("x" => 1335810600000, "y" => 1000),
        array("x" => 1338489000000, "y" => 1400),
        array("x" => 1341081000000, "y" => 900),
        array("x" => 1343759400000, "y" => 1000),
        array("x" => 1346437800000, "y" => 1200),
        array("x" => 1349029800000, "y" => 5000),
        array("x" => 1351708200000, "y" => 1300),
        array("x" => 1354300200000, "y" => 2300),
        array("x" => 1356978600000, "y" => 2800),
        array("x" => 1359657000000, "y" => 1300)
    );
?>

<script type="text/javascript">

    $(function () {
       var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Annual Expenses"
            },
            animationEnabled: true,
            axisY: {
                includeZero: false,
                prefix: "$ "
            },
            toolTip: {
                shared: true,
                content: "<span style='\"'color: {color};'\"'><strong>{name}</strong></span> <span style='\"'color: dimgrey;'\"'>${y}</span> "
            },
            legend: {
                fontSize: 13
            },
            data: [
            {
                type: "splineArea",
                showInLegend: true,
                name: "Salaries",
                markerSize: 0,
                color: "rgba(54,158,173,.6)",
                xValueType: "dateTime",                
                dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
            },
            {
                type: "splineArea",
                showInLegend: true,
                name: "Office Cost",
                markerSize: 0,
                color: "rgba(134,180,2,.7)",
                xValueType: "dateTime",
                dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
            },
            {
                type: "splineArea",
                showInLegend: true,
                name: "Entertainment",
                markerSize: 0,
                color: "rgba(194,70,66,.6)",
                xValueType: "dateTime",
                dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
            },
            {
                type: "splineArea",
                showInLegend: true,
                markerSize: 0,
                color: "rgba(127,96,132,.6)",
                name: "Maintenance",
                xValueType: "dateTime",
                dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
            }

            ]
        });

        chart.render();
    });
</script>

<?php include '../footer.php'; ?>