class Elemento {
    constructor(ingrediente, precio) {
        this.ingrediente = ingrediente;
        this.precio = precio;
    }
    destroy() {
        this.ingrediente.destroy();
    }
}
const d = document;
var width = 1500;
var height = 1000;
const arrayElementos = [];
let precioTotalElementos = 0;
let w = 120;
let h = 120;
function totalCosto(a) {
    precioTotalElementos = 0;
    a.forEach(element => {
        console.log("hola");
        precioTotalElementos += parseInt(element.precio);
    });
    return precioTotalElementos;
}
var stage = new Konva.Stage({
    container: 'container',
    width: width,
    height: height
});
var layer = new Konva.Layer();
var pizza = new Konva.Image();
const imgElement = new Image();
imgElement.src = "assets/pizzaFondo.png";
const pepperoni = new Image();
pepperoni.src = "assets/pepperoni.png";
const bacon = new Image();
bacon.src = "assets/bacon.png";
const champinon = new Image();
champinon.src = "assets/champinon.png";
const tomate = new Image();;
tomate.src = "assets/tomate.png";
layer.add(pizza);
stage.add(layer);
let mostrar = 0;
d.addEventListener("click", (e) => {
    switch (e.target.value) {
        case "p":
            document.getElementById("precio").innerHTML = "";
            let $precio = document.getElementById("precioTotal");
            $precio.innerHTML = "0";
            arrayElementos.forEach(element => {
                element.destroy();
            });
            while (arrayElementos.length > 0) {
                arrayElementos.pop();
            }
            pizza.destroy();

            pizza = new Konva.Image({
                x: 300,
                y: 300,
                image: imgElement,
                width: 600,
                height: 600,
                zindex: 0,
                draggable: true
            });
            mostrar = 1;
            let $table = document.getElementById("precio");
            let $frag = document.createDocumentFragment();
            let $tr = document.createElement("tr");
            let $td = document.createElement("td");
            let $tdIngrediente = document.createElement("td");
            $table.innerHTML = "<tr><td>Ingrediente</td><td>Precio</td></tr>";
            $td.innerHTML = "<span>4</span>€"
            $tdIngrediente.innerHTML = "Pizza tamaño pequeño"
            $tr.appendChild($tdIngrediente);
            $tr.appendChild($td);
            $frag.appendChild($tr);
            $table.appendChild($frag);
            let peq = new Elemento(pizza, 4);
            arrayElementos.push(peq);
            break;
        case "m":
            document.getElementById("precio").innerHTML = "";
            let $preciom = document.getElementById("precioTotal");
            $preciom.innerHTML = "0";
            arrayElementos.forEach(element => {
                element.destroy();
            });
            while (arrayElementos.length > 0) {
                arrayElementos.pop();
            }
            pizza.destroy();
            pizza = new Konva.Image({
                x: 300,
                y: 300,
                image: imgElement,
                width: 650,
                height: 650,
                draggable: true
            });
            mostrar = 1;
            let $table2 = document.getElementById("precio");
            let $frag2 = document.createDocumentFragment();
            let $tr2 = document.createElement("tr");
            let $tdIngrediente2 = document.createElement("td");
            let $td2 = document.createElement("td");
            $table2.innerHTML = "<tr><td>Ingrediente</td><td>Precio</td></tr>";
            $td2.innerHTML = "<span>6</span>€"
            $tdIngrediente2.innerHTML = "Pizza tamaño medio"
            $tr2.appendChild($tdIngrediente2);
            $tr2.appendChild($td2);
            $frag2.appendChild($tr2);
            $table2.appendChild($frag2);
            let med = new Elemento(pizza, 6);
            arrayElementos.push(med);
            break;
        case "g":
            document.getElementById("precio").innerHTML = "";
            let $preciog = document.getElementById("precioTotal");
            $preciog.innerHTML = "0";
            arrayElementos.forEach(element => {
                element.destroy();
            });
            while (arrayElementos.length > 0) {
                arrayElementos.pop();
            }
            pizza.destroy();
            pizza = new Konva.Image({
                x: 300,
                y: 100,
                image: imgElement,
                width: 700,
                height: 700,
                draggable: true,
            });
            mostrar = 1;
            let $table3 = document.getElementById("precio");
            let $frag3 = document.createDocumentFragment();
            let $tr3 = document.createElement("tr");
            let $td3 = document.createElement("td");
            let $tdIngrediente3 = document.createElement("td");
            $table3.innerHTML = "<tr><td>Ingrediente</td><td>Precio</td></tr>";
            $td3.innerHTML = "<span>8</span>€"
            $tdIngrediente3.innerHTML = "Pizza tamaño grande"
            $tr3.appendChild($tdIngrediente3);
            $tr3.appendChild($td3);
            $frag3.appendChild($tr3);
            $table3.appendChild($frag3);
            let gran = new Elemento(pizza, 8);
            arrayElementos.push(gran);
            break;
        default:
            break;
    }
    if (e.target.id == "addPepperoni") {
        if (d.getElementById("tamano").value == "p") {
            w = 100;
            h = 100;
        } else if (d.getElementById("tamano").value == "m") {
            w = 120;
            h = 120;
        } else if (d.getElementById("tamano").value == "g") {
            w = 140;
            h = 140;
        }
        var fotoPepperoni = new Konva.Image({
            x: 0,
            y: 0,
            image: pepperoni,
            width: w,
            height: h,
            zindex: 2,
            draggable: true
        });
        layer.add(fotoPepperoni);
        stage.add(layer);
        let pepper = new Elemento(fotoPepperoni, 0.1);
        arrayElementos.push(pepper);
        if (d.getElementById("precioPepper") == null) {
            let $table = document.getElementById("precio");
            let $frag = document.createDocumentFragment();
            let $tr = document.createElement("tr");
            let $td2 = document.createElement("td");
            let $td = document.createElement("td");
            $td.innerHTML = "Pepperoni"
            $td2.innerHTML = "<span id='tablaPepperoni'>0.10</span>€"
            $tr.appendChild($td);
            $tr.appendChild($td2);
            $frag.appendChild($tr);
            $table.appendChild($frag);
            let $precio = document.getElementById("precioTotal");
            $precio.innerHTML = "";
            let $costo = document.createTextNode(totalCosto(arrayElementos));
            $precio.appendChild($costo);
            $td.id = "precioPepper"
        } else {
            const $tdPepperoni = d.getElementById("tablaPepperoni");
            console.log($tdPepperoni.innerHTML);
            let precio = parseFloat(d.getElementById("tablaPepperoni").innerHTML) + 0.1;
            $tdPepperoni.innerHTML = precio.toFixed(2);
        }
    }
    if (e.target.id == "addBacon") {
        if (d.getElementById("tamano").value == "p") {
            w = 40;
            h = 40;
        } else if (d.getElementById("tamano").value == "m") {
            w = 60;
            h = 60;
        } else if (d.getElementById("tamano").value == "g") {
            w = 80;
            h = 80;
        }
        var fotoBacon = new Konva.Image({
            x: 0,
            y: 0,
            image: bacon,
            width: w,
            height: h,
            draggable: true
        });
        baconPizza = new Elemento(fotoBacon, 0.2);
        arrayElementos.push(baconPizza);
        layer.add(fotoBacon);
        stage.add(layer);
        if (d.getElementById("precioBacon") == null) {
            let $table = document.getElementById("precio");
            let $frag = document.createDocumentFragment();
            let $tr = document.createElement("tr");
            let $td = document.createElement("td");
            let $td2 = document.createElement("td");
            $td.innerHTML = "Bacon"
            $td2.innerHTML = "<span id='tablaBacon'>0.20</span>€"
            $tr.appendChild($td);
            $tr.appendChild($td2);
            $frag.appendChild($tr);
            $table.appendChild($frag);
            let $precio = document.getElementById("precioTotal");
            $precio.innerHTML = "";
            let $costo = document.createTextNode(totalCosto(arrayElementos));
            $precio.appendChild($costo);
            $td.id = "precioBacon"
        } else {
            const $tdBacon = d.getElementById("tablaBacon");
            console.log($tdBacon.innerHTML);
            let precio = parseFloat(d.getElementById("tablaBacon").innerHTML) + 0.2;
            $tdBacon.innerHTML = precio.toFixed(2);
        }
    }
    if (e.target.id == "addChampinon") {
        if (d.getElementById("tamano").value == "p") {
            w = 40;
            h = 40;
        } else if (d.getElementById("tamano").value == "m") {
            w = 60;
            h = 60;

        } else if (d.getElementById("tamano").value == "g") {
            w = 80;
            h = 80;
        }
        var fotoChampinon = new Konva.Image({
            x: 0,
            y: 0,
            image: champinon,
            width: w,
            height: h,
            draggable: true
        });

        ch = new Elemento(fotoChampinon, 0.3);
        arrayElementos.push(ch);
        layer.add(fotoChampinon);
        stage.add(layer);
        if (d.getElementById("precioChampinon") == null) {
            let $table = document.getElementById("precio");
            let $frag = document.createDocumentFragment();
            let $tr = document.createElement("tr");
            let $td = document.createElement("td");
            let $td2 = document.createElement("td");
            $td.innerHTML = "Champiñón"
            $td2.innerHTML = "<span id='tablaChampinon'>0.30</span>";
            $tr.appendChild($td);
            $tr.appendChild($td2);
            $frag.appendChild($tr);
            $table.appendChild($frag);
            let $precio = document.getElementById("precioTotal");
            $precio.innerHTML = "";
            let $costo = document.createTextNode(totalCosto(arrayElementos));
            $precio.appendChild($costo);
            $td.id = "precioChampinon"
        } else {
            const $tdChampinon = d.getElementById("tablaChampinon");
            console.log($tdChampinon.innerHTML);
            let precio = parseFloat(d.getElementById("tablaChampinon").innerHTML) + 0.3;
            $tdChampinon.innerHTML = precio.toFixed(2);
        }
    }
    if (e.target.id == "addTomate") {
        if (d.getElementById("tamano").value == "p") {
            w = 100;
            h = 100;
        } else if (d.getElementById("tamano").value == "m") {
            w = 120;
            h = 120;

        } else if (d.getElementById("tamano").value == "g") {
            w = 140;
            h = 140;
        }
        var fotoTomate = new Konva.Image({
            x: 0,
            y: 0,
            image: tomate,
            width: w,
            height: h,
            draggable: true
        });
        to = new Elemento(fotoTomate, 0.4);
        arrayElementos.push(to);
        layer.add(fotoTomate);
        stage.add(layer);
        if (d.getElementById("precioTomate") == null) {
            let $table = document.getElementById("precio");
            let $frag = document.createDocumentFragment();
            let $tr = document.createElement("tr");
            let $td = document.createElement("td");
            let $td2 = document.createElement("td");
            $td.innerHTML = "Tomate"
            $td2.innerHTML = "<span id='tablaTomate'>0.4</span>€"
            $tr.appendChild($td);
            $tr.appendChild($td2);
            $frag.appendChild($tr);
            $table.appendChild($frag);
            let $precio = document.getElementById("precioTotal");
            $precio.innerHTML = "";
            let $costo = document.createTextNode(totalCosto(arrayElementos));
            $precio.appendChild($costo);
            $td.id = "precioTomate"
        } else {
            const $tdTomate = d.getElementById("tablaTomate");
            console.log($tdTomate.innerHTML);
            let precio = parseFloat(d.getElementById("tablaTomate").innerHTML) + 0.4;
            $tdTomate.innerHTML = precio.toFixed(2);
        }
    }
    layer.add(pizza);
    stage.add(layer);
    let $toppings = d.getElementById("toppings")
    if (mostrar == 1) {
        $toppings.style.display = "block";
    }
    if (e.target.id == "calcularPrecio") {
        let precio = 0;
        arrayElementos.forEach(element => {
            precio += parseFloat(element.precio);
        });
        d.getElementById("precioTotal").innerHTML = precio.toFixed(2);
    }
})


