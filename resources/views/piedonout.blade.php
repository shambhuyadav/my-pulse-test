<canvas id="chartProgress" width="220px" height="200px"></canvas> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js" integrity="sha512-hZf9Qhp3rlDJBvAKvmiG+goaaKRZA6LKUO35oK6EsM0/kjPK32Yw7URqrq3Q+Nvbbt8Usss+IekL7CRn83dYmw==" crossorigin="anonymous"></script>      
<script>
     var chartProgress = document.getElementById("chartProgress");
        if (chartProgress) {
        var myChartCircle = new Chart(chartProgress, {
            type: 'doughnut',
            data: {
            labels: ["India", 'null'],
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#5283ff"],
                data: [40, 60]
            }]
            },
            plugins: [{
            beforeDraw: function(chart) {
                var width = chart.chart.width,
                    height = chart.chart.height,
                    ctx = chart.chart.ctx;
            
                ctx.restore();
                var fontSize = (height / 150).toFixed(2);
                ctx.font = fontSize + "em sans-serif";
                ctx.fillStyle = "#9b9b9b";
                ctx.textBaseline = "middle";
            
                var text = "40%",
                    textX = Math.round((width - ctx.measureText(text).width) / 2),
                    textY = height / 2;
            
                ctx.fillText(text, textX, textY);
                ctx.save();
            }
        }],
            options: {
            legend: {
                display: false,
            },
            responsive: true,
            maintainAspectRatio: false,
            cutoutPercentage: 80
            }

        });
    }
</script>

