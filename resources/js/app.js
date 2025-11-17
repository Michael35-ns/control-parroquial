import Swal from "sweetalert2";
window.Swal = Swal;

document.addEventListener("DOMContentLoaded", function () {
    if (window.successMessage) {
        Swal.fire({
            icon: "success",
            title: "¡Éxito!",
            text: window.successMessage,
            toast: true,
            position: "bottom-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        });
    }

    const botonesEdicion = document.querySelectorAll('.btn-confirmar-edicion');
    botonesEdicion.forEach(boton => {
        boton.addEventListener('click', function() {
            const formId = this.getAttribute('data-form-id');
            
            Swal.fire({
                title: "¿Estás seguro de editar este bien?",
                text: "Los cambios se guardarán permanentemente.",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, editar",
                cancelButtonText: "Cancelar",
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(formId).submit();
                }
            });
        });
    });
});

document.addEventListener("livewire:initialized", () => {
    Livewire.on("show-alert", (...args) => {
        const outerPayload = args[0] || {};
        const alertData = outerPayload[0] || {};

        if (alertData.type && alertData.message) {
            Swal.fire({
                icon: alertData.type,
                title: alertData.message,
                toast: true,
                position: "bottom-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                customClass: {
                    popup: "animated tada",
                },
            });
        }
    });
});

