$(".update-cart").click(function(e) {
    e.preventDefault();

    var ele = $(this);

    $.ajax({
        url: "/update-cart",
        // method: "PUT",
        type: "patch",
        data: {
            _token: "{{ csrf_token() }}",
            id: ele.attr("data-id"),
            _method: "PATCH",
            quantity: ele
                .parents("tr")
                .find(".quantity")
                .val()
        },
        success: function(response) {
            window.location.reload();
        }
    });
});

$(".remove-from-cart").click(function(e) {
    e.preventDefault();

    var ele = $(this);

    if (confirm("Are you sure")) {
        $.ajax({
            url: "/remove-from-cart",
            method: "DELETE",
            data: { _token: "{{ csrf_token() }}", id: ele.attr("data-id") },
            success: function(response) {
                window.location.reload();
            }
        });
    }
});
