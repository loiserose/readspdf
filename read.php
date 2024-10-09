<?php

//  reading a pdf using php 
 $file1 = 'ItEndswithUs.pdf';
 header('Content-type:application/pdf');
 header('Content-Description:inline;filename="'.$file1.'"');
 header('Content-Transfer-Encoding:binary');
 header('Accept-Range:bytes');
 @readfile($file1);
 ?>