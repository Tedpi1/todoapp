@extends("layout.layout")

@section('content')
<div class="container py-5">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>My Notes</h1>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#noteModal">+ Add New Note</button>
    </div>

    <!-- Notes Grid -->
    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">How to cook</h5>
                    <p class="card-text">Just Believe</p>
                </div>
                <div class="card-footer bg-transparent border-0 d-flex gap-2">
                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                    <form action="" method="POST">
                        {{-- @csrf @method('DELETE') --}}
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
