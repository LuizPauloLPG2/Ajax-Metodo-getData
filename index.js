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
                var id = send[y].id;
                var nome = send[y].nome;
                var email = send[y].email;

                html += "<label>ID: " + id + "</label><br>";
                html += "<label>NOME: " + nome + "</label><br>";
                html += "<label>EMAIL: " + email + "</label><br>";
                html += "----------------------------------------- <br>";
            }
            var popula = document.querySelector("#popula");
            popula.innerHTML = html;
        });
    });
});
