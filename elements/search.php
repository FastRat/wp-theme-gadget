<form id="searchform" class="navbar-form navbar-left" role="search" method="get" action="<?php bloginfo('url'); ?>/">
    <div class="form-group">
        <input id="s" type="text" name="s" class="form-control" placeholder="Search">
    </div>
    <button id="searchsubmit" type="submit" class="btn btn-default" onclick="$('searchform').submit()" >
        <i class="fa fa-search fa-lg" aria-hidden="true"></i>
    </button>
</form>