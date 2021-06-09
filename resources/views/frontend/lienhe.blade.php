@extends('frontend.layouts.app')

@section('content')

<div class="wrap-title">
    <div class="container">
        <a href="">Trang chủ</a>
            &nbsp; / &nbsp;
        <a href="">Dịch vụ</a>
    </div>
</div>
<div class="wrap">
    <div class="container">
        <div class="box-2">
            <div class="title1">
                <h1><a href="">Liên hệ</a></h1>
            </div>
            <div class="contact">
                <div class="contact1">
                    <strong>LUXURY HANOI</strong><br>
                    <span>
                        Copyright © 2016 luxuryhanoi.vn All right reserved.<br>
                        Email: info@luxuryhanoi.vn<br>
                        61 phố Ô Chợ Dừa, P. Ô Chợ Dừa, Q Đống Đa, Tp Hà Nội<br>
                        Hotline : 098.65.77777 - 098.11.55555
                    </span>
                    <form action="">
                    <table>
                        <tbody>
                            <tr>
                                <td>Họ tên</td>
                                <td><input type="text" size="40"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" size="40"></td>
                            </tr>
                            <tr>
                                <td>Số điện thoại</td>
                                <td><input type="text" size="40"></td>
                            </tr>
                            <tr>
                                <td>Tiêu đề</td>
                                <td><input type="text" size="40"></td>
                            </tr>
                            <tr>
                                <td>Nội dung</td>
                                <td><textarea name="" cols="40" rows="8"></textarea></td>
                            </tr>
                            <tr>
                                <td>&nbsp</td>
                                <td><button type="submit">Gửi</button></td>
                            </tr>
                        </tbody>
                    </table>
                    </form>
                </div>
                <div class="contact2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.0822934655802!2d105.827588!3d21.019511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab786a73777b%3A0x97a88760c8306d4b!2sLuxury+Hanoi+-+Luxury+Mobile+Phones%2CLuxury+Watches+%26+Jewelry!5e0!3m2!1svi!2s!4v1427813214740" width="100%" height="420" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection