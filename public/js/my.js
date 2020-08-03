$(document).ready(function() {
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function() {
        readURL(this);
    });
    var $star_rating = $('.star-rating .fa');

    var SetRatingStar = function() {
        return $star_rating.each(function() {
            if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                return $(this).removeClass('fa-star-o').addClass('fa-star');
            } else {
                return $(this).removeClass('fa-star').addClass('fa-star-o');
            }
        });
    };

    $star_rating.on('click', function() {
        $star_rating.siblings('input.rating-value').val($(this).data('rating'));
        return SetRatingStar();
    });

    SetRatingStar();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".js_rating_product").click(function(event) {
        event.preventDefault();
        let url = $(this).attr('href');
        let number = $star_rating.siblings('input.rating-value').val();
        let content = $("#message").val();
        if (content && number) {
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    number: number,
                    r_content: content
                },
                success: function(data) {
                    console.log(data);
                }
            });
        }
        console.log(url);
    });

    $("#send_reply").click(function(event) {
        event.preventDefault();
        $('.hidden').removeClass('hidden');
    });
})