<form class="form-inline md-form form-sm active-purple-2 mt-0 mt-md-2">
    <div class="form-group">
        <input class="form-control form-control-sm pt-0 pt-md-1 mr-1 w-75 mb-1" style="display: inline-block;" type="search" placeholder="Search"
               aria-label="Search" name="title" id="title">
        <i class="fas fa-search" aria-hidden="true"></i>
    </div>
    <div  id="productList">
    </div>
    {{ csrf_field() }}
</form>
