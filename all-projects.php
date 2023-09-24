<!DOCTYPE html>
<html lang="en">
    <!-- Head -->
    <?php include 'head.php' ?>
    
        <body>
        <!-- Header -->
	    <?php include 'header.php' ?>
        
        <!-- Title -->

            <h1 class="section__title section__title--all-projects"> 
                All Projects 
            </h1>

        <p>
            
        </p>

        <!-- Content -->
        <section class="project-list" id="projects-list">
            <?php
                $json = file_get_contents('json/my-projects.json');
                $json_data = json_decode($json, true);

                // Generate each project preview
                foreach($json_data['projects'] as $project) 
                {
                    ?>

                    <div class="project-item">
                        <div class="project-item-img">
                            <a href="<?= $project['URL'] ?>">
                                <img src="<?= $project['img-src'] ?>" />
                            </a>
                        </div>
                        <div class="project-item-text">
                            <h2>
                                <a href="<?= $project['URL'] ?>"> <?= $project['title'] ?> </a>
                            </h2>
                            <h3>
                                <?= $project['last-update'] ?>
                            </h3>
                            <p>
                                Some descriptitve text about the project.
                            </p>
                            <p>
                                <?php
                                // print each tag
                                $i = 0;
                                foreach($project['tags'] as $tag)
                                {
                                    $tag = "#" . $tag;

                                    $i++;
                                    if ($i != count($project['tags']))
                                    {
                                        $tag = $tag . ", ";
                                    }

                                    ?>
                                        <?= $tag?>
                                    <?php
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <?php
                }
            ?>

            <div class="project-item">
                <div class="project-item-img">
                    <img src="/img/cat2.jpg" />
                </div>
                <div class="project-text">
                    <h2>
                        <a>Project Name</a>
                    </h2>
                    <h3>
                        Last Updated: 12/12/12
                    </h3>
                    <p>
                        Some descriptitve text about the project.
                    </p>
                    <p>
                        #proj, #tag
                    </p>
                </div>
            </div>

            <div class="project-item">
                <div class="project-item-img">
                    <img src="/img/cat2.jpg" />
                </div>
                <div class="project-item-text">
                    <h2>
                        <a>Project Name</a>
                    </h2>
                    <h3>
                        Last Updated: 12/12/12
                    </h3>
                    <p>
                        Some descriptitve text about the project.
                    </p>
                    <p>
                        #proj, #tag
                    </p>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include 'footer.php' ?>
        
        <!-- Javascript for nav bar -->
        <script src="js/index.js"></script>
    </body>
</html>
