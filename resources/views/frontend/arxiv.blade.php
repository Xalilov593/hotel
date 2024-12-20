

dialog{
width:500px;
max-height:700px;
padding:30px 30px 70px 30px;
border:0;
box-shadow:0 0 10px rgba(0,0,0,0.2);
border-radius:5px;
position:relative;
}
dialog .closeLogin{
right: 30px;
}
dialog button{
position:absolute;
top:20px;
right:0;
}
p{
color:#aaa;
padding-bottom:10px;
line-height:2;
font-size:14px;
}





<button data-login="login">Open login</button>

<dialog id="login">
    <div class="booking-text mb-48">
        <h3 class="h-31 light-black mb-16 text-lg-center">Login</h3>
        <button class="closeLogin" data-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <form action="login.html" method="get" class="contact-form form-validate mb-48">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-24">
                    <input type="email" id="e_mail" name="email" class="form-control" placeholder="email@example.com" required="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="password-block mb-24 position-relative">
                    <input type="password" class="form-control password-input" id="passWord" name="password" placeholder="••••••••" required="">
                    <i class="fas fa-eye-slash" id="eye" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
                </div>
            </div>

            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div class="filter-checkbox mb-32">
                        <input type="checkbox" class="ui-checkbox" id="mycheckbox" name="mycheckbox">
                        <label for="mycheckbox" class="h-18 dark-gray">Remember me</label>
                    </div>
                    <a href="" class="color-primary">Forget Password?</a>
                </div>
                <button type="submit" class="cus-btn center w-100 mb-32">Login</button>
                <div class="text-end">
                    <p class="h-18 light-black">Don't have an account?<a href="register.html" class="color-primary">&nbsp;Signup</a></p>
                </div>
            </div>

        </div>
    </form>

</dialog>






document.querySelectorAll("[data-login]").forEach(button => {
button.addEventListener("click", ()=> {
const login = document.querySelector(`#${button.dataset.login}`);
login.showModal();

document.body.style.overflow = "hidden";
document.documentElement.style.overflow = "hidden";

login.querySelector(".closeLogin").addEventListener("click", () => {
login.close();
document.body.style.removeProperty("overflow");
document.documentElement.style.removeProperty("overflow");
})
})
})
