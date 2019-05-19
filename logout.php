
<?php
session_start();
   
   if(session_destroy()) {
      echo' 
      <script>
      alert("Anda Berhasil Logout");
      </script>'  ; 
      header("refresh:1; url=index.php");
     
   }

   ?>