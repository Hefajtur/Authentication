<h1>Hi Partner</h1>
<a href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();" class="dropdown-item notify-item">
    <i class="mdi mdi-logout me-1"></i>
    <span>Logout</span>
</a>
<form action="{{ route('logout') }}" method="post" id="logoutForm">
    @csrf
</form>

<a href="" class="btn float-end">Profile</a>