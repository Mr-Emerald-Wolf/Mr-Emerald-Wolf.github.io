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
    <div class="container">
        <script>
            page = "about/about.php";
            function rdm_page() {
                if (page == "about/about.php") {
                    page = "index.php";
                };
            };
            function loadDoc() {
                xhttp = new XMLHttpRequest();
                xhttp.open("GET", page, true);
                xhttp.send();
                xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4) {
                    document.getElementById("demo").innerHTML = this.responseText;
                    }    
                };
            }
        </script>
        <div id="demo"></div>
        <button type="button" onclick="loadDoc()">Request data</button>
        <button type="button" onclick="rdm_page()">Change data</button>

    </div>
    <div class="container ml-auto ">
      <p class="display-4">Hello</p>
    </div>
  </body>

</html>

