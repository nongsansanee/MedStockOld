@extends('layouts.app')
@section('title','MedStock')
@section('content')

<div class="container"  >
    <h2>1.การจัดการรายชื่อประเภทหมวดในแต่ละคลัง</h2>
     <form action="{{url('/store_unit')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
        <br>

        <div class="form-group">
         
            <label class="font-weight-bold"  for="selstock">กรุณาเลือกชื่อคลังที่ต้องการเพิ่มหมวดพัสดุ:</label>
            <select multiple class="form-control" id="selstock" name="selstock">        
                    <option value="1">-พัสดุทางการแพทย์</option>
                    <option value="2">-พัสดุสำนักงาน</option>
            </select>
        </div>

       

        <div class="form-group">
            <label class="font-weight-bold" for="secret">ระบุชื่อหมวดของพัสดุ ภาษาไทย :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['item_type']) ? 'is-invalid' : ''}}" 
                name="item_type" 
                placeholder="ใส่ชื่อหมวดของพัสดุ" required/>
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['item_type']) ? Session::get('status')['item_type'] : ''}}
            </div>
        </div>
      
        <div class="form-group">
            <label class="font-weight-bold" for="secret">ระบุชื่อหมวดของพัสดุ ภาษาอังกฤษ(ถ้ามี) :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['item_type_eng']) ? 'is-invalid' : ''}}" 
                name="item_type_eng" 
                placeholder="ใส่ชื่อสาขาหรือชื่อหน่วยงาน ภาษาอังกฤษ" />
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['item_type_eng']) ? Session::get('status')['item_type_eng'] : ''}}
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
                    <th>ชื่อหมวดในคลัง(ภาษาอังกฤษ)</th>
                
            </tr>
            </thead>
            <tbody id="myTable">
       
                <tr>
                    <td>xxxxxxxxxx</td>
                    <td>xxxxxxxxxx</td>
                    <td>xxxxxxxxxx</td>
                 
                
                </tr>
         
            </tbody>
     </table>

    </div>

@endsection