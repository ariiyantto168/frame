<section class="content-header">
    <h1>Abouts</h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-cubes"></i>Abouts</li>
    </ol>
</section>

<section class="content">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Index</h3>
        <div class="box-tools pull-right">
            <a href="{{url('abouts/create-new')}}" class="btn btn-box-tool" title="Create New"><i class="fa fa-plus"></i>create New</a>
        </div>
     </div>
</div>
<div class="box-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor telepon</th>
                <th>whatsapp</th>
                <th>email</th>
                <th>alamat</th>
                <th>tentang</th>
                <th>tentang Kami</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abouts as $index => $about)
                <td>{{$index+1}}</td>
                <td>{{$about->nomortelepon}}</td>
                <td>{{$about->whatsapp}}</td>
                <td>{{$about->email}}</td>
                <td>{{$about->alamat}}</td>
                <td>{{$about->tentang}}</td>
                <td>{{$about->tentangkami}}</td>
                <td>
                    <center>
                        <a href="{{url('/abouts/update/'.$about->idabouts)}}"><i class="fa fa-pencil-square-o"></i></a>
                    </center>
                </td>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</section>     