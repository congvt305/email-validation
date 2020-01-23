<div class="main-content">
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form action="{{route('checkEmail')}}" method="post">
        @csrf
        <label for="email-input">Email:</label>
        <input type="text" id="email-input" placeholder="Nhap email" name="email">
        <input type="submit" value="Check">
    </form>
    @if(isset($isEmail))
        Ket qua: {{$isEmail ? 'Dung dinh dang email' : 'Sai dinh dang Email'}}
    @endif
</div>
