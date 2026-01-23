<form method="POST" action="{{ url('/admin/login') }}">
    @csrf

    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">

    <button type="submit">ログイン</button>
</form>
