@extends('layouts.app')
@section('title','MedStock')
@section('content')
<!-- {{$stock_categories}} -->
 <h2> 2.การจัดการรายชื่อพัสดุ </h2>
        <label for="selstock" class="font-weight-bold">กรุณาเลือกชื่อคลังที่ต้องการเพิ่มพัสดุ:</label>
        <select multiple class="form-control" id="selstock" name="selstock">
            @foreach($stocks as $stock)
                <option value="{{$stock->id}}">-{{$stock->stockname}}</option>
                
            @endforeach
        </select>
        <!-- {{$stock::find(1)->StockCategories}} -->
        <label for="selstock" class="font-weight-bold">กรุณาเลือกชื่อหมวดของพัสดุ:</label>
        <select multiple class="form-control" id="sel-catagory" name="selstock">
               
                @foreach($stock_categories as $stock_category)
                     <option value="{{$stock_category->id}}">-{{$stock_category->name}}</option>
                
                @endforeach
        </select>
        <?php
            $a = $stock::find($stock->id)::count();
           // echo "<br>".$a."<br>";
           $b =  $stock::find($stock->id)->StockCategories;
           //echo $b;
        ?>
     

        <div class="form-group" id="item_id">
            <label class="font-weight-bold" for="secret">รหัสพัสดุ :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['item_id']) ? 'is-invalid' : ''}}" 
                name="item_id" 
                placeholder="ใส่รหัสพัสดุ" required/>
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['item_id']) ? Session::get('status')['item_id'] : ''}}
            </div>
        </div>

        <div class="form-group"  id="item_name">
            <label class="font-weight-bold" for="secret">ระบุชื่อพัสดุ ภาษาไทย :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['item_name']) ? 'is-invalid' : ''}}" 
                name="item_name" 
                placeholder="ใส่ชื่อพัสดุ" required/>
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['item_name']) ? Session::get('status')['item_name'] : ''}}
            </div>
        </div>
      
        <div class="form-group"  id="item_id_eng">
            <label class="font-weight-bold" for="secret">ระบุชื่อพัสดุ ภาษาอังกฤษ :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['item_name_eng']) ? 'is-invalid' : ''}}" 
                name="item_name_eng" 
                placeholder="ใส่ชื่อพัสดุ ภาษาอังกฤษ" />
            <div class="invalid-feedback">
                {{ !empty(Session::get('status')['item_name_eng']) ? Session::get('status')['item_name_eng'] : ''}}
            </div>
        </div>
       
        <div class="form-group"  id="unit_count">
            <label class="font-weight-bold" for="selstock">กรุณาเลือกหน่วยนับ:</label>
            <select multiple class="form-control" id="selstock" name="selstock">
                <option value="1">-กล่อง</option>      
                <option value="2">-แท่ง</option> 
                <option value="3">-หลอด</option>
            </select>
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
                    <th>ชื่อหน่วยนับ</th>
                
            </tr>
            </thead>
            <tbody id="myTable">
       
                <tr>
                    <td>xxxxxxxxxx</td>
                    <td>xxxxxxxxxx</td>
                    <td>xxxxxxxxxx</td>
                    <td>xxxxxxxxxx</td>
                
                </tr>
         
            </tbody>
     </table>
     <script>
$(document).ready(function(){
    $("#sel-catagory").hide();

    $("#selstock").on('change', function(){
        //alert("The paragraph was clicked.");
        //alert($('#selstock').val());
        // hideAll();
         var stock_id = $('#selstock').val();
        
         alert('stock_id selected='+ stock_id);
         $.ajax({
            

                type:'GET',

                url:'/get_category',

                // data:{name:name, password:password, email:email},

                success:function(data){


                            var x = document.getElementById("#sel-catagory");
                            var option = document.createElement("option");
                            // option.text = "Kiwi";
                            // data.forEach(x.add(option));
                            //x.add(option);

                            var i;
                             for (i = 0; i < data.length; i++) {
                                // console.log(data[i] + "<br>") ;
                                // option.text = data[i];

                                // console.log(option.text) ;
                                // x.add(option,x[0]);
                                $('#sel-catagory').append('<option value="i">' + data[i] + '</option>');
                            }
                                                

                //  alert(data.forEach());

                }

        });

         $("#sel-catagory").show();
    });

 
});
</script>


@endsection
