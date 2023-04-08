<?php 
/*
Requirement:
Create a mark sheet which can calculate 5 subject total marks, and obtained marks, and percentage and grade. if any of subject marks are less than 40 then he/she will fail,
Using If.
*/
echo "Marksheet of. . <br/>";
// Creating 5 subjects and initializing each marks
$math = 90;
$english = 70;
$computer = 76;
$science = 90;
$drawing = 8;

//Total Marks, Obtained Marks, Percentage Obtained.
$totalMarks = 500;
$obtainedMarks = $math + $english + $computer + $science + $drawing;
$percentage = ($obtainedMarks/$totalMarks) * 100;

if($percentage >= 80 && $math >= 40 && $english >= 40 && $computer >= 40  && $science >= 40 && $drawing >= 40){
	echo "Math = " .$math."<br/>";
	echo "English = " . $english."<br/>";
	echo "Computer = ". $computer."<br/>";
	echo "Science = " . $science."<br/>";
	echo "Drawing = " . $drawing."<br/>";
	echo "Marks Obtained: " . $obtainedMarks."<br/>";
	echo "Percentage: " . $percentage . "%"."<br/>";
	echo "Grade: A+";
	}

if($percentage >= 70 && $percentage < 80  && $math >= 40 && $english >= 40 && $computer >= 40  && $science >= 40 && $drawing >= 40){
	echo "Math = " .$math."<br/>";
	echo "English = " . $english."<br/>";
	echo "Computer = ". $computer."<br/>";
	echo "Science = " . $science."<br/>";
	echo "Drawing = " . $drawing."<br/>";

	echo "Marks Obtained: " . $obtainedMarks."<br/>";
	echo "Percentage: " . $percentage . "%"."<br/>";
	echo "Grade: A";
	}

if($percentage >= 60 && $percentage < 70  && $math >= 40 && $english >= 40 && $computer >= 40  && $science >= 40 && $drawing >= 40){
	echo "Math = " .$math."<br/>";
	echo "English = " . $english."<br/>";
	echo "Computer = ". $computer."<br/>";
	echo "Science = " . $science."<br/>";
	echo "Drawing = " . $drawing."<br/>";

	echo "Marks Obtained: " . $obtainedMarks."<br/>";
	echo "Percentage: " . $percentage . "%"."<br/>";
	echo "Grade: B";
	}


if($percentage >= 50 && $percentage < 60  && $math >= 40 && $english >= 40 && $computer >= 40  && $science >= 40 && $drawing >= 40){
	echo "Math = " .$math."<br/>";
	echo "English = " . $english."<br/>";
	echo "Computer = ". $computer."<br/>";
	echo "Science = " . $science."<br/>";
	echo "Drawing = " . $drawing."<br/>";

	echo "Marks Obtained: " . $obtainedMarks."<br/>";
	echo "Percentage: " . $percentage . "%"."<br/>";
	echo "Grade: C";
	}

if($percentage >= 40 && $percentage < 50  && $math >= 40 && $english >= 40 && $computer >= 40  && $science >= 40 && $drawing >= 40){
	echo "Math = " .$math."<br/>";
	echo "English = " . $english."<br/>";
	echo "Computer = ". $computer."<br/>";
	echo "Science = " . $science."<br/>";
	echo "Drawing = " . $drawing."<br/>";

	echo "Marks Obtained: " . $obtainedMarks."<br/>";
	echo "Percentage: " . $percentage . "%"."<br/>";
	echo "Grade: D";
	}

if( ($math < 40 || $english < 40 || $computer < 40  || $science < 40 || $drawing < 40) ){
	echo "Math = " .$math."<br/>";
	echo "English = " . $english."<br/>";
	echo "Computer = ". $computer."<br/>";
	echo "Science = " . $science."<br/>";
	echo "Drawing = " . $drawing."<br/>";

	echo "Marks Obtained: " . $obtainedMarks."<br/>";
	echo "Percentage: " . $percentage . "%"."<br/>";
	echo "Grad. <br/>";
	echo "You couldn't passed the semester";	
	}
?>