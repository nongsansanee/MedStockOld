@extends('layouts.app')
@section('title','MedStock')
@section('content')

<form action="{{url('/store')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
       
      
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
    
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    
    <table class="table table-striped">
    <thead>
      <tr>
            <th>#</th>
            <th>Application Name</th>
            <th>Token</th>
            <th>Regis Date</th>
      </tr>
    </thead>
    <tbody id="myTable">
   
        <tr>
            <td>aaaaa</td>
            <td>bbbbbbb</td>
            <td>ccccccccc</td>
            <td>ddddddddd</td>
        </tr>
  
    </tbody>
  </table>

@endsection