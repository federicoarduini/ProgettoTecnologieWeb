// // Aggiungi un listener click su tutti i bottoni "Elimina"
// const updateButtons = document.querySelectorAll('.update-btn');
//
// updateButtons.forEach(button => {
//     button.addEventListener('click', function() {
//         var stringaD = document.getElementById("tabella").rows[1].cells[1];
//         var stringaR = document.getElementById("tabella").rows[1].cells[2];
//         var newD = prompt("Inserisci la domanda aggiornata:");
//         // Modifica la riga corrispondente
//         stringaD.innerHTML = newD;
//         var newR = prompt("Inserisci la risposta aggiornata");
//         stringaR.innerHTML = newR
//
//
//     });
// });

const deleteButtons = document.querySelectorAll('.btn-table-delete');

deleteButtons.forEach(button => {
	button.addEventListener('click', function() {
		// Elimina la riga corrispondente
		if (confirm("Vuoi davvero eliminare questa offerta?")){
			const row = button.parentNode.parentNode;
			row.parentNode.removeChild(row)}
		else {
			return true
		}
	});
});
