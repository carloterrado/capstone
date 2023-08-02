<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ Session::get('title') }}</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ url('css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="{{ url('css/dataTable.css') }}">
    <link rel="stylesheet" href="{{ url('css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/date-picker.css') }}">
    <link rel="stylesheet" href="{{ url('css/slick-theme.css') }}">
    <link href="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/cssanimation.min.css" rel="stylesheet">



    <!-- <link rel="stylesheet" href="{{ url('css/datepicker-main.css') }}"> -->


</head>

<body>
    <div class="max-w-[1500px] mx-auto ">
        <!-- Header start -->
        @include('front.layout.front-header')
        <!-- Header end -->


        <!-- Sidebar start -->
        @include('front.layout.front-sidebar')
        <!-- Sidebar end -->

        <!-- Main content start -->
        <div id="main" class="main-content">
            @yield('content')
        </div>

        <!-- Main content end -->

        <!-- Footer start -->
        @include('front.layout.front-footer')
        <!-- Footer end -->
    </div>


    <script src="{{ url('js/app.js') }}"></script>
    <script src="{{ url('front/js/index.js') }}"></script>
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('front/js/custom.js') }}"></script>
    <script src="{{ url('js/magnific-popup.min.js') }}"></script>
    <script src="{{ url('js/jquery.Datatable.js') }}"></script>
    <script src="{{ url('js/slick.min.js') }}"></script>
    <script src="https://rawcdn.githack.com/yesiamrocks/scrolly.js/2a3d10b8065c42ad000859cf38ef55e6fff60973/scrolly.min.js"></script>

    <script>
       window.onload = function() {
          scrolly();
       }; 
    </script>

    <script>
        $('#ongoing-transaction-table').DataTable({
            ordering: false,
            stateSave: true,
        });
        $('#history-transaction-table').DataTable({
            //   ordering: false,
            stateSave: true,
            order: [
                [0, 'desc']
            ],
        });

        //   CAR BOOKING CALENDAR
        $('.date-input').each(function() {
            var input1 = $(this)[0];

            var data = $(input1).data('bookdates');
            var bookdates = [];

            for (let i = 0; i < data.length; i++) {
                if (data[i].status === 'approved' || data[i].status === 'ongoing') {
                    var starts = new Date(data[i].start_date);
                    var ends = new Date(data[i].end_date);
                    var set = new Date(data[0].end_date);
                    set.setDate(set.getDate() + 1);

                    while (starts <= ends) {
                        bookdates.push(fecha.format(new Date(starts), 'YYYY-MM-DD'));
                        starts.setDate(starts.getDate() + 1);
                    }
                }
            }
            var picker = new Datepicker(input1, {
                inline: true,
                autoClose: false,
                disabledDates: bookdates,
                // onSelectRange: function() {
                //     console.log(input1.value)
                // }

            });

        });
        $('.zoomable-image').magnificPopup({
            type: 'image',
            gallery: {
                enabled: false
            }
        });
        $(document).on('click', '.account-management', function() {
            $('.questions').hide()
            $('.category').removeClass('outline')
            $('.category').children().removeClass('text-accent-regular').addClass('text-gray-600')
            $(this).children().removeClass('text-gray-600').addClass('text-accent-regular')
            $(this).addClass('outline')
            $('#account-management').show()
        })
        $(document).on('click', '.booking-and-payment', function() {
            $('.questions').hide()
            $('.category').removeClass('outline')
            $('.category').children().removeClass('text-accent-regular').addClass('text-gray-600')
            $(this).children().removeClass('text-gray-600').addClass('text-accent-regular')
            $(this).addClass('outline')
            $('#booking-and-payment').show()
        })
        $(document).on('click', '.car-sharing', function() {
            $('.questions').hide()
            $('.category').removeClass('outline')
            $('.category').children().removeClass('text-accent-regular').addClass('text-gray-600')
            $(this).children().removeClass('text-gray-600').addClass('text-accent-regular')
            $(this).addClass('outline')
            $('#car-sharing').show()
        })
        $(document).on('click', '.pickup-and-dropoff', function() {
            $('.questions').hide()
            $('.category').removeClass('outline')
            $('.category').children().removeClass('text-accent-regular').addClass('text-gray-600')
            $(this).children().removeClass('text-gray-600').addClass('text-accent-regular')
            $(this).addClass('outline')
            $('#pickup-and-dropoff').show()
        })
        $(document).on('click', '.fees-and-policies', function() {
            $('.questions').hide()
            $('.category').removeClass('outline')
            $('.category').children().removeClass('text-accent-regular').addClass('text-gray-600')
            $(this).children().removeClass('text-gray-600').addClass('text-accent-regular')
            $(this).addClass('outline')
            $('#fees-and-policies').show()
        })



        const baseUrl = new URL(window.location.origin);
        const url = new URL(window.location.href);

        // Check if the URL starts with the base URL
        if (url.href === baseUrl.href) {
            // Add the 'active' class to the corresponding link
            $('.home').addClass('underline');
        } else {
            // Add the 'active' class to the corresponding link
            $('.nav-list[href="' + url + '"]').addClass('underline');
        }

        $(".owl-carousel").owlCarousel({
            center: true,
            items: 1,
            loop: true,
            margin: 4,
            dots: true,
            mouseDrag: true,
            touchDrag: true,
            autoplay: true,
            autoplayTimeout: 4000,
            slideTransition: "linear",
            animateOut: 'fadeOut',
            responsive: {
                600: {
                    items: 2
                },
                768: {
                    items: 3
                }
            }
        });
    </script>


</body>

</html>
