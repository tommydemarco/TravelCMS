<?php

class TestimonialsController {
    static public function ctlShowTestimonials() {
        $table = 'testimonias';
        $response = TestimonialsModel ::mdlShowTestimonials($table);

        return $response;
    }
}