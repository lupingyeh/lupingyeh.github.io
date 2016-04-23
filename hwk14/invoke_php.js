function checkusername() {
    var status = document.getElementById("usernamestatus");
    var u = document.getElementById("username").value;
    if (u != "") {
        status.innerHTML = 'checking...';
        var hr = new XMLHttpRequest();
        hr.open("POST", "check_username.php", true);
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        hr.onreadystatechange = function () {
            if (hr.readyState == 4 && hr.status == 200) {
                status.innerHTML = hr.responseText;
            }
        }
        var v = "name2check=" + u;
        hr.send(v);
    }
}