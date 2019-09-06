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
<form action="{{url('/store_stock_admin/1')}}" method="post">
 <input type="hidden" name="_token" value="{{ csrf_token()}}" >
  <label for="selstock">1.กรุณาเลือกชื่อคลังที่ต้องการจัดการสิทธิ:</label>
  <select multiple class="form-control" id="selstock" name="selstock" required>
     @foreach($stocks as $stock)
        <option value="{{$stock->id}}">-{{$stock->stockname}}</option>
        
     @endforeach
  </select>

   <br>
  <label for="selstock">2.กรุณาเลือกสาขาหรือหน่วยงาน ที่ต้องการให้บันทึกข้อมูลพัสดุเข้าคลังนี้:</label>
  <br>

    <!-- <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="accesstype" id="Radio1" value="1" required>
            <label class="form-check-label" for="inlineRadio1">ทั้งภาควิชาอายุรศาสตร์</label>
    </div>
    <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="accesstype" id="Radio2" value="2" >
            <label class="form-check-label" for="inlineRadio1">เฉพาะสำนักงาน</label>
    </div>
    <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="accesstype" id="Radio3" value="3">
            <label class="form-check-label" for="inlineRadio2">เฉพาะสาขาวิชา</label>
    </div>
    <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="accesstype" id="Radio4" value="4"  @click="showUnitAll(accesstype.value)">
            <label class="form-check-label" for="inlineRadio2">ระบุเอง</label>
    </div> -->

    <!-- <br><br> -->
    <div class="container" id="tableunit"  style="background-color:#f5e6e1;">
        <table  class="table table-striped">
            <thead>
            <tr>
                    <th>#</th>
                    <th>รหัสสาขา/หน่วยงาน</th>
                    <th>ชื่อหน่วยงาน</th>
                    <th>ประเภท</th>
                    <th>เลือก</th>
            </tr>
            </thead>
            <tbody id="myTable">
                <?php $i=1;?>
                @foreach($units as $unit)
                <?php $i++;?>
                <tr>
                    <td>{{$unit->id}}</td>
                    <td>{{$unit->unitid}}</td>
                    <td>{{$unit->unitname}}</td>                  
                    <td>{{$unit->getTypeName()}}</td>
                    <td><center><input type="checkbox" class="form-check-input" name="unit_id[]" value="{{$unit->unitid}}"></center></td>
                </tr>
                  @endforeach
            </tbody>
        </table>

     
    
    </div>
    <button type="submit" class="btn btn-primary">บันทึก</button>

  </form>
  
@endsection

