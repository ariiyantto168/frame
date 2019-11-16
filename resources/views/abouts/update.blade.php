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
                {{Form::open(array('url' => 'abouts/update/'.$abouts->idabouts, 'class' => 'form-horizontal'))}}
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nomor telepon</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                  <input type="text" class="form-control" value="{{$abouts->nomortelepon}}" name="nomortelepon" required>
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Whatsapp</label>
                    <div class="col-sm-5">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" value="{{$abouts->whatsapp}}" name="whatsapp" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">email</label>
                    <div class="col-sm-5">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" value="{{$abouts->email}}" name="email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-5">
                    <textarea name="alamat" rows="3" id="alamat" class="form-control" required>{{$abouts->alamat}}</textarea>
                    </div>
                </div>

                <hr>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-5">
                    <a href="{{url('abouts')}}" class="btn btn-warning pull-right">Back</a>
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

        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete Abouts</h4>
              </div>
              <div class="modal-body">
                <p>yakin mau hapus kenangan ini??</p>
              </div>
              <div class="modal-footer">
                  {{Form::open(array('url' => 'abouts/delete/'.$abouts->idabouts,'method'=>'delete','class' => 'form-horizontal'))}}
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <input type="submit" class="btn btn-danger" value="Yes">
                {{Form::close()}}
              </div>
            </div>
            
          </div>
        </div>