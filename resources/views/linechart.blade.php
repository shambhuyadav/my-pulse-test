

<style>
    #chartdiv__ {
      position: relative !important;  
      width: 230px;
      height: 200px;
    }

    .hider{
    position: absolute;
    background: white;
    width: 100%;
    height: 30px;
    top: 19px;
    z-index: 99999;
 }
    </style>  
     <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    
    <!-- Chart code -->
    <script>
    am5.ready(function() {
    
    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("chartdiv__");
    
    
    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
      am5themes_Animated.new(root)
    ]);
    
    
    // Create chart
    // https://www.amcharts.com/docs/v5/charts/xy-chart/
    var chart = root.container.children.push(am5xy.XYChart.new(root, {
      panX: true,
      panY: true,
      wheelX: "panX",
      wheelY: "zoomX",
      pinchZoomX: true
    }));
    
    
    chart.set("colors", am5.ColorSet.new(root, {
      step: 2,
      colors: [
        am5.color(0x147ad6),
        am5.color(0x78d1de),
        am5.color(0x79d2de),
        am5.color(0xF28F6B),
        am5.color(0xA95A52),
        am5.color(0xE35B5D),
        am5.color(0x78d1de)
      ]
    }))
    
    
    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
    var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
      behavior: "none"
    }));
    cursor.lineY.set("visible", false);
    
    
    // The data
    var data = [{
      "year": "April 15",
      "cars": 1298,
      "motorcycles": 680
    }, {
      "year": "April 16",
      "cars": 100,
      "motorcycles": 664,
    }, {
      "year": "April 17",
      "cars": 1246,
      "motorcycles": 1000,
    }, {
      "year": "April 18",
      "cars": 200,
      "motorcycles": 697,
     
    }
    ];
    
    
    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
      categoryField: "year",
      startLocation: 0.5,
      endLocation: 0.5,
      renderer: am5xy.AxisRendererX.new(root, {
        minorGridEnabled: true,
        minGridDistance: 70
      }),
      tooltip: am5.Tooltip.new(root, {})
    }));
    
    xAxis.data.setAll(data);
    
    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
      renderer: am5xy.AxisRendererY.new(root, {})
    }));
    
    // Add series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    
    function createSeries(name, field) {
      var series = chart.series.push(am5xy.SmoothedXLineSeries.new(root, {
        name: name,
        xAxis: xAxis,
        yAxis: yAxis,
        valueYField: field,
        categoryXField: "year",
        stacked: true,
        stroke: am5.color(0x79d2de00),
        tooltip: am5.Tooltip.new(root, {
          pointerOrientation: "horizontal",
          labelText: "[bold]{name}[/]\n{categoryX}: {valueY}"
        })
      }));
    
      series.strokes.template.setAll({
        strokeWidth: 0,
        strokeOpacity: 0,
        shadowBlur: 2,
        shadowOffsetX: 2,
        shadowOffsetY: 2,
        shadowColor: am5.color(0x79d2de00),
        shadowOpacity: 0.1
      })
    
      series.fills.template.setAll({
        fillOpacity: 1,
        visible: true,
    
        fillPattern: am5.GrainPattern.new(root, {
          maxOpacity: 0,
          density: 0,
          colors: [am5.color(0x000000), am5.color(0x000000), am5.color(0x000000)]
        })
    
      });
    
      series.data.setAll(data);
      series.appear(1000);
    }
    
    createSeries("Cars", "cars");
    createSeries("Motorcycles", "motorcycles");
    createSeries("Bicycles", "bicycles");
    
    // Add scrollbar
    // https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
    chart.set("scrollbarX", am5.Scrollbar.new(root, {
      orientation: "horizontal"
    }));
    
    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    chart.appear(1000, 100);
    
    }); // end am5.ready()
    </script>
    
    <!-- HTML -->
    <div id="chartdiv__">
    <div class="hider"></div>
    </div>
     
  


    
    