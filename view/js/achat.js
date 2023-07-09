let price = document.getElementById("price");
let taxe = document.getElementById("taxe");
let total = document.getElementById("total");
let title = document.getElementById("title");
let account = document.getElementById("account");
let result;

price.addEventListener("input", calculTotal);
taxe.addEventListener("input", calculTotal);

function calculTotal(){
    if(price.value != "" && taxe.value != "" && price.value>0 && taxe.value>0){
        result = parseFloat(price.value) + (parseFloat(price.value) * parseFloat(taxe.value) / 100);
        total.value = result;
    }
}

const submit = document.getElementById("submit");

submit.addEventListener("click", function(event){
    event.preventDefault();
    if(price.value != "" && taxe.value != "" && title.value != "" && account.value != ""){
    let calculTVA = parseFloat(price.value) * parseFloat(taxe.value) / 100;

        let datas = {
            puAchat: price.value,
            tvaAchat: calculTVA,
            totalAchat: result,
            intituleAchat: title.value,
            compteAchat: account.value
        };

        fetch('datas.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify(datas)
        })
          .then(response => response.json())
          .then(responseData => {
            let newInvoiceId = responseData.invoiceId;
            let newData = {
                puAchat:price.value,
                tvaAchat: calculTVA,
                totalAchat: result,
                intituleAchat: title.value,
                compteAchat: account.value,
                idPiece: newInvoiceId
            };

            fetch('http://127.0.0.1:8000/api/ecritures/achats', {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json'
                },
                body: JSON.stringify(newData)
            })
            .catch(error => {
                console.error('Erreur lors de la requête vers API B:', error);
            });
        })
        .catch(error => {
            console.error('Erreur lors de la requête vers API A:', error);
        });
    }
})