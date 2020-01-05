jQuery(document).ready(function ($) {
    $('#store_account').click(function (e) {
        e.preventDefault();
        var user_name = $("#text_user_name").val();
        console.log(user_name);
        var number_phone = $("#text_number_phone").val();
        console.log(number_phone);

        $.ajax({
            type: "get",
            url: "account/store",
            data: {
                user_name: user_name,
                number_phone: number_phone,
            },
            success: function (data) {
                if (data['status'] == true) {
                    alert("Bạn đã đăng ký nhận Vip Code thành công !");
                } else {
                    alert("Đã có lỗi trong quá trình. Bạn vui lòng thử lại !");
                }
            }
        });

    });
});
