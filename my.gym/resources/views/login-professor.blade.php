<!DOCTYPE html>
<html lang="pt BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My.GYM</title>
</head>
<body>
    <form action="{{ route('login.professor.post') }}" method="POST">
    @csrf

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required>

    <label for="password">Senha</label>
    <input type="password" id="password" name="password" required>

    @error('email')
        <p style="color: red;">{{ $mensagem }}</p>
    @enderror

    <button type="submit">Entrar</button>
</form>

</body>
</html>