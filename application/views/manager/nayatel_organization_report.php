<!DOCTYPE html> 
  <head><meta charset="euc-kr"> 
  <title>Nayatel Values Assessmnet Report</title>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
</head> 
<body>
					<table>
        
   <div class="d-flex flex-nowrap">
       <tr>
<td> <h2> <div class="order-1 p-2">Full Name:</div></h2></td>
<td> <h2> <div class="order-3 p-2">Department:</div></h2></td>
<td> <h2> <div class="order-2 p-2">Total Number Of Employees</div></h2></td>
<td> <h2> <div class="order-1 p-2">Organization</div></h2></td></tr>
</div>

<div class="d-flex flex-nowrap">
 <tr><td> <div class="order-3 p-2"><?php echo $manager_dashboard_data['first_name'];echo $manager_dashboard_data['last_name'];?></div>
  </td>
  <td> <div class="order-3 p-2"><?php echo $manager_dashboard_data['department'];?></div>
  </td>
 <td> <div class="order-2 p-2"><?php echo $total;?></div></td>
 <td> <div class="order-1 p-2"><?php echo "Nayatel";?></div></td></tr>
</div>

   </table>	
	
<figure class="highcharts-figure">
    <div id="container"></div>
    <!-- <h6 align="justify" class="highcharts-description">-->
    <!--    ? Person is easy-going, non-competitive, do not have urge to go ahead, and set easily reached goals. ? person prefer stable work, dislike to take initiatives/start new activities ? Values order, structure, predictability and has difficult to new and sudden situations. ? Has low level of energy and less effective in pressured situation ? Prefer to work alone and avoid leadership positions. ? Inability to cope with different activities at once. ? Not interested in marketing, negotiating and influencing people. ? Individual feel awkward and lack confidence in social situations.-->
    <!--</h6>-->
    <!--<?php echo "<br>";?>-->
           
    <!--<p class="highcharts-description">-->
    
    <!--</p>-->
</figure>

<script>



var jsonData = $.ajax({ 
      
        url: "https://10-yards.com/manager/login/get_nayatel_organization_report/", 
          dataType: "json", 
           type:'GET',
           data:data,
       async: false ,   
    cache: false,
    
   
    success: function(data) {
        //alert(data);
         var imgUrl = 'https://10-yards.com/uploads/pdf/user_reports.jpg' + data;
    }
          
          });
          
          
var data = jsonData.responseJSON;
//debugger;

var Honesty = [];
var Excellence=[];
var Service=[];
var Respect=[];
var Learning=[];
var Innovation=[];
var Simplicity=[];

Honesty = data.Honesty;
//alert(Energy_and_drive);

Excellence = data.Excellence;
Service = data.Service;
Respect = data.Respect;
Learning = data.Learning;


Innovation = data.Innovation;
Simplicity = data.Simplicity;
//debugger;
Highcharts.chart('container', {
    chart: {
        type: 'column',
         spacingBottom: 5,
        spacingTop: 200,
        spacingLeft: 10,
        spacingRight: 10,
        // Explicitly tell the width and height of a chart
        width: null,
        height: null
    },
   
    title: {
        text: 'Organization Values Assessment',
         align: 'top',
            y:-140,
             x:280
    },
    accessibility: {
        description: ''
    },
    
    plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }],
        tooltip: {
            valueSuffix: '%'
        },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Nayatel Values Assessment','Honesty','Excellence','Service','Respect','Learning','Innovation','Simplicity'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: '',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' %'
    },
    plotOptions: {
        column: {
            dataLabels: {
                enabled: true
            }
        }
    },
    colors:['#008080'],
  
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
         width: 250,
        itemWidth: 250,
        x: -300,
        y: -100,
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Honesty',
        data: [Honesty]
        
    },{
        name: 'Excellence',
        data: [Excellence]
        
    },{
        name: 'Service',
        data: [Service]
        
    },{
        name: 'Respect',
        data: [Respect]
        
    },{
        name: 'Learning',
        data: [Learning]
        
    },{
        name: 'Innovation',
        data: [Innovation]
        
    },{
        name: 'Simplicity',
        data: [Simplicity]
        
    }]
});
//debugger;
</script>
<style>
    
    .highcharts-figure, .highcharts-data-table table {
    min-width: 310px; 
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}



.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

</style>



 
					 
  </body> 
</html>