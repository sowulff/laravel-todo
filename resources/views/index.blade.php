<!-- // login formulär -->
<form action="login" method="post">
    @csrf
    <div>
        <label for="email">email</label>
        <input name="email" id="email" type="email" />
    </div>
    <div>
        <label for="password">Password</label>
        <input name="password" id="password" type="password" />
    </div>
    <button type="submit">Login</button>
</form>
