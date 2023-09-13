<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Personal Information Page</title>
        <style>
            <?php include "style.css" ?>
        </style>
    </head>
    
    <body>
        <div class="container">
            <h2>Personal Information Page</h2>
            <div>
                <?php
                    // Static inputs
                    $name = "Ovijit Kundu";
                    $age = 29;
                    $country = "Bangladesh";
                    $info = "Hello, I'm Ovijit Kundu, a proud Bangladeshi. I completed my graduation with a degree in Computer Science and Engineering, and I am deeply passionate about programming. My current focus is on PHP and the Laravel framework, where I am actively honing my skills and expertise. I have taken the initiative to further my knowledge by enrolling in a platform called 'Ostad', where I am seeking guidance and instruction to enhance my programming capabilities. I am eager and motivated to continue my learning journey and contribute to the world of software development.";
                ?>

                <!-- Display information in a table format -->
                <table class="info-table">
                    <tr>
                        <th>Name</th>
                        <td><?php echo $name; ?></td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td><?php echo $age; ?></td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td><?php echo $country; ?></td>
                    </tr>
                    <tr class="justified-text">
                        <th>Information</th>
                        <td><?php echo "<p> $info </p>"; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>