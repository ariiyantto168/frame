<section>

    <!-- {{-- default box --}} -->
    <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Create New</h3> 
              </div>
              <div class="box-body">
                {{ Form::open(array('url' => 'abouts/create-new', 'class' => 'form-horizontal')) }}
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nomor telepon</label>
                  <div class="col-sm-5">
                    <!-- {{-- name:name untuk melempar controller ke database --}} -->
                    <input type="text" class="form-control" placeholder="Masukan nomor telepon" name="nomortelepon" required>
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Whatsapp</label>
                    <div class="col-sm-5">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" placeholder="Masukan whatsapp" name="whatsapp" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">email</label>
                    <div class="col-sm-5">
                      <!-- {{-- name:name untuk melempar controller ke database --}} -->
                      <input type="text" class="form-control" placeholder="Masukan email" name="email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-5">
                        <textarea name="alamat" rows="3" id="alamat" class="form-control" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tentang</label>
                  <div class="col-sm-5">
                      <textarea name="tentang" rows="3" id="tentang" class="form-control" required></textarea>
                  </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tentang Kami</label>
                <div class="col-sm-5">
                    <textarea name="tentangkami" rows="3" id="tentangkami" class="form-control" required></textarea>
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