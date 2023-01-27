<?php

$sname= "Localhost";

$name= "root";

$password = "";

$db_name = "pdftest";

$conn = new mysqli($sname, $name, $password, $db_name);

if (!$conn) {
    echo 'Could not connect';
}
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-input py-2">
        <div class="form-group">
          <input type="text" class="form-control" name="name"
                 placeholder="Enter your name" required>
        </div>                                 
        <div class="form-group">
          <input type="file" name="pdf_file"
                 class="form-control" accept=".pdf"
                 title="Upload PDF"/>
        </div>
        <div class="form-group">
          <input type="submit" class="btnRegister"
                 name="submit" value="Submit">
        </div>
   </div>
</form>