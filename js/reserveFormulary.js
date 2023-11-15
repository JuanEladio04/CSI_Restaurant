
document.getElementById('notAlone').addEventListener('change', function () {
    var select = document.getElementById('sDinners');
    if (this.checked) {
        select.style.display = 'block';
        for (var i = 1; i <= 20; i++) {
            var option = document.createElement('option');
            option.text = i;
            option.value = i;
            select.add(option);
        }
    } else {
        select.style.display = 'none';
        select.innerHTML = '<option selected>Elige...</option>';
    }
});
