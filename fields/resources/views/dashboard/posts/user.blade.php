@extends('dashboard.layouts.main')

@can('view_dashboard_add')
  @section('container')
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
    </div>   

    @if (@session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger">
                {{ session('error') }}
        </div>
    @endif  
    
    <div class="table-responsive">
        <table class="table table-striped table-sm w-70">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">User Name</th>
              <th scope="col">Email</th>
              <th scope="col">No Telp</th>
              <th scope="col">Umur</th>
              <th scope="col">Alamat</th>
          </tr>
          </thead>
          <tbody>

            @foreach ($user as $user)  
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->telp }}</td>
              <td>{{ $user->age }}</td>
              <td>{{ $user->address }}</td>
              <td>
                <form action="/dashboard/admin/user/{{ $user->id }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Delete this account?')"><span data-feather='delete'></span></button>

                </form>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
  @endsection

  @endcan