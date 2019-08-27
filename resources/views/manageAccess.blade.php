@extends('layouts.app')
@section('title','MedStock')
@section('content')
<!-- {{$units}} -->
<!-- {{$stocks}} -->

<form action="" method="post">
  <label for="selstock">1.กรุณาเลือกชื่อคลังที่ต้องการจัดการสิทธิ:</label>
  <select multiple class="form-control" id="selstock" name="selstock">
     @foreach($stocks as $stock)
        <option value="{{$stock->id}}">-{{$stock->stockname}}</option>
        
     @endforeach
  </select>

   <br>
  <label for="selstock">2.กรุณาเลือกสาขาหรือหน่วยงาน ที่ต้องการให้เข้าถึงคลัง:</label>
  <br>
    <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="accesstype" id="Radio1" value="1" required>
            <label class="form-check-label" for="inlineRadio1">ทั้งสำนักงานภาควิชาอายุรศาสตร์</label>
    </div>
    <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="accesstype" id="Radio2" value="2" >
            <label class="form-check-label" for="inlineRadio1">เฉพาะสาขาวิชา</label>
    </div>
    <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="accesstype" id="Radio3" value="3">
            <label class="form-check-label" for="inlineRadio2">เฉพาะหน่วยงาน</label>
    </div>
    <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="accesstype" id="Radio4" value="4"  @click="showUnitAll(accesstype.value)">
            <label class="form-check-label" for="inlineRadio2">ระบุเอง</label>
    </div>

    <br><br>
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
        
                @foreach($units as $unit)
                <tr>
                    <td>{{$unit->id}}</td>
                    <td>{{$unit->unitid}}</td>
                    <td>{{$unit->unitname}}</td>                  
                    <td>{{$unit->getTypeName()}}</td>
                    <td><center><input type="checkbox" class="form-check-input" value="1"></center></td>
                </tr>
                  @endforeach
            </tbody>
        </table>

     
    
    </div>
    <button type="submit" class="btn btn-primary">บันทึก</button>

  </form>
  <script>
            $(document).ready(function(){
                $("#tableunit").hide();
              
                $("#Radio1").click(function(){
                    $("#tableunit").hide();
                });

                $("#Radio2").click(function(){
                    $("#tableunit").hide();
                });

                $("#Radio3").click(function(){
                    $("#tableunit").hide();
                });

                $("#Radio4").click(function(){
                    //alert("aaaaaaaa");
                    $("#tableunit").show();
                });

            });
</script>
@endsection

