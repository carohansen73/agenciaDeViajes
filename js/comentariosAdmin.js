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
        container.innerHTML += `<td> <span class="usuario"> ${comentario.email} </span>  </td>
        <td> ${comentario.texto} </td>
        <td> <span class="calificacion">  ${comentario.calificacion} 
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" 
            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
            6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 
            4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 
            2.256z"/>
        </svg> </span> </td>
        <td> <button class="eliminar btn btn-danger" data-id="${comentario.id}" >ELIMINAR</button> </td>`;
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