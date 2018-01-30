<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="http://static.tumblr.com/1ccbc9v/sCFnc0fp4/apple-touch-icon-72x72.png">
	
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/component.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/animated-bg.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Ratio Analytics Temp Page</title>


<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>

</head>

<body>
    <body class="p-demo p-index">
        <header class="cd-header">
		<div class="cd-logo"><a href="index.php"><img src="img/illu.jpg" alt="Logo"></a></div>

		<div class="cd-logo"><!-- ... --></div>
 
	<nav>
		<ul class="cd-secondary-nav">
		</ul>
	</nav>

	</header>

	<div id="large-header" class="large-header">
		<canvas id="demo-canvas"></canvas>
		<h1 class="main-title">Ratio Analytics Temp Page</span></h1>
	</div>


<div class="row">

<div class="column" style="background-color:#EEEEEA ;">
<div class="w3-bar w3-black">
  <button class="w3-bar-item w3-button" onclick="openratio('ratioa')">ratioa</button>
  <button class="w3-bar-item w3-button" onclick="openratio('ratiob')">ratiob</button>
  <button class="w3-bar-item w3-button" onclick="openratio('ratioc')">ratioc</button>
</div>

<div id="ratioa" class="w3-container ratio">
  <h2>ratioa</h2>
  <p>Some info can go here.</p>
</div>

<div id="ratiob" class="w3-container ratio" style="display:none">
  <h2>ratiob</h2>
  <p>Table can go here?</p> 
</div>

<div id="ratioc" class="w3-container ratio" style="display:none">
  <h2>ratioc</h2>
  <p>Other stuff can go here.</p>
</div>
</div>


<div class="column" style="background-color:#EEEEEA;">
<main id="more" class="cd-main-content">
		<div class="cd-container">
			<h1>LineChart Examples</h1>
			<section>
                <div id="i_linechart1" class="infoviz"></div>
                <div id="i_linechart2" class="infoviz"></div>
			</section>

		</div>
</div>

</div>

		<div class="footer">
			<div class="footer-content">
					<div class="footer-clmn1">© 2017 Designed and Developed by <a href="http://nourritureamende.blogspot.com">Austin Nguyen</a></div>
					<div class="footer-clmn2">Email: <a href="mailto:nguyenau@oregonstate.edu">nguyenau@oregonstate.edu</a></div>
			</div>
		</div>

	</main>
   

