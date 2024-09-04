const form = document.getElementById('login-form');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    const email = document.getElementById('email').value;
    const senha = document.getElementById('senha').value;

    // Aqui você pode adicionar a lógica para autenticar o usuário
    // Por exemplo, você pode fazer uma requisição AJAX para um servidor
    // para verificar se o e-mail e a senha estão corretos

    console.log(`E-mail: ${email}`);
    console.log(`Senha: ${senha}`);
});