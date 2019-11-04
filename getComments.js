function getComments() {

  var xhttp1 = new XMLHttpRequest();

  xhttp1.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      document.getElementById("commentsForm").innerHTML = this.responseText;
    }
  };
  xhttp1.open("GET", "getComments.php?q=" + alert(postId), true);
  xhttp1.send();
}

function addComments() {
  var xhttp = new XMLHttpRequest();
  var str = document.getElementById("commentBox").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("alert").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getComments.php?a=" + str, true);
  xhttp.send();
}

getComments();

