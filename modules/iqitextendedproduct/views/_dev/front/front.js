import threesixty from  './lib/threesixty/threesixty.min';

$(document).ready(() => {
    $('#iqit-threesixty-modal').on('shown.bs.modal', function() {


        var iqitThreeSixtySlider = threesixty(
            document.querySelector('#iqit-threesixty'),
            $('#iqit-threesixty').data('threesixty'),
            {
            interactive: true,
            currentImage: 0
        });
        iqitThreeSixtySlider.init();

    })
});
