@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <ul class="d-flex-column m-auto justify-content-center text-align-center text-danger ">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    <form class="d-flex-column addform" action="/cars/create" method="POST">
        @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="make">Make</label>
                    <select id="make" class="form-control" name="make"
                        onchange="addForm({{ $carMakes }},{{ $carModels }})">
                        <option value="" selected>Choose a Car Make</option>

                        @foreach ($carMakes as $model)
                            <option value="{{ $model->id }}">{{ $model->name }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="model">Model</label>
                    <select id="model" class="form-control" name="model">
                        <option value="" selected>Choose a Car Make</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- 2 column grid layout with text inputs for the first and last names -->



        <div class="form-outline mb-4">
            <label class="form-label" for="engine">Engine Size</label>
            <input type="number" id="engine" name="engine" class="form-control" />
        </div>

        <!-- Number input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="year">Year</label>
            <input type="date" id="year" name="year" class="form-control" />
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4"></textarea>
        </div>



        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
    </form>
    <script>
        window.onload(

            var carMakes = {{ $carMakes }}
            var carModels = {{ $carModels }}

        )

    </script>
@endsection
