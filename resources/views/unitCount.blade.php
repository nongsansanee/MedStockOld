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
    <h2> 3.การจัดการรายชื่อหน่วยนับ </h2>
<form action="{{url('/store_unit_count')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
    
        <div class="form-group">
            <label class="font-weight-bold" for="secret">ชื่อหน่วยนับ :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['stockname']) ? 'is-invalid' : ''}}" 
                name="countname" 
                placeholder="ใส่ชื่อหน่วยนับ" required/>
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['stockname']) ? Session::get('status')['stockname'] : ''}}
            </div>
        </div>
       
    
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input"  id="customSwitch1" name="status" checked>
            <label class="custom-control-label" for="customSwitch1" >เปิด/ปิด ใช้งาน</label>
        </div>
        <div  class="form-group">
          <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
    </form>

     <!-- start table show data unit from database -->
     <div class="container"  style="background-color:#f5e6e1;">
    <table class="table table-striped">
            <thead>
            <tr>
                    <th>#</th>                
                    <th>ชื่อหน่วยนับ</th>                  
                    <th>สถานะการเปิดใช้งาน</th>
            </tr>
            </thead>
            <tbody id="myTable">
            @foreach($unit_counts as $unit_count)
                <tr>
                    <td>{{$unit_count->id}}</td>
                    <td>{{$unit_count->countname}}</td>
                    <td>{{$unit_count->getStatusName()}}</td>
                   
                
                </tr>
            @endforeach
            </tbody>
     </table>

    </div>
@endsection