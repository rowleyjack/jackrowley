
//Add event listner to submit button
document.getElementById('contact').addEventListener('submit', testSelect);


//function to check value of services
function testSelect () {

var selectVal = document.getElementById('services').value;
event.preventDefault();

	if (selectVal === '- Select Service -') {
		alert('must select');
		//document.getElementById('results').innerHTML = 'Please Select A Service';
		document.getElementById('services').focus();
	} else {

	}
}