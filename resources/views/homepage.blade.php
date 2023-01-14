@extends('layouts.welcome')
@section('body')
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Identification Number:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID number">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe Yourself"></textarea>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Default radio
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Second default radio
  </label>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection