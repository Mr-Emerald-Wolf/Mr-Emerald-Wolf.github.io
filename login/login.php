<html lang="en">

  <head>
    <?php echo "<title>". $row['name']. " | ThinkYourSelfNow </title>"; ?>
    <title>Login | ThinkYourSelfNow </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/master.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
    <?php require_once('../post_config.php'); ?>
  </head>
    
    <script>
    $(document).ready(function(){
    $("#error").hide();
    $("#btn1").click(function(){
        var username = $("#email").val().trim();
        var password = $("#password").val().trim();

        if( username != "" && password != "" ){
            $.ajax({
                url:'auth.php',
                type:'post',
                data:{user:username,pass:password},
                success:function(response){
                    alert(response);
                    if(response == 1){
                        window.location = "../index.php";
                    }else{
                        msg = response;
                        $("#error").html(msg);
                        $("#error").show();
                    }
                    
                }
            });
        }
        else{
            var msg = "Please Enter Email & Password";
            $("#error").html(msg);
            $("#error").show();
        }
    });
});
        
    </script>
  <body>
      <?php echo file_get_contents('navbar.html');?>
         <style> .font-weight-normal{ font-weight: 400!important; }</style>
        <style> body{background-color: whitesmoke;}</style>
    
        <div class="container text-center mt-5 h-100">
            <div class="row mx-auto py-2">
                <div class="form-group mx-auto max-vw-50">
                    <h1 class="dispay-4 font-weight-light mb-5 mt-3">ThinkYourSelf Now</h1>
                    <h2 class=" mb-4 font-weight-normal">Please sign in</h2>
                    <div class="alert alert-danger" id="error"></div>
                    <input id="email" type="email" class="form-control form-control-lg" id="inputEmail" aria-describedby="emailHelp" placeholder="Email Address"> 
                    <input id="password" type="password" class="form-control form-control-lg" id="inputPass" aria-describedby="passHelp" placeholder="Password">
                    <button id ="btn1" class="btn btn-lg btn-dark btn-block mt-4 border" type="submit">Sign in</button>
                    <button class="btn btn-lg btn-dark btn-block mt-2 border" type="submit">Register</button>

                    <p class="mt-5 mb-3 text-muted">© 2019-2021</p>
                    
                </div>
            </div>
        </div>
        
    </body>
</html>