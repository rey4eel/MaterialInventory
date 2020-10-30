
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="row card">
                <div class="card-header col">{{ __('Available on the stock') }}</div>
            </div>

        </div>
    </div>
</div>


@foreach ($material as $data)


<div class="card text-center mt-3">
    <div class="card-body p-0">
        <div class="row">
            <div class="col-5">
                <img src="{{asset('storage/' . $data->image)}}" alt="image" width="120" height="120">
            </div>
            <div class="col-7">
                <div class="row p-0 m-0"><p class="m-0 font">Material: {{$data->material_type}}</p></div>
                <div class="row p-0 m-0"><p class="m-0 font">Color: {{$data->color}}</p></div>
                <div class="row p-0 m-0"><p class="m-0 font">Barcode: {{$data->barcode}}</p></div>
                <?php if ($data->length < 300) {$class = 'text-danger';} ?>
                <div class="row p-0 m-0"><p class="m-0 font {{ $class ?? '' }} ">Length: {{$data->length}} m</p></div>
                <div class="row p-0 m-0"><p class="m-0 font">Diameter: 1.75 mm</p></div>
            </div>
        </div>
        <div class="row">
            <div class="col-auto mr-auto mx-auto w-50 p-3 text-black text-center">
                <span class="m-0 font">China PLA</span>
            </div>
            <div class="col-auto mx-auto">
                <img src="\images\help_50px.png" alt="edit" width="50" height="50">
                {{-- <button class="btn" onclick="window.location='{{ url("/material/") . $data->material_type }}'">Details</button> --}}
                <a class="btn" href="/materials/{{$data->id}}">Details</a>
            </div>
        </div>
    </div>
</div>

@endforeach

<div class="row justify-content-center mt-5">
    {{$material->links()}}
</div>

@endsection
