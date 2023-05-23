@extends('layouts.main')


@section('content')
{{--  dd{{ $product }}
<h1>Cek</h1>  --}}
<table class="table">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Name</th>
            
        </tr>
    </thead>
    <tbody>
            @foreach ($product as $pr)
          <tr>
            <th scope="row">{{ $pr->id}}</th>
            <td>{{ $pr->name}}</td>
           
          </tr>
          @endforeach
         
        </tbody>
      </table>
@endsection