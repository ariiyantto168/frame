<section class="content-header">
        <h1>
            Products
            <small>Update</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Home</a>
            <li><a href="{{url('/products')}}"><i class="fa fa-first-order"></i>Products</a>
            <li class="active"><i class="fa fa-plus"></i>Update</a>
        </ol>
    </section>
    
    <section>
    
        <!-- {{-- default box --}} -->
        <section class="content">
    
                <!-- Default box -->
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Update</h3>
                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#myModal">Delete</button> 
                  </div>
                  <div class="box-body">
                    {{ Form::open(array('url' => 'products/update/'.$products->idproducts, 'class' => 'form-horizontal')) }}
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Categories</label>
                      <div class="col-sm-5">
                        <select name="cat[]" class="form-control select2" multiple="multiple">
                          @foreach ($categories as $categorie)
                            <option value="{{$categorie->idcategories}}" @if (in_array($categorie->idcategories,$data_cat))
                                selected
                            @endif>{{$categorie->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Name</label>
                      <div class="col-sm-5">
                        <!-- {{-- name:name untuk melempar controller ke database --}} -->
                        <input type="text" class="form-control" value="{{$products->name}}" name="name" required>
                      </div>
                    </div>
    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Size</label>
                        <div class="col-sm-5">
                          <!-- {{-- name:name untuk melempar controller ke database --}} -->
                          <input type="text" class="form-control" value="{{$products->size}}" name="size" required>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Weight</label>
                        <div class="col-sm-5">
                          <!-- {{-- name:name untuk melempar controller ke database --}} -->
                          <input type="text" class="form-control" value="{{$products->weight}}" name="weight" required>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Color</label>
                        <div class="col-sm-5">
                          <!-- {{-- name:name untuk melempar controller ke database --}} -->
                          <input type="text" class="form-control" value="{{$products->color}}" name="color" required>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Type</label>
                        <div class="col-sm-5">
                          <!-- {{-- name:name untuk melempar controller ke database --}} -->
                          <input type="text" class="form-control" value="{{$products->type}}" name="type" required>
                        </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Images<span class="required">*</span>
                      </label>
                      <div class="col-sm-5">
                        <input type="file" id="images" name="images" class="form-control col-md-7 col-xs-12">
                        {{-- <img class="img-rounded zoom" id="img-upload" width="50"> --}}
                        <img class="img-rounded zoom" id="img-upload" src="{{asset('porducts_images')}}/{{$products->images}}" width="50">
                      </div>
                  </div>
    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-5">
                            <textarea name="description" rows="3" id="description" class="form-control" required>{{$products->description}}</textarea>
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
<!-- Modal delete -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Products</h4>
      </div>
      <div class="modal-body">
        <p>yakin mau hapus products??</p>
      </div>
      <div class="modal-footer">
          {{Form::open(array('url' => 'products/delete/'.$products->idproducts,'method'=>'delete','class' => 'form-horizontal'))}}
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <input type="submit" class="btn btn-danger" value="Yes">
        {{Form::close()}}
      </div>
    </div>
    
  </div>
</div>
