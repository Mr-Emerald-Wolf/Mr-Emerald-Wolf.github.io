    <script>
      function loadDoc() {
        var xhttp = new XMLHttpRequest();
        var str = document.getElementById("commentBox").value;
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("alert").innerHTML = this.responseText;
             
          }
        };
        xhttp.open("GET", "test2.php?q=" + str, true);
        xhttp.send();
     };
        function  updateComments() {
        var xhttp1 = new XMLHttpRequest();
        xhttp1.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("commentsForm").innerHTML = this.responseText;            
                }
            };
        xhttp1.open("GET", "updateComments.php", true);
        xhttp1.send();
     };
        updateComments();
    </script>
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
              <div class="form-group">
                <textarea id="commentBox" class="form-control mb-2" rows="3"></textarea>
              </div>
              <button onclick="loadDoc(),updateComments()" type="submit" class="btn btn-primary mt-2">Submit</button>
          </div>
        </div>
        <div class="mt-3 container" id="alert">
        </div>
        <p id="commentsForm"></p>