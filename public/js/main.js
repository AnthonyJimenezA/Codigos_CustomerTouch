$(document).ready(function () {


    function sanitizeInput(input) {
        return input.replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }

    function fetchResults(searchValue = '') {
        $.ajax({
            url: 'app/controllers/search_controller.php',
            type: 'POST',
            data: { search: searchValue },
            success: function (response) {
                try {
                    let data = JSON.parse(response);
                    let tableBody = $('#resultsTable tbody');
                    tableBody.empty();

                    if (data.length === 0) {
                        tableBody.append(`
                            <tr>
                                <td colspan="4" class="text-center">No se encontraron datos</td>
                            </tr>
                        `);
                    } else {
                        $.each(data, function (index, item) {
                            tableBody.append(`
                                <tr>
                                    <td>${item.CATEGORIA}</td>
                                    <td>${item.CODIGO}</td>
                                    <td><code>${item.ESTADO}</code></td>
                                    <td>${item.DESCRIPCION}</td>
                                </tr>
                            `);
                        });
                    }
                } catch (e) {
                    console.error('Error al parsear JSON:', e);
                }
            },
            error: function (xhr, status, error) {
                console.error('Error al Obtener los Datos:', error);
            }
        });
    }


    fetchResults();


    $('#searchInput').keyup(function () {
        let searchValue = $(this).val();
        searchValue = sanitizeInput(searchValue);//Sanitizar la entrada contra XSS
        fetchResults(searchValue);
    });

});
