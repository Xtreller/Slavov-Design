@extends('layouts.app')
@section('content')
    <form class="d-flex-column addform" action="/addMake" method="POST">
        @csrf
        @method('POST')
        <h3>Add Make</h3>
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
           
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="model">Make</label>
                    <input type="text" id="make" name="make" class="form-control" />
                    </select>
                </div>
            </div>
        </div>
        <button class="btn btn-success">Submit Make</button>
    </form>
    <form class="d-flex-column addform" action="/addModel" method="POST">
        @csrf
        @method('POST')
        <h3>Add Category</h3>
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="form-outline mb-4">
                <label class="form-label" for="engine">Model</label>
                <select id="make" class="form-control" name="make_id">
                    @foreach ($carModels as $model)
                        <option value="{{ $model->id }}">{{ $model->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="model">Model</label>
                    <input type="text" id="make" name="model" class="form-control" />
                    </select>
                </div>
            </div>
        </div>
        <button class="btn btn-success">Submit Model</button>
    </form>
@endsection
