<div id="comments" class="comments-area"> 

    <?php if (have_comments()): ?>
        <h2 class="comments-title"><?php pll_e("Kommentar")?></h2>
        <?php wp_list_comments(); ?>
        <?php the_comments_navigation(); ?>
        <?php paginate_comments_links(); ?>
    <?php endif; ?>

    <?php if(comments_open()): ?>
        <?php comment_form(); ?>
    <?php else: ?>
      
        <p class="no-comments"><?php pll_e("Kommentarne er lukket")?></p>
    <?php endif; ?>

</div>