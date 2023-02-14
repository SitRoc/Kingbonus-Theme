<?php 
if( have_rows('faqs') ) { ?>
<section class="faqs">
    <h2>
        Frequently Asked Questions
    </h2>
    <div class="container">
        <?php
        while( have_rows('faqs') ) : the_row();
            $question = get_sub_field('question');
            $answer = get_sub_field('answer');
            ?>
            <div class="faq-container">
                <div class="question">
                    <?php echo $question; ?>
                </div>
                <div class="answer">
                    <?php echo $answer; ?>
                </div>
            </div>
            <?php
            endwhile;
        ?>
    </div>
</section>
<?php
}
?>