(function($) {
    'use script';
    $('.getPlanBtn').on('click', (e) => {
        let planName, planType, planPrice;
        planName = e.target.parentElement.querySelector('.planName');
        planType = e.target.parentElement.querySelector('.planType');
        planPrice = e.target.parentElement.querySelector('.planPrice');
        let package = `${planName.innerText} ${planType.innerText} ৳${planPrice.innerText}`;
        $('#package').val(package)
        $('#planModalCenter').modal('show');
        $(".modalClose").on('click', () => {
            $('#planModalCenter').modal('hide');
        })
    });
})(jQuery);