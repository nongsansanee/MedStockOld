
<?php  $stocks = \App\Stock::all(); ?>

<!-- <label class="font-weight-bold" for="selstock">1.กรุณาเลือกชื่อคลังที่ต้องการจัดการสิทธิ:</label> -->
  <select  class="form-control" id="selstock" name="selstock" required>
     @foreach($stocks as $stock)
        <option value="{{$stock->id}}">-{{$stock->stockname }}</option>
        
     @endforeach
  </select>