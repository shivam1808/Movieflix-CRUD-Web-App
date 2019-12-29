<?php
            //Create delete record function

    function deleteRecord(){

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $databasename = 'movieflix_database';

        //Creating a Connection
        $connection = mysqli_connect($servername, $username, $password, $databasename);

        //Storing User input into variables
        $id = $_POST['delete-id'];

        //Attempting to INSERT data into table
        $sql = "DELETE FROM movieflix_table WHERE id = '$id'";

        //check if inserting data was successful
        if(!mysqli_query($connection, $sql)){
            echo 'Error : '.$sql.mysqli_error($connection);
        }
        
        //Close the connection
        mysqli_close($connection);

        //Redirect to main page index.php
        header('location: index.php');
    }

    if(isset($_POST['submit-delete'])){
        deleteRecord();
    }
                
?>