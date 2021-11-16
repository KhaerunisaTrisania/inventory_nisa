<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //    private $code = "190613006";
        private $name = "Khaerunisa Trisania";
        private $course, $task, $quiz, $mid_term, $final, $grade;

        public function myCourse($course, $task, $quiz, $mid_term, $final, $grade){
            
            $this->course = $course;
            
     

        
}
}