@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <ul class="d-flex-column align-self-center justify-content-center  text-danger ">
            @foreach ($errors->all() as $error)
                <li class="align-self-center">{{ $error }}</li>
            @endforeach
        </ul>

    @endif
    <form class="d-flex-column addform" action="/cars/edit/{{ $car->id }}" method="POST">
        @csrf
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="make">Make</label>
                    <select id="make" class="form-control" name="make"
                        onchange="addForm({{ $carMakes }},{{ $carModels }})">
                        @foreach ($carMakes as $make)
                            <option value="{{ $make->id }}">{{ $make->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="model">Model</label>
                    <select id="model" class="form-control" name="model">

                        @foreach ($carModels as $model)
                            <option value="{{ $model->model }}">{{ $model->model }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>


        <div class="form-outline mb-4">
            <label class="form-label" for="engine">Engine Size</label>
            <input type="number" id="engine" name="engine" class="form-control" value='{{ $car->engineSize }}' />
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="year">Year</label>
            <input type="date" id="year" name="year" class="form-control" value='{{ $car->year }}' />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="description">Description</label>
            <textarea class="form-control" name="description" id="description"
                rows="4">{{ $car->description }}'</textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
    </form>
@endsection
