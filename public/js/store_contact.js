jQuery(document).ready(function ($) {
    $('#submit_contact').click(function (e) {
        e.preventDefault();
        var name = $("#text_name").val();
        console.log(name);
        var email = $("#text_email").val();
        console.log(email);
        var content = $("#text_content").val();
        console.log(content);

        $.ajax({
            type: "get",
            url: "contact/store",
            data: {
                name: name,
                email: email,
                content: content,
            },
            success: function (data) {

                if (data['status'] == true) {
                    $("#load_submit_success").html(
                        '<h3 class="submit_contact_s"> Cảm ơn bạn.Chúng tôi sẽ liên hệ trong thời gian sớm nhất! </h3>'
                    );
                } else {
                    $("#load_submit_success").html(
                        '<h3 class="submit_contact_f"> Cảm ơn bạn.Chúng tôi sẽ liên hệ trong thời gian sớm nhất! </h3>'
                    );
                }
            }
        });

    });
});
