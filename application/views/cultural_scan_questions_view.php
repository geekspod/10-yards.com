<section class="content-header" style="display:none">
	<div class="content-header-left">
    <?php echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>";?>
		<h1>Questions</h1>
	</div>
	<div class="content-header-right">
		<!-- <a href="<?php echo base_url(); ?>admin/categories/add_nayatel_values_assessment" class="btn btn-primary btn-sm">Add New</a> -->
	</div>
</section>


<section class="content container">

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
                        <?php echo form_open_multipart(base_url().'login/cultural_scan_questions',array('class' => 'form-horizontal')); ?>
                        <input type="hidden" class="email" name="email" value="<?php echo $email;?>"
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

      <div class="box box-info">

        <div class="box-body table-responsive">
            <h1 style="    color: #4172a5">Questions</h1>
          <table id="checkboxes" class="table table-bordered table-striped">
			<thead>
			    <tr>
			        <th>SL</th>
			        <th>Items</th>
                    <!-- <th>Strongly Disagree</th>
                    <th>Disagree</th>
                    <th>Neutral</th>
                    <th>Agree</th>
                    <th>Strongly Agree</th> -->

                    <!-- <th>Add Score</th> -->
			    </tr>
			</thead>
            <tbody>
            	<?php
                $i=0;
                if (!empty($cultural_scan_questions)){
            	foreach ($cultural_scan_questions as $row) {
            		$i++;
            		?>
					<tr>
	                    <td><?php echo $i; ?></td>
	                    <td><?php echo $row['name']; ?></td>
</tr>
                        <!-- <?php echo "value";echo $i;?> -->
                      <tr>
                      <td>
                      </td>
                        <td>
                        <div class="d-flex justify-content-center my-4">
                            <input type="range" name="checkbox[]" class="custom-range" id="value" min="0" max="100">
                            <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        </td>

                        <!-- <input type='hidden' value='0' name='checkbox[]'> -->

                        <!-- <td><input type="checkbox" name="checkbox[]" value="1" data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" name="checkbox[]" value="2" data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" name="checkbox[]" value="3" data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" name="checkbox[]" value="4" data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" name="checkbox[]" value="5" data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
  -->

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
        </div>
      <div class="row justify-content-center">
            <button name="form2" type="submit" class="btn btn-primary sb-btn loginbtn">Submit</button>

            <?php echo form_close(); ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<script>
function QueryViewModel(){

var self = this;
....
self.queuedValues=ko.observableArray([]);
}
</script>
<script>
$( document ).ready(function() {
    $('input[type="checkbox"]').on('change', function() {
      var checkedValue = $(this).prop('checked');
        // uncheck sibling checkboxes (checkboxes on the same row)
        $(this).closest('tr').find('input[type="checkbox"]').each(function(){
           $(this).prop('checked',false);
        });
        $(this).prop("checked",checkedValue);

    });
});
</script>

<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value1');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>
  <!-- 2 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value2');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>
  <!-- 3 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value3');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>
  <!-- 4 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value4');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>
  <!-- 5 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value5');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>
  <!-- 6 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value6');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>
  <!-- 7 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value7');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>
  <!-- 8 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value8');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>

<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value9');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>

<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value10');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>

<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value11');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>

<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value12');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>

<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value13');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>

<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value14');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>

<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value15');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>

<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value16');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>

<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value17');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>

<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value18');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>

<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value19');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>

<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value20');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>

<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value21');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});
  </script>


