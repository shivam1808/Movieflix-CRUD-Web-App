<?php
            //Create record function

            function createRecord(){

                $servername = 'localhost';
                $username = 'root';
                $password = '';
                $databasename = 'movieflix_database';

                //Creating a Connection
                $connection = mysqli_connect($servername, $username, $password, $databasename);

                //check if connection was successful or not
                if(!$connection){
                    die ('Connection unsuccessful :'.mysqli_connect_error());
                }

                //Storing Userinput into variables
                $movieTitle = $_POST['create-title'];
                $movieGenre = $_POST['create-genre'];
                $movieDirector = $_POST['create-director'];

                //Attempting to INSERT data into table

                $sql = "INSERT INTO movieflix_table(title, genre, director) VALUES ('$movieTitle','$movieGenre','$movieDirector')";

                //check if inserting data was successful

                if(!mysqli_query($connection, $sql)){
                    echo 'Error : '.$sql.mysqli_error($connection);
                }

                //Close the connection
                mysqli_close($connection);

                //Redirect to main page index.php
                header('location: index.php');
            }

            if(isset($_POST['create-button'])){
                createRecord();
            }
                

        ?>