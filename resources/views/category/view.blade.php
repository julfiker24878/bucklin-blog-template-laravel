@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="box-content">
                <h4 class="box-title">All Categories</h4>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th> 
                            <th>Created At</th>
                            <th>Action</th>
                        </tr> 
                    </thead> 
                    <tbody> 

                        @forelse($categories as $key => $category)
                        <tr> 
                            <th scope="row">{{ $key+1 }}</th> 
                            <td>{{ $category->name }}</td> 
                            <td>{{ $category->created_at->diffForHumans() }}</td>

                            <td>
                                <a href="{{ route('category.edit', $category->id) }}"><i class="fa-solid fa-pen-to-square" style="margin-right: 10px; font-size: 20px;"></i></a>
                                <a href="{{ route('category.delete', $category->id) }}" class="text-danger"><i class="fa-solid fa-trash-can" style="font-size: 20px;"></i></a>
                            </td>

                        </tr> 

                        @empty
                        <tr>
                            <td colspan="3" class="text-center"><strong class="text-danger">{{ 'No data found!' }}</strong></td>
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