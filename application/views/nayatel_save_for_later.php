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


<section class="content container">

  <div class="row">
    <div class="col-lg-8">

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
          <table id="checkboxes" class="table table-responsive table-bordered table-striped">
			<thead>
			    <tr>
			        <th>SL</th>
			        <th>Statements</th>
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

            	$i++;
            		?>
					<tr>
	                    <td><?php echo "1"; ?></td>
	                    <td class="q_name"><?php echo $check_record_nayatel_save_for_later[0]['name']; ?></td>
                        <input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[0]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
	                     <!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[0]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
                        <td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[0]['value']==0 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[0]['value']==1 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[0]['value']==2 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[0]['value']==3 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[0]['value']==5 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                                            </tr>
                                            <!--2nd row-->


                                            <tr>
<td><?php echo "2"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[1]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[1]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[1]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[1]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[1]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[1]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[1]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[1]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

 <!--3-->
      <tr>
<td><?php echo "3"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[2]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[2]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[2]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[2]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[2]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[2]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[2]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[2]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--4-->

      <tr>
<td><?php echo "4"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[3]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[3]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[3]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[3]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[3]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[3]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[3]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[3]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--5-->


<tr>
<td><?php echo "5"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[4]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[4]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[4]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[4]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[4]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[4]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[4]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[4]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--6-->
     <tr>
<td><?php echo "6"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[5]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[5]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[5]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[5]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[5]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[5]['value']==2 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[5]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[5]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>
<!--7-->

<tr>
<td><?php echo "7"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[6]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[6]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[6]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[6]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[6]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[6]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[6]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[6]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--8-->
<tr>
<td><?php echo "8"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[7]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[7]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[7]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[7]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[7]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[7]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[7]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[7]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--9-->
<tr>
<td><?php echo "9"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[8]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[8]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[8]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[8]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[8]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[8]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[8]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[8]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>
<!--10-->
<tr>
<td><?php echo "10"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[9]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[9]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[9]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[9]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[9]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[9]['value']==2 ? 'checked' : '');?>
data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[9]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[9]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "11"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[10]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[10]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[10]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[10]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[10]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[10]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[10]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[10]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "12"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[11]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[11]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[11]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[11]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[11]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[11]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[11]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[11]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "13"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[12]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[12]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[12]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[12]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[12]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[12]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[12]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[12]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "14"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[13]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[13]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[13]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[13]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[13]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[13]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[13]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[13]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "15"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[14]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[14]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[14]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[14]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[14]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[14]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[14]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[14]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "16"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[15]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[15]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[15]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[15]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[15]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[15]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[15]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[15]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "17"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[16]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[16]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[16]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[16]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[16]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[16]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[16]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[16]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "18"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[17]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[17]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[17]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[17]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[17]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[17]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[17]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[17]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "19"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[18]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[18]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[18]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[18]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[18]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[18]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[18]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[18]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "20"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[19]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[19]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[19]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[19]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[19]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[19]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[19]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[19]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>
<!--21-->
<tr>
<td><?php echo "21"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[20]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[20]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[20]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[20]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[20]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[20]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[20]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[20]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "22"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[21]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[21]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[21]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[21]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[21]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[21]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[21]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[21]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "23"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[22]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[22]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[22]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[22]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[22]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[22]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[22]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[22]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "24"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[23]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[23]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[23]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[23]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[23]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[23]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[23]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[23]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "25"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[24]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[24]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[24]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[24]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[24]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[24]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[24]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[24]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "26"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[25]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[25]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[25]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[25]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[25]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[25]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[25]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[25]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "27"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[26]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[26]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[26]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[26]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[26]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[26]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[26]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[26]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "28"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[27]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[27]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[27]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[27]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[27]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[27]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[27]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[27]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "29"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[28]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[28]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[28]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[28]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[28]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[28]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[28]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[28]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "30"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[29]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[29]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[29]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[29]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[29]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[29]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[29]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[29]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "31"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[30]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[30]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[30]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[30]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[30]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[30]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[30]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[30]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "32"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[31]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[31]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[31]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[31]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[31]['value']==1 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[31]['value']==2 ? 'checked' : '');?>
  data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[31]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[31]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "33"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[32]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[32]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[32]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[32]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[32]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[32]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[32]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[32]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "34"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[33]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[33]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[33]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[33]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[33]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[33]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[33]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[33]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "35"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[34]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[34]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[34]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[34]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[34]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[34]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[34]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[34]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "36"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[35]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[35]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[35]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[35]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[35]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[35]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[35]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[35]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "37"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[36]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[36]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[36]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[36]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[36]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[36]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[36]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[36]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "38"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[37]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[37]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[37]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[37]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[37]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[37]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[37]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[37]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "39"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[38]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[38]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[38]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[38]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[38]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[38]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[38]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[38]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "40"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[39]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[39]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[39]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[39]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[39]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[39]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[39]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[39]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "41"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[40]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[40]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[40]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[40]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[40]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[40]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[40]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[40]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "42"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[41]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[41]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[41]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[41]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[41]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[41]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[41]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[41]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "43"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[42]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[42]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[42]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[42]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[42]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[42]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[42]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[42]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "44"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[43]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[43]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[43]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[43]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[43]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" "value="2" <?php if($check_record_nayatel_save_for_later[43]['value']=="2"){echo "checked";} ?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[43]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[43]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "45"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[44]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[44]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[44]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[44]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[44]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[44]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[44]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[44]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "46"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[45]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[45]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[45]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[45]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[45]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[45]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[45]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[45]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "47"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[46]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[46]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[46]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[46]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[46]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[46]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[46]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[46]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "48"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[47]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[47]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[47]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[47]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[47]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[47]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[47]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[47]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "49"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[48]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[48]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[48]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[48]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[48]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[48]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[48]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[48]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "50"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[49]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[49]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[49]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[49]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[49]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[49]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[49]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[49]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->
