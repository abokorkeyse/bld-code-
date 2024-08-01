document.addEventListener("DOMContentLoaded", function() {
    loadRecords();

    document.getElementById("createForm").addEventListener("submit", function(e) {
        e.preventDefault();
        
        const firstName = document.getElementById("first_name").value;
        const lastName = document.getElementById("last_name").value;
        const city = document.getElementById("city").value;
        const phoneNumber = document.getElementById("phone_number").value;
        const gender = document.getElementById("gender").value;
        const bloodType = document.getElementById("blood_type").value;
        const quantity = document.getElementById("quantity").value;
        
        fetch('create.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `first_name=${firstName}&last_name=${lastName}&city=${city}&phone_number=${phoneNumber}&gender=${gender}&blood_type=${bloodType}&quantity=${quantity}`
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            loadRecords();
        });
    });
});

function loadRecords() {
    fetch('read.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById("records").innerHTML = data;
    });
}
