document.querySelector("form").addEventListener("submit", function (e) {
    let username = document.querySelector("input[name='username']").value;
    let password = document.querySelector("input[name='password']").value;

    if (username.length < 3 || password.length < 6) {
        e.preventDefault();
        alert("Username must be at least 3 characters and password at least 6 characters.");
    }
});