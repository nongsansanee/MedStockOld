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
    <h2>1.การจัดการรายชื่อสาขา/หน่วย/สถานที่ ที่ใช้พัสดุ</h2>
     <form action="{{url('/store_unit')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
        <br>
        <div class="form-group" >
            <label class="font-weight-bold" for="app_name">รหัสสาขา/หน่วยงาน :</label>
            <input 
                type="number" 
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
        <label class="font-weight-bold" for="secret">สังกัด :</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="unittype" id="inlineRadio1" value="1" required>
            <label class="form-check-label" for="inlineRadio1">สำนักงาน</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="unittype" id="inlineRadio1" value="2" >
            <label class="form-check-label" for="inlineRadio1">สาขาวิชา</label>
        </div>
        <!-- <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="unittype" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">หน่วยงาน</label>
        </div> -->
     
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
                    <th>รหัสสาขา/หน่วยงาน</th>
                    <th>ชื่อหน่วยงาน</th>
                    <!-- <th>ชื่อย่อ(ภาษาไทย)</th> -->
                    <th>ชื่อหน่วยงาน(ภาษาอังกฤษ)</th>
                    <th>สังกัด</th>
            </tr>
            </thead>
            <tbody id="myTable">
            @foreach($units as $unit)
                <tr>
                    <td>{{$unit->id}}</td>
                    <td>{{$unit->unitid}}</td>
                    <td>{{$unit->unitname}}</td>
                    <!-- <td>{{$unit->shortname}}</td> -->
                    <td>{{$unit->unitendname}}</td>
                    <td>{{$unit->getTypeName()}}</td>
                
                </tr>
            @endforeach
            </tbody>
     </table>

    </div>

@endsection