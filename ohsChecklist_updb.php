<script>
	var d=new Date()
	
</script>
<?php

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];

echo $q1 ."</br>";
print(  $q2 ."</br>" .
		$q3 ."</br>" .
        $q4 ."</br>" .
        $q5 ."</br>" .
        $q6 ."</br>" .
        $q7 ."</br>" .
        $q8 ."</br>" .
        $q9 ."</br>" .
        $q10 ."</br>" .
        $q11 ."</br>" .
        $q12);
		
echo (date("Y/m/d"));
echo $time = mktime();
//find system time.






		
?>     