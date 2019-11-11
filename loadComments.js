

function addComments() {
  var xhttp = new XMLHttpRequest();
  var date = new Date(); 
  date = date.toDateString();
  var str = document.getElementById("commentBox").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("alert").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "addComments.php?val=" + str + "&id="+ postId + "&date=" + date, true);
  xhttp.send();
  document.getElementById("commentBox").value = "";
}

var x = 0; //Tells number of comments to be loaded.ßß
function loadComments(y) {
    var xhttp1 = new XMLHttpRequest();
    x += y; // 'y' comments more are loaded. 5 for default.

    xhttp1.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      document.getElementById("commentsForm").innerHTML = this.responseText; //Returns the comments in the form of html.
    }
    };
    xhttp1.open("GET", "loadComments.php?q=" + x +"&id=" + postId, true); //Sends postId and number of comments to be loaded.
    xhttp1.send();
    }
loadComments(5);