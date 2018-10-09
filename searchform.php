<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Szukaj &hellip;', 'placeholder', 'mem-theme' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Szukaj:', 'label', 'mem-theme' ); ?>">
    </label>
    <input type="submit" class="search-submit btn btn-primary" value="<?php echo esc_attr_x( 'Szukaj', 'submit button', 'mem-theme' ); ?>">
</form>
