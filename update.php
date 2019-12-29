<?php
            //Create update function

    function updateRecord(){

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $databasename = 'movieflix_database';

        //Creating a Connection
        $connection = mysqli_connect($servername, $username, $password, $databasename);

        //Storing User input into variables
        $id = $_POST['update-id'];
        $movieTitle = $_POST['update-title'];
        $movieGenre = $_POST['update-genre'];
        $movieDirector = $_POST['update-director'];

        //Attempting to INSERT data into table
        $sql = "UPDATE movieflix_table SET title = '$movieTitle', genre = '$movieGenre', director = '$movieDirector'WHERE id = '$id'";

        //check if inserting data was successful
        if(!mysqli_query($connection, $sql)){
            echo 'Error : '.$sql.mysqli_error($connection);
        }

        //Close the connection
        mysqli_close($connection);

        //Redirect to main page index.php
        header('location: index.php');
    }

    if(isset($_POST['submit-update'])){
        updateRecord();
    }
                
?>