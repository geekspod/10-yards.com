<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

         <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/TimeCircles.css">
         <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/readme.css">



            
</head>
<body>
	<h1 style="text-align: center;">Nayatel’s Value Statements</h1>

<div class="container" style="margin-top:20px;">

<div class="someTimer" data-timer="<?php echo $time['test_time_slot']*60;?>" style="width: 300px; height: 100px; "></div>
<hr>

<!--<button class="btn btn-success start">Start</button>-->
<!--<button class="btn btn-danger stop">Stop</button>-->

</div>

<!--extra three minutes-->
<div class="container" style="margin-top:20px;">

<div class="someTimer2" data-timer="180" style="width: 300px; height: 100px; "></div>
<hr>


</div>
<!--end-->

 
<section class="content-header" style="display:none">
	<div class="content-header-left">
    <?php echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>";?>
		<h1>Nayatel’s Value Statements</h1>
	</div>
	<!--<div class="content-header-right">-->
	<!--	<a href="<?php echo base_url(); ?>admin/categories/personal_values_assessment_questions_data" class="btn btn-primary btn-sm">Add New</a>-->
	<!--</div>-->
</section>
<form id="myform" class="myform" method="post" name="myform">

<div id="message"></div>
 <input type="hidden" class="email" name="email" value="<?php echo $dashboard_data['email'];?>"
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">


<section class="content">

  <div class="row">
    <div class="col-md-12">
    
        <?php
        if($this->session->flashdata('error')) {
            ?>
            <div class="callout callout-danger">
                <p><?php echo $this->session->flashdata('error'); ?></p>
            </div>
            <?php
        }
        if($this->session->flashdata('success')) {
            ?>
            <div class="callout callout-success">
                <p><?php echo $this->session->flashdata('success'); ?></p>
            </div>
            <?php
        }
        ?>

      <div class="box box-info">
        
        <div class="box-body table-responsive" style="width: 80%;
    margin: 0 auto">
            <!--<h1 style="    color: #4172a5">Questions</h1>-->
          <table id="checkboxes" class="table table-bordered table-striped">
			<thead>
			    <tr>
			        <th>SL</th>
			        <th>Items</th>
                    <th>Never</th>
                    <th>Rarely</th>
                    <th>Sometimes</th>
                    <th>Often</th>
                    <th>Always</th>
                    
                    <!-- <th>Add Score</th> -->
			    </tr>
			</thead>
            <tbody>
            	<?php
                $i=0;
                if (!empty($nayatel_value_statements)){
            	foreach ($nayatel_value_statements as $row) {
            		$i++;
            		?>
					<tr>
	                    <td><?php echo $i; ?></td>
	                    <td class="q_name"><?php echo $row['name']; ?></td>
                        


	                    <input type="hidden" value="<?php echo $row['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
	                     <!--<input type="hidden" value="<?php echo $row['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
                        <!-- <input type='hidden' value='0' name='checkbox[]'> -->
                        
                        <td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
 

  <?php
  $count_total_uploads=$count;
  if($i == $count_total_uploads){
break;
                    }
                }
            }
            	?>
                        </tr>
            		
            </tbody>
          </table>
          <?php 
           if($i == '70'){

                    
                    ?>
                    <button  id="submit" type="submit" name="submit" value="Submit" onclick="return submitForm()" class="btn btn-primary sb-btn loginbtn" style="width:16%; margin-left: 430px;
    margin-top: 25px">Submit</button>
    
    <!--<button type="button" class="btn btn-primary"  id="Next"  name="Next" value="Next" onclick="return save_data()"  style="width:9%; margin-left:0px;-->
    <!--margin-top: 25px">Next</button>-->

    
   
    <button  id="save" type="submit" name="save" value="Save For Later"  onclick="return save_for_later()" class="btn btn-primary sb-btn loginbtn " style="width:16%; margin-left:0px;
    margin-top: 25px">Save For Later</button>
    <!--                <input id="submit" type="submit" name="submit" value="Submit" onclick="return submitForm()" style="width:16%; margin-left: 430px;-->
    <!--margin-top: 25px" />-->
    </form>
 <div id="myResponse">
   
 </div>

                        
<?php 
}
?>
                  


	                 
                       
	               
        </div>
      </div>
