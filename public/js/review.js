jQuery(document).ready(function ($) {
    $('#review-form').submit(function (e) {
        e.preventDefault()
        let categoryId = new URLSearchParams(document.location.search),
            defaultCategory = $('[name="default-category"]').attr('content');
        categoryId = categoryId.get('code') ? +categoryId.get('code') : +defaultCategory;

        let $this = $(this),
            formData = {
                review_author: $this.find('input[name="review_author"]').val(),
                review_author_phone: $this.find('input[name="review_author_phone"]').val(),
                review_author_email: $this.find('input[name="review_author_email"]').val(),
                review_content: $this.find('textarea[name="review_content"]').val(),
                review_rating: $this.find('input[name="review_rating"]:checked').val(),
                _token: $this.find('input[name="_token"]').val(),
                review_group_id: categoryId
            },
            invalidClass = 'is-invalid';

        $.ajax({
            type: 'POST',
            url: '/send_review',
            dataType: 'json',
            data: formData,
            beforeSend: function () {
                $(`.form-control.${invalidClass}`).removeClass(invalidClass)
            },
            success: function(response) {
                if(response.errors) {
                    const { errors } = response;
                    for(let key in errors) {
                        if(errors.hasOwnProperty(key)) {
                            $(`[name="${key}"]`).first().addClass(invalidClass);
                        }
                    }
                }

                if(response.hasOwnProperty('saved') && response.saved){
                    $this[0].reset();
                    let showMessage = new bootstrap.Modal(document.getElementById('messageModal'));
                    showMessage.show();

                    $('.btn-close').click(() => showMessage.hide());
                }

            },
            error: function(e) {
                console.log(e);
            }
        });
    });
});
