@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-6 col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Add Post</h4>
                <div class="card-content">
                    <form action="{{ url('/post/insert') }}" method="POST" enctype="multipart/form-data"> @csrf

                        <div class="form-group margin-bottom-20">

                            <label for="category">Select Category Name</label>

							<select class="form-control" name="category_id">
								<option>Nothing selected</option>

                                @foreach($categories as $category)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach

							</select>
						</div>

                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Add a title">
                        </div>

                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea name="desc" id="desc" cols="30" rows="20" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Set Featured Image</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Publish</button>
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