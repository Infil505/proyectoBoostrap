@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Panel Izquierdo -->
            <div class="col-md-3">
                <div class="accordion" id="menuAccordion">
                    <!-- Autores -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingAutores">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseAutores" aria-expanded="true" aria-controls="collapseAutores">
                                Autores
                            </button>
                        </h2>
                        <div id="collapseAutores" class="accordion-collapse collapse show" aria-labelledby="headingAutores"
                            data-bs-parent="#menuAccordion">
                            <div class="accordion-body p-0">
                                <div class="list-group list-group-flush" id="autor-list">
                                    <a href="#" class="list-group-item list-group-item-action" data-autor="Allan Poe">Allan
                                        Poe</a>
                                    <a href="#" class="list-group-item list-group-item-action" data-autor="Mark Twain">Mark
                                        Twain</a>
                                    <a href="#" class="list-group-item list-group-item-action"
                                        data-autor="Lewis Carroll">Lewis Carroll</a>
                                    <a href="#" class="list-group-item list-group-item-action"
                                        data-autor="Isabel Allende">Isabel Allende</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Libros -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingLibros">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseLibros" aria-expanded="false" aria-controls="collapseLibros">
                                Libros
                            </button>
                        </h2>
                        <div id="collapseLibros" class="accordion-collapse collapse" aria-labelledby="headingLibros"
                            data-bs-parent="#menuAccordion">
                            <div class="accordion-body p-0">
                                <div class="list-group list-group-flush" id="libro-list">
                                    <a href="#" class="list-group-item list-group-item-action" data-libro="Tom Sawyer">Tom
                                        Sawyer</a>
                                    <a href="#" class="list-group-item list-group-item-action" data-libro="El Principito">El
                                        Principito</a>
                                    <a href="#" class="list-group-item list-group-item-action" data-libro="Moby Dick">Moby
                                        Dick</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Editoriales -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEditoriales">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEditoriales" aria-expanded="false"
                                aria-controls="collapseEditoriales">
                                Editoriales
                            </button>
                        </h2>
                        <div id="collapseEditoriales" class="accordion-collapse collapse"
                            aria-labelledby="headingEditoriales" data-bs-parent="#menuAccordion">
                            <div class="accordion-body p-0">
                                <div class="list-group list-group-flush" id="editorial-list">
                                    <a href="#" class="list-group-item list-group-item-action"
                                        data-editorial="Alfaguara">Alfaguara</a>
                                    <a href="#" class="list-group-item list-group-item-action"
                                        data-editorial="Penguin">Penguin</a>
                                    <a href="#" class="list-group-item list-group-item-action"
                                        data-editorial="Planeta">Planeta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botones Nuevo y Borrar -->
                <div class="mt-4 d-grid gap-2">
                    <button id="btnNuevo" class="btn btn-primary">Nuevo</button>
                    <button id="btnBorrar" class="btn btn-danger">Borrar</button>
                </div>
            </div>

            <!-- Panel Derecho -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="mainTab" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="autor-tab" data-bs-toggle="tab"
                                    data-bs-target="#autor-panel" type="button" role="tab">Autor</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="libro-tab" data-bs-toggle="tab" data-bs-target="#libro-panel"
                                    type="button" role="tab">Libro</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="editorial-tab" data-bs-toggle="tab"
                                    data-bs-target="#editorial-panel" type="button" role="tab">Editorial</button>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body tab-content">

                        <!-- Panel Autor -->
                        <div class="tab-pane fade show active" id="autor-panel" role="tabpanel">
                            <h4 class="mb-3">Detalle de Autor</h4>
                            <form id="formAutor">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 row">
                                            <label for="nombreAutor" class="col-sm-4 col-form-label">Nombre:</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="nombreAutor" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="paisAutor" class="col-sm-4 col-form-label">País:</label>
                                            <div class="col-sm-8">
                                                <select id="paisAutor" class="form-select">
                                                    <option>USA</option>
                                                    <option>Reino Unido</option>
                                                    <option>España</option>
                                                    <option>Chile</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="nacimientoAutor" class="col-sm-4 col-form-label">Nac.:</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="nacimientoAutor" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3 row">
                                            <label for="fallecimientoAutor" class="col-sm-4 col-form-label">Fallec.:</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="fallecimientoAutor" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="generoAutor" class="col-sm-4 col-form-label">Género:</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <select id="generoAutor" class="form-select" multiple size="3">
                                                        <option>Humor</option>
                                                        <option>Sátira</option>
                                                        <option>Aventuras</option>
                                                        <option>Drama</option>
                                                        <option>Ficción</option>
                                                    </select>
                                                    <div class="input-group-text p-0">
                                                        <div class="btn-group-vertical">
                                                            <button type="button"
                                                                class="btn btn-outline-secondary py-0">▲</button>
                                                            <button type="button"
                                                                class="btn btn-outline-secondary py-0">▼</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tabla de Libros del Autor -->
                                <div class="table-responsive mb-3">
                                    <table class="table table-bordered table-hover" id="tablaLibrosAutor">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Libro</th>
                                                <th>Editorial</th>
                                                <th>Año</th>
                                                <th>Edic</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Libros cargados dinámicamente -->
                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-flex justify-content-end gap-2">
                                    <button type="button" class="btn btn-secondary">Cancel</button>
                                    <button type="submit" class="btn btn-primary">OK</button>
                                </div>
                            </form>
                        </div>

                       <!-- Panel Libro -->
