$(Document).ready(function () {
    alert("Ya puedes editar el jquery 2");

    $('#ingre-equip').click(function () {
        $('#buscar-equipos').removeClass("on-visibily")
        $('#buscar-equipos').addClass("off-visibily")

        $('#modificar-equipos').removeClass("on-visibily")
        $('#modificar-equipos').addClass("off-visibily")

        $('#ingresar-equipos').addClass("position-absolute-actual");
        $('#ingresar-equipos').removeClass("off-visibily")
        $('#ingresar-equipos').addClass("on-visibily")
    }

    )

    $('#busc-equip').click(function () {

        $('#ingresar-equipos').removeClass("on-visibily")
        $('#ingresar-equipos').addClass("off-visibily")

        $('#modificar-equipos').removeClass("on-visibily")
        $('#modificar-equipos').addClass("off-visibily")

        $('#buscar-equipos').addClass("position-absolute-actual-2");
        $('#buscar-equipos').removeClass("off-visibily")
        $('#buscar-equipos').addClass("on-visibily")

    })

    $('#modif-equip').click(function () {
        $('#buscar-equipos').removeClass("on-visibily")
        $('#buscar-equipos').addClass("off-visibily")

        $('#ingresar-equipos').removeClass("on-visibily")
        $('#ingresar-equipos').addClass("off-visibily")

        $('#modificar-equipos').addClass("position-absolute-actual-2");
        $('#modificar-equipos').removeClass("off-visibily");
        $('#modificar-equipos').addClass("on-visibily");

    })
});


