
                @include('backend.sessionMsg')
                <div class="card-body">

           

                  <div class="form-group">
                    <label for="exampleInputEmail1">Name  </label>
                   
                    <input type="text" class="form-control" name="name" value="{!!old('name',@$edit->name)!!}">
                   
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Information </label>
                   
                    <input type="text" class="form-control" name="info" value="{!!old('info',@$edit->info)!!}">
                   
                  </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
            