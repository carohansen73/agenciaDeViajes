document.addEventListener("DOMContentLoaded", iniciar)

function iniciar() {

    "use strict";

    let URL = 'api/comentarios';

    let id = window.location.pathname.substr(window.location.pathname.lastIndexOf('/') + 1);



    function getAllByTour() { //funcion para llamar comentarios de un tour

        fetch(URL + "/" + id, {
                "method": "GET",

            })
            .then(function(response) {

                if (response.status == 200) {

                    response.json().then(comments => {
                        renderComments(comments);
                    }).catch(error => console.log(error))
                } else {
                    let container = document.querySelector("#mensaje");
                    container.innerHTML = `<p> No hay comentarios </p>`
                }
            })

        .catch(function(error) {
            console.log(error)
        })
    }
    getAllByTour();


    function renderComments(comments) {
        let container = document.querySelector("#tarjeta");
        container.innerHTML = '';
        for (let comment of comments) {
            container.innerHTML += `<td>${comment.email}</td>` + `<td>${comment.texto}</td>` + `<td>${comment.calificacion}</td>` + `<td><button class="eliminar" data-id="${comment.id}" >ELIMINAR</button></td>`
        }

        document.querySelectorAll(".eliminar").forEach(boton => {
            boton.addEventListener('click', e => {
                e.preventDefault();
                let id = boton.getAttribute("data-id");
                deleteComment(id);

            })


        })


    }

    document.querySelector('#formComment').addEventListener('submit', function(event) {

        event.preventDefault();

        add();

    });


    function add() {

        let texto = document.querySelector('textarea[name=comentario]').value
        let calificacion = document.querySelector('input[name=inlineRadioOptions]:checked')
        if (calificacion == null) {
            let container = document.querySelector("#mensaje");
            container.innerHTML = `<p class="alert alert-primary"> Faltan Datos </p>`

        } else {
            calificacion = calificacion.value
                //armo la tarea
            let comment = {

                "texto": texto, //agarra el valor ingresado en el input
                "calificacion": calificacion,
                "id_tour": id,

            }

            fetch(URL, {
                    "method": "POST",
                    "headers": { "Content-Type": "application/json" },
                    "body": JSON.stringify(comment)
                })
                .then(response => response.json())
                .then(comment => {
                    getAllByTour();
                })
                .catch(function(error) {
                    console.log(error)
                })
        }

    }


    function deleteComment(id) {

        fetch(URL + "/" + id, {
                "method": "DELETE",

            })
            .then(response => response.json())
            .then(comments => {
                getAllByTour();

            })
            .catch(function(e) {
                console.log(e)
            })


    }








}