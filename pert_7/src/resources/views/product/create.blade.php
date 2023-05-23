@extends('layouts.main')


@section('content')
    
<form action="{{ route('product.create') }}" method="POST">
    {{ csrf_field() }}
    @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
    @endif
    {{--  <div class="mb-3">
      <label for="name_product" class="form-label">Name</label>
      <input type="text" class="form-control" name="name_product">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>  --}}
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="name">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
   
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
    
@endsection