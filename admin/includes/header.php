<div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px; color:#fff;">Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
	
	</div>


	<style>
		/* ===== Top Brand Bar ===== */

.brand {
    background: #2b3d4f;
    padding: 12px 18px;
}

/* logo text */
.brand .logo{
    font-size: 17px !important;
    font-weight: 600;
    letter-spacing: .3px;
	width: 300px;
    color: #fff;
    text-decoration: none;
}

/* menu toggle icon */
.menu-btn{
    font-size: 22px;
    color: #1abc9c;
    cursor: pointer;
    transition: .3s;
}
.menu-btn:hover{
    color:#16e3ba;
    transform: scale(1.15);
}

/* profile menu */
.ts-profile-nav{
    list-style: none;
    margin: 0;
    padding: 0;
}

/* top account item */
.ts-account > a{
    color:#fff;
    display:flex;
    align-items:center;
    gap:8px;
    text-decoration:none;
    padding:6px 14px;
    border-radius:30px;
    background:rgba(255,255,255,.08);
    transition:.3s;
}

/* hover effect */
.ts-account > a:hover{
    background: rgba(26,188,156,.18);
}

/* profile image */
.ts-avatar{
    width:34px;
    height:34px;
    object-fit: cover;
    border-radius:50%;
    border:2px solid #1abc9c;
}

/* dropdown */
.ts-account ul{
    position:absolute;
    right:18px;
    top:55px;
    background:#2c3e50;
    min-width:160px;
    border-radius:8px;
    padding:6px 0;
    box-shadow:0 8px 20px rgba(0,0,0,.3);
    display:none;
    z-index:999;
}

/* dropdown show on hover */
.ts-account:hover ul{
    display:block;
}

/* dropdown items */
.ts-account ul li a{
    display:block;
    padding:9px 15px;
    color:#fff;
    text-decoration:none;
    transition:.25s;
}
.ts-account ul li a:hover{
    background:rgba(26,188,156,.25);
}

/* small animation */
.ts-account ul{
    animation: fadeDown .25s ease;
}

@keyframes fadeDown{
    from{opacity:0; transform:translateY(-10px);}
    to{opacity:1; transform:translateY(0);}
}

	</style>