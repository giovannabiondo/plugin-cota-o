
<div>
    <label for="">Cotação de dólar</label>
</div>

<br>

<div>
    <button id="buscar">Buscar</button>
</div>

<div>
    <p>Compra:<span id="compra"></span></p>
    <p>Venda:<span id="venda"></span></p>
    <p>Máximo:<span id="maximo"></span></p>
    <p>Mínimo:<span id="minimo"></span></p>
</div>

<script>
    const cotacao = document.querySelector('#cotacao');

    document.querySelector('#buscar').addEventListener('click', function(){
        const  opcoes = { 
            method:"GET", 
            node:"cors",
            cache:"default"
        }
        fetch(`https://economia.awesomeapi.com.br/json/last/USD-BRL`, opcoes)
        .then(
            response => { response.json()
                .then(data => {
                document.querySelector("#compra").textContent = data['USDBRL']['bid'];
                document.querySelector("#venda").textContent = data['USDBRL']['ask'];
                document.querySelector("#maximo").textContent = data['USDBRL']['high'];
                document.querySelector("#minimo").textContent = data['USDBRL']['low'];
                });
            } 
            )
    });
    </script>