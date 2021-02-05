<!DOCTYPE html>
  <head><meta charset="euc-kr">
  <title>Manager Dashboard</title>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<style>

   .highcharts-figure, .highcharts-data-table table {
    min-width: 320px;
    max-width: 660px;
    margin: 1em auto;
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

</head>
<body>
<figure class="highcharts-figure">
    <div id="container" style="width: 45%; height: 300px;display: inline-block;"></div>
    <div id="container2" style="width: 45%; height: 300px;display: inline-block;"></div>

     <div id="container3" style="width: 45%; height: 300px;display: inline-block;"></div>
    <div id="container4" style="width: 45%; height: 300px;display: inline-block;"></div>

    <!--<div id="container"></div>-->
    <!--<p class="highcharts-description">-->

    <!--</p>-->
</figure>

<script>
var jsonData = $.ajax({

        url: "<?php echo base_url(); ?>" + "/manager/login/get_dashboard_charts_data/",
          dataType: "json",
           type:'GET',
           data:data,
       async: false ,
    cache: false,


    success: function(data) {
        //alert(data);
         var imgUrl = "<?php echo base_url(); ?>" + '/uploads/pdf/user_reports.jpg' + data;
    }

          });


var data = jsonData.responseJSON;
//debugger;

var total_employees = [];
var work_completed_test=[];
var nayatel_completed_test=[];
var personal_completed_test=[];
// var incomplte_test=[];
// var pending_test=[];
var cultural_completed_test=[];
var female=[];
var male=[];
var other_gender=[];
var marketing=[];
var finance=[];
var hr_production=[];
var supply_chain_management=[];
var software_engineering=[];
var computer_science=[];
var management=[];
var engineering=[];
var other_department=[];


var department=[];
var age=[];
var first_age_comparison=[];
var second_age_comparison=[];
var third_age_comparison=[];
var fourth_age_comparison=[];

var work_completed_test=[];
var nayatel_completed_test=[];
var personal_completed_test=[];
var cultural_completed_test=[];
var not_yet_attempted_work_personality=[];
var incomplete_work_personality_test=[];
var not_yet_attempted_nayatel_values=[];
var incomplete_nayatel_values=[];
var not_yet_attempted_personal_values=[];
var incomplete_personal_values=[];
var not_yet_attempted_cultural_sacn_values=[];
var incomplete_cultural_sacn_values=[];
//debugger;
total_employees = data.total_employees;
//alert(Energy_and_drive);
work_completed_test = data.work_completed_test;
nayatel_completed_test = data.nayatel_completed_test;
personal_completed_test = data.personal_completed_test;
//incomplte_test = data.incomplte_test;


//pending_test = data.pending_test;
cultural_completed_test = data.cultural_completed_test;



male = data.male;
female = data.female;
other_gender=data.other_gender;


marketing=data.marketing;
finance=data.finance;
hr_production=data.hr_production;
supply_chain_management=data.supply_chain_management;
software_engineering=data.software_engineering;
computer_science=data.computer_science;
management=data.management;
engineering=data.engineering;
other_department=data.other_department;


first_age_comparison=data.first_age_comparison;
second_age_comparison=data.second_age_comparison;
third_age_comparison=data.third_age_comparison;
fourth_age_comparison=data.fourth_age_comparison;



work_completed_test=data.work_completed_test
nayatel_completed_test=data.nayatel_completed_test;
personal_completed_test=data.personal_completed_test;
cultural_completed_test=data.cultural_completed_test;
not_yet_attempted_work_personality=data.not_yet_attempted_work_personality;
incomplete_work_personality_test=data.incomplete_work_personality_test;
not_yet_attempted_nayatel_values=data.not_yet_attempted_nayatel_values;
incomplete_nayatel_values=data.incomplete_nayatel_values;
not_yet_attempted_personal_values=data.not_yet_attempted_personal_values;
incomplete_personal_values=data.incomplete_personal_values;
not_yet_attempted_cultural_sacn_values=data.not_yet_attempted_cultural_sacn_values;
incomplete_cultural_sacn_values=data.incomplete_cultural_sacn_values;

//debugger;
Highcharts.chart('container', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Dashboard Data'
    },
    subtitle: {
        text: ''
    },

    accessibility: {
        announceNewData: {
            enabled: true
        },
        point: {
            valueSuffix: '%'
        }
    },

    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f}%'
            }
        }
    },
