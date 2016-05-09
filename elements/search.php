<form id="searchform" class="navbar-form navbar-left navbar" role="search" method="get" action="<?php bloginfo('url'); ?>/">
    <div class="form-group">
        <input type="text" class="form-control control" placeholder="Search">
    </div>
    <button id="searchsubmit" type="submit" class="btn btn-default" onclick="$('searchform').submit()" >
        <i class="fa fa-search fa-lg search_button" aria-hidden="true"></i>
    </button>
</form>