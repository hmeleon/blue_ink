<?php
/**
 *  Template for displaying the front page.
 * 
 * @package     WordPress
 * @subpackage  blue_ink
 */

 get_header();

 <section class="front-piece" id="">
    <div class="piece-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3><?php the_title(); ?></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="piece-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    loop away with them contents
                </div>
            </div>
        </div>
    </div>
</section>





get_footer(); ?>