
                @include('backend.sessionMsg')
                <div class="card-body">

                  <div class="form-group row">
                    <label for="Image" class="col-md-4 col-form-label text-md-right"></label>
                    <div class="col-md-6">
                    
                    <img id="showImage" src="{{(!empty($edit->logo))?URL::to('storage/'.$edit->logo):URL::to('image/no_image.png')}}"  style="widows: inherit; width:120px; height:120px; border:1px solid #042b3d" alt="">
                  </div>
                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Picture <span style="color:red" >*</span></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="logo" class="custom-file-input"  id="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Name <span style="color:red" >*</span></label>
                   
                    <input type="text" class="form-control" name="name" value="{!!old('name',@$edit->name)!!}">
                   
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Description</label>
                   
                    <textarea name="desc" id="general" cols="30" rows="10" class="form-control" >{!!old('desc',@$edit->desc)!!}</textarea>
                   
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Location</label>
                   
                    <textarea name="location" id="general" cols="30" rows="10" class="form-control" >{!!old('location',@$edit->location)!!}</textarea>
                   
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Sector </label>
                   
                    <input type="text" class="form-control" name="sector" value="{!!old('sector',@$edit->sector)!!}">
                   
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Status : <span style="color:red" >*</span></label>
                   
                    <input type="radio" name="status" value="On-Going  " {{ ( "On-Going
                    " == @$edit->status) ? 'selected' : '' }}"> On-Going
            <input type="radio" name="status" value="Completed" " {{ ( "Completed
            " == @$edit->status) ? 'selected' : '' }}"> Completed
                   
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Start Date </label>
                   
                    <input type="date" class="form-control" name="start_date" value="{!!old('start_date',@$edit->start_date)!!}">
                   
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Completion Date </label>
                   
                    <input type="date" class="form-control" name="completion_date" value="{!!old('completion_date',@$edit->completion_date)!!}">
                   
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
                <script>
                  CKEDITOR.replace( 'desc' );
          </script>
            <script>
              CKEDITOR.replace( 'location' );
      </script>