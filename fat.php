<?php

require "function.php";

if (isset($_POST['submit'])) {
    $response = fat_cal($_POST['name'], $_POST['mobile'], $_POST['waist'], $_POST['wrist'], $_POST['hip'], $_POST['forearm'], $_POST['gender'], $_POST['interested'], $_POST['weight']);
}

?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fat Calculator</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php
        include_once "navbar.php";

        ?>
        <div class="container">
            <?php if (@$response->status == "success") { ?>
            <div class="alert alert-success" role="alert">
                Results Send On Your Whatsapp Successfully!!
            </div>


            <?php } else {
                if (@$response) { ?>
            <div class="alert alert-danger" role="alert">
                Something Went Wrong
            </div>


            <?php }
            } ?>
            <div class="form-wrap">
                <div class="col-12">
                    <h5>Enter Details to Calculate your Body Fat:</h5>
                    <hr>
                </div>
                <form id="survey-form" action="fat.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="name-label" for="name">Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter your name"
                                    value="<?php echo @$_COOKIE['name'] ?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="email-label" for="email">Mobile</label>
                                <input type="text" name="mobile" placeholder="Enter your number" class="form-control" pattern="[6-9]{1}[0-9]{9}"
                                    value="<?php echo @$_COOKIE['mobile'] ?>" required>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="number-label" for="number">Email Id</label>
                                <input type="email" name="email" id="number" min="10" max="99" class="form-control"
                                    value="<?php echo @$_COOKIE['email'] ?>" placeholder="Enter your email id">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="number-label" for="number">Weight</label>
                                <input type="number" name="weight" id="number" min="10" max="99" class="form-control"
                                    value="<?php echo @$_COOKIE['weight'] ?>" placeholder="Enter your weight(Kg)">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="email-label" for="email">Waist</label>
                                <input type="number" name="waist" id="email" placeholder="Enter your waist in inches"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="email-label" for="email">Wrist Measurement(At fullest point)</label>
                                <input type="number" name="wrist" id="email"
                                    placeholder="Wrist Measurement(At Fullest Point)" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="email-label" for="email">Hip Measurement(At fullest point)</label>
                                <input type="number" name="hip" id="email"
                                    placeholder="Hip Measurement(At Fullest Point)" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="email-label" for="email">Forearm Measurement(At fullest point)</label>
                                <input type="number" name="forearm" id="email"
                                    placeholder="Forearm Measurement(At Fullest Point)" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select id="dropdown" name="gender" class="form-control" required>

                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Interested in knowing More</label>
                                <select id="dropdown" name="interested" class="form-control" required>

                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" id="submit" class="btn btn-primary btn-block"
                                name="submit">Calculate</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>
        <?php
        include_once "footer.php";

        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    </body>

</html>