@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-6 col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Edit Post</h4>
                <div class="card-content">
                    <form action="{{ url('/post/update') }}" method="POST" enctype="multipart/form-data"> @csrf

                        <div class="form-group">
                            <label for="title">Category Name</label>
                            <input type="hidden" name="id" value="{{ $post->id }}">
                            <input type="text" class="form-control" id="title" value="{{ $post->rel_to_category->name }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Add a title" value="{{ $post->title }}">
                        </div>

                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea name="desc" id="desc" cols="30" rows="20" class="form-control">{{ $post->desc }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Set Featured Image</label>
                            <img src="{{ asset('/uploads/post') }}/{{ $post->image }}" alt="featured-img" width="250" style="display: block; margin: 15px;">
                            <input type="file" class="form-control" name="image" id="image">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Update Post</button>
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