<!-- 2. Write a PHP Script to create a class Student that contains data members as Roll_Number,
Stud_Name, and Percentage. Write member functions to accept Student information. -->

<?php

    class Student {
    
        private $roll_number = "";
        private $stud_name = "";
        private $percentage = "";

        function accept($roll_number, $stud_name, $percentage) {
            $this->roll_number = $roll_number;
            $this->stud_name = $stud_name;
            $this->percentage = $percentage;
        }

        function display() {
            echo "$this->roll_number <br/>";
            echo "$this->stud_name <br/>";
            echo "$this->percentage <br/>";
        }

    }

    $student = new Student();

    $student->accept(20210801105, "Tanmay Vaij", 90.8);
    $student->display();

?>
