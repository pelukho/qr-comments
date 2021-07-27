$(document).ready(function ($) {
    $('.btn-info').click(function () {
        let $this = $(this),
            $temp = $("<input>");

        $("body").append($temp);
        $temp.val($this.attr('data-value')).select();

        document.execCommand("copy");
        $temp.remove();

        alert("Ссылка скопирована!");
    });
});
