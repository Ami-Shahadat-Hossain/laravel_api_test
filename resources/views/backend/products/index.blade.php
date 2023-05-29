<x-backend.layouts.master>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
    </div>
    <div class="container" style="padding-top: 20px">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card-mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Add New Product
                        <a class="btn btn-info" href="{{route('products.create')}}">Add New Product</a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('message'))
                        <div class="alert alert-success">
                            <span class="close" data-dismiss="alert"></span>
                            <strong>{{session('message')}}</strong>
                        </div>
                    @endif
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Details</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $l=0 @endphp
                            @foreach($products as $product)
                                <tr>
                                <td>{{++$l}}</td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->details}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{route('products.show',['product'=>$product->id])}}">Show</a>
                                    <a class="btn btn-success btn-sm" href="{{route('products.edit',['product'=>$product->id])}}">Edit</a>
                                        <form style="display: inline-block" action="{{route('products.destroy',['product'=>$product->id])}}" method="post">
                                        @csrf
                                            @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete it?')">
                                                Delete
                                        </button>
                                    </form>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-backend.layouts.master>

