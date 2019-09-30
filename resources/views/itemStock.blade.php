@extends('layouts.app')
@section('title','MedStock')
@section('content')

 <h2> 2.การจัดการรายชื่อพัสดุ </h2>
   <form action="{{url('/add_item_stock')}}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token()}}" >
        <label for="selstock" class="font-weight-bold">กรุณาเลือกชื่อคลังที่ต้องการเพิ่มพัสดุ:</label>
        <select multiple class="form-control" id="selstock" name="sel-stock">
            @foreach($stocks as $stock)
                <option value="{{$stock->id}}">-{{$stock->stockname}}</option>
                
            @endforeach
        </select>
       
        <label for="selstock" id="label-sel-category" class="font-weight-bold">กรุณาเลือกชื่อหมวดของคลัง:</label>
        <select multiple class="form-control" id="sel-category" name="sel-category">     
                     <!-- <option value="1">-xxx</option>        -->
        </select>
      
     

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
                placeholder="ใส่ชื่อพัสดุ" />
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
            <select multiple class="form-control" id="selstock" name="sel-count-unit">
                @foreach($Unit_counts as $Unit_count)
                    <option value="{{$Unit_count->id}}">-{{$Unit_count->countname}}</option>
                    
                @endforeach
            </select>
         </div>

         <br>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
    </form>
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
    $("#label-sel-category").hide();
    $("#sel-category").hide();

    $("#selstock").on('change', function(){
      
         var stock_id = $('#selstock').val();
         var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      
        
        //  alert('stock_id selected='+ stock_id);
     
         $.ajax({
                type: 'post',
                url: '/get_category',
                data: {
                         '_token': "{{ csrf_token() }}",
                         'id': stock_id
                       },
                // dataType: 'JSON',

                // data:{name:name, password:password, email:email},

                success: function(data){
                         console.log(data);
                         var keyCount  = Object.keys(data).length
                         console.log(keyCount);
                        //    alert(data);
                          
                            var x = document.getElementById("#sel-category");
                            var option = document.createElement("option");
                 
                        if (keyCount==0){
                            $("#label-sel-category").hide();
                            $("#sel-category").hide();
                            $('#sel-category').empty();
                        }else{
                            $("#label-sel-category").show();
                            var i;
                             for (i = 0; i < keyCount; i++) {
                                seq = i+1;
                              //  $('#sel-category').append('<option value="i">' + data[i].name + '</option>');
                              $('#sel-category').append('<option value='+data[i].id+'>'+ seq + '.' + data[i].name + '</option>');
                            }
                            $("#sel-category").show();
                        }                      

                //  alert(data.forEach());

                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                 }
             
                // alert('error post');
        });

      
    });

 
});
</script>


@endsection
