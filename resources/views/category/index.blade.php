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
    <div class="display-3">Category Details</div>
        <div>
            <a href="{{route('category.create')}}" class="btn btn-primary mt-5 mb-1">Create Category</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center"> Category ID</th>
                <th class="text-center"> Category name</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
              
         @foreach ($categorys as $category)
            <tr>
                <td class="text-center">{{$category->id}}</td>
                <td class="text-center"> {{$category->name}}</td>
                <td class="d-flex justify-content-around text-center"> 
                    <a class="btn btn-primary me-2" href="{{route('category.edit',$category->id)}}">Edit</a>
                  <form action="{{route('category.destroy',$category->id)}}" method="post">
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
