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

        let formData = new FormData();
        formData.append("puVente", price.value);
        formData.append("tvaVente", taxe.value);
        formData.append("totalVente", result);
        formData.append("intituleVente", title.value);
        formData.append("compteVente", account.value);

        fetch("datas.php", {
            method: "POST", 
            body: formData,
        })

    }
})