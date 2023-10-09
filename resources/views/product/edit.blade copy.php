<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label>Name:</label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}" />
        </div>
        <div>
            <label>Last Name:</label>
            <input type="text" name="lastname" placeholder="Last Name" value="{{$product->lastname}}" />
        </div>
        <div>
            <label>Email:</label>
            <input type="text" name="email" placeholder="Enter Your email" value="{{$product->email}}" />
        </div>
        <div>
            <label>Contact:</label>
            <input type="text" name="contact" placeholder="Phone Number" value="{{$product->contact}}" />
        </div>
        <div>
            <label>Skills:</label>
            <input type="text" name="skills" placeholder="Skill" value="{{$product->skills}}" />
        </div>
        <div>
            <label>Weaknesses:</label>
            <input type="text" name="weaknesses" placeholder="Weaknesses" value="{{$product->weaknesses}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>

    </form>
</body>
</html>
