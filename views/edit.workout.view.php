<div class="container-fluid" style="margin-top: 15px;">
<div class="row">
<div class="col-md-10" style="margin-top: 17px;">            
<h3 class="title-pages">Edit Workout<span class="label label-default" style="font-size: 11px; float: right; right: 10px;">ID <?php echo $workout['workout_id']; ?></span></h3>

<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

<div class="form-group" style="padding: 0px 10px 0px 0px;">

<input type="hidden" value="<?php echo $workout['workout_id']; ?>" name="workout_id">

   <input type="hidden" value="<?php echo $workout['workout_id']; ?>" name="workout_id">

   <label class="control-label">Title</label>
   <input type="text" value="<?php echo $workout['workout_title']; ?>" name="workout_title" class="form-control" required>

   <label class="control-label">Description</label>
   <textarea type="text" class="form-control" name="workout_description" id="description" required><?php echo $workout['workout_description']; ?></textarea>

   <label class="control-label">Goal</label>
   <select class="form-control" name="workout_goal" required>
   <option value="<?php echo $workout['workout_goal']; ?>" selected><?php echo $workout['goal_title']; ?></option>
    <?php foreach($goals_lists as $goals_list): ?>
   <option value="<?php echo $goals_list['goal_id']; ?>"><?php echo $goals_list['goal_title']; ?></option>
    <?php endforeach; ?>
   </select>

   <label class="control-label">Level</label>
   <select class="form-control" name="workout_level" required>
   <option value="<?php echo $workout['workout_level']; ?>" selected><?php echo $workout['level_title']; ?></option>
    <?php foreach($levels_lists as $levels_list): ?>
   <option value="<?php echo $levels_list['level_id']; ?>"><?php echo $levels_list['level_title']; ?></option>
    <?php endforeach; ?>
   </select>


   <label class="control-label">Duraction</label>
   <input type="text" value="<?php echo $workout['workout_duration']; ?>" name="workout_duration" class="form-control" required>
  
   
   <label class="control-label">Day 1</label>
   <input type="hidden" value="1" name="day_1">
   <select multiple="multiple" class="my-select form-control" name="exercise_id1[]">

<?php foreach($exercises_selected1 as $exercise_selected1): ?>

<?php

$multiple_name_exercise1 = $exercise_selected1['exercise_title'];
$single_name_exercise1 = explode(',', $multiple_name_exercise1);
?>

<?php foreach ($single_name_exercise1 as $value_name_exercise1) { ?>
<option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercise_selected1['exercise_image']; ?>" value="<?php echo $exercise_selected1['exercise_id']; ?>" selected><?php echo $value_name_exercise1 ?></option>
<?php } ?>

<?php endforeach; ?>

<?php foreach($exercises_lists1 as $exercises_list1): ?>
<option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list1['exercise_image']; ?>" value="<?php echo $exercises_list1['exercise_id']; ?>"><?php echo $exercises_list1['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>



   <label class="control-label">Day 2</label>
   <input type="hidden" value="2" name="day_2">
   <select multiple="multiple" class="my-select form-control" name="exercise_id2[]">

<?php foreach($exercises_selected2 as $exercise_selected2): ?>

<?php

$multiple_name_exercise2 = $exercise_selected2['exercise_title'];
$single_name_exercise2 = explode(',', $multiple_name_exercise2);
?>

<?php foreach ($single_name_exercise2 as $value_name_exercise2) { ?>
<option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercise_selected2['exercise_image']; ?>" value="<?php echo $exercise_selected2['exercise_id']; ?>" selected><?php echo $value_name_exercise2 ?></option>
<?php } ?>

<?php endforeach; ?>

<?php foreach($exercises_lists2 as $exercises_list2): ?>
<option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list2['exercise_image']; ?>" value="<?php echo $exercises_list2['exercise_id']; ?>"><?php echo $exercises_list2['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>



   <label class="control-label">Day 3</label>
   <input type="hidden" value="3" name="day_3">
   <select multiple="multiple" class="my-select form-control" name="exercise_id3[]">

<?php foreach($exercises_selected3 as $exercise_selected3): ?>

<?php

$multiple_name_exercise3 = $exercise_selected3['exercise_title'];
$single_name_exercise3 = explode(',', $multiple_name_exercise3);
?>

<?php foreach ($single_name_exercise3 as $value_name_exercise3) { ?>
<option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercise_selected3['exercise_image']; ?>" value="<?php echo $exercise_selected3['exercise_id']; ?>" selected><?php echo $value_name_exercise3 ?></option>
<?php } ?>

<?php endforeach; ?>

<?php foreach($exercises_lists3 as $exercises_list3): ?>
<option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list3['exercise_image']; ?>" value="<?php echo $exercises_list3['exercise_id']; ?>"><?php echo $exercises_list3['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

   <label class="control-label">Day 4</label>
   <input type="hidden" value="4" name="day_4">
   <select multiple="multiple" class="my-select form-control" name="exercise_id4[]">

<?php foreach($exercises_selected4 as $exercise_selected4): ?>

<?php

$multiple_name_exercise4 = $exercise_selected4['exercise_title'];
$single_name_exercise4 = explode(',', $multiple_name_exercise4);
?>

<?php foreach ($single_name_exercise4 as $value_name_exercise4) { ?>
<option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercise_selected4['exercise_image']; ?>" value="<?php echo $exercise_selected4['exercise_id']; ?>" selected><?php echo $value_name_exercise4 ?></option>
<?php } ?>

<?php endforeach; ?>

