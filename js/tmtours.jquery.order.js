$(function () {
    $('#book-tour-form').on('submit', function(e) { //use on if jQuery 1.7+
        e.preventDefault();  //prevent form from submitting
        $.ajax(api_url + '/tour_requests', {
            type: 'POST',
            dataType: 'json',
            data: make_order_request(),
            error: function(jqXHR, textStatus, errorThrown) {
                alert(jqXHR.responseJSON.error);
            },
            success: function(data, textStatus, jqXHR) {
                display_success_order(data);
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

    function display_success_order(data) {
        $('#book-tour-modal-greetings').css('display', '');
        $('#book-tour-area').css('display', 'none');
        $('#book-tour-modal-greetings').html(make_html_success_msg(data));
    }

    function make_html_success_msg(data) {
        str =  '<div class="popup-info success">';
        str += '    <h5>Заявка отправлена. Ожидайте звонка на номер ' + data.phone + '</h5>';
        str += '    <i class="fa fa-check"></i>';
        str += '    <p>Номер заказа #' + data.id + '</p>';
        str += '    <div>' + data.user_name + ', ' + data.email +'</div>';
        str += '    <div>' + data.destination + ', вылет ' + data.departure_date + ' на ' + data.nights_count + ' ночей</div>';
        str += '    <div>Взрослых ' + data.tourists_count + ', детей ' + data.tourists_child_count +'</div>';
        str += '</div>';
        return str;
    }
});

