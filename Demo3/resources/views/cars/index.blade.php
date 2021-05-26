@extends('layouts.app')

@section('content')
    <h1 class=" d-flex align-self-center justify-content-center mb-4">Cars</h1>
    @if (Auth::user())
        <a href="/cars/create" class="pl-5 ml-5 mb-4">Add New Car &rrarr;</a>
    @endif

    <div class="container">
        <ul class="list-group ">
            @foreach ($cars as $car)
                <li class="list-group-item clearfix mb-1">
                    <img class="img-responsive img-rounded"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReDjAyny314wcQpF5mH-vgLLKqFzbUA3XOJw&usqp=CAU"
                        alt="" />
                    <h3 class="list-group-item-heading">
                        {{ $car->make }}
                    </h3>
                    <p class="list-group-item-text lead">
                        {{ $car->model }}
                        <br />
                        <a href="/cars/details/{{ $car->id }}"><small>Details &rrarr;</small></a>
                    </p>
                    <div class="btn-toolbar justify-content-end" role="toolbar" aria-label="">

                        {{-- <a href="#" class="btn btn-default">Add to cart</a> --}}
                        <a href="/cars/edit/{{ $car->id }}" class="btn btn-primary mr-2">Edit</a>
                        <form action="/cars/delete/{{ $car->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><small>Delete</small></button>
                        </form>

                    </div>
                </li>

            @endforeach
        </ul>
    </div>

@endsection