<?php foreach($exercises_lists4 as $exercises_list4): ?>
<option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list4['exercise_image']; ?>" value="<?php echo $exercises_list4['exercise_id']; ?>"><?php echo $exercises_list4['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>


   <label class="control-label">Day 5</label>
   <input type="hidden" value="5" name="day_5">
   <select multiple="multiple" class="my-select form-control" name="exercise_id5[]">

<?php foreach($exercises_selected5 as $exercise_selected5): ?>

<?php

$multiple_name_exercise5 = $exercise_selected5['exercise_title'];
$single_name_exercise5 = explode(',', $multiple_name_exercise5);
?>

<?php foreach ($single_name_exercise5 as $value_name_exercise5) { ?>
<option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercise_selected5['exercise_image']; ?>" value="<?php echo $exercise_selected5['exercise_id']; ?>" selected><?php echo $value_name_exercise5 ?></option>
<?php } ?>

<?php endforeach; ?>

<?php foreach($exercises_lists5 as $exercises_list5): ?>
<option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list5['exercise_image']; ?>" value="<?php echo $exercises_list5['exercise_id']; ?>"><?php echo $exercises_list5['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

   <label class="control-label">Day 6</label>
   <input type="hidden" value="6" name="day_6">
   <select multiple="multiple" class="my-select form-control" name="exercise_id6[]">

<?php foreach($exercises_selected6 as $exercise_selected6): ?>

<?php

$multiple_name_exercise6 = $exercise_selected6['exercise_title'];
$single_name_exercise6 = explode(',', $multiple_name_exercise6);
?>

<?php foreach ($single_name_exercise6 as $value_name_exercise6) { ?>
<option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercise_selected6['exercise_image']; ?>" value="<?php echo $exercise_selected6['exercise_id']; ?>" selected><?php echo $value_name_exercise6 ?></option>
<?php } ?>

<?php endforeach; ?>

<?php foreach($exercises_lists6 as $exercises_list6): ?>
<option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list6['exercise_image']; ?>" value="<?php echo $exercises_list6['exercise_id']; ?>"><?php echo $exercises_list6['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>


   <label class="control-label">Day 7</label>
   <input type="hidden" value="7" name="day_7">
   <select multiple="multiple" class="my-select form-control" name="exercise_id7[]">

<?php foreach($exercises_selected7 as $exercise_selected7): ?>

<?php

$multiple_name_exercise7 = $exercise_selected7['exercise_title'];
$single_name_exercise7 = explode(',', $multiple_name_exercise7);
?>

<?php foreach ($single_name_exercise7 as $value_name_exercise7) { ?>
<option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercise_selected7['exercise_image']; ?>" value="<?php echo $exercise_selected7['exercise_id']; ?>" selected><?php echo $value_name_exercise7 ?></option>
<?php } ?>

<?php endforeach; ?>

<?php foreach($exercises_lists7 as $exercises_list7): ?>
<option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list7['exercise_image']; ?>" value="<?php echo $exercises_list7['exercise_id']; ?>"><?php echo $exercises_list7['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

<label class="control-label">Status</label>
   
   <div class="row">
                        <div class="col-sm-1">

                        <?php 


$true = '1';

if (strpos($true, $workout['workout_status']) !== false) {
    echo '<div class="radio radio-success"> <input type="radio" name="workout_status" id="radio5" value="'. $workout['workout_status'] .'" checked=""> <label for="radio5"> Publish </label> </div>';
}else{
  echo '<div class="radio radio-success"> <input type="radio" name="workout_status" id="radio5" value="' . $true .'"> <label for="radio5"> Publish </label> </div>';
}
                         ?>
                        </div>

                        <div class="col-sm-1">

                        <?php 


$false = '0';

if (strpos($false, $workout['workout_status']) !== false) {
    echo '<div class="radio radio-danger"> <input type="radio" name="workout_status" id="radio6" value="0" checked=""> <label for="radio6"> Draft </label> </div>';
}else{
  echo '<div class="radio radio-danger"> <input type="radio" name="workout_status" id="radio6" value="'. $false .'"> <label for="radio6"> Draft </label> </div>';
}
                         ?>
                        </div>

                    </div>

   <label class="control-label">Image: <a href="<?php echo SITE_URL ?>/images/<?php echo $workout['workout_image']; ?>" data-lightbox="image-1"><?php echo $workout['workout_image']; ?></a></label>
   <input name="workout_image" class="input-file" type="file">
   <input type="hidden" value="<?php echo $workout['workout_image']; ?>" name="workout_image_save">
   <span class="text-danger">Recommended size: <b>650 x 350 Pixels</b> </span>

   <div class="action-button">
   <input type="submit" name="update" value="Update" class="btn btn-embossed btn-primary">
   <a onclick="alertdelete();">
   <input name="trash" value="Delete" class="btn btn-embossed btn-danger" style="width: 80px;"></a>
    <script type="text/javascript">
   function alertdelete() {
   swal({ title: "Are you sure?", text: "You will not be able to recover this item!", type: "warning",cancelButtonClass: "btn-default btn-sm", showCancelButton: true, confirmButtonClass: "btn-danger btn-sm", confirmButtonText: "Yes, delete it!", closeOnConfirm: false }, function(){window.location.href = "<?php echo SITE_URL ?>/controller/delete_workout.php?id=<?php echo $workout['workout_id']; ?>" });}
   </script>
   </div>


</div>
</form>  
</div>
<div class="col-md-2 page-sidebar">   
<?php require'sidebar.view.php'; ?>  
</div>
</div>
</div>

<script type="text/javascript"> CKEDITOR.replace( 'description' ); </script>
