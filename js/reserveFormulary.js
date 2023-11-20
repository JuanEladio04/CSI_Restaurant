//Dinners selection
var select = document.getElementById('sDinners');
var option = document.createElement('option');
option.textContent = "¿Cuántos comensales vienen además de usted?";
select.add(option);
for (var i = 1; i <= 20; i++) {
    var option = document.createElement('option');
    option.text = i;
    option.value = i;
    select.add(option);
}

document.getElementById('notAlone').addEventListener('change', function () {
    if (this.checked) {
        select.style.display = 'block';
    } else {
        select.style.display = 'none';  
    }
});
