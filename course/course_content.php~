<?php
$q = 1;
$sql="SELECT * FROM crs_content WHERE crs_id = '".$q."'";
$result = mysqli_query($con,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

while($row = mysqli_fetch_array($result)) {
    echo "<tr>
              <td><i class=\"fa fa-user w3-blue w3-padding-tiny\" ></i></td>
              <td>".$row['chap_no']."</td>
              <td>".$row['chap_name']."</a></td>
              <td><a href=\"pdf.php?link=".$row['chap_link']."\">".$row['chap_link']."</a></td>
              <td><a href=\"pdf.php?link=".$row['ass_link']."\">".$row['ass_link']."</a></td>
              <td>".$row['duration']."</a></td>
            </tr>";
    }


?>
