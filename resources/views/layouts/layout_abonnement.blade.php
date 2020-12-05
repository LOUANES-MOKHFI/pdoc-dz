<style type="text/css">
  

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
 
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}



span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  left: 0;
  top: 0;
  right: 6
  width: 20%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */

}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

<div id="layout_abonnement" class="modal text-center" >
   <div class="modal-content animate" style="width:600px">
    <div class="imgcontainer">
      <span onclick="document.getElementById('layout_abonnement').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <h2 class="text-center">INSCRIRE AVEC ABONNEMENT</h2>
      <p style="height: 10px"></p>
        <p class="mb-0" align="center" style="font-size: 20px;font-weight: bold">Enseignant: 600 $</p>
        <p class="mb-0" align="center" style="font-size: 20px;font-weight: bold">Etudiant: 400 $</p>
        <p class="mb-0" align="center" style="font-size: 20px;font-weight: bold">Autre personne: 600 $</p>
        <p class="mb-0" align="center" style="font-size: 20px;font-weight: bold">Bibliothécaire: 600 $</p>
        <p style="height: 10px"></p>
    </div>
    <div class="row justify-content-center" style="margin-bottom: 10px">
      <div class="col-md-5">
        <a href="#" type="submit" class="btn btn-danger" onclick="document.getElementById('layout_abonnement').style.display='none'">Annuler</a>
      </div>
      <div class="col-md-5">
         <input type="submit" name="btn" class="btn btn-success" value="Inscrire">
   
       </div>
      </div>
    
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>