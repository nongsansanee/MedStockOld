<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{url('/css/bootstrap-4.3.1/css/bootstrap.min.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <title>@yield('title')</title>

      
    </head>
    <!-- <body background="{{ URL::to('images/hexagon-background-942982_1280.png') }}" height="100%"> -->
    <body >
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #f5ac98;">
        <a class="navbar-brand">MedicalStock</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/index')}}">Home <span class="sr-only">(current)</span></a>
                </li>
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    การจัดการคลังพัสดุและสิทธิ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/unit')}}">1.การจัดการรายชื่อสาขา/หน่วย/สถานที่ ที่ใช้พัสดุ</a>
                    <a class="dropdown-item" href="{{url('/stock')}}">2.การจัดการรายชื่อประเภทคลัง</a>
                    <!-- <a class="dropdown-item" href="#">3.การจัดการรายชื่อประเภทหมวดในแต่ละคลัง</a>
                    <a class="dropdown-item" href="{{url('/item_stock')}}">4.การจัดการรายชื่อพัสดุ</a>
                    <a class="dropdown-item" href="{{url('/unit_count')}}">5.การจัดการรายชื่อหน่วยนับ</a>
                    <a class="dropdown-item" href="#">6.การจัดการรายชื่อบริษัทที่สั่งซื้อพัสดุ</a>   -->
                    <a class="dropdown-item" href="{{url('/manage_access/1')}}">3.การจัดการสิทธิ ให้เข้าถึงคลังเพื่อบันทึกข้อมูลพัสดุเข้าคลัง</a>          
                    <a class="dropdown-item" href="{{url('/manage_access/2')}}">4.การจัดการสิทธิ ให้เข้าถึงคลังเพื่อบันทึกการเบิกใช้พัสดุ</a>
                   
                        <!-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    บริหารจัดการคลังพัสดุ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/manage_item_type')}}">1.การจัดการรายชื่อประเภทหมวดในแต่ละคลัง</a>
                    <a class="dropdown-item" href="{{url('/item_stock')}}">2.การจัดการรายชื่อพัสดุ</a>
                    <a class="dropdown-item" href="{{url('/unit_count')}}">3.การจัดการรายชื่อหน่วยนับ</a>
                    <a class="dropdown-item" href="#">4.การจัดการรายชื่อบริษัทที่สั่งซื้อพัสดุ</a>  
                    <a class="dropdown-item" href="{{url('/add_item')}}">5.การนำเข้าพัสดุเข้าคลัง</a>  
                 
                        <!-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>

            

              
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/index')}}">บันทึกการใช้พัสดุ <span class="sr-only">(current)</span></a>
                </li>

               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    รายงานต่างๆ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">1.xxxxxx</a>
                    <a class="dropdown-item" href="#">2.xxxxxxxxx</a>
                    <a class="dropdown-item" href="#">3.xxxxxxxxxx</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    สถิติต่างๆ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">1.xxxxxx</a>
                    <a class="dropdown-item" href="#">2.xxxxxxxxx</a>
                    <a class="dropdown-item" href="#">3.xxxxxxxxxx</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <br>
    <br>
        <div class="container" >
            @yield('content')
        </div>
        <footer>
            @yield('footer')
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>