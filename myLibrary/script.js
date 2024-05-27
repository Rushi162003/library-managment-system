const login = document.getElementById('login'),
        loginBtn = document.getElementById('login-btn'),
        loginClose = document.getElementById('login-close')
    /* Login show */
    loginBtn.addEventListener('click', () => {
        login.classList.add('show-login')
    })

    /* Login hidden */
    loginClose.addEventListener('click', () => {
        login.classList.remove('show-login')
    })

    const loginSignupBtn = document.getElementById('signup-btn-login'),
        logsign = document.getElementById('signup-btn-login')

    loginSignupBtn.addEventListener('click', () => {
        signup.classList.add('show-signup')
    })

    logsign.addEventListener('click', () => {
        login.classList.remove('show-login')
    })

    const signup = document.getElementById('signup'),
        signupBtn = document.getElementById('signup-btn'),
        signupClose = document.getElementById('signup-close')
    /* signup show */
    signupBtn.addEventListener('click', () => {
        signup.classList.add('show-signup')
    })

    /* signup hidden */
    signupClose.addEventListener('click', () => {
        signup.classList.remove('show-signup')
    })

    const signupLoginBtn = document.getElementById('login-btn-signup'),
        signupCloseLogin = document.getElementById('login-btn-signup')

    signupLoginBtn.addEventListener('click', () => {
        login.classList.add('show-login')
    })

    signupCloseLogin.addEventListener('click', () => {
        signup.classList.remove('show-signup')
    })

    // Show Admin 
    const admin = document.getElementById('admin'),
        adminBtn = document.getElementById('admin-btn'),
        adminClose = document.getElementById('admin-close')
    /* Login show */
    adminBtn.addEventListener('click', () => {
        admin.classList.add('show-admin')
    })

    /* admin hidden */
    adminClose.addEventListener('click', () => {
        admin.classList.remove('show-admin')
    })
    //     function checkRadio() {

    //         if (document.getElementById('librarian').checked) {
    //             window.open('Librarian1.php');
    //         } else if (document.getElementById('student').checked) {
    //             window.open('');
    //         }
    //     }

    //     function checkRadio1() {
    //         if (document.getElementById('librarian').checked) {
    //             window.open('librarian1.php');
    //         }
    //         else {
    //             window.open('librarian1.php');
    //         }
    // }