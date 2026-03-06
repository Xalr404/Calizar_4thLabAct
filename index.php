<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   
</head>
<body class="d-flex justify-content-center my-5">

    <form action="profile.php" method="POST" enctype="multipart/form-data" class="custom-form rounded-5 p-5 d-flex flex-column shadow-md">
        <h2 class="text-center">Form Page</h2>
        <div class="d-flex flex-column my-1">
            <label for="f_name">Full name</label>
            <input type="text" name="fullname" id="f_name">
        </div>

        <div class="d-flex flex-column my-1">
            <label for="your_age">Age</label>
            <input type="number" name="age" id="your_age">
        </div>

        <div class="d-flex flex-column my-1">
            <label for="program_course">Course/Program</label>
            <input type="text" name="course" id="program_course">
        </div>

        <div class="d-flex flex-column my-1">
            <label for="email_address">Email Address</label>
            <input type="email" name="email" id="email_address">
        </div>

        <div class="d-flex flex-column py-2">

             <label for="gender">Gender</label>
                <div id="gender" class="d-flex">
                        <label for="male">Male</label>
                        <input type="radio" name="gender" class="mx-2" value="Male" id="male">
                        <label for="female" class="px-2">Female</label>
                        <input type="radio" name="gender" value="Female" id="female">
                </div>

         </div>

        <div class="py-2">
             <label for="hobbies" class="py-2">Hobbies</label>
             <div id="hobbies" class="row gap-3 mx-5">
                    
                <div class="col-4">
                    <label for="sports">Sports</label>
                        <input type="checkbox" name="hobby" value="sport" id="sports">
                    
                </div>
                <div class="col-4">
                    <label for="musics">Music</label>
                    <input type="checkbox" name="hobby" value="instrument" id="musics">
                </div>
                <div class="col-3">
                    <label for="acads">Academics</label>
                    <input type="checkbox" name="hobby" value="journalism" id="acads">
                </div>
                <div class="col-3">
                    <label for="techs">Technology</label>
                    <input type="checkbox" name="hobby" value="programming" id="techs">
                </div>
                <div class="col-3">   
                    <label for="designs">Design</label>
                    <input type="checkbox" name="hobby" value="ui/ux" id="designs">
                </div>
             </div>
        </div>

        <div class="py-1 d-flex flex-column">
            <label for="biography">Biography</label>
            <textarea name="bio" id="biography" row="1" column="8" class="p-1"></textarea>
        </div>

        <div class="py-2 d-flex flex-column">
            <label for="image">Select Image</label>
            <input type="file" value="image" name="images" id="image">
        </div>
        
        <div class="py-2 text-center">
            <button type="submit" class=" btn px-5 py-1 mt-3 rounded-2 shadow-5" name="submit">Submit</button>
        </div>

    </form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>