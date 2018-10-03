$(document).ready(function () {
    $("#sendMessage").on('click', function () {
        var id = this.dataset.id;
        $.ajax({
            url: 'ajax.php',
            data: {
                id: id
            }
        }).done(function (data) {
            send = JSON.parse(data);
            var html = "";
            for (var y = 0; y < send.length; y++) {
                data[y];
                var id = send[y].id_profissional;
                var nome = send[y].nome_profissional;
                var login = send[y].login;

                html += "<label>ID: " + id + "</label><br>";
                html += "<label>NOME: " + nome + "</label><br>";
                html += "<label>LOGIN: " + login + "</label><br>";
                html += "----------------------------------------- <br>";
            }
            var popula = document.querySelector("#popula");
            popula.innerHTML = html;
        });
    });
});
