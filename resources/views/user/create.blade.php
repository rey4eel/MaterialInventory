
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register new material') }}</div>

                <div class="card-body">
                    <form method="POST" action="/materials" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="inputState"class="col-md-4 col-form-label text-md-right p-0">
                                    <img src="\images\plastic_48px.png" alt="plastic" width="30" height="30">Type</label>
                                <select id="material_type" name="material_type" class="form-control">
                                <option selected>Choose...</option>
                                <option>ABS</option>
                                <option>ASA</option>
                                <option>PLA</option>
                                <option>Onyx</option>
                                <option>Nylon PA6</option>
                                <option>Nylon PA12</option>
                                <option>TPU</option>
                                <option>HIPS</option>
                                <option>PET-G</option>
                                <option>Glass</option>
                                <option>Wood</option>
                                <option>MetalFill</option>
                                <option>PolySmooth</option>
                                <option>PVA</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="color" class="col-md-4 col-form-label text-md-right p-0">
                                    <img src="\images\color_wheel_30px.png" alt="plastic" width="30" height="30">
                                    Color</label>
                                    <input id="color" type="text" class="form-control @error('text') is-invalid @enderror" name="color">

                                    @error('color')
                                    <div class="alert alert-danger small p-0 m-0">{{ $message }}</div>
                                    @enderror

                                </div>
                        </div>


                        <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="length" class="col-md-4 col-form-label text-md-right p-0">
                                    <img src="\images\length_30px.png" alt="plastic" width="30" height="30">
                                        Length m*</label>
                                    <input type="text" class="form-control "name="length" id="length" autocomplete="off" value="{{ old('length') }}">

                                    @error('length')
                                    <div class="alert alert-danger small p-0 m-0">{{ $message }}</div>
                                    @enderror

                                </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="length" class="col-md-4 col-form-label text-md-right p-0">
                                <img src="\images\length_30px.png" alt="plastic" width="30" height="30">
                                   Diametr </label>
                                <input type="text" class="form-control "name="diametr" id="diametr" autocomplete="off" value="{{ old('diametr') }}">

                                @error('diametr')
                                <div class="alert alert-danger small p-0 m-0">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="barcode" class="col-md-4 col-form-label text-md-right p-0">
                                <img src="\images\qr_code_48px.png" alt="plastic" width="30" height="30">
                                    Barcode</label>
                                <input type="text" class="form-control "name="barcode" id="barcode" autocomplete="off" value="{{ old('barcode') }}">

                                @error('barcode')
                                <div class="alert alert-danger small p-0 m-0">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>



                        <div class="form-group row">
                            <div class="col-md-6">

                                <label for="image" class="col-md-4 col-form-label text-md-right p-0">
                                    <img src="\images\image_50px.png" alt="plastic" width="40" height="40">
                                    Image
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input style="width:303px" class="custom-file-input" type="file" placeholder="test" name="image" id="image" accept="image/*;capture=camera">
                                <label style="width:303px" class="custom-file-label ml-3" for="image">
                                    @if (!empty(old('image')))
                                    Image alredy exist
                                    @else
                                    Choose Image
                                    @endif
                                </label>

                                @error('image')
                                <div class="alert alert-danger small p-0 m-0">{{ $message }}</div>
                                @enderror

                            </div>
                    </div>



                        {{-- <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="image" class="col-md-4 col-form-label text-md-right p-0">Image</label>
                                    <input class="" type="file" name="image" id="image" accept="image/*;capture=camera">

                                    @error('image')
                                    <div class="alert alert-danger small p-0 m-0">{{ $message }}</div>
                                    @enderror

                                </div>
                        </div> --}}


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Add material') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
