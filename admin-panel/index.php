<?php require "layouts/header.php"; ?>
<?php require "../config/config.php"; ?>

<?php

  if(!isset($_SESSION['admin_name']))
  {
    header("location: http://localhost/SurgeAds_Media/admin-panel/admins/login-admins.php");
  }

  //ADMINS
  $select_admins = $conn->query("SELECT COUNT(*) AS admins_number FROM admins");
  $select_admins->execute();
  $admins = $select_admins->fetch(PDO::FETCH_OBJ);

  //CATEGORIES
  $select_cats = $conn->query("SELECT COUNT(*) AS address_number FROM user_addresses");
  $select_cats->execute();
  $address = $select_cats->fetch(PDO::FETCH_OBJ);

  //POSTS
  $select_posts = $conn->query("SELECT COUNT(*) AS user_number FROM users");
  $select_posts->execute();
  $user = $select_posts->fetch(PDO::FETCH_OBJ);

?>
            
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Users</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
              <p class="card-text">Number of Users: <?php echo $user->user_number;?></p>
             
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Categories</h5>

              <?php echo $_SESSION['admin_name'];?>
              
              <p class="card-text">Number of User Addresses <?php echo $address->address_number;?></p>
              
             </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Admins</h5>
              
              <p class="card-text">Number of Admins: <?php echo $admins->admins_number;?></p>
              
            </div>
          </div>
        </div>
      </div>

<!--            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript">

</script>
</body>
</html>-->

<?php require "layouts/footer.php"; ?>