<div class="tab-pane fade" id="libro-panel" role="tabpanel">
    <h4 class="mb-3">Detalle de Libro</h4>
    <form id="formLibro">
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="mb-3 row">
                    <label for="nombreLibro" class="col-sm-4 col-form-label">Nombre:</label>
                    <div class="col-sm-8">
                        <input type="text" id="nombreLibro" class="form-control">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="anioLibro" class="col-sm-4 col-form-label">Año:</label>
                    <div class="col-sm-8">
                        <input type="text" id="anioLibro" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3 row">
                    <label for="isbnLibro" class="col-sm-4 col-form-label">ISBN:</label>
                    <div class="col-sm-8">
                        <input type="text" id="isbnLibro" class="form-control">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="edicionLibro" class="col-sm-4 col-form-label">Edición:</label>
                    <div class="col-sm-8">
                        <select id="edicionLibro" class="form-select">
                            <option>1st</option>
                            <option>2nd</option>
                            <option>3rd</option>
                            <option>4th</option>
                            <option>5th</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Autores del Libro -->
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Autores:</label>
            <div class="col-sm-7">
                <div class="input-group">
                    <select id="autoresLibro" class="form-select" size="5" multiple>
                        <option>Mark Twain</option>
                    </select>
                    <div class="input-group-text p-0">
                        <div class="btn-group-vertical">
                            <button type="button" class="btn btn-outline-secondary py-0" id="btnSubirAutor">▲</button>
                            <button type="button" class="btn btn-outline-secondary py-0" id="btnBajarAutor">▼</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 d-grid gap-2">
                <button type="button" id="btnAgregarAutor" class="btn btn-outline-primary">Agregar</button>
                <button type="button" id="btnEliminarAutor" class="btn btn-outline-danger">Eliminar</button>
            </div>
        </div>

        <!-- Botones inferiores -->
        <div class="d-flex justify-content-end gap-2">
            <button type="button" class="btn btn-secondary">Cancel</button>
            <button type="submit" class="btn btn-primary">OK</button>
        </div>
    </form>
</div>


                        <!-- Panel Editorial -->
                        <div class="tab-pane fade" id="editorial-panel" role="tabpanel">
                            <h4 class="mb-3">Detalle de Editorial</h4>
                            <form id="formEditorial">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 row">
                                            <label for="nombreEditorial" class="col-sm-4 col-form-label">Nombre:</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="nombreEditorial" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="paisEditorial" class="col-sm-4 col-form-label">País:</label>
                                            <div class="col-sm-8">
                                                <select id="paisEditorial" class="form-select">
                                                    <option>España</option>
                                                    <option>USA</option>
                                                    <option>Chile</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="fundacionEditorial"
                                                class="col-sm-4 col-form-label">Fundación:</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="fundacionEditorial" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Libros publicados -->
                                <div class="table-responsive mb-3">
                                    <table class="table table-bordered table-hover" id="tablaLibrosEditorial">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Libro</th>
                                                <th>Autor</th>
                                                <th>Año</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Libros publicados -->
                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-flex justify-content-end gap-2">
                                    <button type="button" class="btn btn-secondary">Cancel</button>
                                    <button type="submit" class="btn btn-primary">OK</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