</section>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                Are you sure want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Modal -->
<div class="bs-example">
   
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn btn-primary">Instructions</button>
                    <!--<h5 class="modal-title">Instructions</h5>-->
                    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum id metus ac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet sagittis. In tincidunt orci sit amet.</p>
                </div>
                <div class="modal-footer">
                 <a href="<?php echo base_url();?>login/dashboard">   <button type="button" class="btn btn-secondary" >Save For Later</button></a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Proceed</button>
                </div>
            </div>
        </div>
    </div>
    
   
              


<!--end-->
<!--06-01-2020-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>-->
<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!--end-->

<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<script src="https://momentjs.com/downloads/moment-with-locales.js"></script>

<script src="<?php echo base_url(); ?>public/js/TimeCircles.js" type="text/javascript"></script>

<script>
function QueryViewModel(){

var self = this;
self.queuedValues=ko.observableArray([]);
}
</script>


<script>
$( document ).ready(function() {
    $('input[type="checkbox"]').on('change', function() {
      var checkedValue = $(this).prop('checked');
        $(this).closest('tr').find('input[type="checkbox"]').each(function(){
           $(this).prop('checked',false);
        });
        $(this).prop("checked",checkedValue);

    });
});
</script>
<script>
     function save_data() {
     
      if (!$("#checkSurfaceEnvironment-1").is(":checked")) {
    // do something if the checkbox is NOT checked
}
//alert(checkSurfaceEnvironment);
 }
    
</script>
<script>
var current_time_value=[];
    current_time_value=((new Date(performance.timing.connectStart)));

</script>
<script>
  
 function submitForm2() {
var atLeastOneIsChecked = $('input[name="checkbox[]"]:checked').length == 10;
//alert(atLeastOneIsChecked);
}
</script>
<script>

var timeCircles = $(".someTimer").TimeCircles({ 
                   
    "time": {
        "Days": {            
            "text": "Days",
            "color": "#FFCC66",
            "show": false
        },
        "Hours": {
            "text": "Hours",
            "color": "#99CCFF",
            "show": false
        },
        "Minutes": {
            "text": "Minutes",
            "color": "#BBFFBB",
            "show": true
        },
        "Seconds": {
            "text": "Seconds",
            "color": "#FF9999",
            "show": true,
            
        }
    }
    
  });

            // Fade in and fade out are examples of how chaining can be done with TimeCircles
            $(".fadeIn").click(function() {
                timeCircles.elements.last().fadeIn();
            });
            $(".fadeOut").click(function() {
                timeCircles.elements.last().fadeOut();
            });

            // Start and stop are methods applied on the public TimeCircles instance
            $(".startTimer").click(function() {
                $(".someTimer").eq(1).TimeCircles().start();
            });
            $(".stopTimer").click(function() {
                $(".someTimer").eq(1).TimeCircles().stop();
                
            });
            
        
 
$(".start").click(function(){ $(".someTimer").TimeCircles().start(); });
$(".stop").click(function(){ $(".someTimer").TimeCircles().stop(); });

setTimeout(function () {
       window.location.href = "https://10-yards.com/login/dashboard"; //will redirect to your blog page (an ex: blog.html)
    }, 900000); //will call the function after 2 secs.
 $(".someTimer2").TimeCircles().destroy();

time1 = $(".someTimer").TimeCircles().getTime();
//alert(time1);
//time1=time1-01;

// var minutesToAdd=2;
// var currentDate = new Date();




