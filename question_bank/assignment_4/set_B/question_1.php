<!-- 1. Write a PHP Script to create a class Fruit that contains data members as Name, Color and
Price. Write a member function to accept and display details of Fruit. -->

<?php

    class Fruit {
    
        private $name = "";
        private $color = "";

        function accept($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        function display() {
            echo "$this->name <br/>";
            echo "$this->color <br/>";
        }

    }

    $fruit = new Fruit();

    $fruit->accept("Strawberry", "Red");
    $fruit->display();

?>
