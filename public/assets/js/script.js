const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'currencyscoop.p.rapidapi.com',
		// 'X-RapidAPI-Key': 'e104216e8cmsh4f30c37373d54b5p1f9942jsne49cec5e0983'
	}
};


fetch('https://currencyscoop.p.rapidapi.com/latest', options)
    .then(response => response.json())
    .then(response =>{
        console.log(response);
        //Affichage des donnees de devises de l'API sur les quatres premiers elements du Dashboard
        exchange.innerHTML = response.response.rates.GBP;
        exchange1.innerHTML = response.response.rates.XAF;
        exchange2.innerHTML = response.response.rates.EUR;
        exchange3.innerHTML = response.response.rates.XOF;

        //Affichage des donnees de devises de l'API sur le tableau
        eur.innerHTML = response.response.rates.EUR;
        gbp.innerHTML = response.response.rates.GBP;
        xaf.innerHTML = response.response.rates.XAF;
        xof.innerHTML = response.response.rates.XOF;
        ngn.innerHTML = response.response.rates.NGN;
        cad.innerHTML = response.response.rates.CAD;
        jpy.innerHTML = response.response.rates.JPY;
        gbp.innerHTML = response.response.rates.GBP;
        aed.innerHTML = response.response.rates.AED;




    })

