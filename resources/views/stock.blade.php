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
<form action="{{url('/store_stock')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
       
        <br>
        <div class="form-group">
            <label class="font-weight-bold" for="secret">ชื่อคลังพัสดุ ภาษาไทย :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['stockname']) ? 'is-invalid' : ''}}" 
                name="stockname" 
                placeholder="ใส่ชื่อคลังพัสดุ ภาษาไทย" required/>
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['stockname']) ? Session::get('status')['stockname'] : ''}}
            </div>
        </div>
       
        <div class="form-group">
            <label class="font-weight-bold" for="secret">ชื่อคลังพัสดุ ภาษาอังกฤษ(ถ้ามี) :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['stockengname']) ? 'is-invalid' : ''}}" 
                name="stockengname" 
                placeholder="ชื่อคลังพัสดุ ภาษาอังกฤษ(ถ้ามี)" />
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['stockengname']) ? Session::get('status')['stockengname'] : ''}}
            </div>
        </div>

        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input"  id="customSwitch1" name="status" checked>
            <label class="custom-control-label" for="customSwitch1" >เปิด/ปิด ใช้งานคลังพัสดุ</label>
        </div>
        <div  class="form-group">
          <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
    </form>
    <div class="container"  style="background-color:#f5e6e1;">
        <table class="table table-striped">
            <thead>
            <tr>
                    <th>#</th>
                    <th>ชื่อคลังพัสดุ</th>
                    <th>ชื่อคลังพัสดุ(ภาษาอังกฤษ)</th>
                    <th>สถานะการเปิดใช้งาน</th>
            </tr>
            </thead>
            <tbody id="myTable">
        
            @foreach($stocks as $stock)
                <tr>
                    <td>{{$stock->id}}</td>
                    <td>{{$stock->stockname}}</td>
                    <td>{{$stock->stockengname}}</td>
                    <td>{{$stock->status}}</td>
                </tr>
            @endforeach
        
            </tbody>
         </table>
    </div>

@endsection