<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>
<?php include '../content.php'; ?>
<h1>StripLines</h1>
<div id="chartContainer"></div>


<script type="text/javascript">

$(function () {
    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "light2",
        animationEnabled: true,
        title: {
            text: "Stripline on  Axis X"
        },
        axisX: {
            stripLines: [
            {
                value: 1940,
                label: "1940",
                showOnTop: true,
                labelPlacement: "outside"
            }
            ],
            valueFormatString: "####"
        },
        data: [
        {
            type: "splineArea",
            xValueFormatString: "####",
            dataPoints: [
                { x: 1910, y: 5 },
                { x: 1920, y: 9 },
                { x: 1930, y: 17 },
                { x: 1940, y: 32 },
                { x: 1950, y: 22 },
                { x: 1960, y: 14 },
                { x: 1970, y: 25 },
                { x: 1980, y: 18 },
                { x: 1990, y: 20 }
            ]
        }
        ]
    });
    chart.render();
});
</script>

<?php include '../footer.php'; ?>