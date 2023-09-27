<?php
function generateProjectItem($project)
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
            <?= $project['desc'] ?>
        </p>
        <p class="project-item-tags">
            <?php
            // print each tag
            $i = 0;
            foreach($project['tags'] as $tag)
            {
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

<!DOCTYPE html>
<html lang="en">
    <!-- Head -->
    <?php require 'php-modules/head.php' ?>
    
        <body>
        <!-- Header -->
	    <?php require 'php-modules/header.php' ?>
        
        <!-- Title -->

            <h1 class="section__title section__title--all-projects"> 
                All Projects 
            </h1>

        <p>
            
        </p>

        <!-- Content -->
        <section class="project-list" id="projects-list">
            <?php
                // Get passed tag
                if (isset($_GET["tag"]))
                {
                    // Store tag to get all corresponding projects
                    $tag = strtolower(htmlspecialchars($_GET["tag"]));
                    $getAll = false;
                }
                else
                {
                    // No tag given, get all projects
                    $tag = "";
                    $getAll = true;
                }

                // Load and decode JSON
                $json = file_get_contents('json/my-projects.json');
                $json_data = json_decode($json, true);

                // Iterate through each JSON project
                $num_projects = 0;
                foreach($json_data['projects'] as $project) 
                {
                    $get_tags = array_map('strtolower', $project['tags']);
                    if ($getAll || in_array($tag, $get_tags))
                    {
                        generateProjectItem($project);
                        ++$num_projects;
                    }
                }
                if ($num_projects == 0)
                {
                    ?>
                    <h4 class="section__title"> No projects with specified tag(s) found. </h4>
                    <?php
                }
            ?>
        </section>

        <!-- Footer -->
        <?php require 'php-modules/footer.php' ?>
        
        <!-- Javascript for nav bar -->
        <script src="js/index.js"></script>
    </body>
</html>
