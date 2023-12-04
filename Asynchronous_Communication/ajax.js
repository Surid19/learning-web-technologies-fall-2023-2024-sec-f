function checkEmailAvailability(email) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                document.getElementById("emailAvailability").innerHTML = xhr.responseText;
            } else {
                console.error('Error checking email availability.');
            }
        }
    };

    xhr.open("GET", "check_email_availability.php?email=" + email, true);
    xhr.send();
}
