<?php session_start(); if(isset($_SESSION['id_user_auth'])){ header("Location: home.php"); } ?>

<?php require_once '../includes/database/config.php'; ?>
<?php require_once "header-footer/header.php"; ?>

    <div class="index height30" align="center">
      <a name="firstindex">
      <h1><img class="floating" src="../lib/img/logos.png"/></h1>
      <button id="buttonindex1" class="btn btn-5 btn-5b icon-arrow-right"><span>Sign In</span></button>
      <button id="buttonindex2" class="btn btn-5 btn-5b icon-star"><span>Create Account</span></button>
    </div>

    <form id="form-login" type="post">
      <a name="secondindex">
        <div class="login">
          <div class="row">
            <div align="center" class="large-offset-3 large-6 columns">
                <input type="email" placeholder="Email" name="email" required/>
                <input type="password" placeholder="Password" name="password" required />
                <input type="hidden" value="login" name="form"/>
                
              <button type="submit" class="btn btn-4-login btn-4c icon-arrow-right">Sign in</button>
            </div>
          </div>
        </div>
      </a>
    </form>

    <form id="form-signup" method="post">
      <a name="thirdindex">   
      <div class="register">
        <div class="row">
          <div align="center" class="large-offset-3 large-6 columns">
              <input type="email" name="email" placeholder="Email" name="email" required/>
              <input type="password" name="password" placeholder="Password" name="password" required/>
              <input type="password" name="confirm_password" placeholder="Re-type Password" name="repassword" required/>
              <input type="hidden" value="signup" name="form"/>

            <button type="submit" class="btn btn-4-register btn-4c icon-arrow-right">Register</button>
          </div>
        </div>
      </div>
      </a>
    </form>
<?php require_once "header-footer/footer.php"; ?>



<script type="text/javascript">
$("#form-login").submit(function(e){
  var form_data = $("#form-login").serialize();
  console.log(e);
  console.log(form_data);
  $.ajax({
      url: '../includes/request.php',
      type: 'post',
      data: form_data,
      success: function(data, status) {
        if(data != "not"){
          console.log(data);
          window.location = data;          
        }else{
          console.log(data);
        }
      },
      error: function(xhr, desc, err) {
        console.log(xhr);
      }
    }); 
    return false;
});

$("#form-signup").submit(function(e){
  var form_data = $("#form-signup").serialize();
  console.log(e);
  console.log(form_data);
  $.ajax({
      url: '../includes/request.php',
      type: 'post',
      data: form_data,
      success: function(data, status) {
        if(data != "not"){
          console.log(data);
          window.location = "home.php";          
        }else{
          console.log(data);
        }
      },
      error: function(xhr, desc, err) {
        console.log(xhr);
      }
    }); 
    return false;
});

</script>