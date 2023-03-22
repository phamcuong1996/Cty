@extends('shared.dashboard')
@push('css')
    <link rel="stylesheet" href="{{mix('css/production.css')}}">
@endpush
@section('content')
<div class="content-header">
    <div class="container-fluid">
    </div>
</div>
<section class="content">
    <div class="d-flex flex-column align-items-center">
        <form action="{{ route('production.update') }}" method="POST" enctype="multipart/form-data" class="w-50 p-3 border border-dark rounded">
            {{ csrf_field() }}
            <div class="form-group ">
                <label for="exampleInputEmail1">name</label>
                <input type="text" class="form-control" placeholder="name" name="name" value="{{$productions->name}}">
                @error('name')
                     <p class="text-danger mt-2 -m-15">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group ">
                <label for="exampleInputPassword1">description</label>
                <input type="text" class="form-control" placeholder="description" name="description" value="{{$productions->description}}">
                @error('description')
                     <p class="text-danger mt-2 -m-15">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group ">
                <label for="exampleInputPassword1">image</label>
                <input type="text" class="form-control" placeholder="Password" name="image" value="{{$productions->image}}">
                @error('image')
                     <p class="text-danger mt-2 -m-15">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group ">
                <label for="exampleInputPassword1">price</label>
                <input type="text" class="form-control" placeholder="Password" name="price" value="{{$productions->price}}">
                @error('price')
                     <p class="text-danger mt-2 -m-15">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group ">
                <label for="exampleInputPassword1">manufacturing_company</label>
                <input type="text" class="form-control" placeholder="Password" name="manufacturing_company" value="{{$productions->manufacturing_company}}">
                @error('manufacturing_company')
                     <p class="text-danger mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>
@endsection('content')