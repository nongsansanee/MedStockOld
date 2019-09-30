
<?php  $stocks = \App\Stock::all(); ?>

<label for="selstock">1.กรุณาเลือกชื่อคลังที่ต้องการจัดการสิทธิ:</label>
  <select multiple class="form-control" id="selstock" name="selstock" required>
     @foreach($stocks as $stock)
        <option value="{{$stock->id}}">-{{$stock->stockname }}</option>
        
     @endforeach
  </select>