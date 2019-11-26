<section class="content-header">
    <h1>Premiums</h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-cubes"></i>Premium Products</li>
    </ol>
</section>

<section class="content">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Index</h3>
        <div class="box-tools pull-right">
            <a href="{{url('premiums/create-new')}}" class="btn btn-box-tool" title="Create New"><i class="fa fa-plus"></i>create New</a>
        </div>
     </div>
</div>
<div class="box-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($premiums as $jancuk1 => $premium)
                <tr>
                    <td>{{$jancuk1+1}}</td>
                    <td>{{$premium->name}}</td>
                    <td>{{$premium->description}}</td>
                    <td>
                        <center>
                            <a href="{{url('/premiums/update/'.$premium->idpremiums)}}"><i class="fa fa-pencil-square-o"></i></a>
                        </center>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</section>     