<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
  <label for="search"><?php _e('Search for:', 'roots'); ?></label>
  <div class="input-group">
    <input type="search" id="search-field" class="search-field" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>" required>
    <button type="submit" class="search-submit"><?php _e('Search', 'roots'); ?></button>
  </div>
</form>
