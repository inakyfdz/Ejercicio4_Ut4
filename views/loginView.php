<main>
    <section>
        <h2>Iniciar sesión</h2>

        <form action="login.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?= sanitary($_SESSION['CSRF']) ?>"> <!-- Repasar examen -->
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password"> Contraseña: </label>
            <input  type="password" id="password" name="password" required>

            <button type="submit">Entrar</button>
        </form>
    </section>
</main>