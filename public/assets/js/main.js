$(document).ready(function() {

    // add to cart home page

    $('.addtocart').on('click', function() {
        var count = $('.count');
        var productSku = $(this).data('productsku');

        $.ajax({
            type: 'GET',
            url: '/add-to-cart',
            data: {
                productSku: productSku,
                _token: '{{ csrf_token() }}',
            },
            success: function(response) {

                $('#successMessage').fadeIn();
                console.log('productSku');
                count.html(response.countCart);

                setTimeout(function() {
                    $('#successMessage').fadeOut();
                }, 3000);

            },
            error: function(error) {
                console.error('Error adding to cart:', error);
            }
        });
    });

    // cart process to checkout

    function generateRandomString(length) {
        const charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        let randomString = '';
        for (let i = 0; i < length; i++) {
            const randomIndex = Math.floor(Math.random() * charset.length);
            randomString += charset[randomIndex];
        }
        return randomString;
    }

    // Function to redirect to another page with the random string
    function redirectToAnotherPage() {
        const destinationUrl = '/checkout?' + generateRandomString(20) + '=' + generateRandomString(10);
        window.location.href = destinationUrl;
    }

    $('#proceedToCheckout').on('click', function() {

        redirectToAnotherPage();
    });


    // checkout Blade
    csrfToken = $('meta[name="csrf-token"]').attr('content');

    const loginBtn = document.getElementById("login-btn");
    loginBtn.addEventListener('click', () => {
        loginBtn.classList.add("loading");
        loginBtn.innerHTML = '';

        setTimeout(() => {
            $('#checkout').submit();
        }, 4000);
    });



});