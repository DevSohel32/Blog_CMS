function togglePassword(passId, iconId) {
    const pass = document.getElementById(passId); // use variable
    const icon = document.getElementById(iconId); // use variable

    if (pass.type === 'password') {
        pass.type = 'text';
        icon.classList.remove('ri-eye-off-line');
        icon.classList.add('ri-eye-line');
    } else {
        pass.type = 'password';
        icon.classList.remove('ri-eye-line');
        icon.classList.add('ri-eye-off-line');
    }
}
