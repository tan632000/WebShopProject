@extends('frontend.layouts.app')

@section('content')

<div class="wrap-title">
    <div class="container">
        <a href="">Trang chủ</a>
            &nbsp; / &nbsp;
        <a href="">Đồng hồ</a>
    </div>
</div>

<div class="wrap">
    <div class="container">
        <div class="box-2">
        <!-- title -->
            <div class="title1">
                <h1><a href="">Đồng Hồ</a></h1>
            </div>
        <!-- selection -->
            <div class="container">
                <div class="fillwatch">
                    <div class="fillwatch-s">
                        <select>
                            <option value=""> --- THƯƠNG HIỆU ---</option>
                            <option value="">Richard Mille</option>
                            <option value="">IWC</option>
                            <option value="">Breguet</option>
                            <option value="">Jacob & Co</option>
                            <option value="">Ulysse Nardin</option>
                            <option value="">Bovet</option>
                            <option value="">Đồng Hồ Để Bàn</option>
                            <option value="">Rolex</option>
                            <option value="">Hublot</option>
                            <option value="">Zenith</option>
                            <option value="">Chopard</option>
                            <option value="">Arnold & Son</option>
                            <option value="">Franck Muller</option>
                            <option value="">Patek Philippe</option>
                            <option value="">Audemars Constantin</option>
                        </select>
                    </div>
                    <div class="fillwatch-s">
                        <select>
                            <option value=""> --- KHOẢNG GIÁ ---</option>
                            <option value="">100tr -> 300tr</option>
                            <option value="">300tr -> 500tr</option>
                        </select>
                    </div>
                    <div class="fillwatch-s">
                        <select>
                            <option value=""> --- GIỚI TÍNH ---</option>
                            <option value="">Nam</option>
                            <option value="">Nữ</option>
                            <option value="">Nam & Nữ</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="box-21"> 

                <div class="box-product" id="vertu">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/rolex1.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Đồng hồ Rolex Day Date President Automatic Day Date Mens watch 118235 CHODRO</a></h3>
                    <div class="lable-0">RL 01</div>
                    <div class="price">750 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/rolex2.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Đồng hồ Rolex Day Date President Automatic Day Date 118235 CHODRP</a></h3>
                    <div class="lable-0">RL 03</div>
                    <div class="price">750 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/rolex1.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Đồng hồ Rolex Day Date President Automatic Day Date Mens watch 118235 CHODRO</a></h3>
                    <div class="lable-0">RL 01</div>
                    <div class="price">750 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/rolex5.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Đồng hồ Rolex Datejust 126231 Mặt Đen Nạm Kim Cương Dây Đeo Oyster</a></h3>
                    <div class="lable-0">RL 56</div>
                    <div class="price">303 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/rolex6.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Đồng hồ Rolex Datejust Automatic Date 126231 Mặt Số Đen Nạm Kim Cương</a></h3>
                    <div class="lable-0">RL 57</div>
                    <div class="price">303 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/rolex5.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Đồng hồ Rolex Datejust 126231 Mặt Đen Nạm Kim Cương Dây Đeo Oyster</a></h3>
                    <div class="lable-0">RL 56</div>
                    <div class="price">303 Triệu</div>
                </div>
  
                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu1.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Yellow Gold Full Pave Baguette Diamonds Bag Key</a></h3>
                    <div class="lable-0">VT 84</div>
                    <div class="price">1 Tỷ 720 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu2.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Clous de Paris Red Gold</a></h3>
                    <div class="lable-0">VT 87</div>
                    <div class="price">820 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu3.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Rose Gold</a></h3>
                    <div class="lable-0">VT 82</div>
                    <div class="price">750 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu4.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Red Gold Black DLC</a></h3>
                    <div class="lable-0">VT 93</div>
                    <div class="price">450 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu5.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Navy Alligator</a></h3>
                    <div class="lable-0">VT 119</div>
                    <div class="price">370 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu6.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Ultimate Black</a></h3>
                    <div class="lable-0">VT 92</div>
                    <div class="price">380 Triệu</div>
                </div>   
                
                <div class="box-product" id="vertu">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/rolex1.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Đồng hồ Rolex Day Date President Automatic Day Date Mens watch 118235 CHODRO</a></h3>
                    <div class="lable-0">RL 01</div>
                    <div class="price">750 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/rolex2.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Đồng hồ Rolex Day Date President Automatic Day Date 118235 CHODRP</a></h3>
                    <div class="lable-0">RL 03</div>
                    <div class="price">750 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/rolex1.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Đồng hồ Rolex Day Date President Automatic Day Date Mens watch 118235 CHODRO</a></h3>
                    <div class="lable-0">RL 01</div>
                    <div class="price">750 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/rolex5.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Đồng hồ Rolex Datejust 126231 Mặt Đen Nạm Kim Cương Dây Đeo Oyster</a></h3>
                    <div class="lable-0">RL 56</div>
                    <div class="price">303 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/rolex6.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Đồng hồ Rolex Datejust Automatic Date 126231 Mặt Số Đen Nạm Kim Cương</a></h3>
                    <div class="lable-0">RL 57</div>
                    <div class="price">303 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/rolex5.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Đồng hồ Rolex Datejust 126231 Mặt Đen Nạm Kim Cương Dây Đeo Oyster</a></h3>
                    <div class="lable-0">RL 56</div>
                    <div class="price">303 Triệu</div>
                </div>
  
                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu1.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Yellow Gold Full Pave Baguette Diamonds Bag Key</a></h3>
                    <div class="lable-0">VT 84</div>
                    <div class="price">1 Tỷ 720 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu2.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Clous de Paris Red Gold</a></h3>
                    <div class="lable-0">VT 87</div>
                    <div class="price">820 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu3.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Rose Gold</a></h3>
                    <div class="lable-0">VT 82</div>
                    <div class="price">750 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu4.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Red Gold Black DLC</a></h3>
                    <div class="lable-0">VT 93</div>
                    <div class="price">450 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu5.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Navy Alligator</a></h3>
                    <div class="lable-0">VT 119</div>
                    <div class="price">370 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu6.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Ultimate Black</a></h3>
                    <div class="lable-0">VT 92</div>
                    <div class="price">380 Triệu</div>
                </div> 

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu5.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Navy Alligator</a></h3>
                    <div class="lable-0">VT 119</div>
                    <div class="price">370 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu6.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Ultimate Black</a></h3>
                    <div class="lable-0">VT 92</div>
                    <div class="price">380 Triệu</div>
                </div>    
            </div>
        </div>
        <!--  -->
        <div class="next-page">
            <span class="disable"><<</span>
            <span class="current">1</span>  | 
            <span><a href="">2</a></span>  | 
            <span><a href="">3</a></span>  | 
            <span><a href="">4</a></span>  | 
            <span><a href="">5</a></span>  | 
            <span><a href="">6</a></span>  | 
            <span><a href="">7</a></span>  | 
            <span><a href="">8</a></span> 
            <span class="next"><a href="">>></a></span>
        </div>
    </div>
</div>
@endsection