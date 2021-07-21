<?php
include 'bdd.php';

$dataPoints1 = array(
    array("label"=> "2018", "y"=> 2500),
    array("label"=> "2019", "y"=> 2000),
    array("label"=> "2020", "y"=> 8000),
    array("label"=> "2021", "y"=> 7000)
);
$dataPoints2 = array(
    array("label"=> "2018", "y"=> 500),
    array("label"=> "2019", "y"=> 1400),
    array("label"=> "2020", "y"=> 8000),
    array("label"=> "2021", "y"=> 6500)
);
    
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
    
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2",
    title:{
        text: "How I Manage My Money"
    },
    axisY:{
        includeZero: true
    },
    legend:{
        cursor: "pointer",
        verticalAlign: "center",
        horizontalAlign: "right",
        itemclick: toggleDataSeries
    },
    data: [{
        type: "column",
        name: "Money Won",
        indexLabel: "{y}",
        yValueFormatString: "$#0.##",
        showInLegend: true,
        dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
    },{
        type: "column",
        name: "Money Loss",
        indexLabel: "{y}",
        yValueFormatString: "$#0.##",
        showInLegend: true,
        dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
    
function toggleDataSeries(e){
    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
    }
    else{
        e.dataSeries.visible = true;
    }
    chart.render();
}
    
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>      
 