<!---Use this as a testing ground to set up new resources--->
<html lang="en">

  <head>
    <?php echo "<title>". $row['name']. " | ThinkYourSelfNow </title>"; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <?php require_once('post_config.php'); ?>
  </head>

  <body>
    <script>
      function loadDoc() {
        var xhttp = new XMLHttpRequest();
        var str = document.getElementById("commentBox").value;
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "test2.php?q=" + str, true);
        xhttp.send();
      };

    </script>
    <div class="container mt-4 pt-4">
      <div class="row">
        <div class="col-lg-8">
        <div class="container">
          <div class="row mt-4 ">
          </div>
        </div>
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
              <div class="form-group">
                <textarea id="commentBox" class="form-control mb-2" rows="3"></textarea>
              </div>
              <button onclick="loadDoc()" type="submit" class="btn btn-primary mt-2">Submit</button>
          </div>
        </div>
        <div class="mt-3 container" id="demo">
        </div>
      </div>
    </div>
    </div>
  </body>

</html>

