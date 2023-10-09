@extends('layouts.app')
@section('content')

    <h1>Edit/Update form</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>

        @endif
    </div>
    <div>
        <div>
            <a href="{{route('product.create')}}">Registration Form</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>email</th>
                <th>Contact</th>
                <th>Skills</th>
                <th>Weaknesses</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($products as $product )
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->lastname}}</td>
                    <td>{{$product->email}}</td>
                    <td>{{$product->contact}}</td>
                    <td>{{$product->skills}}</td>
                    <td>{{$product->weaknesses}}</td>
                    <td>
                        <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.destroy', ['product' =>$product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
