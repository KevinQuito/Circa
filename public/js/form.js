// Script for changing visibility of form fields based on what type of order engineer chooses

document.getElementById('lteordertype').addEventListener("change", function (e) {
    if (e.target.value === 'New LTE Static IP') {
        document.getElementById('iptype').style.visibility = 'hidden';
        document.getElementById('pnsip').style.visibility = 'visible';
        document.getElementById('customerdiv').style.visibility = 'visible';
        document.getElementById('mobilenumber').style.visibility = 'hidden';
    } else if (e.target.value === 'New LTE Dynamic IP') {
        document.getElementById('iptype').style.visibility = 'visible';
        document.getElementById('pnsip').style.visibility = 'hidden';
        document.getElementById('customerdiv').style.visibility = 'visible';
        document.getElementById('mobilenumber').style.visibility = 'hidden';
    } else if (e.target.value === 'Update Existing LTE') {
        document.getElementById('iptype').style.visibility = 'hidden';
        document.getElementById('pnsip').style.visibility = 'hidden';
        document.getElementById('customerdiv').style.visibility = 'hidden';
        document.getElementById('mobilenumber').style.visibility = 'visible';
    } else if (e.target.value === 'Disconnect LTE') {
        document.getElementById('iptype').style.visibility = 'hidden';
        document.getElementById('pnsip').style.visibility = 'hidden';
        document.getElementById('customerdiv').style.visibility = 'hidden';
        document.getElementById('mobilenumber').style.visibility = 'visible';
    } else if (e.target.value === 'Service Inquiry Only') {
        document.getElementById('iptype').style.visibility = 'hidden';
        document.getElementById('pnsip').style.visibility = 'hidden';
        document.getElementById('customerdiv').style.visibility = 'hidden';
        document.getElementById('mobilenumber').style.visibility = 'hidden';
    }
    
});