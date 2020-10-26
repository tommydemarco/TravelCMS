<?php

//retreiving the generic info from the db
require_once 'controllers/testimonials.controller.php';
require_once 'models/testimonials.model.php';

$testimonials = TestimonialsController::ctlShowTestimonials();

?>

<main>
    <section class="section-stories">

        <header class="u-center-text u-mb-big">
            <h2 class="heading-secondary heading-secondary--light">
                Our customers love us 
            </h2>
        </header>

        <?php foreach($testimonials as $testimonial): ?>

        <div class="row">
            <div class="story">
                <figure class="story__shape">
                    <img src="<?php echo $testimonial['picture'] ?>" alt="" class="story__image">
                    <figcaption class="story__caption"><?php echo $testimonial['name'] ?></figcaption>
                </figure>
                <div class="story__text">
                    <h3 class="heading-tertiary u-mb-small"><?php echo $testimonial['title'] ?></h3>
                    <p>
                    <?php echo $testimonial['review'] ?>
                    </p>
                </div>
            </div>
        </div>

        <?php endforeach; ?>

    </section>
</main>