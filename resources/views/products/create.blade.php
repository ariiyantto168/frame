<section class="content-header">
    <h1>
        Products
        <small>Master</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Home</a>
        <li><a href="{{url('/products')}}"><i class="fa fa-first-order"></i>Products</a>
        <li class="active"><i class="fa fa-plus"></i>Create New</a>
    </ol>
</section>

<section>

    <!-- {{-- default box --}} -->
    <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Create New</h3> 
              </div>
              <div class="box-body">
                {{ Form::open(array('url' => 'products/create-new', 'class' => 'form-horizontal','files' => 'true')) }}
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Categories</label>
                  <div class="col-sm-5">
                    <select name="cat[]" class="form-control select2" multiple="multiple">
                      @foreach ($categories as $categorie)
                        <option value="{{$categorie->idcategories}}">{{$categorie->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Size</label>
                    <div class="col-sm-5">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" placeholder="Size" name="size" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Weight</label>
                    <div class="col-sm-5">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" placeholder="Weight" name="weight" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Color</label>
                    <div class="col-sm-5">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" placeholder="Color" name="color" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Type</label>
                    <div class="col-sm-5">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" placeholder="Type" name="type" required>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Images<span class="required">*</span>
                  </label>
                  <div class="col-sm-5">
                    <input type="file" id="images" name="images" class="form-control col-md-7 col-xs-12">
                    <img class="img-rounded zoom" id="img-upload" width="50">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-5">
                        <textarea name="description" rows="3" id="description" class="form-control" required></textarea>
                    </div>
                </div>

                <hr>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-5">
                    <a href="{{url('products')}}" class="btn btn-warning pull-right">Back</a>
                    <input type="submit" value="Save" class="btn btn-primary">
                  </div>
                </div>
                {{ Form::close() }}
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          
          </section>
        </section>