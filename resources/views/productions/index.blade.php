@extends('shared.dashboard')
@section('content')
<div class="content-header">
    <div class="container-fluid">
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>image</th>
                    <th>Price</th>
                    <th>manufacturing_company</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productions as $production)
                <tr>
                    <td>{{ $production->id }}</td>
                    <td>{{ $production->name }}</td>
                    <td>{{ $production->description }}</td>
                    <td>
                        <img src="{{ $production->image }}" style="width:100px; height:100px">
                    </td>
                    <td>{{ $production->price }}</td>
                    <td>{{ $production->manufacturing_company }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="/production/{{ $production->id }}/edit">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="/production/{{ $production->id }}/destroy">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection('content')