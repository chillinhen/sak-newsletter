<article id="post-not-found">
<section class="post_content">
<?php if ( is_user_logged_in() ) : ?>

    <p><?php _e("In dieser Kategorie wurden noch keine Beiträge verfasst.", "nl-spraachen-org"); ?></p>

<?php else: ?>
<p><?php _e("Bitte logge dich ein, um diesen Artikel lesen zu können.", "nl-spraachen-org"); ?></p>

<?php endif; ?>
</section>
            </article>