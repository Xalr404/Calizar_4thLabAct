<?php
    if(isset($_POST["fullname"]) && $_POST["age"] && $_POST["course"] && $_POST["email"] && $_POST["gender"] && $_POST["hobby"] && $_POST["bio"] && $_FILES["images"]["name"]){
        $fullname = $_REQUEST["fullname"];
        $age = $_REQUEST["age"];
        $course = $_REQUEST["course"];
        $email = $_REQUEST["email"];
        $gender = $_REQUEST["gender"];
        $hobby = $_REQUEST["hobby"];
        $bio = $_REQUEST["bio"];

        $image = $_FILES["images"]["name"];
        $temp = $_FILES["images"]["tmp_name"];

        if ($image) {
            move_uploaded_file($temp, "uploads/" . $image);
        } else {
            $image = "default-profile.png";
        }
    }else {
            header("location: index.php");
            echo"FIll the form.";
            exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $fullname; ?> | Profile</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="cover"></div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="text-center profile-header">
                <img src="uploads/<?=$image?>" class="profile-img" alt="Profile">
                <h1 class="fw-bold mt-3"><?php echo $fullname; ?></h1>
                <span class="badge bg-light text-primary px-3 py-2 rounded-pill shadow-sm">
                    <?php echo $course; ?>
                </span>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="card section-card p-3">
                        <div class="card-body">
                            <h5 class="card-title">Detailed Information</h5>
                            <div class="row g-4">
                                <div class="col-6">
                                    <div class="info-label">Age</div>
                                    <div class="info-value"><?php echo $age; ?> Years</div>
                                </div>
                                <div class="col-6">
                                    <div class="info-label">Gender</div>
                                    <div class="info-value"><?php echo $gender; ?></div>
                                </div>
                                <div class="col-12">
                                    <div class="info-label">Email Address</div>
                                    <div class="info-value text-primary"><?php echo $email; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card section-card p-3">
                        <div class="card-body">
                            <h5 class="card-title">About Me</h5>
                            <p class="quote-box">"<?php echo $bio; ?>"</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card section-card p-3">
                        <div class="card-body">
                            <h5 class="card-title">Interests & Hobbies</h5>
                            <p class="text-muted"><?php echo $hobby; ?></p>
                        </div>
                    </div>

                    <div class="card section-card p-3">
                        <div class="card-body">
                            <h5 class="card-title">Gallery Reflection</h5>
                            <img src="uploads/<?=$image?>" class="img-fluid gallery-img shadow-sm" alt="Gallery">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<footer class="text-center py-5 text-muted">
    <small>&copy; 2024 Profile Portfolio Dashboard</small>
</footer>

</body>
</html>