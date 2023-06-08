<!DOCTYPE html>
<html>
  <head>
    <style>
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed;/* Stay in place */
      background-color:green; 
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    </style>
  </head>
  
  <body>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p><?php echo $message; ?></p>
        </div>
    </div>
  </body>


<script>
// Get the modal
var modal = document.getElementById("myModal"); 

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
modal.style.display = "block";

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  setTimeout(function(){
        location.href = "http://localhost/aldas/Viktorina.live/b_newquestionindex.php";
    }, 2000);
}

// Close the modal after 5 seconds
setTimeout(function(){
    modal.style.display = "none";
    location.href = "http://localhost/aldas/Viktorina.live/b_newquestionindex.php";
}, 5000);

</script>