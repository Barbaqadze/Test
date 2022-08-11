var xhr = new XMLHttpRequest();
xhr.open("POST", 'http://85.90.246.239:2222/testread.php', true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

xhr.onreadystatechange = function() { // Call a function when the state changes.
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        // Request finished. Do processing here.
    }
}
xhr.send("handler=localhost");
