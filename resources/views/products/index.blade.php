<section class="content-header">
    <h1>Products</h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-first-order"></i>Products</li>
    </ol>
</section>

<section class="content">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Index</h3>
        <div class="box-tools pull-right">
            <a href="{{url('products/create-new')}}" class="btn btn-box-tool" title="Create New"><i class="fa fa-plus"></i>create New</a>
        </div>
     </div>
</div>
<div class="box-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Categories</th>
                <th>Name</th>
                <th>Size</th>
                <th>Weight</th>
                <th>Color</th>
                <th>Type</th>
                <th>Images</th>
                <th>Description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $product)
            <tr>
                <td>{{$index+1}}</td>
                <td>
                    @foreach ($product->categories as $cat)
                        {{$cat->name}}
                    @endforeach
                </td>
                <td>{{$product->name}}</td>
                <td>{{$product->size}}</td>
                <td>{{$product->weight}}</td>
                <td>{{$product->color}}</td>
                <td>{{$product->type}}</td>
                <td>
                    {{-- images dapet dr model function --}}
                      @if (is_null($product->images))
                        <label> - </label>
                      @else
                        <img class="img-rounded zoom" src="{{asset('porducts_images')}}/{{$product->images->name }}" width="50">
                      @endif
                  </td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{url('/products/update/'.$product->idproducts)}}"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="{{url('/products/show/'.$product->slug)}}" ><i class="fa fa-eye"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</section>     