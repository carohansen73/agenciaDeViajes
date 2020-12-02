"use strict"

document.addEventListener('DOMContentLoaded', e => {
    let idTour = window.location.pathname.substr(window.location.pathname.lastIndexOf('/') + 1);
    getAll(idTour);

    if (document.querySelector('#form-comentario') != null) {
        document.querySelector('#form-comentario').addEventListener('submit', e => {
            e.preventDefault();
            addComment(idTour);
        });
    }

});

async function getAll(idTour) {
    try {
        //let idTour = window.location.pathname.substr(window.location.pathname.lastIndexOf('/') + 1);
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
    const container = document.querySelector("#comentarios");
    container.innerHTML = '';

    for (let comentario of comentarios) {
        container.innerHTML += `<li class='list-group-item d-flex justify-content-between'> ${comentario.email} | ${comentario.texto} - ${comentario.calificacion} </li>`;
    }

}

async function addComment(idTour) {
    //armo el comentario en un json
    let texto = document.querySelector("#texto").value
    let calificacion = document.querySelector('input[name=inlineRadioOptions]:checked')

    console.log(calificacion)
    if (calificacion == null) {
        document.querySelector("#error").innerHTML = "complete los campos";
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
            getAll(idTour);

        } catch (e) {
            console.log(e);
        }
    }
}