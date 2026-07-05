@extends("layout.layout")

@section('content')
<div class="container py-5">
    {{ $notes }}
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
    <!-- Add Note Modal -->
    <div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="noteModalLabel">Add New Note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('add.task.post') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-1">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" required>
                        </div>
                        <div class="mb-1">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content" class="form-control" id="content" rows="4" required></textarea>
                        </div>
                        <div class="mb-1">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" name="date" class="form-control" id="date" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
                </form>
            </div>

        </div>
    </div>

</div>
@endsection
