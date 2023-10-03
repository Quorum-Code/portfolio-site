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
                &nbsp;I made this website to showcase my skills and projects in one place. Using what I 
                learned from CS 279 Intro to Linux and CS 328 Web Apps, I build this website and set up 
                and configured the virtual web server to host this site. The website is being run on a 
                Digital Ocean Droplet running a LAMP stack. I used PHP to generate my project list as 
                well as consolidate headers and footers into standalone files.
            </p>

            <p class="individual-project-text">
                &nbsp;To utilize the top level domain '.dev' a site is required to have a valid SSL 
                certificate. I chose Cloudflare to acquire my certificate and learned how to
                configure my host and web server to make use of HTTPS.
            </p>

            <p class="individual-project-note">
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
