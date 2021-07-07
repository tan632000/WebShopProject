jQuery(document).ready(function($) {
    var native_width = 0,
        native_height = 0;
    // kích hoạt hiệu ứng khi hover vào image
    $('.magnify').mousemove(function(e) {

        // đâuù tiên sẽ kích hoạt kích thước thật của ảnh
        if (!native_width && !native_height) {
            var image_object = new Image();
            image_object.src = $('.small.').attr('src');

            native_width = image_object.width;
            native_height = image_object.height;

        } else {
            // mx my là tọa độ của chuột so với ảnh
            var magnify_offset = $(this).offset();
            var mx = e.pageX - magnify_offset.left;
            var my = e.pageY - magnify_offset.top;

            // fadeout kính lúp khi chuột bên ngoài ảnh
            if (mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0) {
                $('.large').fadeIn('fast');
            } else {
                $('large').fadeOut('fast');
            }

            if ($('.large').is(':visible')) {
                // ảnh trong kính lúp

                // mx / độ rộng ảnh nhỏ sẽ ra tỉ lệ của chuột vs ảnh và nhân vs độ rộng của kích thước thâth
                // sẽ ra vị trí tương ứng vs chuột trên màn ảnh to
                // một nửa độ rộng thật để căn ảnh giữa kính lúp 
                // dùng function mathround để làm tròn
                // vì background position nên cần trả về giá trị âm
                rx = Math.round(mx / $('.small').width() * native_width - $('.large').width() / 2) * -1;
                ry = Math.round(my / $('.small').height() * native_height - $('.large').height() / 2) * -1;

                var bgp = rx + 'px ' + ry + 'px';

                // di chuyển kích lúp theo chuột
                var px = mx - $('.large').width() / 2;
                var py = my - $('.large').height() / 2;

                $('.large').css({
                    left: px,
                    top: py,
                    "background-position": bgp
                });

            }
        }
    });
});