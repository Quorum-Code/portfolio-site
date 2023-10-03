<!DOCTYPE html>
<html lang="en">
    <?php require '../php-modules/head.php' ?>
    
    <body>
        <!-- Header -->
	    <?php require '../php-modules/header.php' ?>
        
        <section class="section__individual-project">
            <h2 class="section__individual-title individual-project-title"> My Portfolio Website </h2>
            <h3 class="section__individual-subtitle"> All of My Projects In One Place </h3>

            <p class="individual-project-text">
                &nbsp;I made this website to showcase my skills and projects in one place. I made this
                by applying the knowledge I learned from CS 328, Web Apps Using Databases. The website 
                itself is a virtual server on a Digital Ocean Droplet running a LAMP stack. I used PHP
                to generate my project list as well as consolidate headers and footers into standalone
                files.
            </p>

            <p class="individual-project-text">
                Access to all the files is available on GitHub below.
            </p>
            
            <div class="individual-project-links">
                <a href="https://github.com/Quorum-Code/portfolio-site" class="btn" target="_blank"> <h3> <i class="fa-brands fa-github"></i> GitHub </h3> </a>
            </div>
        </section>
        
        <!-- Footer -->
        <?php require '../php-modules/footer.php' ?>

        <script src="../js/index.js"></script>
    </body>
</html>
