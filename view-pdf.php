<?php
header("Content-Type: application/pdf");
include('classes/Notice.php');

$notice = new Notice();
if(isset($_GET['fid'])){
    $file_id = $_GET['fid'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php 
    if(isset($_GET['fid'])){
        $file_id = $_GET['fid'];
    }
?> </title>
</head>

<body>
    <?php							
        $rF = $notice->readFile($file_id);
        if($rF){
        while ($row2 = $rF->fetch_assoc()) {
             $file_name = 'files/notice/'.$row2['file_name'];
            header('Content-Disposition: inline; filename="' . $file_name . '"'); 
            header('Content-Transfer-Encoding: binary'); 
        	readfile($file_name);
           
        } }
?>
</body>

</html>