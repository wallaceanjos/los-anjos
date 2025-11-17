<form method="get" class="form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-wrap">
        <input type="text" class="h-40 w-100-p" name="s" value="<?php echo get_search_query(); ?>" placeholder="Pesquise...">
        <button class="search-button animate" type="submit" title="Start Search">
            <i class="i-matcha-search i-size-sm"></i>
        </button>
    </div>
</form>