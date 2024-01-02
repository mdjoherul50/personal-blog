<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>CUstomer Details</title>
</head>
<body>
<div class="container mt-5">
@if(session('success'))
<div class="  alert alert-success" id="success-message">
    {{ session('success') }}
</div>
@endif
    <div class="d-flex justify-content-between">
    <div class="display-3">Post Details</div>
        <div>
            <a href="{{route('post.create')}}" class="btn btn-primary mt-5 mb-1">Create Post</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($posts as $post )
            <?php 
            $limitedDescription = Str::limit($post->description, 200);
            $limitedTitle = Str::limit($post->title, 55);
 
            ?>
            <tr>
                <td>{{$post->id}}</td>
                <td> {{$limitedTitle}}</td>
                <td> {{$limitedDescription}}</td>
                <td> {{$post->category->name}}</td>
                <td>{{$post->author}}</td>
               
                <td class="d-flex justify-content-between"> 
                    <a class="btn btn-primary me-2" href="">View</a>
                    <a class="btn btn-primary me-2" href="{{route('post.edit',$post->id)}}">Edit</a>
                  <form action="{{route('post.destroy',$post->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger " type="submit">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <a href="{{route('dashboard')}}" class="btn btn-secondary mt-5 mb-1">Back to Dashboard</a>
    </div>
</div>
<script>
    setTimeout(function() {
        document.getElementById('success-message').style.display = 'none';
    }, 3000); // 5000 milliseconds = 5 seconds
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
