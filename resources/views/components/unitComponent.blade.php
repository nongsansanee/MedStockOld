
<?php $units = \App\Unit::all(); ?>
<label for="selstock">2.กรุณาเลือกสาขาหรือหน่วยงาน ที่ต้องการให้บันทึกข้อมูลพัสดุเข้าคลังนี้:</label>
  <br>
    <div class="container" id="tableunit"  style="background-color:#f5e6e1;">
        <table  class="table table-striped">
            <thead>
            <tr>
                    <th>#</th>
                    <th>รหัสสาขา/หน่วยงาน</th>
                    <th>ชื่อหน่วยงาน</th>
                    <th>ประเภท</th>
                    <th>เลือกกกกก</th>
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