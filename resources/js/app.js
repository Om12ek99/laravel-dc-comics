import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

document.addEventListener('DOMContentLoaded', function() {
    const deleteButton = document.getElementById('delete-button');
    if (deleteButton) {
        deleteButton.addEventListener('click', function(event) {
            event.preventDefault();
            if (confirm('Are you sure you want to delete this comic?')) {
                deleteButton.closest('form').submit();
            }
        });
    }
});