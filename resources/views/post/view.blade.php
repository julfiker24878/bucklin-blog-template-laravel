@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box-content">
                <h4 class="box-title">All Posts</h4>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Featured Image</th>
                            <th>Post Title</th> 
                            <th>Description</th> 
                            <th>Posted At</th>
                            <th>Action</th>
                        </tr> 
                    </thead> 
                    <tbody> 

                        @forelse($posts as $key => $post)
                        <tr> 
                            <th scope="row">{{ $key+1 }}</th> 
                            <td>{{ $post->rel_to_category->name }}</td>
                            <td><img src="{{ asset('/uploads/post') }}/{{ $post->image }}" alt="featured-img" width="250"></td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->desc }}</td>
                            <td>{{ $post->created_at->diffForHumans() }}</td>

                            <td>
                                <a href="{{ route('post.edit', $post->id) }}"><i class="fa-solid fa-pen-to-square" style="margin-right: 10px; font-size: 20px;"></i></a>
                                <a href="{{ route('post.delete', $post->id) }}" class="text-danger"><i class="fa-solid fa-trash-can" style="font-size: 20px;"></i></a>
                            </td>

                        </tr> 

                        @empty
                        <tr>
                            <td colspan="6" class="text-center"><strong class="text-danger">{{ 'No data found!' }}</strong></td>
                        </tr>
                        @endforelse
                        
                    </tbody> 
                </table>

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