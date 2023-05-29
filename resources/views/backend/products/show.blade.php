
<x-backend.layouts.master>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{route('products.index')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
    </div>
    <div class="container" style="padding-top: 20px">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card-mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Product
                        <a class="btn btn-info" href="{{route('products.create')}}">Add New Product</a>
                        <div class="card-body">
                            <h2>Title:{{$product->title}}</h2>
                            <h2>Price:{{$product->price}}</h2>
                            <h3>Details:{{$product->details}}</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-backend.layouts.master>