// =======================
// Datos simulados
// =======================
// Datos simulados (completos)
const autoresData = {
    "Allan Poe": {
        nombre: "Allan Poe", pais: "USA", nacimiento: "1809", fallecimiento: "1849",
        generos: ["Terror", "Suspenso"],
        libros: [
            { titulo: "El cuervo", editorial: "Alfaguara", anio: "1845", edicion: "1ra" }
        ]
    },
    "Mark Twain": {
        nombre: "Mark Twain", pais: "USA", nacimiento: "1835", fallecimiento: "1910",
        generos: ["Humor", "Aventuras"],
        libros: [
            { titulo: "Las aventuras de Tom Sawyer", editorial: "Penguin", anio: "1876", edicion: "5ta" },
            { titulo: "El príncipe y el mendigo", editorial: "Planeta", anio: "1882", edicion: "2da" }
        ]
    },
    "Lewis Carroll": {
        nombre: "Lewis Carroll", pais: "Reino Unido", nacimiento: "1832", fallecimiento: "1898",
        generos: ["Fantasía", "Aventuras"],
        libros: [
            { titulo: "Alicia en el país de las maravillas", editorial: "Alfaguara", anio: "1865", edicion: "1ra" }
        ]
    },
    "Isabel Allende": {
        nombre: "Isabel Allende", pais: "Chile", nacimiento: "1942", fallecimiento: "",
        generos: ["Drama", "Ficción"],
        libros: [
            { titulo: "La casa de los espíritus", editorial: "Planeta", anio: "1982", edicion: "2da" }
        ]
    }
};

const librosData = {
    "Las aventuras de Tom Sawyer": {
        nombre: "Las aventuras de Tom Sawyer",
        isbn: "12244-5678-45",
        anio: "2004",
        edicion: "5th",
        autores: ["Mark Twain"]
    },
    "El príncipe y el mendigo": {
        nombre: "El príncipe y el mendigo",
        isbn: "98765-4321-10",
        anio: "1882",
        edicion: "2nd",
        autores: ["Mark Twain"]
    },
    "Alicia en el país de las maravillas": {
        nombre: "Alicia en el país de las maravillas",
        isbn: "22334-1122-99",
        anio: "1865",
        edicion: "1st",
        autores: ["Lewis Carroll"]
    },
    "La casa de los espíritus": {
        nombre: "La casa de los espíritus",
        isbn: "55443-2211-77",
        anio: "1982",
        edicion: "2nd",
        autores: ["Isabel Allende"]
    }
};

const editorialesData = {
    "Alfaguara": {
        nombre: "Alfaguara",
        pais: "España",
        fundacion: "1964",
        libros: [
            { titulo: "El cuervo", autor: "Allan Poe", anio: "1845" },
            { titulo: "Alicia en el país de las maravillas", autor: "Lewis Carroll", anio: "1865" }
        ]
    },
    "Penguin": {
        nombre: "Penguin",
        pais: "USA",
        fundacion: "1935",
        libros: [
            { titulo: "Las aventuras de Tom Sawyer", autor: "Mark Twain", anio: "1876" }
        ]
    },
    "Planeta": {
        nombre: "Planeta",
        pais: "España",
        fundacion: "1949",
        libros: [
            { titulo: "La casa de los espíritus", autor: "Isabel Allende", anio: "1982" },
            { titulo: "El príncipe y el mendigo", autor: "Mark Twain", anio: "1882" }
        ]
    }
};


// =======================
// Funciones Generales
// =======================
// Cambiar de pestaña automáticamente
function cambiarPestana(tabId) {
    let tab = new bootstrap.Tab(document.getElementById(tabId));
    tab.show();
}

// =======================
// Cargar datos de AUTOR
// =======================
document.querySelectorAll('#autor-list a').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        const nombre = this.getAttribute('data-autor');
        const datos = autoresData[nombre];
        if (datos) {
            document.getElementById('nombreAutor').value = datos.nombre;
            document.getElementById('paisAutor').value = datos.pais;
            document.getElementById('nacimientoAutor').value = datos.nacimiento;
            document.getElementById('fallecimientoAutor').value = datos.fallecimiento;

            const tbody = document.querySelector('#tablaLibrosAutor tbody');
            tbody.innerHTML = '';
            datos.libros.forEach(libro => {
                let fila = `<tr>
                    <td>${libro.titulo}</td>
                    <td>${libro.editorial}</td>
                    <td>${libro.anio}</td>
                    <td>${libro.edicion}</td>
                </tr>`;
                tbody.innerHTML += fila;
            });

            cambiarPestana('autor-tab');
        }
    });
});

