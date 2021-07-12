@extends('frontend.layouts.app')

@section('content')

<div class="breadcrumb">
   <div class="container">
        <a href="{{url('/')}}">Trang chủ</a>
            &nbsp; / &nbsp;
        <a href="{{url('/dichvu')}}">Dịch Vụ</a>
             &nbsp; / &nbsp;
        <a href="{{url('/baomatthongtin')}}">Bảo mật thông tin</a>
          
   </div>
</div>
<div id="wrapper">
     <div class="container">
           <div class="boxmain">
                <div class="gach1">
                     <h1 class="titlemain">Bảo mật thông tin khách hàng</h1>
                </div>

                <div class="padd4all">
                     <div class="content" style=" margin-top: 30px">
                          <div>
                                <span style="color: #b22222;">
                                    <strong>
                                        <span style="font-size:20px" > Chính sách bảo mật</span>
                                    </strong>
                                </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    Luxury Hanoi cam kết sẽ bảo mật những thông tin mang tính riêng tư của khách hàng. Quý khách vui lòng đọc bản “Chính sách bảo mật” dưới đây để hiểu hơn những cam kết mà chúng tôi thực hiện, nhằm tôn trọng và bảo vệ quyền lợi của người truy cập:
                                    </span>
                              </span>
                          </div>
                          <div>
                                <span style="color: #b22222;">
                                    <strong>
                                        <span style="font-size:16px" > 1. Thu nhập thông tin cá nhân</span>
                                    </strong>
                                </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - Các thông tin thu thập thông qua website : luxuryhanoi.vn sẽ giúp chúng tôi:                                    </span>
                              </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    • Hỗ trợ khách hàng khi mua sản phẩm                               </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    • Cung cấp cho bạn thông tin mới nhất trên Website của chúng tôi                           </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                   • Xem xét và nâng cấp nội dung và giao diện của Website                         
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                  • Thực hiện các hoạt động quảng bá liên quan đến các sản phẩm và dịch vụ của Luxury Hanoi                    
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                 - Để truy cập và sử dụng một số dịch vụ tại www.luxuryhanoi.vn, quý khách có thể sẽ được yêu cầu đăng ký với chúng tôi thông tin cá nhân (Email, Họ tên, Số ĐT liên lạc…). Mọi thông tin khai báo phải đảm bảo tính chính xác và hợp pháp. luxuryhanoi.vn không chịu mọi trách nhiệm liên quan đến pháp luật của thông tin khai báo.
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                 - Chúng tôi cũng có thể thu thập thông tin về số lần viếng thăm, bao gồm số trang quý khách xem, số links (liên kết) bạn click và những thông tin khác liên quan đến việc kết nối đến www.luxuryhanoi.vn. Chúng tôi cũng thu thập các thông tin mà trình duyệt Web (Browser) quý khách sử dụng mỗi khi truy cập vào website www.luxuryhanoi.vn, bao gồm: địa chỉ IP, loại Browser, ngôn ngữ sử dụng, thời gian và những địa chỉ mà Browser truy xuất đến.
                          </div>
                          <div>
                                <span style="color: #b22222;">
                                    <strong>
                                        <span style="font-size:16px" > 2. Sử dụng thông tin cá nhân:</span>
                                    </strong>
                                </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                 - Luxury Hanoi thu thập và sử dụng thông tin cá nhân quý khách với mục đích phù hợp và hoàn toàn tuân thủ nội dung của “Chính sách bảo mật” này.
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                 - Khi cần thiết, chúng tôi có thể sử dụng những thông tin này để liên hệ trực tiếp với bạn dưới các hình thức như: gởi thư ngỏ, đơn đặt hàng, thư cảm ơn, thông tin về kỹ thuật và bảo mật, quý khách có thể nhận được thư định kỳ cung cấp thông tin sản phẩm, dịch vụ mới, thông tin về các sự kiện sắp tới hoặc thông tin tuyển dụng nếu quý khách đăng kí nhận email thông báo.
                          </div>
                          <div>
                                <span style="color: #b22222;">
                                    <strong>
                                        <span style="font-size:16px" > 3. Chia sẻ thông tin cá nhân:</span>
                                    </strong>
                                </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                 - Ngoại trừ các trường hợp về Sử dụng thông tin cá nhân như đã nêu trong chính sách này, chúng tôi cam kết sẽ không tiết lộ thông tin cá nhân bạn ra ngoài.
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                 - Trong một số trường hợp, chúng tôi có thể thuê một đơn vị độc lập để tiến hành các dự án nghiên cứu thị trường và khi đó thông tin của bạn sẽ được cung cấp cho đơn vị này để tiến hành dự án. Bên thứ ba này sẽ bị ràng buộc bởi một thỏa thuận về bảo mật mà theo đó họ chỉ được phép sử dụng những thông tin được cung cấp cho mục đích hoàn thành dự án.
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                - Chúng tôi có thể tiết lộ hoặc cung cấp thông tin cá nhân của bạn trong các trường hợp thật sự cần thiết như sau: (a) khi có yêu cầu của các cơ quan pháp luật; (b) trong trường hợp mà chúng tôi tin rằng điều đó sẽ giúp chúng tôi bảo vệ quyền lợi chính đáng của mình trước pháp luật; (c) tình huống khẩn cấp và cần thiết để bảo vệ quyền an toàn cá nhân của các thành viên www.luxuryhanoi.vn khác.
                          </div>
                          <div>
                                <span style="color: #b22222;">
                                    <strong>
                                        <span style="font-size:16px" > 4. Truy xuất thông tin cá nhân: </span>
                                    </strong>
                                </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - Bất cứ thời điểm nào quý khách cũng có thể truy cập và chỉnh sửa những thông tin cá nhân của mình theo các liên kết (website's links) thích hợp mà chúng tôi cung cấp.
                          </div>
                          <div>
                                <span style="color: #b22222;">
                                    <strong>
                                        <span style="font-size:16px" > 5. Bảo mật thông tin cá nhân: </span>
                                    </strong>
                                </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - Khi bạn gửi thông tin cá nhân của bạn cho chúng tôi, bạn đã đồng ý với các điều khoản mà chúng tôi đã nêu ở trên, Luxuryhanoi.vn cam kết bảo mật thông tin cá nhân của quý khách bằng mọi cách thức có thể. Chúng tôi sẽ sử dụng nhiều công nghệ bảo mật thông tin khác nhau như: chuẩn quốc tế PCI, SSL,… nhằm bảo vệ thông tin này không bị truy lục, sử dụng hoặc tiết lộ ngoài ý muốn.
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - Tuy nhiên do hạn chế về mặt kỹ thuật, không một dữ liệu nào có thể được truyền trên đường truyền internet mà có thể được bảo mật 100%. Do vậy, chúng tôi không thể đưa ra một cam kết chắc chắn rằng thông tin quý khách cung cấp cho chúng tôi sẽ được bảo mật một cách tuyệt đối an toàn, và chúng tôi không thể chịu trách nhiệm trong trường hợp có sự truy cập trái phép thông tin cá nhân của quý khách như các trường hợp quý khách tự ý chia sẻ thông tin với người khác…. Nếu quý khách không đồng ý với các điều khoản như đã mô tả ở trên, Chúng tôi khuyên quý khách không nên gửi thông tin đến cho chúng tôi.
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - Vì vậy,luxuryhanoi.vn cũng khuyến cáo quý khách nên bảo mật các thông tin liên quan đến mật khẩu truy xuất của quý khách và không nên chia sẻ với bất kỳ người nào khác.
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - Nếu sử dụng máy tính chung nhiều người, quý khách nên đăng xuất, hoặc thoát hết tất cả cửa sổ Website đang mở.
                          </div>
                          <div>
                                <span style="color: #b22222;">
                                    <strong>
                                        <span style="font-size:16px" > 6. Sử dụng “Cookie” </span>
                                    </strong>
                                </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - luxuryhanoi.vn dùng "Cookie" để giúp cá nhân hóa và nâng cao tối đa hiệu quả sử dụng thời gian trực tuyến của quý khách.
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - Một cookie là một file văn bản được đặt trên đĩa cứng của bạn bởi một máy chủ của trang web. Cookie không được dùng để chạy chương trình hay đưa virus vào máy tính của quý khách. Cookie được chỉ định vào máy tính của quý khách và chỉ có thể được đọc bởi một máy chủ trang web trên miền được đưa ra cookie cho quý khách.
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - Một trong những mục đích của Cookie là cung cấp những tiện ích để tiết kiệm thời gian của quý khách khi truy cập tại website: www.luxuryhanoi.vn hoặc viếng thăm website luxuryhanoi.vn lần nữa mà không cần đăng ký lại thông tin sẵn có.
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - Quý khách có thể chấp nhận hoặc từ chối dùng cookie. Hầu hết những Browser tự động chấp nhận cookie, nhưng quý khách có thể thay đổi những cài đặt để từ chối tất cả những cookie nếu quý khách thích. Tuy nhiên, nếu quý khách chọn từ chối cookie, điều đó có thể gây cản trở và ảnh hưởng không tốt đến một số dịch vụ và tính năng phụ thuộc vào cookie tại website www.luxuryhanoi.vn
                          </div>
                          <div>
                                <span style="color: #b22222;">
                                    <strong>
                                        <span style="font-size:16px" > 7. Quy định về “Spam”:</span>
                                    </strong>
                                </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - luxuryhanoi.vn thực sự quan ngại đến vấn nạn Spam (thư rác), các Email giả mạo danh tín chúng tôi gởi đi. Do đó, mobihanghieu.com khẳng định chỉ gởi Email đến quý khách khi và chỉ khi quý khách có đăng ký hoặc sử dụng dịch vụ từ hệ thống của chúng tôi.
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - www.luxuryhanoi.vn cam kết không bán, thuê lại hoặc cho thuê email của quý khách từ bên thứ ba. Nếu quý khách vô tình nhận được Email không theo yêu cầu từ hệ thống chúng tôi do một nguyên nhân ngoài ý muốn, xin vui lòng nhấn vào link từ chối nhận Email này kèm theo, hoặc thông báo trực tiếp đến ban quản trị Website.
                          </div>
                          <div>
                                <span style="color: #b22222;">
                                    <strong>
                                        <span style="font-size:16px" > 8. Thay đổi về chính sách:</span>
                                    </strong>
                                </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - Chúng tôi hoàn toàn có thể thay đổi nội dung trong trang này mà không cần phải thông báo trước, để phù hợp với các nhu cầu của mobihanghieu.com cũng như nhu cầu và sự phản hồi từ khách hàng nếu có. Khi cập nhật nội dung chính sách này, chúng tôi sẽ chỉnh sửa lại thời gian “Cập nhật lần cuối” bên dưới.
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - Nội dung “Chính sách bảo mật” này chỉ áp dụng tại www.luxuryhanoi.vn, không bao gồm hoặc liên quan đến các bên thứ ba đặt quảng cáo hay có links tại www.luxuryhanoi.vn. Chúng tôi khuyến khích bạn đọc kỹ chính sách An toàn và Bảo mật của các trang web của bên thứ ba trước khi cung cấp thông tin cá nhân cho các trang web đó. Chúng tôi không chịu trách nhiệm dưới bất kỳ hình thức nào về nội dung và tính pháp lý của trang web thuộc bên thứ ba.
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - Vì vậy, bạn đã đồng ý rằng, khi bạn sử dụng website của chúng tôi sau khi chỉnh sửa nghĩa là bạn đã thừa nhận, đồng ý tuân thủ cũng như tin tưởng vào sự chỉnh sửa này. Do đó, chúng tôi đề nghị bạn nên xem trước nội dung trang này trước khi truy cập các nội dung khác trên website cũng như bạn nên đọc và t ham khảo kỹ nội dung “Chính sách bảo mật” của từng website mà bạn đang truy cập.
                          </div>
                          <div>
                                <span style="color: #b22222;">
                                    <strong>
                                        <span style="font-size:16px" > 9. Thông tin liên hệ:</span>
                                    </strong>
                                </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - Chúng tôi luôn hoan nghênh các ý kiến đóng góp, liên hệ và phản hồi thông tin từ bạn về “Chính sách bảo mật” này. Nếu bạn có những thắc mắc liên quan xin vui lòng liên hệ theo địa chỉ Email: luxuryhanoi.vn@gmail.com
                          </div>
                         
                          

                         
                         
                          
                     </div>
                     <p class="detail" style="text-align: right;">
                          <a href="">[Quay lại]</a>
                     </p>
                     <br>
                     <br>
                     <br>
                     <h2 id="tinlienquan" style=" font-size: 20px;
                                                  margin-bottom: 15px;
                                                  color: #000;
                                                  font-family: inherit;
                                                  text-transform: uppercase;
                                                  font-weight: bold;">
                         Các tin liên quan
                    </h2>

                    <h3 class="tinhot" style="font-size: 16px; padding-left: 15px">
                         <i class="fas fa-caret-right"></i>
                         <a href="{{url('/cachthucthanhtoan')}}" style="color:#808080">Cách thức thanh toán</a>
                    </h3>
                    <h3 class="tinhot" style="font-size: 16px; padding-left: 15px">
                         <i class="fas fa-caret-right"></i>
                         <a href="{{url('/chinhsachdoitra')}}" style="color:#808080">Chính sách đổi trả hàng</a>
                    </h3>
                    <h3 class="tinhot" style="font-size: 16px; padding-left: 15px">
                         <i class="fas fa-caret-right"></i>
                         <a href="{{url('/chinhsachvanchuyen')}}" style="color:#808080">Chính sách vận chuyển</a>
                    </h3>
                </div>

           </div>
     </div>
</div>

@endsection