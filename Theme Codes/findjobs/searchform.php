<form role="searchform" action="<?php echo site_url('/'); ?>" method="get" class="search-form form-inline d-flex justify-content-center md-form form-sm mt-0">
  <div class="container background-white p-3" style="max-width:700px">
    <div class="row">
      <div class="col-5 pr-0 py-0">
          <span class="mdi mdi-magnify" style="font-size:20px"></span>
          <input class="h-100 w-90 no-input-focus no-border" type="text" name="s" placeholder="Job title or keyword" aria-label="Search">
      </div>

      <div class="col-5 p-0" style="border-left:1px solid gray;">
        <!--<span class="mdi mdi-map-marker-radius-outline"></span>-->
        <input class="w-100 no-input-focus no-border" id="place" name="location" type="text" placeholder="Search Place" aria-label="Search Place">
      </div>

      <div class="col-2 p-0">
        <button class="btn btn-green w-90" type="submit" >
          Search
        </button>
      </div>
    </div>
  </div>
</form>
