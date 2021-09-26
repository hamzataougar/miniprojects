<?php 
$mini_projects = array(
    [
        'name' => "Meals Finder",
        'link' => "mealsFinder",
        'description' => "This projects retrieve data from MealsDB api and display it ",
        'creation_date' => '25 October 2020',
        'image' => "images/meals.PNG",
        'author' => ' Hamza TAOUGAR',
        'job' => 'Software Developer'
    ],
    [
        'name' => "Background Generator",
        'link' => "background-generator",
        'description' => "This project makes you choose you color ",
        'creation_date' => '20 November 2020',
        'image' => "images/background_generator.PNG",
        'author' => ' Hamza TAOUGAR',
        'job' => 'Software Developer'
    ],
    [
        'name' => "Relaxation App",
        'link' => "relaxApp",
        'description' => "This project replays the same song to relax ",
        'creation_date' => '13 December 2020',
        'image' => "images/relax.PNG",
        'author' => ' Hamza TAOUGAR',
        'job' => 'Software Developer'
    ],
    [
        'name' => "Password Generator",
        'link' => "passwordGenerator",
        'description' => "This project generates you a password depending on your choices ",
        'creation_date' => '15 Mars 2021',
        'image' => "images/password.PNG",
        'author' => ' Hamza TAOUGAR',
        'job' => 'Software Developer'
    ],
    [
        'name' => "Age Calculator",
        'link' => "calculateAge",
        'description' => "This project gives you the right number of years,months and days you have been on this earth  ",
        'creation_date' => '10 May 2021',
        'image' => "images/calculateage.PNG",
        'author' => ' Hamza TAOUGAR',
        'job' => 'Software Developer'
    ]
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="globalStyle/style.css">
    <title>Mini Projects</title>
</head>

<body>  
<h1 class="display-1  text-center">Mini Projects</h1>
    <section class="wrapper">
        <div class="container">
            <div class="row">
                <?php foreach ($mini_projects as $project) { ?>
                    <a href="<?= $_SERVER['REQUEST_URI'] . $project['link']; ?>" target="_blank">
                    <div class="col-sm-4 mt-4">
                    <div class="card text-white card-has-bg click-col"
                        style="background-image:url('<?= $project['image']; ?>');">
                        <img class="card-img d-none" src="<?= $project['image']; ?>"
                            alt="<?= $project['name']; ?>">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <h4 class="card-meta mb-2"><?= $project['name']; ?></h4>
                                <p class="card-title mt-0 "><a class="text-white" href="<?= $_SERVER['REQUEST_URI'] . $project['link']; ?>" target="_blank"><?= $project['description']; ?></a></p>
                                <small><i class="far fa-clock"></i><?= $project['creation_date']; ?></small>
                            </div>
                            <div class="card-footer">
                                <div class="media">
                                    <img class="mr-3 rounded-circle"
                                        src="https://cdn0.iconfinder.com/data/icons/user-pictures/100/male-512.png"
                                        alt="Generic placeholder image" style="max-width:50px">
                                    <div class="media-body">
                                        <h6 class="my-0 text-white d-block"><?= $project['author']; ?></h6>
                                        <small><?= $project['job']; ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>


               <?php 
            } ?>
               
            </div>

        </div>
    </section>
</body>

</html>