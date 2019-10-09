@extends('layouts.app')
@section('title','MedStock')
@section('content')

@if($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
 @endif

 @if($errors->any())
        <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>

                @endforeach
        </div>
@endif

 <h2> บันทึกการใช้พัสดุ </h2>
  <form action="{{url('/cut_stock_item')}}" method="post">
        <div class="form-group">
        <input  type="hidden" name="_token" value="{{ csrf_token()}}" >
        <label class="font-weight-bold" >สาขา/หน่วย:  user_login  </label><br>
            <label class="font-weight-bold" >กรุณาเลือกชื่อคลังที่ต้องการเบิกจ่ายพัสดุ:  </label>           
               @include("components.stockComponent")    


            <label class="font-weight-bold" >กรุณาเลือกชื่อหมวดของพัสดุ:  </label>
            <select  class="form-control" id="selstockcategory" name="selstockcategory">
                    <option value="0">กรุณาเลือก-</option> 
                    <option value="1">เครื่องเขียน</option>      
                    <option value="2">กระดาษ</option> 
                    <option value="3">ตัดเย็บ</option>
            </select>
        </div>  

        <div class="form-group">
          <button type="submit" class="btn btn-primary">แสดงรายการพัสดุ</button>
        </div> 

    </form>
  <!-- Select a time: <input type="time" name="usr_time"> -->

        <!-- start table show data unit from database -->
    <div class="container"  style="background-color:#f5e6e1;">
    <table class="table table-striped">
            <thead>
            <tr>
                    <th>#</th>      
                    <th>รหัสพัสดุ</th>                
                    <th>ชื่อพัสดุ</th>         
                    <th>หน่วยนับ</th>
                    <th>วันที่รับเข้า</th>
                    <th>จำนวนที่มีในคลัง</th>
                    <th>วันหมดอายุ</th>
                    <th>จำนวนคงเหลือ</th>
                    <th>บันทึกเบิกจ่าย</th>

                
            </tr>
            </thead>
            <tbody id="myTable">
            @if (isset($stock_items))
              @foreach($stock_items as $stock_item)
                    <tr>
                        <td>{{$stock_item->id}}</td>
                        <td>{{$stock_item->item_code}}</td>
                        <td><a href= "#">{{$stock_item->item_name}}</a></td>
                        <td>{{$stock_item->unit_count->countname}} </td>
                        <td>{{$stock_item->date_receive}} </td>
                        <td>{{$stock_item->item_receive}} </td>
                        <td>{{$stock_item->date_expire}} </td>     
                        <td>-</td>                
                      {{-- <td>{{$stock_item->cut_stock->item_use}} </td> --}} 
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" id="btn_withdraw" 
                                     data-target="#ModalWithdraw" 
                                     data-id="{{ $stock_item->id}}" 
                                     data-item-id="{{ $stock_item->item_code}}" 
                                     onclick="clickButton(this);">เบิกจ่าย
                                     </button></td>
                    </tr>
                    <!-- The Modal -->
                    {{-- <div class="modal fade" id="ModalWithdraw_{{ $stock_item->id}}">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">บันทึกการใช้พัสดุ {{ $stock_item->item_name }}</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="form-group">
                                    <label class="font-weight-bold" > จำนวนสินค้าที่มี :  </label>
                                    <input type="text" value="{{ $stock_item->item_receive}}">
                                    </div>
                                    <label class="font-weight-bold" > จำนวนที่เบิกใช้ :  </label>
                                    <input type="text" >
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">บันทึก</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                </div>
                                
                            </div>
                        </div>
                    </div> --}}
                @endforeach
            
            @endif
         
            </tbody>
     </table>

     <!-- The Modal -->
     <div class="modal fade" id="ModalWithdraw">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">บันทึกการใช้พัสดุ</h4>
                    <!-- <input type="text" id="item_name" size="10" readonly> -->
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{ url('/test')}}" method="POST">
                <!-- Modal body -->
                    <div class="modal-body">
                        @csrf
                            <input type="text" name="item_code" id="item_code" hidden>
                            <input type="text" name="stocks_id" id="stocks_id" hidden>
                            <input type="text" name="stock_categories_id" id="stock_categories_id" hidden>
                            <label class="font-weight-bold" > จำนวนคงเหลือ :  </label>
                        <!-- <label id="count"></label> -->
                            <input type="text" id="count" size="5" readonly>

                            <label class="font-weight-bold"  > จำนวนที่เบิกใช้ :  </label>
                            <input type="text" size="5" name="item_use" required/>

                    </div>
                
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="save_cut_stock"  >บันทึก</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

  <script>
     console.log(stock_items)
    if (typeof @json($stock_items) !== 'undefined' || @json($stock_items) == null) {
           var stock_items = @json($stock_items);
        }
       
  
    function clickButton(element) {
      
     
        // console.log(stock_items)
        let index = stock_items.findIndex(stock_item => stock_item.id == element.dataset.id )
        if (index === -1 ) return;
        let stock_item = stock_items[index];
        console.log(stock_item);
        $("input[name='item_code']").val(stock_item.item_code)
        $("input[name='stocks_id']").val(stock_item.stocks_id)
        $("input[name='stock_categories_id']").val(stock_item.stock_categories_id)
        $("#count").val(stock_item.item_receive) 
        //$("#item_name").val(stock_item.item_name) 
        $("#ModalWithdraw").show();
    }
</script>
@endsection