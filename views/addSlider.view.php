<div class="row">
    <form method="POST" action="addSlider.php" enctype="multipart/form-data" class="form-horizontal">


              <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">picture</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="inputEmail3" name="pic">
        </div>
      </div>



      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">title</label>
        <div class="col-sm-6">
          <textarea type="textarea" class="form-control" name="title"></textarea>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" name="add">Add</button>
        </div>
      </div>

       <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="file" class="btn btn-default" name="file">Upload Image</button>
        </div>
      </div>
 
    </form>
</div>
