<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin="">
</script>
<script>
    $(document).ready(function () {
        // datepicker

          $( ".datepicker" ).datepicker();
          $('.datepicker-white').datepicker();


        // menu toggle
        $('.mobile-btn').click(function () {
            $('.menu-mobile').toggleClass('open-menu');
            $('.mobile-btn').toggleClass('btn-open');
        })

        // Gallery
        $('input[name="sort"]').change(function () {

            if($(this).is(':checked')){
                $('input[name="sort"]').parent().removeClass('active')
                $(this).parent().addClass('active')
                console.log()
                $('.sort-1').addClass('hide p-0')
                $(`.sort-${$(this).val()}`).removeClass('hide p-0')
                console.log($(this).val())
            }
        })




        // popup image

        var modal = $('#myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = $('.myImg')
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");

        img.click(function () {
            modal.css({
                'display':'block'
            })
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        })
        // img.onclick = function(){
        //     modal.style.display = "block";
        //     modalImg.src = this.src;
        //     captionText.innerHTML = this.alt;
        // }

        // Get the <span> element that closes the modal
        var span = $(".close");

        // When the user clicks on <span> (x), close the modal
        span.click(function () {
            modal.css({
                'display':'none'
            });
        })
    })
</script>
