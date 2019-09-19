@extends('layouts.app')
@section('title','MedStock')
@section('content')

 <h2> บันทึกการใช้พัสดุ </h2>
    <div class="form-group">
        <label class="font-weight-bold" for="selstock">กรุณาเลือกชื่อคลังที่ต้องการเบิกจ่ายพัสดุ:  </label>
                    <select  class="form-control" id="selstock" name="selstock">   
                             <option value="0">-กรุณาเลือก-</option>     
                            <option value="1">คลังพัสดุทางการแพทย์สาขาวิชาโรคระบบการหายใจและวัณโรค</option>
                            <option value="2">พัสดุสำนักงาน</option>
                    </select>
            
      

        <label class="font-weight-bold" for="selstock">กรุณาเลือกชื่อหมวดของพัสดุ:  </label>
        <select  class="form-control" id="selstock" name="selstock">
                <option value="0">กรุณาเลือก-</option> 
                <option value="1">เครื่องเขียน</option>      
                <option value="2">กระดาษ</option> 
                <option value="3">ตัดเย็บ</option>
        </select>
    </div>  
<!-- 
    <div class="form-group">     
        <label class="font-weight-bold" for="selstock">กรุณาเลือกชื่อพัสดุ:</label>
        <select  class="form-control" id="selstock" name="selstock">
                <option value="1">40005055-ELSA-ACTH 96 tubes (จำนวนที่มีอยู่ 5 กล่อง)</option>
                <option value="2">40005056-Cover slip (จำนวนที่มีอยู่ 12 แพ็ค)</option>         
                <option value="3">40005057-Tweet 20,100 ml (จำนวนที่มีอยู่ 3 ขวด)</option>         
              
            </select>

     
    </div>

         <div class="form-group">
            <label class="font-weight-bold" for="secret">ระบุวันที่เบิกจ่าย :</label>
            <input 
                type="date" 
                class="form-control {{ !empty(Session::get('status')['date_receive']) ? 'is-invalid' : ''}}" 
                name="date_receive" required/>
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['date_receive']) ? Session::get('status')['date_receive'] : ''}}
            </div>
        </div>
      
        <div class="form-group">
            <label class="font-weight-bold" for="secret">ระบุจำนวนพัสดุที่เบิกจ่าย  :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['item_num']) ? 'is-invalid' : ''}}" 
                name="item_num" 
                placeholder="ใส่จำนวน"  required />
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['item_num']) ? Session::get('status')['item_num'] : ''}}
            </div>
        </div>

        <div class="form-group">
            <label class="font-weight-bold" for="secret">จำนวนคงเหลือ  :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['item_num']) ? 'is-invalid' : ''}}" 
                name="item_num" 
                placeholder="คำนวณให้อัตโนมัติ"  readonly />
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['item_num']) ? Session::get('status')['item_num'] : ''}}
            </div>
        </div>

         <br>
         -->
        <div class="form-group">
          <button type="submit" class="btn btn-primary">แสดงรายการพัสดุ</button>
        </div> 
  <!-- Select a time: <input type="time" name="usr_time"> -->

        <!-- start table show data unit from database -->
    <div class="container"  style="background-color:#f5e6e1;">
    <table class="table table-striped">
            <thead>
            <tr>
                    <th>#</th>      
                    <th>รหัสพัสดุ</th>                
                    <th>ชื่อพัสดุ</th>         
                    <th>ชื่อพัสดุ(ภาษาอังกฤษ)</th>
                    <th>หน่วยนับ</th>
                    <th>บริษัทผู้ขาย</th>
                    <th>วันที่รับเข้า</th>
                    <th>จำนวนที่มีในคลัง</th>
                    <th>วันหมดอายุ</th>
                    <th>วันที่เบิกจ่าย</th>
                    <th>จำนวนเบิกจ่าย</th>
                    <th>จำนวนคงเหลือ</th>
                    <th>บันทึกเบิกจ่าย</th>

                
            </tr>
            </thead>
            <tbody id="myTable">
       
                <tr>
                    <td>1</td>
                    <td>40005055</td>
                    <td>-</td>
                    <td>ELSA-ACTH 96 tubes </td>
                    <td>กล่อง</td>
                    <td>ไบโอจีนีเทค จำกัด</td>
                    <td>09-08-2019</td>
                    <td>5</td>
                    <td>29-09-2019</td>
                    <td>17-09-2019</td>
                    <td>1</td>
                    <td>4</td>
                    <td><button type="submit" class="btn btn-primary">เบิกจ่าย</button></td>
                </tr>
                
                <tr>
                    <td>2</td>
                    <td>40005056</td>
                    <td>-</td>
                    <td>Cover slip </td>
                    <td>แพ็ค</td>
                    <td>อาร์ ซี เอ็ม ซัพพลายส์</td>
                    <td>05-09-2019</td>
                    <td>12</td>
                    <td>25-09-2019</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td><button type="submit" class="btn btn-primary">เบิกจ่าย</button></td>
                </tr>
         
            </tbody>
     </table>
@endsection