@extends('layouts.app')
@section('title','MedStock')
@section('content')

<form action="{{url('/store')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
       
        <div class="form-group">
            <label class="font-weight-bold" for="app_name">รหัสสาขา/หน่วยงาน :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['unitid']) ? 'is-invalid' : ''}}" 
                name="unitid" 
                placeholder="ใส่เลขรหัสสาขาหรือรหัสหน่วยงาน" required/>
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['unitid']) ? Session::get('status')['unitid'] : ''}}
            </div>
        </div>
        <div class="form-group">
            <label class="font-weight-bold" for="secret">ชื่อสาขา/หน่วยงาน ภาษาไทย :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['unitname']) ? 'is-invalid' : ''}}" 
                name="unitname" 
                placeholder="ใส่ชื่อสาขาหรือชื่อหน่วยงาน" required/>
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['unitname']) ? Session::get('status')['unitname'] : ''}}
            </div>
        </div>
        <div class="form-group">
            <label class="font-weight-bold" for="secret">ชื่อย่อ สาขา/หน่วยงาน ภาษาไทย (ถ้ามี):</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['shortname']) ? 'is-invalid' : ''}}" 
                name="shortname" 
                placeholder="ใส่ชื่อย่อสาขาหรือชื่อหน่วยงาน ภาษาไทย(ถ้ามี)" />
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['shortname']) ? Session::get('status')['shortname'] : ''}}
            </div>
        </div>
        <div class="form-group">
            <label class="font-weight-bold" for="secret">ชื่อสาขา/หน่วยงาน ภาษาอังกฤษ(ถ้ามี) :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['unitengname']) ? 'is-invalid' : ''}}" 
                name="unitengname" 
                placeholder="ใส่ชื่อสาขาหรือชื่อหน่วยงาน ภาษาอังกฤษ" />
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['unitengname']) ? Session::get('status')['unitengname'] : ''}}
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