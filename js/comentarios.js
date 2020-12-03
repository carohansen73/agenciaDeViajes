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
        container.innerHTML += `<td> <span class="usuario"> ${comentario.email} </span>  </td>
        <td> ${comentario.texto} </td>
        <td> <span class="calificacion">  ${comentario.calificacion} 
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" 
            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
            6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 
            4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 
            2.256z"/>
        </svg> </span> </td>`;
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