<?php
        
        print_r($_POST);
        echo key($_POST);
        if(array_key_exists('12', $_POST)) {
            button1();
        }
        else if(array_key_exists('submit1', $_POST)) {
            button2();
        }
        function button1() {
            echo "This is Button1 that is selected";
        }
        function button2() {
            echo "This is Button2 that is selected";
        }
?>