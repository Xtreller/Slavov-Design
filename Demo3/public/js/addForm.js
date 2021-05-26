function addForm(carMakes, carModels) {

    document.getElementById('make').addEventListener('change', function () {
        var val = document.getElementById('make').value.toLowerCase();

        var modelMenu = document.getElementById("model");
        modelMenu.innerHTML = '';

        carModels.map(model => {
            if (model.make_id == val) {
                console.log(model.model);
                modelMenu.innerHTML = modelMenu.innerHTML + `<option value="${model.model}">${model.model}</option>`
            }
        })
    });
    const submitCategory = document.getElementById('submitCategory');
}
