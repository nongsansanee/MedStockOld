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

<div class="container"  >
    <h2>1.การจัดการรายชื่อประเภทหมวดในแต่ละคลัง</h2>
     <form action="{{url('/manage_item_type')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
        <br>

        <div class="form-group">
         
            <label class="font-weight-bold"  for="selstock">กรุณาเลือกชื่อคลังที่ต้องการเพิ่มหมวดพัสดุ:</label>
            <select multiple class="form-control" id="selstock" name="selstock">        
                 @foreach($stocks as $stock)
                    <option value="{{$stock->id}}">-{{$stock->stockname }}</option>
                    
                @endforeach
            </select>
        </div>

       

        <div class="form-group">
            <label class="font-weight-bold" for="secret">ระบุชื่อหมวดของพัสดุ ภาษาไทย :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['name']) ? 'is-invalid' : ''}}" 
                name="name" 
                placeholder="ใส่ชื่อหมวดของพัสดุ" required/>
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['name']) ? Session::get('status')['name'] : ''}}
            </div>
        </div>
      
      
       
     
        <div class="form-group">
          <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
    </form>
    </div>
    <!-- start table show data unit from database -->
    <div class="container"  style="background-color:#f5e6e1;">
    <table class="table table-striped">
            <thead>
            <tr>
                    <th>#</th>
                 
                    <th>ชื่อหมวดในคลัง</th>
                    <!-- <th>ชื่อย่อ(ภาษาไทย)</th> -->
                    <th>stock_id</th>
                    <th>ชื่อคลัง</th>
                
            </tr>
            </thead>
            <tbody id="myTable">
       
                 
            @foreach($stock_categories as $stock_category)
                <tr>
                    <td>{{$stock_category->id}}</td>
                    <td>{{$stock_category->name}}</td>
                    <td>{{$stock_category->stock_id}}</td>
                    <td>{{$stock_category->stock->stockname}}</td>
                  
                </tr>
            @endforeach
         
            </tbody>
     </table>

    </div>

@endsection