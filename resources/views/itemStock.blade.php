@extends('layouts.app')
@section('title','MedStock')
@section('content')

  <label for="selstock">1.กรุณาเลือกชื่อคลังที่ต้องการเพิ่มพัสดุ:</label>
  <select multiple class="form-control" id="selstock" name="selstock">
     @foreach($stocks as $stock)
        <option value="{{$stock->id}}">-{{$stock->stockname}}</option>
        
     @endforeach
  </select>
@endsection