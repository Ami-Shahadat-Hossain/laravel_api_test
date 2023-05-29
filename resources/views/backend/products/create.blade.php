
<x-backend.layouts.master>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
    <div class="card-mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
    </div>
    <div class="card-body">
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label for="inputId" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-6">
            <input
            type="hidden"
            class="form-control"
            id="inputID"
            name="id"
            value="">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputTitle" class="col-sm-2 col-form-label">Title:</label>
            <div class="col-sm-6">
                <input
                    type="text"
                    class="form-control"
                    id="inputTitle"
                    name="title"
                    value="">
                @error('title')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPrice" class="col-sm-2 col-form-label">Price:</label>
            <div class="col-sm-6">
                <input
                    type="text"
                    class="form-control"
                    id="inputPrice"
                    name="price"
                    value="">
                @error('price')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
        </div><div class="mb-3 row">
            <label for="inputDetails" class="col-sm-2 col-form-label">Details:</label>
            <div class="col-sm-6">
                <input
                    type="text"
                    class="form-control"
                    id="inputDetails"
                    name="details"
                    value="">
                @error('details')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </div>

    </form>
    </div>
    </div>
    </div>
    </div>
    </div>

</x-backend.layouts.master>
