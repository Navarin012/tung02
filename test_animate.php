<?php
    include "header.php";
    include "banner.php";
    include "navbar.php";
    include "conn.php";
?>


<!DOCTYPE html>
<html>
<style>
#container {
  width: 400px;
  height: 400px;
  position: relative;
  background: yellow;
}
#animate {
  width: 50px;
  height: 50px;
  position: absolute;
  /* background-color: red; */
  background-image: linear-gradient(120deg, blue , green);
}
</style>
<body>
<center>
    <br>
<div id ="container">
  <div id ="animate"></div>
</div>

<p> 
    <br>
    <button onclick="myMove()" class="btn btn-success">Go!</button>
    <!-- <button onclick="myMove2()" class="btn btn-danger">Back</button>  -->
</p> 
</center>

<script>
function myMove() {
  let id = null;
  const elem = document.getElementById("animate");   
  let pos = 0;
  clearInterval(id);
  id = setInterval(frame, 5);
  function frame() {
    if (pos == 350) {
      clearInterval(id);
    } else {
      pos++; 
      elem.style.top = pos + "px"; 
      elem.style.left = pos + "px"; 
    }
  }
}

function myMove2() {
  let id = null;
  const elem = document.getElementById("animate");   
  let pos = 350;
  clearInterval(id);
  id = setInterval(frame, 5);
  function frame() {
    if (pos == 0) {
      clearInterval(id);
    } else {
      pos++; 
      elem.style.top = pos + "px"; 
      elem.style.left = pos + "px"; 
    }
  }
}
</script>

</body>
</html>
