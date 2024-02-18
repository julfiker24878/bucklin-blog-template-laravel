@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-6 col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Edit Category</h4>
                <div class="card-content">
                    <form action="{{ url('/category/update') }}" method="POST"> @csrf

                        <div class="form-group">
                            <label for="category">Category Name</label>
                            <input type="hidden" name="id" value="{{ $category->id }}">
                            <input type="text" class="form-control" name="name" id="category" placeholder="Enter category name" value="{{ $category->name }}">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer_script')
    @if(session('success'))
        <script>
            Swal.fire(
                'Congratulations!',
                '{{ session('success') }}',
                'success'
                )
        </script>
    @endif
@endsection