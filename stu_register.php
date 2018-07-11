<?php
define('DB_NAME','ramanan');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
$link=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$link)
{
die('Could not connect:'.mysqli_error());
}
$db_selected=mysqli_select_db(DB_NAME,$link);
if(!$db_selected)
{
die('Can not use '.DB_NAME.':'.mysqli_error());
}

  if(isset($_POST['submit']))
  {
      $STU_name = $_POST['stu_name'];
      $STU_fname = $_POST['stu_fname'];
      $STU_mname = $_POST['stu_mname'];
      $STU_aadhar = $_POST['stu_aadhar'];
      $STU_dob = $_POST['stu_dob'];
      $STU_email = $_POST['stu_email'];
      $STU_mob = $_POST['stu_mob'];
      $STU_gender = $_POST['stu_gender'];
      $STU_inst = $_POST['stu_inst'];
      $STU_instname = $_POST['stu_instname'];
      $Mcheck = "SELECT * from robo_stu WHERE stu_email = ' $STU_email'";
        $MResCheck = mysqli_query($link,$Mcheck);
          if(mysqli_num_rows($MResCheck) > 0)
          {
            echo "Email Already Exits";
          }
          else {
              $insert = "INSERT INTO robo_stu(stu_name,stu_fname,stu_mname,stu_aadhar,stu_dob,stu_email,stu_mob,stu_gender,
              stu_inst,stu_instname) VALUES ('$STU_name',' $STU_fname ',' $STU_mname','$STU_aadhar','$STU_dob',' $STU_email',' $STU_mob',' $STU_gender','$STU_inst','  $STU_instname')";
            $ResIns = mysqli_query($link,$insert);
            echo "Inserted Successfully";
        }
  }
?>