//var values=(nHrs +':'+ nMin);
    
     values= moment().format("H:S");
     var travelTime = moment().add(15, 'minutes').format('h:mm');

// current_time_value.setMinutes( current_time_value.getMinutes() + 15 );

// alert(current_time_value); 


// var minutesToAdd=2;
// var currentDate = new Date();
// var futureDate = new Date(currentDate.getTime() + minutesToAdd*60000);

          
//899.995
			 if(time1 < 01)
				{
				   // alert("vdgdg") ;
					 $(".someTimer").TimeCircles().destroy();
					  //window.location.replace("https://10-yards.com/login/dashboard");
time2 = $(".someTimer").TimeCircles().getTime();
          alert( time1 );
 if(time2 < 01){
         //alert ('hy');
$(".someTimer").TimeCircles().destroy();
$(".someTimer").eq(1).TimeCircles().stop();
     

// second time
      
var timeCircles = $(".someTimer2").TimeCircles({ 
                   
    "time": {
        "Days": {            
            "text": "Days",
            "color": "#FFCC66",
            "show": false
        },
        "Hours": {
            "text": "Hours",
            "color": "#99CCFF",
            "show": false
        },
        "Minutes": {
            "text": "Minutes",
            "color": "#BBFFBB",
            "show": true
        },
        "Seconds": {
            "text": "Seconds",
            "color": "#FF9999",
            "show": true,
            
        }
    }
    
  });
   $(".someTimer").TimeCircles().destroy();
  $(".someTimer2").eq(1).TimeCircles().start();
  
 
time2 = $(".someTimer2").TimeCircles().getTime();
//alert(time2);
//01
if(time2 < 01)
				{
			//	alert("vdgdg") ;
			 $(".someTimer").TimeCircles().destroy();
				     $(".someTimer2").TimeCircles().destroy();
				    window.location.replace("https://10-yards.com/login/dashboard");
				    }

 
 }   }
</script>
<script type="text/javascript">
 

