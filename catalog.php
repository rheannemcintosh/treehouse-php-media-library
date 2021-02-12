<?php

    // Include the catalog data
    include("includes/data.php");

    // Declare the page title and section
    $pageTitle = "Full Catalog";
    $section   = null;

    // Change the page title and section depending on category
    if (isset($_GET["cat"])) {
        switch ($_GET["cat"]) {
            case "books":
                $pageTitle = "Books";
                $section = "books";
                break;
            case "movies":
                $pageTitle = "Movies";
                $section = "movies";
                break;
            case "music":
                $pageTitle = "Music";
                $section = "music";
                break;    
        }
    }

    // Include the header
    include("includes/header.php"); 

?>

<div class="section catalog page">
    <div class="wrapper">
        <h1><?php echo $pageTitle; ?></h1>
        <ul class="items">
            <?php 
            foreach($catalog as $item) {
                echo "<li><a href='#'><img src='" 
                    . $item["img"] . "' alt='" 
                    . $item["title"] . "'/>" 
                    . "<p> View Details</p>" 
                    . "</a></li>";
            }
            ?>
        </ul>
    </div>
</div>

<?php 
    // Declare the footer
    include("includes/footer.php");
?>