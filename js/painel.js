function chama(codigo) {

    var textoId = "opcao('" + codigo + "')";
    console.log(textoId);
    var opcaoSelect = document.getElementById(textoId).value;
    if (opcaoSelect == "editar") {
        window.open("editarProduto.php?codigo=" + codigo, '_blank');


    }
   
    if (opcaoSelect == "delete") {
        if (confirm("Tem certeza que deseja apagar?")) {

            const xhr = new XMLHttpRequest();

            xhr.open('POST', 'delete.php?codigo=' + codigo, true);
            xhr.setRequestHeader("Content-type", "application/json");

            xhr.onreadystatechange = () => {

                if (xhr.readyState == 4) {

                    if (xhr.status == 200) {
                        console.log(xhr.responseText);
                    }
                    else {
                        console.log(xhr.responseText);
                    }
                }
            }

            xhr.send();

            document.location.reload(true);
        }
    }

}
