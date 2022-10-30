<?php include '../header.php'; ?>
<?php include '../sidebar.php'; ?>
<?php include '../content.php'; ?>
<h1>Export Chart as Image</h1>
<div id="chartContainer"></div>

<script type="text/javascript">
$(function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Top Categories of New Year's Resolution"
            },
            exportFileName: "Pie Chart",
            exportEnabled: true,
            animationEnabled: true,
            legend: {
                verticalAlign: "bottom",
                horizontalAlign: "center"
            },
            data: [
            {
                type: "pie",
                showInLegend: true,
                toolTipContent: "{legendText}: <strong>{y}%</strong>",
                indexLabel: "{label} {y}%",
                dataPoints: [
                    { y: 35, legendText: "Health", label: "Health" },
                    { y: 20, legendText: "Finance", label: "Finance" },
                    { y: 18, legendText: "Career", label: "Career" },
                    { y: 15, legendText: "Education", label: "Education" },
                    { y: 5, legendText: "Family", label: "Family" },
                    { y: 7, legendText: "Real Estate", label: "Real Estate" }
                ]
            }
            ]
        });
        chart.render();
    });
</script>

<?php include '../footer.php'; ?>