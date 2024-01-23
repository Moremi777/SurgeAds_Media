<?php
    require "../../includes/profile_header.php";
?>

<?php

if (!isset($_SESSION['username'])) {
    header("location: http://localhost/SurgeAds_Media/auth/login.php");
    exit();
}

$id = $_SESSION['user_id'];
$select = $conn->prepare("
    SELECT users.*, user_addresses.*
    FROM users
    LEFT JOIN user_addresses ON users.id = user_addresses.user_id
    WHERE users.id = :id
");
$select->bindParam(':id', $id);
$select->execute();
$address = $select->fetch(PDO::FETCH_OBJ);

<<<<<<< HEAD
if (isset($_GET['upd_id'])) {
    // first select query
    $id = $_GET['upd_id'];
=======
<<<<<<< HEAD
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
=======
        //second update query 
>>>>>>> 35c6b59831e1fc95243e9e6463f27c76df27d081
>>>>>>> 81302a19330799cab1be28e4780d7f534158f724

    $select = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $select->bindParam(':id', $id);
    $select->execute();

    $profile = $select->fetch(PDO::FETCH_OBJ);

    // second update query
    if (isset($_POST['submit'])) {
        if ($_POST['name'] == '' OR $_POST['surname'] == '' OR $_POST['phone_number'] == '') {
            echo "<div class='alert alert-danger text-center text-white' role='alert'>
                    Enter data into inputs
                </div>";
        } else {
            
            unlink("../images/" .$address->profile_pic. "");

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $phone = $_POST['phone_number'];
            $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $img = $_FILES['img']['name'];

            $dir = '../images/' . basename($img);

            $update = $conn->prepare("UPDATE users SET fname = :names, lname = :surname, email = :email, phone_number = :phone, user_password = :passw, profile_pic = :img WHERE id = :id");
            $update->execute([
                ':names' => $name,
                ':surname' => $surname,
                ':email' => $email,
                ':phone' => $phone,
                ':passw' => $password,
                ':img' => $img,
                ':id' => $id
            ]);

            if(move_uploaded_file($_FILES['img']['tmp_name'], $dir))
            {
                echo "<div class='alert alert-success text-center text-white' role='alert'>
                Profile Details Updated Successfully!
                </div>";
            }
            else {
                echo 'File upload failed'; // Add this line for debugging
            }
        }
    }
}


if (isset($_POST['submit-add']) || isset($_POST['submit-update'])) {
    // Add or update address details
    $line1 = $_POST['line1'];
    $line2 = $_POST['line2'];
    $suburb = $_POST['suburb'];
    $city = $_POST['city'];
    $postal_code = $_POST['postal_code'];
    $province = $_POST['province'];
    $country = $_POST['country'];

    if (isset($_POST['submit-add'])) {
        $insertAddress = $conn->prepare("INSERT INTO user_addresses (user_id, address_line1, address_line2, suburb, city, province, country, postal_code) 
                                         VALUES (:user_id, :line1, :line2, :suburb, :city, :province, :country, :postal_code)");
        $insertAddress->execute([
            ':user_id' => $id,
            ':line1' => $line1,
            ':line2' => $line2,
            ':suburb' => $suburb,
            ':city' => $city,
            ':province' => $province,
            ':country' => $country,
            ':postal_code' => $postal_code
        ]);
        echo "<div class='alert alert-success text-center text-white' role='alert'>
            Address Details Inserted Successfully!
        </div>";
    } elseif (isset($_POST['submit-update'])) {
        $updateAddress = $conn->prepare("UPDATE user_addresses 
                                         SET line1 = :line1, line2 = :line2, suburb = :suburb, city = :city, postal_code = :postal_code, country = :country 
                                         WHERE user_id = :user_id");
        $updateAddress->execute([
            ':line1' => $line1,
            ':line2' => $line2,
            ':suburb' => $suburb,
            ':city' => $city,
            ':postal_code' => $postal_code,
            ':country' => $country,
            ':user_id' => $id
        ]);
    }

    echo "<div class='alert alert-success text-center text-white' role='alert'>
            Address Details Updated Successfully!
         </div>";
}
?>
    <?php
        $imageSource = "../images/" . $address->profile_pic;
    ?>

    <h1> Edit Information </h1>

    <div class="container">
        <div class="profile_picture">
            <h5> Update Image </h5>
            <img src="<?php echo $imageSource; ?>" alt="Profile Picture" width="900px" height="300px" id="profile-pic">
            <div class="wrapperProfile-pic">
                <form method="POST" action="edit_profile.php?upd_id=<?php echo $id; ?>" enctype="multipart/form-data">
                    <div class="test">
                        <input type="file" name="img" accept="image/*" id="input-file"> 
                    </div>
            </div>
        </div>

        <div class="wrapperInfo">
                <div class="input-box">
                    <input type="text" name="name" value="<?php echo $address->fname;?>" placeholder="Name " required>

                    <input type="text" name="surname" placeholder="Surname " value="<?php echo $address->lname;?>" required>

                    <input type="email" name="email" placeholder="Email " value="<?php echo $address->email;?>" required>  

                    <input type="tel" name="phone_number" placeholder="Phone number " value="<?php echo $address->phone_number;?>" required>

                    <input type="password" name="pass" placeholder="New password" value="<?php echo $address->user_password;?>" required>

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
                    <input type="text" name="line1" value="<?php echo $address->address_line1;?>" placeholder="Address Line 1:" required>

                    <input type="text" name="line2" value="<?php echo $address->address_line2;?>" placeholder="Address Line 2:" required>

                    <input type="text" name="suburb" value="<?php echo $address->suburb;?>" placeholder="Suburb:" required>  

                    <input type="text" name="city" value="<?php echo $address->city;?>" placeholder="City:" required>

                    <input type="text" name="province" value="<?php echo $address->province;?>" placeholder="Province:" required>

                    <input type="code" name="postal_code" value="<?php echo $address->postal_code;?>"  placeholder="Postal Code:" required>

                    <input type="code" name="country" value="<?php echo $address->country;?>" placeholder="Country:" required>

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