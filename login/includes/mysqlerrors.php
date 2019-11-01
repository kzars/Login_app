<?php
function mySqlErrors($response)
{
    //Returns custom error messages instead of MySQL errors
    switch (substr($response, 0, 22)) {

        case 'Error: SQLSTATE[23000]':
            echo "<div> Username or email already exists</div>";
            break;

        default:
            echo "<div> An error occurred... try again</div>";

    }
}