<script>
function openratio(ratio) {
    var i;
    var x = document.getElementsByClassName("ratio");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(ratio).style.display = "block";  
}
</script>
        <script src="./js/raphael.min.js"></script>
        <script id="seajsnode" src="./js/sea.min.js"></script>
        <script>
            (function () {
                'use strict';
                /*global seajs*/
                seajs.use([ './js/infoviz' ], function (InfoViz) {
                    var data = [], i, j, item;

                    // Global option overwrite.
                    InfoViz.global_option({
                        'layout': { 'background-color': '#FFF' }
                    });

                    // LineChart.
                    InfoViz.chart(
                        'i_linechart1',
                        'linechart',
                        {
                            'vertical_axis_name': 'Vertical',
                            'horizontal_axis_name': 'Horizontal',
                            'horizontal_field': 'F2',
                            'vertical_field': 'F1',
                            'tooltip_title': 'InfoViz {F2}, {F3}',
                            'tooltip_content': 'Tooltip: {F2}, {F3} | {F1}',
                            'data': {
                                'line1': {
                                    'name': 'Apple',
                                    'data': [
                                        { 'F1': 1,   'F2': 'A', 'F3': 3  },
                                        { 'F1': 42,  'F2': 'B', 'F3': 6  },
                                        { 'F1': 7,   'F2': 'C', 'F3': 9  },
                                        { 'F1': 110, 'F2': 'D', 'F3': 12 }
                                    ]
                                },
                                'line2': {
                                    'name': 'Microsoft',
                                    'data': [
                                        { 'F1': 13, 'F2': 'A', 'F3': 15 },
                                        { 'F1': 10, 'F2': 'B', 'F3': 12 },
                                        { 'F1': 72, 'F2': 'C', 'F3': 9  },
                                        { 'F1': 1,  'F2': 'D', 'F3': 3  },
                                        { 'F1': 4,  'F2': 'E', 'F3': 6  }
                                    ]
                                },
                                'line3': {
                                    'name': 'Amazon',
                                    'data': [
                                        { 'F1': 19, 'F2': 'A', 'F3': 15 },
                                        { 'F1': 20, 'F2': 'B', 'F3': 12 },
                                        { 'F1': 11, 'F2': 'D', 'F3': 3  },
                                        { 'F1': 42, 'F2': 'E', 'F3': 6  }
                                    ]
                                },
                                'line4': {
                                    'name': 'XYZ ratio',
                                    'data': [
                                        { 'F1': 29, 'F2': 'A', 'F3': 15 },
                                        { 'F1': 70, 'F2': 'B', 'F3': 12 },
                                        { 'F1': 42, 'F2': 'C', 'F3': 9  },
                                        { 'F1': 51, 'F2': 'D', 'F3': 3  },
                                        { 'F1': 22, 'F2': 'E', 'F3': 6  }
                                    ]
                                },
                                'line5': {
                                    'name': 'EXXON',
                                    'data': [
                                        { 'F1': 9,  'F2': 'A', 'F3': 15 },
                                        { 'F1': 90, 'F2': 'B', 'F3': 12 },
                                        { 'F1': 92, 'F2': 'C', 'F3': 9  },
                                        { 'F1': 52, 'F2': 'E', 'F3': 6  }
                                    ]
                                }
                            }
                        },
                        { 'legend': { 'margin-top': 0 } }
                    );

                    InfoViz.chart(
                        'i_linechart2',
                        'linechart',
                        {
                            'vertical_axis_name': 'Vertical',
                            'horizontal_axis_name': 'Horizontal',
                            'horizontal_field': 'F2',
                            'vertical_field': 'F1',
                            'tooltip_title': 'InfoViz {F2}, {F3}',
                            'tooltip_content': 'Tooltip: {F2}, {F3} | {F1}',
                            'data': {
                                'line1': {
                                    'name': 'Apple',
                                    'data': [
                                        { 'F1': 1,   'F2': 'A', 'F3': 3  },
                                        { 'F1': 42,  'F2': 'B', 'F3': 6  },
                                        { 'F1': 7,   'F2': 'C', 'F3': 9  },
                                        { 'F1': 110, 'F2': 'D', 'F3': 12 }
                                    ]
                                },
                                'line2': {
                                    'name': 'Microsoft',
                                    'data': [
                                        { 'F1': 13, 'F2': 'A', 'F3': 15 },
                                        { 'F1': 10, 'F2': 'B', 'F3': 12 },
                                        { 'F1': 72, 'F2': 'C', 'F3': 9  },
                                        { 'F1': 1,  'F2': 'D', 'F3': 3  },
                                        { 'F1': 4,  'F2': 'E', 'F3': 6  }
                                    ]
                                },
                                'line3': {
                                    'name': 'Bitcoin',
                                    'data': [
                                        { 'F1': 19, 'F2': 'A', 'F3': 15 },
                                        { 'F1': 20, 'F2': 'B', 'F3': 12 },
                                        { 'F1': 11, 'F2': 'D', 'F3': 3  },
                                        { 'F1': 42, 'F2': 'E', 'F3': 6  }
                                    ]
                                },
                                'line4': {
                                    'name': 'XYZ ratio',
                                    'data': [
                                        { 'F1': 29, 'F2': 'A', 'F3': 15 },
                                        { 'F1': 70, 'F2': 'B', 'F3': 12 },
                                        { 'F1': 42, 'F2': 'C', 'F3': 9  },
                                        { 'F1': 51, 'F2': 'D', 'F3': 3  },
                                        { 'F1': 22, 'F2': 'E', 'F3': 6  }
                                    ]
                                },
                                'line5': {
                                    'name': 'EXXON',
                                    'data': [
                                        { 'F1': 9,  'F2': 'A', 'F3': 15 },
                                        { 'F1': 90, 'F2': 'B', 'F3': 12 },
                                        { 'F1': 92, 'F2': 'C', 'F3': 9  },
                                        { 'F1': 52, 'F2': 'E', 'F3': 6  }
                                    ]
                                }
                            }
                        },
                        { 'legend': { 'margin-top': 0 }, 'linechart': { 'area-enabled': true } }
                    );

                            });
            }());
        </script>
    </body>
</html>