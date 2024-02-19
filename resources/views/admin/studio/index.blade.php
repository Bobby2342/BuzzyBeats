@extends('admin.layout.layout')
@section('content')


@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container mt-5">
<a href="{{route('studio.create')}}"><button class="btn btn-primary">Add</button></a>
    <div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($studio as $item)


                <tr class="">
                    <td >{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->address}}</td>
                    <td>
                        <form action="{{route('studio.destroy', $item->id)}}" method="post">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit">Delete</button></form>


                        <a href="{{route('studio.edit', $item->id)}}"><button class="btn btn-primary">Edit</button></a> </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>

@endsection
