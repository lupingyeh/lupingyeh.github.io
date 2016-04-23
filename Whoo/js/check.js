function checkemail() {
    var status = document.getElementById("status");
    var e = document.getElementById("newemail").value;
    if (e != "") {
        status.innerHTML = 'checking...';
        var hr = new XMLHttpRequest();
        hr.open("POST", "check_email.php", true);
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        hr.onreadystatechange = function () {
            if (hr.readyState == 4 && hr.status == 200) {
                status.innerHTML = hr.responseText;
            }
        }
        var v = "email2check=" + e;
        hr.send(v);
    }
}