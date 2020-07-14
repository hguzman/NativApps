
$(Document).ready(function () {

    $('#ini').click(function () {
        $('#enf').removeClass("active")
        $('#mou').removeClass("active")
        $('#tec').removeClass("active")
        $('#ini').addClass("active")

        $('#mouse').removeClass("on-visibily")
        $('#mouse').addClass("off-visibily")

        $('#enfriadora').removeClass("on-visibily")
        $('#enfriadora').addClass("off-visibily")

        $('#teclado').removeClass("on-visibily")
        $('#teclado').addClass("off-visibily")

        $('#inicio').addClass("position-absolute-actual");
        $('#inicio').removeClass("off-visibily")
        $('#inicio').addClass("on-visibily")
    }

    )
    $('#mou').click(function () {
        $('#enf').removeClass("active")
        $('#ini').removeClass("active")
        $('#tec').removeClass("active")
        $('#mou').addClass("active")

        $('#inicio').removeClass("on-visibily")
        $('#inicio').addClass("off-visibily")

        $('#enfriadora').removeClass("on-visibily")
        $('#enfriadora').addClass("off-visibily")

        $('#teclado').removeClass("on-visibily")
        $('#teclado').addClass("off-visibily")

        $('#mouse').addClass("position-absolute-actual");
        $('#mouse').removeClass("off-visibily")
        $('#mouse').addClass("on-visibily")
    }

    )
    $('#tec').click(function () {

        $('#mou').removeClass("active")
        $('#ini').removeClass("active")
        $('#enf').removeClass("active")
        $('#tec').addClass("active")

        $('#inicio').removeClass("on-visibily")
        $('#inicio').addClass("off-visibily")

        $('#mouse').removeClass("on-visibily")
        $('#mouse').addClass("off-visibily")

        $('#enfriadora').removeClass("on-visibily")
        $('#enfriadora').addClass("off-visibily")

        $('#teclado').addClass("position-absolute-actual");
        $('#teclado').removeClass("off-visibily")
        $('#teclado').addClass("on-visibily")
    }

    )
    $('#enf').click(function () {
        $('#mou').removeClass("active")
        $('#ini').removeClass("active")
        $('#tec').removeClass("active")
        $('#enf').addClass("active")

        $('#inicio').removeClass("on-visibily")
        $('#inicio').addClass("off-visibily")

        $('#mouse').removeClass("on-visibily")
        $('#mouse').addClass("off-visibily")

        $('#teclado').removeClass("on-visibily")
        $('#teclado').addClass("off-visibily")

        $('#enfriadora').addClass("position-absolute-actual");
        $('#enfriadora').removeClass("off-visibily")
        $('#enfriadora').addClass("on-visibily")
    }

    )
});