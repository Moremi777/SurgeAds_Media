<?php
    require "../../includes/profile_header.php";
?>

<?php
        $select = $conn->query("SELECT * FROM users");

        $select->execute();

        $profile = $select->fetch(PDO::FETCH_OBJ);


                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src="../../images/user.png" alt="user" class="nav-icons">
                                <h3> John Doe </h3>
                            </div>
                            <hr>
                            <a href="#" class="sub-menu-link">
                                <img src="../../images/icons8-user-32.png" alt="edit" class="nav-icons">
                                <p> Edit Profile </p>
                                <span></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <img src="../../images/setting.png" alt="settings" class="nav-icons">
                                <p> Settings & Privacy </p>
                                <span></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <img src="../../images/help.png" alt="help" class="nav-icons">
                                <p> Help & Support </p>
                                <span></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <img src="../../images/logout.png" alt="logout" class="nav-icons">
                                <p> Logout </p>
                                <span></span>
                            </a>
                        </div> 
                    </div>

        //second update query 


        if(isset($_POST['submit'])){

            if($_POST['name'] == '' OR $_POST['surname'] == '' OR $_POST['phone_number'] == '' OR $_POST['email'] == '')
            {
                echo "<div class='alert alert-danger text-center text-white' role='alert'>
                    Enter data into inputs
                </div>";
            }

            else{
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $img = $_FILES['img']['name'];
                $dir = 'auth/users/images/' . basename($img);

                $update = $conn->prepare("UPDATE users SET fname = :fname, lname = :lname, phone_number = :phone, email = :email, profile_pic = :pic WHERE id = '$id'");
                $update->execute([
                    ':fname' => $name,
                    ':lname' => $surname,
                    ':phone' => $phone,
                    ':email' => $email,
                    ':pic' => $img
                ]);

                header('location: http://localhost/SurgeAds_Media/auth/users/edit_profile.php?prof_id='.$_SESSION['user_id'].'');
                echo "<div class='alert alert-danger text-center text-white' role='alert'>
                    Details Updated Successfully !
                </div>";

            }

        }
        else{
            echo "error";
        }
?>


    <h1> Edit Information </h1>

    <div class="container">
        <div class="profile_picture">
            <h5> Update Image </h5>
            <img src="../images/default_ProfilePicture.png" id="profile-pic">
            <div class="wrapperProfile-pic">
                <form method="POST" action="edit_profile.php">
                    <div class="test">
                        <input type="file" name="img" accept="image/*" id="input-file"> 
                    </div>
                </form>
            </div>
        </div>

        <div class="wrapperInfo">
            <form method="POST" action="edit_profile.php">
                <div class="input-box">
                    <input type="text" name="name" value="<?php echo $profile->fname;?>" placeholder="Name " required>

                    <input type="text" name="surname" placeholder="Surname " value="<?php echo $profile->lname;?>" required>

                    <input type="email" name="email" placeholder="Email " value="<?php echo $profile->email;?>" required>  

                    <input type="tel" name="phone_number" placeholder="Phone number " value="<?php echo $profile->phone_number;?>" required>

                    <input type="password" name="password" placeholder="New password" value="<?php echo $profile->user_password;?>" required>

                    <label><input type="checkbox" id="showPassword"> Show password</label>

                    <button type="submit" name="submit" class="btn btn-warning"> Update Details </button>
                    <div class="message">
                        <label for="submit"> Message is displayed her </label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <h1> Address Information </h1>

    <div class="container">
        <h5> Delivery Address: </h5>
        <div class="wrapperInfo">
            <form method="POST" action="edit_profile.php">
                <div class="input-box">
                    <input type="text" name="line1" value="<?php ;?>" placeholder="Address Line 1:" required>

                    <input type="text" name="line2" value="<?php ;?>" placeholder="Address Line 2:" required>

                    <input type="text" name="suburb" value="<?php ;?>" placeholder="Suburb:" required>  

                    <input type="text" name="city" value="<?php ;?>" placeholder="City:" required>

                    <input type="code" name="postal_code" value="<?php ;?>"  placeholder="Postal Code:" required>

                    <input type="code" name="country" value="<?php ;?>" placeholder="Country:" required>

                    <button type="submit" name="submit-add" class="btn btn-success"> Add Details </button>
                    <button type="submit" name="submit-update" class="btn btn-warning"> Update Details </button>
                    <div class="message">
                        <label for="submit"> Message is displayed here </label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br><br>
    <!--Javascript code to show password when the checkbox is checked or not -->
    <script>
        const passwordInput = document.getElementById('password');
        const showPasswordCheckbox = document.getElementById('showPassword');

        showPasswordCheckbox.addEventListener('change', function () {
            const isChecked = this.checked;
            passwordInput.type = isChecked ? 'text' : 'password';
        });
    </script>

    <!--Javascript for displaying selected profile picture-->
    <script>
        let profilePic = document.getElementById("profile-pic");
        let inputFile = document.getElementById("input-file");

        inputFile.onchange = function(){
            profilePic.src = URL.createObjectURL(inputFile.files[0]);
        }
    </script>


<?php require "../../includes/footer.php"?>