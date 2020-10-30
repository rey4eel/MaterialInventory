
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Details data') }}</div>
            </div>

        </div>
    </div>
</div>


<div class="card text-center mt-3">
    <div class="card-body p-0">
        <div class="row">
            <div class="col-5">
                <img src="{{asset('storage/' . $material->image )}}" alt="image" width="120" height="120">
            </div>
            <div class="col-7">
                <div class="row p-0 m-0"><p class="m-0 font">Material: {{$material->material_type}}</p></div>
                <div class="row p-0 m-0"><p class="m-0 font">Color: {{$material->color}}</p></div>
                <div class="row p-0 m-0"><p class="m-0 font">Barcode: {{$material->barcode}}</p></div>
                <div class="row p-0 m-0"><p class="m-0 font ">Length: {{$material->length}} m</p></div>
                <div class="row p-0 m-0"><p class="m-0 font">Diameter: 1.75 mm</p></div>
            </div>
        </div>
        <div class="row">
            <div class="col-auto mx-auto">
                <img src="\images\edit_100px.png" alt="edit" width="50" height="50">
                <a class="btn" href="/materials/{{$material->id}}/edit">Edit</a>
            </div>
            <div class="col-auto mx-auto">
                <form action="/materials/{{$material->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <img src="\images\delete_trash_100px.png" alt="edit" width="50" height="50">
                    <button class="btn btn-link" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
