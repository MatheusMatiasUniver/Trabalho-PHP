$(document).ready(function () {
    var entrada = $(".entrada");
    var addExperiencia = $(".addExperiencia");
    $(addExperiencia).click(function (e) {
        $(entrada).append('<div class="form-group"><label for="experiencia">Experiência:</label><textarea class="form-control shadow p-1 mb-2 bg-white rounded" name="experiencia[]" id="experiencia" rows="5"></textarea><a href="#" class="btn btn-danger shadow remover">Remover</a></div>');
    });
    $(entrada).on("click", ".remover", function (e) {
        e.preventDefault();
        $(this).parent('div').remove();
    });
});
