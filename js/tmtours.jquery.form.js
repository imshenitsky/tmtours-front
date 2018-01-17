// id   - prefix, ex: 'book-tour'
// path - server api parth, ex: 'orders', 'tour_requests'
function formHandle(id, path) {
    $('#' + id + '-form').on('submit', function(e) { //use on if jQuery 1.7+
        e.preventDefault();  //prevent form from submitting
        var _form= $(this),
            _input= _form.find('input');
            _input.trigger('blur');

          if(_form.find('.error').size()){
                console.log('ошибка ввода');
                return false;
            } else {
                $.ajax(api_url + '/' + path, {
                    type: 'POST',
                    dataType: 'json',
                    data: make_request(id + '-form'),
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert(jqXHR.responseJSON.error);
                    },
                    success: function(data, textStatus, jqXHR) {
                        $('#' + id + '-area').css('display', 'none');
                        $('#' + id + '-greetings').css('display', '');

                        var html = (path == 'tour_requests') ? html_success_tour_request_msg(data) : html_success_order_msg(data);
                        $('#' + id + '-greetings').html(html);
                    }
                });
            }
    });
}

function make_request(id) {
    var from_data = $('#'+ id +' :input').serializeArray();
    var request = {};
    var l = from_data.length;
    for (index = 0; index < l; ++index) {
        item = from_data[index];
        request[item.name] = item.value;
    }
    return request;
}

function cleanForm(id) {
    $('#' + id + '-form').trigger('reset');
    $('#' + id + '-greetings').html('');
    $('#' + id + '-greetings').css('display', 'none');
    $('#' + id + '-area').css('display', 'block');
}


function html_success_tour_request_msg(data) {
    str =  '<div class="popup-info success">';
    str += '    <h5>Заявка отправлена. Ожидайте звонка на номер ' + data.phone + '</h5>';
    str += '    <i class="fa fa-check"></i>';
    str += '    <p>Номер заказа: ' + data.id + '</p>';
    str += '    <div>' + data.user_name + ', ' + data.email +'</div>';
    str += '    <div>' + data.destination + ', вылет ' + data.departure_date + ' на ' + data.nights_count + ' ночей</div>';
    str += '    <div>Взрослых ' + data.tourists_count + ', детей ' + data.tourists_child_count +'</div>';
    str += '</div>';
    return str;
}

function html_success_order_msg(data) {
    str =  '<div class="popup-info success">';
    str += '    <h5>' + data.name + ', cпасибо за заказ в TmTours.</h5>';
    str += '    <i class="fa fa-check"></i>';
    str += '    <p>Номер заказа: ' + data.id + '</p>';
    str += '    <p>Цена: ' + data.price + '</p>';
    str += '    <div>' + data.arrival_country.name + ', ' + data.arrival_city.name +'</div>';
    str += '    <div>' + data.departure_to_sentence + '</div>';
    str += '</div>';
    return str;
}