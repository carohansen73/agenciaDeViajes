"use strict"

document.addEventListener('DOMContentLoaded', e => {

    let idTour = window.location.pathname.substr(window.location.pathname.lastIndexOf('/') + 1);
    getAllByTour(idTour);

    if (document.querySelector('#form-comentario') != null) {
        document.querySelector('#form-comentario').addEventListener('submit', e => {
            e.preventDefault();
            addComment(idTour);
        });
    }

});

async function getAllByTour(idTour) {
    try {
        const url = 'api/comentarios';
        const response = await fetch(url + "/" + idTour);
        const comentarios = await response.json();

        //llamo a la funcion que muestra las tareas
        showComentarios(comentarios);

    } catch (e) {
        console.log(e);
    }
}

function showComentarios(comentarios) {
    const container = document.querySelector("#comentariosAdmin");
    container.innerHTML = '';

    for (let comentario of comentarios) {
        container.innerHTML += `<li class='list-group-item d-flex justify-content-between'> ${comentario.texto} - ${comentario.calificacion} - <button class="eliminar btn btn-danger" data-id="${comentario.id}" >ELIMINAR</button> </li>`;
    }

    document.querySelectorAll(".eliminar").forEach(boton => {
        boton.addEventListener('click', e => {
            e.preventDefault();
            let id = boton.getAttribute("data-id");
            deleteComment(id);
        })
    })

}

async function addComment(idTour) {

    let texto = document.querySelector("#texto").value
    let calificacion = document.querySelector('input[name=inlineRadioOptions]:checked')

    console.log(calificacion)
    if (calificacion == null) {
        let error = document.querySelector("#error")
        error.innerHTML = "complete los campos";
        error.classList.add("alert", "alert-primary")
    } else {
        calificacion = calificacion.value;
        //armo el comentario en un json
        let comentario = {
            texto: texto,
            calificacion: calificacion,
            id_tour: idTour
        }

        try {
            const response = await fetch('api/comentarios', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(comentario)
            });

            const c = await response.json();

            console.log(c);
            //llamo para traer los comentarios con el nuevo insertado
            getAllByTour(idTour);
            //pusheo el comentario al arreglo de vue
            //app.comments.push(c);

        } catch (e) {
            console.log(e);
        }
    }


}

async function deleteComment(id) {

    let idTour = window.location.pathname.substr(window.location.pathname.lastIndexOf('/') + 1);
    try {
        const url = 'api/comentarios'
        let response = await fetch(url + "/" + id, {
            method: 'DELETE',

        });

        const c = await response.json();

        console.log(c);
        //llamo para traer los comentarios con el nuevo insertado
        getAllByTour(idTour);
        //pusheo el comentario al arreglo de vue
        //app.comments.push(c); //VER

    } catch (e) {
        console.log(e);
    }
}