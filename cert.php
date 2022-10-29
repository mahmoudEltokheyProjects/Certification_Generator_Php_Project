<?php 
    // When Click on "submit button" of the form
    if( isset($_POST['add']))
    {
        // font file 
        $font=realpath("fonts/arial.ttf");
        // Create Copy From "Certifications image file"  , imagecreatefromjpeg('filePathOfImage') [ Create Copy from "Certification File" ]
        $image=imagecreatefromjpeg('images/cer.jpg');
        // "Color" of "text" that will be "displayed" on "certificate" , imagecolorallocate( imagPath , color )
        $color=imagecolorallocate( $image,51,51,102);
        // +++++++++++++++++++++ Write "Student Name" on certification ++++++++++++++++++++++ 
        $studentName = $_POST['name'];
        // Write on "Image File" Using the "font-size = 45px " , "margin-left=120px" , "margin-top=530px" , "color=$color" , "font-family = $font" and the "text will be written on certification = $studentName" in the ".ttf file" 
        // Write "$studentName" on "Image Certification File" 
        imagettftext($image,40,0,120,530,$color,$font,$studentName);
        // +++++++++++++++++++++ Write "Teacher Name" on certification ++++++++++++++++++++++ 
        $teacherName = $_POST['teacher'];
        // Write on "Image File" Using the "font-size = 30px " , "margin-left=260px" , "margin-top=1132px" , "color=$color" , "font-family = $font" and the "text will be written on certification = $teacherName" in the ".ttf file" 
        // Write $teacherName on "Image Certification File"
        imagettftext($image,30,0,260,1132,$color,$font,$teacherName);
        // +++++++++++++++++++++ Write "Student Name" on certification ++++++++++++++++++++++ 
        $certificateNum = $_POST['numb'];
        // Write on "Image File" Using the "font-size = 18px " , "margin-left=250px" , "margin-top=1190px" , "color=$color" , "font-family = $font" and the "text will be written on certification = $certificateNum" in the ".ttf file" 
        // Write $certificateNum on "Image Certification File"
        imagettftext($image,18,0,250,1190,$color,$font,$certificateNum);
        // +++++++++++++++++++++ Save "certification file" with "studentName" on "students_certification" Folder +++++++++++++++++++++ 
        imagejpeg($image,"students_certification/".$studentName.".jpg");

        imagedestroy($image);
        // ++++++++++++++++++++++++ Downloading the Certificate ++++++++++++++++++++++++ 
            // $imgFile =  "students_certification/".$studentName.".jpg" ;
            // header('Content-type: image/jpeg');
            // header("Content-Disposition: attachment; filename='$imgFile' " );

        // ++++++++++++++++++++++++ Create Popup ++++++++++++++++++++++++ 
        echo " <center> <div><h1>Successfully Certification was Created</h1></div> </center>";
    }


  
    
?>