// =======================
// Cargar dinámicamente el menú de Libros
// =======================
const libroList = document.getElementById('libro-list');
libroList.innerHTML = ''; // Vaciar si había manual

for (const key in librosData) {
    const libro = librosData[key];
    const a = document.createElement('a');
    a.href = '#';
    a.className = 'list-group-item list-group-item-action';
    a.setAttribute('data-libro', key);
    a.innerText = libro.nombre;  
    libroList.appendChild(a);
}

document.querySelectorAll('#libro-list a').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        const nombre = this.getAttribute('data-libro');
        const datos = librosData[nombre];
        if (datos) {
            document.getElementById('nombreLibro').value = datos.nombre;
            document.getElementById('isbnLibro').value = datos.isbn;
            document.getElementById('anioLibro').value = datos.anio;
            document.getElementById('edicionLibro').value = datos.edicion;

            const autoresSelect = document.getElementById('autoresLibro');
            autoresSelect.innerHTML = '';
            datos.autores.forEach(autor => {
                const option = document.createElement('option');
                option.text = autor;
                autoresSelect.add(option);
            });

            cambiarPestana('libro-tab');
        }
    });
});


// =======================
// Cargar datos de EDITORIAL
// =======================
document.querySelectorAll('#editorial-list a').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        const nombre = this.getAttribute('data-editorial');
        const datos = editorialesData[nombre];
        if (datos) {
            document.getElementById('nombreEditorial').value = datos.nombre;
            document.getElementById('paisEditorial').value = datos.pais;
            document.getElementById('fundacionEditorial').value = datos.fundacion;

            const tbody = document.querySelector('#tablaLibrosEditorial tbody');
            tbody.innerHTML = '';
            datos.libros.forEach(libro => {
                let fila = `<tr>
                    <td>${libro.titulo}</td>
                    <td>${libro.autor}</td>
                    <td>${libro.anio}</td>
                </tr>`;
                tbody.innerHTML += fila;
            });

            cambiarPestana('editorial-tab');
        }
    });
});

// =======================
// Funciones para mover, agregar, eliminar autores en libros
// =======================
document.getElementById('btnSubirAutor').addEventListener('click', function() {
    const select = document.getElementById('autoresLibro');
    const selected = select.selectedOptions[0];
    if (selected && selected.previousElementSibling) {
        select.insertBefore(selected, selected.previousElementSibling);
    }
});

document.getElementById('btnBajarAutor').addEventListener('click', function() {
    const select = document.getElementById('autoresLibro');
    const selected = select.selectedOptions[0];
    if (selected && selected.nextElementSibling) {
        select.insertBefore(selected.nextElementSibling, selected);
    }
});

document.getElementById('btnAgregarAutor').addEventListener('click', function() {
    const nombreNuevo = prompt('Ingrese el nombre del autor:');
    if (nombreNuevo) {
        const select = document.getElementById('autoresLibro');
        const option = document.createElement('option');
        option.text = nombreNuevo;
        select.add(option);
    }
});

document.getElementById('btnEliminarAutor').addEventListener('click', function() {
    const select = document.getElementById('autoresLibro');
    const selected = select.selectedOptions[0];
    if (selected) {
        select.removeChild(selected);
    }
});

// =======================
// Botones Nuevo y Borrar
// =======================
document.getElementById('btnNuevo').addEventListener('click', () => {
    document.querySelectorAll('form').forEach(form => form.reset());
    document.querySelectorAll('table tbody').forEach(tbody => tbody.innerHTML = '');
    document.getElementById('autoresLibro').innerHTML = '';
});

document.getElementById('btnBorrar').addEventListener('click', () => {
    if (confirm('¿Seguro que quieres borrar los datos?')) {
        document.querySelectorAll('form').forEach(form => form.reset());
        document.querySelectorAll('table tbody').forEach(tbody => tbody.innerHTML = '');
        document.getElementById('autoresLibro').innerHTML = '';
    }
});

</script>
@endsection
