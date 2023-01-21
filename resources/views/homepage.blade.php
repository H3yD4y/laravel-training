@extends('layouts.app')
@section('content')

<div class="container">
<div class="card">
  <div class="card-body">
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Identification Number:</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID number">
      </div>
    
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Description:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe Yourself"></textarea>
        <div class="form-check">
    </div>
    <label for="exampleFormControlTextarea1">Status:</label>
    <select class="custom-select">
      <option selected>Kindly Select your status</option>
      <option value="Pend">Pending</option>
      <option value="Comp">Completed</option>
    </select>
    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection
</div>