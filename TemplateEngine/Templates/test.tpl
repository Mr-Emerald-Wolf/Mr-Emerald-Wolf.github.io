  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
      var x = 0;

      function loadPosts(y) {

        var xhttp1 = new XMLHttpRequest();
        x += y;

        xhttp1.onreadystatechange = function() {
          if (this.readyState === 4 && this.status === 200) {
            document.getElementById("posts-container").innerHTML = this.responseText;
          }
        };
        xhttp1.open("GET", "test2.php?q=" + x, true);
        xhttp1.send();

      }
      loadPosts(3);

    </script>
  </head>

  <body>



    <div class="card" style="width: 18rem;">

      <a href="post.php?id=[@path]" class="stretched-link"></a>

      <img src=" [@img1] " class='card-img-top rounded' alt='Responsive image'>

      <div class="card-body">

        <h5 class="card-title"> [@name]</h5>

        <p class="card-text truncate"> [@sub_heading] </p>

      </div>

    </div>

  </body>

