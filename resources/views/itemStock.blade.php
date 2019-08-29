@extends('layouts.app')
@section('title','MedStock')
@section('content')

 <h2> 4.การจัดการรายชื่อพัสดุ </h2>
  <label for="selstock">1.กรุณาเลือกชื่อคลังที่ต้องการเพิ่มพัสดุ:</label>
  <select multiple class="form-control" id="selstock" name="selstock">
     @foreach($stocks as $stock)
        <option value="{{$stock->id}}">-{{$stock->stockname}}</option>
        
     @endforeach
  </select>
@endsection