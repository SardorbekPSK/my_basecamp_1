<x-app-layout>

    @section('content')
        <div class="text-center row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a style="margin:20px 0" class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->detail }}</td>
                    <td>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('posts.show', $post->id) }}"
                                style="margin-right:10px;">Show</a>

                            <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}"
                                style="margin-right:10px;">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button style="color: #000;" type="submit" class="btn btn-danger"
                                onclick="return alert('Are You Sure!')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </x-app-layout>
