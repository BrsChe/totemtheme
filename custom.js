jQuery(function($){
    $('#loadmore').click(function(){ // клик на кнопку
        $('#loadmore a').text('Загрузка...'); // меняем текст на кнопке
        // получаем нужные переменные
        var data = {
            'action': 'loadmore',
            'posts_per_page': posts_per_page,
            'cat': cat,
            'page' : current_page
        };
        // отправляем Ajax запрос
        $.ajax({
            url:ajaxurl,
            data:data,
            type:'POST',
            success:function(res) {
                if(res) {
                    $('#loadmore a').text('Показать ещё'); // добавляем новые посты
                    $('#loadmore').before(res); // добавляем новые посты
                    current_page++; // записываем новый номер страницы
                    if (current_page === Number(max_pages) + 1) $("#loadmore").remove(); // если последняя страница, удаляем кнопку
                } else {
                    $('#loadmore').remove(); // если посты не были получены так же удаляем кнопку
                }
            },
            error: (res) => {
                debugger;
            }
        });
    });
});