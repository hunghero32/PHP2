<?PHP
include "model.php";
//controller
$list_of_courses = get_courses();
$semester = (!empty($_GET['semester']) ? $_GET['semester']:'');
$course_name = find_by_semester($semester);
$page_content = $course_name;

include "view.php";
?>

