 $(function () {
        let container = $('#pagination');
        container.pagination({
            dataSource: [
{number: "Number 1"},
{number: "Number 2"},
{number: "Number 3"},
{number: "Number 4"},

            ],
            pageSize: 5,
            callback: function (data, pagination) {
                var dataHtml = '<ul>';

                $.each(data, function (index, item) {
                    dataHtml += '<li>' + item.number + '</li>';
                });

                dataHtml += '</ul>';

                $("#container").html(dataHtml);
            }
        })
    })