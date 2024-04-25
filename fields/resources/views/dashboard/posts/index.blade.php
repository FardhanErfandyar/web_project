@extends('dashboard.layouts.main')

  @section('container')
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Posts</h1>
    </div>   
    <div class="table-responsive">
      <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Add New Field</a>

       @if (@session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

      @if ($posts->isEmpty())
          <p class="text-center fw-semibold text-danger">Belum ada post yang ditambahkan.</p>
      @else
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Field Name</th>
            <th scope="col">Address</th>
            <th scope="col">District</th>
            <th scope="col">Price</th>
            <th scope="col">Operational Hours</th>
            <th scope="col">facilities</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($posts as $post)  
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->address }}</td>
            <td>{{ $post->district->name }}</td>
            <td>Rp{{ $post->price }}</td>
            <td>{{ $post->time }}</td>
            <td>{{ $post->facility }}</td>
            <td>
              <a href="/post/{{ $post->id }}" class="badge bg-info"><span data-feather='eye'></span></a>
            </td>
            <td>
              <a href="" class="badge bg-warning"><span data-feather='edit'></span></a>
            </td>
            <td>
              <form action="/dashboard/posts/{{ $post->id }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Delete this post?')"><span data-feather='delete'></span></button>

                </form>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
      @endif
      </div>
  @endsection