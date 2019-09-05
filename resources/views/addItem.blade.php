@extends('layouts.app')
@section('title','MedStock')
@section('content')

 <h2> 5.การนำเข้าพัสดุเข้าคลัง </h2>
    <div class="form-inline">
        <label class="font-weight-bold" for="selstock">กรุณาเลือกชื่อคลังที่ต้องการเพิ่มพัสดุ:  </label>
                    <select  class="form-control" id="selstock" name="selstock">   
                             <option value="0">-กรุณาเลือก-</option>     
                            <option value="1">พัสดุทางการแพทย์</option>
                            <option value="2">พัสดุสำนักงาน</option>
                    </select>
            
        </select>

        <label class="font-weight-bold" for="selstock">กรุณาเลือกชื่อหมวดของพัสดุ:  </label>
        <select  class="form-control" id="selstock" name="selstock">
                <option value="0">กรุณาเลือก-</option> 
                <option value="1">เครื่องเขียน</option>      
                <option value="2">กระดาษ</option> 
                <option value="3">ตัดเย็บ</option>
        </select>
    </div>  

    <div class="form-inline">     
        <label class="font-weight-bold" for="selstock">กรุณาเลือกชื่อพัสดุ:</label>
        <select  class="form-control" id="selstock" name="selstock">
                <option value="1">ปากกาน้ำเงิน</option>      
                <option value="2">ปากกาแดง</option> 
                <option value="3">ปากกาดำ</option>
                <option value="3">ดินสอ</option>
            </select>

        <label class="font-weight-bold" for="selstock">กรุณาเลือกหน่วยนับ:</label>
        <select  class="form-control" id="selstock" name="selstock">
                <option value="1">กล่อง</option>      
                <option value="2">แท่ง</option> 
                <option value="3">หลอด</option>
        </select>
    </div>

         <div class="form-group">
            <label class="font-weight-bold" for="secret">ระบุวันที่ตรวจรับพัสดุ :</label>
            <input 
                type="date" 
                class="form-control {{ !empty(Session::get('status')['date_receive']) ? 'is-invalid' : ''}}" 
                name="date_receive" required/>
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['date_receive']) ? Session::get('status')['date_receive'] : ''}}
            </div>
        </div>
      
        <div class="form-group">
            <label class="font-weight-bold" for="secret">ระบุจำนวนพัสดุ  :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['item_num']) ? 'is-invalid' : ''}}" 
                name="item_num" 
                placeholder="ใส่จำนวน"  required />
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['item_num']) ? Session::get('status')['item_num'] : ''}}
            </div>
        </div>

         <br>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
  <!-- Select a time: <input type="time" name="usr_time"> -->

        <!-- start table show data unit from database -->
    <div class="container"  style="background-color:#f5e6e1;">
    <table class="table table-striped">
            <thead>
            <tr>
                    <th>#</th>                
                    <th>ชื่อพัสดุ</th>         
                    <th>ชื่อพัสดุ(ภาษาอังกฤษ)</th>
                    <th>จำนวนที่มีในคลัง</th>
                    <th>หน่วยนับ</th>
                    <th>วันที่ตรวจรับพัสดุ</th>
                
            </tr>
            </thead>
            <tbody id="myTable">
       
                <tr>
                    <td>xxxxxxxxxx</td>
                    <td>xxxxxxxxxx</td>
                    <td>xxxxxxxxxx</td>
                    <td>xxxxxxxxxx</td>
                    <td>xxxxxxxxxx</td>
                    <td>xxxxxxxxxx</td>
                </tr>
         
            </tbody>
     </table>
@endsection