$(function () {
    console.log('tmtours.jquery.order.js', api_url);

    $('#book-tour').on('submit', function(e) { //use on if jQuery 1.7+
        e.preventDefault();  //prevent form from submitting
        $.ajax(api_url + '/tour_requests', {
            type: 'POST',
            dataType: 'json',
            data: make_order_request(),
            error: function(jqXHR, textStatus, errorThrown) {
                alert(jqXHR.responseJSON.error);
                // console.log('error: ', jqXHR.responseJSON.error);
                // return show_alert('alert-danger', jqXHR.responseJSON.result);
            },
            success: function(data, textStatus, jqXHR) {
                $('#modal-greetings').css('display', '');
                $('#modal-body').css('display', 'none');
                $('#modal-greetings').html('Thank you!! Buy');
            }
        });
    });

    function make_order_request() {
        var from_data = $("#book-tour :input").serializeArray();
        var request = {};
        l = from_data.length;
        for (index = 0; index < l; ++index) {
            item = from_data[index];
            request[item.name] = item.value;
        }
        return request;
    }
});

