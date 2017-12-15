@extends('layouts.app')
  @section('content')
        <div class="row">
          <div class="col-md-12">
              <a href="{{ route('posts.create') }}" class = "btn btn-info pull-right" >Make SHITH</a><br><br>
              <table class = "table table-striped">
                <tr>
                  <th>S/N</th>
                  <th>Title</th>
                  <th>Body</th>
                  <th>Actions</th>
                </tr>
                @php $no = 1; @endphp
                @foreach ($posts as $post)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>
                      <form class="" action = "{{ route('posts.destroy' , $post->id) }}" method="post">
                        <input type="hidden" name = "_method" value = "delete">
                        <input type="hidden" name = "_token" value = "{{ csrf_token() }}">
                        <a href="{{route('posts.show' ,$post->id) }}" class = "btn btn-primary">View</a>
                        <a href="{{ route('posts.edit' , $post->id) }}" class = "btn btn-info">Edit</a>
                        <input type = "submit" class = "btn btn-danger" onclick = "return confirm('Are you sure you want to delte this post? ')" name = "" value = "delete">
                      </form>
                    </td>
                  </tr>
                @endforeach
              </table>
          </div>
        </div>
        <footer>hey, ya bored already yah? Checkout this really cool exit message <a href="{{ route('bye-bye') }}" class = "btn btn-warning pull-right">End of SHITH</a> </footer>
  @endsection
                                                                                                                                                                                                                                                                                                                                                                                                                                      
