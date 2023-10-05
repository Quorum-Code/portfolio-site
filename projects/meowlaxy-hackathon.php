<!DOCTYPE html>
<html lang="en">
    <?php require '../php-modules/head.php' ?>
    
    <body>
        <!-- Header -->
	    <?php require '../php-modules/header.php' ?>
        
        <section class="section__individual-project">
            <h2 class="section__individual-title individual-project-title"> Meowlaxy </h2>
            <h3 class="section__individual-subtitle"> Cal Poly Humboldt Hackathon </h3>

            <p class="individual-project-text">
                &nbsp;The Cal Poly Humboldt Hackathon is a competition in which students build some piece of
                software, like a website, game, or tool, in less than 24 hours. The event took place Spring
                2023 and had 11 different teams participate.
            </p>

            <img class="individual-project-img-small" src="../img/meowlaxy-thumbnail.png" alt="Meowlaxy main title screen">

            <p class="individual-project-text">
                &nbsp;I worked with a team of four other students to plan and develop the game. The group voted 
                to make a game in Unity, I was the only one with experience using Unity so I did my best to show 
                my team the basics a few days before the event. For the actual game we decided to make a planet
                defense game, in which you play as a cat with a space ship destroying asteroids and aliens. Those
                two enemies drop stars which strengthen your ship, making it shoot faster, deal more damage, or 
                move faster. We finished the game in just under 24 hours and after presenting our project we ended 
                up getting 4th place.
            </p>
            
            <img src="../img/meowlaxy-gameplay-screenshot.png" alt="Meowlaxy screenshot of editor">

            <p class="individual-project-note">
                The project source code is accessible below on GitHub.
            </p>

            <div class="individual-project-links">
                <a href="https://github.com/ebp20-CPH/Meowlaxy" class="btn" target="_blank"> <h3> <i class="fa-brands fa-github"></i> GitHub </h3> </a>
            </div>
        </section>
        
        <!-- Footer -->
        <?php require '../php-modules/footer.php' ?>

        <script src="../js/index.js"></script>
    </body>
</html>
