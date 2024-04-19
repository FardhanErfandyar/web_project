@extends('dashboard.layouts.main')

@can('view_dashboard_add')
  @section('container')
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Districts</h1>
    </div>   
    <div class="table-responsive">
      <a href="/dashboard/admin/districts/create" class="btn btn-primary mb-3">Add New district</a>
        <table class="table table-striped table-sm w-50">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">District Name</th>
          </tr>
          </thead>
          <tbody>

            @foreach ($districts as $district)  
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $district->name }}</td>
              <td>
                <a href="/districts/{{ $district->slug }}" class="badge bg-info"><span data-feather='eye'></span></a>
              </td>
              <td>
                <a href="" class="badge bg-danger ms-10"><span data-feather='delete'></span></a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
  @endsection

  @endcan