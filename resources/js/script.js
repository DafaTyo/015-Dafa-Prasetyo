function togglePasswordVisibility() {
    var passwordField = document.getElementById('password');
    var passwordFieldType = passwordField.getAttribute('type');

    // Toggle the type attribute of the password field between 'password' and 'text'
    if (passwordFieldType === 'password') {
        passwordField.setAttribute('type', 'text');
        document.getElementsByClassName('opened-eye')[0].style.display = 'block';
        document.getElementsByClassName('closed-eye')[0].style.display = 'none';
    } else {
        passwordField.setAttribute('type', 'password');
        document.getElementsByClassName('opened-eye')[0].style.display = 'none';
        document.getElementsByClassName('closed-eye')[0].style.display = 'block';
    }
}


export { togglePasswordVisibility };