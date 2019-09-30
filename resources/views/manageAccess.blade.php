@extends('layouts.app')
@section('title','MedStock')
@section('content')
@if($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif  
    @if($message = Session::get('error'))
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @endif  
<!-- {{$units}} -->
<!-- {{$stocks}} -->

<h2>3.การจัดการสิทธิ ให้เข้าถึงคลังเพื่อบันทึกข้อมูลพัสดุเข้าคลัง(ADMIN คลัง)</h2>
<form action="{{url('/store_stock_admin')}}" method="post">
 <input type="hidden" name="_token" value="{{ csrf_token()}}" >

 

  @include("components.stockComponent")

   <br>

    @include("components.unitComponent")


    <button type="submit" class="btn btn-primary">บันทึก</button>

  </form>

  @component('components.alert')
   <h1>alert</h1>
  @endcomponent
  
@endsection

