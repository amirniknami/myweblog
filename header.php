<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title>My Blog</title>
</head>
<body>
        <header>
            <p><?php echo get_bloginfo( 'name' );?></p>
            <ul>
                <li><a href="#"> <span class="fa fa-github"></span> </a></li>
                <li><a href="#"> <span class="fa fa-twitter"></span> </a></li>
                <li><a href="#"> <span class="fa fa-facebook"></span> </a></li>
                <li><a href="#"> <span class="fa fa-instagram"></span> </a></li>
                <li><a href="#"> <span class="fa fa-telegram"></span> </a></li>
            </ul>
        </header>


<?php wp_head(); ?>