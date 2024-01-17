<?php
include('connection1.php');

if(isset($_POST['Go']))
{
    $sql = "select * from infos";
    $result=mysqli_query($conn, $sql);
    $count=0;


   

    foreach($_POST['group'] as $label)
    {
        if($label)
        {
            $row = mysqli_fetch_assoc($result);
            echo $row['name'];
        }
    }

}
else{
    echo "wapis gadbad hua";
}
?>