$( "#checkboxes tbody tr" ).on( "click", function() {
  var oDate = new Date();
    var nHrs = oDate.getHours();
    var nMin = oDate.getMinutes();
    var nDate = oDate.getDate();
    var nMnth = oDate.getMonth();
    var nYear = oDate.getFullYear();

   
var values20=nHrs + ':' + nMin;
   

var now = new Date(Date.now());
var formatted = now.getHours() + ":" + now.getMinutes();
      
     
      alert(formatted);//5:31
      // alert(values20);   
      alert(travelTime);//05:41
    // rows which are clicked
   
 //alert(current_time_value);
 if(formatted > travelTime || formatted==travelTime){
     
    $(".someTimer").TimeCircles().destroy();
$(".someTimer").eq(1).TimeCircles().stop();
     

// second time
      
var timeCircles = $(".someTimer2").TimeCircles({ 
                   
    "time": {
        "Days": {            
            "text": "Days",
            "color": "#FFCC66",
            "show": false
        },
        "Hours": {
            "text": "Hours",
            "color": "#99CCFF",
            "show": false
        },
        "Minutes": {
            "text": "Minutes",
            "color": "#BBFFBB",
            "show": true
        },
        "Seconds": {
            "text": "Seconds",
            "color": "#FF9999",
            "show": true,
            
        }
    }
    
  });
   $(".someTimer").TimeCircles().destroy();
  $(".someTimer2").eq(1).TimeCircles().start();
  
 
time2 = $(".someTimer2").TimeCircles().getTime();
//alert(time2);
//01
if(time2 < 01)
				{
			//	alert("vdgdg") ;
			 $(".someTimer").TimeCircles().destroy();
				     $(".someTimer2").TimeCircles().destroy();
				    window.location.replace("https://10-yards.com/login/dashboard");
				    }

 
 } 
 

// var dt = new Date();
// var time = dt.getHours() + ":" + dt.getMinutes();
// alert((time));



			


var currentRows=[];
currentRows = $(this).closest('tr').find('input[type="checkbox"]:checked').val();
        
  // alert(currentRows);
// var arr = [];
// $('input.checkbox:checkbox:checked').each(function () {
//     arr.push($(this).val());
// });

  
//   var selected = [];
// $('#checkboxes input[type="hidden"]').each(function() {
//     selected.push($(this).attr('value'));
// });

var values=[];
var values1=[];
var values3=[];

 
    
var name = $(this).closest('tr').find('.q_name').text();
var dimensions_name = $(this).closest('tr').find('input[type="hidden"]').val();
 //var questions_id = $(this).closest('tr').find('input[type="hidden"]').val();
// alert(dimensions_name);
 values.push(currentRows);
// alert(values);
values1.push(name);
// alert(values1);
 values3.push(dimensions_name);
//values3.push(questions_id);
// alert(values2);

// length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
      


 
});


 function submitForm() {
// var form = document.myform;

// var dataString = $(form).serialize();
//alert(values);
// var length=[];
//   length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
         //alert(length);
//alert(values);
//alert(values1);
//alert(values3);


//alert(arr);  
//alert(selected); 

time = $(".someTimer").TimeCircles().getTime();
var length=values.length;
  //alert(length);


//alert(time);

$.ajax({
    type:'POST',
    url:'https://10-yards.com/login/nayatel_value_statements_data',
    data: {"checkbox": values,"dimensions_name":values3,"name":values1,"time":time,"length":length},
     dataType: 'json',
  
        success: function(data){
      //  var len = data.length;
        //showChecked();
        // var length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
       //  alert(length);
      // alert(len);
       if(length == 10){
         // Read values
         alert('are you sure to submit?');
         //console.log(data);
          window.location.replace("https://10-yards.com/login/dashboard");
       // window.location.href="<?php echo base_url();?>login/dashboard";
 
       }
       else{
           //alert(len);
         //  $('#myResponse').html(data);
          
           alert("All Questions Are Mandatory.");
       }
       
       
function showChecked(){
  var length=document.getElementById("checkboxes").textContent = "" + document.querySelectorAll("input:checked").length;
  //alert(length);
}
document.querySelectorAll("input[name=checkbox]").forEach(i=>{
 i.onclick = function(){
  showChecked();
 }
});
       

    }
});

return false;
}
     </script>
 
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>

<script type="text/javascript">

  
     </script>

<script>
var values=[];
var values1=[];
var values2=[];
var values3=[];

$( "#checkboxes tbody tr" ).on( "click", function() {
        var currentRows = $(this).closest('tr').find('input[type="checkbox"]:checked').val();
 var name = $(this).closest('tr').find('.q_name').text();
 
//  var dimensions_name = $(this).closest('tr').find('input[type="hidden"]').val();
 var questions_id = $(this).closest('tr').find('input[type="hidden"]').val();
values.push(currentRows);
values1.push(name);
// values2.push(dimensions_name);
values3.push(questions_id);
 
});
function save_for_later(){
    //  alert(values);
    //   alert(values1);
         alert(values3);
    //"dimensions_name":values2,
    // ajax
    var length=[];
       length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
      // alert(length);
       
       
    $.ajax({
    type:'POST',
    url:'https://10-yards.com/login/save_for_later',
    data: {"checkbox": values,"name":values1,"questions_id":values3,"length":length},
     dataType: 'json',
  
      
        success: function(data){
     
        var length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
       // alert('success');
        if(length>0){
              window.location.href = "https://10-yards.com/login/dashboard"; 
    //     var checkbox = data[0].values;
    //   //  var dimensions_name = data[0].values1;
    //      var name = data[0].values2;
    //      alert(checkbox);
 
        //  $('#values').text(values);
        //  $('#dimensions_name').text(values1);
        //  $('#name').text(values2);
        }
         //alert(length);
}
});

return false;
}
 

</script>
</body>
</html>