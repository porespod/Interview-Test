@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">List of User
                        <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm float-right">New</a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                            <!--Increment row  number for every pagination-->
                            @php $i = ($users->currentpage()-1) * $users->perpage() + 1;@endphp

                            @foreach ($users as $index => $user)
                              <tr> 
                                <th>{{ $i }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('user.edit', $user->id) }}"><button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></a>
                                    
                                    <a href="{{ route('user.detail', $user->id) }}"><button type="submit" class="btn btn-success"><i class="bi bi-view-stacked"></i></button></a>
                                    
                                    <form action="{{ route('user.delete', $user->id) }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </td>
                              </tr>
                              @php  $i += 1; @endphp
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center" style="margin-top:15px;">
                    {{ $users->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection

