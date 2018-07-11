<?php
    mysql_connect('localhost','root','');
    mysql_selectdb('ramanan');
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
        $MResCheck = mysql_query($Mcheck);
          if(mysql_num_rows($MResCheck) > 0)
          {
            echo "Email Already Exits";
          }
          else {
              $insert = "INSERT INTO robo_stu(stu_name,stu_fname,stu_mname,stu_aadhar,stu_dob,stu_email,stu_mob,stu_gender,
              stu_inst,stu_instname) VALUES ('$STU_name',' $STU_fname ',' $STU_mname','$STU_aadhar','$STU_dob',' $STU_email',' $STU_mob',' $STU_gender','$STU_inst','  $STU_instname')";
            $ResIns = mysql_query($insert); 
            echo "Inserted Successfully";
        }
  }
?>