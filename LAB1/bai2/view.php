<!--view-->
<?=$page_content;?>
<select name="courses">
<?php foreach($list_of_courses as $course_name): ?>
<option><?=$course_name?></option>
<?php endforeach;?>
</select>