<tr>
<td><?php echo "51"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[50]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[50]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[50]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[50]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[50]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[50]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[50]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[50]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "52"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[51]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[51]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[51]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[51]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[51]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[51]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[51]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[51]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "53"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[52]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[52]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[52]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[52]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[52]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[52]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[52]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[52]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "54"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[53]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[53]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[53]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[53]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[53]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[53]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[53]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[53]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "55"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[54]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[54]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[54]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[54]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[54]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[54]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[54]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[54]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "56"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[55]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[55]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[55]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[55]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[55]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[55]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[55]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[55]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "57"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[56]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[56]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[56]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[56]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[56]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[56]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[56]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[56]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "58"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[57]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[57]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[57]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[57]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[57]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[57]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[57]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[57]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "59"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[58]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[58]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[58]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[58]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[58]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[58]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[58]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[58]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "60"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[59]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[59]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[59]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[59]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[59]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[59]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[59]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[59]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "61"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[60]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[60]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[60]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[60]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[60]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[60]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[60]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[60]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "62"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[61]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[61]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[61]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[61]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[61]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[61]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[61]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[61]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "63"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[62]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[62]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[62]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[62]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[62]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[62]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[62]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[62]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->

<tr>
<td><?php echo "64"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[63]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[63]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[63]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[63]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[63]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[63]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[63]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[63]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "65"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[64]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[64]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[64]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[64]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[64]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[64]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[64]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[64]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "66"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[65]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[65]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[65]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[65]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[65]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[65]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[65]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[65]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "67"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[66]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[66]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[66]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[66]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[66]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[66]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[66]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[66]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "68"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[67]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[67]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[67]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[67]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[67]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[67]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[67]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[67]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "69"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[68]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[68]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[68]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[68]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[68]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[68]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[68]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[68]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "70"; ?></td>
<td class="q_name"><?php echo $check_record_nayatel_save_for_later[69]['name']; ?></td>
<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[69]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $check_record_nayatel_save_for_later[69]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="0" <?php echo ($check_record_nayatel_save_for_later[69]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="1" <?php echo ($check_record_nayatel_save_for_later[69]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="2" <?php echo ($check_record_nayatel_save_for_later[69]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="3" <?php echo ($check_record_nayatel_save_for_later[69]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[]" class="checkbox" name="checkbox[]" value="5" <?php echo ($check_record_nayatel_save_for_later[69]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>






            </tbody>
          </table>
          <?php
          $i=70;
           if($i == '70'){


                    ?>
        </div>
      </div>
    </div>
      <div class="col-lg-4">
          <div class="container" style="margin-top:20px;">

              <div class="someTimer" data-timer="<?php echo $remaining_test_time_slots['test_time_slot']*60;?>" style="width: 300px; height: 100px; "></div>
              <hr>

              <!--<button class="btn btn-success start">Start</button>-->
              <!--<button class="btn btn-danger stop">Stop</button>-->

          </div>


          <!--extra three minutes-->
          <div class="container" style="margin-top:20px;">

              <div class="someTimer2" data-timer="180" style="width: 300px; height: 100px; "></div>
              <hr>


          </div>

          <!--<button type="button" class="btn btn-primary"  id="Next"  name="Next" value="Next" onclick="return save_data()"  style="width:9%; margin-left:0px;-->
    <!--margin-top: 25px">Next</button>-->

    <!--                <input id="submit" type="submit" name="submit" value="Submit" onclick="return submitForm()" style="width:16%; margin-left: 430px;-->
    <!--margin-top: 25px" />-->
      </div>
  </div>
    <div class="row">
        <div class="col-lg-12">
        <button  id="submit" type="submit" name="submit" value="Submit" onclick="return submitForm()" class="btn btn-primary sb-btn loginbtn">Submit</button>
        <button  id="save" type="submit" name="save" value="Save For Later"  onclick="return save_for_later()" class="btn btn-primary sb-btn loginbtn">Save For Later</button>
    </form>
 <div id="myResponse">

 </div>


<?php
}
?>





      </div>
</section>

<!--<a href="#Modal2" class="btn btn-info btn-lg">Open modal</a>-->
<!-- Modal -->
<div id="Modal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
    <!--<h4 class="modal-title">Modal Header</h4>-->
  </div>
  <div class="modal-body">
    <p>Extra three minutes are given, kindly complete the test in require time.</p>
  </div>
  <div class="modal-footer">
      <a href="<?php echo base_url();?>login/nayatel_save_for_later_extra_time">
    <button type="button" value="OK" class="btn btn-success start" data-dismiss="modal">OK</button>
    </a>
  </div>
</div>

  </div>
</div>


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
<script src="<?php echo base_url(); ?>public/js/TimeCircles.js" type="text/javascript"></script>
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
            // $(".fadeIn").click(function() {
            //     timeCircles.elements.last().fadeIn();
            // });
            // $(".fadeOut").click(function() {
            //     timeCircles.elements.last().fadeOut();
            // });

            // // Start and stop are methods applied on the public TimeCircles instance
            // $(".startTimer").click(function() {
            //     $(".someTimer").eq(1).TimeCircles().start();
            // });
            // $(".stopTimer").click(function() {
            //     $(".someTimer").eq(1).TimeCircles().stop();

            // });

// $(".start").click(function(){ $(".someTimer").TimeCircles().start(); });
// $(".stop").click(function(){ $(".someTimer").TimeCircles().stop(); });

setTimeout(function () {
       window.location.href = "https://10-yards.com/login/dashboard"; //will redirect to your blog page (an ex: blog.html)
    }, 900000); //will call the function after 2 secs.


time = $(".someTimer").TimeCircles().getTime();

//alert(time);
//899.995
				if(time < 01)
				{
				     //$('#myModal2').modal('show');
				   // alert("vdgdg") ;
					 $(".someTimer").TimeCircles().destroy();
					 // window.location.replace("https://10-yards.com/login/dashboard");


				}
</script>
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

 function submitForm2() {
var atLeastOneIsChecked = $('input[name="checkbox[]"]:checked').length == 10;
//alert(atLeastOneIsChecked);
}
</script>

<script type="text/javascript">

var arr = [];
$('input.checkbox:checkbox:checked').each(function () {
    arr.push($(this).val());
});
// var length_value=[];
// length_value=arr.length;
// alert(length_value);

   var selected = [];
$('#checkboxes input[type="hidden"]').each(function() {
    selected.push($(this).attr('value'));
});
     //alert(selected);
     //questions_id

var values=[];
var values1=[];
var values2=[];
var values3=[];
 var currentRows=[];
 var arr_length=[];
$( "#checkboxes tbody tr" ).on( "click", function() {

 currentRows = $(this).closest('tr').find('input[type="checkbox"]:checked').val();
 //alert(currentRows);
 arr.push(currentRows);
 arr_length=arr.length;

    var form = document.myform;
var dataString=[];
dataString = $(form).serialize();

var name = $(this).closest('tr').find('.q_name').text();
var dimensions_name = $(this).closest('tr').find('input[type="hidden"]').val();
 //var questions_id = $(this).closest('tr').find('input[type="hidden"]').val();
//alert(currentRows);
values.push(currentRows);
values1.push(name);
values2.push(dimensions_name);
//values3.push(questions_id);

});

 function submitForm() {

     alert(arr_length);
  // alert(arr);

//var form = document.myform;
//alert(arr);
var dataString = dataString;
//alert(dataString);
 var length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
         alert(length);
$.ajax({
    type:'POST',
    url:'https://10-yards.com/login/nayatel_value_statements_data',
   data: {"checkbox": arr,"dimensions_name":selected},
     dataType: 'json',

        success: function(data){
            window.location.replace("https://10-yards.com/login/dashboard");
      //  var len = data.length;
        //showChecked();
        var length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
         alert(length);
      // alert(len);
       if(arr_length== 70){
           alert(arr_length);
         // Read values

         //console.log(data);
        window.location.href="<?php echo base_url();?>login/dashboard";

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

time = $(".someTimer").TimeCircles().getTime();

//alert(time);
var values=[];
var values1=[];
var values2=[];
var values3=[];

$( "#checkboxes tbody tr" ).on( "click", function() {
        var currentRows = $(this).closest('tr').find('input[type="checkbox"]:checked').val();
        //alert(currentRows);
        // timer
        // first time
        time1 = $(".someTimer").TimeCircles().getTime();

//alert(time);
//899.995
				if(time1 < 01)
				{
				     $(".someTimer").TimeCircles().destroy();



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
  $(".someTimer2").eq(1).TimeCircles().start();
  $(".start").click(function(){ $(".someTimer2").TimeCircles().start(); });
time2 = $(".someTimer2").TimeCircles().getTime();
//alert(time);
//01
if(time2 < 01)
				{
			//	alert("vdgdg") ;
				     $(".someTimer").TimeCircles().destroy();
				      $(".someTimer2").TimeCircles().destroy();
				    window.location.replace("https://10-yards.com/login/dashboard");
				    }



				}
				// end



 var name = $(this).closest('tr').find('.q_name').text();

//  var dimensions_name = $(this).closest('tr').find('input[type="hidden"]').val();
 var questions_id = $(this).closest('tr').find('input[type="hidden"]').val();
 //alert(currentRows);
values.push(currentRows);
values1.push(name);
// values2.push(dimensions_name);
values3.push(questions_id);

});
function save_for_later(){
    alert(values);
     alert(values1);
    alert(values3);
    //"dimensions_name":values2,
    // ajax
    var time=[];
    time = $(".someTimer").TimeCircles().getTime();
    //alert(time);
    // time=899.95-time;
    // alert(time);
    time=time/60;
    time= Math.ceil(time);
alert(time);
    var length=[];
       length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
      alert(length);


    $.ajax({
    type:'POST',
    url:'https://10-yards.com/login/save_for_later',
    data: {"checkbox": values,"name":values1,"dimensions_name":values3,"length":length,"time":time},
     dataType: 'json',


        success: function(data){

        var length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
        alert('success');
        if(length>0){

        var checkbox = data[0].values;
       //  var dimensions_name = data[0].values1;
         var name = data[0].values2;
         //alert(checkbox);

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
