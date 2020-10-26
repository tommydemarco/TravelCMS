<?php

//retreiving the generic info from the db
require_once 'controllers/about.controller.php';
require_once 'models/about.model.php';

$about_info = AboutController::ctlShowAboutInfo();
$employee_info = AboutController::ctlShowEmployeesInfo();

//deconding the paragraphs
$paragraphs = json_decode($about_info['paragraphs'], true);
$pictures = json_decode($about_info['pictures'], true);

?>

<main>
    <section class="section-about-us">
        <div class="u-center-text u-mb-big">
            <h1 class="heading-secondary">
                <?php echo $about_info['title'] ?>
            </h1>
        </div>
        <div class="row">
            <div class="col-1-of-2">

                <?php foreach($paragraphs as $paragraph): ?>
                    
                <h3 class="heading-tertiary u-mb-small"><?php echo $paragraph['title']; ?></h3>
                <p class="paragraph">
                    <?php echo $paragraph['content'] ?>
                </p>

                <?php endforeach; ?>

                <a class="btn btn--purple u-mt-small" href="#">Discover more</a>
            </div>
            <div class="col-1-of-2">
                <div class="composition">
                        <img src="<?php echo $pictures[0]; ?>" alt="" class="composition__img composition__img--p4">
                        <img src="<?php echo $pictures[1] ?>" alt="" class="composition__img composition__img--p5">
                </div>
            </div>
        </div>
    </section>

    <section class="section-team">
        <div class="u-center-text u-mb-big">
            <h2 class="heading-secondary heading-secondary--light">
                Meet the team
            </h2>
        </div>

        <div class="row">

            <?php foreach($employee_info as $employee): ?>

            <div class="col-1-of-3">
                <div class="feature-box">
                    <div class="feature-box__image">
                        <img src="<?php echo $employee['picture']; ?>" alt="" class="feature-box__image-img">
                    </div>
                    <h3 class="heading-tertiary"><?php echo $employee['name']; ?></h3>
                    <h5 class="feature-box__job"><?php echo $employee['role']; ?></h5>
                    <p class="feature-box__text">
                        <?php echo $employee['description']; ?>
                    </p>
                </div>
            </div>

            <?php endforeach; ?> 

        </div>
    </section>
</main>