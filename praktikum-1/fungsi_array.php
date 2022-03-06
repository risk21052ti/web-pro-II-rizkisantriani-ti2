<!DOCTYPE html>
<html>
<body>

<?php
$ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu"];
echo '<ol>';
foreach ($ar_buah as $k =>$v) {
    echo '<li>'.$k.' - ' . $v .'</li>';
    }
    echo '</ol>';
    sort($ar_buah);
    echo '<hr/>';
    echo '<ol>';
    foreach($ar_buah as $k =>$v) {
        echo '<li>'.$k.' - ' . $v .'</li>';
    }
    echo '</ol>';
    
// fungsi array_pop
    $tims = ["erwin","heru","ali","zaki"];
    array_pop($tims);
    foreach($tims as $person){
        echo $person.'<br/>';
    }

// fungsi array_push
    $tims = ["erwin","heru","ali","zaki"];
    array_push($tims,"wati");
    foreach($tims as $person){
        echo $person. '<br/>';
    }

// Fugsi array_shift
    $tims = ["erwin", "heru", "ali", "zaki"];
    array_shift($tims);
    foreach($tims as $person){
        echo $person.'<br/>';
    }
?>
</body>
</html>