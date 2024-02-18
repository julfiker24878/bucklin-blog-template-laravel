@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box-content">
                <h4 class="box-title">All Users</h4>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th> 
                            <th>Email Address</th>
                            <th>Registered At</th>
                        </tr> 
                    </thead> 
                    <tbody> 

                        @forelse($users as $key => $user)
                        <tr> 
                            <th scope="row">{{ $key+1 }}</th> 
                            <td>{{ $user->name }}</td> 
                            <td>{{ $user->email }}</td> 
                            <td>{{ $user->created_at->diffForHumans() }}</td>
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