credits: {
    enabled: false
},
    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: "Dahboard Data",
            colorByPoint: true,
            data: [
                {
                    name: "Total Employees",
                    y: total_employees,
                    drilldown: "total_employees"
                },


                {
                    name: "Work Completed Test",
                    y: work_completed_test,
                    drilldown: "work_completed_test"
                },
                {
                    name: "Nayatel Completed Test",
                    y: nayatel_completed_test,
                    drilldown: "nayatel_completed_test"
                },
                {
                    name: "Personal Completed Test",
                    y: personal_completed_test,
                    drilldown: "personal_completed_test"
                },
                {
                    name: "Cultural Completed Test",
                    y: cultural_completed_test,
                    drilldown: "cultural_completed_test"
                },
                {
                    name: "Not Yet Attempted Work Test",
                    y: not_yet_attempted_work_personality,
                    drilldown: "not_yet_attempted_work_personality"
                },
                {
                    name: "Incomplete Work Test",
                    y: incomplete_work_personality_test,
                    drilldown: "incomplete_work_personality_test",
                },
                {
                    name: "Not Yet Attempted Nayatel",
                    y: not_yet_attempted_nayatel_values,
                    drilldown: "not_yet_attempted_nayatel_values"
                },
                {
                    name: "Incomplete Nayatel Test",
                    y: incomplete_nayatel_values,
                    drilldown: "incomplete_nayatel_values"
                },
                {
                    name: "Not Yet Attempted Personal",
                    y: not_yet_attempted_personal_values,
                    drilldown: "not_yet_attempted_personal_values"
                },
                {
                    name: "Incomplete Personal Values",
                    y: incomplete_personal_values,
                    drilldown: "incomplete_personal_values"
                },
                {
                    name: "Not Yet Attempted Cultural Scan Values",
                    y: not_yet_attempted_cultural_sacn_values,
                    drilldown: "not_yet_attempted_cultural_sacn_values"
                },
                {
                    name: "Incomplete Cultural Sacn Values",
                    y: incomplete_cultural_sacn_values,
                    drilldown: "incomplete_cultural_sacn_values",
                }
            ]
        }
    ],
    drilldown: {

        series: [{
        name: 'total_employees',
        data: [total_employees]

    },
    {
        name: 'work_completed_test',
        data: [work_completed_test]

    },{
        name: 'nayatel_completed_test',
        data: [nayatel_completed_test]

    },{
        name: 'personal_completed_test',
        data: [personal_completed_test]

    },{
        name: 'cultural_completed_test',
        data: [cultural_completed_test]

    },


    {
        name: 'not_yet_attempted_work_personality',
        data: [not_yet_attempted_work_personality]

    },


    {
        name: 'incomplete_work_personality_test',
        data: [incomplete_work_personality_test]

    },{
        name: 'not_yet_attempted_nayatel_values',
        data: [not_yet_attempted_nayatel_values]

    },{
        name: 'incomplete_nayatel_values',
        data: [incomplete_nayatel_values]

    },{
        name: 'not_yet_attempted_personal_values',
        data: [not_yet_attempted_personal_values]

    },{
        name: 'incomplete_personal_values',
        data: [incomplete_personal_values]

    },

    {
        name: 'not_yet_attempted_cultural_sacn_values',
        data: [not_yet_attempted_cultural_sacn_values]

    },{
        name: 'incomplete_cultural_sacn_values',
        data: [incomplete_cultural_sacn_values]

    }

    ]

            }


});
// 2nd chart
Highcharts.chart('container2', {
    title: {
        text: 'Gender Wise'
    },
    xAxis: {
        categories: ['Male', 'Female', 'Other']
    },
     accessibility: {
        announceNewData: {
            enabled: true
        },
        point: {
            valueSuffix: '%'
        }
    },
    labels: {
        items: [{
            html: '',
            style: {
                left: '50px',
                top: '18px',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'black'
            }
        }]
    },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f}%'
            }
        }
    },
    tooltip: {
        pointFormat: '<b>{point.y:.1f} %</b>'
    },
credits: {
    enabled: false
},
    series: [{
        type: 'pie',
        name: '',
        data: [{
            name: 'Male',
            y: male,
            color: Highcharts.getOptions().colors[0] // Jane's color
        }, {
            name: 'Female',
            y: female,
            color: Highcharts.getOptions().colors[1] // John's color
        }, {
            name: 'other_gender',
            y: other_gender,
            color: Highcharts.getOptions().colors[2] // Joe's color
        }],
        center: [100, 80],
        size: 100,
        showInLegend: false,
        dataLabels: {
            enabled: false
        }
    }]
});

// 3
Highcharts.chart('container3', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Department Wise Data'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    legend: {
        enabled: true
    },
    accessibility: {
        announceNewData: {
            enabled: true
        },
        point: {
            valueSuffix: '%'
        }
    },

    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f}%'
            }
        }
    },
credits: {
    enabled: false
},
    tooltip: {
        pointFormat: '<b>{point.y:.1f} %</b>'
    },
    series: [{
        name: 'marketing',
        data: [
            ['MARKETING', marketing],
            ['FINANCE', finance],
            ['HR PRODUCTION', hr_production],
            ['SUPPLY CHAIN MANAGEMENT', supply_chain_management],
            ['SOFTWARE ENGINEERING', software_engineering],
            ['COMPUTER SCIENCE', computer_science],
            ['MANAGEMENT', management],
            ['ENGINEERING', engineering],
            ['OTHER', other_department],

        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});

//debugger;

// 4

Highcharts.chart('container4', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Age Wise Data'
    },
    subtitle: {
        text: ''
    },

    accessibility: {
        announceNewData: {
            enabled: true
        },
        point: {
            valueSuffix: '%'
        }
    },

    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f}%'
            }
        }
    },
credits: {
    enabled: false
},
    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: "Age Wise Data",
            colorByPoint: true,
            data: [
                {
                    name: "15-25",
                    y: first_age_comparison,
                    drilldown: "first_age_comparison"
                },
                {
                    name: "26-35",
                    y: second_age_comparison,
                    drilldown: "second_age_comparison"
                },
                {
                    name: "36-45",
                    y: third_age_comparison,
                    drilldown: "third_age_comparison"
                },
                {
                    name: "46-70",
                    y: fourth_age_comparison,
                    drilldown: "fourth_age_comparison"
                },



            ]
        }
    ],
    drilldown: {

        series: [{
        name: 'first_age_comparison',
        data: [first_age_comparison]

    },
    {
        name: 'second_age_comparison',
        data: [second_age_comparison]

    },
     {
        name: 'third_age_comparison',
        data: [third_age_comparison]

    },{
        name: 'fourth_age_comparison',
        data: [fourth_age_comparison]

    }]

            }


});
//debugger;
</script>





  </body>
</html>
