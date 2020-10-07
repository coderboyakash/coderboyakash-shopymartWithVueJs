@extends('layouts.admin')
@section('adminContent')
  <div class="col-8 offset-2">
    <form data-url='{{ route("admin.add.battery") }}' data-type='POST' id='form' method='POST'>
      @csrf
      <div class="form-group">
        <label for="name">Battery Name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection
