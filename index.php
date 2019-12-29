<!DOCTYPE html>
<html>
<head>
    <title>Movieflix CRUD App</title>
    <script src="https://kit.fontawesome.com/e6c6bafade.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courier+Prime&display=swap" rel="stylesheet">
    <link href = "style.css" type = "text/css" rel = "stylesheet">
</head>
<body>
    <div class="main-bg-container">
    </div>
    <div class="main-div">
        <?php require_once 'create.php'; ?>
        <div>
            <h2>Movieflix CRUD</h2>
            <?php
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

                //Query the table for record
                $sql = "SELECT * FROM movieflix_table"; //setup our query
                $result = mysqli_query($connection, $sql); //Store result into result variable
                $rowCount = mysqli_num_rows($result); //Method return number of rows

                if($rowCount > 0){
                    echo "
                        <table>
                            <thead>
                                <tr>
                                    <th>Record ID</th>
                                    <th>Title</th>
                                    <th>Genre</th>
                                    <th>Director</th>
                                </tr>
                            </thead>               
                    ";
                }
            ?><!--End PHP code Block-->
            <?php
                while ($row = $result->fetch_assoc()):?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['genre'] ?></td>
                        <td><?php echo $row['director'] ?></td>
                    </tr>
                <?php endwhile ?>
            </table> 

        </div>
        <div class="content-wrapper">
            <button id="create-button">Create Record</button>
            <button id="update-button">Update Record</button>
            <button id="delete-button">Delete Record</button>

            <form action="create.php" method="POST" id="create-form">
                <input type="text" placeholder="Enter movie title" name="create-title"/><br />
                <input type="text" placeholder="Enter movie genre" name="create-genre"/><br />
                <input type="text" placeholder="Enter movie director" name="create-director"/><br />
                <input type="submit" value="Save" name="create-button" class="small-button"/>
            </form>

            <form action="update.php" method="POST" id="update-form">
                <input type="text" placeholder="Enter movie id" name="update-id"/><br />
                <input type="text" placeholder="Enter movie title" name="update-title"/><br />
                <input type="text" placeholder="Enter movie genre" name="update-genre"/><br />
                <input type="text" placeholder="Enter movie director" name="update-director"/><br />
                <input type="submit" value="Save" name="submit-update" class="small-button"/>
            </form>

            <form action="delete.php" method="POST" id="delete-form">
                <input type="text" placeholder="Enter id of Record" name="delete-id"/><br />
                <input type="submit" value="Save" name="submit-delete"class="small-button"/>
            </form>

        </div>
    </div>
    <div class = "contact-section">
        <h3 class="contact-title">Contact</h3>
        <div>
            <p class="email"><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRwQnXPrSQvqlKHhMXfgWHTxsWVVDJfQGFcvkqgPBSrCgkfPVhfbqzMdlCHkQgpVSJcTvhJG" class="mail">shivamgupta.cse@geu.ac.in</a></p>
            <div class="social-media-div">
                <div class="social-media-icon">
                    <a href="https://www.instagram.com/shivam_888/" class="icon"><i class="fab fa-instagram fa-3x"></i></a>
                </div>
                <div class="social-media-icon">
                    <a href="https://www.linkedin.com/in/shivam-gupta-7524b0182" class="icon"><i class="fab fa-linkedin fa-3x"></i></a>
                </div>
                <div class="social-media-icon">
                    <a href="https://github.com/shivam1808" class="icon"><i class="fab fa-github-square fa-3x"></i></a>
                </div>
            </div><br />
            <p>&copy;ShivamLandscape2020</p>
        </div>
    </div>
    <script src="script.js"></script> 
</body>
</html>

